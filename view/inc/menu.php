<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid">
		<!-- <a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button> -->
		<div class="collapse navbar-collapse justify-content-between" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="index.php?page=homepage" data-tr = "Homepage" class="nav-link"></a>
				</li>
				<li class="nav-item">
					<a href="index.php?page=controller_videogame&op=list" data-tr = "Videogames" class="nav-link"></a>
				</li>
				<li class="nav-item">
					<a href="index.php?page=aboutus" data-tr = "About Us" class="nav-link"></a>
				</li>
				<li class="nav-item">
					<a href="index.php?page=contact" data-tr = "Contact Us" class="nav-link"></a>
				</li>
				<li class="nav-item">
					<a href="index.php?page=services" data-tr = "Services" class="nav-link"></a>
				</li>
				<li class="nav-item">
					<a href="index.php?page=shop" data-tr = "Shop" class="nav-link"></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-tr="Language"></a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" data-tr = "Valencian" id = "btn-val"></a></li>
						<li><a class="dropdown-item" data-tr = "Spanish" id = "btn-es"></a></li>
						<li><a class="dropdown-item" data-tr = "English" id = "btn-en"></a></li>
					</ul>
				</li>
				<form class="d-flex">
					<div class = "input">
						<input id="input_search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" autocomplete=off>
						<div id="searchAutocomplete"></div>
					</div>


					<button id="button_search" name="button_search" class="btn btn-outline-success" type="button">Search</button>
				</form>
			</ul>
			<div id="account-navbar"></div>
		</div>
	</div>
</nav>