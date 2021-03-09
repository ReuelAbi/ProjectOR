<!-- Navbar -->
<nav
	class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top"
	data-bss-hover-animate="pulse" id="mainNav">
	<div class="container">
		<a class="navbar-brand js-scroll-trigger" href="home">OperationRedemption</a>
		<button data-toggle="collapse"
			class="navbar-toggler navbar-toggler-right"
			data-target="#navbarResponsive" type="button"
			aria-controls="navbarResponsive" aria-expanded="false"
			aria-label="Toggle navigation" value="Menu">
			<i class="fa fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item nav-link js-scroll-trigger"><a
					class="nav-link active js-scroll-trigger" href="about">About</a></li>
				<li class="nav-item nav-link js-scroll-trigger"><a
					class="nav-link js-scroll-trigger"
					href="login">Login/Register</a></li>
				<li class="nav-item nav-link js-scroll-trigger"><a
					class="nav-link js-scroll-trigger" href="#contact">contact</a></li>
				@if(Session::get('principal'))
				<li class="nav-item nav-link js-scroll-trigger"><a
					class="nav-link js-scroll-trigger" href="logout">Log Out</a></li>
				@endif	
			</ul>
		</div>
	</div>
</nav>
<br>