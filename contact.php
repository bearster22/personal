<?php session_start() ?>  

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Contact Me: Sarah Barrow Web Design</title>
<meta name="description" content="Sarah Barrow is a creative, strategic web professional specializing in website design and development." />  

<!-- STYLES ETC -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="img/favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,700' rel='stylesheet' type='text/css'>

<!-- MODERNIZR: all other scripts at bottom of page -->
<script src="js/modernizr-customSB.min.js" type="text/javascript"></script>

</head>

<body>
<header>
	<hgroup>
    		<div><a href="index.html" title="Sarah Barrow Web Design" onClick="_gaq.push(['_trackEvent', 'navigation', 'click', 'Home']);">SB</a></div>
            <h1>Sarah Barrow Web Design</h1>
            <h2>Freelance front-end development and web design</h2>
   	</hgroup>
</header>  
  	
<nav>
	<ul>
		<li><a href="web-portfolio.html" title="Portfolio" onClick="_gaq.push(['_trackEvent', 'navigation', 'click', 'Portfolio']);">Portfolio</a></li>
	    <li><a href="web-services.html" title="Services" onClick="_gaq.push(['_trackEvent', 'navigation', 'click', 'Services']);">Services</a></li>
        <li><a href="photography.html" title="Photography" onClick="_gaq.push(['_trackEvent', 'navigation', 'click', 'Photography']);">Photography &amp; Design</a></li>
        <!--<li><a href="blog/index.html" title="Blog">Blog</a></li>-->
        <li><a id="active_item" href="contact.php" title="Contact" onClick="_gaq.push(['_trackEvent', 'navigation', 'click', 'Contact']);">Hire Me!</a></li>
    </ul>
</nav>
    
<article>    
	<hgroup>
    	<h1>Contact me!</h1>
        <h2>Question? Comment? Want to chat about a project or get a quote? Fill out the form below.</h2>
    </hgroup>
    
	<section id="contact">
         <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
		<?php  
    	//init variables  
   			$cf = array();  
   			$sr = false;  
    		if(isset($_SESSION['cf_returndata'])){  
        		$cf = $_SESSION['cf_returndata'];  
        		$sr = true;  
    			}  
    	?>  
        
         
    
            <form method="post" action="process.php">
            	<label for="name">Name: <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="John Doe" required="required" autofocus="autofocus" /><br />
                <label for="email">Email Address: <span class="required">*</span></label>
                <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="johndoe@email.com" required="required" /><br />
             	<label for="phone">Phone: </label>
                <input type="tel" id="phone" name="phone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['phone'] : '' ?>" placeholder="Phone" /><br />
                <label for="website">Website: </label>
                <input type="url" id="website" name="website" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['website'] : '' ?>" placeholder="Website (http:// required)" /><br />
                <label for="message">Message: <span class="required">*</span></label>
                <textarea id="message" name="message" placeholder="What can I help you with?" required="required"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                <span id="loading"></span>
                
        <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">  
        	<li id="info">There were some problems with your form submission:</li>  
        	<?php  
        		if(isset($cf['errors']) && count($cf['errors']) > 0) :  
            	foreach($cf['errors'] as $error) :  
        	?>  
        	<li><?php echo $error ?></li>  
        	<?php  
            	endforeach;  
        		endif;  
        	?>  
    	</ul>  
    	<p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! We will get back to you ASAP!</p> 
                
                
                
                <input type="submit" value"Send away!" id="submit-button" onClick="_gaq.push(['_trackEvent', 'button', 'submit', 'Submit Message']);" />
                
             </form>
             
       
    <!-- unsetting session -->
    <?php unset($_SESSION['cf_returndata']); ?> 
    
    <p><strong>Having trouble with the form?</strong><br />Email me directly at sarah[dot]barrow[at]gmail[dot]com.</p>
       
	</section>
    
</article>
    
<footer>
	<div id="copyright">&copy; Sarah Barrow Web Design<br />
    	All rights reserved</div>
    <div id="contact"><a id="invisible" href="contact.php" title="Hire me!"><span id="button_large">Hire Me</span><br /><span id="button_small">to get started!</span></a></div>
    <div id="social">
    	<ul>
        	<li>
            	
                <a href="http://www.linkedin.com/in/scbarrow" title="LinkedIn" target="_blank" onClick="_gaq.push(['_trackEvent', 'social', 'click', 'LinkedIn']);">
                <div class="ss-icon ss-social">&#xF612;</div>
                LinkedIn</a>
            </li>
            <li>
            	<a href="http://twitter.com/bearster22" title="Twitter" target="_blank" onClick="_gaq.push(['_trackEvent', 'social', 'click', 'Twitter']);">
                <div class="ss-icon ss-social">&#xF611;</div>
                Twitter</a>
            </li>
            <li>
            	<a href="https://github.com/bearster22" title="GitHub" target="_blank" onClick="_gaq.push(['_trackEvent', 'social', 'click', 'Github']);">
                <div class="ss-icon ss-social">&#xF671;</div>
                Github</a>
            </li>
        </ul>
    </div>
</footer>                       

         	
         	
<!-- JAVASCRIPT -->
<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>

    
  
<!-- GOOGLE ANALYTICS -->
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-29494340-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>

</body>
</html>

