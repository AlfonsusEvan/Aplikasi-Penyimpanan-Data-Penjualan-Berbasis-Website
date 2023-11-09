<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="images/x-icon" href="images/icons/storage.webp">
    <title>Website-Storage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>

    <div class="wrapper">
        <div class="logo">
            <img src="images/icons/storage.webp" alt="">
        </div>
        <div class="text-center mt-4 name">
            Welcome
        </div>
        <form action="{{ route('register.store') }}" method="POST" class="p-3 mt-3">
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Name">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="email" id="email"  value="{{ old('email') }}" placeholder="Email">
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="no_telepon" id="no_telepon"  value="{{ old('no_telepon') }}" placeholder="No_telepon">
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="alamat" id="alamat"  value="{{ old('alamat') }}" placeholder="Alamat">
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3">Register</button>
        </form>
        <div class="text-center fs-6">
            <a href="/">Back</a>
        </div>
    </div>
        


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>