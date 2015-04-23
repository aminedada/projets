<!--header-->
<?php
session_start();
if ($_SESSION['login'] == null)
  header('Location: ../sessions.php');
?>
   <div class="placement">
      <section class="header">
        <h1>
          <a href= "../pageac.php"><h1>Your<span class="next">next</span>Dream </h1></a>
          <FORM METHOD=POST ACTION="../moncompte.php">
            <button class="compte" onclick="ClicBouton();">Mon Compte</button>
          </form>
          <FORM METHOD=POST ACTION="../monpanier.php">
            <button class="compte" onclick="ClicBouton();">Mon Panier</button>
          </form>
          <FORM METHOD=POST ACTION="../sessions.php">
            <button class="compte" onclick="ClicBouton();">Deconnexion</button>
          </form>
          <br />
        </h1>
        <p>
          <FORM METHOD=POST ACTION="../pagerech.php">
            <div class="msgr"> Nous ne vendons pas des voyages
              <input class="recherche" type="text" name="search" size="75" placeholder="Your next dream ?" />
              mais du reve... </div>
          </form>
        </p>
        <ul>
          <li><a class="menuac" href="../pageac.php">Home</a></li>
          <li><a href="../continent/continent.php?continent=europe">Europe</a></li>
          <li><a href="../continent/continent.php?continent=asie">Asie</a></li>
          <li><a href="../continent/continent.php?continent=amerique">Amerique</a></li>
          <li><a href="../continent/continent.php?continent=afrique">Afrique</a></li>
          <li><a href="../continent/espace.php?continent=espace">Espace</a></li>

        </ul>
        <br />
      </section>