# 00 — Economía y estrategia de Rank & Rent en Uruguay

> Informe transversal (complementa las fichas por nicho). Fecha: 4-oct-2026.

## 0. Cómo leer la evidencia (importante)

En esta sesión la investigación estuvo **muy limitada**:
- El **cupo de búsquedas web compartido de la sesión se agotó** (200/200) después de unas 15 búsquedas propias. Las demás búsquedas las consumieron los agentes de los nichos.
- El proxy de salida **bloqueó WebFetch** para casi todos los dominios (datareportal.com, mercadolibre.com.uy, elobservador.com.uy, homesolution.net, manorapido.com, neowyze.tech, agencias.uy, ideasweb.uy, hostingmontevideo.com, ine.gub.uy, impo.com.uy, gub.uy, support.google.com, statcounter, wikipedia). No pude abrir páginas: solo leí los fragmentos que devuelve el buscador.

Por eso cada dato lleva una etiqueta:
- **[V]** viene de una búsqueda de esta sesión, con la fuente citada.
- **[C]** es conocimiento previo del analista que no se pudo verificar hoy. Es un orden de magnitud razonable, pero **hay que confirmarlo** antes de usarlo en una decisión o en un contrato (la última columna de la tabla 8 dice cómo).

---

## 1. Mercado digital

| Indicador | Dato | Fuente |
|---|---|---|
| Penetración de internet | **93 %** de la población (2025) | [V] DataReportal, Digital 2025/2026 Uruguay (fragmento de búsqueda) |
| Conexiones móviles | 6,59 M (192,6 % de la población, inicio de 2024); ~4 M de banda ancha móvil activa | [V] ts2.tech, citando DataReportal |
| Hogares con banda ancha | ~88 %; fibra masiva de ANTEL con velocidades medias de más de 100 Mbps | [V] ts2.tech |
| Uso diario | casi **7 h/día**, máximo histórico; casi todos los mayores de 6 años usan internet; 2 de cada 3 probaron IA | [V] Perfil del Internauta Uruguayo 2025 (Grupo Radar), vía Telenoche, Ámbito y En Perspectiva |
| Redes | En 2025 **Instagram superó a Facebook** por primera vez; TikTok llega a ~la mitad de los usuarios de FB/IG | [V] Grupo Radar 2025 |
| WhatsApp | **98 %** lo usa como chat principal (dato de 2021; sigue siendo el canal de contacto por defecto) | [V] Grupo Radar 2021, vía búsqueda |
| Cuota de buscadores | **Google 93,1 %**, Bing 5,7 % (jun-2026). En móvil Google llega a ~95,8 % | [V] StatCounter Uruguay |

**Qué implica para rank & rent**
- Casi toda la demanda de servicios que pasa por un buscador pasa por **Google, sobre todo desde el móvil**. El sitio tiene que estar pensado para el móvil y tener **botón de WhatsApp + llamada** como CTA principal. En Uruguay la gente escribe por WhatsApp antes que llamar o completar un formulario [C, coherente con el 98 % de WhatsApp].
- **Google Maps / Perfil de Empresa (GBP)**: no encontré estadísticas de Uruguay. Por la cuota de Google, el "map pack" se lleva gran parte de los clics en búsquedas "cerca de mí" o con barrio [C]. Esto pesa mucho en el modelo (ver §5 y §7).
- **Mercado Libre Servicios**: tiene una sección de clasificados de servicios con modelo propio: **precio fijo mensual por aviso y sin comisión por venta**, con 18 categorías y 120 subcategorías (Hogar y construcción, Mantenimiento, Belleza, Cursos, etc.) [V: mercadolibre.com.uy/institucional/hacemos/vis-mercado-libre; news.mercadolibre.com]. En muchos rubros del hogar, ML aparece en la primera página de Google Uruguay [C; los agentes de nicho lo vieron en sus SERPs]. Como competidor SEO es débil (son listados genéricos), pero es el **canal pago que el pequeño proveedor ya conoce**.
- **Facebook Marketplace / grupos de barrio, Instagram**: son muy usados para oficios y servicios estéticos [C]. Los datos de Radar (IG por encima de FB) indican que IG es el escaparate de los rubros visuales (reformas, jardines, eventos, estética).
- **Directorios**: Páginas Amarillas Uruguay (paginasamarillas.com.uy) y la guía de ANTEL siguen existiendo, pero pesan poco en la decisión de compra [C, sin verificar]. No pude verificar "guiamovil" ni "Uruguay Emprendedor" como directorios de servicios relevantes. Los portales de leads se tratan en §3.

