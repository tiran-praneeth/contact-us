<head>
<style type="text/css">


  body
  {
    background-image: none;
    background-color: #EEEEEE;
  }
  a{ color: #2a6496; }
  .map-warp
  {
    background-color: #1565C0;
    height: 400px;
    width: 100%;
    z-index: 10;
  }
  #form-slider
  {
    display: none;
  }
  .spanal
  {
    min-height: 325px;
    background-color: #ffffff;
    padding-bottom: 10px;
    max-width:  900px;
    border-radius: 15px;
    padding-top: 3px;
 
  }
  .title-bar
  {
    max-width:  900px;
    background-color: transparent;
    text-align: center;
    margin-top: -260px;
  }
  .input
  {
    max-width: 400px;
    margin: 1px;
  }
  .textareax
  {
    min-height: 78px;
  }
  textarea.form-control
  {
    min-height: 122px !important;
  }

  h1
  {
    font-size: 18px;
    margin-top: 0px;
    font-weight: 400;
    height: 40px;
    display: block;
    width: 180px;
    padding-top: 7px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    background-color: rgb(31, 182, 255);
  }
  .input-2
  {
    margin: 1px;
  }
  #dform2
  {
    z-index: 100000;
    position: relative;
    padding-top: 0px;
  }
  #dform1
  {
    z-index: 100000;
    position: relative;
    
  }

  .masge-inme-box
  {
    width: 160px;
    height: 400px;
    position: absolute;
    float: right;
    margin-top: 0px;
    margin-left:  885px;

  }
  .gray-bar
  {
    width: 100%;
    height: 50px;
    background-color: #eeeeee;
    margin-top: -25px;
    z-index: 100;
    position: relative;
-webkit-box-shadow: 0px -52px 117px -16px rgba(0,0,0,0.38);
-moz-box-shadow: 0px -52px 117px -16px rgba(0,0,0,0.38);
box-shadow: 0px -52px 117px -16px rgba(0,0,0,0.38);
  }
  .input--nao {
    overflow: hidden;
    padding-top: 0.3em;
  }
  .icon-box-contact
  {
    width: 45px;
    height: 45px;
    float: left;
    overflow: hidden;
    margin-right: 5px;
    background-color: #ceefff;
    border-radius: 50px;
    padding: 5px;
   
  }
  .padding-top-2x
  {
    padding-top: 15px;
    line-height: 45px;
  }
  #footer
  {
    display: none !important;
  }
  .form-group .form-control
  {
    padding: 0px;
  }
  .capture-input
  {
    background-color: white;
    height: 25px;
    border-radius: 5px;
    width: 100%;
    font-size: 14px;
    padding-top: 6px;
    padding: 0px;
    vertical-align: middle;
  }
  .capture-box img
  {
    border: 0;
    width: 100%;
    height: 55px;
    border-radius: 6px;
  }
  .capture-input-box
  {
    background-color: #ffca00;
    height: 55px;
    border-radius: 6px;
    width: 100%;    
    margin-top: 6px;
    font-size: 10px;
    color: black;
  }
  .ref-bt
  {
    width: 35px;
    height: 35px;
    border-radius: 50px;
    background-color: #0095da;
    margin-top: 10px;
    margin-right: 40px;
    margin-left: -22px;
    cursor: pointer;
    text-align: center;
  }
  .ref-bt img
  {
    width: 25px;
    height: 25px;
    margin-top: 5px;
  }

  .capture-input-box p
  {
   

  }
  .linex
  {
    float: left;
  }
  .msg-sent
  {
    margin:auto;
    margin-top: -180px;
    margin-left: 100px;  
    text-align: center;
    font-size: 30px;
    color: #8BC34A;
  }
  /*==================================================
 * Effect 2
 * ===============================================*/
.effect2
{
  
}
.effect2:before, .effect2:after
{
/*  z-index: -1;
  position: absolute;
  content: "";
  left: 10px;
  width: 50%;
  top: 80%;
  max-width:300px;*/
  background: #777;
  -webkit-box-shadow: 0 15px 10px #777;
  -moz-box-shadow: 0 15px 10px #777;
  box-shadow: 0 15px 10px #777;
  -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  transform: rotate(-3deg);
}
.effect2:after
{
  -webkit-transform: rotate(3deg);
  -moz-transform: rotate(3deg);
  -o-transform: rotate(3deg);
  -ms-transform: rotate(3deg);
  transform: rotate(3deg);
  right: 10px;
  left: auto;
}

.tooltiptext {
    position: relative;
    padding:6px;
    padding-left: 10px;
    padding-right: 10px;
    margin: 1em 0 3em;
    color: #fff;
    font-size: 12px;
    background: #c81e2b;
    margin-left: 80px;
    margin-top: -20px;
    line-height: 15px;
    min-width: 250px;
    text-align: center;
    background: -webkit-gradient(linear, 0 0, 0 100%, from(#f04349), to(#c81e2b));
    background: -moz-linear-gradient(#f04349, #c81e2b);
    background: -o-linear-gradient(#f04349, #c81e2b);
    background: linear-gradient(#f04349, #c81e2b);
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
-webkit-box-shadow: 0px 13px 66px -8px rgba(0,0,0,0.49);
-moz-box-shadow: 0px 13px 66px -8px rgba(0,0,0,0.49);
box-shadow: 0px 13px 66px -8px rgba(0,0,0,0.49);

    /* Position the tooltip */
    position: absolute;
    z-index: 1000;
}
.tooltiptext:before
{
  content: "";
    position: absolute;
    bottom: -15px;
    left: 30px;
    border: 0;
    border-right-width: 10px;
    border-bottom-width: 20px;
    border-style: solid;
    border-color: transparent #c81e2b;
    display: block;
    width: 0;
}
.tooltiptext:after
{
    content: "";
    position: absolute;
    bottom: -20px;
    left: 80px;
    border: 0;
    border-right-width: 10px;
    border-bottom-width: 20px;
    border-style: solid;
    border-color: transparent transparent;
    display: block;
    width: 0;
}
.tooltiptext {
    visibility: visible;
}
@media (max-width: 720px) and (min-width: 320px){
  .capture-box
  {
    margin-top: 10px;
  }
}
.element-animation{
  animation: animationFrames linear 1s;
  animation-iteration-count: 1;
  transform-origin: 50% 50%;
  -webkit-animation: animationFrames linear 1s;
  -webkit-animation-iteration-count: 1;
  -webkit-transform-origin: 50% 50%;
  -moz-animation: animationFrames linear 1s;
  -moz-animation-iteration-count: 1;
  -moz-transform-origin: 50% 50%;
  -o-animation: animationFrames linear 1s;
  -o-animation-iteration-count: 1;
  -o-transform-origin: 50% 50%;
  -ms-animation: animationFrames linear 1s;
  -ms-animation-iteration-count: 1;
  -ms-transform-origin: 50% 50%;
}

@keyframes animationFrames{
  0% {
    transform:  translate(0px,0px)  ;
  }
  10% {
    transform:  translate(-10px,0px)  ;
  }
  20% {
    transform:  translate(10px,0px)  ;
  }
  30% {
    transform:  translate(-10px,0px)  ;
  }
  40% {
    transform:  translate(10px,0px)  ;
  }
  50% {
    transform:  translate(-10px,0px)  ;
  }
  60% {
    transform:  translate(10px,0px)  ;
  }
  70% {
    transform:  translate(-10px,0px)  ;
  }
  80% {
    transform:  translate(10px,0px)  ;
  }
  90% {
    transform:  translate(-10px,0px)  ;
  }
  100% {
    transform:  translate(0px,0px)  ;
  }
}

@-moz-keyframes animationFrames{
  0% {
    -moz-transform:  translate(0px,0px)  ;
  }
  10% {
    -moz-transform:  translate(-10px,0px)  ;
  }
  20% {
    -moz-transform:  translate(10px,0px)  ;
  }
  30% {
    -moz-transform:  translate(-10px,0px)  ;
  }
  40% {
    -moz-transform:  translate(10px,0px)  ;
  }
  50% {
    -moz-transform:  translate(-10px,0px)  ;
  }
  60% {
    -moz-transform:  translate(10px,0px)  ;
  }
  70% {
    -moz-transform:  translate(-10px,0px)  ;
  }
  80% {
    -moz-transform:  translate(10px,0px)  ;
  }
  90% {
    -moz-transform:  translate(-10px,0px)  ;
  }
  100% {
    -moz-transform:  translate(0px,0px)  ;
  }
}

@-webkit-keyframes animationFrames {
  0% {
    -webkit-transform:  translate(0px,0px)  ;
  }
  10% {
    -webkit-transform:  translate(-10px,0px)  ;
  }
  20% {
    -webkit-transform:  translate(10px,0px)  ;
  }
  30% {
    -webkit-transform:  translate(-10px,0px)  ;
  }
  40% {
    -webkit-transform:  translate(10px,0px)  ;
  }
  50% {
    -webkit-transform:  translate(-10px,0px)  ;
  }
  60% {
    -webkit-transform:  translate(10px,0px)  ;
  }
  70% {
    -webkit-transform:  translate(-10px,0px)  ;
  }
  80% {
    -webkit-transform:  translate(10px,0px)  ;
  }
  90% {
    -webkit-transform:  translate(-10px,0px)  ;
  }
  100% {
    -webkit-transform:  translate(0px,0px)  ;
  }
}

@-o-keyframes animationFrames {
  0% {
    -o-transform:  translate(0px,0px)  ;
  }
  10% {
    -o-transform:  translate(-10px,0px)  ;
  }
  20% {
    -o-transform:  translate(10px,0px)  ;
  }
  30% {
    -o-transform:  translate(-10px,0px)  ;
  }
  40% {
    -o-transform:  translate(10px,0px)  ;
  }
  50% {
    -o-transform:  translate(-10px,0px)  ;
  }
  60% {
    -o-transform:  translate(10px,0px)  ;
  }
  70% {
    -o-transform:  translate(-10px,0px)  ;
  }
  80% {
    -o-transform:  translate(10px,0px)  ;
  }
  90% {
    -o-transform:  translate(-10px,0px)  ;
  }
  100% {
    -o-transform:  translate(0px,0px)  ;
  }
}

@-ms-keyframes animationFrames {
  0% {
    -ms-transform:  translate(0px,0px)  ;
  }
  10% {
    -ms-transform:  translate(-10px,0px)  ;
  }
  20% {
    -ms-transform:  translate(10px,0px)  ;
  }
  30% {
    -ms-transform:  translate(-10px,0px)  ;
  }
  40% {
    -ms-transform:  translate(10px,0px)  ;
  }
  50% {
    -ms-transform:  translate(-10px,0px)  ;
  }
  60% {
    -ms-transform:  translate(10px,0px)  ;
  }
  70% {
    -ms-transform:  translate(-10px,0px)  ;
  }
  80% {
    -ms-transform:  translate(10px,0px)  ;
  }
  90% {
    -ms-transform:  translate(-10px,0px)  ;
  }
  100% {
    -ms-transform:  translate(0px,0px)  ;
  }
}

@media (max-width: 720px) and (min-width: 320px){
  .capture-box
  {
    margin-top: 10px !important;
  }
  #dform2
  {
    margin-top: 90px;
  }
  body
  {
    overflow-x: hidden;
  }
  .spanal
  {
        padding-bottom: 30px;
  }
  .tooltiptext
  {
    margin-left: 50px;
    width: 230px;
  }
  .btn
  {
    width: 280px  !important;
    float: none !important;
    
  }
  }
</style>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCopzzVIITTydrmrhuoagDrm3spa5-f6g&callback=initMap" type="text/javascript"></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 14,
                    disableDefaultUI: true,
                    mapTypeControl: false,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(6.893357, 79.872980), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                          styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#1d97cb"},{"invert_lightness":true}]},{"featureType":"landscape","elementType":"labels.text.fill","stylers":[{"color":"#e99c00"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#00a3d4"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#ffd600"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway.controlled_access","elementType":"labels.text.fill","stylers":[{"color":"#00212f"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#0066a5"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#0084bd"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#4ac6fb"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(6.893357, 79.872980),
                    map: map,
                    title: 'InsureMe Insurance Brokers (Pvt) Ltd',
                    icon: "<?php echo base_url(); ?>assets/images/location-pin.png" 
                });
            }
        </script>

</head>
<body>

<section class="map-warp" id="map">

</section>
<div class="gray-bar">

</div>
<?php
$attributes = array('id' => 'form-contactus');
echo form_open('', $attributes);
?>
<section id="dform1">

	<div class="container title-bar"><h1>Contact Us</h1></div>
        <div class="container wow fadeInDown spanal effect2">
				<div class="content set_margin_top_82 fmf-ui-main">

					<div class="center-main-element" style="margin-bottom: 5px;">
          <div class="col-sm-4">
          <br>
             <div class="">
             
               <div class="row ">
               <div class="icon-box-contact">
                 <img src="http://contact-us.insureme.lk/assets/images/insureme-transparent-icons/call-us-insureme.png" alt="InsureMe Hotline" width="100%" />
               </div >
                  <span style="color: #00a9f5;font-weight: 600;"> Hotline </span>: <a href="tel:0769069000">07 690 690 00 </a><br> 
                  <span style="color: #00a9f5;font-weight: 600;"> Email </span>:  <a href="mailto:info@insureme.lk">info@insureme.lk </a>
               </div>

               <div class="row padding-top-2x">
                <div class="icon-box-contact">
                   <img src="<?php echo base_url(); ?>assets/images/insureme-transparent-icons/whatsapp-icon.png" alt="InsureMe Hotline"  width="100%"  style="margin-top: -10px;"/>
                </div>
                   <span style="color: #00a9f5;font-weight: 600;">  Whatsapp </span>  : <a href="whatsapp://send?abid=[+94768282424]&text=[message text]""> 07 6 828 2424 </a>                
               </div>


                <div class="row padding-top-2x">
                <div class="icon-box-contact">
                   <img src="<?php echo base_url(); ?>assets/images/insureme-transparent-icons/viber-icon.png" alt="InsureMe Viber" width="100%"  style="margin-top: -10px;"/>
                </div>
                 <span style="color: #00a9f5;font-weight: 600;"> Viber </span>  : <a href="tel:0768282424">  07 6 828 2424 </a>               
               </div>
                <address class="row" style="margin-top: 18px;">
               <div class="icon-box-contact" style="height: 60px;">
                 <img src="<?php echo base_url(); ?>assets/images/location-pin.png" alt="InsureMe Hotline"  width="100%"  />
               </div>
               <a href="https://www.google.lk/maps/place/InsureMe+Insurance+Brokers+(Pvt)+Ltd./@6.8930873,79.8710827,17.37z/data=!4m12!1m6!3m5!1s0x3ae25bd3604bb1a3:0xe1d3d22684488298!2sInsureMe+Insurance+Brokers+(Pvt)+Ltd.!8m2!3d6.8933473!4d79.8729229!3m4!1s0x3ae25bd3604bb1a3:0xe1d3d22684488298!8m2!3d6.8933473!4d79.8729229?hl=en">
                 InsureMe Insurance Brokers (Pvt) Ltd, 
                 135/3/1/1, Kirula Road, <br>
                 Colombo 05, Sri Lanka. 
                 </a>
               </address>

             </div>
          </div>
          <div class="col-sm-8">
                    <div class="col-sm-6">
                       <div class="form-group">
                       <span id="cx_name_error" class="tooltiptext element-animation"></span>    
                          <span class="input input--nao">
                          <label><span style="color: red;">* </span>Name</label>

                          <?php 
                              $data_cx_name = array
                              (
                                'type'        => 'text',
                                'name'        => 'cx_name',
                                'id'          => 'cx_name',
                                'onkeyup'     => 'remove_error(this)',
                                'value'       => set_value('cx_name'),                                                          
                                'class'       => 'input__field input__field--nao'
                              );

                              echo form_input($data_cx_name); 
                            ?>
                              <svg id="engine_capacity-error-line" class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                  <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                              </svg>
                          </span>         
                       </div>
                  </div>

                    <div class="col-sm-6 ">
                     <div class="form-group ">
                      <span id="cx_mobile_error" class="tooltiptext element-animation"></span>    
                        <span class="input input--nao">
                        <label><span style="color: red;">* </span>Mobile</label>
                             
                            <?php 
                              $data_cx_mobile = array
                              (
                                'type'        => 'text',
                                'name'        => 'cx_mobile',
                                'id'          => 'cx_mobile',
                                'onkeyup'     => 'remove_error(this)',
                                'value'       => set_value('cx_mobile'),                                                          
                                'class'       => 'input__field input__field--nao'
                              );

                              echo form_input($data_cx_mobile); 
                            ?>
                            <svg id="engine_no-error-line" class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                            </svg>
                        </span>
                            
                     </div>
                     
                    </div>

                    <div class="col-sm-6 ">
                     <div class="form-group">
                     <span id="cx_email_error" class="tooltiptext element-animation"></span>    
                        <span class="input input--nao">
                        <label><span style="color: red;">* </span>E-mail</label>
                            <?php 
                              $data_cx_email = array
                              (
                                'type'        => 'text',
                                'name'        => 'cx_email',
                                'id'          => 'cx_email',
                                'onkeyup'     => 'remove_error(this)',
                                'value'       => set_value('cx_email'),                                                          
                                'class'       => 'input__field input__field--nao'
                              );

                              echo form_input($data_cx_email); 
                            ?>                         
                                      
                            <svg id="chassis_no-error-line" class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                            </svg>
                        </span>         
                     </div>
                     
                    </div>
                 
                  <div class="col-sm-6">
                         <div class="form-group">   
                         <span id="insurance_type_error" class="tooltiptext element-animation"></span>                  
                            <label style="margin-bottom: -10px;"><span style="color: red;">* </span>I would like to discuss</label>
                          <div id="" class="ui fluid search selection dropdown">
                            <?php 
                              $data_insurance_type = array
                              (
                                'type'        => 'hidden',
                                'name'        => 'insurance_type',
                                'id'          => 'insurance_type',
                                'onchange'    => 'remove_error(this)'
                              );

                              echo form_input($data_insurance_type); 
                            ?>
                        <i class="dropdown icon"></i>
                        <div class="default text">Select insurance type</div>
                          <div class="menu">
                          <?php foreach ($insurance_type as $value) {

                              echo '<div class="item" data-value="'.$value.'">'.$value.'</div>';

                            } ?>
                          </div>
                    </div>
                      <script type="text/javascript">
                        $('.ui.dropdown').dropdown();
                      </script>
                  </div>                                 
                </div> 


                  <div class="col-sm-6">
                     <div class="form-group input-2">
                     <span id="cx_message_error" class="tooltiptext element-animation"></span>
                        <label for="comment">Message</label>
                        <?php 
                          $data_cx_message = array
                          (
                            'name'        => 'cx_message',
                            'id'          => 'cx_message',
                            'onkeyup'     => 'remove_error(this)',
                            'value'       => set_value('cx_message'),
                            'rows'        => '3',
                            'cols'        => '4',                           
                            'class'       => 'form-control textareax'
                          );

                        echo form_textarea($data_cx_message);
                        ?>               
                        
                      </div>
                  </div> 
                  <div class="col-sm-6" >
                    <div class="form-group input-2">
                    
                         <div class="capture-box" style=" vertical-align: top; background-color: #e6e6e6; width: 100%; height: 140px; padding: 12px;margin-top: 10px; border-radius: 5px;">

                                 <span id="captcha_image"><?php echo $image; // this will show the captcha image ?></span>
                                 <div class=" capture-input-box">
                                  <span id="cx_captcha_error" class="tooltiptext element-animation"></span>
                                 <div class="col-sm-10 col-xs-10">

                                 Type the above letters:
                                       <?php 
                                      $data_cx_captcha = array
                                      (
                                        'name'        => 'cx_captcha',
                                        'id'          => 'cx_captcha',
                                        'onkeyup'     => 'remove_error(this)',
                                        'value'       => '',                        
                                        'class'       => 'input__field input__field--nao capture-input'
                                      );

                                    echo form_input($data_cx_captcha);
                                    ?>                                      
                               </div>
                               <div class="col-sm-2 col-xs-2">
                                 <div id="btn_captcha_refresh" class="ref-bt"><img src="<?php echo base_url(); ?>assets/images/refresh.png" alt="InsureMe Refresh"  width="100%"  /></div>
                               </div>
                          </div>
                         </div>
                      </div> 
                                    
                  </div> 
                  <hr class="linex"/>                 
                    <div class="col-sm-6">
                      
                    </div>                        
                    <div class="col-sm-6">
                      <div class="form-group">                        
                        <button type="button" class="btn btn-primary" id="btn_submit" style="float: right;margin-top: 5px;margin-bottom: 5px;"><i class="fa fa-paper-plane" aria-hidden="true" style="margin-left: -15px;margin-right: 10px;"></i> Send</button>
                      </div>                         
                   </div>
	          </div>

					</div>
          <div class="masge-inme-box hidden-sm hidden-xs">              
              <img src="<?php echo base_url(); ?>assets/images/inme/inme-msg.png" width="100%" class="link-tab-inme" alt="InsureMe Club" />
          </div>
     
				</div>
			</div>
</section>
<section id="dform2" style="padding-bottom: 100px; display: none;">
  <div class="container title-bar"><h1>Contact Us</h1></div>
        <div class="container wow fadeInDown spanal effect2">
        <div class="content set_margin_top_82 fmf-ui-main">

          <div class="center-main-element" style="margin-bottom: 5px;">         

              <div  style="margin-top: 20px;">
              <img src="<?php echo base_url(); ?>assets/images/inme/inme-msg-send.png" width="100%" class="" alt="InsureMe Send Message" />
              </div>       

            <div class="col-sm-12" style="padding-bottom: 30px;">
            <h4 class="msg-sent">Message Sent Successfully</h4>
              <div class="form-group" style="text-align: center;"> 
                    <button type="button" class="btn btn-primary" id="btn_submit" style="margin: auto; margin-top: 10px; margin-left: 100px;"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-left: -10px;margin-right: 20px;"></i> Back To Homepage </button>
              </div>
            </div>
              
          </div>

        </div>
        </div>
  </section>

<?php
echo form_hidden('form', 'contactus');
echo form_close();
?>
</body>
<script type="text/javascript">
$(document).ready(function(){
    hide_error();
});

/* Submit the message */
$("#btn_submit").click(function()
{
  hide_error();
  /* Get from elements values */
  var values = jQuery('#form-contactus').serializeArray();
  $.ajax
  ({
      url: '<?php echo site_url('index.php/Contactus/verify') ?>',
      type: 'post',
      data: values ,
      dataType: 'json',
      success: function (response) 
      {
        if(response['result'])
        {
          $('#dform1').hide();
          $('#dform2').show();
        }
        else
        {
          $('#captcha_image').html(response['image']);
          $('#cx_captcha').val('');
          show_error(response['errors']);
        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
         console.log(textStatus, errorThrown);
      }
  });       
});

/* Hide error messages */
function hide_error()
{
  $("span.tooltiptext").hide();
}
/* Show error messages */
function show_error(validation_errors)
{
  for (var error in validation_errors) 
  {
    $('#'+error+'_error').show();
    $('#'+error+'_error').text(validation_errors[error]);
  }
}

/* Hide the error div when typing inside the textbox */
function remove_error(elem)
{
  var elem_id = $(elem).attr('id');
  var err_elem = elem_id+'_error'; 

  $('#'+err_elem).fadeOut();
}

/* Refresh captcha canvas */
function refresh_captcha_canvas()
{
  $('#captcha_image').html(response['image']);
  $('#cx_captcha').val('');
}

/* Refresh captcha - Force by user */
$("#btn_captcha_refresh").click(function()
{
  $.ajax
  ({
      url: '<?php echo site_url('index.php/Contactus/refresh_captcha') ?>',
      type: 'post',      
      dataType: 'json',
      success: function (response) 
      {
        $('#captcha_image').html(response['image']);
        $('#cx_captcha').val('');
      },
      error: function(jqXHR, textStatus, errorThrown) 
      {
         console.log(textStatus, errorThrown);
      }
  });       
});
</script>