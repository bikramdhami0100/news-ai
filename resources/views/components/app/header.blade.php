
    <header class="header">
      <div class="date-bar">
        <div class="container">
          <div class="date-info">
            <span id="current-date-bs"></span>
            <span class="separator">|</span>
            <span id="current-date-ad"></span>
          </div>
          <div class="header-actions">
            <a href="#" class="login-btn">लगइन</a>
            <a href="#" class="register-btn">रजिस्टर</a>
          </div>
        </div>
      </div>

      <!-- Main Navigation -->
      <nav class="main-nav">
        <div class="container">
          <div class="nav-brand">
            <img src="Images/Logo.png" alt="NEWSai Logo" class="logo" />
            <h1>NEWSai</h1>
          </div>

          <ul class="nav-menu">
            <li><a href="{{ route('home') }}" class="<?= request()->routeIs('home') ? 'active' : '' ?>">होमपेज</a></li>
            <li><a href="{{route('news')}}" class ="<?= request()->routeIs('news') ? 'active' : '' ?>">समाचार</a></li>
            <li><a href="{{route('business')}}" class="<?= request()->routeIs('business') ? 'active' : '' ?>">बिजनेस</a></li>
            <li><a href="{{route('life-style')}}" class="<?= request()->routeIs('life-style') ? 'active' : '' ?>" >जीवनशैली</a></li>
            <li><a href="{{route('entertainment')}}" class="<?= request()->routeIs('entertainment') ? 'active' : '' ?>" >मनोरञ्जन</a></li>
            <li><a href="{{route('opinion')}}" class="<?= request()->routeIs('opinion') ? 'active' : '' ?>" >विचार</a></li>
             <li><a href="{{route('technology')}}" class="<?= request()->routeIs('technology') ? 'active' : '' ?>" >टेक्नोलॉजी</a></li>
            <li><a href="{{route('sports')}}" class="<?=request()->routeIs('sports')?'active':'' ?>">खेलकुद</a></li>
            <li><a href="{{route('upload')}}" class="upload-link <?=request()->routeIs('upload')?'active':''?> ">समाचार अपलोड</a></li>
          </ul>

          <div class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </nav>
    </header>