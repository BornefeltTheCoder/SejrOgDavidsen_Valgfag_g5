<?php get_header(); ?>


<main>
  <header class="fullWidth fullHeader">
    <?php the_post_thumbnail('pageBanner'); ?>
    <div class="forsideHero">
      <div class="forsideText">
        <h1>Sejr og Davidsen</h1>
        <p>Hos os i Sejr & Davidsens Dyrepension og -internat tilbyder vi dyrepasning på et professionelt niveau, samt tager vi os også af svigtede familiedyr i alle størrelser, herreløse eller nødstedte. </p>
      </div>
      <div class="forsideKnap">
        <a class="btnWhite" href="<?php echo site_url('/adoption'); ?>">Adoption</a>
        <a class="btnWhite" href="<?php echo site_url('/dyrepension'); ?>">Dyrepension</a>

      </div>
    </div>
  </header>
  <section class="sectionWrapper">
    <div class="mission flexClm">
      <h2>Vores mission</h2>
      <p>Vores mål for Sejr og Davidsen er at give dine dyr et professionelt og trygt sted at efterlade dem, mens du er på ferie, men også et sted man trygt kan aflevere de dyre man ikke længere har mulighed for at have.</p>
      <a class="btnPink" href="./omOs.html">Læs mere om os</a>
    </div>
  </section>

  <section class="sectionWrapper focusEntryPoints flex">
    <a href="<?php echo site_url('/adoption'); ?>">
      <div class="entryPoint">
        <img src=<?php echo get_theme_file_uri("./assets/img/entryAdopter.jpg") ?> alt="familie med hund">
        <i class="fa-solid fa-paw"></i>
        <p>Adoption</p>
      </div>
    </a>

    <a href="<?php echo site_url('/dyrepension'); ?>">
      <div class="entryPoint">
        <img src=<?php echo get_theme_file_uri("./assets/img/entryDyrepension.jpg") ?> alt="hund der ligger i kurv">
        <i class="fa-solid fa-house"></i>
        <p>Dyrepension</p>
      </div>
    </a>

    <a href="#">
      <div class="entryPoint">
        <img src=<?php echo get_theme_file_uri("./assets/img/entryRace.jpg") ?> alt="corgi hund der sidder på graes">
        <i class="fa-solid fa-dog"></i>
        <p>Racer</p>
      </div>
    </a>
  </section>
</main>


<?php get_footer(); ?>