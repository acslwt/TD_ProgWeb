<?php 

session_start();
$_SESSION['numeroTrouve']="****";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>

    <?php
    
        $numeroMind = "1742";

        if(!empty($_POST['valeur']) && !empty($_POST['valider'])){

            $essai = $_POST['valeur'];

            for($i=0;$i<4;$i++){


                if($_SESSION['numeroTrouve'][$i]=="*"){
                    
                    if($numeroMind[$i]==$essai[$i]){

                        $_SESSION['numeroTrouve'][$i] = $numeroMind[$i];

                    }
                
                }

            }

        }

    ?>

    <form action="" method="post">
        <?php echo $_SESSION['numeroTrouve'] ?>
        <input type="text" name="valeur"></input>
        <input type="submit" value="Valider" name="valider"></input>

    </form>
    


</body>
</html>