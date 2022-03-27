<meta name="robots" content="noindex, nofollow">
<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" >
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/icofont.min.css')}}">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-white bg-white cutom-header">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="{{asset('assets/images/logo.png')}}" class="d-logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icofont-navigation-menu text-white"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav ml-auto custome-munu">
          <li class="nav-item"><a class="nav-link" href="/">World Map</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/')}}/north-america">North America</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/')}}/south-america">South America</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/')}}/europe">Europe</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/')}}/asia">Asia</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/')}}/africa">Africa</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/')}}/australia">Australia</a></li>
          <li class="nav-item dropdown d-none">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
            <div class="dropdown-menu cutom-dropdown" aria-labelledby="dropdown07">
              <a class="dropdown-item" href="#">services</a>
              <a class="dropdown-item" href="#">services</a>
              <a class="dropdown-item" href="#">services</a>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="{{url('/')}}/contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>