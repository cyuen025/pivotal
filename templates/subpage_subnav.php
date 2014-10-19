<!-- expandable nav -->
<nav class="subpage_sub_nav">
    <ul>
    	<li><a href="#" <?php  if (strstr($page, "pg_overview")) echo "class=\"subpage_sub_nav_collapsed_selected\" style=\"display: none;\""; else echo "class=\"subpage_sub_nav_collapsed\""; ?>><h3>Overview</h3></a></li>
        <a href="programs.php" <?php  if (strstr($page, "pg_overview")) echo "class=\"subpage_sub_nav_expanded_selected\" style=\"display: block;\""; else echo "class=\"subpage_sub_nav_expanded\""; ?>>
        	<div>
                <h2>Overview</h2>
                <hr/>
                <h4>General Program Information</h4>
                <hr/>
        	</div>
        </a>
        <li><a href="#" <?php  if (strstr($page, "pg_nasp")) echo "class=\"subpage_sub_nav_collapsed_selected\" style=\"display: none;\""; else echo "class=\"subpage_sub_nav_collapsed\""; ?>><h3>NASP</h3></a></li>
        <a href="nasp.php" <?php  if (strstr($page, "pg_nasp")) echo "class=\"subpage_sub_nav_expanded_selected\" style=\"display: block;\""; else echo "class=\"subpage_sub_nav_expanded\""; ?>>
        	<div>
                <h2>NASP</h2>
                <hr/>
                <h4>Network<br>Administration and<br>Security<br>Professional</h4>
                <hr/>
                <p>applied intensive<br>1-year program</p>
        	</div>
        </a>
        <li><a href="#" <?php  if (strstr($page, "pg_oat")) echo "class=\"subpage_sub_nav_collapsed_selected\" style=\"display: none;\""; else echo "class=\"subpage_sub_nav_collapsed\""; ?>><h3>OAT</h3></a></li>
        <a href="oat.php" <?php  if (strstr($page, "pg_oat")) echo "class=\"subpage_sub_nav_expanded_selected\" style=\"display: block;\""; else echo "class=\"subpage_sub_nav_expanded\""; ?>>
        	<div>
                <h2>OAT</h2>
                <hr/>
                <h4>Office<br>Administration with<br>Technology</h4>
                <hr/>
                <p>hands-on computer and<br>business skills oriented<br>program</p>
        	</div>
        </a>
        <li><a href="#" <?php  if (strstr($page, "pg_ssd")) echo "class=\"subpage_sub_nav_collapsed_selected\" style=\"display: none;\""; else echo "class=\"subpage_sub_nav_collapsed\""; ?>><h3>SSD</h3></a></li>
        <a href="ssd.php" <?php  if (strstr($page, "pg_ssd")) echo "class=\"subpage_sub_nav_expanded_selected\" style=\"display: block;\""; else echo "class=\"subpage_sub_nav_expanded\""; ?>>
        	<div>
                <h2>SSD</h2>
                <hr/>
                <h4>Software<br>Systems<br>Developer</h4>
                <hr/>
                <p>7.5 month full-time business application development program</p>
        	</div>
        </a>
        <li><a href="#" <?php  if (strstr($page, "pg_twd")) echo "class=\"subpage_sub_nav_collapsed_selected\" style=\"display: none;\""; else echo "class=\"subpage_sub_nav_collapsed\""; ?>><h3>TWD</h3></a></li>
        <a href="twd.php" <?php  if (strstr($page, "pg_twd")) echo "class=\"subpage_sub_nav_expanded_selected\" style=\"display: block;\""; else echo "class=\"subpage_sub_nav_expanded\""; ?>>
        	<div>
                <h2>TWD</h2>
                <hr/>
                <h4>Technical Web Designer</h4>
                <hr/>
                <p>intensive hands-on program on<br>current web design technologies</p>
        	</div>
        </a>
        <li><a href="#" <?php  if (strstr($page, "pg_tsp")) echo "class=\"subpage_sub_nav_collapsed_selected\" style=\"display: none;\""; else echo "class=\"subpage_sub_nav_collapsed\""; ?>><h3>TSP</h3></a></li>
        <a href="tsp.php" <?php  if (strstr($page, "pg_tsp")) echo "class=\"subpage_sub_nav_expanded_selected\" style=\"display: block;\""; else echo "class=\"subpage_sub_nav_expanded\""; ?>>
        	<div>
                <h2>TSP</h2>
                <hr/>
                <h4>Technology<br>Support<br>Professional</h4>
                <hr/>
                <p>40 week full-time<br>program</p>
        	</div>
        </a>
    </ul>
</nav> <!-- end expandable nav -->
<div class="clear"></div>

<!-- entirely collapsed nav for tablet view -->
<nav class="subpage_sub_nav_tablet override">
    <ul>
    	<li><a href="programs.php"><h3>Overview</h3></a></li>
        <li><a href="nasp.php"><h3>NASP</h3></a></li>
        <li><a href="oat.php"><h3>OAT</h3></a></li>
        <li><a href="ssd.php"><h3>SSD</h3></a></li>
        <li><a href="twd.php"><h3>TWD</h3></a></li>
        <li><a href="tsp.php"><h3>TSP</h3></a></li>
    </ul>
</nav> <!-- end collapsed nav -->
<div class="clear"></div>

<!-- sticky nav -->
<nav class="subpage_sub_nav_sticky">
	<div class="subpage_sub_nav_sticky_left">
        <ul>
            <li><a href="programs.php"><h3>Overview</h3></a></li>
            <li><a href="nasp.php"><h3>NASP</h3></a></li>
            <li><a href="oat.php"><h3>OAT</h3></a></li>
        </ul>
    </div>
	<div class="subpage_sub_nav_sticky_right">
        <ul>
            <li><a href="ssd.php"><h3>SSD</h3></a></li>
            <li><a href="twd.php"><h3>TWD</h3></a></li>
            <li><a href="tsp.php"><h3>TSP</h3></a></li>
        </ul>
    </div>
    <div class="clear"></div>
</nav> <!-- end sticky nav -->