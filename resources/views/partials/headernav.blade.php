<nav class="navigation-bar">
  <ul>
    <li class="nav-link {{ Request::route()->getName() === 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">HOME</a></li>
    <li class="nav-link {{ Request::route()->getName() === 'comics.index' ? 'active' : '' }}"><a href="{{ route('comics.index') }}">COMICS</a></li>
  </ul>
</nav>