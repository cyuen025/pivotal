<?php
	$title = "FAQ";
	$page = "pg_faq";
	include("templates/header.php");
?>
<main>
<div class="inner_wrapper content">
	<div class="outer_div">
		<h1>FAQ</h1>
	</div>
    <div class="inner_div">
        <div class="content_div">
            <div class="faq">                    
                <?php include("templates/faq_categories.php"); ?>
               
                <div class="float_left faq_main">              
                    <h1>Top 5 Frequently Asked Questions</h1>
                    <div class="general_faq">
                       <section>
                            <ul>
                                <li><a href="#gfaq_top_01">Morbi eget massa at ipsum auctor pretium?</a></li>
                                <li><a href="#gfaq_top_02">Cras non iaculis nulla?</a></li>
                                <li><a href="#gfaq_top_03">Suspendisse tincidunt tincidunt nisi, non hendrerit lacus pulvinar vel. Suspendisse tincidunt tincidunt nisi, non hendrerit lacus pulvinar vel?</a></li>
                                <li><a href="#gfaq_top_04">Nullam consectetur blandit sem . Nullam consectetur blandit sem?</a></li>
                                <li><a href="#gfaq_top_05">Morbi eget massa at ipsum auctor pretium?</a></li>
                            </ul>
                        </section>
                    </div>
                    
                    <article>
                        <h2 id="gfaq_top_01">Morbi eget massa at ipsum auctor pretium?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non.</p>
                    </article>
            
                    <article>
                        <h2 id="gfaq_top_02">Cras non iaculis nulla?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non pellentesque ante, non placerat metus. Morbi eget massa at</p>
                    </article>
            
                    <article>
                        <h2 id="gfaq_top_03">Suspendisse tincidunt tincidunt nisi, non hendrerit lacus pulvinar vel. Suspend tincidunt tincidunt nisi, non hendrerit lacus pulvinar vel?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non pellentesque ante, non placerat metus. Morbi eget massa at ipsum auctor pretium</p>
                    </article>
            
                    <article>
                        <h2 id="gfaq_top_04">Nullam consectetur blandit sem . Nullam consectetur blandit sem?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non pellentesque ante, non placerat metus. Morbi eget massa at ipsum auctor pretium.</p>
                    </article>
                    
                    <article>
                        <h2 id="gfaq_top_05">Morbi eget massa at ipsum auctor pretium?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non pellentesque ante, non placerat metus. Morbi eget massa at ipsum auctor pretium. Suspendisse tincidunt tincidunt nisi, non hendrerit lacus pulvinar vel. Maecenas hendrerit interdum quam sit amet interdum. Cras non iaculis nulla.</p>
                    </article>
                </div><!-- end float_left faq_main -->   
            </div><!-- end "faq" -->                                      
        </div><!-- end content_div -->
    </div><!-- end inner_div -->

<?php
	include("templates/footer.php");
?>