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
    <section class="vh-100 gradient-custom">
       <nav class="navbar">
            <a class="navbar-brand" href="https://home.amikom.ac.id/">
                <img src="https://amikom.ac.id/template/assets_dashboard/img/amikom.png" width="35" height="35" class="d-inline-block align-text-top">
                <h6 class="univ text-white">Universitas AMIKOM Yogyakarta</h6>
            </a>
            <a href="<?php echo base_url('/rps/logout') ?>">
                    <button class="btn1 btn1-lg">
                        <img class="logoutikon" src="https://cdn-icons-png.flaticon.com/128/9070/9070510.png" width="25" height="25">
                        logout
                    </button>
            </a>
       </nav>
</body>
</html>