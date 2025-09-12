<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pemrograman Internet</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="shortcut icon" href="./src/ico/material/web.svg" type="image/x-icon">
    </head>
    <body>
        <svg width="0" height="0" aria-hidden="true">
            <defs>
                <filter id="hero-warp" x="0%" y="0%" width="100%" height="100%">
                    <feImage xlink:href="./src/filter/hero-concave.svg" result="map" preserveAspectRatio="none"/>
                    <feDisplacementMap in="SourceGraphic" in2="map" scale="50" xChannelSelector="R" yChannelSelector="G"/>
                </filter>
                <filter id="hero-threshold" x="0%" y="0%" width="100%" height="100%">
                    <feComponentTransfer in="SourceGraphic" result="maskSolid">
                        <feFuncR type="linear" slope="100" intercept=".5"/>
                        <feFuncG type="linear" slope="100" intercept=".5"/>
                        <feFuncB type="linear" slope="100" intercept=".5"/>
                    </feComponentTransfer>
                    <feFlood flood-color="white" result="white"/>
                    <feComposite in="white" in2="maskSolid" operator="in"/>
                </filter>
                <mask id="hero-mask" maskUnits="objectBoundingBox" maskContentUnits="objectBoundingBox">
                    <image xlink:href="./src/filter/hero-concave.svg" filter="url(#hero-threshold)" preserveAspectRatio="none"/>
                </mask>
            </defs>
        </svg>

        <header class="hero">
            <h1>
                <p>Pemr graman</p>
                <p>Internet</p>
            </h1>
            <p>Repositori khusus materi dan penugasan pembelajaran kelas mata kuliah Pemrograman Internet.</p>
        </header>
        <main class="repo">
            <section class="basic">
                <h2>PHP Dasar</h2>
                <div class="carousel">

                </div>
            </section>
        </main>
        <footer>
            <a class="copy" href="./LICENSE">
                <p>&copy; <?php echo date("Y"); ?> El Roy</p>
                <p>-</p>
                <p>Situmorang</p>
            </a>
            <div class="contact">
                <a href="github.com/el-ang"></a>
                <a href="instagram.com/el.ang_"></a>
                <a href="linkedin.com/in/el-ang"></a>
            </div>
        </footer>
    </body>
</html>