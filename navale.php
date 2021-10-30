<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bataille navale</title>
</head>

<?php

    $tabCacher = array("X","X","X","X","X"
                        ,"X","X","X","X","X"
                        ,"X","X","X","BOOM","X"
                        ,"X","BOOM","X","X","X"
                        ,"X","X","X","X","X");

    $iniPartie = array("?","?","?","?","?"
                    ,"?","?","?","?","?"
                    ,"?","?","?","?","?"
                    ,"?","?","?","?","?"
                    ,"?","?","?","?","?");
    $var = "?";

    for($i=0;$i<25;$i++){

        if(isset($_POST[$i])){

            $iniPartie[$i]=$tabCacher[$i];
     
        }

    }

    

?>

<body>

    <tr>

        <form action="" method="post">

        <table>

            <tr>

            <td><input type="submit" value=<?php echo $iniPartie[1] ?> name="1"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[2] ?> name="2"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[3] ?> name="3"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[4] ?> name="4"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[5] ?> name="5"></input></td>


            </tr>

            <tr>

            <td><input type="submit" value=<?php echo $iniPartie[6] ?> name="6"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[7] ?> name="7"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[8] ?> name="8"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[9] ?> name="9"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[10] ?> name="10"></input></td>


            </tr>

            <tr>

            <td><input type="submit" value=<?php echo $iniPartie[11] ?> name="11"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[12] ?> name="12"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[13] ?> name="13"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[14] ?> name="14"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[15] ?> name="15"></input></td>

            </tr>

            <tr>

            <td><input type="submit" value=<?php echo $iniPartie[16] ?> name="16"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[17] ?> name="17"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[18] ?> name="18"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[19] ?> name="19"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[20] ?> name="20"></input></td>

            </tr>

            <tr>

            <td><input type="submit" value=<?php echo $iniPartie[21] ?> name="21"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[22] ?> name="22"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[23] ?> name="23"></input></td>
            <td><input type="submit" value=<?php echo $iniPartie[24] ?> name="24"></input></td>

            </tr>

            </form>

            </tr>

        </table>

        

    
    
</body>
</html>