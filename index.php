<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.2.1.min.js"></script>
    <script src="jquery.fullPage.min.js"></script>
    <link rel="stylesheet" href="jquery.fullPage.css" />
    <link rel="stylesheet" href="style.css" />
    <title>PortFolio</title>

    <script>
        $(document).ready(function() {
            $('#fullpage').fullpage();
        });
    </script>
</head>

<body>
    <?php
    if(!empty($_POST)){
        $expediteur = htmlspecialchars($_POST['expediteur']);
        $joindre = htmlspecialchars($_POST['joindre']);
        $message = htmlspecialchars($_POST['message']);
        $compte = new Contact($expediteur, $joindre, $message);
        $compte->save($compte);
    }

    ?>
    <div id="fullpage">
        <div class="section">
            <div id="present">
                <h2>Arnaud-Bourique Sylvain</h2>
                <p>Etant curieux de comprendre les choses, j'ai choisi le développement web comme reconversion professionnel.</p>
                <img id="Warrow" src="img/arrow.svg"/>
            </div>
        </div>
        <div class="section">
            <div id="projet">
            <?php 
                $i=1;
                if($dossier = opendir('projet/')) {
                    while($fichier = readdir($dossier)) {
                        if($fichier !='.' && $fichier != '..' && $fichier != '.DS_Store'){
                            if ($file = opendir('projet/'.$fichier)) {
                                while($files = readdir($file)){
                                    if($files == 'index.php'){
                                        echo '<section class="fenetre1">';
                                        echo '<a href="projet/'.$fichier.'/'.$files.'">'.$fichier.'</a>';
                                        echo '</section>';
                                        $i++;
                                    }
                                }
                            }
                        }
                    }
                }
            ?>
            <div id="Barrow"></div>
            </div>
        </div>
        <div class="section">
                <div id="contain">
                    <section id="cv">
                        <div class="info"><h5>Arnaud-Bourique</h5></div>
                        <div class="info"><h5>Sylvain</h5></div>
                        <div class="info"><h5>01/02/1993</h5></div>
                        <div class="info"><h5>arnaudbouriquesylvain@gmail.com</h5></div>
                        <div class="info"><a href="CVsylvain.pdf" id="lienDL">Télécharger C.V.</a></div>
                    </section>
                </div>
        </div>
    </div>
</body>

</html>