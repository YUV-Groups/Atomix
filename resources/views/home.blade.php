<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="stylesheet" type="text/css" href="/css/app.css">

        <title>Home - Atomix Editor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
    		<nav class="nav-extended nav-full-header z-depth-0 blue-grey darken-3">
			  <div class="nav-background">
			    <div class="ea k" style="background-image: url('/images/nav-background.jpg');"></div>
			  </div>
			  <div class="nav-wrapper db">
			    <a href="{{ route('home') }}" class="brand-logo"><i class="material-icons">camera</i>Atomix</a>
			    <ul class="bt hide-on-med-and-down">
			      <li><a href="{{ route('login') }}">Log In</a></li>
			      <li><a href="{{ route('register') }}">Register</a></li>
			    </ul>
			  </div>

			  <div class="nav-header valign-wrapper">
			    <div class="de">
			      <h1>Code on the go!</h1>
			      <div class="ge">Powered by the Lone Coders.</div>
			    </div>
			  </div>
			</nav>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>
