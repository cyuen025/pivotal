<?php
    session_start();
    $title = "Programs - TSP";
    $page = "pg_programs";
	include("templates/header.php");
?>
<main>
<div class="inner_wrapper content">
	<div class="outer_div">
		<h1>Programs</h1>
	</div><!--End outer_div-->

    <div class="inner_div">

    	<div class="subpage_subnav_div">
			<?php include("templates/subpage_subnav.php"); ?>
        </div><!-- end subpage_subnav_div -->

        <div class="content_div">
        	<!-- content goes here -->
            <h1 class="pg_title">Technology Support Professional (TSP)</h1>
            
            <img src="images/programs/comp.jpg" alt="laptop keybord picture" width="300" height="200"/>
            
        	<p>BCIT’s TSP program provides employers with IT certified students capable of making an immediate contribution to the goals of the organization.  Sponsored work terms give you an opportunity to meet and work with skilled people who may one day be seeking employment with you. </p>

        	<p>We are pleased to provide an opportunity for you to work with our highly qualified TSP students. While you evaluate and enlarge their capabilities, they in turn will offer their talents and enthusiasm.</p>

        	<p>The TSP program focuses on providing a solid foundation of IT skills students can build on. </p>

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
                <li>Windows Server 2012</li>
                <li>Networking, TCP/IP</li>
                <li>MS Office and MS Project 2013</li>
                <li>Help Desk Support/Call Center Training</li>
                <li>A+ Hardware/Software Technician</li>
                <li>Web Design - HTML/Dreamweaver MX</li>
                <li>Presentation Skills</li>
            </ul>
            
            <h2>Possible Positions</h2>

            <ul>
                <li>Helpdesk</li>
                <li>Tier 1/2 Support</li>
                <li>Systems Support</li>
                <li>Systems Troubleshooting</li>
                <li>Systems Rollout/Upgrade</li>
            </ul>


        	<h4>This program is taught in a multi-platform environment with qualified instructors. By the end of the TSP program, students will be able to: </h4>

        	<ul>
        		<li>Build a computer from individual parts based on predefined requirements.</li>
        		<li>Install and configure multiple operating systems such as Windows 7/8, Server 2012, Linux, BSD.</li>
        		<li>Configure machines in a virtual environment.</li>
        		<li>Create routed network environments, both physically and virtually.</li>
        		<li>Demonstrate understanding of core network concepts (OSI Model, IPv4, DHCP, Routing, File/Print services, Email). </li>
        		<li>Describe current computing concepts (Cloud computing, Storage Area Networks, Virtualization). </li>
        		<li>Create a professional resume, and use interview skills to qualify for IT support positions.</li>
        	</ul>

        	<h4>TSP students are required to qualify for the following IT vendor certifications: </h4>

        	<ul>
        		<li>CompTIA A+</li>
        		<li>CompTIA Network+</li>
        		<li>Microsoft Certified Professional</li>
        	</ul>

        	<h2>Work term proposal</h2>

        	<p>Sponsored work terms provide an opportunity to utilize the skills of a trained student for which the employer will offer IT related work experience at no salaried cost.</p>

        	<h4>In addition to TSP technical knowledge, students also have professional skills in the following areas:</h4>

        	<ul class="ul_float">
        		<li>&#9839; Team Building</li>
        		<li>&#9839; Conflict Resolution</li>
        		<li>&#9839; Project Management</li>
        		<li>&#9839; Organizational Development</li>
        		<li>&#9839; Technical Writing</li>
        	</ul>

            <div class="clear">
            </div><!--End clear-->

        	<h2>Benefits to the Employer</h2>

        	<ul>
        		<li>The employer interviews and chooses the most suitable candidate for the placement</li>
        		<li>Review the work of a potential future employee at minimum risk and investment</li>
        		<li>Intern will comply with the same hours of work and other employment practices at the host company</li>
        		<li>WorkSafe and Liability Insurance is provided by BCIT</li>
        	</ul>

        	<h2>Benefits to the TSP trainee</h2>

        	<ul>
        		<li>Opportunity to use new technical skills and to gain real life experience</li>
        		<li>Evaluation of performance in the work force</li>
        		<li>Current, credible references</li>
        		<li>Opportunity to network, learn about potential employment opportunities</li>
        	</ul>

        	<h2 id="form">Employer Requirements</h2>

        	<ul>
        		<li>Please fill out attached form</li>
        		<li>Students will apply directly to the TSP Office – resumes will then be forwarded by email on an agreed upon date</li>
        		<li>Supervision for work – need not be direct supervision</li>
        		<li>Contract agreement signed by employer</li>
        		<li>Completion of an Work term Student Evaluation form at the end of the placement</li>
        	</ul>

        	<!-- Form field-->
            <?php
                $name="Ron Terenclo";
                //$_SESSION["emailTo"] = "ron_terencio@bcit.ca";
                $_SESSION["emailTo"] = "ljw6632@gmail.com";
                $_SESSION["pg_program"] = "../tsp.php#form_msg";
                if(isset($_SESSION["error"]) && $_SESSION["error"] != ""){
                    echo "<p class=\"form_msg\" id=\"form_msg\">" . $_SESSION["error"] . "</p>";
                    $_SESSION["error"] = "";
                }
                include("templates/application_form.php");
            ?>
        	<!-- End form-->
        </div><!-- end content_div -->
    </div><!-- end inner_div -->

<?php
	include("templates/footer.php");
?>