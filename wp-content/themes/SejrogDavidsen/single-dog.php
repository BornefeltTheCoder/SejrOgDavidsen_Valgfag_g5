<?php get_header(); ?>

<main>
  <section class="sectionWrapper grid singleDog">
    <article>
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
    </article>
    <?php echo get_the_post_thumbnail(); ?>
  </section>

  <section class="sectionWrapper animalDesc">
    <article class="detailsGrid">

      <div class="detailsGridItem flex">
        <i class="fa-solid fa-dna"></i>
        <div class="detailsGridText flexClm">
          <span>Race</span>
          <p>Rottweiler</p>
        </div>
      </div>

      <div class="detailsGridItem flex">
        <i class="fa-solid fa-circle-info"></i>
        <i class="fa-solid fa-ruler-combined"></i>
        <div class="detailsGridText flexClm">
          <span>Størrelse</span>
          <p>Stor</p>
        </div>
      </div>

      <div class="detailsGridItem flex">
        <i class="fa-solid fa-cake-candles"></i>
        <div class="detailsGridText flexClm">
          <span>Alder</span>
          <p>2 år</p>
        </div>
      </div>

      <div class="detailsGridItem flex">
        <i class="fa-solid fa-briefcase-medical"></i>
        <div class="detailsGridText flexClm">
          <span>Helbred</span>
          <p>Ingen medicin</p>
        </div>
      </div>

      <div class="detailsGridItem flex">
        <i class="fa-solid fa-venus-mars"></i>
        <div class="detailsGridText flexClm">
          <span>Køn</span>
          <p>Hanhund</p>
        </div>
      </div>

      <div class="detailsGridItem flex">
        <i class="fa-solid fa-circle-info"></i>
        <i class="fa-solid fa-dog"></i>
        <div class="detailsGridText flexClm">
          <span>Aktivitetsniveau</span>
          <p>Højt</p>
        </div>
      </div>

      <div class="detailsGridItem flex itemWide">
        <i class="fa-solid fa-building-user"></i>
        <div class="detailsGridText flexClm">
          <span>Kan bo med</span>
          <p>Hunde og børn, der har lært at læse en hunds kropsprog</p>
        </div>
      </div>
    </article>

    <article class="applyContainer">
      <h2>Ansøg til at møde Bjørn eller en af vores andre hunde</h2>
      <div class="applyGrid">
        <button type="button">start din ansøgning</button>
        <button type="button">kontakt os</button>
        <button type="button">Støt Bjørn og vores andre dyr med en donering</button>
      </div>
    </article>
  </section>

  <section class="sectionWrapper">
    <h2>Se andre hunde</h2>
    <section class="animalGallery">
      <?php
      $dogs = new WP_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'dog',
        'orderby' => 'title',
        'order' => 'ASC',
      ));

      while ($dogs->have_posts('dog')) {
        $dogs->the_post();
        $bornvenlig = get_field('bornevenlig');
      ?>

        <a href="<?php site_url(the_permalink()); ?>" class="animalCard">
          <?php echo get_the_post_thumbnail(); ?>
          <div class="animalContainer">
            <div class="animalCardDetails">
              <h4><?php the_title(); ?></h4>
              <p><?php echo get_field('race'); ?></p>
            </div>
            <div class="animalCardTraits">
              <div class="trait">
                <i class="fa-solid fa-cake-candles"></i> <?php echo get_field('alder') ?>
              </div>
              <div class="trait">
                <i class="fa-solid fa-dog"></i> <?php echo get_field('storrelse') ?>
              </div>
              <div class="trait">
                <i class="fa-solid fa-venus-mars"></i> <?php echo get_field('kon') ?>
              </div>
              <div class="trait">
                <i class="fa-solid fa-baby"></i> <?php echo $bornvenlig; ?>
              </div>
            </div>
          </div>
        </a>

      <?php }
      ?>
    </section>
  </section>

</main>



<?php get_footer(); ?>