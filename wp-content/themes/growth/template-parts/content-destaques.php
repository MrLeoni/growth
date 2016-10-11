<?php
/**
 * Template part for displaying the posts slider in category "Destaques".
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Growth
 */
 
 //Querying posts in "Destaques" category
 $destaque_cat = get_cat_ID("Destaque");
 $destaque_args = array(
  "cat"  => "$destaque_cat",
  "post_per_page" => 3,
 );
$destaque_query = new WP_Query( $destaque_args );

if($destaque_query->have_posts()): ?>
<div class="destaque-box">
  <ul class="destaques-slider clearfix">
    
    <?php while($destaque_query->have_posts()): $destaque_query->the_post(); 
    // Get post ID
    $post_ID = get_the_ID(); 
    // Get post Tags
    $post_tags = get_the_tags( $post_ID ); ?>
    
    <li class="destaque-item destaque-<?php echo $post_ID ?>">
      <a href="<?php the_permalink(); ?>" title="<?php get_the_title(); ?>">
        <?php the_post_thumbnail("large"); ?>
        
        <div class="destaque-info">
          <?php // Foreach to display tags related with post
          foreach($post_tags as $tag) { ?>
            <p class="destaque-tag"><?php echo $tag->name; ?></p>
          <?php } // End foreach
            the_title("<h3>", "</h3>");
            // Meta infos
            echo "<p><i class='fa fa-user' aria-hidden='true'></i></i>".get_the_author()."</p>";
            echo "<p><i class='ion-ios-clock'></i>".get_the_date("j F", $post_id)."</p>";
          ?>
        </div>
        <p class="thumb-gradient"></p>
        <p class="thumb-overlay"><i class="ion-forward"></i></p>
      </a>
    </li>
    <?php endwhile;
    wp_reset_postdata();?>
    
  </ul>
</div>
<?php
else:
  echo "<div class='ghost' style='padding-top: 40px;'></div>";
endif;
?>