<?php
include "vars.php";
include "sessions.php";
include "functions.php";
include "database_connect.php";
?>

<!DOCTYPE html>

<html>
	<head>
		<!--Basic Page -->
		<title><?php echo $page_title; ?> | OMW ADMIN</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="CSS/normalize.css">
		<link rel="stylesheet" href="CSS/style.css">
		<link rel="stylesheet" href="CSS/main_stylesheet.css" type="txt/css">
		<script src="JS/prefixfree.min.js"></script> 
		
		<!-- Icons -->
		<link rel="apple-touch-icon" sizes="57x57" href="../IMG/FAVICON/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="../IMG/FAVICON/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="../IMG/FAVICON/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="../IMG/FAVICON/apple-touch-icon-76x76.png">
		<link rel="icon" type="image/png" href="../IMG/FAVICON/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="../IMG/FAVICON/android-chrome-72x72.png" sizes="72x72">
		<link rel="icon" type="image/png" href="../IMG/FAVICON/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="../IMG/FAVICON/manifest.json">
		<link rel="mask-icon" href="../IMG/FAVICON/safari-pinned-tab.svg" color="#4f0f0f">
		<meta name="apple-mobile-web-app-title" content="Thom Underground">
		<meta name="application-name" content="Thom Underground">
		<meta name="msapplication-TileColor" content="#bc1f1f">
		<meta name="theme-color" content="#ffffff">
		
		<style>
			/* The Modal (background) */
			.modal {
				display: none; /* Hidden by default */
				position: fixed; /* Stay in place */
				z-index: 1; /* Sit on top */
				left: 0;
				top: 0;
				width: 100%; /* Full width */
				height: 100%; /* Full height */
				overflow: auto; /* Enable scroll if needed */
				background-color: rgb(0,0,0); /* Fallback color */
				background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
				-webkit-animation-name: fadeIn; /* Fade in the background */
				-webkit-animation-duration: 0.4s;
				animation-name: fadeIn;
				animation-duration: 0.4s
			}

			/* Modal Content */
			.modal-content {
				position: fixed;
				position: center;
				top: 90px;
				background-color: #fefefe;
				width: 30%;
				-webkit-animation-name: slideIn;
				-webkit-animation-duration: 0.4s;
				animation-name: slideIn;
				animation-duration: 0.4s;
				float:center;
			margin-left:35%;
			margin-right:35%;
			}

			/* The Close Button */
			.close {
				color: black;
				float: right;
				font-size: 28px;
				font-weight: bold;
			}

			.close:hover,
			.close:focus {
				color: grey;
				text-decoration: none;
				cursor: pointer;
			}

			.modal-header {
				padding: 2px 16px;
				background-color: #5cb85c;
				color: white;
			}

			.modal-body {padding: 5px 19px;}

			.modal-footer {
				padding: 2px 16px;
				background-color: #5cb85c;
				color: white;
			}

			/* Add Animation */
			@-webkit-keyframes slideIn {
				from {top: -300px; opacity: 0}
				to {top: 80px; opacity: 1}
			}

			@keyframes slideIn {
				from {top: -300px; opacity: 0}
				to {top: 80px; opacity: 1}
			}

			@-webkit-keyframes fadeIn {
				from {opacity: 0}
				to {opacity: 1}
			}

			@keyframes fadeIn {
				from {opacity: 0}
				to {opacity: 1}
			}
			</style>
		
		
		<!--[if lt IE 9]>
		<script src="JS/html5shiv.js"></script>
		<![endif]-->
		
		<!-- Info
			Theme naam: 	 On My Way Theme
			version:		 admin_v. 0.1.5 beta 2
			Description:  	 Deze site is gemaakt voor O &O
			made by:		 Daan van Beusekom
			site:			 defysio.tk
		-->
	</head>