---

## 2. Costos: Google Ads, agencias, dominios y hosting

### 2.1 Google Ads
- El CPC en Uruguay es **~74 % menor que el promedio de EE. UU.** [V, buhomedia.com.ar]. En Latinoamérica el CPC promedio ronda **USD 0,30–2** (≈ USD 1,20 de media) [V, reactivaonline / tusclicks].
- No encontré CPC por rubro para Uruguay. **Estimación [C]**:

| Tipo de rubro | CPC estimado |
|---|---|
| Oficios del hogar | USD 0,20–0,80 |
| Rubros caros (mudanzas, construcción, abogados, seguros, salud privada) | USD 0,80–2,50 |
| Pocos anunciantes | Puede ser más barato |

  Validar con el Planificador de palabras clave de una cuenta de Ads (gratis, pide una cuenta creada).
- **Lectura**: con un CPC de USD 0,50 y un 10 % de conversión, un lead pagado cuesta **~USD 5**. Un alquiler de USD 100/mes "compite" con unos USD 100 de Ads, que darían ~20 leads. **El sitio alquilado tiene que entregar más que eso o costar menos**, o venderse como "sin manejar Ads" (comodidad). Esta es la referencia de precio que puede usar un inquilino informado.

### 2.2 Agencias SEO y de marketing en Uruguay [V: neowyze.tech/blog/cuanto-cuesta-el-seo-en-uruguay, vía búsqueda]

| Nivel | Precio mensual |
|---|---|
| SEO básico (freelancer) | UYU 8.000–20.000/mes (≈ USD 200–500) |
| SEO intermedio (agencia) | UYU 20.000–50.000/mes (≈ USD 500–1.250) |
| SEO avanzado (agencia especializada) | UYU 50.000–150.000/mes |
| Estrategia integral para una PYME | USD 600–3.500/mes |

- Agencias con presencia SEO: El Cielo Digital, Nibiru, Evox (modelo de suscripción), Kliks Digital, Otero SEO, Lucio Laria [V: agencias.uy, sortlist].

**Conclusión**: el piso del mercado para "aparecer en Google" con un freelancer es **~USD 200/mes, sin garantía de resultados**. Un alquiler de **USD 100–200/mes con resultados ya logrados** está claramente por debajo de eso. Es el argumento de venta.

### 2.3 Dominios

| Extensión | Registro / registrador | Precio |
|---|---|---|
| **.uy** | Registro: RAU / SeCIU (Universidad de la República), nic.uy, habilitado desde 2012 | Desde **USD 9,85/año** (HostingMontevideo, registrador acreditado) y **USD 9,90 + IVA** (Netuy) [V]. Un fragmento citaba **USD 25** para el registro directo en nic.uy, primer año incluido [V, sin confirmar] |
| **.com.uy** | Administra **ANTEL** (nic.com.uy / dominios ANTEL, pago con ADINET Pagos o en la factura de ANTEL) | **UYU 485 IVA incluido** (≈ USD 12) directo en ANTEL [V, domisfera]. Por revendedores: USD 42,06 + IVA (Netuy) y ~USD 45 (HostingMontevideo) [V] |

