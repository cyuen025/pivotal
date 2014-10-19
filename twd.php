<?php
    session_start();
    $title = "Programs - TWD";
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
        	<h1 class="pg_title">Technical Web Designer (TWD)</h1>

            <img src='images/programs/twd.jpg' alt="grey keybord with gree buton 'Support'" width="300" height="200"/>

        	<p class="bold">The BCIT Technical Web Designer (TWD) Students are happy to help start-up companies and non-profit organizations who need web design work done.</p>

        	<p>This program takes students with little to no knowledge of web design and gives them the skills necessary to develop web sites for small to medium sized business or for large web sites as part of a web development team.</p>

        	<p>Amongst other topics, students are taught user interface design, Photoshop and Illustrator. They then apply these skills to building web sites by learning to use the three pillar languages of the web; HTML, CSS and JavaScript.</p>

        	<p>They also learn how to build dynamic web sites using the popular WordPress content management platform and PHP (a language that WordPress is built on).</p>

        	<p>Towards the end of the 6 month program students apply these skills to real client projects and this is where we are always looking for suitable client projects for our students to apply their skills.</p>

        	<p>Student Program Web Site <a href="http://twd.htpwebdesign.ca">http://twd.htpwebdesign.ca</a></p>

        	<p>Official BCIT Web Page for the Program <a href="http://www.bcit.ca/study/programs/6490cert">http://www.bcit.ca/study/programs/6490cert</a></p>


			<!-- A quick link to allow user to jump to the form -->
			<div class="apply_now">
                <a href="#form">
                    Apply Now
                </a>
            </div><!--End apply_now-->

            <div class="clear">
            </div><!--End clear-->

			<h2>Skills</h2>
            
            <ul>
                <li>HTML &amp; CSS –level 1–4 (HTML5, CSS3)</li>
                <li>Adobe Creative Cloud–Photoshop &amp;Illustrator for Web</li>
                <li>JavaScript, jQuery level 1 &amp; 2</li>
                <li>Responsive &amp; Mobile Web Sites</li>
                <li>PHP</li>
                <li>Content Management System –WordPress</li>
                <li>E-Commerce with WordPress and other solutions</li>
                <li>CSS preprocessor –Intro to SASS &amp; LESS</li>
            </ul>

        	<h2>Final Client Project Overview</h2>

        	<p>At the end of the program students spends 4-5 weeks applying all the skills they have learned to develop a web site for a client.</p>

        	<p>The length of the project is a short 4-5 weeks, only certain types of client projects qualify.</p>

        	<h2>Types of projects that make for good student projects</h2>

        	<ul>
        		<li>Re-Design of a current web site,</li>
        		<li>Design of a completely new web site,</li>
        		<li>Small to mid-size web site (5 - 40 pages) (sites in the hundreds or thousands of pages are just too large for the time frame of the project)</li>
        		<li>Clients who are already prepared and have a solid idea of what they are looking for in their web sites and can make quick design decisions (again due to the short duration of the project, delays of a week or so can have serious impact on the students’ ability to finish the client project by the end of the course). </li>
        	</ul>

        	<h2>Types of projects that are not suitable for student projects</h2>

        	<ul>
        		<li>Very large web sites (over a hundred pages),</li>
        		<li>More backend database based projects (the students are front-end web designers, which means they learn the skills necessary to develop the part of the web site that people see as opposed to the parts that may run on a server such as a database system),</li>
        		<li>Web app like projects (think membership systems, application development...etc...)</li>
        		<li>Large scale online stores...</li>
        		<li>Clients who are unsure of what they want or require long approval processes for design decisions.</li>
        	</ul>

        	<h2>Client Commitments</h2>

        	<p>The projects last 4-5 weeks, and we ask the clients to have an initial student client meeting at the start at our BCIT offices in Downtown Vancouver.</p>

        	<p>After this initial ‘discovery’ meeting the students and client can communicate in whichever manner they wish: email, Skype, phone, or person to person meeting.</p>

        	<p>On this first meeting the project Instructor will be present.</p>

        	<p>We ask that the clients be prepared and have a good idea of what they want and willing to make quick decisions in order to have a website ready at the end of this short time.</p>

        	<h2>Process</h2>

        	<ol>
        		<li>Apply by filling out the Application Form below for the site you want to be placed on the Student Final Project.</li>
        		<li>The Project Instructor will contact you in an email to arrange a personal meeting to determine whether the project is suitable. You will receive a short list of topics to think about before this meeting.</li>
        		<li>When the Project begins the students are asked to form groups of 2 - 4 and then they choose from a list of client projects made available to them. Essentially the students pick the client and not all projects are chosen.</li>
        		<li>If a project is selected by the students, the client receives an email from them to arrange a personal, so called discovery meeting where the Instructor will be present to ensure the success of the project.</li>
        		<li>After the first meeting we ask you to regularly meet the group members (2-3 times),</li>
        		<li>At the end when the learners complete the site you will be asked to fill in a Student Evaluation Questionnaire to help the Project Instructor.</li>
        	</ol>

        	<h2>Disclaimer</h2>

        	<p>During the previous intakes the TWD Program had several very satisfied clients and the program also gives hand to start-ups and small businesses through Embers Vancouver [link to the non-profit organization].</p>

        	<p>We have to admit that we had a few less successful websites– after all this is the first time when these students are working with real clients and they have strict time constrains.</p>

        	<p>We give the learners as much help as possible and closely supervise them, but in some cases the website will not be a hit, but a miss.</p>

			<!-- Added empty tag to allow Apply Now to jump to this form -->
        	<h2 id="form"></h2>

        	<!-- Form field-->
            <?php
                $name = "Beata Kozma";
                //$_SESSION["emailTo"] = "beata_kozma@bcit.ca";
                $_SESSION["emailTo"] = "ljw6632@gmail.com";
                if(isset($_SESSION["error"]) && $_SESSION["error"] != ""){
                    echo "<p class=\"form_msg\" id=\"form_msg\">" . $_SESSION["error"] . "</p>";
                    $_SESSION["error"] = "";
                }
                include("templates/application_form_twd.php");
            ?>
        	<!-- End form-->
        </div><!-- end content_div -->
    </div><!-- end inner_div -->
 
<?php
	include("templates/footer.php");
?>