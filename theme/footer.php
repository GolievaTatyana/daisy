<?php $templateUri = get_template_directory_uri();?>
<footer id="footer">
  <div class="row">
    <div class="container-fluid">
      <div class="wrapper">
        <div class="row content">
          <div class="logo">
            <a class="navbar-brand" href="#header">
              <img class="img-responsive" src="<?php echo $templateUri ?>/img/logo.png" alt="logo">
              <span>Daisy</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cover"></div>
</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?php echo $templateUri ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $templateUri ?>/js/jquery.fancybox.min.js"></script>
<script src="<?php echo $templateUri ?>/slick/slick/slick.min.js"></script>
<script src="<?php echo $templateUri ?>/js/main.js"></script>
<script src="<?php echo $templateUri ?>/js/classie.js"></script>
<script src="<?php echo $templateUri ?>/js/modalEffects.js"></script>
<script src="<?php echo $templateUri ?>/js/smoothscroll.js"></script>
<?php wp_footer(); ?>
</body>
</html>
