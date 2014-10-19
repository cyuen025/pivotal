<?php
    session_start();
    $title = "Programs - SSD";
    $page = "pg_programs";
	include("templates/header.php");
?>
<main>
<div class="inner_wrapper content">
	<div class="outer_div">
		<h1>PROGRAMS</h1>
	</div><!--End outer_div-->

    <div class="inner_div">

    	<div class="subpage_subnav_div">
			<?php include("templates/subpage_subnav.php"); ?>
        </div><!-- end subpage_subnav_div -->

        <div class="content_div">
        	<!-- content goes here -->
        	<h1 class="pg_title">Software Systems Developer (SSD) </h1>

            <img src="images/programs/ssd.jpg" alt="Abstract computer programming code" width="300" height="200"/>

        	<p>If you are an established business or development shop in Vancouver's lower mainland and you need a website or website component developed, or an Android app, consider having BCIT Software System Developer (SSD) students design and build it for you.</p>

        	<p>Instructor-supervised teams of four BCIT students are available to design and build your application/web component from March 30, 2015 to April 24.</p>


			<!-- A quick link to allow user to jump to the form -->
			<div class="apply_now">
                <a class="apply_now" href="#form">
                    Apply Now
                </a>
            </div><!--End apply_now-->

            <div class="clear">
            </div><!--End clear-->
            
            <h2>Skills</h2>
            
            <ul>
                <li>.NET</li>
                <li>Java</li>
                <li>HTML</li>
                <li>DHTML</li>
                <li>XML</li>
                <li>ASP.NET</li>
                <li>PHP</li>
                <li>Object Oriented (UML)</li>
                <li>Structured Analysis / Design</li>
                <li>Rapid Application Prototyping</li>
                <li>Rational Rose</li>
                <li>Graphics User Interface Design</li>
                <li>e-Commerce</li>
            </ul>

        	<h2 id="form">Project Requirements</h2>

        	<ul>
        		<li>The project can be completed by a team of four SSD students within four weeks.</li>
        		<li>The project implements data storage and retrieval using a database.</li>
        		<li>During the project, a contact in your organization can be available approximately two to four hours each week to guide the project in meetings in person or via skype and by email or phone.</li>
        	</ul>

        	<p>Due to limited availability we cannot guarantee your project will be selected but we would love to hear from you and invite you to apply.  If you are interested, please complete the form and we will contact you with more information and next steps.</p>

			<!-- Added empty tag to allow Apply Now to jump to this form -->
        	<h2 id="form"></h2>

            <!-- form goes here-->
            <?php
                $name="Pat McGee";
                //$email = "pat_mcgee@bcit.ca";
                $_SESSION["emailTo"] = "ljw6632@gmail.com";
                $_SESSION["pg_program"] = "../ssd.php#form_msg";
                if(isset($_SESSION["error"]) && $_SESSION["error"] != ""){
                    echo "<p class=\"form_msg\" id=\"form_msg\">" . $_SESSION["error"] . "</p>";
                    $_SESSION["error"] = "";
                }
                include("templates/application_form.php");
            ?>
            <!-- end form -->
        </div><!-- end content_div -->
    </div><!-- end inner_div -->

<?php
	include("templates/footer.php");
?>