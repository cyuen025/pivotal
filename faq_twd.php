<?php
	$title = "FAQ - Technical Web Designer";
	$page = "pg_faq";
	include("templates/header.php");
?>
<main>
<div class="inner_wrapper content" id="toplink">
	<div class="outer_div">
		<h1>FAQ - TWD</h1>
	</div>
    <div class="inner_div">
        <div class="content_div">
            <div class="faq">                
                <?php include("templates/faq_categories.php"); ?>
               
                <div class="float_left faq_main">
                    <h1>Technical Web Designer – TWD</h1>
                    <div class="program_faq">
                        <ul>
                            <li><a href="#pfaq_twd_01" title="">Morbi eget massa at ipsum auctor pretium?</a></li>
                            <li><a href="#pfaq_twd_02" title="">Cras non iaculis nulla?</a></li>
                            <li><a href="#pfaq_twd_03" title="">Suspendisse tincidunt tincidunt nisi, non hendrerit lacus pulvinar vel. Suspendisse tincidunt tincidunt nisi, non hendrerit lacus pulvinar vel?</a></li>
                            <li><a href="#pfaq_twd_04" title="">Nullam consectetur blandit sem . Nullam consectetur blandit sem?</a></li>
                        </ul>
                    </div><!-- .program_faq -->
                    
                    <h2 id="pfaq_twd_01">Morbi eget massa at ipsum auctor pretium?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non.</p>

                    <h2 id="pfaq_twd_02">Cras non iaculis nulla?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non pellentesque ante, non placerat metus. Morbi eget massa at</p>

                    <h2 id="pfaq_twd_03">Suspendisse tincidunt tincidunt nisi, non hendrerit lacus pulvinar vel. Suspend tincidunt tincidunt nisi, non hendrerit lacus pulvinar vel?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non pellentesque ante, non placerat metus. Morbi eget massa at ipsum auctor pretium</p>

                    <h2 id="pfaq_twd_04">Nullam consectetur blandit sem . Nullam consectetur blandit sem?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non pellentesque ante, non placerat metus. Morbi eget massa at ipsum auctor pretium.</p>
                </div><!-- .float_left.faq_main -->
            </div><!-- .faq --> 
        </div><!-- .content_div -->
    </div><!-- .inner_div -->

<?php
	include("templates/footer.php");
?>