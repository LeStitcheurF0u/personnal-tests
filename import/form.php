<aside class="contact-form">
  <form action="traitements/mails.php" method="post" id="form">
    <p>Une question ? Un projet ? Envoyez moi un message</p>

    <?php
    if (isset($_SESSION['message']) && !empty($_SESSION['message'])) :
    ?>
      <p class='message'><?= $_SESSION['message'] ?></p>
    <?php
      unset($_SESSION['message']);
    endif;

    if (isset($_SESSION['error']) && !empty($_SESSION['error'])) :
    ?>
      <p class="error"><?= $_SESSION['error'] ?></p>
    <?php
      unset($_SESSION['error']);
    endif;
    ?>
    <div id="matomo-opt-out"></div>
    <script src="https://matomo.mywebsoluce.fr/index.php?module=CoreAdminHome&action=optOutJS&divId=matomo-opt-out&language=auto&showIntro=1"></script>
    <div class="contact-form__item">
      <label for="nom">Nom</label>
      <input type="text" id="nom" name="nom" required />
    </div>
    <div class="contact-form__item">
      <label for="prenom">Prénom</label>
      <input type="text" id="prenom" name="prenom" required />
    </div>
    <div class="contact-form__item">
      <label for="mail">Email</label>
      <input type="email" id="mail" name="mail" required />
    </div>
    <div class="contact-form__item">
      <label for="subject">Sujet de votre message</label>
      <select name="subject" id="subject" required>
        <option value="0">Veuillez sélectionner un sujet</option>
        <option value="1">Demande de devis</option>
        <option value="2">J'ai un projet web</option>
        <option value="3">Demande de renseignements</option>
        <option value="4">Autre</option>
      </select>
    </div>
    <div class="contact-form__item">
      <label for="message">Message</label>
      <textarea name="message" id="message" required><?php if (isset($_SESSION['form'])) {
                                                        echo $_SESSION['form']['message'];
                                                        unset($_SESSION['form']);
                                                      }
                                                      ?></textarea>
    </div>
    <div class="contact-form__item">
      <input type="hidden" name="honeypot" />
    </div>
    <div class="contact-form__buttons">
      <button type="submit">Envoyer</button>
      <button type="reset">Recommencer</button>
    </div>
  </form>
</aside>