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
                <img id="arrow" src="img/arrow.svg"/>
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
            </div>
        </div>
        <div class="section">
            <div id="more">

            </div>
        </div>
    </div>
</body>

</html>