- **Recomendación**: comprar **.com.uy directo en ANTEL** (el más barato) o **.uy en un registrador acreditado** (~USD 10–12). Un .com.uy da más "confianza local". Un .uy es más corto y suele estar más libre para EMDs.

### 2.4 Hosting [C]
- Hosting compartido local (Netuy, HostingMontevideo, Montevideo COMM, etc.): **USD 5–15/mes**. Internacional (Hostinger, Neolo/DonWeb argentinos): **USD 3–8/mes**. Un VPS de USD 5–10/mes alcanza para **20–50 sitios PHP** como los de la plantilla.
- Para el SEO local no hace falta un servidor en Uruguay: alcanzan el dominio .uy, el contenido local y las señales de NAP (nombre, dirección, teléfono).

### 2.5 Costo marginal por sitio [estimación]

| Concepto | Costo |
|---|---|
| Dominio | ~USD 1–4/mes |
| Hosting prorrateado | ~USD 1/mes |
| Número de teléfono / WhatsApp (chip prepago de ANTEL, Claro o Movistar) | ~USD 5/mes [C] |
| **Total** | **< USD 10/mes por sitio**, más tu tiempo de contenido y links |

El margen de un sitio alquilado a USD 100–200 es **> 90 %**.

---

## 3. ¿Existe rank & rent o generación de leads en Uruguay?

**Portales de leads o marketplaces de servicios con presencia en Uruguay [V]:**

| Plataforma | Presencia en Uruguay | Modelo y notas |
|---|---|---|
| **Home Solution** (homesolution.net/uy) | Llegó en 2016; ~**1.950 profesionales registrados** en Montevideo y Maldonado | El cliente arma una consulta (tipo de trabajo, urgencia). Publica **"precios de referencia"** por rubro (electricista, sanitario, técnico de electrodomésticos). No pude ver cuánto cobra al profesional (el modelo típico son créditos por presupuesto) [C] |
| **ManoRapido Uruguay** (manorapido.com/uy) | Dice operar en **32 ciudades** | Plomeros, electricistas, limpieza; profesionales "verificados" |
| **Pimer** (pimer.app) | App uruguaya | Conecta prestadores con clientes cercanos; los profesionales publican, gestionan trabajos y cobran |
| **PresupuestApp** | — | No es un portal de leads: es una herramienta de IA para armar presupuestos con precios del mercado uruguayo. Muestra que hay un ecosistema de software para oficios |
| **Mercado Libre Servicios** | Uruguay | Clasificados con **pago fijo mensual por aviso**: es el "alquiler de visibilidad" que el proveedor ya acepta |
| **Habitissimo** | **Ojo**: las páginas "…/entre-rios/uruguay" son de **Concepción del Uruguay (Argentina)** | **No** encontré una operación de Habitissimo en Uruguay (el país). No usarlo como referencia |
| **Zolvers** | Startup argentina (2013) de servicio doméstico, cuidados y reparaciones | **No** encontré evidencia de que opere en Uruguay |

**Lo que sigue sin confirmar:**
- **Cuánto pagan los negocios por lead en Uruguay** no aparece publicado.
- Por referencias regionales [C], los marketplaces de presupuestos cobran el equivalente a **USD 1–10 por contacto** en oficios y **USD 10–40** en reformas, mudanzas y construcción.
- **EMDs .uy que parecen sitios de leads**: los agentes de nicho vieron dominios tipo `servicio+ciudad.uy` (por ejemplo, el proxy registró intentos a fletesmontevideo.uy y servihogar.com.uy). Que existan EMDs genéricos indica que **alguien ya hace SEO de dominio exacto en Uruguay**, aunque en general son sitios del propio proveedor y no de un rentista. **No encontré operadores declarados de "rank & rent" en Uruguay**: el modelo existe en la práctica pero no tiene nombre ni comunidad local [C].

