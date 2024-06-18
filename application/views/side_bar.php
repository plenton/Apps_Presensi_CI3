<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | RPS</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
        <div class="row flex-nowrap">
            <!--ini adalah divisi/colom untuk membuat sidebar-->
            <div class="divbar col-auto col-md-4 col-lg-3 min-vh-100">
                <div class="isibar p-3">
                    <a class="d-flex text-decoration-none mt-1 align-items-center text-white">
                        <span class="fs-4 d-none d-sm-inline">WEB RPS</span>
                    </a>
                    <ul class="nav nav-pills flex-column mt-4">
                        <li class="nav-item py-2 py-sm-0">
                            <a href="<?php echo base_url('/rps/profil') ?>" class="nav-link text-black">
                                <i class="fs-5 fa fa-users"></i><span class="fs-4 ms-3 d-none d-sm-inline">Profil Dosen</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-black">
                                <i class="fs-5 fa fa-home"></i><span class="fs-4 ms-3 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="<?php echo base_url('') ?>" class="nav-link text-black">
                                <i class="fa fa-key"></i><span class="fs-4 ms-3 d-none d-sm-inline">Ganti Akun</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="<?php echo base_url('/rps/halaman_tambah') ?>" class="nav-link text-black">
                                <i class="fs-5 fa fa-table"></i><span class="fs-4 ms-3 d-none d-sm-inline">Tambah rps</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="<?php echo base_url('/rps/semua') ?>" class="nav-link text-black">
                                <i class="fs-5 fa fa-table"></i><span class="fs-4 ms-3 d-none d-sm-inline">semua rps</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
</body>
</html>