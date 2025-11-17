<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
     <link rel="icon" type="icon" href="Group 33072.png">

    <title>Penguin Fashion </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- nav start -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img  src="{{ asset('images/Group 33072.png') }}" alt="" style="width: 150px;height: 30px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Woman jacket</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" href="#">Man Jacket</a>
        </li>
        
      </ul>
      <form class="d-flex gap-2" role="search">
    <button type="button" class="btn btn-outline-primary">Log In</button>
       <button type="button" class="btn btn-outline-primary">Sing In</button>
      </form>
    </div>
  </div>
</nav>

    <!-- nav end -->


    <!-- hero section start -->

    <div class="container mt-2">
      <div class="row row-cols-1 row-cols-md-2 align-items-center ">

        <div class="col">
          <div class="">
  
  <div class="card-body">
    <h2 class="fw-bold text-warning text-uppercase">{{ $hero->title }}</h2>
    <h2 class="fw-bold text-uppercase">{{ $hero->title2 }}</h2>
    <p class="card-text">{{ $hero->sub_title }}</p>
    <a href="#" class="btn btn-warning">BUY NOW</a>
  </div>
</div>
        </div>
        <div class="col">
          <img style="height: 50vh" class="img-fluid" src="{{ url($hero->hero_image) }}" alt="">
        </div>
      </div>
    </div>
     <!-- hero section end  -->


     <div class="container mt-5">
      <div class="head-jacket">
        <h2>Woman Jacket</h2>
      </div>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
        @if (count($woman)>0)
        @foreach ($woman as $woman)
            <div class="col">
    <div class="card h-100">
      <img src="{{ url($woman->woman_image) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $woman->title }}</h5>
        <p class="card-text">{{ $woman->sub_title }}</p>
      </div>
      <div class="btn-groupa d-flex justify-content-between align-items-center ">
        <h3 class="text-warning">${{ $woman->price }}</h3>
         <a href="#" class="btn btn-warning">BUY Now</a>
      </div>
     
    </div>
  </div>
        @endforeach
          
        @endif
 


</div>
     </div>


    <!-- man jacket start -->
     <div class="container mt-3">
      <div class="head-jacket">
        <h2>Man Jacket</h2>
      </div>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
        @if (count($man)>0)
        @foreach ($man as $man)
            <div class="col">
    <div class="card h-100">
      <img src="{{ url($man->man_image) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $man->title }}</h5>
        <p class="card-text">{{ $man->sub_title }}</p>
      </div>
      <div class="btn-groupa d-flex justify-content-between align-items-center ">
        <h3 class="text-warning">${{ $man->price }}</h3>
         <a href="#" class="btn btn-warning">BUY Now</a>
      </div>
     
    </div>
  </div>
        @endforeach
          
        @endif
 
 

</div>
     </div>



     <!-- man jacket end -->



     <div class="container py-5">
      <h1 class="text-center">Find Shop</h1>
      <div class="row row-cols-1 row-cols-md-2">
        <div class="col">
          <div class="icon-group-1">
            <div class="icon-1 d-flex ">
              <img style="width: 100px;height: 70px;" src="{{ asset('images/house.png') }}" alt="">
              <div class="titel g-2">
                <h5>Find the Perfect Fit</h5>
                <p>Everybody is different, which is why we offer styles for every body</p>
              </div>
            </div>
                  <div class="icon-1 d-flex pt-4">
              <img style="width: 100px;height: 70px;" src="{{ asset('images/box.png') }}" alt="">
              <div class="titel">
                <h5>Find the Perfect Fit</h5>
                <p>Everybody is different, which is why we offer styles for every body</p>
              </div>
            </div>
                  <div class="icon-1 d-flex pt-4">
              <img style="width: 100px;height: 70px;" src="{{ asset('images/question.png') }}" alt="">
              <div class="titel">
                <h5>Find the Perfect Fit</h5>
                <p>Everybody is different, which is why we offer styles for every body</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <img class="img-fluid" src="{{ asset('images/shopping.png') }}" alt="">
        </div>
      </div>
     </div>


     <!-- footer start -->


     <footer class="bg-dark" style="width: 100%;height: 50%; padding-top: 100px;padding-bottom: 100px;">
      <p class="text-center text-white">© 2025 Penguin Fashion with bootstrap 5
       <br>by <span class="text-warning">Md Abujor Gifari</span></p>
     </footer>

     <!-- footer end -->
    
</body>
</html>