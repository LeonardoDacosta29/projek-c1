<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a href="/" class="navbar-brand">Projek-C1</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav"> 
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/')?'active' : ''}}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about')?'active' : '' }}" href="/about">About</a>
          </li>
        </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('news')?'active' : ''}}" href="/news">News</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome Back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dachboard"><i class="bi bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logoyt" method="POST">
                  @csrf 
                  <button type="submit" class="dropdown-item"> <i class="bi bi-box-arrow-right"></i>Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a href="/login" class="nav-link{{ Request::is('login')?'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login </a>
          </li>
          @endauth
        </ul>
      </div>
    </div> 
  </nav>