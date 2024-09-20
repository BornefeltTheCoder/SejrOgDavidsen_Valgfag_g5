<?php get_header(); ?>

<header>

  <section class="fullWidth narrowHeader">
    <div class="heroContent">
      <?php the_post_thumbnail('pageBanner'); ?>
      <h1 class="heroTitle">Træning</h1>
    </div>
  </section>

</header>
<?php 
echo '<pre>';
print_r();
echo '</pre>';
?>
<main>
  <section class="sectionWrapper TopSectionTraining">

    <div class="textField">
      <h2>Træning hos Sejr og Davidsen</h2>
      <p>Velkommen til Sejr & Davidsens Dyrepension og -internat, her tilbyder vi professionel hundetræning både med fokus på både adfærdstræning og så giver vi tips & tricks til hjemmetræning. Vi ved, at hver hund er forskellige, hvilket gør at deres behov kan variere. Vores mål er derfor at skabe et trygt og positivt læringsmiljø, hvor både din hund og du kan trives godt.</p>
    </div>

    <div class="textField">
      <h2>Adfærdstræning</h2>
      <p>
        Har din hund problemer med f.eks. adfærd som aggressivitet, gøen eller overdrevet højt energiniveau?
        <br> Her hos Sejr & Davidsens Dyrepension og -internat arbejder vores adfærdsspecialister på høj plan med at identificere de underliggende årsager til din hunds uønsket adfærd og derved udvikler vi et skræddersyet træningsplan, som hjælper din hund med at finde ro og balance.
        <br> Vi tilbyder individuelle sessioner, hvor sessionen er tilpasset kun din hunds unikke temperament, og udover det giver vi dig værktøjerne til at forstå og ændre adfærden med motiverende metoder. Derved kan vi samme skabe rammer for en bedre hverdag for både din hund og dig som ejer.
      </p>
    </div>
    <div class="træning_billed">
      <img src=<?php echo get_theme_file_uri("/assets/img/Hundetræning.jpg") ?> alt="Hund hopper efter ejer" class="hundeTræningImg">
    </div>
  </section>

  <!---here is the accordian section tips/(FAQ)-->
  <section class="sectionWrapper accordionSection">
    <h2>Hundetræning </h2>
    <div class="accordion"></div>

    <article class="hundeTræningCardSection">
      <!---here is the card section-->
      <!----->
      <div class="hundeTræningCards">
        <img src=<?php echo get_theme_file_uri("./assets/img/Hvalp_I_snor.jpg") ?> alt="Hvalp i snor">
        <div class="hundeTræningCardsIndhold">
          <h3>Hvalpetræning</h3>
          <p>Vil du give din hvalp de bedste forudsætninger så kom til hvalpetræning. her giver vi dig redskaberne til at skabe et successfyldt samarbejde mellem dig og din hvalp.</p>
          <div class="hundeTræningCardsIcons">
            <i class="fa-solid fa-calendar-days"></i>
            <i class="fa-solid fa-coins"></i>
          </div>
          <button type="button" class="btnPink hundeTræningCardsBtn">Se pladser på hold</button>
        </div>
      </div>
      <div class="hundeTræningCards">
        <img src=<?php echo get_theme_file_uri("./assets/img/Holdtræning.JPG") ?> alt="Hundehold">
        <div class="hundeTræningCardsIndhold">
          <h3>Hold træning</h3>
          <p>I vores hold træning er der fokus på familiehundens samarbejdsevner og trivsel. Vi brænder for at få hunden til at fungerer i familien og sætte rammer på en blid, respektfuld og kærlig måde.</p>
          <div class="hundeTræningCardsIcons">
            <i class="fa-solid fa-calendar-days"></i>
            <i class="fa-solid fa-coins"></i>
          </div>
          <button type="button" class="btnPink hundeTræningCardsBtn">Se pladser på hold</button>
        </div>
      </div>

      <div class="hundeTræningCards">
        <img src=<?php echo get_theme_file_uri("./assets/img/IndividuelTræning.jpg") ?> alt="individuel hundetræning">
        <div class="hundeTræningCardsIndhold">
          <h3>Individuel træning</h3>
          <p>Oplever du adfærdsproblemer eller andre udfordringer med træningen af din firbende ven? Så tilbyder vi individuel træning. Forløb og pris afhænger af jeres problemstilling.</p>
          <div class="hundeTræningCardsIcons">
            <i class="fa-solid fa-calendar-days"></i>
            <i class="fa-solid fa-coins"></i>
          </div>
          <button type="button" class="btnPink hundeTræningCardsBtn">Se pladser på hold</button>
        </div>
      </div>
    </article>

    <h2>Hjemmetræning</h2>
    <p>Det er en god ide at træne din hund derhjemme også. Nogle grundlæggende ting der ville være godt at træne sin hund i kunne f.eks. være hvordan man går i pænt snor eller simple kommandoer. Hjemmetræninger bygger et godt forhold mellem hund og ejer og skaber en tryghed. Så start med de lette ting og find godbidderne frem. </p>
    <P>Her kan du læse nogle artikler her om hvordan du kan træne din hund derhjemme.</P>

  </section>

</main>





<?php get_footer(); ?>