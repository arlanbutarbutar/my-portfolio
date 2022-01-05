<?php require_once("controller/script.php");
$_SESSION['Hero']=1;
$_SESSION['Greensock']=0;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require_once("layout/header.php");?>
  </head>
  <body>
    <div class="wrapper">
      <?php require_once("layout/nav.php");
        if(isset($_SESSION['Hero']) && $_SESSION['Hero']==1){?>
      <div class="whitespace"></div>
      <div class="container">
        <div class="hero-content">
          <br><br>
          <div class="row">
            <div class="col-lg-8">
              <h3 class="wow fadeInUp" data-wow-delay="1s">say hello 
                <img src="https://i.ibb.co/vJYRJc0/hand.png" class="wow wobble" data-wow-delay="1.5s" style="width: 35px;" alt="hand">
              </h3><br>
              <p class="wow fadeInUp" data-wow-delay="1.2s">hai, apa kabar! <br>kirimkan pesan kamu ke saya jika kamu butuh jasa saya untuk membuat website yang kamu mau. Okey, thank you udah berkunjung.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
            <?php if(isset($_SESSION['message-success'])){?>
            <div class="message-success" data-message="<?= $_SESSION['message-success']?>"></div>
            <?php }?>
            <form name="contact-form" id="contact-form" method="post" action="">
              <ul>
                <li class="wow fadeInUp" data-wow-delay="1.4s">
                  <label for="contact-name">Name :</label>
                  <div class="textarea">
                    <input type="text" name="contact-name" id="contact-name" value="" required>
                  </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="1.6s">
                  <label for="contact-email">Email :</label>
                  <div class="textarea">
                    <input type="email" name="contact-email" id="contact-email" value="" required>
                  </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="1.6s">
                  <label for="contact-project">Message :</label>
                  <div class="textarea">
                    <textarea type="email" name="contact-project" id="contact-project" rows="6" value="" required></textarea>
                  </div>
                </li>
              </ul>
              <button type="submit" name="contact-submit" id="contact-submit" class="send wow fadeInUp">Send Message</button>
            </form>
          </div>
        </div>
      </div>
      <div class="whitespace"></div>
      <?php }?>
      <?php require_once("layout/footer.php");?>
    </div>
    <?php require_once("layout/foot-js.php");?>
  </body>
</html>