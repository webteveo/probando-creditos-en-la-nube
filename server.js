// Servidor de desarrollo con recarga automática (sin dependencias).
// Uso: node server.js  →  http://localhost:3000
const http = require('http');
const fs = require('fs');
const path = require('path');

const PORT = process.env.PORT || 3000;
const ROOT = __dirname;

const TYPES = {
  '.html': 'text/html; charset=utf-8',
  '.css': 'text/css; charset=utf-8',
  '.js': 'text/javascript; charset=utf-8',
  '.json': 'application/json',
  '.png': 'image/png',
  '.jpg': 'image/jpeg',
  '.svg': 'image/svg+xml',
  '.ico': 'image/x-icon',
};

// Script que se inyecta en cada HTML para recargar cuando cambia un archivo
const RELOAD_SCRIPT = `
<script>
  new EventSource('/__reload').onmessage = () => location.reload();
</script>`;

const clients = new Set();

const server = http.createServer((req, res) => {
  const url = decodeURIComponent(req.url.split('?')[0]);

  if (url === '/__reload') {
    res.writeHead(200, {
      'Content-Type': 'text/event-stream',
      'Cache-Control': 'no-cache',
      Connection: 'keep-alive',
    });
    res.write('\n');
    clients.add(res);
    req.on('close', () => clients.delete(res));
    return;
  }

  let file = path.join(ROOT, url);
  if (!file.startsWith(ROOT)) {
    res.writeHead(403).end('Prohibido');
    return;
  }
  if (fs.existsSync(file) && fs.statSync(file).isDirectory()) {
    file = path.join(file, 'index.html');
  }

  fs.readFile(file, (err, data) => {
    if (err) {
      res.writeHead(404).end('No encontrado');
      return;
    }
    const ext = path.extname(file);
    res.writeHead(200, { 'Content-Type': TYPES[ext] || 'application/octet-stream' });
    if (ext === '.html') {
      res.end(data.toString().replace('</body>', `${RELOAD_SCRIPT}\n</body>`));
    } else {
      res.end(data);
    }
  });
});

let timer;
fs.watch(ROOT, { recursive: true }, (_event, filename) => {
  if (!filename || filename.startsWith('.git')) return;
  clearTimeout(timer);
  timer = setTimeout(() => {
    console.log(`Cambió ${filename}, recargando...`);
    for (const client of clients) client.write('data: reload\n\n');
  }, 100);
});

server.listen(PORT, () => {
  console.log(`Servidor en http://localhost:${PORT}`);
});
