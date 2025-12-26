<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Neon React Landing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              neon: "#04D9FF",
              darkbg: "#020617",
            },
            dropShadow: {
              neon: "0 0 25px #04D9FF",
            },
          },
        },
      };
    </script>

    <!-- React 18 CDN -->
    <script
      crossorigin
      src="https://unpkg.com/react@18/umd/react.development.js"
    ></script>
    <script
      crossorigin
      src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"
    ></script>

    <style>
      body {
        margin: 0;
        min-height: 100vh;
        background: #020617;
        color: #e5e7eb;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
          sans-serif;
      }
    </style>
  </head>
  <body>
    <div id="root"></div>

    <script type="text/javascript">
      const e = React.createElement;

      function Hero() {
        return e(
          "section",
          { className: "max-w-3xl text-center relative px-4" },
          [
            // Glow de fondo
            e("div", {
              key: "glow",
              className:
                "pointer-events-none absolute -inset-32 bg-[radial-gradient(circle_at_top,_rgba(4,217,255,0.18),_transparent_60%)]",
            }),
            e(
              "div",
              { key: "content", className: "relative space-y-6" },
              [
                e(
                  "p",
                  {
                    key: "kicker",
                    className:
                      "text-sm tracking-[0.3em] uppercase text-neon",
                  },
                  "Frontend · React"
                ),
                e(
                  "h1",
                  {
                    key: "title",
                    className:
                      "text-4xl md:text-5xl font-bold leading-tight",
                  },
                  [
                    "Interfaces rápidas con ",
                    e(
                      "span",
                      {
                        key: "span",
                        className:
                          "text-neon drop-shadow-[0_0_25px_#04D9FF]",
                      },
                      "estilo neon"
                    ),
                  ]
                ),
                e(
                  "p",
                  {
                    key: "desc",
                    className: "text-slate-400 max-w-xl mx-auto",
                  },
                  "Landing minimalista en React con acentos neon azul, perfecta como tarjeta de presentación o portfolio rápido."
                ),
                e(
                  "div",
                  {
                    key: "buttons",
                    className:
                      "flex flex-wrap gap-4 justify-center",
                  },
                  [
                    // BOTÓN "Ver proyectos" con link
                    e(
                      "a",
                      {
                        key: "link-projects",
                        href: "https://jcduro.bexartideas.com/templates/jcduro.php#projects",
                        target: "_blank",
                        rel: "noopener noreferrer",
                      },
                      e(
                        "button",
                        {
                          className:
                            "px-6 py-3 rounded-full bg-neon text-darkbg font-semibold shadow-[0_0_25px_#04D9FF] hover:shadow-[0_0_40px_#04D9FF] hover:-translate-y-0.5 transition",
                        },
                        "Ver proyectos"
                      )
                    ),
                    // BOTÓN "Contacto" con link
                    e(
                      "a",
                      {
                        key: "link-contact",
                        href: "https://jcduro.bexartideas.com/templates/jcduro.php#contact",
                        target: "_blank",
                        rel: "noopener noreferrer",
                      },
                      e(
                        "button",
                        {
                          className:
                            "px-6 py-3 rounded-full border border-neon text-neon hover:bg-neon/10 transition",
                        },
                        "Contacto"
                      )
                    ),
                  ]
                ),
                e(
                  "div",
                  {
                    key: "stats",
                    className:
                      "mt-8 grid grid-cols-3 gap-4 text-xs md:text-sm text-slate-400",
                  },
                  [
                    e(
                      "div",
                      {
                        key: "stat1",
                        className:
                          "border border-slate-800/80 rounded-xl bg-slate-900/30 backdrop-blur-sm p-3 hover:border-neon/60 transition",
                      },
                      [
                        e(
                          "p",
                          {
                            key: "label1",
                            className:
                              "text-[10px] uppercase tracking-wide text-slate-500",
                          },
                          "Proyectos"
                        ),
                        e(
                          "p",
                          {
                            key: "value1",
                            className:
                              "text-lg font-semibold text-neon",
                          },
                          "12+"
                        ),
                      ]
                    ),
                    e(
                      "div",
                      {
                        key: "stat2",
                        className:
                          "border border-slate-800/80 rounded-xl bg-slate-900/30 backdrop-blur-sm p-3 hover:border-neon/60 transition",
                      },
                      [
                        e(
                          "p",
                          {
                            key: "label2",
                            className:
                              "text-[10px] uppercase tracking-wide text-slate-500",
                          },
                          "Experiencia"
                        ),
                        e(
                          "p",
                          {
                            key: "value2",
                            className:
                              "text-lg font-semibold text-neon",
                          },
                          "3 años"
                        ),
                      ]
                    ),
                    e(
                      "div",
                      {
                        key: "stat3",
                        className:
                          "border border-slate-800/80 rounded-xl bg-slate-900/30 backdrop-blur-sm p-3 hover:border-neon/60 transition",
                      },
                      [
                        e(
                          "p",
                          {
                            key: "label3",
                            className:
                              "text-[10px] uppercase tracking-wide text-slate-500",
                          },
                          "Stack",
                        ),
                        e(
                          "p",
                          {
                            key: "value3",
                            className:
                              "text-lg font-semibold text-neon",
                          },
                          "React · Tailwind"
                        ),
                      ]
                    ),
                  ]
                ),
              ]
            ),
          ]
        );
      }

      function App() {
        return e(
          "div",
          {
            className:
              "min-h-screen bg-darkbg text-slate-100 flex items-center justify-center relative overflow-hidden",
          },
          [e(Hero, { key: "hero" })]
        );
      }

      const root = ReactDOM.createRoot(
        document.getElementById("root")
      );
      root.render(e(App));
    </script>
  </body>
</html>
