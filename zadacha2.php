<?php
  $str = 'Оплетенные осоками онежские омуты';
  $all = preg_match_all('~о~iu', $str);
   
  echo $all . '<br>'; // Количество Букв "О"  и "о"
  echo $str;
  ?>
?>