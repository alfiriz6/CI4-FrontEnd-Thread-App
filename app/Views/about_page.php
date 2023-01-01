<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Intergalactic Science Kingdom</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" />

    <!-- STYLES -->

    <link rel="stylesheet" href="/assets/css/userstyle.css" type="text/css">
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
                <li class="menu-item hidden"><a href="/user_page">Beranda</a></li>
                <li class="menu-item hidden"><a href="/profil">Profil</a></li>
                <li class="menu-item hidden"><a href="/about">Tentang</a></li>
                <li class="menu-item hidden"><a href="<?= base_url(); ?>/logout">Logout</a></li>
            </ul>
        </div>

        <div class="heroe" style="background-image: url('/assets/images/space-star.jpg'); background-size: 100% 100%;">
            <h1>Tentang Intergalactic Science Kingdom</h1>
        </div>

    </header>

    <!-- CONTENT -->

    <section>

        <h1>Intergalactic Science Kingdom </h1>

        <p>Intergalactic Science Kingdom merupakan situs web yang menyediakan informasi terbaru dan aktual seputar sains dan teknologi. Informasi disajikan dalam bentuk thread yang membahas topik-topik keilmuan bidang astronomi, komputer, fisika, matematika, biologi, kimia, dan bidang ilmu sains dan teknologi lainnya.</p>

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