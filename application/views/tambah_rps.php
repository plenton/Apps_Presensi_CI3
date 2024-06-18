<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create RPS</title>
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
        .input{
            width: 1200px;
        }
    </style>
    <section class="vh-100 gradient-custom">
       <nav class="navbar">
            <a class="navbar-brand" href="https://home.amikom.ac.id/">
                <img src="https://amikom.ac.id/template/assets_dashboard/img/amikom.png" width="35" height="35" class="d-inline-block align-text-top">
                <h6 class="univ text-white">Universitas AMIKOM Yogyakarta</h6>
            </a>
            <a href="<?php echo base_url('') ?>">
                    <button class="btn1 btn1-lg">
                        <img class="logoutikon" src="https://cdn-icons-png.flaticon.com/128/9070/9070510.png" width="25" height="25">
                        logout
                    </button>
            </a>
       </nav>
       <div class="card">
        <div class="grading card-body text-white">
            <div class="row">
                <div class="col-sm-9"><h5>Buat RPS</h5></div>
                <div class="silang col-sm-3"><a href="<?php echo base_url('/rps/dashboard') ?>"><button>X</button></a></div>
            </div>
        </div>


    <form action="<?php echo base_url('/rps/fungsitambah') ?>" method="POST">
    <div><p>Pilih KODE, jangan menggunakan kode yang telah dipakai nanti eror*</p></div>
    <div class="row">
                <div class="col-sm-2">
                <select class="select" aria-label="Default select example" name="kode_matkul" style=" width: 200px; height: 50px; margin-left: 10px; border-radius: 5px; background-color:rgb(172, 172, 172) ;">
                    <option selected>PILIH KODE MATKUL</option>
                    <option>2201</option>
                    <option>2202</option>
                    <option>2203</option>
                    <option>2204</option>
                    <option>2205</option>
                    <option>2206</option>
                    <option>2207</option>
                    <option>2208</option>
                    <option>2209</option>
                </select>
                </div>
            </div>
        <div><p>Pilih Mata Kuliah*</p></div>
            <div class="row">
                <div class="col-sm-2">
                <select class="select" aria-label="Default select example" name="matkul" style=" width: 200px; height: 50px; margin-left: 10px; border-radius: 5px; background-color:rgb(172, 172, 172) ;">
                    <option selected>Mata Kuliah</option>
                    <option>Desain Visual</option>
                    <option>Calculus</option>
                    <option>Logika</option>
                    <option>Desain Visual I</option>
                    <option>Calculus I</option>
                    <option>Logika I</option>
                    <option>Desain Visual II</option>
                    <option>Calculus II</option>
                    <option>Logika II</option>
                </select>
                </div>
            </div>
        <div><p>Pilih Semester*</p></div>
        <div class="row">
                <div class="col-sm-2">
                <select class="select" aria-label="Default select example" name="semester" style=" width: 200px; height: 50px; margin-left: 10px; border-radius: 5px; background-color:rgb(172, 172, 172) ;">
                    <option selected>PILIH SEMESTER</option>
                    <option>semester genap</option>
                    <option>semester ganjil</option>
                </select>
                </div>
            </div>
        <div><p>Pilih Prodi*</p></div>
        <div class="row">
                <div class="col-sm-2">
                <select class="select" aria-label="Default select example" name="prodi" style=" width: 200px; height: 50px; margin-left: 10px; border-radius: 5px; background-color:rgb(172, 172, 172) ;">
                    <option selected>PILIH PRODI</option>
                    <option>D3 TEKNIK INFORMATIKA</option>
                    <option>S1 TENIK KOMPUTER</option>
                    <option>S1 INFORMATIKA</option>
                </select>
                </div>
            </div>
        <div><p>Deskripsi*</p></div>
         <div class="form-floating">
            <textarea class="input" type="text" name="deskripsi" placeholder="Masukan Deskripsi" id="floatingTextarea2" style="height: 100px"></textarea>
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
                <textarea class="input" type="text" name="materi_per1" placeholder="Masukan materi dan deskrpsi materi" id="floatingTextarea2" style="height: 100px"></textarea>
           
                </div>
                </div>
        </div>  
        
        <div class="row">
           
            <div><p style="color: red;">materi pertemuan 2</p></div>
                <div class="col-md-3">
                <div class="form-floating">
                <textarea class="input" type="text" name="materi_per2" placeholder="Masukan materi dan deskrpsi materi" id="floatingTextarea2" style="height: 100px"></textarea>
           
                </div>
                
                </div>
               
        </div>  

        <div class="row">
           
            <div><p style="color: red;">materi pertemuan 3</p></div>
                <div class="col-md-3">
                <div class="form-floating">
                <textarea class="input" type="text" name="materi_per3" placeholder="Masukan materi dan deskrpsi materi" id="floatingTextarea2" style="height: 100px"></textarea>
           
                </div>
                
                </div>
                
        </div>  

        <div class="row">
           
            <div><p style="color: red;">materi pertemuan 4</p></div>
                <div class="col-md-3">
                <div class="form-floating">
                <textarea class="input" type="text" name="materi_per4" placeholder="Masukan materi dan deskrpsi materi" id="floatingTextarea2" style="height: 100px"></textarea>
           
                </div>
                
                </div>
                
        </div>  

        <div class="row">
           
            <div><p style="color: red;">materi pertemuan 5</p></div>
                <div class="col-md-3">
                <div class="form-floating">
                <textarea class="input" type="text" name="materi_per5" placeholder="Masukan materi dan deskrpsi materi" id="floatingTextarea2" style="height: 100px"></textarea>
           
                </div>
                
                </div>
               
        </div>  

        <div class="row">
           
            <div><p style="color: red;">materi pertemuan 6</p></div>
                <div class="col-md-3">
                <div class="form-floating">
                <textarea class="input" type="text" name="materi_per6" placeholder="Masukan materi dan deskrpsi materi" id="floatingTextarea2" style="height: 100px"></textarea>
           
                </div>
                
                </div>
               
        </div>  

        <div class="row">
           
            <div><p style="color: red;">materi pertemuan 7</p></div>
                <div class="col-md-3">
                <div class="form-floating">
                <textarea class="input" type="text" name="materi_per7" placeholder="Masukan materi dan deskrpsi materi" id="floatingTextarea2" style="height: 100px"></textarea>
           
                </div>
                
                </div>
               
        </div>  

        <div class="row">
           
            <div><p style="color: red;">materi pertemuan 8</p></div>
                <div class="col-md-3">
                <div class="form-floating">
                <textarea class="input" type="text" name="materi_per8" placeholder="Masukan materi dan deskrpsi materi" id="floatingTextarea2" style="height: 100px"></textarea>
           
                </div>
                
                </div>
               
        </div>  

        <div class="row">
           
            <div><p style="color: red;">materi pertemuan 9</p></div>
                <div class="col-md-3">
                <div class="form-floating">
                <textarea class="input" type="text" name="materi_per9" placeholder="Masukan materi dan deskrpsi materi" id="floatingTextarea2" style="height: 100px"></textarea>
           
                </div>
                
                </div>
               
        </div>  

        <div class="row">
           
            <div><p style="color: red;">materi pertemuan 10</p></div>
                <div class="col-md-3">
                <div class="form-floating">
                <textarea class="input" type="text" name="materi_per10" placeholder="Masukan materi dan deskrpsi materi" id="floatingTextarea2" style="height: 100px"></textarea>
           
                </div>
                
                </div>
                
        </div>  

        <div class="row">
           
            <div><p style="color: red;">materi pertemuan 11</p></div>
                <div class="col-md-3">
                <div class="form-floating">
                <textarea class="input" type="text" name="materi_per11" placeholder="Masukan materi dan deskrpsi materi" id="floatingTextarea2" style="height: 100px"></textarea>
           
                </div>
                
                </div>
               
        </div>  

    

        <div class="row">
           
            <div><p style="color: red;">materi pertemuan 12</p></div>
                <div class="col-md-3">
                <div class="form-floating">
                <textarea class="input" type="text" name="materi_per12" placeholder="Masukan materi dan deskrpsi materi" id="floatingTextarea2" style="height: 100px"></textarea>
           
                </div>
                
                </div>
               
        </div>  

        <div class="row">
           
            <div><p style="color: red;">materi pertemuan 13</p></div>
                <div class="col-md-3">
                <div class="form-floating">
                <textarea class="input" type="text" name="materi_per13" placeholder="Masukan materi dan deskrpsi materi" id="floatingTextarea2" style="height: 100px"></textarea>
           
                </div>
                
                </div>
               
        </div>  

        <div class="row">
           
            <div><p style="color: red;">materi pertemuan 14</p></div>
                <div class="col-md-3">
                <div class="form-floating">
                <textarea class="input" type="text" name="materi_per14" placeholder="Masukan materi dan deskrpsi materi" id="floatingTextarea2" style="height: 100px"></textarea>
           
                </div>
                
                </div>
                
        </div>  
        </var>
       
        <div class="simpan">
            <input style="background-color: #DDA0DD;" class="btn btn-sm" type="submit" value="Tambah" name="daftar"/>
        </div>
    </form>
</body>
</html>