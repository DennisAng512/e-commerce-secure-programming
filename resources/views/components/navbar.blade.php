<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?= $title == 'Home' ? 'active' : '' ?>" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= $title == 'Tag lists' ? 'active' : '' ?>" href="/tags">View Tags</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
      <form action="/books">
        <li class="input-group nav-item" style="height: 20px;">
          <input type="text" class="form-control nav-link" placeholder="Search..." name="search" value="{{ request('search') }}">
          <button class="btn btn-outline-secondary nav-link" type="submit">Search</button>
        </li>
      </form>
      @auth
        <li class="nav-item">
          <span>Welcome {{ auth()->user()->name }}</span>
        </li>
        <li class="nav-item">
          <form action="/logout" method="post">
            @csrf
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="submit" class="btn btn-secondary">Logout</button>
            </div>
          </form>
        </li>
      @else
        <li class="nav-item">
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="/login"><button type="button" class="btn btn-secondary">Login</button></a>
            <a href="/register"><button type="button" class="btn btn-secondary">Register</button></a>
          </div>
        </li>
      @endauth
    </ul>
  </div>
</nav>