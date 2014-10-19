<?php
    $title = "Programs - NASP";
    $page = "pg_programs";
    session_start();
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
        	<h1 class="pg_title">Network Administration and Security Professional (NASP)
            </h1>
            
            <img src="images/programs/nasp.jpg" alt="graphic image for the network administration and security" width="300" height="200"/>

        	<p>BCIT’s NASP program provides employers with IT certified students capable of making an immediate contribution to the goals of the organization.  Sponsored work terms give you an opportunity to meet and work with skilled people who may one day be seeking employment with you. </p>
            
            <p>We are pleased to provide an opportunity for you to work with our highly qualified NASP students. While you evaluate and enlarge their capabilities, they in turn will offer their talents and enthusiasm. </p>

        	<p>The <span>NASP program</span> fulfills the need for trained entry-level network administration and security professionals. It provides the essential networking and security technical knowledge as well as the essential business and professional skills, such as teamwork and communication, needed for success in administrative and management positions in industry. </p>

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
                <li> Microsoft Certified Solutions Associate - Windows Server 2012</li>
                <li>Cisco Systems trained - CCNA certified </li>
                <li>Linux Professional Institute Junior Level Administrator (LPIC-1) </li>
                <li>CompTIA Security+</li>
                <li>VMware - Data Centre Virtualization VCA-DCV</li>
                <li>TCP/ID</li>
                <li>Project Management/Technical and Report Writing/Presentations </li>
                <li>Business Communication/Time Management/Organizational Development</li>
                <li>Team Building and Leadership</li>
                <li>Business Skills and Practice</li>
            </ul>

			<h2>Possible Positions</h2>
			
            <ul>
                <li>Network Administration</li>
                <li>Systems Support</li>
                <li>Systems Troubleshooting</li>
                <li>Systems Rollout/Upgrade</li>
                <li>Helpdesk</li>
                <li>Technical Writing</li>
                <li>IT Consulting</li>
                <li>IT Training</li>
                <li>IT Proposal Writing</li>
            </ul>

        	<h4>The goals of the NASP program are to provide students with the knowledge, skills, and experience to: </h4>

        	<ul>
        		<li>Administer and operate a multi-vendor computer network to defined service levels;</li>
        		<li>Establish, monitor, and maintain security on a multi-vendor computer network;</li>
        		<li>Design, plan, and implement secure multi-vendor computer networks;</li>
        		<li>Troubleshoot multi-vendor computer networks and efficiently resolve the troubles experienced on the network; </li>
        		<li>Demonstrate professionalism in communication and project management; </li>
        		<li>Formulate a network design, given a set of network objectives; and </li>
        		<li>Demonstrate professionalism in the supervision of the work of other network and security staff. NASP students are required to qualify for the following IT vendor certifications:</li>
        		<li>Microsoft Certified Solutions Associate (MCSA): Windows Server 2012</li>
        		<li>Cisco Certified Network Associate</li>
        		<li>CompTIA Linux+</li>
        		<li>CompTIA Security+ </li>
        	</ul>

        	<p>The job readiness of TSP and NASP students is enhanced by an opportunity for an eight-week work term—enabling students to apply the skills and knowledge gained in the classroom in an actual workplace where they will add crucial real-life experience to their résumés.</p>

        	<h2>Work-Term Proposal</h2>
        	
        	<p>Sponsored work terms provide an opportunity to utilize the skills of a trained student for which the employer will offer IT related work experience at no salaried cost. </p>

        	<h4>In addition to NASP technical knowledge, students also have professional skills in the following areas: </h4>

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

        	<h2>Benefits to the NASP trainee</h2>

        	<ul>
        		<li>Opportunity to use new technical skills and to gain real life experience</li>
        		<li>Evaluation of performance in the work force</li>
        		<li>Current, credible references</li>
        		<li>Opportunity to network, learn about potential employment opportunities</li>
        	</ul>

        	<h2 id="form">Employer Requirements
            </h2>

        	<ul>
        		<li>Please fill out attached form</li>
        		<li>Students will apply directly to the NASP Office – resumes will then be forwarded by email on an agreed upon date </li>
        		<li>Supervision for work – need not be direct supervision</li>
        		<li>Contract agreement signed by employer</li>
        		<li>Completion of an Work term Student Evaluation form at the end of the placement</li>
        	</ul>

        	<!--Form field-->
            <?php
                $name="Ron Terencio";
                //$email = "ron_terencio@bcit.ca";
                $_SESSION["emailTo"] = "ljw6632@gmail.com";
                $_SESSION["pg_program"] = "../nasp.php#form_msg";
                if(isset($_SESSION["error"]) && $_SESSION["error"] != "" ){
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