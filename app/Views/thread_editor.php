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
                <li class="menu-item hidden"><a href="/admin_page">Thread</a></li>
                <li class="menu-item hidden"><a href="#">User</a></li>
                <li class="menu-item hidden"><a href="<?= base_url(); ?>/logout">Logout</a></li>
            </ul>
        </div>

    </header>

    <!-- CONTENT -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Thread Sains dan Teknologi</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Daftar Thread
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <!-- <button class="btn-primary btn-icon-split"> -->
                    <a href="/buatartikel" class="btn-primary btn-icon-split">Buat Thread Baru</a>
                    <!-- </button> -->
                    <hr class="sidebar-divider d-none d-md-block" />
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($thread as $user) {
                            ?>
                                <tr>
                                    <td><?php echo $user['judul'] ?></td>
                                    <td><?php echo $user['isi'] ?></td>
                                    <td>
                                        <!-- <button type="submit"> -->
                                        <a href="/editartikel/<?php echo $user['id'] ?>">Edit</a>
                                        <!-- </button> -->
                                    </td>
                                    <td><a href="/hapusartikel/<?php echo $user['id'] ?>">Hapus</a></td>
                                </tr>
                            <?php
                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    </div>
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