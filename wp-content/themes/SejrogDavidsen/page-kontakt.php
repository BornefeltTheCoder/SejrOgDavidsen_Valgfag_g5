<?php get_header(); ?>
<main>
  <section class="sectionWrapper">
    <h1>Kontakt os</h1>
    <article class="grid">
      <div id="map" style="width:100%;height:400px;"></div>
      <form action="/submit" method="POST" class="contact-form">
        <div>
          <label for="name">Navn:</label>
          <input type="text" id="name" name="name" required>
        </div>

        <div>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div>
          <label for="message">Besked:</label>
          <textarea id="message" name="message" rows="4" required></textarea>
        </div>

        <div>
          <button type="submit">Send besked</button>
        </div>
      </form>

    </article>

  </section>
</main>

<?php get_footer(); ?>