**Conclusión**: el mercado ya acepta **pagar por visibilidad**, a precio fijo (ML Servicios, Páginas Amarillas) o por presupuesto (Home Solution y similares). Lo que **no** hay es mucha competencia de rentistas profesionales. Eso es una oportunidad, pero también significa que **el inquilino no conoce el modelo** y hay que explicárselo como "te paso clientes por WhatsApp".

---

## 4. Disposición a pagar de las PYMEs uruguayas

- **Referencias de precio que el inquilino ya maneja**:
  - Un aviso en ML Servicios: pago mensual fijo [V]. El monto exacto no se pudo verificar; recuerdo cifras del orden de **UYU 500–2.000/mes** por aviso destacado [C].
  - Un freelancer SEO: UYU 8.000+/mes [V].
  - Ads manejado por una agencia: **fee de USD 100–300/mes más la inversión** [C].
- **Ingresos del cliente final [C]**:
  - Salario mínimo nacional 2025 ≈ UYU 23.600.
  - Ingreso mediano por hogar en Montevideo del orden de UYU 70–90 mil.
  - Tipo de cambio ≈ **UYU 40 por USD** (2025–26).
  - Por eso **USD 100 (≈ UYU 4.000) es dinero relevante para un oficio unipersonal**, pero **menor** para una empresa de 3–10 personas (mudanzas, climatización, impermeabilización, construcción, control de plagas, servicios B2B).
- **Formalidad [C]**:
  - Muchos oficios trabajan como **monotributistas** o en **informalidad parcial**. Las empresas medianas son unipersonales en el régimen general o SRL/SAS, con **facturación electrónica (CFE) obligatoria** para todos los contribuyentes de IVA desde 2022–2023.
  - Implicancia: para cobrar alquiler conviene apuntar a **inquilinos formales que puedan deducir el gasto**. Además, el inquilino informal es el que más rota y el que más deja de pagar.
- **USD vs UYU [C]**:
  - En servicios de ticket alto (obras, mudanzas internacionales, piscinas, paneles solares, inmobiliario) **es habitual cotizar en USD**.
  - En oficios cotidianos se cotiza en UYU.
  - **Recomendación**: fijar el alquiler en USD para inquilinos de ticket alto y en UYU, ajustado por IPC o UI cada 6–12 meses, para los oficios.

---

## 5. Aspectos legales

> No es asesoramiento legal ni contable. Validar con un contador y un abogado uruguayos. Las normas citadas son conocimiento previo [C]; los textos están en impo.com.uy.

### 5.1 Perfil de Empresa de Google (GBP)
- Las políticas de Google (globales, también en Uruguay) exigen que el perfil lo cree **el propio negocio**, con atención presencial en una dirección real o como **"empresa de área de servicio"** con la dirección oculta.
- Prohíben **oficinas virtuales, direcciones falsas y perfiles de generadores de leads**.
- La verificación es cada vez más por **video** (mostrar el local, herramientas o vehículo con rótulo, documentación).
- **Consecuencia**: el rentista **no debe crear perfiles con direcciones inventadas**. Hay riesgo de suspensión y es contrario a las políticas.
- **Modelo correcto**:
  1. El sitio rankea en orgánico, sin GBP propio.
  2. Si hay inquilino, se **conecta el sitio al GBP real del inquilino**, como su web, y el rentista puede quedar como "administrador".
  3. Al terminar el contrato, el inquilino conserva su GBP y el rentista conserva el sitio. Hay que dejarlo **por escrito**.

### 5.2 Defensa del consumidor: Ley 17.250 y Decreto 244/000
- La **publicidad engañosa** está prohibida.
- La **oferta es vinculante**: si el sitio publica precios ("desde $X"), hay que cumplirlos o indicar condiciones.
- El sitio debe identificar al **proveedor real** que presta el servicio. Conviene un pie de página tipo: "Servicio prestado por [Razón social], RUT …, operado por [tu empresa]".
- Evitar decir "somos la empresa X" si el sitio es tuyo y no tiene inquilino. Usar formulaciones neutras ("te conectamos con un técnico…").

