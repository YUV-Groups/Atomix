<!-- <nav class="nav-extended nav-full-header z-depth-0 blue-grey darken-3">
  <div class="nav-background">
    <div class="ea k" style="background-image: url('/images/nav-background.jpg');"></div>
  </div>
  <div class="nav-wrapper db">
    <a href="/pages/demo" class="brand-logo"><i class="material-icons">camera</i>Atomix</a>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="bt hide-on-med-and-down">
      <li><a href="">Sign In</a></li>
      <li><a href="">Sign Up</a></li>
    </ul>
  </div>

  <div class="nav-header valign-wrapper">
    <div class="de">
      <h1>Code on the go!</h1>
      <div class="ge">Powered by the Lone Coders.</div>
    </div>
  </div>
</nav>
<ul class="side-nav" id="nav-mobile">
  <li><a href="/pages/demo"><i class="material-icons">camera</i>Gallery</a></li>
  <li class="k"><a href="/pages/dark-theme"><i class="material-icons">brightness_3</i>Dark Theme</a></li>
</ul> -->
        <nav>
    <div class="nav-wrapper">
      <a href="{{ route('home') }}" class="brand-logo"><i class="material-icons">camera</i>Atomix</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
      </ul>
    </div>
  </nav>