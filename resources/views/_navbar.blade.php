<header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{ route('shop') }}">
          <span>
            Giftos
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('shop') }}">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('why') }}">
                Why Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('testimonial') }}">
                Testimonial
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
            <a href="{{ route('login') }}>
            <i class="fas fa-shopping-bag"></i>
              <span>
                Login
              </span>
            </a>
            <a href="">
              <i class="fa fa-shopping-bag" ></i>
            </a>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>