<?php
//$signRoot="/var/www/test/";//linux
//$signPath=$signRoot."tool/ausign";//linux
//$certPath=$signRoot."dev.p12";
//$mobileProvisionPath=$signRoot."dev.mobileprovision";
//$ipaPath=$signRoot."ipa/game.ipa";
//$saveIpaPath=$signRoot."resigned/game.ipa";
//$certPassword="123456";
//$loginCmd=$signPath.' --email 2462611616@qq.com -p 123456';
//$signCmd=$signPath.' --sign '.$ipaPath." -c ".$certPath." -m ".$mobileProvisionPath." -p ".$certPassword." -o ".$saveIpaPath;
//$addTimeSignCmd=$signCmd." -at 20190901";//签名并插入锁的命令
//
//exec($loginCmd,$outputString,$loginStatus);
//if($loginStatus!=0){
//    echo "login fail <br/>";
//    echo var_dump($outputString);
//}else{
//    echo "login success <br/>";
//    exec($signCmd,$outputString,$signStatus);
//    if($signStatus!=0){
//        echo "sign fail <br/>";
//        echo var_dump($outputString);
//    }else{
//        echo "sign success,ipa saved to ".$saveIpaPath;
//    }
//}

$isignPath = "/usr/bin/isign";
$iosUdidPath = "/www/ios_udid/sign/";
$pemPath = "/root/.isign/";

$c = $pemPath . "certificate.pem";
$k = $pemPath . "key.pem";
$p = $iosUdidPath . "sigmDemo_adhoc.mobileprovision";
$out = $iosUdidPath . "resigned3.ipa";
$in = $iosUdidPath . "SignDemo.ipa";

$exec = "$isignPath -c $c -k $k -p $p -o $out $in -v";


system($exec, $status);

var_dump(111111111111111);
var_dump($status);
var_dump(1111111111111111);