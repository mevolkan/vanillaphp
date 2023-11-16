<?php
switch ($_SERVER["SCRIPT_NAME"]) {
	case "/about.php":
		$CURRENT_PAGE = "About";
		$PAGE_TITLE = "About Us";
		break;
	case "/contact.php":
		$CURRENT_PAGE = "Contact";
		$PAGE_TITLE = "Contact Us";
		break;
	case "/patients.php":
		$CURRENT_PAGE = "Patients";
		$PAGE_TITLE = "Patients";
		break;
	case "/reports.php":
		$CURRENT_PAGE = "Reports";
		$PAGE_TITLE = "Reports";
		break;
	default:
		$CURRENT_PAGE = "Index";
		$PAGE_TITLE = "Welcome to my homepage!";
	}
