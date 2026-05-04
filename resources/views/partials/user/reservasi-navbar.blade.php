<nav class="navbar navbar-expand-lg py-3 border-bottom bg-white sticky-top">
  <div class="container">
    <a class="navbar-brand brand-title" href="{{ url('/') }}">JAYA FUTSAL</a>
    <button
      class="navbar-toggler border-0"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#dashNav"
      aria-controls="dashNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="dashNav">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
        <li class="nav-item">
          <a class="btn btn-outline-dark rounded-pill px-3" href="{{ url('/login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-outline-dark rounded-pill px-3" href="{{ url('/register') }}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#step-1">Reservasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#riwayat">Riwayat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#membership-form">Membership</a>
        </li>
        <li class="nav-item">
          <button class="btn btn-outline-dark rounded-pill px-3" type="button">Logout</button>
        </li>
      </ul>
    </div>
  </div>
</nav>
