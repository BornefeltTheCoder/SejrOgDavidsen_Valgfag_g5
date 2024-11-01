<?php get_header(); ?>


<main>
  <header class="fullWidth narrowHeader">
    <?php the_post_thumbnail('pageBanner'); ?>
    <h1>Adoption</h1>
  </header>

  <section class="sectionWrapper grid">
    <div class="paragraphLenght">
      <article>
        <h2>Sådan finder du den perfekte hund til dig</h2>
        <p>Leder i efter et nyt medlem til familien? Måske kan i blive det nye hjem for en af vores mange svigtede pelsede venner.</p>

        <p>Mange dyr bager prag af deres tidligerer oplevelser og vores dedikerede team arbejder for at sikre hvert dyr som vi modtager får den kærlighed, omsorg og pleje de fortjener. Udforsk vores adoptionsprogram og mød en ny ven til familien.</p>
      </article>

      <article>
        <h2>Før du adopterer</h2>
        <p>At have et kæledyr uanset størrelse og køn betyder at du som ejer skal bruge rigtigt meget tid sammen med dyret.</p>
        <p>Ved dit besøg vil du nok opleve at vi stiller mange spørgsmål og krav til deres nye hjem. Det er fordi dyrene på internatet er et produkt af deres tiddligerer miljø og vi gør alt i vores magt for at finde deres nye "for evigt" hjem.</p>
      </article>
    </div>

    <article>
      <h2>Overvejelser</h2>
      <section class="blueWrapper">
        <h3>Økonomisk forpligtelser</h3>
        <p>Udover den generelle udgift til foder og udstyr til hunden, skal man huske hundeforskring, vaccinationer og eventuelle loppe- og ormemidler. Der skal også tages hensyn til uforudsete dyrelæge besøg.</p>
      </section>
      <section class="blueWrapper">
        <h3>Boligforhold</h3>
        <p>Husk at tjekke om din bolig tillader og er egnet til hunde.</p>
      </section>
      <section class="blueWrapper">
        <h3>Race og størrelse</h3>
        <p>Forskellige racer har forskellige behov, husk at undersøg gruntigt hvilken hunderace som passer til dig.</p>
      </section>
    </article>
  </section>

  <section class="sectionWrapper">
    <h2>Vores dyr</h2>
    <section class="animalGallery">
      <?php
      // custom query to limit number of post to 4
      // with post type dog, ordered by title in alphabetical order
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
    <a id="findDyr" class="btnPink" href="<?php echo get_post_type_archive_link('dog'); ?>">Find et dyr</a>
  </section>

  <section class="sectionWrapper paragraphLenght grid">
    <section>
      <h2>Hvordan virker processen?</h2>
      <article>
        <h3>Undersøg dine behov</h3>
        <p>Første skridt for at adoptere et nyt familiemedlem, er at undersøge dine egne behov, både I din nye ven, men også hvad du og dit hjem kan tilbyde dem.</p>
      </article>

      <article>
        <h3>Find et dyr</h3>
        <p>Når du har en idé om hvem du leder efter, og hvad du kan tilbyde, kan du tage et kig I blandt vores katte og hunde. Du kan finde relevant information om dem, deres behov og deres baggrund.</p>
      </article>

      <article>
        <h3>Kom på besøg</h3>
        <p>Næstsidste skridt, er at tage kontakt med vores internat og aftale et besøg. Du får mulighed for både at snakke med én fra vores hold, stille spørgsmål og møde dit ønskede dyr.</p>
      </article>

      <article>
        <h3>Adopter!</h3>
        <p>Når du har fundet det rigtige match, så er det tid til at adoptere. Adoption koster 2000 kr. Og så er der andre regler og retningslinier som Sejr og Davidsen selv har styr på.</p>
      </article>
    </section>
    <img id="adoptionImg" src=<?php echo get_theme_file_uri("assets/img/adoptionProcess.jpg") ?> alt="En hund og en kvinde der sidder sammen">
  </section>

</main>




<?php get_footer(); ?>