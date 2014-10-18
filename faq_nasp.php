<?php
	$title = "FAQ - Network Administration and Security Professional";
	$page = "pg_faq";
	include("templates/header.php");
?>
<main>
<div class="inner_wrapper content" id="toplink">
	<div class="outer_div">
		<h1>FAQ - NASP</h1>
	</div>
    <div class="inner_div">
        <div class="content_div">
            <div class="faq">                
                <?php include("templates/faq_categories.php"); ?>
               
                <div class="float_left faq_main">
                
					<!--  
                    ***************************************************
                    animates the 'Go to Top' using javascript and css
                    ***************************************************
                    -->                
                
                    <h1>Network Administration and Security Professional – NASP</h1>
                    <div class="program_faq">
                        <section>
                            <ul>
                                <li><a href="#pfaq_nasp_01" title="">Morbi eget massa at ipsum auctor pretium?</a></li>
                                <li><a href="#pfaq_nasp_02" title="">Cras non iaculis nulla?</a></li>
                                <li><a href="#pfaq_nasp_03" title="">Suspendisse tincidunt tincidunt nisi, non hendrerit lacus pulvinar vel. Suspendisse tincidunt tincidunt nisi, non hendrerit lacus pulvinar vel?</a></li>
                                <li><a href="#pfaq_nasp_04" title="">Nullam consectetur blandit sem . Nullam consectetur blandit sem?</a></li>
                            </ul>
                        </section>
                    </div>
                
                    <article>
                        <h2 id="pfaq_nasp_01">Morbi eget massa at ipsum auctor pretium?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non.</p>
                    </article>
            
                    <article>
                        <h2 id="pfaq_nasp_02">Cras non iaculis nulla?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non pellentesque ante, non placerat metus. Morbi eget massa at</p>
                    </article>
            
                    <article>
                        <h2 id="pfaq_nasp_03">Suspendisse tincidunt tincidunt nisi, non hendrerit lacus pulvinar vel. Suspend tincidunt tincidunt nisi, non hendrerit lacus pulvinar vel?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non pellentesque ante, non placerat metus. Morbi eget massa at ipsum auctor pretium</p>
                    </article>
            
                    <article>
                        <h2 id="pfaq_nasp_04">Nullam consectetur blandit sem . Nullam consectetur blandit sem?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non pellentesque ante, non placerat metus. Morbi eget massa at ipsum auctor pretium.</p>
                    </article>
                </div><!-- end float_left faq_main -->
            </div><!-- end "faq" --> 
        </div><!-- end content_div -->
    </div><!-- end inner_div -->
    
<?php
	include("templates/footer.php");
?>