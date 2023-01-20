<?php
function proverka_mail($obrabotka) {
    if (!preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $obrabotka)) {
     return false; 
    }else{ 
     return true; 
    }
}

if (proverka_mail("mail@mail.ru")) {
echo "Все ок";
}else{
echo "Это не адрес почты!";
}
?>
