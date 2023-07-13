<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>app_gestions_contacts</title>
    <link rel="stylesheet" href="contacts.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!--Logo & Navbar-->
    <header>
        <!-- <nav class="bg-primary" data-bs-theme="dark">
            <div class="navbar container-fluid"> -->
                <!--Logo-->
                <!-- <img src="logo nomade_gestions.png" alt=""> -->
                <!--Navbar-->
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="menu">
                            <a class="nav-link active" aria-current="page"
                                href="http://localhost/app_gestions_contacts/contacts.html#">Accueil</a>
                        </li>
                        <li class="menu">
                            <a class="nav-link" aria-cuurent="page" href="#">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
                        <button class="buttonnav" type="submit">Recherche</button>
                    </form>
                </div>
            </div>
        </nav> -->
    </header>



    <main>
        <!-- <h3>Logiciel de gestion</h3> -->
        <!-- <p> -->
            <!-- Le logiciel de gestion des contacts est un outil qui vous aide à stocker les informations de contact de vos
            clients, prospects et fournisseurs et à suivre la communication entre votre entreprise et eux. Les
            informations peuvent inclure des adresses, des numéros de téléphone, des e-mails, des identifiants de
            réseaux sociaux, des commandes, des devis ouverts, l'historique des ventes, des sociétés associées, etc.<br>
            
            Le logiciel vous permet également d'organiser et de filtrer facilement les contacts pour vous aider à
            trouver des sous-ensembles de clients spécifiques. Vous pouvez également filtrer la liste de contacts par
            secteur d'activité, titre, relations avec votre entreprise, etc.<br>
            
            En outre, vous pouvez gérer les communications à l'aide du logiciel de gestion des contacts et l'intégrer à
            d'autres outils tels que les calendriers pour planifier des réunions et être informé des participants et du
            calendrier.<br> -->
        <!-- </p> -->
        <!-- FORMULAIRE-->
        <div class="container">
            <form action="MiseAJour_gestions_contacts.php" method="POST">
                <p>Connexion</p>
                <input name="Nom" type="nom" placeholder="Nom"><br>
                <input name="Utilisateur" type="utilisateur" placeholder="Utilisateur"><br>
                <input type="mot_de_passe" placeholder="Mot de passe"><br>
                <input type="numero_telephone" placeholder="Numéro_téléphone"><br>
                <input type="email" placeholder="Email"><br>
                <input type="nom_d'entreprise" placeholder="Nom_d'entreprise"><br>
                <input type="button" value="Connexion"><br>
                <a href="#">Mot de passe oublié</a>
            </form>
            
            <!-- OMBRES-->
            <div class="drop drop-1"></div>
            <div class="drop drop-2"></div>
            <div class="drop drop-3"></div>
            <div class="drop drop-4"></div>
            <div class="drop drop-5"></div>
        </div>
    </main>
    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>