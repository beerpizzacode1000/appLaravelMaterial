
<div class="navbar navbar-warning">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-warning-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="javascript:void(0)">@yield('title')</a>
    </div>
    <div class="navbar-collapse collapse navbar-warning-collapse">
      <ul class="nav navbar-nav  navbar-right">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        
     <ul class="nav navbar-nav">
        <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Miembro
				<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="/users/register">Register</a></li>
					<li><a href="/users/login">Login</a></li>
				</ul>
			</li>
      </ul> 
    </div>
  </div>
</div>

