<?php

    $db = new PDO('mysql:hote=localhost;dbname=pw;charset=utf8','root','');

    $pwStatement = $db ->prepare('SELECT * FROM etudiant');
    $pwStatement->execute();
    $pw = $pwStatement ->fetchAll();

    $listeNumStage = [];

    foreach($pw as $stage){

        $stageEtu = $stage['numStageA'];
        $existe = false;

        foreach($listeNumStage as $numstage){

            if($numstage == $stageEtu){

                $existe = true;

            }

        }

        if($existe==false){

            array_push($listeNumStage,$stageEtu);

            $sujetStatement = $db ->prepare("SELECT * FROM stagea WHERE numStageA='{$stageEtu}'");
            $sujetStatement->execute();
            $sujet = $sujetStatement ->fetchAll();

?>

<?php

            if(!is_null($stageEtu)){

?>

                <p>_______________________________________________________________________________________________________________________________________________________________________</p>
                <p><u><b>Numero stage </b></u>: <?php echo $stageEtu ?></p>
                <p><u><b>Sujet : </b></u><?php echo $sujet[0]['sujet'] ?></p>
                <p><u><b>Responsable : </b></u><?php echo $sujet[0]['respEnt'] ?></p>
                <p><u><b>Tuteur : </b></u><?php echo $sujet[0]['respPeda'] ?></p>

<?php

                foreach($pw as $etudiant){

?>

<p>
<?php

                    if($etudiant['numStageA']==$stageEtu){

                        echo $etudiant['nom'];

                    }

?>
</p>

<?php

                }

        }

        }

    }

?>