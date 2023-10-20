<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <title>Halaman Login | SMK YPC Tasikmalaya</title>
  </head>
  <body>
  <div class="wrapper">
        <div class="logo">
            <img src="https://web.smk-ypc.sch.id/wp-content/uploads/2022/07/YPC-250-no-border.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            SMK YPC Tasikmalaya
        </div>
        <form class="p-3 mt-3" method="POST" action="{{ route('actionlogin') }}">
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3" type="submit">Login</button>
        </form>
        
    </div>
  </body>
</html>
