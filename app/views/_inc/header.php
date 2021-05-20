<?php
	defined('__ROOT_URL__') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en" class="h-100">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title><?=$data['title']?> | <?=__SITE_NAME__?></title>
	
	<!-- default favicon -->
	<link rel="shortcut icon" href="https://findicons.com/files/icons/1722/gnome_2_18_icon_theme/24/stock_page_total_number.png" type="image/x-icon" />
	
    <!-- Bootstrap core CSS -->	
	<!-- BOOTSTARP - DATATABLES -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />

	<!-- DATATABLES -->
	<link rel="stylesheet" href="
	https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />
	
	<!-- DATATABLES BOUTTONS EXPORT -->
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css" />
	
	<style>
    .bd-placeholder-img {
		font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }	 
    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
			font-size: 3.5rem;
        }
    }
	main > .container {
		padding: 60px 15px 0;
	}
	.footer {
		background-color: #f5f5f5;
	}
	.footer > .container {
		padding-right: 15px;
		padding-left: 15px;
	}
	code {
		font-size: 80%;
	}
	</style>    

</head>