<?php 
/*   echo "getdate() : ";
  print_r (getdate());
  echo "<br><br>"; 
  print_r (date('Y-m-d'));
  echo "<br><br>"; */
/*   date_default_timezone_set('Europe/Rome');
  echo "date('Y-m-d') : ".date("Y-m-d H:i:s",mktime(date("H"), date("i"), date("s"), date("m") ,date("d"), date("Y")));
  echo "<br><br>";
  $t=time();
  echo($t . "<br>");
  $expdate= mktime(date("H")+1, date("i"), date("s"), date("m") ,date("d"), date("Y")); */
  
  date_default_timezone_set('Europe/Rome'); //imposto fuso orario giusto
  $expFormat = mktime(date("H")+1, date("i"), date("s"), date("m") ,date("d"), date("Y"));
  echo("expFormat: ".$expFormat);
  $expDate = date("Y-m-d H:i:s",$expFormat);
  echo("expdate: ".$expDate);
  echo "<br><br>";
  
  //strtotime ( string $time [, int $now = time() ] ) : int
  //strtotime — Parse about any English textual datetime description into a Unix timestamp
  //now - The timestamp which is used as a base for the calculation of relative dates.
  /* $t=time();
  echo("Now: ".date("Y-m-d h:i:s",$t));
  echo("<br>Now timestamp: ".$t);
  echo "<br><br>";
  $expFormat = strtotime('+1 hour');
  echo("Now +1 ora: ".date("Y-m-d h:i:s",$expFormat));
  $expDate = date("Y-m-d H:i:s",$expFormat);
  echo("<br>expdate: ".$expDate);
  echo "<br><br>"; */
  echo("<br>expFormat - strtotime('+1 hour'): ".$expFormat);
  
  $newExpData = strtotime('+1 hour');;
  echo("<br>strtotime('+1 hour'): ".$newExpData);
  $data = time()+(0 * 1 * 0 * 0);
  echo("time() + (0 * 1 * 0 * 0)".$data);
  echo "<br><br>";
  $nextWeek = time() + (7 * 24 * 60 * 60);
  // 7 days; 24 hours; 60 mins; 60 secs
  echo 'Now:       '. date('Y-m-d') ."\n";
  echo "<br><br>";
  echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
  echo "<br><br>";
  // or using strtotime():
  echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";
?>