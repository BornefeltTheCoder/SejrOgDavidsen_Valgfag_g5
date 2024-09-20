<?php get_header(); ?> 

<header>
      <section class="fullWidth narrowHeader">
        <img src=<?php echo get_theme_file_uri("/assets/img/heroDyrepension.jpg" ) ?> alt="to golden retrievers" class="heroImg">
        <div class="heroContent">
          <h1 class="heroTitle">Dyrepension</h1>
        </div>
      </section>
    </header>

<main>
<section class="sectionWrapper dyrepensionContent">
  <div class="text-Content paragraphLenght">
    <h2>Et sikkert sted for din Hund</h2>
    <p>Har du brug for et trygt og kærligt sted til pasning af dine kæledyr? Mange har i perioder brug for at få deres dyr passet.</p>
    <p>Så tilbyder vi på Sejr & Davidsens Dyrepension, en hundepension med massere af socialisering, et sikkert og komfortabelt hjem væk fra hjemmet med et professionelt og omsorgsfult personale. </p>
  </div>
  <div class="dyrepensionBilleder">
    <img src=<?php echo get_theme_file_uri("/assets/img/hundekennel.jpg") ?> alt="Hunde i kennel" class="dyrepensionImages">
  </div>
</section>

<section class="sectionWrapper dyrepensionContent">
  <div class="text-Content paragraphLenght">
    <h2>Faciliteter</h2>
    <p>Rummelige bokse <li>Vores hunderum er dejligt rummelige sån din hund(e) kan finde sig godt tilpas </li>
    </p>
    <p>Adgang til løbegård <li>Vi har en stor løbegår med rig mulighed for at din hund kan udforske og få brændt noget krudt af.
      </li>
    </p>
    <p>Gulvarme og passiv køling i bokse <li>Der er indbygget gulvvarme til efterårs tiden og vinter og passiv køl til den varme sommer. Din hund vil altid kunne finde sig tilpas.</li>
    </p>
  </div>

  <div class="dyrepensionBilleder">
    <img src= <?php echo get_theme_file_uri("/assets/img/hvalpeleg.jpg") ?> alt="Hundehvalpe der leger i græs" class="dyrepensionImages">
  </div>
</section>

<section class="sectionWrapper dyrepensionContent">
  <div class="text-Content">
    <h2>Døgnrytme</h2>
    <p>Morgen <li>Morgenmad og rent-vand. - rengøring af boks. Derefter dagens første gåtur. </li>
    </p>
    <p>Middag <li>Snack tid og aktiviteter for hundene.</li>
    </p>
    <p>Eftermiddag <li>Tid til den lange gåtur med en godbid til følge. Er det hunde fra samme hjem kommer de ud samtidigt medmindre andet aftales</li>
    </p>
    <p>Aften <li>Vi går en aftentur, får en aften snack og slukker lyset og musikken så dyrene kan se at det er godnat tid.</li>
    </p>
  </div>
</section>

<section class="betingelserSection fullWidth flex">

  <div class="betingelserBilleder">
    <img src= <?php  echo get_theme_file_uri("/assets/img/HundpensionBetingelser.jpg")?> alt="hund på klinik">
  </div>

  <div class="betingelserText">
    <h3>Betingelser</h3>
    <p>Hunde af racerne: Amstarff, Pitbull, staffordshire bullterier, amerikansk bulldog og krydsninger deraf og andre fra listen af forbudte hunderacer accepterers ikke.<br>

      Hunden skal være ansvarsforsikret.<br>

      Hunden skal være vaccineret mod kennelhoste.<br>

      Hunden skal følge et af dyrlægen ordinert vaccinationsprogram. (vaccineret)<br>

      Ved første aflevering af hunden skal ejeren fremvise dokumentation derpå. <br>det er et lovkrav at disse dokumenter fremvises årligt</p>
  </div>
</section>

<section class="sectionWrapper selectRoom grid">
  <article>
    <h3>Plads reservering</h3>

    <div class="rumMuligheder filterRadios">
      <div class="roomOption">
        <input type="radio" name="radio" value="optionOne">
        <label for="optionOne" class="optionOne"> 1 hund 285kr inkl. Mad og tre gåture pr.dag
        </label>
      </div>
      <div class="roomOption">
        <input type="radio" name="radio" value="optionTwo">
        <label for="optionTwo" class="optionTwo">2 hunde sammen: 385 kr inkl. mad og tre gåture pr.dag
        </label>
      </div>
      <div class="roomOption">
        <input type="radio" name="radio" value="optionThree">
        <label for="optionThree" class="optionThree">3 hunde sammen: 485 kr
        </label>
        <p>inkl. mad og tre gåture pr.dag</p>
      </div>


    </div>
  </article>

  <div class="rumLedighed"></div>

</section>

</main>

<?php get_footer(); ?> 