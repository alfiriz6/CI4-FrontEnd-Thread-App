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
    <style>
        .button {
            background-color: #008CBA;
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
                <li class="menu-item hidden"><a href="/admin_page">Thread</a></li>
                <li class="menu-item hidden"><a href="/account_page">User</a></li>
                <li class="menu-item hidden"><a href="<?= base_url(); ?>/logout">Logout</a></li>
            </ul>
        </div>

        <div class="heroe" style="background-image: url('/assets/images/space-star.jpg'); background-size: 100% 100%;">
            <h1>Daftar Thread Sains dan Teknologi</h1>
        </div>

    </header>

    <!-- CONTENT -->

    <!-- Begin Page Content -->
    <section>
        <a href="/create_thread"><button type="button" class="button">Buat Thread Baru</button></a>
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($thread as $thread) {
                ?>
                    <tr>
                        <td><?php echo $thread['judul'] ?></td>
                        <td><?php echo $thread['isi'] ?></td>
                        <td><?php echo $thread['tanggal'] ?></td>
                        <td><a href="/update_thread/<?php echo $thread['id'] ?>" class="link-primary">Edit</a></td>
                        <td><a href="/delete_thread/<?php echo $thread['id'] ?>" class="link-danger">Hapus</a></td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </section>
    <!-- End of Main Content -->



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