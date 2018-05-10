	<div class="header">
		<div class="head2">
			<ul class="nav-agr">
				<li><a class="brand">AGROSHOP</a></li>
				<li><a href="#" class="link2">Home</a></li>
				<li><a href="views/product_all.php" class="link2">Produk</a></li>
				<li><a href="views/about.php" class="link2">Tentang</a></li>
				<li><a href="views/contact.php" class="link2">Kontak</a></li>
				<li class="dropdown-agr">
					<a href="#" class="link2">Menu » </a>
					<div class="dropdownnav">
						<a href="views/profile.php">Profile</a>
						<a href="views/product_all.php">Promo</a>
						<a href="views/product_all.php">Review</a>
					</div>
				</li>
				<?php session_start(); if(!empty($_SESSION['user']) || !empty($_SESSION['admin'])){ ?>
				<li><a href="core/logout.php" class="link2">Logout » </a></li>
				<?php } else { ?>
				<li><a href="views/login.php" class="link2">Login » </a></li>
				<?php } ?>
				<li>
					<a class="link3 search-button">
						<form action="views/product_all.php" method="get">
							<input class="textproduct" type="text" name="search" placeholder="Cari Produk">
							<button type="submit" class="submitproduct glyphicon glyphicon-search"></button>
						</form>
					</a>
				</li>
			</ul>
		</div>
	</div>