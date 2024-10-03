<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>SPP HOME</title>
    <style>
        a {
            text-decoration: none;
            color: black;
        }
        #testing {
            font-size: 15px;
        }
        h6 {
            font-weight: bold;
            font-size: 16px;

        }
        .em1 {
            border: 1px solid green;
        }
        #totalpembayaran {
            float: right;
            font-weight: bold;
            color: blue;
            font-size: 18px;
        }
        th {
            font-weight: bold;
            color: white;
            background-color: #2C392D;
        }
        td {
            background-color: #E3ECE9;
        }
        #deks {
            font-size: 11px;
            color: black    ;
            text-shadow: 1px 1px 1px green;
        }
        #logout {
            color: red;
        }
        #deks2 { 
            background-color: green; 
            border-radius: 50px;
            padding: 5px; 
            display: inline-block; 
            color: white;
            font-weight: bold;
            size: 13px;
        }
        .black {
            font-weight: bold;
        }
        .green {
            font-weight: bold;
            color: green;
        }
        .red {
            font-weight: bold;
            color: red;
        }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="https://smkmussi.sch.id/img_anekaweb/pengumuman/small_200708Logo%20Baru%20SMK%20Mussi_Modif2.jpg" width="30" height="30" alt="">
    SPP SEKOLAH
    <p class="container" id="deks">SMK MUHAMMADIYAH KESESI</P>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  
  @yield('content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html> 