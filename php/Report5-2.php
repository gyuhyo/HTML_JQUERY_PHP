<p>PHP 구구단 <<?=$_GET["num"];?>단><p>
=================<br>
<?
 for($i=1;$i<=9;$i++)
 { 
   $k=$_GET["num"]*$i;
   echo $_GET["num"]." * ".$i." = ".$k." <br>";
 }
?>
=================<br>