// Solo en la copia de GitHub Pages: no hay PHP para procesar los formularios,
// así que al enviarlos se abre WhatsApp con los datos cargados como mensaje.
(function () {
  var numero = window.SITIO_ESTATICO_WHATSAPP;
  if (!numero) return;

  var ETIQUETAS = { nombre: 'Nombre', email: 'Email', telefono: 'Teléfono', servicio: 'Servicio', calificacion: 'Calificación', mensaje: 'Mensaje' };

  document.addEventListener('submit', function (e) {
    var form = e.target;
    var action = form.getAttribute('action') || '';
    var titulo;
    if (/contacto\/enviar$/.test(action)) titulo = 'Hola! Les escribo desde la web:';
    else if (/resena\/enviar$/.test(action)) titulo = 'Hola! Quiero dejar mi opinión sobre el servicio:';
    else return;

    e.preventDefault();
    if (!form.reportValidity()) return;
    var lineas = [titulo];
    new FormData(form).forEach(function (valor, campo) {
      valor = String(valor).trim();
      if (valor && valor !== '0' && ETIQUETAS[campo]) lineas.push(ETIQUETAS[campo] + ': ' + valor);
    });
    window.open('https://wa.me/' + numero + '?text=' + encodeURIComponent(lineas.join('\n')), '_blank', 'noopener');
  });

  // Mensaje precargado por ?msg= (en el servidor lo hace PHP)
  var msg = new URLSearchParams(location.search).get('msg');
  var area = msg && document.querySelector('.contacto__form textarea[name="mensaje"]');
  if (area && !area.value) area.value = msg;
})();
