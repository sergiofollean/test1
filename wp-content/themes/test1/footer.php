<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-auto">
				<img src="<?= get_template_directory_uri() ?>/img/White logo.png" class="img-fluid">
			</div>
			<div class="col-md-auto">
				<ul class="footer_menu">
					<li>
						<a href="#">Homepage</a>
					</li>
					<li>
						<a href="#">Our Meals</a>
					</li>
					<li>
						<a href="#">Plans & Prices</a>
					</li>
					<li>
						<a href="#">About Us</a>
					</li>
					<li>
						<a href="#">Contact Us</a>
					</li>
				</ul>
				<a href="#"><img src="<?= get_template_directory_uri() ?>/img/apple.png" class="img-fluid pt-3" style="width: 160px;"></a>
				<a href="#"><img src="<?= get_template_directory_uri() ?>/img/google.png" class="img-fluid pl-3 pt-3" style="width: 160px;"></a>
			</div>
			<div class="col-md">
				<div class="row">
					<div class="col-md-auto">
						<img src="<?= get_template_directory_uri() ?>/img/facebook.png" style="width: 24px;">
						<img src="<?= get_template_directory_uri() ?>/img/inst.png" style="width: 24px;" class="ml-3">
					</div>
					<div class="col-md-auto">
						<img src="<?= get_template_directory_uri() ?>/img/mail.png" style="width: 16px;" class="mr-2">
						info@stayfitegypt.com
					</div>
					<div class="col-md-auto">
						<img src="<?= get_template_directory_uri() ?>/img/phone_i.png" style="width: 16px;" class="mr-2">
						+20103094932782
					</div>
				</div>
				<div class="row" style="padding-top: 30px;">
					<div class="col-md">
						<input type="text" name="email" placeholder="john.smith@test.com">
					</div>
					<div class="col-md-auto">
						<button>Subscribe</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<?= wp_footer(); ?>
</body>
</html>