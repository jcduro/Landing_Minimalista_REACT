# Neon Landing · JC Duro

Landing page minimalista construida con React, con fondo oscuro y acentos neon azul.
Incluye logo, CTA hacia portfolio principal y un pequeño bloque de estadísticas.

## Demo

- Producción: https://jcduro.bexartideas.com/templates/NEON_LANDING (ejemplo)
- Portfolio principal: https://jcduro.bexartideas.com/templates/jcduro.php#projects

## Características

- UI tipo tarjeta, centrada, con fondo oscuro y glow neon azul.
- Logo de JC Duro sobre el texto "Frontend · React".
- Botones con enlaces directos a:
  - Sección de proyectos.
  - Sección de contacto.
- Bloque de estadísticas (proyectos, experiencia, stack) con efecto glassmorphism.
- Código pensado para integrarse en un dashboard PHP existente sin romper Bootstrap.

## Stack

- React 18 (CDN, sin build step).
- CSS plano con clases utilitarias propias (sin Tailwind en runtime).
- Integrable en proyectos PHP/Bootstrap como widget visual.

## Estructura del repositorio

- `index.html` / `landing.php`: Página principal con el contenedor `react-app-neon`.
- `assets/css/landing-neon.css`: Estilos neon (fondo, botones, stats, etc.).
- `assets/js/neon-landing.js`: Definición de componentes `App` y `Hero` y montaje con `ReactDOM.createRoot`.


<script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
<script src="/proyectos/dashjc/assets/js/neon-landing.js"></script>


## Personalización rápida

```md
## Personalización

- Cambiar logo: edita la ruta en el componente `Hero`:
  `/proyectos/dashjc/assets/images/dashboard/logoJCDBLUE.png`.
- Cambiar textos de CTA (botones) y URLs:
  - Proyectos: `...jcduro.php#projects`
  - Contacto: `...jcduro.php#contact`
- Ajustar colores:
  - Azul neon principal: `#04D9FF`.
  - Fondo: `#020617`.

La idea es que puedas usar esta landing como bloque reutilizable en otros
dashboards o portfolios sin depender del runtime de Tailwind.


