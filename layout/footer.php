<!--------------- footer starts here --------------->
<?php if(isset($_SESSION['Greensock']) && $_SESSION['Greensock']==2){?>
<div class="footer">
<?php }if(isset($_SESSION['Hero']) && $_SESSION['Hero']==1){?>
<div class="footer">
  <div class="container">
    <br><br>
    <div class="collab">
      <div class="row">
        <div class="col-lg-12">
          <p class="wow fadeInUp">Punya proyek menarik? Saya bisa bantu anda.</p>
        </div>
      </div>
    </div>
    <br>
    <div class="hr">
      <div class="row"></div>
    </div>
    <br><br>
    <div class="info">
      <div class="row">
        <div class="col-lg-4" id="personal">
          <p class="wow fadeInUp">terhubung dengan saya</p>
          <h4 class="wow fadeInUp" data-wow-delay="0.2s">ig @ar.code_</h4>
          <br><br>
        </div>
        <div class="col-lg-4" id="media">
          <p class="wow fadeInUp" data-wow-delay="0s">ikuti aku</p>
          <ul>
            <li id="fb" class="wow fadeInUp" data-wow-delay="0.4s" style="cursor: pointer;" onclick="window.location.href='https://www.facebook.com/ar.code27/';">fb</li>
            <li id="ig" class="wow fadeInUp" data-wow-delay="0.6s" style="cursor: pointer;" onclick="window.location.href='https://www.instagram.com/ar.code_/';">ig</li>
            <li id="tw" class="wow fadeInUp" data-wow-delay="0.8s" style="cursor: pointer;" onclick="window.location.href='https://twitter.com/arcode27';">tw</li>
            <li id="yt" class="wow fadeInUp" data-wow-delay="1s" style="cursor: pointer;" onclick="window.location.href='https://www.youtube.com/channel/UC7mxNSfWUOgVgH05YynkCoA';">yt</li>
          </ul>
          <br><br>
        </div>
        <div class="col-lg-4" id="address">
          <p class="wow fadeInUp" data-wow-delay="0s">say hello</p>
          <h4 class="wow fadeInUp" data-wow-delay="0.2s">hello@arcode.pw</h4>
          <br><br>
        </div>
      </div>
    </div>        
  </div>
</div>
<?php }?>
<!--------------- footer ends here --------------->