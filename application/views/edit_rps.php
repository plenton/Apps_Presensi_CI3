<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT RPS</title>
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
        .univ{
            margin-left: 5px;
            margin-top: 7px;
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
        .silang{
            display: flex;
            justify-content: end;
        }
        .grading{
            background-color: rgb(71, 71, 71);
        }
        .form-control{
            background-color: rgb(172, 172, 172);
        }
        .form-floating{
            margin-left: 10px;
            margin-right: 10px;
        }
        .simpan{
            margin-top: 10px;
            display: flex;
            justify-content:center;
        }
        .submit{
            background-color: rgb(25, 15, 225);
            text-decoration: solid;
            padding: 1rem;
            font-weight: 700;
            border: 1px solid rgb(25, 15, 225);
            border-radius: 10px;
            transition: 0.3s;
        }
        .submit:hover{
            background: rgb(181, 36, 36);
            color: rgb(0, 0, 0);
            border-radius: 5px;
            box-shadow: 0 0 5px rgb(181, 36, 36);
        }
        p{
            margin-left: 20px;
        }
        .referensipi{
            margin-left: 30px;
            margin-bottom: 10px;
        }
    </style>
    <section class="vh-100 gradient-custom">
       <nav class="navbar">
            <a class="navbar-brand" href="https://home.amikom.ac.id/">
                <img src="https://amikom.ac.id/template/assets_dashboard/img/amikom.png" width="35" height="35" class="d-inline-block align-text-top">
                <h6 class="univ text-white">Universitas AMIKOM Yogyakarta</h6>
            </a>
            <a href="login.php">
                    <button class="btn1 btn1-lg">
                        <img class="logoutikon" src="https://cdn-icons-png.flaticon.com/128/9070/9070510.png" width="25" height="25">
                        logout
                    </button>
            </a>
       </nav>
       <div class="card">
        <div class="grading card-body text-white">
            <div class="row">
                <div class="col-sm-9"><h5>EDIT RPS</h5></div>
                <div class="silang col-sm-3"><a href="<?php echo base_url('/rps/dashboard') ?>"><button>X</button></a></div>
            </div>
        </div>

<form action="<?php echo base_url('/rps/fungsiedit') ?>" method="POST">
    <div class="row">
                <div class="col-sm-2">
                <?php //$kod = $dosen['kode_matkul']; ?>
                <select class="select" aria-label="Default select example"  name="kode_matkul" 
                style=" width: 200px; height: 50px; margin-left: 10px; border-radius: 5px; background-color:rgb(172, 172, 172) ;"
                value="">
                    <option  <?php echo ($querymtl->kode_matkul == '2201') ? "selected": "" ?>>2201</option>
                    <option  <?php echo ($querymtl->kode_matkul == '2202') ? "selected": "" ?>>2202</option>
                    <option  <?php echo ($querymtl->kode_matkul == '2203') ? "selected": "" ?>>2203</option>
                    <option  <?php echo ($querymtl->kode_matkul == '2204') ? "selected": "" ?>>2204</option>
                    <option  <?php echo ($querymtl->kode_matkul == '2205') ? "selected": "" ?>>2205</option>
                    <option  <?php echo ($querymtl->kode_matkul == '2206') ? "selected": "" ?>>2206</option>
                    <option  <?php echo ($querymtl->kode_matkul == '2207') ? "selected": "" ?>>2207</option>
                    <option  <?php echo ($querymtl->kode_matkul == '2208') ? "selected": "" ?>>2208</option>
                    <option  <?php echo ($querymtl->kode_matkul == '2209') ? "selected": "" ?>>2209</option>
                </select>
                </div>
            </div>
        <div><p>Pilih Mata Kuliah*</p></div>
            <div class="row">
                <div class="col-sm-2">
                <?php //$mata = $dosen['matkul']; ?>
                <select class="select" aria-label="Default select example" name="matkul" 
                style=" width: 200px; height: 50px; margin-left: 10px; border-radius: 5px; background-color:rgb(172, 172, 172) ;" 
                value="">
                    <option <?php echo ($querymtl->matkul == 'Desain Visual') ? "selected": "" ?>>Desain Visual</option>
                    <option <?php echo ($querymtl->matkul == 'Calculus') ? "selected": "" ?>>Calculus</option>
                    <option <?php echo ($querymtl->matkul == 'Logika') ? "selected": "" ?>>Logika</option>
                    <option <?php echo ($querymtl->matkul == 'Desain Visual I') ? "selected": "" ?>>Desain Visual I</option>
                    <option <?php echo ($querymtl->matkul == 'Calculus I') ? "selected": "" ?>>Calculus I</option>
                    <option <?php echo ($querymtl->matkul == 'Logika I') ? "selected": "" ?>>Logika I</option>
                    <option <?php echo ($querymtl->matkul == 'Desain Visual II') ? "selected": "" ?>>Desain Visual II</option>
                    <option <?php echo ($querymtl->matkul == 'Calculus II') ? "selected": "" ?>>Calculus II</option>
                    <option <?php echo ($querymtl->matkul == 'Logika II') ? "selected": "" ?>>Logika II</option>
                </select>
                </div>
            </div>
        <div><p>Pilih Semester*</p></div>
        <div class="row">
                <div class="col-sm-2">
                <?php //$smtr = $dosen['semester']; ?>
                <select class="select" aria-label="Default select example" name="semester" style=" width: 200px; height: 50px; margin-left: 10px; border-radius: 5px; background-color:rgb(172, 172, 172) ;">
                    
                    <option <?php echo ($querymtl->semester == 'semester genap') ? "selected": "" ?>>semester genap</option>
                    <option <?php echo ($querymtl->semester == 'semester genap') ? "selected": "" ?>>semester ganjil</option>
                </select>
                </div>
            </div>
        <div><p>Pilih Prodi*</p></div>
        <div class="row">
                <div class="col-sm-2">
                <?php //$prd = $dosen['prodi']; ?>
                <select class="select" aria-label="Default select example" name="prodi" style=" width: 200px; height: 50px; margin-left: 10px; border-radius: 5px; background-color:rgb(172, 172, 172) ;">
                    
                    <option <?php echo ($querymtl->prodi == 'D3 TEKNIK INFORMATIKA') ? "selected": "" ?>>D3 TEKNIK INFORMATIKA</option>
                    <option <?php echo ($querymtl->prodi == 'S1 TEKNIK KOMPUTER') ? "selected": "" ?>>S1 TEKNIK KOMPUTER</option>
                    <option <?php echo ($querymtl->prodi == 'S1 INFORMATIKA') ? "selected": "" ?>>S1 INFORMATIKA</option>
                </select>
                </div>
            </div>
        <div><p>Deskripsi*</p></div>
         <div class="form-floating">
            <textarea class="input" type="text" name="deskripsi" value="" id="floatingTextarea2" style="height: 100px"><?php echo $querymtl->deskripsi ?></textarea>
            <!--label for="deskripsi" >Deskripsi Mata kuliah</label-->
          </div>
       </div>
       <!--materi input-->

       <var>

<div class="row">
     <div><p>tulis materi beserta deskripsi materi selama 14 pertemuan disini*</p></div>
     <div><p style="color: red;">materi pertemuan 1</p></div>
         <div class="col-md-3">
         <div class="form-floating">
         <textarea class="input" type="text" name="materi_per1" value="" style="height: 100px"><?php echo $querymtl->materi_per1 ?></textarea>
    
         </div>
         </div>
 </div>  
 
 <div class="row">
    
     <div><p style="color: red;">materi pertemuan 2</p></div>
         <div class="col-md-3">
         <div class="form-floating">
         <textarea class="input" type="text" name="materi_per2"  id="floatingTextarea2" style="height: 100px" value=""><?php echo $querymtl->materi_per2 ?></textarea>
    
         </div>
         
         </div>
        
 </div>  

 <div class="row">
    
     <div><p style="color: red;">materi pertemuan 3</p></div>
         <div class="col-md-3">
         <div class="form-floating">
         <textarea class="input" type="text" name="materi_per3"  id="floatingTextarea2" style="height: 100px" value=""><?php echo $querymtl->materi_per3 ?></textarea>
    
         </div>
         
         </div>
         
 </div>  

 <div class="row">
    
     <div><p style="color: red;">materi pertemuan 4</p></div>
         <div class="col-md-3">
         <div class="form-floating">
         <textarea class="input" type="text" name="materi_per4"  id="floatingTextarea2" style="height: 100px" value=""><?php echo $querymtl->materi_per4 ?></textarea>
    
         </div>
         
         </div>
         
 </div>  

 <div class="row">
    
     <div><p style="color: red;">materi pertemuan 5</p></div>
         <div class="col-md-3">
         <div class="form-floating">
         <textarea class="input" type="text" name="materi_per5"  id="floatingTextarea2" style="height: 100px" value=""><?php echo $querymtl->materi_per5 ?></textarea>
    
         </div>
         
         </div>
        
 </div>  

 <div class="row">
    
     <div><p style="color: red;">materi pertemuan 6</p></div>
         <div class="col-md-3">
         <div class="form-floating">
         <textarea class="input" type="text" name="materi_per6"  id="floatingTextarea2" style="height: 100px" value=""><?php echo $querymtl->materi_per6 ?></textarea>
    
         </div>
         
         </div>
        
 </div>  

 <div class="row">
    
     <div><p style="color: red;">materi pertemuan 7</p></div>
         <div class="col-md-3">
         <div class="form-floating">
         <textarea class="input" type="text" name="materi_per7"  id="floatingTextarea2" style="height: 100px" value=""><?php echo $querymtl->materi_per7 ?></textarea>
    
         </div>
         
         </div>
        
 </div>  

 <div class="row">
    
     <div><p style="color: red;">materi pertemuan 8</p></div>
         <div class="col-md-3">
         <div class="form-floating">
         <textarea class="input" type="text" name="materi_per8"  id="floatingTextarea2" style="height: 100px" value=""><?php echo $querymtl->materi_per8 ?></textarea>
    
         </div>
         
         </div>
        
 </div>  

 <div class="row">
    
     <div><p style="color: red;">materi pertemuan 9</p></div>
         <div class="col-md-3">
         <div class="form-floating">
         <textarea class="input" type="text" name="materi_per9"  id="floatingTextarea2" style="height: 100px" value=""><?php echo $querymtl->materi_per9 ?></textarea>
    
         </div>
         
         </div>
        
 </div>  

 <div class="row">
    
     <div><p style="color: red;">materi pertemuan 10</p></div>
         <div class="col-md-3">
         <div class="form-floating">
         <textarea class="input" type="text" name="materi_per10"  id="floatingTextarea2" style="height: 100px" value=""><?php echo $querymtl->materi_per10 ?></textarea>
    
         </div>
         
         </div>
         
 </div>  

 <div class="row">
    
     <div><p style="color: red;">materi pertemuan 11</p></div>
         <div class="col-md-3">
         <div class="form-floating">
         <textarea class="input" type="text" name="materi_per11"  id="floatingTextarea2" style="height: 100px" value=""><?php echo $querymtl->materi_per11 ?></textarea>
    
         </div>
         
         </div>
        
 </div>  



 <div class="row">
    
     <div><p style="color: red;">materi pertemuan 12</p></div>
         <div class="col-md-3">
         <div class="form-floating">
         <textarea class="input" type="text" name="materi_per12"  id="floatingTextarea2" style="height: 100px" value=""><?php echo $querymtl->materi_per12 ?></textarea>
    
         </div>
         
         </div>
        
 </div>  

 <div class="row">
    
     <div><p style="color: red;">materi pertemuan 13</p></div>
         <div class="col-md-3">
         <div class="form-floating">
         <textarea class="input" type="text" name="materi_per13"  id="floatingTextarea2" style="height: 100px" value=""><?php echo $querymtl->materi_per13 ?></textarea>
    
         </div>
         
         </div>
        
 </div>  

 <div class="row">
    
     <div><p style="color: red;">materi pertemuan 14</p></div>
         <div class="col-md-3">
         <div class="form-floating">
         <textarea class="input" type="text" name="materi_per14"  id="floatingTextarea2" style="height: 100px" value=""><?php echo $querymtl->materi_per14 ?></textarea>
    
         </div>
         
         </div>
         
 </div>  
 </var>
    
<div class="simpan">
<input style="background-color: #DDA0DD;" class="btn btn-sm" type="submit" value="Simpan" name="edit"/>
</div>
</form>
</body>
</html>