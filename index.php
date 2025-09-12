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
                <filter id="concave-hero" x="-30%" y="-30%" width="160%" height="160%">
                    <feImage xlink:href="./src/filter/concave-hero.svg" result="map" preserveAspectRatio="none"/>
                    <feGaussianBlur in="map" stdDeviation="2" result="mapBlur"/>
                    <feDisplacementMap in="SourceGraphic" in2="mapBlur" scale="50" xChannelSelector="R" yChannelSelector="G"/>
                </filter>
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