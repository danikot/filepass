<html>
  <head>
   <title>Снимаем Аддресс</title>
  </head>

<body>
  <?php echo '<p>пошло</p>';




//    file_put_contents("gestbuk.txt",date("Y.m.d [D] G:i:s e")." s
".$_SERVER["REMOTE_ADDR"]." ".$_SERVER['HTTP_USER_AGENT'].PHP_EOL,
FILE_APPEND);


echo $address;


function printVar($var) {

echo '<pre>';

var_dump($var);

echo '</pre>';
}

printVar(apache_request_headers ());



//
echo $_SERVER['HTTP_USER_AGENT'] . "\n" ;

echo $_SERVER["SERVER_NAME"]; ?>

</br>

<?php echo $_server['REMOTE_USER'] . "\n" ;

print "SERVER_ADDR : ".  $_SERVER["SERVER_ADDR"] . "\n" ;

print "SERVER_PROTOCOL : ".  $_SERVER["SERVER_PROTOCOL"] . "\n" ;

print "REMOTE_ADDR : ".  $_SERVER["REMOTE_ADDR"] . "\n" ;

print "REMOTE_PORT : ". $_SERVER["REMOTE_PORT"] . "\n" ;
       print "remUSR : ".  $_SERVER["REMOTE_USER"] . "\n" ;
       print "authPW : ".  $_SERVER["PHP_AUTH_PW"] . "\n" ;
       print "autUSR : ".  $_SERVER["PHP_AUTH_USER"] . "\n" ;

print "PHP_AUTH_DIGEST : ".  $_SERVER["PHP_AUTH_DIGEST"] . "\n";


//visitor log
file_put_contents("gosti.txt",date("Y.m.d [D] G:i:s e")." s
".$_SERVER["REMOTE_ADDR"]." ".$_SERVER['HTTP_USER_AGENT'].PHP_EOL,
FILE_APPEND);

if($_SERVER['HTTP_USER_AGENT']=="Fritz!Box DDNS/1.0.1" &&
$_SERVER['HTTP_CONNECTION']=="close"){

$IPtxt = fopen("lastIP.txt","w");
fwrite($IPtxt, "authDUG: ". $_SERVER["PHP_AUTH_DIGEST"]. "\n".
               "autUSR : ".  $_SERVER["PHP_AUTH_USER"] . "\n" .
               "authPW : ".  $_SERVER["PHP_AUTH_PW"] . "\n" .

              "remaddr : ".  $_SERVER["REMOTE_ADDR"] . "\n");
fclose($IPtxt);


//!!KAKOJ FAIL 4itajem

$filename="test.jpg";
$readgif=fopen($filename,"r");
$randnum=rand(1,filesize($filename)-6);

fseek($readgif, $randnum);

$keysought=fread($readgif, 6);

$address="http://".$_SERVER["REMOTE_ADDR"]."/return.php?num=".$randnum;
$replyfile=file_get_contents($address);
if(strcmp($replyfile,$keysought)){$IP =
fopen("IP.txt","w");fwrite($IP,$_SERVER["REMOTE_ADDR"]);fclose($IP);}

echo filesize("test.jpg")."stop";
echo $randnum;

echo "replyfile:".$replyfile." ";

echo "keysought:".$keysought;

if(strcmp($replyfile,$keysought)){echo "TRUE";};
fclose($readgif);


}

?>
</br>
  </body>
</html>