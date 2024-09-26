<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Font Awesome for icons (optional) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Job 02</title>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="index.php">Connexion</a></li>
                    <li><a href="index.php">Inscription</a></li>
                    <li><a href="index.php">Recherche</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <div>
                <h5>Création de Compte</h5>

                <form action="#">
                    <!-- Inputs radios pour la civilité -->
                    <h6>Civilité :</h6>
                        <p>
                            <label>
                            <input name="civilite" type="radio" value="monsieur" checked />
                            <span>Monsieur</span>
                            </label>
                        </p>
                        <p>
                            <label>
                            <input name="civilite" type="radio" value="madame" />
                            <span>Madame</span>
                            </label>
                        </p>
                        <p>
                            <label>
                            <input name="civilite" type="radio" value="autre" />
                            <span>Autre</span>
                            </label>
                        </p>

                    <!-- Inputs de type text pour prénom, nom et adresse -->
                    <div>
                        <input type="text" id="prenom" required>
                        <label for="prenom">Prénom</label>
                    </div>
    
                    <div>
                        <input type="text" id="nom" required>
                        <label for="nom">Nom</label>
                    </div>
    
                    <div>
                        <input type="text" id="adresse" required>
                        <label for="adresse">Adresse</label>
                    </div>

                    <!-- Input de type email -->
                    <div>
                        <input type="email" id="email" required>
                        <label for="email">Adresse Email</label>
                    </div>

                    <!-- Inputs de type password -->
                    <div>
                        <input type="password" id="motdepasse" required>
                        <label for="motdepasse">Mot de passe</label>
                    </div>
    
                    <div>
                        <input type="password" id="validationMotdepasse" required>
                        <label for="validationMotdepasse">Validation du mot de passe</label>
                    </div>

                    <!-- Checkboxes pour choisir ses passions -->
                    <h6>Passions</h6>
                        <p>
                            <label>
                            <input type="checkbox" value="informatique" />
                            <span>Informatique</span>
                            </label>
                        </p>
                        <p>
                            <label>
                            <input type="checkbox" value="voyages" />
                            <span>Voyages</span>
                            </label>
                        </p>
                        <p>
                            <label>
                            <input type="checkbox" value="sport" />
                            <span>Sport</span>
                            </label>
                        </p>
                        <p>
                            <label>
                            <input type="checkbox" value="lecture" />
                            <span>Lecture</span>
                            </label>
                        </p>

                    <!-- Bouton pour valider le formulaire -->
                    <button type="submit" name="action">Valider</button>
                </form>
            </div><br>
        </section>
    </main>
    
    <footer>
        <div>
            <div>
              <div>
                <h5>Footer Content</h5>
                <p>You can use rows and columns here to organize your footer content.</p>
              </div>
              <div>
                <h5>Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.php">Accueil</a></li>
                  <li><a class="grey-text text-lighten-3" href="index.php">Connexion</a></li>
                  <li><a class="grey-text text-lighten-3" href="index.php">Inscription</a></li>
                  <li><a class="grey-text text-lighten-3" href="index.php">Recherche</a></li>
                </ul>
              </div>
            </div>
        </div>
        <div>
            <div>
            © 2014 Copyright Text
            <a href="index.php">More Links</a>
            </div>
        </div>
    </footer>
            


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>