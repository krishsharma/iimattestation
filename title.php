<?php
	$page=basename($_SERVER['PHP_SELF']);
	switch($page)
	{
		case '':
		case 'index.php':
			$title="Welcome To ".CompanyName." | Home";
			$metadescription=AboutShort;
			$metakeyword='';
			break;
		case 'about.php':
			$title="Welcome To ".CompanyName." | About Us";
			$metadescription=AboutShort;
			$metakeyword='';
			break;
		case 'services.php':
			$title="Welcome To ".CompanyName." | Services";
			$metadescription=AboutShort;
			$metakeyword='';
			break;	
		case 'contact.php':
			$title="Welcome To ".CompanyName." | Contact Us";
			$metadescription=AboutShort;
			$metakeyword='';
			break;	
		case 'profile.php':
			$title="Welcome To ".CompanyName." | Profile";
			$metadescription=AboutShort;
			$metakeyword='';
			break;
		case 'blog.php':
			$title="Welcome To ".CompanyName." | Blog";
			$metadescription=AboutShort;
			$metakeyword='';
			break;
		case 'staff.php':
			$title="Welcome To ".CompanyName." | Staff";
			$metadescription=AboutShort;
			$metakeyword='';
			break;
		case 'apostille.php':
			$title="Welcome To ".CompanyName." | Apostille";
			$metadescription=AboutShort;
			$metakeyword='';
			break;
		case 'attestation.php':
			$title="Welcome To ".CompanyName." | Attestation";
			$metadescription=AboutShort;
			$metakeyword='';
			break;
	}
?>
<title><?php echo $title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $metadescription; ?>" />
<meta name="keyword" content="<?php echo $metakeyword; ?>" />