### 5.3 Protección de datos: Ley 18.331, Decreto 414/009, Ley 19.670 arts. 37–40 y Decreto 64/020
- Un formulario o un chat que capta **nombre, teléfono y dirección** es un tratamiento de datos personales. Hace falta:
  - **Consentimiento informado**: casilla y texto que digan quién es el responsable, para qué se usan los datos y que **se comparten con el proveedor que presta el servicio**.
  - Una **política de privacidad**.
  - Mecanismo para los derechos de **acceso, rectificación y supresión**.
- **Inscribir la base de datos** ante la **URCDP** (Unidad Reguladora y de Control de Datos Personales, AGESIC).
- Notificar las brechas de seguridad.
- **Ceder datos al inquilino** requiere consentimiento o base legal. El texto del formulario debe decirlo expresamente.

### 5.4 Cómo facturar el alquiler (opciones típicas) [C]

| Figura | Cuándo sirve | Notas |
|---|---|---|
| **Monotributo** (Ley 18.083) | Al inicio, con ingresos bajos | Tiene topes de ingresos y restricciones de actividad y de venta a empresas. Puede **no aplicar** a "servicios de publicidad o desarrollo web a empresas": **consultar con un contador** |
| **Unipersonal en el régimen general, "literal E"** (IVA mínimo, IRAE exento si los ingresos anuales están por debajo de ~305.000 UI) | Es la vía más usada por freelancers de servicios a empresas | Factura electrónica (CFE), aportes a BPS. Costo fijo de aprox. UYU 6–10 mil/mes entre IVA mínimo, BPS y FONASA (verificar) |
| **SAS** (Ley 19.820, 2019) | Para escalar o asociarse | Más costo contable; limita la responsabilidad |

- Otras opciones: cobrar desde el exterior (Stripe, Payoneer) solo si el rentista reside fuera. Si **reside en Uruguay**, los ingresos se gravan igual.
- Contrato: llamarlo **"servicio de publicidad digital y generación de contactos"**, no "alquiler", con mes a mes, preaviso de 30 días y cláusula de exclusividad por nicho y zona.

---

## 6. Geografía de la demanda

### 6.1 Población por departamento (Censo 2023, INE) [C, verificar en ine.gub.uy]

| Departamento | Habitantes (aprox.) | Comentario |
|---|---|---|
| **Montevideo** | ~1,30 M | ~38 % del país; aquí está el grueso de la demanda y de los inquilinos |
| **Canelones** | ~0,61 M | Incluye **Ciudad de la Costa** (~110 mil, clase media y media-alta en crecimiento), Las Piedras, Pando, Costa de Oro |
| **Maldonado** | ~0,21 M | **Punta del Este**, Maldonado y San Carlos. Población estacional de varias veces la permanente en enero y febrero; poder adquisitivo alto y propietarios extranjeros (AR, BR) |
| Salto | ~0,14 M | Litoral, termas |
| Colonia | ~0,13 M | Turismo, chacras |
| Paysandú, San José, Rivera | ~0,10–0,12 M cada uno | Rivera: frontera con Brasil, comercio |
| Resto (12 deptos.) | 25–95 mil cada uno | Rocha: costa estacional (La Paloma, Punta del Diablo) |

**Total ≈ 3,44 M.** El área metropolitana (Montevideo, sur de Canelones y este de San José) ronda **1,9–2,0 M**.

