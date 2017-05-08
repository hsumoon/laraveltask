
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
        integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
    </script>

    <!-- Custom styles for this template -->
    <link href="/css/layout.css" rel="stylesheet">
  </head>

  <body>
    @include('layouts.nav')

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Green Garden Blog</h1>
        <p class="lead blog-description">Very news options of blog users. Share your options and thoughts too !!!!</p>
      </div>
    </div>

    <div class="container">

      <div class="row">

            @yield('content')<!-- /.blog-main -->

            @include('layouts.sidebar')

      </div>

    </div>
    @include('layouts.footer')
  </body>
</html>
