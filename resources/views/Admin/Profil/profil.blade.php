<!doctype html>
<html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="icon" type="images/x-icon" href="images/icons/storage.webp">
            <title>Website-Storage</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            <link rel="stylesheet" href="css/style.css">
        </head>
    <body>
        
        <section class="vh-100" style="background-color: #eee;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-xl-4">
          
                  <div class="card" style="border-radius: 15px; background-color:rgb(31, 30, 30); color:white">
                    <div class="card-body text-center">
                      <div class="mt-3 mb-4">
                        <img src="images/icons/storage.webp"
                          class="rounded-circle img-fluid" style="width: 100px;" />
                      </div>
                      <h4 class="mb-2">{{ $users->name }}</h4>
                      <p class="text-muted-text-light mb-4">+62 {{ $users->no_telepon }}<span class="mx-2">|</span> <a
                          href="#!">{{ $users->email }}</a></p>
                      <div class="mb-4 pb-2">
                        <button type="button" class="btn btn-outline-primary btn-floating me-2">
                          <i class="fab fa-facebook-f fa-lg"><img src="images/icons/instagram.png"  height="30px" width="40px" alt=""></i>
                        </button>
                        <button type="button" class="btn btn-outline-primary btn-floating">
                          <i class="fab fa-twitter fa-lg"><img src="images/icons/olx.png" height="30px" width="50px" alt=""></i>
                        </button>
                        <button type="button" class="btn btn-outline-primary btn-floating ms-2">
                          <i class="fab fa-skype fa-lg"><img src="images/icons/facebook.png"  height="30px" width="40px" alt=""></i>
                        </button>
                      </div>
                      <button type="button" class="btn btn-primary btn-rounded btn-lg">
                        <a href="{{ route('show') }}" class="text-light">Back Dashboard</a>
                      </button>
                      <div class="d-flex justify-content-between text-center mt-5 mb-2">
                        <div>
                          <p class="mb-2 h5">{{ $total['Total Motor Dagangan'] }}</p>
                          <p class="text-muted-text-light mb-0 ">Total Motor Dagangan</p>
                        </div>
                        <div class="px-3">
                          <p class="mb-2 h5">Rp.{{ $total['Total Modal'] }}</p>
                          <p class="text-muted-text-light mb-0">Total Modal Motor Dagangan</p>
                        </div>
                        <div>
                          <p class="mb-2 h5">Rp.{{ $total['Total Keuntungan'] }}</p>
                          <p class="text-muted-text-light mb-0">Total Keuntungan Motor Dagangan</p>
                        </div>
                      </div>
                    </div>
                  </div>
          
                </div>
              </div>
            </div>
          </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>

