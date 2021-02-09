<!--Navbar-->
<nav class="navbar navbar-dark bg-dark lighten-4">

  <!-- Navbar brand -->
  <a class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
  	<img class="img-thumbnail" src="https://design4users.com/wp-content/uploads/2017/07/animation_logo_design.gif.pagespeed.ce.1-SWR6QNEf.gif" height="100px" width="150px"/>
  </a>
 
  <!-- Collapse button -->
  <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarContent"
    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
	
	
  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarContent">
	
    <!-- Links -->
    <ul class="navbar-nav mr-auto">    
          <li class="nav-item active">
            <a class="nav-link" href="home">Home<!-- <span class="sr-only">(current)</span> --></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">About Operation Redemption</a>
          </li>
	@if(Session::get('principal'))
          <li class="nav-item">
            <a class="nav-link" href="survey">Survey</a>
          </li>
          <li class="nav-item">
          	<a class="nav-link" href='logout'>Log Out</a>
          </li>
    @endif
    </ul>
    <!-- Links -->

  </div>
  <!-- Collapsible content -->
    
</nav>
<!--/.Navbar-->

<!-- /.Heading -->
<h2>@yield('heading')</h2>