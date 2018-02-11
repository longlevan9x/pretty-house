
<footer class="footer inverse-wrapper">
  <div class="container inner">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="widget text-center" > 
          <h1 style="width: 90px;height: 90px;margin: 0 auto;">
            <a href="<?php echo get_site_url() . '/'; ?>" title="<?php bloginfo('name') ?>">
              <?php echo Helpers::getLogos(); ?>
            </a>
          </h1>
          <div class="divide20"></div>
          <p><?php bloginfo('description'); ?></p>
          <ul class="social">
            <li> <a href="#"><i class="ion-social-facebook"></i></a> </li>
            <li> <a href="#"><i class="ion-social-twitter"></i></a> </li>
            <li> <a href="#"><i class="ion-social-instagram"></i></a> </li>
            <li> <a href="#"><i class="ion-social-vimeo"></i></a> </li>
            <li> <a href="#"><i class="ion-social-whatsapp"></i></a> </li>
          </ul>
          <!--/.social -->
          <div class="divide50"></div>
          <p class="bm0">© <?php echo date("Y") ?> <?php bloginfo('name') ?>. All rights reserved.</p>
        </div>
        <!-- /.widget --> 
        
      </div>
      <!-- /column --> 
    </div>
    <!-- /.row --> 
    
  </div>
  <!-- .container --> 
  
</footer>
<!-- /footer --> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/js/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style\js\jquery-validation\dist\jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/revolution/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/revolution/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/revolution/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/revolution/js/extensions/revolution.extension.video.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/js/plugins.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/'; ?>style/js/scripts.js"></script>
<script>
$(document).ready(function() {
    $("#sendmail").validate();
    $('#btn-sendmail').click(function (event) {
        var _data = $('#sendmail').serializeArray();
        var isValid = true;
        _data.filter(function (item) {
            if (item.value.length == 0) {
                isValid = false;
            }
        });
        if(isValid)  {
            var _url = $('#sendmail').attr('data-url').replace('admin-post', 'admin-ajax');
            $.ajax({
                url: _url,
                type: 'POST',
                dataType: 'JSON',
                data: _data,
            })
            .done(function(result) {
                showModal(result);
            })
            .fail(function(result) {
                showModal(result);
            });
        }
    });

    $('#sendmail').submit(function (e) {
        e.preventDefault();
    });
});

function showModal(result) {
  $('.modal-title').text(result.status);
  $('.modal-body p').text(result.text);
  $("#myModal").modal('show');
  var _form = $('#sendmail');
  _form.find('input[name="name"]').val("");
  _form.find('input[name="email"]').val("");
  _form.find('input[name="phone"]').val("");
  _form.find('textarea').val("");
}
</script>
</body>
</html>