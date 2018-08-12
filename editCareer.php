<?php include("../dbconn.php");?>

<?php
    //$stmt = "SELECT content FROM course WHERE "
    /*$sql = "UPDATE course SET career = '' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );*/
   
    $sql = "UPDATE course SET career = '農、林、漁、牧業' WHERE summary LIKE '農事' or summary LIKE '造林' or summary LIKE '栽培' or summary LIKE '畜牧' or summary LIKE '漁撈' or summary LIKE '水產養殖'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '礦業及土石採取業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '製造業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '電力及燃氣供應業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '用水供應及污染整治業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '營建工程業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '批發及零售業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '運輸及倉儲業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '住宿及餐飲業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '出版、影音製作、傳播及資通訊服務業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '金融及保險業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '不動產業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '專業、科學及技術服務業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '支援服務業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '公共行政及國防；強制性社會安全' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '教育業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '醫療保健及社會工作服務業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '藝術、娛樂及休閒服務業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '其他服務業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

?>

