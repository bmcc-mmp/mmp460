			<footer>
				<!-- You can write anything that you like here. This code grabs the year, site name and the administrator email that are entred in the site's dashboard. -->
				<small>
					&#169; Copyright <?php the_date(Y);?> <?php bloginfo('name');?> | Email: <a href="mailto:<?php 						the_author_email(); ?> "> <?php the_author_email(); ?> </a>
				</small>
    			</footer>
		</div> <!-- closes the wrapper div that was opened in header.php -->
   
<?php wp_footer();?>

	</body>
</html>
