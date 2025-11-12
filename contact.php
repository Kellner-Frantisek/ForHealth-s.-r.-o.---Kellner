<?php 
include "includes/menu.php"
?>
<div class="hero4">
  <div class="contact-container">
    <div class="form-section">
      <h2>Kontaktujte nás</h2>

      <form action="#" method="POST" class="contact-form">
        <label for="name">Jméno</label>
        <input type="text" id="name" name="name" required>

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Zpráva</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Odeslat</button>
      </form>
    </div>

    <div class="info-section">
      <h3>Kontaktní informace</h3>
      <p><strong>E-mail:</strong> <a href="mailto:forhealthsro@gmail.com">forhealthsro@gmail.com</a></p>
      <p><strong>Telefon:</strong> <a href="tel:676676676">676 676 676</a></p>
      <p><strong>Adresa:</strong><br>ForHealth s.r.o.<br>Praha, Česká republika</p>
    </div>
  </div>
</div>
<?php 
include "includes/footer.php"
?>