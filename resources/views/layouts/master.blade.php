<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/images_masjid/masjid_icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>My Masjid</title>

    <!-- Bootstrap core CSS -->
    <link href="\css\bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="\css\carousel.css" rel="stylesheet">
  </head>
  <body>

    <div class="container blog-bg">
      <!-- NAVIGATION BAR -->
      @include('layouts.nav')
      <main role="main">
        <div class="col-sm-12 mx-auto">
          <!-- BLOG CONTENT -->
          @yield('content')
        </div>  
      </main>
      <!-- FOOTER -->
      @include ('layouts.footer')
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="\js\bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="\js\holder.min.js""></script>
  </body>
</html>
