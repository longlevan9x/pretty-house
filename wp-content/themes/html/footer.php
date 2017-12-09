
        

        <footer id="page-footer">
            <div class="footer-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-3">
                            <a href="index.html" class="logo"><img src="<?php echo get_template_directory_uri() .'/' ?>assets/img/logo.png" alt=""></a>
                            <div class="separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus diam vitae erat efficitur tincidunt.
                                Praesent feugiat leo odio, sit amet ultrices sapien accumsan a. Aliquam rhoncus efficitur ullamcorper. Nulla
                                in semper nisi. Donec consectetur quam felis, id malesuada mauris laoreet eu.</p>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <h3>Navigation</h3>
                            <div class="separator"></div>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo get_site_url() . '/'; ?>">Home</a></li>
                                <li><a href="<?php echo get_site_url() . '/'; ?>about">About Us</a></li>
                                <li><a href="<?php echo get_site_url() . '/'; ?>contact">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <h3>Contact</h3>
                            <div class="separator"></div>
                            <address>
                                +1 (734) 123-4567<br>
                                <a href="">hello@archits.com</a>
                                <br>
                                <br>
                                4877 Spruce Drive<br>
                                West Newton, PA 15089<br><br>
                                <strong>skype:</strong> your.company
                            </address>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h3>Map</h3>
                            <div class="map-wrapper">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="copyright">
                <div class="container">
                    (C) 2016 Your Company, All Rights Reserved
                </div>
            </div>
        </footer>
        <!--end page-footer-->

    </div>
    <!--end page-wrapper-->
</div>
<button type="" id="click">click</button>
<script>
    var global_url = '<?php echo get_template_directory_uri() .'/' ?>';
</script>
<!--end outer-wrapper-->
<script type="text/javascript" src="<?php echo get_template_directory_uri() .'/' ?>assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() .'/' ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() .'/' ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() .'/' ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() .'/' ?>assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() .'/' ?>assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() .'/' ?>assets/js/scrollReveal.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() .'/' ?>assets/js/jquery.fitvids.js"></script>
<?php if (is_single()): ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() .'/' ?>assets/js/jquery.magnific-popup.min.js"></script>
<?php endif ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri() .'/' ?>assets/js/custom.js"></script>

<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', simpleMap());

    var mapStyles = [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}];
    var _latitude = 34.038405;
    var _longitude = -117.946944;
    // google.maps.event.addDomListener(window, 'load', bigMap(_latitude,_longitude));

    function bigMap(_latitude,_longitude){
        var mapCenter = new google.maps.LatLng(_latitude,_longitude);
        var mapOptions = {
            zoom: 13,
            center: mapCenter,
            disableDefaultUI: true,
            scrollwheel: true,
            styles: mapStyles
        };
        var mapElement = document.getElementById('big-map');
        var map = new google.maps.Map(mapElement, mapOptions);

        var markerPosition = new google.maps.LatLng(_latitude,_longitude);
        var marker = new google.maps.Marker({
            position: markerPosition,
            map: map,
            icon: "<?php echo get_template_directory_uri(); ?>/assets/img/marker.png"
        });
    }
    $(document).ready(function() {
        $('#click').click(function(event) {
        $.ajax({
                    type : "post", //Phương thức truyền post hoặc get
                    dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
                    url : '<?php echo admin_url('admin-ajax.php');?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                    data : {
                        action: "thongbao", //Tên action
                        hoten : "Long",
                        tinhan : "Long",
                        dienthoai : "0969696969",
                        select_product : "1",
                    },
                    context: this,
                    beforeSend: function(){
                        //Làm gì đó trước khi gửi dữ liệu vào xử lý
                    },
                    success: function(response) {
                        //Làm gì đó khi dữ liệu đã được xử lý
                        if(response.success) {
                            alert(response.success);
                            location.reload();
                            // $('#myModalform').modal('hide');
                        }
                        else {
                            alert('Đã có lỗi xảy ra');
                        }
                    },
                    error: function( jqXHR, textStatus, errorThrown ){
                        //Làm gì đó khi có lỗi xảy ra
                        console.log( 'The following error occured: ' + textStatus, errorThrown );
                    }
                });
        });
    });
</script>
<?php wp_footer(); ?>
<!--[if lte IE 9]>
<script src="assets/js/ie.js"></script>
<![endif]-->
</body>
</html>