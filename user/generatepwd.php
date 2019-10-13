<?php
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!?~@#-_+<>[]{}';
  /* substr ( string $string , int $start [, int $length ] ) : string
  substr Returns the portion of string specified by the start and length parameters.
  str_shuffle ( string $str ) : string
  str_shuffle() shuffles a string. One permutation of all possible is created.
  */
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(10)."\r";


  function crea_password($len) {
    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i < $len) {
      $num = rand() % 33;
      $tmp = substr($chars, $num, 1);
      $pass = $pass . $tmp;
      $i++;
    }
    return $pass;
  }  
  // creo una nuova pasword di 10 caratteri
  $nuova_password = crea_password(10);
  echo crea_password(10)."\r";

?>