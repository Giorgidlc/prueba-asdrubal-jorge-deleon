<?php get_header(); ?>

<div class="content">
  <main>
    <?php if (is_front_page()) include 'sections/section-one.php'; ?>
  </main>
  
  <?php include 'sections/section-two.php'; ?>
  <?php include 'sections/section-three.php'; ?>

</div>

<?php get_footer(); ?>