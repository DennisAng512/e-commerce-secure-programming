<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <span class="nav-item">
    <a class="navbar-brand nav-link" href="/">LOGO</a>
  </span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav me-auto">
      <form action="/books">
        <li class="input-group nav-item" style="height: 20px;">
          <input type="text" class="form-control nav-link" placeholder="Search..." name="search" value="{{ request('search') }}">
          <button class="btn btn-outline-secondary nav-link" type="submit">Search</button>
        </li>
      </form>
      <li class="nav-item">
        <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $title == 'Tag lists' ? 'active' : '' }}" href="/tags">Tags</a>
      </li>
      @auth
      <li class="nav-item">
        <a class="nav-link {{ $title == 'Wishlist' ? 'active' : '' }}" href="/wishlist">Wishlist</a>
      </li>
      @endauth
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <ul class="navbar-nav">
    @auth
        <li class="nav-item me-3" style="margin:auto">
          <span>Welcome {{ auth()->user()->name }}</span>
        </li>
        <li class="nav-item me-3">
          <form action="/logout" method="post">
            @csrf
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="submit" class="btn btn-secondary">Logout</button>
            </div>
          </form>
        </li>
      @else
        <li class="nav-item">
          <a href="/login"><button type="button" class="btn btn-secondary">Login</button></a>
        </li>
        <li class="nav-item">
          <a href="/register"><button type="button" class="btn btn-secondary">Register</button></a>
        </li>
      @endauth
    </ul>
  </div>
</nav>