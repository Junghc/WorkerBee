<?php include("../dbconn.php");?>

<?php 
//echo "financial";
    $sql;
    if(isset($_GET["financial"])) // 金融及保險業
    {
        //echo $_GET["financial"]; //value值
        $sql = "SELECT session,place,location,classname
                FROM course
                WHERE career='金融及保險業'";
        
    }
    else if(isset($_GET["information"])) // 資訊及通訊傳播
    {
        $sql = "SELECT session,place,location,classname,code
                FROM course
                WHERE career='出版、影音製作、傳播及資通訊服務業'";
        //echo "information";
    }
    /*****
     * if(isset($_GET["career"])
     * name值要改 (改成career) / value值要改 (改成相對應中文行業)
     * $career = $_GET["career"];
     * $sql = "SELECT session,place,location,classname,code
                FROM course
                WHERE career = $career";
     * **** */
    
    $result = mysqli_query( $conn, $sql );
    $total_records=mysqli_num_rows($result); 
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="shortcut icon" href="http://ozoopole.pzd.pl/wp-content/uploads/2015/09/info-icon.png">
    <title>課程資訊</title>
</head>

<body>
    <?php 
     //echo $total_records;
     //echo gettype($total_records);
     if($total_records==0){
         echo "<h3 style='color:red;'>無相關課程資訊!</h3>";
     }
     else {
        echo "<table border='3'>
        <tr>
            <td>課程名稱</td>
            <td>訓練期間</td>            
            <td>訓練地點</td>
            <td>訓練位置</td>
            <td>課程代碼</td>
        </tr>
        
        <tr>"?>
        <?php for ($i=0;$i<$total_records;$i++) {$row = mysqli_fetch_assoc($result); ?>
        <td><?php echo $row['classname']; ?></td>
        <td><?php echo $row['session']; ?></td>
        <td><?php echo $row['place']; ?></td>
        <td><?php echo $row['location']; ?></td>
        <td><?php echo $row['code']; ?></td>
        <td>
        <form action="mapTEST.php" method="get">
            <button type="submit" name="code" value="<?php echo $row['code'];?>" class="btn btn-success">導航</button>
        </form >   
        </td>
    </tr>
    <?php }} echo "</table>";?>
    



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
</body>

</html>