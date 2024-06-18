<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Profil | RPS</title>
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
        .univ{
            margin-top: 7px;
            margin-left: 5px;
        }
        .sectionprofil{
            font-family: 'Times New Roman', Times, serif;
        }
        .btn{
            color: #eebc06;
            text-decoration: none;
            padding: 1rem;
            font-weight: 700;
            border: 1px solid #eebc06;
            transition: 0.3s;
        }
        .btn:hover{
            background: #eebc06;
            color: rgb(0, 0, 0);
            border-radius: 5px;
            box-shadow: 0 0 5px #eebc06;

        }

        .btn-back {
            display: inline-block;
            padding: 10px 20px;
            margin-left: 35px;
            margin-top: 5px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn-back:hover {
            background-color: #45a049;
        }
    </style>
    <section class="sectionprofil">


       <div class="row">
        <div>
    <button onclick="goBack()" class="btn-back">Back</button>
    <script>
    function goBack() {
        window.history.back();
    }
    </script></div>
            <h4 class="col-sm-4" style="color: rgb(116, 116, 116); margin-left: 40px; margin-top: 20px;"> Foto Profil</h4>
       </div>
       <div class="card bg-warning" style="width: 500px; height: 100px; margin-left: 40px; ">
            <div class="grading" style="margin-left: 5px;">
                <li>Masukan Foto Ber almet</li>
                <li>resolusi foto kecil</li>
                <li>background biru</li>
                <li>Foto formal</li>
            </div>
       </div>
        <?php echo form_open_multipart('rps/infoto'); ?>
       <div style="margin-top: 10px; margin-left: 40px ;">
            <input type="file" class="masukprofil" name="foto" > <br>
            <button type="submit" class="btn" for="masukprofil" style="margin-top:10px ;" >Upload</button>
       </div>
       <?php echo form_close();  ?>
    </section>
</body>
</html>