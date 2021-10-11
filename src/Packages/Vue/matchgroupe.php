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
                        <i class="fa fa-info-circle" aria-idden="true"></i>
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
                    <a href="../Vue/about.php">
                        <i class="fa fa-power-off" aria-idden="true"></i>
                        <span>LogOut</span></a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-about" aria-idden="true"></i>
                        <span>About</span></a>
                </li>
            </ul>
        </nav>
        <div class="back">
            <!-- La vue contient l'interface graphique -->

            <section class="section_1">
                <div class="sect1">

                    <!------------------------------------------- Match Groupe A -------------------------------------------->

                    <table>
                        <p>Affiche 1<sup>e</sup> tour</p>
                        <tr>
                            <th>Groupe A</th>
                            <th>Affiche</th>
                            <th>Score</th>
                            <th></th>
                        </tr>

                        <tr>
                            <td>Match 1</td>
                            <td><?= $myResult1->teteDeSerieA1.''.$drapeauteteDeSerieA1 . ' VS ' . $myResult1->teteDeSerieA2 .''.$drapeauteteDeSerieA2 ?></td>
                            <form action="../Controleur/traitementMatch.php" method="post">
                                <td>
                                    <input type="number" require=true name="score1" min=0 max=5 class="score" <?php if (isset($_SESSION['match1']) && $_SESSION['match1']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score1'])) echo $_SESSION['score1']; ?>">
                                    vs
                                    <input type="number" require=true name="score2" min=0 max=5 class="score" <?php if (isset($_SESSION['match1']) && $_SESSION['match1']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score2'])) echo $_SESSION['score2']; ?>">
                                </td>
                                <td><button type="submit" name="match" value="match1" <?php if (isset($_SESSION['match1']) && $_SESSION['match1']) echo 'disabled'; ?>>Jouer</button></td>
                            </form>
                        </tr>

                        <tr>
                            <td>Match 2</td>
                            <td><?= $myResult1->teteDeSerieA3.''.$drapeauteteDeSerieA3 . ' VS ' . $myResult1->teteDeSerieA4 .''.$drapeauteteDeSerieA4 ?></td>
                            <form action="../Controleur/traitementMatch.php" method="post">
                                <td>
                                    <input type="number" name="score3" min=0 max=5 class="score" <?php if (isset($_SESSION['match2']) && $_SESSION['match2']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score3'])) echo $_SESSION['score3']; ?>">
                                    vs
                                    <input type="number" name="score4" min=0 max=5 class="score" <?php if (isset($_SESSION['match2']) && $_SESSION['match2']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score4'])) echo $_SESSION['score4']; ?>">
                                </td>
                                <td><button type="submit" name="match" value="match2" <?php if (isset($_SESSION['match2']) && $_SESSION['match2']) echo 'disabled'; ?>>Jouer</button></td>
                            </form>
                        </tr>

                        <tr>
                            <td>Match 3</td>
                            <td><?= $myResult1->teteDeSerieA1.''.$drapeauteteDeSerieA1 . ' VS ' . $myResult1->teteDeSerieA3.''.$drapeauteteDeSerieA3 ?></td>
                            <form action="../Controleur/traitementMatch.php" method="post">
                                <td>
                                    <input type="number" name="score5" min=0 max=5 class="score" <?php if (isset($_SESSION['match3']) && $_SESSION['match3']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score5'])) echo $_SESSION['score5']; ?>">
                                    vs
                                    <input type="number" name="score6" min=0 max=5 class="score" <?php if (isset($_SESSION['match3']) && $_SESSION['match3']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score6'])) echo $_SESSION['score6']; ?>">
                                </td>
                                <td><button type="submit" name="match" value="match3" <?php if (isset($_SESSION['match3']) && $_SESSION['match3']) echo 'disabled'; ?>>Jouer</button></td>
                            </form>
                        </tr>

                        <tr>
                            <td>Match 4</td>
                            <td><?= $myResult1->teteDeSerieA2.''.$drapeauteteDeSerieA2 . ' VS ' . $myResult1->teteDeSerieA4.''.$drapeauteteDeSerieA4 ?></td>
                            <form action="../Controleur/traitementMatch.php" method="post">
                                <td><input type="number" name="score7" min=0 max=5 class="score" <?php if (isset($_SESSION['match4']) && $_SESSION['match4']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score7'])) echo $_SESSION['score7']; ?>">
                                    vs
                                    <input type="number" name="score8" min=0 max=5 class="score" <?php if (isset($_SESSION['match4']) && $_SESSION['match4']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score8'])) echo $_SESSION['score8']; ?>">
                                </td>
                                <td><button type="submit" name="match" value="match4" <?php if (isset($_SESSION['match4']) && $_SESSION['match4']) echo 'disabled'; ?>>Jouer</button></td>
                            </form>
                        </tr>

                        <tr>
                            <td>Match 5</td>
                            <td><?= $myResult1->teteDeSerieA1.''.$drapeauteteDeSerieA1 . ' VS ' . $myResult1->teteDeSerieA4.''.$drapeauteteDeSerieA4 ?></td>
                            <form action="../Controleur/traitementMatch.php" method="post">
                                <td>
                                    <input type="number" name="score9" min=0 max=5 class="score" <?php if (isset($_SESSION['match5']) && $_SESSION['match5']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score9'])) echo $_SESSION['score9']; ?>">
                                    vs
                                    <input type="number" name="score10" min=0 max=5 class="score" <?php if (isset($_SESSION['match5']) && $_SESSION['match5']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score10'])) echo $_SESSION['score10']; ?>">
                                </td>
                                <td><button type="submit" name="match" value="match5" <?php if (isset($_SESSION['match5']) && $_SESSION['match5']) echo 'disabled'; ?>>Jouer</button></td>
                            </form>
                        </tr>

                        <tr>
                            <td>Match 6</td>
                            <td><?= $myResult1->teteDeSerieA2.''.$drapeauteteDeSerieA2 . ' VS ' . $myResult1->teteDeSerieA3.''.$drapeauteteDeSerieA3 ?></td>
                            <form action="../Controleur/traitementMatch.php" method="post">
                                <td>
                                    <input type="number" name="score11" min=0 max=5 class="score" <?php if (isset($_SESSION['match6']) && $_SESSION['match6']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score11'])) echo $_SESSION['score11']; ?>">
                                    vs
                                    <input type="number" name="score12" min=0 max=5 class="score" <?php if (isset($_SESSION['match6']) && $_SESSION['match6']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score12'])) echo $_SESSION['score12']; ?>">
                                </td>
                                <td><button type="submit" name="match" value="match6" <?php if (isset($_SESSION['match6']) && $_SESSION['match6']) echo 'disabled'; ?>>Jouer</button></td>
                            </form>
                        </tr>

                    </table><br>

                    <!-- Match Groupe B -->

                    <table>
                        <tr>
                            <th>Groupe B</th>
                            <th>Affiche</th>
                            <th>Score</th>
                            <th></th>
                        </tr>

                        <tr>
                            <td>Match 7</td>
                            <td><?= $myResult2->teteDeSerieB1.''.$drapeauteteDeSerieB1 . ' VS ' . $myResult2->teteDeSerieB2.''.$drapeauteteDeSerieB2 ?></td>
                            <form action="../Controleur/traitementMatch.php" method="post">
                                <td>
                                    <input type="number" name="score13" min=0 max=5 class="score" <?php if (isset($_SESSION['match7']) && $_SESSION['match7']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score13'])) echo $_SESSION['score13']; ?>">
                                    vs
                                    <input type="number" name="score14" min=0 max=5 class="score" <?php if (isset($_SESSION['match7']) && $_SESSION['match7']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score14'])) echo $_SESSION['score14']; ?>">
                                </td>
                                <td><button type="submit" name="match" value="match7" <?php if (isset($_SESSION['match7']) && $_SESSION['match7']) echo 'disabled'; ?>>Jouer</button></td>
                            </form>
                        </tr>

                        <tr>
                            <td>Match 8</td>
                            <td><?= $myResult2->teteDeSerieB3.''.$drapeauteteDeSerieB3 . ' VS ' . $myResult2->teteDeSerieB4.''.$drapeauteteDeSerieB4 ?></td>
                            <form action="../Controleur/traitementMatch.php" method="post">
                                <td>
                                    <input type="number" name="score15" min=0 max=5 class="score" <?php if (isset($_SESSION['match8']) && $_SESSION['match8']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score15'])) echo $_SESSION['score15']; ?>">
                                    vs
                                    <input type="number" name="score16" min=0 max=5 class="score" <?php if (isset($_SESSION['match8']) && $_SESSION['match8']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score16'])) echo $_SESSION['score16']; ?>">
                                </td>
                                <td><button type="submit" name="match" value="match8" <?php if (isset($_SESSION['match8']) && $_SESSION['match8']) echo 'disabled'; ?>>Jouer</button></td>
                            </form>
                        </tr>

                        <tr>
                            <td>Match 9</td>
                            <td><?= $myResult2->teteDeSerieB1.''.$drapeauteteDeSerieB1 . ' VS ' . $myResult2->teteDeSerieB3.''.$drapeauteteDeSerieB3 ?></td>
                            <form action="../Controleur/traitementMatch.php" method="post">
                                <td>
                                    <input type="number" name="score17" min=0 max=5 class="score" <?php if (isset($_SESSION['match9']) && $_SESSION['match9']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score17'])) echo $_SESSION['score17']; ?>">
                                    vs
                                    <input type="number" name="score18" min=0 max=5 class="score" <?php if (isset($_SESSION['match9']) && $_SESSION['match9']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score18'])) echo $_SESSION['score18']; ?>">
                                </td>
                                <td><button type="submit" name="match" value="match9" <?php if (isset($_SESSION['match9']) && $_SESSION['match9']) echo 'disabled'; ?>>Jouer</button></td>
                            </form>
                        </tr>

                        <tr>
                            <td>Match 10</td>
                            <td><?= $myResult2->teteDeSerieB2.''.$drapeauteteDeSerieB2 . ' VS ' . $myResult2->teteDeSerieB4.''.$drapeauteteDeSerieB4 ?></td>
                            <form action="../Controleur/traitementMatch.php" method="post">
                                <td>
                                    <input type="number" name="score19" min=0 max=5 class="score" <?php if (isset($_SESSION['match10']) && $_SESSION['match10']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score19'])) echo $_SESSION['score19']; ?>">
                                    vs
                                    <input type="number" name="score20" min=0 max=5 class="score" <?php if (isset($_SESSION['match10']) && $_SESSION['match10']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score20'])) echo $_SESSION['score20']; ?>">
                                </td>
                                <td><button type="submit" name="match" value="match10" <?php if (isset($_SESSION['match10']) && $_SESSION['match10']) echo 'disabled'; ?>>Jouer</button></td>
                            </form>
                        </tr>

                        <tr>
                            <td>Match 11</td>
                            <td><?= $myResult2->teteDeSerieB1.''.$drapeauteteDeSerieB1 . ' VS ' . $myResult2->teteDeSerieB4.''.$drapeauteteDeSerieB4 ?></td>
                            <form action="../Controleur/traitementMatch.php" method="post">
                                <td>
                                    <input type="number" name="score21" min=0 max=5 class="score" <?php if (isset($_SESSION['match11']) && $_SESSION['match11']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score21'])) echo $_SESSION['score21']; ?>">
                                    vs
                                    <input type="number" name="score22" min=0 max=5 class="score" <?php if (isset($_SESSION['match11']) && $_SESSION['match11']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score22'])) echo $_SESSION['score22']; ?>">
                                </td>
                                <td><button type="submit" name="match" value="match11" <?php if (isset($_SESSION['match11']) && $_SESSION['match11']) echo 'disabled'; ?>>Jouer</button></td>
                            </form>
                        </tr>

                        <tr>
                            <td>Match 12</td>
                            <td><?= $myResult2->teteDeSerieB2.''.$drapeauteteDeSerieB2 . ' VS ' . $myResult2->teteDeSerieB3.''.$drapeauteteDeSerieB3 ?></td>
                            <form action="../Controleur/traitementMatch.php" method="post">
                                <td>
                                    <input type="number" name="score23" min=0 max=5 class="score" <?php if (isset($_SESSION['match12']) && $_SESSION['match12']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score23'])) echo $_SESSION['score23']; ?>">
                                    vs <input type="number" name="score24" min=0 max=5 class="score" <?php if (isset($_SESSION['match12']) && $_SESSION['match12']) echo 'disabled'; ?> value="<?php if (isset($_SESSION['score24'])) echo $_SESSION['score24']; ?>">
                                </td>
                                <td><button type="submit" name="match" value="match12" <?php if (isset($_SESSION['match12']) && $_SESSION['match12']) echo 'disabled'; ?>>Jouer</button></td>
                            </form>
                        </tr>
                    </table>
                </div>
            </section>
        </div>
    </div>