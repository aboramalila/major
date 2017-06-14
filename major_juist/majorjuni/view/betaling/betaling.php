<section>
  <form class="" method="post">
    <header>
      <img src="" alt="logo" class="logo">
      <nav class="navigation container">
          <li><a class="navHeader" href="index.php?page=home">Home</a></li>
          <li><a class="navHeader" href="index.php?page=tussenstops">Tussenstops</a></li>
          <li><a class="navHeader" href="index.php?page=contact">Contact</a></li>
        </ul>
      </nav>
      <section>
        <h1 class="naamCruise">Cruise Sea Str-All</h1>
        <p class="infoCruise">
          Kom aan boord van de Sea Str-All en maak kennis met een fantastisch <span>nieuw leven</span>.
          Zowel onder als boven water ontdek je schoonheid in alle facetten.
          Bewonder door de glazen bodem het prachtige leven en de grote verscheidenheid van alles wat er zich onder de zeespiegel afspeelt.
        </p>
        <p class="infoCruise">
          Laat je boven water <span>verwennen</span> en omringen door wereldbekende reisbegeleiders. Werp een blik op het dekadente leven in bekende grootsteden van Amerika. Droom je ook van een leven zonder geldzorgen en veel <span>rijkdom</span>? Scroll dan snel verder en ontdek…
        </p>
        <button type="button" name="button" src="index.php?page=tussenstops" class="btnHeader">Boek nu</button>
      </section>
    </header>

    <main>
      <div class="page-content">
        <input type="hidden" name="type_gebruiker" value="klant" />
          <div class="input-container text">
            <label>
              <span class="form-label">Email:</span>
              <input type="text" name="email" class="form-input"<?php if(!empty($_POST['email'])) echo 'value="' . $_POST['email'] . '"';?> />
              <?php if(!empty($errors['email'])) echo '<span class="error">' . $errors['email'] . '</span>';?>
            </label>
          </div>

          <div class="input-container text">
            <label>
              <span class="form-label">Naam:</span>
              <input type="text" name="naam" class="form-input"<?php if(!empty($_POST['naam'])) echo 'value="' . $_POST['naam'] . '"';?> />
              <?php if(!empty($errors['naam'])) echo '<span class="error">' . $errors['naam'] . '</span>';?>
            </label>
          </div>

          <div class="input-container text">
            <label>
              <span class="form-label">Voornaam:</span>
              <input type="text" name="voornaam" class="form-input"<?php if(!empty($_POST['voornaam'])) echo 'value="' . $_POST['voornaam'] . '"';?> />
              <?php if(!empty($errors['voornaam'])) echo '<span class="error">' . $errors['voornaam'] . '</span>';?>
            </label>
          </div>

          <div class="input-container text">
            <label>
              <span class="form-label">Straat / nr / bus:</span>
              <input type="text" name="straat" class="form-input"<?php if(!empty($_POST['straat'])) echo 'value="' . $_POST['straat'] . '"';?> />
              <?php if(!empty($errors['straat'])) echo '<span class="error">' . $errors['straat'] . '</span>';?>

              <input type="text" name="huisnr" class="form-input"<?php if(!empty($_POST['huisnr'])) echo 'value="' . $_POST['huisnr'] . '"';?> />
              <?php if(!empty($errors['huisnr'])) echo '<span class="error">' . $errors['huisnr'] . '</span>';?>

              <input type="text" name="bus" class="form-input"<?php if(!empty($_POST['bus'])) echo 'value="' . $_POST['bus'] . '"';?> />
              <?php if(!empty($errors['bus'])) echo '<span class="error">' . $errors['bus'] . '</span>';?>
            </label>
          </div>

          <div class="input-container text">
            <label>
              <span class="form-label">Plaats / postcode:</span>
              <input type="text" name="postcode" class="form-input"<?php if(!empty($_POST['postcode'])) echo 'value="' . $_POST['postcode'] . '"';?> />
              <?php if(!empty($errors['postcode'])) echo '<span class="error">' . $errors['postcode'] . '</span>';?>

              <input type="text" name="plaats" class="form-input"<?php if(!empty($_POST['plaats'])) echo 'value="' . $_POST['plaats'] . '"';?> />
              <?php if(!empty($errors['plaats'])) echo '<span class="error">' . $errors['plaats'] . '</span>';?>
            </label>
          </div>

          <div class="input-container text">
            <label>
              <span class="form-label">Land:</span>
              <select name="land" class="form-input">
                <?php $filename = './countries.txt';
                  $file = fopen($filename, "r");
                  while (!feof($file)) {
                   $line = fgets($file);
                   if (isset($_POST['land'])) {
                    if ($line == $_POST['land']) {
                     echo '<option selected="selected" value="' . $line . '">' . $line . '</option>';
                    } else {
                     echo '<option value="' . $line . '">' . $line . '</option>';
                    }
                   } else {
                    if (substr($line,0,4) == 'Belg') {
                     echo '<option selected="selected" value="' . $line . '">' . $line . '</option>';
                    } else {
                     echo '<option value="' . $line . '">' . $line . '</option>';
                    }
                   }
                  }
                  fclose($file);
                ?>
              </select>
            </label>
          </div>

          <div class="input-container text">
            <label>
              <span class="form-label">Nationaliteit:</span>
              <select name="nationaliteit" class="form-input">
                <?php $filename = './countries.txt';
                  $file = fopen($filename, "r");
                  while (!feof($file)) {
                   $line = fgets($file);
                   if (isset($_POST['land'])) {
                    if ($line == $_POST['land']) {
                     echo '<option selected="selected" value="' . $line . '">' . $line . '</option>';
                    } else {
                     echo '<option value="' . $line . '">' . $line . '</option>';
                    }
                   } else {
                    if (substr($line,0,4) == 'Belg') {
                     echo '<option selected="selected" value="' . $line . '">' . $line . '</option>';
                    } else {
                     echo '<option value="' . $line . '">' . $line . '</option>';
                    }
                   }
                  }
                  fclose($file);
                ?>
              </select>
            </label>
          </div>

          <div class="input-container text">
            <label>
              <span class="form-label">Telefoon:</span>
              <input type="text" name="telefoon" class="form-input"<?php if(!empty($_POST['telefoon'])) echo 'value="' . $_POST['telefoon'] . '"';?> />
              <?php if(!empty($errors['telefoon'])) echo '<span class="error">' . $errors['telefoon'] . '</span>';?>
            </label>
          </div>

          <div class="input-container text">
            <label>
              <span class="form-label">GSM:</span>
              <input type="text" name="gsm" class="form-input"<?php if(!empty($_POST['gsm'])) echo 'value="' . $_POST['gsm'] . '"';?> />
              <?php if(!empty($errors['gsm'])) echo '<span class="error">' . $errors['gsm'] . '</span>';?>
            </label>
          </div>

          <div class="input-container text">
            <label>
              <span class="form-label">Geboortedatum:</span>
              <input type="date" name="geboortedatum" class="form-input"<?php if(!empty($_POST['geboortedatum'])) echo 'value="' . $_POST['geboortedatum'] . '"';?> />
              <?php if(!empty($errors['geboortedatum'])) echo '<span class="error">' . $errors['geboortedatum'] . '</span>';?>
            </label>
          </div>

          <div class="input-container text">
            <label>
              <span class="form-label">Extra info:</span>
              <input type="text" name="extra_info" class="form-input"<?php if(!empty($_POST['extra_info'])) echo 'value="' . $_POST['extra_info'] . '"';?> />
              <?php if(!empty($errors['extra_info'])) echo '<span class="error">' . $errors['extra_info'] . '</span>';?>
            </label>
          </div>
          <div>
            <input type="submit" name="action" value="Bestel" class="form-submit" />
          </div>
        </form>
      </div>
    </main>

    <footer>
      <a href="#">Algemene voorwaarden</a>
      <a href="index.php">Cruise Sea Str-All</a>
      <div class="socialmedia">
        <img src="" alt="twitter">
        <img src="" alt="facebook">
        <img src="" alt="instagram">
        <img src="" alt="pinterest">
      </div>
    </footer>
  </form>
</section>
