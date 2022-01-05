<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="author" content="arcode">
<meta name="keywords" content="jasa pembuatan website, services,developer,designer,full stack,back end,front end">

<title>ar.code_</title>

<!-- data link -->
<link rel="stylesheet" href="assets/css/body.css">
<link rel="stylesheet" href="assets/css/scroll.css">
<!-- <link rel="stylesheet" href="assets/css/sweetalert2.min.css"> -->
<?php if(isset($_SESSION['Hero']) && $_SESSION['Hero']==1){?>
<link rel="stylesheet" href="assets/css/stylex.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<?php }if(isset($_SESSION['Greensock']) && $_SESSION['Greensock']==2){?>
<link rel="stylesheet" href="assets/css/greensocks.css">
<?php }?>
<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
<link rel="shortcut icon" href="https://i.ibb.co/hDqFwPr/NET-Code-logo.png">

<!-- data script -->
<script src="assets/js/sweetalert2.all.min.js"></script>
<?php if(isset($_SESSION['Hero']) && $_SESSION['Hero']==1){?>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/t.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php }if(isset($_SESSION['Greensock']) && $_SESSION['Greensock']==2){?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
<?php }?>