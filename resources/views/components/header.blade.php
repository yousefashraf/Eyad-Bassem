<nav id="navbar">
  <a href="{{ url('/') }}" class="nav-logo">
    <span class="nav-logo-img" aria-hidden="true">E&amp;B</span>
  </a>

  <div class="nav-links" id="navLinks">
    <a href="{{ route('evolved') }}#about">About</a>
    <a href="{{ route('evolved') }}#process">Process</a>
    <a href="{{ route('evolved') }}#method">Method</a>
    <a href="{{ route('evolved') }}#calculator">Calculator</a>
    <a href="{{ route('evolved') }}#results">Results</a>
    <a href="{{ route('evolved') }}#faq">FAQ</a>
  </div>

  <a href="{{ route('evolved') }}#cta" class="nav-cta">Start Now</a>

  <div class="hamburger" onclick="document.getElementById('navLinks').classList.toggle('open')" aria-hidden="true">
    <span></span><span></span><span></span>
  </div>
</nav>