### 6.2 Montevideo: barrios grandes y poder adquisitivo [C, Censo 2011 y Encuesta Continua de Hogares del INE]
- **Más poblados**: Pocitos (~70 mil, el mayor), Cordón, Unión, Cerro, Buceo, Malvín, La Blanqueada y Tres Cruces, Colón, Piedras Blancas.
- **Ingreso alto**: **Carrasco y Carrasco Norte, Punta Gorda, Pocitos, Punta Carretas, Malvín, Buceo, Parque Batlle, Parque Rodó, Prado (casas grandes)**.
- **Zonas de casas** (más demanda de mantenimiento: techos, piscinas, jardines, portones, humedad): Carrasco, Punta Gorda, Malvín, Prado, Sayago. También **Ciudad de la Costa** (Solymar, Lagomar, El Pinar, Shangrilá), **Barra de Carrasco** y los barrios privados de la Ruta Interbalnearia y Canelones.
- **Zonas de apartamentos** (más demanda de servicios dentro de la unidad, comunes de edificio, administradoras): Pocitos, Punta Carretas, Cordón, Centro, Tres Cruces, Parque Batlle.

### 6.3 Prioridad geográfica recomendada
1. **Montevideo + Ciudad de la Costa**, como un solo mercado, para nichos del hogar y B2B. Las landings por barrio van solo para los ~10 barrios de ingreso alto o medio-alto.
2. **Punta del Este / Maldonado** para nichos de propiedades de verano: piscinas, jardinería, mantenimiento y cuidado de casas, limpieza de fin de temporada, alarmas y seguridad, paneles solares. Allí el ticket y el pago en USD compensan la estacionalidad.
3. **Nacional (sin ciudad)** para B2B, servicios remotos y rubros con pocos proveedores (habilitaciones, trámites, certificaciones, equipos industriales).
4. Capitales del interior (Salto, Paysandú, Rivera, Colonia, Tacuarembó): **SERPs casi vacías pero muy pocos inquilinos**. Sirven para nichos de ticket alto y como "páginas de ciudad" dentro de un sitio nacional, no como sitios propios.

---

## 7. Modelo recomendado

### 7.1 Formas de cobro

| Modelo | Pros | Contras | Cuándo usarlo |
|---|---|---|---|
| **Pago por lead** (UYU 200–600 en oficios; USD 10–30 en ticket alto) [C] | Fácil de vender a quien desconfía; prueba el valor | Discusiones sobre qué cuenta como "lead"; hay que medir llamadas y WhatsApp | **Para entrar**: primer y segundo mes con un nuevo inquilino |
| **Alquiler fijo mensual** | Ingreso previsible, sin conflictos de medición | Más difícil de vender sin historial | **Una vez que hay 2–3 meses de leads demostrados** |
| **Comisión por trabajo cerrado** (5–10 %) | Alinea incentivos en ticket alto | Imposible de auditar; dependés de la honestidad del inquilino | Solo con rubros de ticket muy alto e inquilinos de confianza |
| **Híbrido** (fijo bajo + extra por lead por encima de N) | Equilibra riesgo | Más complejo | Nichos con mucha variación estacional |

### 7.2 Precios razonables en Uruguay [estimación a partir de §2 y §4]

| Tipo de inquilino | Alquiler mensual |
|---|---|
| Oficios unipersonales | **USD 60–120 (UYU 2.500–5.000)** |
| Empresas chicas de ticket medio (fumigación, climatización, mudanzas, impermeabilización, tapicería, vidrios) | **USD 100–250** |
| Nichos de ticket alto o B2B (construcción, piscinas, solar, ascensores, habilitaciones de bomberos, abogados) | **USD 200–500** |

- Ancla de venta: "**menos que un freelancer SEO (UYU 8.000+) y sin gastar en Ads**".

### 7.3 ¿Cuántos sitios hacen falta?
- Suposiciones [C]: alquilar el **40–60 %** de los sitios posicionados (pocos inquilinos por nicho, rotación) a un precio medio de USD 150.
  - Para **USD 1.000/mes** hacen falta ~7 alquilados, es decir **12–18 sitios construidos**.
  - Para **USD 3.000/mes**, ~35–50 sitios.
