<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | RPS</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <style>
        .navbar{
            background-color: rgb(139, 15, 173);
        }
        .navbar-brand{
            margin-left: 10px;
            display: flex;
        }
        .logout{
            outline: rgb(139, 15, 173);
        }
        .btn1{
            color: rgb(181, 36, 36);
            text-decoration: none;
            padding: 1rem;
            font-weight: 700;
            border: 1px solid #dc2222;
            transition: 0.3s;
        }
        .btn1:hover{
            background: rgb(181, 36, 36);
            color: rgb(0, 0, 0);
            border-radius: 5px;
            box-shadow: 0 0 5px rgb(181, 36, 36);

        }
        .nav-pills li a:hover{
            background-color: rgb(150, 53, 177);
        }
        .divbar{
            background-color: rgb(109, 10, 136);
        }
        
        .isibar{
            background-color: rgb(109, 10, 136);
        }
        .circle{
            margin-left: 15px;
            margin-top: 15px;
            width: 150px;
            height: 150px;
            background-color: rgb(226, 28, 28);
            border-radius: 50%;
        }
        .profil{
            width: 150px;
            aspect-ratio: 1/1;
            object-fit: cover;
            border-radius: 50%;
        }
        .namasen{
            margin-top: 20px;
            margin-right: 10px;
        }
        .iddosen{
            margin-top: 10px;
            margin-right: 100px;
        }
        .editprofil{
            border: none;

        }
        .editprofil1{
            margin-top: 50px;
            margin-left: 100px;
            margin-right: 100px;
        }
        .select{
            background-color: #727272;
            margin-top: 20px;
            margin-left: 20px;
            width: 150px;
            height: 50px;
            border-radius: 20px;
        }
        .pilihmatkul{
            margin-top: 100px;
        }
        .rpss{
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }
        .RPS1{
            border: none;
            background-color: rgb(68, 68, 229);
        }
        .ikonedit{
            display: flex;
            justify-content: space-between;
        }
        .idmatkuldosen{
            background-color: rgb(88, 88, 205);
        }
        .listrps{
            margin-top: 5px;
            padding: 10px;
        }
        .univ{
            margin-left: 5px;
            margin-top: 7px;
        }
    </style>
 <div class="col-md-9">
                    <?php foreach ($lihat as $item): ?>
                    <div class="row d-felx justify-content-center">
                        <div class="col-2">
                          <div class="circle">
                            <img class="profil" src="https://fotografias.lasexta.com/clipping/cmsimages01/2023/09/03/66ADABF5-3A92-4184-89A9-4381D9CE9937/marc-marquez_92.jpg?crop=1000,562,x0,y15&width=390&height=219&optimize=high&format=webply">
                          </div>
                        </div>
                        <div class="namasen col-6 bg-light justify-content-center align-items-end">
                          <div class="namadosen row">
                            <div class="card">
                                <div class="card-body">
                                    <p style="color: black;"><?php echo $item->nama_dos ?></p>
                                </div>
                            </div>
                          </div>
                          <div class="iddosen row">
                            <div class="card">
                                <div class="card-body">
                                <p style="color: black;"><?php echo $item->id_dos ?></p>
                                </div>
                            </div>
                          </div>
                        </div>
                        <?php endforeach; ?>

                        <div class="col-3 bg-light">
                            <div class="editprofil1">
                            <div class="card justify-content-center align-items-center">
                            <a href="<?php echo base_url('/rps/profil') ?>"><button class="editprofil editprofil-lg"><img src="https://cdn-icons-png.flaticon.com/128/9634/9634117.png" width="60px" height="60px"></button></a>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="pilihmatkul">
                        <div>
                        </div>

                        <div class="row">
                            <div class="rpss">
                                <a href="<?php echo base_url('/rps/halaman_tambah') ?>"><button class="RPS1">+ Tambah RPS </button></a>
                            </div>
                        </div>
                    </div>

                <div class="card bg-light text-black">
                    <div class="grading card-body text-center ">
                        <div class="listrps row">
                        
                        <table class="table table-hover" style="width: 100%;">
                        
                        <tr class="tr">
                        <th class="satu" style="width: 10%">No</th>
                        <th style="width: 10%;">KODE</th>
                        <th style="width: 30%;" >MATA KULIAH</th>
                        <th style="width: 30%;" >LIHAT RPS</th>
                        <th style="width: 20%;" >Aksi</th>
                        </tr>

                        <?php
                        $count = 0;
                        foreach ($querymatkul as $isi) {
                            $count = $count + 1;

                        ?>
                        <tr>
                        <td><?php echo $count ?></td>
                        <td><?php echo $isi->kode_matkul ?></td>
                        <td><?php echo $isi->matkul?></td>
                        <td><a href="<?php echo base_url("/rps/view") ?>/<?php echo $isi->kode_matkul ?>">Lihat</a></td>
                       <td><a href="<?php echo base_url("/rps/halaman_edit") ?>/<?php echo $isi->kode_matkul ?>">Edit</a> 
                       <a href="<?php echo base_url('/rps/fungsidelete') ?>/<?php echo $isi->kode_matkul ?>"> | Hapus</a> </td>
                        <?php } ?>
                        </tr>
                        </table>
                        </div>
                    </div>
                </div>
            </div>

          </div>
       </div>
       <script src="js/bootstrap.bundle.js"></script>
    </section>
</body>
</html>