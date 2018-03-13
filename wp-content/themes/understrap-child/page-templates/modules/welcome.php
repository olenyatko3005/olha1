<section class="welcome-style">
	<div class="container">
		<div class="row">
			<div class="col-md-5 welcome-style-humbnail-style">
				<img src="<?= get_sub_field('welcome_image'); ?>" alt="welcome_image" />
			</div>
			<div class="col-md-7">
				<h2><?= get_sub_field('welcome_title'); ?></h2>
				<?= get_sub_field('welcome_description'); ?>
			</div>
		</div>
	</div>
</section>