<?php get_header(); ?>
<body>
	<h1 class="page-heading max-width"><?php bloginfo(name); ?></h1>
	<div class="grid max-width">
		<div class="block grid--item-9">
			<div class="block__title">
				Últimos Trabajos
			</div>
			<div class="block__body grid">
				<?php
					$args = array('cat' => 5);
					$category_posts = new WP_Query($args);

					if($category_posts->have_posts()) : 
						while($category_posts->have_posts()) :
							$category_posts->the_post();
				?>
							<article class="block grid--item-4">
								<h2 class="block__title"><?php the_title(); ?></h2>
								<div class="block__body">
									<p><?php the_excerpt(); ?></p>
									<footer>
										<div>
											<small><?php the_tags(); ?></small>
										</div>
										<div>
										<b><?php the_author(); ?></b>
										</div>
									</footer>
								</div>
							</article>
				<?php 
						endwhile;
						else : 
				?>
						<h4>Huy, no encontramos entradas</h4>
				<?php
					endif;
				?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<?php get_footer(); ?>