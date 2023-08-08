<div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-12">

        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title">Qui sommes nous ?</h2>
            <p class="card-text">

              <h3>Une équipe mi-fruit mi-brique</h3>

              <p>
                <strong>O’clock, c’est une école composée de quatre briques</strong><br>

                Quatre briques fondatrices : Dario, Lucie, Maxime et Anthony.<br>

                Enfin, pas vraiment des briques puisque O’clock est une école sans murs. Donc ici, on parle de briques
                virtuelles. Des briques symboliques, vous voyez ?<br>

                Bon, on va prendre une autre phrase. D’autant plus que c’est pas top de se comparer à des briques.
                C’est solide, c’est sûr, mais question finesse d’esprit, on repassera.
              </p>

              <p>
                <strong>Non, O’clock, c’est le fruit de quatre personnes !</strong><br>

                Et ça, ça parle à tout le monde car tout le monde aime les fruits. Sauf que les plus pointilleux auront noté que quatre personnes ne peuvent pas faire un fruit. D’ailleurs, ni quatre, ni une. C’est biologique : aucun être humain ne peut faire un fruit. Ce serait plutôt des arbres ou des buissons fruitiers qui font des fruits.<br>
                  
                Mais si on dit que O’clock est le fruit de quatre buissons fruitiers, vous n’allez absolument rien comprendre. Donc, on va laisser tomber l’idée du fruit. Ça partait bien, mais c’est trop compliqué.
              </p>

              <h3>Des étudiants mi-heureux mi-extrement fatigués</h3>

              <p>
                Et oui, que ce soit en 3 ou 5 mois, la formation O'clock est hyper intense.<br>

                Résultat, la fatigue se fait rapidement sentir mais elle est contrebalancée par la joie d'avancer, d'apprendre et de concrétiser le tout dans des projets complexes.<br>

                Pour partager leurs émotions, il y a bien sûr le channel #kiemtao, mais il y a aussi ce blog "A la dérive".
              </p>

              </div>

            </p>
          </div>
        </article>

      </main>
    </div><!-- /.row -->


    <footer>

      <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/
                Je déclare également que ces elements doivent être centré (flex): https://getbootstrap.com/docs/4.1/utilities/flex/#justify-content
                ainsi que leur textes: https://getbootstrap.com/docs/4.1/utilities/text/#text-alignment -->
      <div class="row justify-content-center text-center">
        <div class="col-6 social-networks">
          <!-- Je créé une liste: https://getbootstrap.com/docs/4.1/components/list-group/ -->
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-github-square"></i></a></li>
          </ul>
        </div>
      </div>

      <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/
                Je déclare également que ces elements doivent être centré (flex): https://getbootstrap.com/docs/4.1/utilities/flex/#justify-content
                ainsi que leur textes: https://getbootstrap.com/docs/4.1/utilities/text/#text-alignment -->
      <div class="row justify-content-center text-center">
        <div class="col-9 links">
          <!-- Je créé une liste: https://getbootstrap.com/docs/4.1/components/list-group/ -->
          <ul class="list-inline">
            <li class="list-inline-item"><a href="contact.html">Nous contacter</a></li>
            <li class="list-inline-item"><a href="qui-sommes-nous.html">Qui sommes nous ?</a></li>
            <li class="list-inline-item"><a href="mentions-legales.html">Mentions légales</a></li>
          </ul>
        </div>
      </div>