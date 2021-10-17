<div>
    <img src="{{ asset('images/pk-logo.svg') }}" width="300px" alt="">
</div>
<nav>
<ul>
    <li><a href="/" class="">Home</a></li>
    <li class="{{ Request::path() == 'posts' ? 'active' : '' }}">
          <a href="{{ route('Posts') }}">Posty</a></li>  
    <li class="{{ Request::path() == 'computers/about' ? 'active' : '' }}">
          <a href="{{ route('About') }}">O kolekcji</a></li>
    <li class="{{ Request::path() == 'computers' ? 'active' : '' }}">
          <a href="{{ route('Computers') }}">Komputery</a></li>
</ul>
</nav>