<?php require_once("controller/script.php");
$_SESSION['Hero']=1;
$_SESSION['Greensock']=0;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require_once("layout/header.php");?>
    <meta name="description" content="Arlan Butar Butar - Software Engineer [ Back End Web Developer ]">
    <meta property="og:image" itemprop="image" content="https://arcode.pw/assets/img/im.jpg">
    <link itemprop="thumbnailUrl" href="https://arcode.pw/assets/img/im.jpg"> 
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"> <link itemprop="url" href="https://arcode.pw/assets/img/im.jpg"> </span>
  </head>
  <body>
    <div class="wrapper">
      <?php require_once("layout/nav.php");
        if(isset($_SESSION['Hero']) && $_SESSION['Hero']==1){?>
      <div class="hero">
        <div class="header">
          <h1>Hai, saya Arlan</h1><br>
          <h3 class="line anim-typewriter">Software Engineer [ Back End Web Developer ]</h3>
        </div>
      </div>
      <?php }?>
      <?php require_once("layout/footer.php");?>
    </div>
    <?php require_once("layout/foot-js.php");?>
  </body>
</html>