<?php require_once("controller/script.php");
$_SESSION['Hero']=1;
$_SESSION['Greensock']=2;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require_once("layout/header.php");?>
  </head>
  <body>
    <div class="wrapper">
      <?php require_once("layout/nav.php");?>
      <!-- Content Slider Using Greensock -->
      <?php if(isset($_SESSION['Greensock']) && $_SESSION['Greensock']==2){?>
      <div class="slide-s active">
        <div class="card-s">
          <div class="card-img-s" id="img01"></div>
          <div class="card-content-s">
            <p class="card-theme-s">About me</p>
            <h2 class="card-header-s">Hai, saya Arlan</h2>
            <p class="card-para-s">Saya ada seorang Software Engineer lebih spesifik sebagai Back End Web Developer. saya juga mempunyai sebuah startup sendiri bernama Netmedia Framecode yang sudah merintis usaha dari tahun 2018. Saat ini saya berstatus mahasiswa di Universitas Katolik Widya Mandira. Saya sudah mengikuti beberapa macam kegiatan diluar kampus, seperti Re-Cloud dari Codepolitan dan Alibaba Cloud Indonesia. </p>
            <a class="card-link-s">Read </a>
          </div>
        </div>
      </div>
      <div class="slide-s">
        <div class="card-s">
          <div class="card-img-s" id="img02"></div>
          <div class="card-content-s">
            <p class="card-theme-s">My job</p>
            <h2 class="card-header-s">Coding is my life</h2>
            <p class="card-para-s">Awal saya belajar coding semenjak duduk di bangku SMP, saat itu kebetulan om saya kuliah di STIKOM dan saya ikut mempelajari bagaimana cara membuat website. Saat ini saya sudah bisa membuat sebuah aplikasi berbasis website yang kompleks seperti aplikasi pembukuan administrasi dan lainnya. Dalam mempelajari bahasa pemrograman saya tidak langsung belajar ke tahap database management system tapi mulai dari bagaimana mendesain sebuah website agar menarik. Bahasa yang sudah saya pelajari sampai saat ini yaitu HTML, CSS, JS, PHP, DART/FLUTTER, JAVA, C++, C#.</p>
            <a class="card-link-s">Read </a>
          </div>
        </div>
      </div>
      <div class="slide-s">
        <div class="card-s">
          <div class="card-img-s" id="img03"></div>
          <div class="card-content-s">
            <p class="card-theme-s">My other life</p>
            <h2 class="card-header-s">Kehidupan lain</h2>
            <p class="card-para-s">Saya tidak hanya mempunyai skil di dunia pemrograman tapi saya juga mempelajari cara menjadi video editor dan photo editor.</p>
            <a class="card-link-s">Read </a>
          </div>
        </div>
      </div>
      <div class="prevnext-s">
        <button class="pn-btn-s" id="prev"></button>
        <button class="pn-btn-s" id="fresh" onclick="window.location.href='about'"></button>
        <button class="pn-btn-s" id="next"></button>
      </div>
      <?php }?>
      <!-- end Content Slider Using Greensock -->
      <?php require_once("layout/footer.php");?>
    <br><br><br><br>
    </div>
    <?php require_once("layout/foot-js.php");?>
  </body>
</html>