- **Mejor estrategia**: pocos **sitios por nicho con varias zonas** (por ejemplo, un sitio "fumigaciones" para Montevideo + Costa + Punta del Este, con landings por zona) y alquilar **por zona** a distintos inquilinos. Así se multiplica el número de inquilinos posibles con el mismo activo.

### 7.4 Plazo realista de posicionamiento [C]

| Nivel de competencia | Plazo para el top 3 |
|---|---|
| Baja (SERP de Facebook, ML, directorios, Wix viejos) | **2–4 meses** con dominio .uy nuevo, contenido local completo y algunas citas (directorios, ML, redes) |
| Media (algún competidor con SEO real) | **4–8 meses** |
| Alta (oficios obvios en Montevideo: cerrajero, sanitario, electricista) | **9–18 meses** o nunca; no conviene |

- Ventaja de Uruguay: el **bajo volumen de contenido en español local** hace que la plantilla PHP (servicio × barrio, schema, blog) sea **más completa que la mayoría de los competidores**.
- **Desventaja**: el volumen de búsqueda es pequeño. Un nicho puede tener **decenas, no cientos**, de búsquedas mensuales por keyword.

### 7.5 Riesgos

| Riesgo | Detalle | Mitigación |
|---|---|---|
| **Mercado chico** | Pocas búsquedas por nicho | Medir con Search Console antes de prometer leads |
| **Pocos inquilinos por nicho y zona** | Pocos proveedores; en el interior, a veces 1 o 2 | Elegir nichos con 10+ proveedores en el área |
| **Map pack** | Sin GBP propio, el sitio compite solo en orgánico, y el map pack se queda con muchos clics locales | Integrarse con el GBP del inquilino (§5.1) |
| **Informalidad y morosidad** | Inquilinos informales rotan y dejan de pagar | Cobro adelantado, débito o transferencia; desvío del número al rentista si no paga |
| **Comunidad chica / reputación** | En Uruguay "todo el mundo se conoce": un rentista que "cambia de inquilino" puede quemar el nicho | Transparencia, exclusividad por nicho y zona, contratos claros |
| **Legal** | Datos personales (Ley 18.331) y publicidad engañosa (Ley 17.250) | Políticas de privacidad, consentimiento, identificación del prestador |
| **Tipo de cambio** | El inquilino factura en UYU | Precios en UYU ajustables, o USD solo en ticket alto |
| **Algoritmo e IA** | AI Overviews y respuestas directas reducen clics en consultas informativas | Las consultas transaccionales y urgentes ("… urgente", "… precio", "… cerca") siguen dando llamadas |

### 7.6 Hoja de ruta sugerida
1. Elegir **3–5 nichos** de ticket medio o alto con SERPs débiles (salen de las fichas por nicho).
2. Lanzar un sitio por nicho con landings para Montevideo, Costa y Punta del Este. Instalar **un número de WhatsApp propio por sitio** y medir con Search Console + registro de llamadas.
3. Desde el mes 2–3, con los primeros leads: **reenviar leads gratis 2–4 semanas** a 2–3 candidatos y después ofrecer un **pago por lead**. Al tercer mes, **pasar a alquiler fijo**.
4. Reinvertir en más zonas y nichos. Registrar la unipersonal (literal E) cuando haya un primer cobro recurrente.

---

## 8. Datos que conviene verificar antes de decidir

| Dato | Dónde verificarlo |
|---|---|
| Costo exacto de publicar en **ML Servicios Uruguay** | mercadolibre.com.uy/tarifas_servicios |
| Modelo de cobro al profesional en **Home Solution** y **ManoRapido** | Registrarse como profesional |
| CPC por keyword | Planificador de palabras clave de Google Ads, ubicación Uruguay |
| Población por departamento y barrio | INE: Censo 2023 (ine.gub.uy) |
| Topes vigentes de monotributo y literal E; costo de BPS | DGI / BPS, o un contador |
| Requisitos de inscripción de bases de datos | URCDP (gub.uy/urcdp) |

