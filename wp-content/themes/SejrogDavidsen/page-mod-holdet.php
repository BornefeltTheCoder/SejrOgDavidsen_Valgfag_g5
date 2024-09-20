<?php get_header(); ?>

<body>
    <nav class="flex">
    </nav>
    <main>
      <section class="sectionWrapper flex">
        <div class="introText">
          <h2>Vores hold</h2>
          <p>
            Vores hold er bestående af dygtige og passionerede dyreelskere, som virkelig gør forskellen. Hver enkelt medarbejder bringer specielle kompetencer, erfaringer og personligheder til holdet, og tilsammen skaber det vores stærke fællesskab og professionelle service.
          </p>
          <h2>Uddannelse og certifikationer</h2>
          <p>
            Vores hold her hos Sejr & Davidsens Dyrepension og -internat er veluddannet og har certifikationer inden for deres fag. Der sørges løbende for at opdatere vores viden og færdigheder, hvilket gør at vi altid er på forkant med den nyeste viden.
          </p>
        </div>
        <div class="introImg">
          <img src="<?php echo get_theme_file_uri('assets/img/fællesbilledeHoldet.jpg'); ?>" alt="fællesbillede">
        </div>
      </section>

      <section class="sectionWrapper">
        <h2>Mød holdet</h2>
        <div class="holdet">
          <div class="holdetCard">
            <article class="holdetContainer">
              <div class="holdetImg">
                <img src="<?php echo get_theme_file_uri('assets/img/Karin.jpg'); ?>" alt="Karin">
              </div>
              <div class="holdetText">
                <h3>Karin</h3>
                <p>Holdleder</p>
                <p>Karin er vores holdleder, med stor omsorg og lederskab sikrer hun at dyrene får den bedst mulige pleje. Hun koordinerer daglige opgaver for sit team, herunder fodring, sundhedstjek og socialisering af de forskellige dyr.</p>
              </div>
            </article>
          </div>

          <div class="holdetCard">
            <article class="holdetContainer">
              <div class="holdetImg">
                <img src="<?php echo get_theme_file_uri('assets/img/Morten.jpg'); ?>" alt="Morten">
              </div>
              <div class="holdetText">
                <h3>Morten</h3>
                <p>Sekretær</p>
                <p>Morten er en dygtig og organiseret sekretær, han sørger for at holde kontoret kørende effektivt. Han håndterer alt fra planlægning af møder og besvarelse af mails og de administrative opgaver.</p>
              </div>
            </article>
          </div>

          <div class="holdetCard">
            <article class="holdetContainer">
              <div class="holdetImg">
                <img src="<?php echo get_theme_file_uri('assets/img/Juan.jpg'); ?>" alt="Juan">
              </div>
              <div class="holdetText">
                <h3>Juan</h3>
                <p>Adoptionsleder</p>
                <p>Juan er adoptionsleder, han arbejder dedikeret med at finde de rette hjem til vores dyr i nød. Han vurderer både dyrenes behov og potentielle adoptanters livsstil for at sikre det perfekte match.</p>
              </div>
            </article>
          </div>

          <div class="holdetCard">
            <article class="holdetContainer">
              <div class="holdetImg">
                <img src="<?php echo get_theme_file_uri('assets/img/Johanne.jpg'); ?>" alt="Johanne">
              </div>
              <div class="holdetText">
                <h3>Johanne</h3>
                <p>Hundetræner</p>
                <p>Johanne er certificeret hundetræner, som specialiserer sig i adfærdstræning. Hun bruger positiv forstærkning til at løse problemer som angst og aggression hos de forskellige hunderacer.</p>
              </div>
            </article>
          </div>
        </div>
      </section>
    </main>
</body>


<?php get_footer();?>