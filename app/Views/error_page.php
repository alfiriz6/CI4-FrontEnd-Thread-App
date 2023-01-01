<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Terjadi Kesalahan - Intergalactic Science Kingdom</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" />

    <!-- STYLES -->
    <link rel="stylesheet" href="/assets/css/userstyle.css" type="text/css">
    <style>
        .button {
            background-color: #182141;
            /* Green */
            border: none;
            color: white;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <!-- HEADER: MENU + HEROE SECTION -->
    <header>

        <div class="menu">
            <ul>
                <li class="logo">
                    <a href="#" target="_blank">
                        <img src="/assets/images/isk-logo.png" alt="">
                    </a>
                </li>
                <li class="menu-toggle">
                    <button onclick="toggleMenu();">&#9776;</button>
                </li>
            </ul>
        </div>

        <div class="heroe" style="background-image: url('/assets/images/space-star.jpg'); background-size: 100% 100%;">
            <h1>Intergalactic Science Kingdom</h1>
            <h2>Mohon maaf terjadi kesalahan proses login</h2>
        </div>

    </header>

    <!-- CONTENT -->

    <section>

        <p>Mohon cek kembali isian Email atau Username dan/atau Password Anda.</p>
        <p>Silakan login kembali dengan isian yang benar.</p>

        <a href="/login"><button type="button" class="button">LOGIN</button></a>
    </section>



    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

    <footer>

        <div class="copyrights">

            <p>&copy; <?= date('Y') ?> Politeknik Statistika STIS. Created by Alfian Rizky Al Majid (<a href="mailto:222011647@stis.ac.id">222011647@stis.ac.id</a>)</p>

        </div>

    </footer>

    <!-- SCRIPTS -->

    <script>
        function toggleMenu() {
            var menuItems = document.getElementsByClassName('menu-item');
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.classList.toggle("hidden");
            }
        }
    </script>

    <!-- -->

</body>

</html>