<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "header.php"; ?>
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Calcule ton IMC!👇</h1> <br>


        <section class="container">

            <form method="post" action="">
                <div class=" mb-3">
                    <label for="taille" class="form-label"> </label>
                    <input id="taille" class="form-input" type="number" name="taille" placeholder="Taille">
                </div>
                <div class=" mb-3">
                    <label for="poids" class="form-label"></label>
                    <input id="poids" class="form-input" type="number" name="poids" placeholder="Poids">
                </div>
                <button type="submit" class="btn btn-primary">Calculer</button>
        </section>
    </main>
    <section class="paragraphe">
        <?php
        if (isset($_POST["taille"]) && isset($_POST["poids"])) {
            $taille = $_POST["taille"];
            $poids = $_POST["poids"];

            if ($taille === "") {
                echo "Saisissez des valeurs!!😡";

            } else {

                $taille = $taille / 100;

                $imc = $poids / ($taille * $taille);

                $phrase = "";

                if ($imc <= 16) {
                    echo "<p>" . "Votre imc est de " . "<span class='maigreurExtreme'>" . round($imc, 2) . "</span>" . "⚖️" . "<br>" . "</p>";
                    $phrase = "<p>" . "Vous êtes d'une maigreur extrème!😧" . "</p>";
                } else if ($imc <= 18.5) {
                    echo "<p>" . "Votre imc est de " . "<span class='insuffisance'>" . round($imc, 2) . "</span>" . "⚖️" . "<br>" . "</p>";
                    $phrase = "<p>" . "Vous êtes en insuffisance pondérale🫠" . "</p>";
                } else if ($imc > 18.5 && $imc < 24.9) {
                    echo "<p>" . "Votre imc est de " . "<span class='normale'>" . round($imc, 2) . "</span>" . "⚖️" . "<br>" . "</p>";
                    $phrase = "<p>" . "Vous avez une corpulence normale😏" . "</p>";
                } else if ($imc > 25 && $imc < 29.9) {
                    echo "<p>" . "Votre imc est de " . "<span class='surpoids'>" . round($imc, 2) . "</span>" . "⚖️" . "<br>" . "</p>";
                    $phrase = "Vous êtes en surpoids🤔" . "</p>";
                } else if ($imc > 30 && $imc < 34.9) {
                    echo "<p>" . "Votre imc est de " . "<span class='obèse'>" . round($imc, 2) . "</span>" . "⚖️" . "<br>" . "</p>";
                    $phrase = "Vous êtes obèse🫢" . "</p>";
                } else if ($imc > 35 && $imc < 40) {
                    echo "<p>" . "Votre imc est de " . "<span class='obèsitéSévére'>" . round($imc, 2) . "</span>" . "⚖️" . "<br>" . "</p>";
                    $phrase = "Vous êtes en obésité sévére😬" . "</p>";
                } else {
                    echo "<p>" . "Votre imc est de " . "<span class='morbide'>" . round($imc, 2) . "</span>" . "⚖️" . "<br>" . "</p>";
                    $phrase = "Vous êtes en obésité morbide🥴" . "</p>";
                }

                echo $phrase;

            }
        }
        ?>

    </section>

    <?php include_once "footer.php"; ?>
</body>

</html>