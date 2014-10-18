	<div class="outer_div">
		<nav class="mobile_footer_nav">
			<ul>
		        <li><a href="programs.php">PROGRAMS</a></li>
				<li><a href="projects.php">PROJECTS</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="nasp.php">NASP</a></li>
				<li><a href="oat.php">OAT</a></li>
				<li><a href="ssd.php">SSD</a></li>
				<li><a href="twd.php">TWD</a></li>
				<li><a href="tsp.php">TSP</a></li>
			</ul>
		</nav>
	</div>
</div><!-- end inner_wrapper -->
</main>

<footer>
	<div class="footer_wrapper">
		<nav>
			<ul>
            	<li><a href="index.php">HOME</a></li>
                <li><a href="programs.php">PROGRAMS</a></li>
				<li><a href="nasp.php">NASP</a></li>
				<li><a href="oat.php">OAT</a></li>
				<li><a href="ssd.php">SSD</a></li>
				<li><a href="twd.php">TWD</a></li>
				<li><a href="tsp.php">TSP</a></li>
				<li><a href="projects.php">PROJECTS</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</nav>
		<a href="http://www.bcit.ca/" target="_blank"><img src="images/bcit_logo.png" alt="BCIT logo"></a>
		<a href="index.php" class="footer_home"><span class="icon-home"></span></a>
		<p>Copyright &copy; 2014 BCIT HTP Department</p>
		
	</div> <!-- end footer_wrapper -->
</footer>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<?php
	if ($page == "pg_contact") echo "<script src=\"scripts/google_maps.js\"></script>";
?>
<script src="scripts/jquery-1.11.1.min.js"></script>
<script src="scripts/subnav.js"></script>
<script src="scripts/main_nav.js"></script>
<?php
	if ($page == "pg_programs") echo "<script src=\"scripts/sticky_nav_program.js\"></script>";
	if ($page == "pg_ssd") echo "<script src=\"scripts/sticky_nav_program.js\"></script>";
	if ($page == "pg_twd") echo "<script src=\"scripts/sticky_nav_program.js\"></script>";
	if ($page == "pg_oat") echo "<script src=\"scripts/sticky_nav_program.js\"></script>";
	if ($page == "pg_nasp") echo "<script src=\"scripts/sticky_nav_program.js\"></script>";
	if ($page == "pg_tsp") echo "<script src=\"scripts/sticky_nav_program.js\"></script>";
?>
<script src="scripts/programs_content.js"></script>
<script src="scripts/scroll_animation.js"></script>
<script src="scripts/mobile_menu.js" ></script>
<?php
	// image maps plugin for projects logos
	if ($page == "pg_projects") {
		echo "<script src=\"scripts/jquery.rwdImageMaps.min.js\"></script>";
		echo "<script> $('img[usemap]').rwdImageMaps(); </script>";
	}
?>
</body>
</html> 