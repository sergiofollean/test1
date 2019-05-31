<?= get_header(); ?>

<div class="bck1">
	<div class="container">
		<div class="row pt-3">
			<div class="col-md-2">
				<img src="<?= get_template_directory_uri() ?>/img/Grean logo.png" class="img-fluid">
			</div>
			<div class="col-md-10 row no-gutters">
				<ul class="topmenu my-auto">
					<li>
						<a href="#">Homepage</a>
					</li>
					<li>
						<a href="#">Our meals</a>
					</li>
					<li>
						<a href="#">Plans & prices</a>
					</li>
					<li>
						<a href="#">About us</a>
					</li>
					<li>
						<a href="#">Contact us</a>
					</li>
					<li class="menu_phone ml-auto">+380953194595</li>
				</ul>
			</div>
		</div>
		<div class="row title">
			<h2 class="col-md-5">Meet you favorite way to eat healthy every day</h2>
			<div class="col-12 mt-4">
				<a href="#" class="download_btn">Download our app</a>
			</div>
		</div>
	</div>
</div>

<div class="container slider_div">
	<div class="row">
		<h2 class="col-12 text-center">On the Menu</h2>
	</div>
</div>
<div class="hard_slider">
	<?php
	$dishes = get_posts(array( 'post_type' => 'dish' ));
	foreach($dishes as $dish)
	{
	?>
	<a href="<?= get_the_permalink($dish->ID) ?>" style="background-image: url('<?= get_the_post_thumbnail_url($dish->ID); ?>');">
		<div class="info">
			<h5><?= $dish->post_title ?></h5>
			<div class="additional">
				<span><b>Calories: </b>500</span>
				<span><b>Carbs: </b>300</span>
				<span><b>Protein: </b>33g</span>
				<span><b>Fat: </b>30g</span>
			</div>
			<p><?= $dish->post_excerpt ?></p>
			<img src="<?= get_template_directory_uri() ?>/img/brocolli.png" class="img-fluid">
			<img src="<?= get_template_directory_uri() ?>/img/acorn.png" class="img-fluid">
		</div>
	</a>
	<?php
	}
	?>
</div>
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-4">
			<a href="#" class="download_btn">View all meals</a>
		</div>
	</div>
</div>
<div class="container">
	<div class="row justify-content-center">
		<h2 class="col-12 text-center">How it works</h2>
		<div class="col-md-3 hiw_item">
			<img src="<?= get_template_directory_uri() ?>/img/1.png" class="img-fluid">
			<span class="greentext">01 </span>Download our app
		</div>
		<div class="col-md-3 hiw_item">
			<img src="<?= get_template_directory_uri() ?>/img/2.png" class="img-fluid">
			<span class="greentext">02 </span>Choose your plan
		</div>
		<div class="col-md-3 hiw_item">
			<img src="<?= get_template_directory_uri() ?>/img/3.png" class="img-fluid">
			<span class="greentext">03 </span>Select your favorite foods
		</div>
		<div class="col-md-3 hiw_item">
			<img src="<?= get_template_directory_uri() ?>/img/4.png" class="img-fluid">
			<span class="greentext">04 </span>Enjoy!
		</div>
		<p class="col-md-12 text-center mt-3">
			Whether you're determined to lose weight or want to nourish your body with a healthier diet, our costumized healthy meal plans help you achieve your health and shape goals while making life much more convenient. Simply download<br>the StayFit app and chose the subscription plan that suits your lifestyle.
		</p>
	</div>
</div>

<div class="container-fluid pl-5 pr-5" style="position: relative; z-index: 1">
	<div class="row">
		<h2 class="col-12 text-center">Our Plans</h2>
		<?php
		$posts = get_posts(array( 'post_type' => 'plans', 'order' => 'ASC' ));
		$i = 1;
		foreach($posts as $post)
		{ 
		if($i == 1) $color = 'orange';
		if($i == 2) $color = 'green';
		if($i == 3) $color = 'red';
		if($i == 4) $color = 'blue';
		?>
		<div class="col-md-3">
			<div class="plan_div <?= $color ?>">
				<div class="plan_img" style="background-image: url('<?= get_the_post_thumbnail_url($post->ID); ?>')"></div>
				<div class="plan_title"><?= $post->post_title ?></div>
				<div class="plan_description"><?= $post->post_content ?></div>
				<div class="plan_info">
					<span id="starting_from">Starting from</span>
					<span id="info"><?= $post->post_excerpt ?></span>
				</div>
			</div>
		</div>
		<?php
		$i++;
		}
		?>
	</div>
