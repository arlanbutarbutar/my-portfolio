<!--------------- navbar starts here --------------->
<?php if(isset($_SESSION['Hero']) && $_SESSION['Hero']==1){?>
<nav>
  <span id="brand">
    <a href="./">ar.code_</a>
  </span>
  <ul id="menu">
    <li><a href="./">home<span>.</span></a></li>
    <li><a style="cursor: pointer;" onclick="window.location.href='https://www.net-code.tech/services';">work<span>.</span></a></li>
    <li><a href="about">about me<span>.</span></a></li>
    <li><a href="contact">contact<span>.</span></a></li>
  </ul>
  <div id="toggle">
    <div class="span">menu</div>
  </div>
</nav>
<div id="resize">
  <div class="close-btn">close</div>
  <ul id="menu">
    <li><a href="./">home<span>.</span></a></li>
    <li><a style="cursor: pointer;" onclick="window.location.href='https://www.net-code.tech/services';">work<span>.</span></a></li>
    <li><a href="about">about me<span>.</span></a></li>
    <li><a href="contact">contact<span>.</span></a></li>
  </ul>
</div>
<?php }?>
<!--------------- navbar ends here --------------->