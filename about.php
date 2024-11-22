<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('include/header-link.php') ?>
	<title>Template - <?php echo SITE_NAME; ?></title>
</head>

<body>
	<!-- start root -->
	<div id="root">
		<?php include('include/header.php') ?>

		<main id="main">
            <!-- about us section start -->
            <section class="about_us section-padding">
                <div class="container">
                    <div class="row">
                        <div class="about_us_text text-center"><h1>About Us</h1></div>
                    </div>
                </div>
            </section>
             <!-- about us section ends -->



             <!-- orgam\nic food section start -->
              <section class="organic_food section-padding">
                <div class="container">
                    <div class="row">
                        <!-- col start -->
                         <div class="col-md-4">
                            <div class="organic_food_content text-end">
                                <div class="organic_food_content_text"><h3>Organic Food Products</h3></div>
                                <div class="organic_food_content_mini_text"><h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h5></div>

                                <div class="organic_food_content_text"><h3>Famous Family Winery</h3></div>
                                <div class="organic_food_content_mini_text"><h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h5></div>

                                <div class="organic_food_content_text"><h3>Hard Work & Best Quality</h3></div>
                                <div class="organic_food_content_mini_text"><h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h5></div>
                            </div>
                         </div>
                         <!-- col end -->

                         <!-- col start -->
                          <div class="col-md-4">
                          <div class="organic_food_image text-center"><img src="<?php echo BASE_URL; ?>/images/abouu-us-img1.png" alt=""></div>
                          </div>
                         <!-- col end -->

                         <!-- col start -->
                         <div class="col-md-4">
                            <div class="organic_food_content text-start">
                                <div class="organic_food_content_text"><h3>Natural Ingredients</h3></div>
                                <div class="organic_food_content_mini_text"><h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h5></div>

                                <div class="organic_food_content_text"><h3>Horse Riding</h3></div>
                                <div class="organic_food_content_mini_text"><h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h5></div>

                                <div class="organic_food_content_text"><h3>Organic Food Market</h3></div>
                                <div class="organic_food_content_mini_text"><h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h5></div>
                            </div>
                         </div>
                         <!-- col end -->

                    </div>
                </div>
              </section>
              <!-- organic food section ned -->



            <!-- about us counter section start -->
             <section class="about_counter">
                <div class="container">
                    <div class="row">
                        <div class="counters_area d-flex ">
                            <div class="counters_content">
                            <div class="counter">
                            <div class="counter_number"><h1>82</h1></div>
                            </div>
                            <div class="counter_text"><h2>Merry Lil' Cows</h2></div>
                            </div>

                            <div class="counters_content">
                            <div class="counter">
                            <div class="counter_number"><h1>139</h1></div>
                            </div>
                            <div class="counter_text"><h2>Feisty Goats</h2></div>
                            </div>

                            <div class="counters_content">
                            <div class="counter">
                            <div class="counter_number"><h1>34</h1></div>
                            </div>
                            <div class="counter_text"><h2>Skippy Calves</h2></div>
                            </div>
                            
                            <div class="counters_content">
                                <div class="counter">
                            <div class="counter_number"><h1>59</h1></div>
                            </div>
                            <div class="counter_text"><h2>Silly Piggies</h2></div>
                            </div>
                    
                        </div>
                    </div>
                </div>
             </section>
            <!-- about us counter section ends -->
              
            <!-- <h3><div class="counter">89697</div></h3> -->
		</main>


		<?php include('include/footer.php') ?>
	</div>
	<!-- end root -->
	<?php include('include/footer-link.php') ?>

	
</body>

</html>


<script>
        
        
$(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
    $(this).text(Math.ceil(now));
}
});
});

});  



</script>