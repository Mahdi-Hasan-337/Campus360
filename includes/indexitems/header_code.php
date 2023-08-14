<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="assets/images/favicon/favicon.ico" /> -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!--  -->
    <link rel="stylesheet" href="assets/css/nav/log_reg_modal.css">

    <link rel="stylesheet" href="assets/css/nav/profilemodal.css">

    <link rel="stylesheet" href="assets/css/nav/carousel.css">

    <link rel="stylesheet" href="assets/css/index.css">

    <link rel="stylesheet" href="assets/css/dashboard.css">

      <!-- Splide CSS -->
  <link rel="stylesheet" href="assets/css/course/splide.min.css">
  <!-- Local CSS -->
  <link rel="stylesheet" href="assets/css/course/style.css">

  <link rel="stylesheet" href="/assets/css/loadmore.css">

  <link rel="stylesheet" href="/assets/css/python.css">

  <link rel="stylesheet" href="assets/css/course/AI.css">
  <link rel="stylesheet" href="assets/css/course/C.css">
  <link rel="stylesheet" href="assets/css/course/C++.css">
  <link rel="stylesheet" href="assets/css/course/de.css">
  <link rel="stylesheet" href="assets/css/course/DS.css">
  <link rel="stylesheet" href="assets/css/course/HTML.css">
  <link rel="stylesheet" href="assets/css/course/java.css">
  <link rel="stylesheet" href="assets/css/course/JS.css">
  <link rel="stylesheet" href="assets/css/course/micro.css">
  <link rel="stylesheet" href="assets/css/course/ml.css">
  <link rel="stylesheet" href="assets/css/course/mysql.css">
  <link rel="stylesheet" href="assets/css/course/oop.css">
  <link rel="stylesheet" href="assets/css/course/php.css">
  <link rel="stylesheet" href="assets/css/course/python.css">
  <link rel="stylesheet" href="assets/css/course/react.css">
  <link rel="stylesheet" href="assets/css/course/VLSI.css">

  	<!--====== Animate Css ======-->
	<link rel="stylesheet" href="assets/css/Blog/animate.min.css">
	<!--====== Bootstrap css ======-->
	<link rel="stylesheet" href="assets/css/Blog/bootstrap.min.css" />
	<!--====== Fontawesome css ======-->
	<script src="https://kit.fontawesome.com/4dea93cae5.js" crossorigin="anonymous"></script>
	<!--====== Slick  css ======-->
	<link rel="stylesheet" href="assets/css/Blog/slick.css" />
	<!-- Splide Slider CSS -->
	<link rel="stylesheet" href="assets/css/Blog/splide.min.css">
	<!--====== Style css ======-->
	<link rel="stylesheet" href="assets/css/Blog/style.css" />



    <title>Campus Dot Crew</title>
    
    <?php
      $css = isset($_SESSION['l_email']) ? 'after_login_styles.css' : 'before_login_styles.css';
      echo '<link rel="stylesheet" type="text/css" href="assets/css/nav/login/' . $css . '">';
    ?>
  </head>

  <body>