    <header class="header_section {{Request::is('index')? '':'innerpage_header'}} ">
      <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="{{route('index')}}">
          <span>
            Healet
          </span>
        </a>
        <div class="" id="">

          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="{{route('index')}}">Home</a>
                <a href="{{route('about')}}">About</a>
                <a href="{{route('shop')}}">Shop</a>
                <a href="{{route('blog')}}">Blog</a>
              </div>
            </div>
          </div>

        </div>
      </nav>
    </div>
  </header>