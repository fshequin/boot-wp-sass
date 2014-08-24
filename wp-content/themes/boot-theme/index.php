<?php get_header(); ?>
  

  

  <div class="container">
    <div class="row">
      <div class="col-md-12 main-content">
      
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        
        <div class="post-content">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <p>&nbsp;</p>
        </div>



        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>