---

## Fuentes (consultadas vía buscador en esta sesión)
- DataReportal — Digital in Uruguay: https://datareportal.com/digital-in-uruguay ; https://datareportal.com/reports/tag/Uruguay
- ts2.tech — Internet Access in Uruguay: https://ts2.tech/en/internet-access-in-uruguay-the-quiet-digital-revolution-reaching-the-sky/
- Grupo Radar, Perfil del Internauta Uruguayo 2025: https://enperspectiva.uy/en-perspectiva-programa/perfil-del-internauta-uruguayo-2025-con-alain-mizrahi-grupo/ ; https://www.telenoche.com.uy/ciencia-y-tecnologia/uruguayos-se-conectan-casi-7-horas-dia-internet-n5362222 ; https://www.ambito.com/uruguay/cuantas-horas-dia-pasan-internet-los-os-n5934670 ; https://shop.gruporadarllc.com/productos/9-el-perfil-del-internauta-uruguayo-2025-modulo-empresas.html
- Grupo Radar 2021 (WhatsApp, redes): https://www.busqueda.com.uy/Secciones/Casi-60-de-los-uruguayos-considera-que-tiene-una-dependencia-significativa-o-total-a-las-redes-sociales-segun-encuesta-uc51200
- StatCounter Uruguay: https://gs.statcounter.com/search-engine-market-share/all/uruguay ; https://gs.statcounter.com/search-engine-host-market-share/mobile/uruguay
- Dominios: https://www.hostingmontevideo.com/dominios-uruguay/ ; https://www.hostingmontevideo.com/que-costo-tiene-registrar-un-dominio/ ; https://www.netuy.net/dominios/ ; https://www.domisfera.com/tema/dominios/uy-uruguay/ ; https://www.nic.uy/Registrar/anexo4.htm ; https://marlund.com/como-registrar-un-dominio-com-uy/
- Mercado Libre Servicios (VIS): https://www.mercadolibre.com.uy/institucional/hacemos/vis-mercado-libre ; https://news.mercadolibre.com/en/classified-ads-on-mercado-libre ; https://www.mercadolibre.com.uy/seguro_publicacion.html
- CPC: https://buhomedia.com.ar/cpc-costo-por-clic-potencia-tu-campana-google-ads/ ; https://www.reactivaonline.com/precio-google-ads/ ; https://tusclicks.com/blog/cuanto-cuesta-la-publicidad-en-google/
- SEO en Uruguay: https://neowyze.tech/blog/cuanto-cuesta-el-seo-en-uruguay ; https://agencias.uy/mejores-agencias-de-seo-en-uruguay ; https://www.sortlist.com/s/seo/uruguay-uy ; https://nibiru.com.uy/posicionamiento-seo/ ; https://www.evox.com.uy/agencia-seo/montevideo/
- Plataformas de leads: https://homesolution.net/uy/about/preciosreferencia/electricista ; https://www.manorapido.com/uy ; https://pimer.app/ ; https://presupuestapp.com/ ; https://www.elobservador.com.uy/nota/opciones-para-contratar-un-albanil-o-electricista-a-traves-de-internet-2019516161052
- Habitissimo, páginas que en realidad son de Concepción del Uruguay (AR): https://www.habitissimo.com.ar/presupuesto/pintores/entre-rios/uruguay
- Zolvers (Argentina): https://zolvers.com/ ; https://www.lanacion.com.ar/otros/crearon-una-startup-de-servicio-domestico-online-que-ya-tiene-300000-usuarios-nid20022020/
- Normativa (conocimiento previo, textos en impo.com.uy): Ley 18.331, Decreto 414/009, Ley 19.670, Decreto 64/020, Ley 17.250, Ley 18.083, Ley 19.820; políticas del Perfil de Empresa de Google (support.google.com/business).
