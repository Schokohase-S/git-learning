<?php
$passwortEigen = "Minecraft1";
echo "It qorks - Next gen AI blockchain muöti cloud pwned password tool<br>";
$passwortEigenhash = sha1($passwortEigen);
echo $passwortEigenhash;
$passwortEigenhashBeschnitten = substr($passwortEigenhash, 0, 5);
echo "<br>";
#echo $passwortEigenhashBeschnitten;
#$_GET ['https://api.pwnedpasswords.com/range/$passwortEigenhashBeschnitten'];
$urlGanz = "https://api.pwnedpasswords.com/range/".$passwortEigenhashBeschnitten;
#echo $urlGanz;
$data = file_get_contents($urlGanz);
#echo $data;
$passwortEigenhashKurz =  str_replace($passwortEigenhashBeschnitten, "", $passwortEigenhash);
echo $passwortEigenhashKurz;
if($data == false){   
        echo "failed";
}else{

        $datb64 = base64_encode($data);
        $kurz64 = base64_encode("29a853923c6adfb90f1aa6a54a56b5383fa");
        echo substr_count($datb64, $kurz64);
        #       echo "true";
        #}
};

