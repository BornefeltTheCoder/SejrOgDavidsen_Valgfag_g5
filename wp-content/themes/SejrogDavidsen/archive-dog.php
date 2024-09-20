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
        <img id="hund" class="selectedType filterAnimal" src=<?php echo get_theme_file_uri("assets/img/hundAdoptionHeader.png") ?> alt="liggende schæfer">
        <img id="kat" class="nonselectedType filterAnimal" src=<?php echo get_theme_file_uri("assets/img/katAdoptionHeader.png") ?> alt="siddende kat">
      </section>
    </header>




    <section class="sectionWrapper">
      <h2>Hunde til adoption</h2>
      <section class="animalGallery">
        <?php
        // custom query to limit number of post to 4
        // with post type dog, ordered by title in alphabetical order
        $dogs = new WP_Query(array(
          'posts_per_page' => 8,
          'post_type' => 'dog',
          'orderby' => 'title',
          'order' => 'ASC',
        ));

        // while custom query (dogs) has posts, "the famous loop" puts out the post and all the content in the dynamic fields
        while ($dogs->have_posts()) {
          $dogs->the_post();
          $bornvenlig = get_field('bornevenlig');
        ?>
          <!-- site url gets current site (archive) and the permalink from single page -->
          <a href="<?php site_url(the_permalink()); ?>" class="animalCard">
            <!-- gets the featured image and echoes (puts it onto page) it out-->
            <?php echo get_the_post_thumbnail(); ?>
            <div class="animalContainer">
              <div class="animalCardDetails">
                <!-- gets the wp post title -->
                <h4><?php the_title(); ?></h4>
                <!-- gets the acf field race and echos it onto the page -->
                <p><?php echo get_field('race'); ?></p>
              </div>
              <div class="animalCardTraits">
                <div class="trait">
                  <!-- gets the acf field and echo alder -->
                  <i class="fa-solid fa-cake-candles"></i> <?php echo get_field('alder') ?>
                </div>
                <div class="trait">
                  <!-- gets the acf field and echo størrelse -->
                  <i class="fa-solid fa-dog"></i> <?php echo get_field('storrelse') ?>
                </div>
                <div class="trait">
                  <!-- gets the acf field and echo køn -->
                  <i class="fa-solid fa-venus-mars"></i> <?php echo get_field('kon') ?>
                </div>
                <div class="trait">
                  <!-- gets the acf field and echo børnevenlighed -->
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