<!-- Navbar -->
<nav
	class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top"
	data-bss-hover-animate="pulse" id="mainNav">
	<div class="container">
		<a class="navbar-brand js-scroll-trigger" href="home">OperationRedemption</a>
		<button data-bs-toggle="collapse"
			class="navbar-toggler navbar-toggler-right"
			data-bs-target="#navbarResponsive" type="button"
			aria-controls="navbarResponsive" aria-expanded="false"
			aria-label="Toggle navigation" value="Menu">
			<i class="fa fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item nav-link js-scroll-trigger"><a
					class="nav-link js-scroll-trigger" href="#about">About</a></li>
				<li class="nav-item nav-link js-scroll-trigger"><a
					class="nav-link js-scroll-trigger" href="resource-list">All
						Resources</a></li>
				<li class="nav-item nav-link js-scroll-trigger"><a
					class="nav-link js-scroll-trigger" href="church-list">
						Churches</a></li>
				<li class="nav-item dropdown" style="padding-top: 8px;"><a
					class="dropdown-toggle nav-link" aria-expanded="false"
					data-bs-toggle="dropdown">Resources</a>
					<div class="dropdown-menu" data-bss-hover-animate="pulse"
						style="border-radius: 14px;">
						<a class="dropdown-item" href="church-list"
							style="color: rgb(128, 128, 128);">Churches</a><a
							class="dropdown-item" href="resource-list"
							style="color: rgb(128, 128, 128);">All Resources</a>
					</div></li>
				<li class="nav-item nav-link js-scroll-trigger"><a
					class="nav-link js-scroll-trigger" href="#contact">contact</a></li>	
				@if(!Session::get('principal'))
				<li class="nav-item nav-link js-scroll-trigger"><a
					class="nav-link js-scroll-trigger"
					href="login">Login/Register</a></li>
				@endif
				@if(Session::get('principal'))
				<li class="nav-item nav-link js-scroll-trigger"><a
					class="nav-link js-scroll-trigger"
					href="logout">Logout</a></li>
				@endif
			</ul>
		</div>
	</div>
</nav>
<br>