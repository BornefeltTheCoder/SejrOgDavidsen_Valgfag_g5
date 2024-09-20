<?php get_header(); ?>

<body>
  <main>
    <header id="adoptionHeader" class="sectionWrapper flex">
      <section>
        <h2>Adoptioner</h2>
        <p>Find din nye firbenede ven</p>
        <div class="adoptFilterContainer">
          <div class="filterSelects flex">
            <button type="button" id="dogBtn" onclick="selectAnimal('dog')">Hund</button>
            <button type="button" id="catBtn" onclick="selectAnimal('cat')">Kat</button>
            <button type="button">Aktivitetsniveau <i class="fa-solid fa-chevron-down"></i></button>
            <button type="button">Køn <i class="fa-solid fa-chevron-down"></i></button>
          </div>
          <div class="filterRadios">
            <input type="radio" id="childFriendly" name="filter" value="børnevenlig">
            <label for="childFriendly">Børnevenlig</label>

            <input type="radio" id="familyFriendly" name="filter" value="familievenlig">
            <label for="familyFriendly">Familievenlig</label>

            <input type="radio" id="all" name="filter" value="alle">
            <label for="all">Alle</label>
          </div>
          <button class="btnBlue" type="submit">søg efter hund</button>
        </div>
      </section>
      <section class="adoptionHeaderImg">
        <img id="hund" class="selectedType filterAnimal" src=<?php echo get_theme_file_uri("./assets/img/hundAdoptionHeader.png") ?> alt="liggende schæfer">
        <img id="kat" class="nonselectedType filterAnimal" src=<?php echo get_theme_file_uri("./assets/img/katAdoptionHeader.png") ?> alt="siddende kat">
      </section>
    </header>

    <!-- dynamisk indsættelse af hunde -->

    <!--  
    // if (have_posts())
    //   while (have_posts()) -->

    <!-- <a href="./single-hund.html" class="animalCard">
          <img src="./assets/img/finskLapphund.jpg" alt="finsk lapphund valp">
          <div class="animalContainer">
            <div class="animalCardDetails">
              <h4>Basse</h4>
              <p>Finsk Lapphund</p>
            </div>
            <div class="animalCardTraits">
              <div class="trait"><i class="fa-solid fa-cake-candles"></i> 3 Måneder</div>
              <div class="trait"><i class="fa-solid fa-dog"></i> Mellem</div>
              <div class="trait"><i class="fa-solid fa-venus-mars"></i> Han</div>
              <div class="trait"><i class="fa-solid fa-baby"></i> Ukendt</div>
            </div>
          </div>
        </a> -->
    <!-- dynamisk indsættelse af hunde slut-->



    <section class="sectionWrapper">
      <h2>Hunde til adoption</h2>
      <section class="animalGallery">
        <?php
        $dogs = new WP_Query(array(
          'posts_per_page' => 8,
          'post_type' => 'dog',
          'orderby' => 'title',
          'order' => 'ASC',
        ));

        while ($dogs->have_posts()) {
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
      <button id="findDyr" class="btnPink" href="./archive-hund.html">Indlæs flere hunde</button>
    </section>
  </main>
  <footer class="flex">
  </footer>
</body>

<?php get_footer(); ?>