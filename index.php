<?php get_header(); ?>
<body>
	<h1 class="page-heading max-width"><?php bloginfo(name); ?></h1>
	<div class="grid max-width">
		<div class="block grid--item-9">
			<div class="block__title">
				Bloque Principal
			</div>
			<div class="block__body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut facilis, totam ratione quaerat. Facilis iste, non alias iusto odit facere ut tempora aperiam aspernatur deserunt est quidem maiores. Obcaecati, voluptatibus!</p>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<?php get_footer(); ?>