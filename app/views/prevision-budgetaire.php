<?php

use app\connection\UtilDb;
use app\models\Budget;
use app\models\Departement;
use app\models\Utilisateur;

$budget  = new Budget(3, 1, 1023, 29, 1, true);
// $budget->save();ubu
$mois = 12;
// $budget->save();




$utilisateur  =  new Utilisateur()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prevision-budgetaire</title>
</head>

<body>



    <div style="display: grid;justify-content: center;">
        <fieldset>
            <p>
            <h2>Utilisateur: Jean</h2>
            </p>

            <h2>Departement: Besarety</h2>
            <h2>Aannee:<?= $annee ?></h2>
        </fieldset>

        <hr />
        <?php
        for ($i = 1; $i <= $mois; $i++) {  ?>
        <h3><?= $i . "/" . $annee.": "  ?></h3>
        <form action="">
            <table border="1">
                <tr>
                    <th>Rubrique</th>
                    <th>Prevision</th>
                    <th>Realisation</th>
                    <th>Ecart</th>
                    <th>Validation</th>
                </tr>
                <tr>
                    <td>
                        <select name="" id="" style="width: 100%;" disabled>
                            <option value="" selected>Solde-initial</option>
                        </select>
                    </td>
                    <td>
                        <input type="number" value="20" readonly>

                    </td>
                    <td>
                        <input type="number" value="10" readonly>

                    </td>

                    <td>
                        <input type="number" value="10" readonly>
                    </td>
                    <td>
                        <input type="submit" value="validez" style="width: 100%;" disabled>

                    </td>

                </tr>
                <tr>
                    <td>
                        <select name="" id="" style="width: 100%;">
                            <option value="" selected>Recette-vent</option>
                            <option value="" selected>Recette-salaire</option>
                            <option value="" selected>Recette-enmprunt</option>
                            <option value="" selected>Depense-achat</option>

                        </select>
                    </td>
                    <td>

                        <input type="number" value="10">
                    </td>
                    <td>

                        <input type="number" value="10">
                    </td>
                    <td>

                        <input type="number" value="10" readonly>
                    </td>
                    <td>
                        <input type="submit" value="demander et modifier" style="width: 100%;">
                    </td>
                </tr>

                <tr>
                    <td>
                        <select name="" id="" style="width: 100%;">
                            <option value="" selected>Recette-vent</option>
                            <option value="" selected>Recette-salaire</option>
                            <option value="" selected>Recette-enmprunt</option>
                            <option value="" selected>Depense-achat</option>

                        </select>
                    </td>
                    <td>

                        <input type="number">
                    </td>
                    <td>

                        <input type="number">
                    </td>
                    <td>

                        <input type="number" readonly>
                    </td>
                    <td>
                        <input type="submit" value="demander et modifier" style="width: 100%;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="" id="" style="width: 100%;" disabled>
                            <option value="" selected>Solde-finale</option>
                        </select>
                    </td>

                    <td>

                        <input type="number" value="20" readonly>
                    </td>
                    <td>

                        <input type="number" value="10" readonly>
                    </td>
                    <td>

                        <input type="number" value="0" readonly>
                    </td>
                    <td>
                        <input type="submit" value="validez" style="width: 100%;" disabled>
                    </td>
                </tr>
                </tr>


            </table>
        </form>

        <?php }
        ?>
    </div>

</body>

</html>