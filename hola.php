<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Documento Nuevo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
 
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,3],
        itemsDesktopSmall:[980,2],
        itemsTablet:[768,2],
        itemsMobile:[650,1],
        pagination:true,
        navigation:false,
        slideSpeed:1000,
        autoPlay:true
    });
});
    </script>
    <style>
        
    
    
     
.demo{ background: #f8f8f8; }
.testimonial{
    margin: 0 20px 40px;
}
.testimonial .testimonial-content{
    padding: 35px 25px 35px 50px;
    margin-bottom: 35px;
    background: #fff;
    border: 1px solid #f0f0f0;
    position: relative;
}
.testimonial .testimonial-content:after{
    content: "";
    display: inline-block;
    width: 20px;
    height: 20px;
    background: #fff;
    position: absolute;
    bottom: -10px;
    left: 22px;
    transform: rotate(45deg);
}
.testimonial-content .testimonial-icon{
    width: 50px;
    height: 45px;
    background: #ff4242;
    text-align: center;
    font-size: 22px;
    color: #fff;
    line-height: 42px;
    position: absolute;
    top: 37px;
    left: -19px;
}
.testimonial-content .testimonial-icon:before{
    content: "";
    border-bottom: 16px solid #e41212;
    border-left: 18px solid transparent;
    position: absolute;
    top: -16px;
    left: 1px;
}
.testimonial .description{
    font-size: 15px;
    font-style: italic;
    color: #8a8a8a;
    line-height: 23px;
    margin: 0;
}
.testimonial .title{
    display: block;
    font-size: 18px;
    font-weight: 700;
    color: #525252;
    text-transform: capitalize;
    letter-spacing: 1px;
    margin: 0 0 5px 0;
}
.testimonial .post{
    display: block;
    font-size: 14px;
    color: #ff4242;
}
.owl-theme .owl-controls{
    margin-top: 20px;
}
.owl-theme .owl-controls .owl-page span{
    background: #ccc;
    opacity: 1;
    transition: all 0.4s ease 0s;
}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls.clickable .owl-page:hover span{
    background: #ff4242;
}</style>
</head>
<body>
   
<div class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                            </p>
                        </div>
                        <h3 class="title">williamson</h3>
                        <span class="post">Web Developer</span>
                    </div>
 
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                            </p>
                        </div>
                        <h3 class="title">Kristina</h3>
                        <span class="post">Web Designer</span>
                    </div>
 
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                            </p>
                        </div>
                        <h3 class="title">williamson</h3>
                        <span class="post">Web Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   
   
   
</body>
</html>
