<?php
/*
Template Name: Our Menu
*/
?>

<?= get_header(); ?>

<div class="header-menu-1">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<img src="<?= get_template_directory_uri() ?>/img/White logo.png" class="img-fluid">
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
	</div>
</div>

<div style="background: #fff">
	<div class="container pb-5">
		<div class="row justify-content-center">
			<h2 class="col-12 text-center">Our menu</h2>
			<ul class="nav nav-pills dish_types">
			  <li class="nav-item">
			    <a class="nav-link active" href="#" data-cat="0">All meals</a>
			  </li>
			  <?php
			  $args = array(
			  	'hide_empty' => 0,
			  	'taxonomy' => 'dish_type'
			  );
			  $dish_types = get_terms($args);
			  foreach($dish_types as $dish_type)
			  { ?>
			  <li class="nav-item">
			    <a class="nav-link" href="#" data-cat="<?= $dish_type->slug ?>"><?= $dish_type->name ?></a>
			  </li>
			  <?php }
			  ?>
			</ul>
		</div>
	</div>

	<div class="container">
		<div class="row" id="dishes_ajax_list">
			<?php
			$posts = get_posts(array( 'post_type' => 'dish', 'numberposts' => 6 ));
			foreach($posts as $post): ?>
			<div class="col-md-4">
				<div class="dish">
					<div class="dish_image" style="background-image: url('<?= get_the_post_thumbnail_url($post->ID); ?>');"></div>
					<span id="title"><?= $post->post_title ?></span>
					<div id="info"><b>Calories:</b> <?= get_field('calories'); ?> <b>Carbs:</b> <?= get_field('carbs'); ?> <b>Protein:</b> <?= get_field('protein'); ?> <b>Fat:</b> <?= get_field('fat'); ?></div>
					<p><?= $post->post_excerpt ?></p>
					<img src="<?= get_template_directory_uri() ?>/img/brocolli.png" class="img-fluid" style="margin-left: 20px;">
					<img src="<?= get_template_directory_uri() ?>/img/acorn.png" class="img-fluid" style="margin-left: 10px;">
				</div>
			</div>
			<?php
			endforeach;
			?>
		</div>
		<div class="row justify-content-center">
			<div class="col-6 d-flex pagination">
				<?php $count = wp_count_posts('dish'); 
				if($count->publish): ?>
				<a href="#" id="prev" data-page="1" data-cat="0">< Previous page</a>
				<a href="#" id="next" class="ml-auto" data-page="2" data-cat="0">Next page ></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(".dish_types a").click(function(){
		var el = $(this);
		$.ajax({
			url: '<?php echo admin_url("admin-ajax.php") ?>',
			type: 'POST',
			data: {
				action: 'get_cat',
				cat_slug: $(this).attr('data-cat')
			},
			success: function(response){
				$("#dishes_ajax_list").html(response);
				$(".dish_types a").removeClass('active');
				$(el).addClass('active');
			}
		});
		return false;
	});
	$(".pagination a").click(function(){
		var el = $(this);
		$.ajax({
			url: '<?php echo admin_url("admin-ajax.php") ?>',
			type: 'POST',
			data: {
				action: 'get_page',
				page: $(el).attr("data-page"),
				cat: $(el).attr("data-cat")
			},
			success: function(response){
				$("#dishes_ajax_list").html(response);

			}
		});
		return false;
	});
</script>

<?= get_footer(); ?>