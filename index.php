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
    <div id="fullpage">
        <div class="section">
            <div id="present">
                <h2>Arnaud-Bourique Sylvain</h2>
                <p>La petite description des familles, hayayaya !! c'est classe me manque juste la photo de fond.</p>
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
            <div id="more">
                <section id="cv">
                    <h3>Un peut plus</h3>
                    <h4>Nom : </h4><h5>Arnaud-Bourique</h5>
                    <h4>Prenom : </h4><h5>Sylvain</h5>
                    <h4>Naissance : </h4><h5>01/02/1993</h5>
                    <h4>Email : </h4><h5>arnaudbouriquesylvain@gmail.com</h5>
                    <h4>GitHub : </h4><h5><a href="https://github.com/ABSylvain">Mon GitHub</a></h5>
                </section>
                <section id="form">
                    <h3>Un verre ?</h3>
                    <form>
                    <input type="text" placeholder=""/>

                </section>
            </div>
        </div>
    </div>
</body>

</html>