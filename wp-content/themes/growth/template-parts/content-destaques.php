<?php
/**
 * Template part for displaying the posts slider in category "Destaques".
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Growth
 */
 
 $destaque_cat = get_cat_ID("Destaques");

?>

<ul class="destaques-slider">
  <?php while(have_posts()): the_post(); ?>
  <li>
    <?php the_post_thumbnail("large"); ?>
    <div class="destaque-info">
      <?php
        the_tags("", " ", "");
        the_title("<h2>", "</h2>");
				echo "<p><i class='ion-ios-person'></i>".get_the_author()."</p>";
				echo "<p><i class='ion-ios-clock'></i>".get_the_date("j F", $post_id)."</p>";
      ?>
    </div>
  </li>
  <?php endwhile; ?>
</ul>