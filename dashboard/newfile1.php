<?php

if(isset($_POST['login'])){
    echo "Cześć " . htmlspecialchars($_POST['login']) . ". ";
}else{
    echo "Cześć nieznajomy.";
}
 ?>