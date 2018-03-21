<?php
/*
	WLMarpReach.php: WishListMember and Sendy Integration
	Written by Blaine Moore
	Version: 1.0
	
	Before using this script, you must set your installation URL:
*/

	$sendy_installation_url = 'https://mysendydomain.com';  // your Sendy installation URL, without the trailing slash

/*
	Directions:
		1. In WLM, navigate to Integration -> AutoResponder
		2. Set your AutoResponder Provider to: arpReach
		3. Paste the URL to this file followed by: ?list=XXXXXXXX
			+ XXXXXXXXX should be the "short" version of the list ID, found on the "View All Lists" page
			+ Example: https://m.jjfast2.com/custom/webhooks/WLMarpReach.php?list=AmtundC1yOIjCdZCeY763JGQ
		4. Check the "Unsubscribe if Removed from Level" box if desired
		5. Update your AutoResponder Settings
    
   ***************************
   Do Not Edit Below This Line
   ***************************
*/

	$list = $_GET['list'];

	//POST variables
	$name = $_POST['first_name'] ." ". $_POST['last_name'];
	$email = $_POST['email_address'];
	$boolean = 'true';
	
	//Subscribe
	$postdata = http_build_query(
	    array(
	    'name' => $name,
	    'email' => $email,
	    'list' => $list,
	    'boolean' => 'true'
	    )
	);
	$opts = array('http' => array('method'  => 'POST', 'header'  => 'Content-type: application/x-www-form-urlencoded', 'content' => $postdata));
	$context  = stream_context_create($opts);
	$result = file_get_contents($sendy_installation_url.'/'.((1==$_POST['unsubscribe'])?'un':'').'subscribe', false, $context);
	
	echo $result;
?>
