<?php
    session_start();
    $title = "Programs - OAT";
    $page = "pg_oat";
	include("templates/header.php");
?>
<main>
<div class="inner_wrapper content">
	<div class="outer_div">
		<h1>PROGRAMS</h1>
	</div>
    <div class="inner_div">
    	<div class="subpage_subnav_div">
			<?php include("templates/subpage_subnav.php"); ?>
        </div><!-- end subpage_subnav_div -->
        <div class="content_div">
        	<!-- content goes here -->
        	<h1 class="pg_title">Office Administrator with Technology (OAT)</h1>
 
<img src="images/programs/oat.jpg" alt="Office Worker And Computer Shows Typing" width="300px" height="200px"/>


        	<p>Students from the Office Administrator with Technology (OAT) program will be available for an eight week full time or 288 hours part time work term opportunity every February and July. These students have completed a highly intensive three month program that includes the following industry certifications:</br>

        	Microsoft Office Specialist (MOS) — Word 2013<br>Microsoft Office Specialist (MOS) — Excel 2013</p>


			<!-- A quick link to allow user to jump to the form -->
			<div class="apply_now">
               <a class="apply_now" href="#form"><div class="apply_button">Apply Now</div></a>
            </div>
            <div class="clear"></div>

			<h2>Skills</h2>

            <ul>
                <li>MS Office 2013</li>
                <li>MS Office Specialist Certified</li>
                <li>MS Visio</li>
                <li>Simply Accounting</li>
                <li>Desktop Publishing - Photoshop &amp; Adobe Acrobat</li>
                <li>Web Design - HTML/Dreamweaver MX</li>
                <li>Presentation Skills</li>
                <li>Business Writing</li>
            </ul>
                        
          	<h2>Possible Positions</h2>
            
            <ul>
                <li>Office Manager</li>
                <li>Executive Assistants</li>
                <li>Administrative Assistants</li>
                <li>MS Office Applications Support</li>
                <li>Desktop Publishers/Web Site Maintenance</li>
            </ul>


        	<h4>As well as courses in: </h4>

        	<ul>
        		<li>Microsoft Outlook</li>
        		<li>Microsoft Access</li>
        		<li>Microsoft PowerPoint</li>
        		<li>Microsoft Visio</li>
        		<li>Adobe Photoshop Elements</li>
        		<li>Adobe Dreamweaver Simply Accounting Team Building</li>
        		<li>Conflict Resolution Managing Meetings</li>
        	</ul>

        	<p>Students can be valuable in helping a practicum host/potential employer start or complete a project; identify future employees while providing invaluable experience to students.</p>

        	<h4>Possible positions or tasks for OAT students include:</h4>

        	<ul>
        		<li>Administrative Coordinators</li>
        		<li>Application Support</li>
        		<li>Project Management Assistant</li>
        		<li>Database Assistant</li>
        		<li>Office Administrator / Office Manager</li>
        		<li>Desktop Publisher / Web Developer</li>
        	</ul>

        	<p>Companies get this free assistance fulltime, for an eight-week period. Students are covered by WCB and have liability insurance. We require that an evaluation form be filled out, reviewed with the student and submitted to BCIT in order for the student to graduate.</p>

        	<p>These students appreciate and value the possible hands-on experience and education provided by your organization.</p>


			<!-- Added empty tag to allow Apply Now to jump to this form -->
        	<h2 id="form"></h2>


        	<!--Form field-->
            <?php
                $name="Lorraine Fentie";
                //$email = "Lorraine_fentie@bcit.ca";
                $_SESSION["emailTo"] = "ljw6632@gmail.com";
                $_SESSION["pg_program"] = "../oat.php#form_msg";
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