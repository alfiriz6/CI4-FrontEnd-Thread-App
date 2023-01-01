<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Colorlib Templates" />
    <meta name="author" content="Colorlib" />
    <meta name="keywords" content="Colorlib Templates" />

    <!-- Title Page-->
    <title>Edit Thread - Intergalactic Science Kingdom</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet" />

    <!-- Main CSS-->
    <link href="<?= base_url('css/main_update_thread.css') ?>" rel="stylesheet" media="all" />

    <link rel="shortcut icon" href="/favicon.ico" />
</head>

<body>

    <!-- CONTENT -->
    <div class="page-wrapper bg-dark p-t-100 p-b-50 mainpage" style="background-image: url('/assets/images/bg-01.jpg'); background-size: 100% 100%;">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Form Thread</h2>
                </div>
                <form method="POST" action="/update_thread/<?php echo $id ?>" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-row">
                            <input class="input--style-6" type="text" name="judul" value="<?php echo $judul ?>" />
                        </div>
                        <div class="form-row">
                            <textarea class="textarea--style-6" name="isi" placeholder="Tulis artikel disini"><?php echo $isi ?></textarea>
                        </div>

                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit">
                                Update Thread
                            </button>
                            <button href="/admin_page" class="btn btn--radius-2 btn--blue-2">Back</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min_update_thread.js"></script>

    <!-- Main JS-->
    <script src="js/global_update_thread.js"></script>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->