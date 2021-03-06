    <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-primary">
      <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link{{ Request::is('users*') || Request::is('user/*') ? '' : ' active' }}" href="/">Home</a>
          <a class="nav-item nav-link{{ Request::is('users*') ? ' active' : '' }}" href="/users">Users</a>
        </div>
      </div>
    </nav>
