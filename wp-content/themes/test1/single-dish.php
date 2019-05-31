<?= get_header(); ?>

<?php the_post(); ?>

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

<div class="container pt-5 pb-5">
	<div class="row">
		<div class="col-md-6">
			<img src="<?= get_the_post_thumbnail_url($post->ID); ?>" class="img-fluid" style="border-radius: 8px;">
		</div>
		<div class="col-md-6">
			<h3 class="pt-5"><?= $post->post_title; ?></h3>
			<?= the_content(); ?>
			<b>Components: </b><?= get_field('components'); ?><br>
			<b>Nutrients:</b><br>
			Calories: <?= get_field('calories'); ?> Carbs: <?= get_field('carbs'); ?> Protein: <?= get_field('protein'); ?> Fat: <?= get_field('fat'); ?>
			<br><br>
			<img src="<?= get_template_directory_uri() ?>/img/brocolli.png" class="img-fluid" style="width: 26px"> - vegeterian
			<img src="<?= get_template_directory_uri() ?>/img/acorn.png" class="img-fluid ml-3" style="width: 26px"> - contains nuts
		</div>
	</div>
</div>

<?= get_footer(); ?>