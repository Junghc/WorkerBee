<?php include("../dbconn.php");?>
<?php
    $sql;
    if(isset($_GET["code"])){
        //echo $_GET["code"];
        $code = $_GET["code"];
        $sql="SELECT place,location
        FROM course
        WHERE code=$code";
    }
    $result = mysqli_query( $conn, $sql );
    $total_records=mysqli_num_rows($result); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="http://pluspng.com/img-png/google-maps-png-google-maps-logo-900.png">
    <title>導航測試</title>
</head>
<body>

    <!--  《test》  get address
        <table>
        <tr>
            <td>place</td>
            <td>location</td>
        </tr>
        <tr>
        <?php for ($i=0;$i<$total_records;$i++) {$row = mysqli_fetch_assoc($result); ?>
            
            <td><?php //echo $row['place']; 
            $place=$row['place'];?></td>
            <td><?php //echo $row['location']; 
            $location=$row['location'];?></td>
            
        </tr>
        <?php } ?>
    </table>-->

    <style>
            
            #gmap_canvas{
                width:100%;
                height:30em;
            }
        </style>
        
        
        <div id="gmap_canvas"></div>

        <?php
        
        $set_address=$place.$location;
        //echo $set_address;
        $data_array = geocode($set_address);
        $latitude = $data_array[0];
        $longitude = $data_array[1];
        $data_address = $data_array[2];
       
        
        //轉地址為經緯度
        function geocode($address){
            
            $address = urlencode($address);

            
            $url = "http://maps.google.com/maps/api/geocode/json?address={$address}&language=zh-TW";

            
            $response_json = file_get_contents($url);

            
            $response = json_decode($response_json, true);

            
            if($response['status']='OK'){
                
                $latitude_data = $response['results'][0]['geometry']['location']['lat']; //緯度
                $longitude_data = $response['results'][0]['geometry']['location']['lng']; //經度
                $data_address = $response['results'][0]['formatted_address'];

                if($latitude_data && $longitude_data && $data_address){

                    $data_array = array();            
                    
                   
                    array_push(
                        $data_array,
                        $latitude_data, //$data_array[0]
                        $longitude_data, //$data_array[1]
                        '<b>Address: </b> '.$data_address //$data_array[2]
                    );

                    return $data_array; 

                }else{
                    return false;
                }

            }else{
                return false;
            }
        }
        
        ?>

</body>

</html>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyA4sYAzrEUUWRxq4jI17O82NyYilKj0tMU"></script>
<!--<script src="http://maps.google.com/maps/api/js?language=zh-TW"></script>-->
<script>
    function init_map() {
       
        var Options = {
            zoom: 16, 
            center: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>) /*所查詢位置的經緯度位置*/
        };
        
        map = new google.maps.Map(document.getElementById("gmap_canvas"), Options);
        
        
        
        var image = {
            url: 'https://google-developers.appspot.com/maps/documentation/javascript/examples/full/images/beachflag.png', /*自定圖標檔案位置或網址*/
            // This marker is 20 pixels wide by 32 pixels high.
            size: new google.maps.Size(20, 32), 
            // The origin for this image is (0, 0).
            origin: new google.maps.Point(0, 0),
            // The anchor for this image is the base of the flagpole at (0, 32).
            anchor: new google.maps.Point(0, 32)
          };
        
        marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>), /*圖標經緯度位置*/
            icon: image
        });
        
        
        //查詢位置詳細資料 
        infowindow = new google.maps.InfoWindow({
            content: "<?php echo $data_address; ?>"
        });
        
        infowindow.open(map, marker);
       
    }
    
   
    google.maps.event.addDomListener(window, 'load', init_map);
</script>