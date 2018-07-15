
<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero">
          <img src="{{ asset('homepage/img/logo.png') }}" alt="" title="" style="width:0%;height:0%;" /></img>
        </a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active">
            <a href="#hero">Home</a>
          </li>
          <li>
            <a href="#lomba">Lomba</a>
          </li>
          <li>
              <a href="#pameran-produk">Pameran</a>
            </li>
          <li>
            <a href="#seminar">Seminar</a>
          </li>
          <li>
            <a href="#jadwal">Jadwal</a>
          </li>
          <li>
            <a href="#berita">Berita</a>
          </li>
          <li>
            <a href="#faq">FAQ</a>
          </li>
          <li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
          </li>

        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->