<?php
require '../Controleur/main.php';

$nom = null;

if (!empty($_COOKIE['utilisateur'])) {
    $nom = $_COOKIE['utilisateur'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    <title>| Dashboard</title>
</head>

<body>
    <input type="checkbox" id="checkbox">
    <header class="header">
        <div class="u_name">
            <img src="images/Logopitfoot.png" alt="">
            <label for="checkbox">
                <i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
            </label>

        </div>
        <div class="search">
            <input type="search" placeholder="Search ...">
            <i class="fa fa-search" aria-idden="true"></i>
        </div>
        <a href="login.html"><i class="fa fa-user" aria-hidden="true"></i></a>
        <?php if ($nom) : ?>
            <p><?= htmlentities($nom) ?></p>
        <?php endif ?>
    </header>
    <div class="body">
        <nav class="side_bar">
            <div class="user_p">
                <img src="images/pngworld-cup.png" alt="">
            </div>
            <ul>
                <li>
                    <a href="../Vue/tirage.php">
                        <i class="fa fa-play-circle" aria-idden="true"></i>
                        <span>Tirage</span></a>
                </li>
                <li>
                    <a href="../Vue/matchgroupe.php">
                        <i class="fa fa-futbol-o" aria-idden="true"></i>
                        <span>Match / Groupe</span></a>
                </li>
                <li>
                    <a href="../Vue/classementmatch.php">
                        <i class="fa fa-futbol-o" aria-hidden="true"></i>
                        <span>Classement</span></a>
                </li>
                <li>
                    <a href="../Vue/demifinal.php">
                        <i class="fa fa-cog" aria-idden="true"></i>
                        <span>Demi-Final</span></a>
                </li>
                <li>
                    <a href="../Vue/petitefinale.php">
                        <i class="fa fa-cog" aria-idden="true"></i>
                        <span>Troisieme Place</span></a>
                </li>
                <li>
                    <a href="../Vue/finale.php">
                        <i class="fa fa-cog" aria-idden="true"></i>
                        <span>Grande Finale</span></a>
                </li>
                <li>
                    <a href="../Vue/logout.php">
                        <i class="fa fa-power-off" aria-idden="true"></i>
                        <span>LogOut</span></a>
                </li>
                <li>
                    <a href="../Vue/about.php">
                        <i class="fa fa-futbol-o" aria-hidden="true"></i>
                        <span>About</span></a>
                </li>
            </ul>
        </nav>
        <div class="back">
            <!-- La vue contient l'interface graphique -->

            <section class="section_1">
                <div class="sect1">
                    <!---------------------------------------- Classement Groupe A ---------------------------------------->
                    <hr>
                    <p>Classement Groupe A</p>
                    <table>
                        <tr>
                            <th colspan="9">Groupe A</th>
                        </tr>

                        <tr>
                            <td></td>
                            <td>MJ</td>
                            <td>MG</td>
                            <td>MN</td>
                            <td>MP</td>
                            <td>BP</td>
                            <td>BC</td>
                            <td>Dif</td>
                            <td>Point</td>
                        </tr>

                        <?php for ($i = 0; $i < 2; $i++) : ?>
                            <tr>
                                <td><?= $resultCA1[$i]['nomEquipe'] ?>
                                <td><?= $resultCA1[$i]['matchJouer'] ?>
                                <td><?= $resultCA1[$i]['matchGagner'] ?>
                                <td><?= $resultCA1[$i]['matchNull'] ?>
                                <td><?= $resultCA1[$i]['matchPerdu'] ?>
                                <td><?= $resultCA1[$i]['butPour'] ?>
                                <td><?= $resultCA1[$i]['butContre'] ?>
                                <td><?= $resultCA1[$i]['difference'] ?>
                                <td><?= $resultCA1[$i]['point'] ?>
                                <td>
                            </tr>

                        <?php endfor; ?>



                        <?php for ($i = 0; $i < 2; $i++) : ?>
                            <tr>
                                <td><?= $resultCA2[$i]['nomEquipe'] ?>
                                <td><?= $resultCA2[$i]['matchJouer'] ?>
                                <td><?= $resultCA2[$i]['matchGagner'] ?>
                                <td><?= $resultCA2[$i]['matchNull'] ?>
                                <td><?= $resultCA2[$i]['matchPerdu'] ?>
                                <td><?= $resultCA2[$i]['butPour'] ?>
                                <td><?= $resultCA2[$i]['butContre'] ?>
                                <td><?= $resultCA2[$i]['difference'] ?>
                                <td><?= $resultCA2[$i]['point'] ?>
                                <td>
                            </tr>
                        <?php endfor; ?>
                    </table>

                    <!----------------------------------- Classement Groupe B ----------------------------------------->

                    <table>

                        <p>Classement Groupe B</p>
                        <table>
                            <tr>
                                <th colspan="9">Groupe B</th>
                            </tr>

                            <tr>
                                <td></td>
                                <td>MJ</td>
                                <td>MG</td>
                                <td>MN</td>
                                <td>MP</td>
                                <td>BP</td>
                                <td>BC</td>
                                <td>Dif</td>
                                <td>Point</td>
                            </tr>

                            <?php for ($i = 0; $i < 2; $i++) : ?>
                                <tr>
                                    <td><?= $resultCB1[$i]['nomEquipe'] ?>
                                    <td><?= $resultCB1[$i]['matchJouer'] ?>
                                    <td><?= $resultCB1[$i]['matchGagner'] ?>
                                    <td><?= $resultCB1[$i]['matchNull'] ?>
                                    <td><?= $resultCB1[$i]['matchPerdu'] ?>
                                    <td><?= $resultCB1[$i]['butPour'] ?>
                                    <td><?= $resultCB1[$i]['butContre'] ?>
                                    <td><?= $resultCB1[$i]['difference'] ?>
                                    <td><?= $resultCB1[$i]['point'] ?>
                                    <td>
                                </tr>

                            <?php endfor; ?>

                            <?php for ($i = 0; $i < 2; $i++) : ?>
                                <tr>
                                    <td><?= $resultCB2[$i]['nomEquipe'] ?>
                                    <td><?= $resultCB2[$i]['matchJouer'] ?>
                                    <td><?= $resultCB2[$i]['matchGagner'] ?>
                                    <td><?= $resultCB2[$i]['matchNull'] ?>
                                    <td><?= $resultCB2[$i]['matchPerdu'] ?>
                                    <td><?= $resultCB2[$i]['butPour'] ?>
                                    <td><?= $resultCB2[$i]['butContre'] ?>
                                    <td><?= $resultCB2[$i]['difference'] ?>
                                    <td><?= $resultCB2[$i]['point'] ?>
                                    <td>
                                </tr>
                            <?php endfor; ?>

                        </table>
                </div>
            </section>
        </div>
    </div>
