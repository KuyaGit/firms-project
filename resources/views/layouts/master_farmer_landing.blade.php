<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    <link rel = "icon" href = "{{ asset('/firmslogo.ico') }}"    type = "image/x-icon">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- custom CSS should come after Bootstrap CSS -->
    <link href="{{ asset('css/app.scss') }}" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-light bg-success navbar-inverse navbar-fixed-top navbar-expand-md">
        <div class="container-fluid" style="padding-right:20px">
          <a class="navbar-brand" href="<?= url('firms'); ?>"> <b> FIRMS</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="<?= url('firms'); ?>">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= url('firms/about'); ?>">About</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= url('firms/insurance-program'); ?>">Insurance Program</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= url('firms/contact'); ?>">Contact Us</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= url('firms/help'); ?>">Help</a></li>
            </ul>
            
          </div>
        </div>
    </nav>
   
 @yield('content')   
</body>
</html>