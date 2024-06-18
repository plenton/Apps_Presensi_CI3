<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login RPS</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <style>
    .personid{
      width: 30;
      height: 30;
    }
    .form-control{
      font-family: 'Times New Roman', Times, serif;
      background-color: rgb(172, 172, 172);
    }
    .card{
      border-radius: 25% 10%;
    }
    .vh-100{
      background-color: rgb(139, 15, 173);
    }
    .ikonlogin{
      height: 30px;
      width: 50px;
    }
    .btn{
      background-color: rgb(139, 15, 173);
    }
    .fw-bold{
      color: #2f2e2e;
    }
    .login{
      margin-left: 10px;
    }
    .form-label{
      color: black;
    }

    </style>
    <!--rgb(118, 11, 147)-->
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-light text-white">
                <div class="grading card-body p-5 text-center">
      
                  <div class="">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                    
                    <p class="text-black-50 mb-5">Masukan ID dan password!</p>

                   
                    <form class="login"  action="<?php echo base_url('/rps/fungsi_login') ?>" method="POST">
                        <div class="row col-md-12">
                          <label for="exampleInputEmail1" class="form-label">username :</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
                         
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>

                        <div class="row col-md-12">
                          <label for="exampleInputPassword1" class="form-label">Password :</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                          
                        </div>

                        <button type="submit" class="btn btn-primary">LOGIN</button>
                        
                        <div class="row col-md-12">
                          <a href="form_register.php">resgitrasi jika belum punya akun</a>

                        </div>
                    

                    <div class="logamikom">
                      <img class="logamikom bg-dark"src="https://amikom.ac.id/template/assets_dashboard/img/amikom.png">
                      <a href="https://accounts.google.com/v3/signin/identifier?dsh=S1359167760%3A1690422219217314&hl=in&ifkv=AeDOFXidTwsbl4pewHDA3S6TSBqLndRKss51AgpLazzudp_5kDdl-oknEkMHQyuSATb7RtZdLlYj&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><button class="btn btn-lg" type="login">Email AMIKOM</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</body>
</html>