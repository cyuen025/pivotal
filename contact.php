<?php
	$title = "Contact";
	$page = "pg_contact";
	include("templates/header.php");
?>
<main>
<div class="inner_wrapper content">
	<div class="outer_div">
		<h1>Contact</h1>
	</div>
    <div class="inner_div">
        <div class="content_div">
            <div class="card">
                <a href="oat.php">
                    <div class="card_deco">
                        <h2>O A T</h2>
                    </div>
                </a>
                <a href="oat.php#noreq_form" class="apply_btn">APPLY</a>
                <h4><a href="oat.php">Office Administrator with Technology</a></h4>
                <p>Lorraine Fentie</p>
                <p><span class="icon-user"></span>Program Coordinator</p> 
                <p><span class="icon-phone"></span>604-412-7710</p> 
                <p><span class="icon-envelope"></span>Lorraine_fentie@bcit.ca</p>
            </div><!-- .card -->

            <div class="card"> 
                <a href="twd.php">  
                    <div class="card_deco">
                        <h2>T W D</h2>
                    </div>
                </a>
                <a href="twd.php#noreq_form" class="apply_btn">APPLY</a>
                <h4><a href="twd.php">Technical Web Design</a></h4>
                <p>Beata Kozma</p>
                <p><span class="icon-user"></span>Instructor</p>
                <p><span class="icon-envelope"></span>beata_kozma@bcit.ca</p>
            </div><!-- .card -->

            <div class="card">
                <a href="ssd.php">  
                    <div class="card_deco">
                        <h2>S S D</h2>
                    </div>
                </a>
                <a href="ssd.php#form" class="apply_btn">APPLY</a>
                <h4><a href="ssd.php">Software Systems Development</a></h4>
                <p>Pat McGee</p>
                <p><span class="icon-user"></span>Instructor</p>
                <p><span class="icon-phone"></span>604-412-7720</p> 
                <p><span class="icon-envelope"></span>pat_mcgee@bcit.ca</p>
            </div><!-- .card -->

            <div class="card">
                <a href="nasp.php"> 
                    <div class="card_deco">
                        <h2>N A S P</h2>
                    </div>
                </a>
                <a href="nasp.php#form" class="apply_btn">APPLY</a>
                <h4><a href="nasp.php">Network Admin and Security Professional</a></h4>
                <p>Ron Terencio</p>
                <p><span class="icon-user"></span>Program Coordinator</p>
                <p><span class="icon-phone"></span>604-412-7622</p> 
                <p><span class="icon-envelope"></span>ron_terencio@bcit.ca</p>
            </div><!-- .card -->

            <div class="clear"></div>

            <div class="card">
                <a href="tsp.php"> 
                    <div class="card_deco">
                        <h2>T S P</h2>
                    </div>
                </a>
                <a href="tsp.php#form" class="apply_btn">APPLY</a>
                <h4><a href="tsp.php">Technology Support Professional</a></h4>
                <p>Ron Terencio</p> 
                <p><span class="icon-user"></span>Program Coordinator</p>
                <p><span class="icon-phone"></span>604-412-7622</p> 
                <p><span class="icon-envelope"></span>ron_terencio@bcit.ca</p>
            </div><!-- .card -->

            <div class="clear"></div>
            
            <h3>Campus info, map, and directions</h3>
            
			<div class="campus_info_left_col">
                <p>General inquiries: 604.412.7788</p>
                
                <p>Fax: 604.408.0921</p>
                
                <p class="mailing_address">Mailing address:</p>
                
                <p>HTP Programs<br/>
                BCIT Downtown Campus<br/>
                350 - 555 Seymour Street<br/>
                Vancouver, BC, Canada V6B 3H6</p>
            </div><!-- .campus_info_left_col" -->
            
            <div class="campus_info_right_col">
                <!-- Google maps -->
                <div id="map_canvas"></div>
                <img class="static_map" src="images/staticmap.png" width="400" height="280" alt="google map"/>
            </div><!-- .campus_info_right_col -->
            <div class="clear"></div>
        </div><!-- .content_div -->
    </div><!-- .inner_div -->
<?php
	include("templates/footer.php");
?>