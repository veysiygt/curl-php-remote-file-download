<?php
/* With these codes, you will be able to download files from a target system. */

$file = "download.jpg";//We give the name of the file we will upload

$start = curl_init();//We start the curl session
curl_setopt($start,CURLOPT_URL,"https://www.localhost/filedownload/index.php"); //We tell it to pull the target site
curl_setopt($start, CURLOPT_SSL_VERIFYPEER, false); //If there is an SSL certificate on the target site, you can pass it with this command.
curl_setopt($start,CURLOPT_PROXY,"IP"); //You can make your ip address appear different in the systems we connect with, you can enter an ip address you want.
curl_setopt($start,CURLOPT_PROXYPORT,"PORT"); //We can set the port to be used for the target system we are connecting with.
curl_setopt($start,CURLOPT_RETURNTRANSFER,1); //If the operation is 0, it does not print all incoming data on the screen; if it is 1, it prints the incoming data

$result = curl_exec($start);//Execute curl
curl_close($start);


//File operations
$download = fopen($file,"a+");
fwrite($download,$result);

if ($download):

    echo "DOWNLOAD SUCCESSFUL";

else:

    echo "DOWNLOAD FAILED";

endif;

fclose($download);

?>

</body>
</html>