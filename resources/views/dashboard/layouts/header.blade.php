<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="nav-link bg-dark border-0"><i class="nav-icon fas fa-user-alt"></i> Logout</button>
            </form>
        </li>
      </ul>
  </nav>
  <!-- /.navbar -->

