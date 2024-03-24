<?php
function main() {
    $client_IP = $_SERVER['REMOTE_ADDR'];
    $results = file_get_contents('https://api.ip2location.io/?key=5DC6DE7FD3A563139500DE9039039B64&ip='.$client_IP.'&format=json');

   
    $data = json_decode($results);

    
    $city = isset($data->city_name) ? $data->city_name : 'Unknown';
    echo '<script>document.getElementById("city").innerHTML = "' . $city . '";</script>';
    echo '<script>document.getElementById("cityFooter").innerHTML = "' . $city . '";</script>';


}
main();
?>
