<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Sike</title>

    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="./assets/css/style.css">


    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!--
      - preload images
    -->
    <link rel="preload" as="image" href="./assets/images/hero-banner.png">
</head>
<body>



  </head>

  <body id="top">

    <!--
      - #HEADER
    -->

    <header class="header" data-header>
      <div class="container">

        <a href="#" class="logo">
          <img src="{{asset('assets2/images/logo2.png')}}" width="199" height="50" alt="Covid-19 home">
        </a>

        <nav class="navbar" data-navbar>
          <ul class="navbar-list">

            <li class="navbar-item">
              <a href="{{route('home')}}" class="navbar-link" data-nav-link>Home</a>
            </li>



            <li class="navbar-item">
              <a href="{{route('df_world_max_new_death')}}" class="navbar-link" data-nav-link>Tables</a>
            </li>

            <li class="navbar-item">
              <a href="{{route('flot')}}" class="navbar-link" data-nav-link>Analysis</a>
            </li>

          </ul>
        </nav>




      </div>
    </header>





    <div style="margin-top:150px" class="container-fluid">
     <div class="row justify-content-md-center">
        <div class="col-md-7">
            <div  class="card px-5 py-3 mt-5  shadow">
            <h1 class="text-danger text-center mt-3 mb-4">Book an appointment to get a <mark>PCR</mark> test</h1>


        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
        @if(session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif
    <form action="/sike/create" method="POST" class="sike-form">
        @csrf
        <div class="form-group">
          <label style="color: black;" for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name= "name" required>

        </div>
        <div class="form-group">
          <label style="color: black;" for="exampleInputPassword1">Last name</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name= "last name" required>
        </div>

        <div class="form-group">
            <label style="color: black;" for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1"name= "email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

          <div class="form-group">
            <label style="color: black;" for="exampleInputPassword1">Phone:</label>
            <input type="tel" class="form-control" id="exampleInputPassword1" name= "phone" required>
          </div>

          <div class="form-group">
            <label style="color: black;" for="exampleInputPassword1">Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name= "address" required>
          </div>

          <div class="form-group">
            <label style="color: black;" for="exampleInputPassword1">Appointment_date</label>
            <input type="datetime-local" id="appointment_date" name="appointment_date" required>
          </div>

        <button type="submit" class="btn btn-primary">Send</button>
      </form>
    </div>
</div>
</div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
