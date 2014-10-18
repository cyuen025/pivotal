<?php
	$title = "Projects";
	$page = "pg_projects";
	include("templates/header.php");
?>
<main>
<div class="inner_wrapper content">
        <div class="outer_div">
            <h1>Projects</h1>
        </div>
        <div class="inner_div">
            <div class="content_div">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non pellentesque ante, non
    placerat metus. Morbi eget massa at ipsum auctor pretium. Suspendisse tincidunt tincidunt nisi,
    non hendrerit lacus pulvinar vel. Maecenas hendrerit interdum quam sit amet interdum. Cras non
    iaculis nulla. Sed egestas risus quis libero porttitor, sed scelerisque enim consequat. Sed consequat
    quam sit amet dui interdum, nec rhoncus dolor consequat. Nullam consectetur blandit sem. Mauris
    vulputate at nisi nec bibendum. Nunc elit felis, ornare vel nisl non, sodales porta elit. Fusce viverra
    arcu eu volutpat iaculis. Mauris ornare lobortis nulla, ac adipiscing a</p>
    
    			<h2>Past Projects</h2>
                
                <p>Check out some of the Websites our students have helped to produce:</p>
                
                <ul class="twd_projects">
                    <li><a href="http://pastiche.co/" target="_blank">
                        <h4>PROJECT 1</h4>
                        <div class="proj_img_container">
                            <div class="proj_img01">
                                <div class="overlay">
                                    <span class="overlay_text">http://pastiche.co/</span>
                                </div>
                            </div>
                        </div>
                        <img class="proj_img01_responsive" src="images/project01.jpg" width="400" height="400" alt="Pastiche"/>
                    </a></li>
                    <li><a href="http://www.nordstar.ca/" target="_blank">
                        <h4>PROJECT 2</h4>
                        <div class="proj_img_container">
                            <div class="proj_img02">
                                <div class="overlay">
                                    <span class="overlay_text">http://www.nordstar.ca/</span>
                                </div>
                            </div>
                        </div>
                        <img class="proj_img01_responsive" src="images/project02.jpg" width="400" height="400" alt="Nordstar"/>
                    </a></li>
                    <li><a href="http://www.stillwatersimmentals.com/" target="_blank">
                        <h4>PROJECT 3</h4>
                        <div class="proj_img_container">
                            <div class="proj_img03">
                                <div class="overlay">
                                    <span class="overlay_text">http://www.stillwater<br>simmentals.com/</span>            				</div>
                            </div>
                        </div>
                        <img class="proj_img01_responsive" src="images/project03.jpg" width="400" height="400" alt="Stillwater Simmentals"/>
                    </a></li>
                    <li><a href="http://maki.htpwebdesign.ca/" target="_blank">
                        <h4>PROJECT 4</h4>
                        <div class="proj_img_container">
                            <div class="proj_img04">
                                <div class="overlay">
                                    <span class="overlay_text">http://maki.htp<br>webdesign.ca/</span>
                                </div>
                            </div>
                        </div>
                        <img class="proj_img01_responsive" src="images/project04.jpg" width="400" height="400" alt="Maki Performance Training"/>
                    </a></li>
                    <div class="clear"></div>
                </ul>
                
                <h2>Some of the companies we have worked with (pending approvals)</h2>
                
                <!--
                <div class="logos">
                    <div class="logos_row01">
                        <a href="http://www.icbc.com/" target="_blank"><img src="images/icbc_logo.png" width="130" height="130" alt="icbc logo" /></a>
                        <a href="http://www.fairmont.com/" target="_blank"><img src="images/fairmont_logo.png" width="328" height="130" alt="Fairmont logo" /></a>
                        <a href="https://www.mckesson.ca/" target="_blank"><img src="images/mckesson_logo.png" width="130" height="130" alt="Mckesson logo" /></a>
                    </div>
                    <div class="logos_row02">
                        <a href="http://www.telus.com/" target="_blank"><img src="images/telus_logo.png" width="278" height="75" alt="telus logo" /></a>
                        <a href="http://www.worksafebc.com/" target="_blank"><img src="images/worksafebc_logo.png" width="375" height="74" alt="work safe bc logo" /></a>
                    </div>
                    <div class="logos_row03">
                        <a href="http://www.mdacorporation.com/" target="_blank"><img src="images/mda_logo.png" width="218" height="145" alt="MDA logo" /></a>
                        <a href="http://www.overwaitea.com/" target="_blank"><img src="images/overwaitea_logo.png" width="145" height="145" alt="overwaitea food group logo" /></a>
                        <a href="https://www.rickhansen.com/" target="_blank"><img src="images/rickhansen_logo.png" width="145" height="145" alt="rick hansen foundation logo" /></a>
                        <a href="http://www.ubc.ca/" target="_blank"><img src="images/ubc_logo.png" width="109" height="145" alt="ubc logo" /></a>
                    </div>
                </div>
                -->
                <div class="logos">
                	<img src="images/logos.png" width="700" height="381" alt="company logos" usemap="#img_map"/>
                    
                    <map id="img_map" name="img_map">
                    	<area shape="rect" alt="icbc" coords="1,0,129,131" href="http://www.icbc.com/" target="_blank" />
                        <area shape="rect" alt="Fairmont" coords="150,1,489,132" href="http://www.fairmont.com/" target="_blank" />
                        <area shape="rect" alt="Mckesson" coords="495,3,659,132" href="https://www.mckesson.ca/" target="_blank" />
                        <area shape="rect" alt="Telus" coords="5,143,288,223" href="http://www.telus.com/" target="_blank" />
                        <area shape="rect" alt="work safe bc" coords="303,144,677,218" href="http://www.worksafebc.com/" target="_blank" />
                        <area shape="rect" alt="MDA" coords="5,248,249,364" href="http://www.mdacorporation.com/" target="_blank" />
                        <area shape="rect" alt="Overwaitea" coords="256,249,423,363" href="http://www.overwaitea.com/" target="_blank" />
                        <area shape="rect" alt="Rick Hansen" coords="430,236,572,380" href="https://www.rickhansen.com/" target="_blank" />
                        <area shape="rect" alt="UBC" coords="585,237,696,381" href="http://www.ubc.ca/" target="_blank" />
                  	</map>
                </div>
            </div><!-- end content_div -->
            
        </div><!-- end inner_div -->
 
<?php
	include("templates/footer.php");
?>