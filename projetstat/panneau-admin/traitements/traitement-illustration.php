<?php

$path = "../../illustration/";
$pathMini = "../../mini/";

if (isset($_FILES['illustration']) AND $_FILES['illustration']['error'] == 0)
{
        if ($_FILES['illustration']['size'] <= 1000000)
        {
                $infosfichier = pathinfo($_FILES['illustration']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        move_uploaded_file($_FILES['illustration']['tmp_name'], '../../illustration/' . basename($_FILES['illustration']['name']));

                        require_once '../../lib/simpleimage/SimpleImage.php';       
                        $image = new SimpleImage();
                        $image->load($path . $_FILES['illustration']['name']);
                        $image->resizeToWidth(70);
                        $image->resizeToHeight(70);
                        $image->save($pathMini . $_FILES['illustration']['name']);

                        echo "L'envoi a bien été effectué !";
                }
        }
}
?>