</div>

<div class="container-fluid pb-5 wave_bg" style="position: relative;">
	<div class="row">
		<h2 class="col-12 text-center mb-0">Need help?</h2>
		<p class="col-12 text-center">If you're not sure which plan you need, we're here to help. Just tell us what your goals are and any specific lifestyle restrictions or<br>requirements and we'll help you get on the path to a healthy lifestyle.</p>
		<div class="col-12 text-center pt-3">
			<a href="#" class="download_btn">Find your meal plan</a>
		</div>
		<img src="<?= get_template_directory_uri() ?>/img/brocolli_bg.png" class="brocolli">
	</div>
</div>

<div class="container-fluid pb-5">
	<div class="row justify-content-center">
		<h2 class="col-12 text-center">Testimotionals</h2>
		<div class="col-10">
			<div class="testimotional_slider">
				<?php
				$posts = get_posts(array( 'post_type' => 'testimotionals' ));
				foreach($posts as $post)
				{ ?>
				<div class="row align-items-center">
					<div class="col-md-2">
						<img src="<?= get_the_post_thumbnail_url($post->ID); ?>" class="img-fluid" style="border-radius: 100%;">
					</div>
					<div class="col-md-10">
						<?= $post->post_content ?>
						<br><br>
						- <?= $post->post_title ?>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid pr-5 pl-5 right_bg">
	<div class="row align-items-center">
		<div class="col-md-5 offset-md-1">
			Sed ut perspiciatis, unde omnis iste natus error sit<br>
			voluptatem accusantium doloremque laudantium,<br>
			totam rem aperiam eaque ipsa, quae ab illo inventore<br>
			veritatis et quasi architecto beatae vitae dicta sunt,<br>
			explicabo. Nemo enim ipsam voluptatem, quia voluptas<br>
			sit, aspernatur aut odit aut fugit.
		</div>
		<div class="col-md-6">
			<img src="<?= get_template_directory_uri() ?>/img/video.png" class="img-fluid">
		</div>
	</div>
</div>

<div class="mobilephone">
	<div class="container pl-5">
		<div class="row">
			<div class="col-md-5">
				<img src="<?= get_template_directory_uri() ?>/img/phone.png" class="img-fluid phone">
			</div>
			<div class="col-md-7">
				<h2>Download our app</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Simply download the StayFit app and choose the subscription plan that suits your lifestyle.</p>
				<a href="#"><img src="<?= get_template_directory_uri() ?>/img/apple.png" class="img-fluid pt-3" style="width: 160px;"></a>
				<a href="#"><img src="<?= get_template_directory_uri() ?>/img/google.png" class="img-fluid pl-3 pt-3" style="width: 160px;"></a>
			</div>
		</div>
	</div>
</div>

<div class="discount_div">
	<div class="container pl-5">
		<div class="row align-items-center">
			<div class="col-md-5" id="description">
				Join our newsletter to receive tips on healthy lifestyle and get a discount for your first order
			</div>
			<div class="col-md-6">
				<div class="row align-items-center">
					<div class="col">
						<label>Your email</label>
						<input type="text" name="email" placeholder="john.smith@test.com">
						<label style="font-size: 12px;"><font style="color: #fff">No spam and 10</font>0% privacy guaranteed</label>
					</div>
					<div class="col-auto">
						<button class="download_btn">Get 10% discount</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('.testimotional_slider').slick({
		slidesToShow: 1,
		arrows: true
	});
	$('.hard_slider').slick({
	  centerMode: true,
	  centerPadding: '60px',
	  slidesToShow: 3,
	  variableWidth: true,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '40px',
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '40px',
	        slidesToShow: 1
	      }
	    }
	  ]
	});
</script>

<?= get_footer(); ?>