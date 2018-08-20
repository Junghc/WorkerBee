<?php include("../dbconn.php");?>

<?php
    //$stmt = "SELECT content FROM course WHERE "
    /*$sql = "UPDATE course SET career = '' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );*/
   
    /*$sql = "UPDATE course SET career = '農、林、漁、牧業' WHERE summary LIKE '%農事%' or summary LIKE '%造林%' or summary LIKE '%栽培%' or summary LIKE '%畜牧%' or summary LIKE '%漁撈%' or summary LIKE '%水產養殖%'";
    $update = mysqli_query( $conn, $sql );*/

                    /////////////////////////////////   
                    //////////   summary   //////////
                    /////////////////////////////////

    /*$sql = "UPDATE course SET career = '礦業及土石採取業' WHERE summary LIKE '%礦業%'or summary LIKE '%石油%' or summary LIKE '%土石採取%' or summary LIKE '%天然氣%'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '製造業' WHERE summary LIKE '%加工食品%' or summary LIKE '%飼品%' or summary LIKE '%飲料%' or summary LIKE '%菸草%' or summary LIKE '%紡織%' or summary LIKE '%紡紗%' or summary LIKE '%服飾%' or summary LIKE '%成衣%'or summary LIKE '%珠寶%' or summary LIKE '%木製%' or summary LIKE '%紙製%' or summary LIKE '%印刷%' or summary LIKE '%媒製品%' or summary LIKE '%化學%' or summary LIKE '%橡膠%' or summary LIKE '%塑膠%' or summary LIKE '%銲接%' or summary LIKE '%烘焙%'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '電力及燃氣供應業' WHERE summary LIKE '%電力供應%' or summary LIKE'%氣體燃料%'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '用水供應及污染整治業' WHERE summary LIKE '%廢水%' or summary LIKE '%汙水處理%' or summary LIKE '%資源回收%' or summary LIKE '%廢棄物%'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '營建工程業' WHERE summary LIKE '%土木%' or summary LIKE '%建築%' or summary LIKE '%興建%' or summary LIKE '%景觀%'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '批發及零售業' WHERE summary LIKE '%批發%' or summary LIKE '%零售%'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '運輸及倉儲業' WHERE summary LIKE '%運輸%' or summary LIKE '%倉儲%' or summary LIKE '%快遞%'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '住宿及餐飲業' WHERE summary LIKE '%住宿%' or summary LIKE '%餐飲%' or summary LIKE '%民宿%' or summary LIKE '%餐廳%'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '出版、影音製作、傳播及資通訊服務業' WHERE summary LIKE '%出版%' or summary LIKE '%影片%' or summary LIKE '%電視節目%' or summary LIKE '%廣播%' or summary LIKE '%電信%' or summary LIKE'%程式設計%' or summary LIKE '%程式開發%'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '金融及保險業' WHERE summary LIKE '%金融%' or summary LIKE '%保險%'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '不動產業' WHERE summary LIKE '%不動產%'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '專業、科學及技術服務業' WHERE summary LIKE '%法律%' or summary LIKE '%會計%' or summary LIKE '%廣告%' or summary LIKE '%獸醫%' or summary LIKE '%室內設計%' or summary LIKE '%攝影%' or summary LIKE '%翻譯%' or summary LIKE '%藝人%'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '支援服務業' WHERE summary LIKE '%租賃%' or summary LIKE '%人力仲介%' or summary LIKE '%旅遊%' or summary LIKE '%保全%' or summary LIKE '%綠化%' or summary LIKE ";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '公共行政及國防；強制性社會安全' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '教育業' WHERE summary LIKE '%教育服務%'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '醫療保健及社會工作服務業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );
    
    $sql = "UPDATE course SET career = '藝術、娛樂及休閒服務業' WHERE summary LIKE ''";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '其他服務業' WHERE summary LIKE '%產品維修%' or summary LIKE '%美容%'";
    $update = mysqli_query( $conn, $sql );*/

    /*$sql = "DELETE FROM course";
    $update = mysqli_query( $conn, $sql );*/
    /******* 
        $sql = "UPDATE course SET career = '' WHERE classname LIKE '%%' or classname LIKE '%%'";
        $update = mysqli_query( $conn, $sql );
    ********/ 
                                     //烘焙/銲接/電銲/鑄造/熔接/模具/機器人/
    $sql = "UPDATE course SET career = '製造業' WHERE classname LIKE '%烘焙%' or classname LIKE '%銲接%' or classname LIKE '%電銲%' or classname LIKE '%鑄造%' or classname LIKE '%熔接%' or classname LIKE '%模具%' or classname LIKE '%機器人%'";
    $update = mysqli_query( $conn, $sql );
                                                                        // 裝修/配線/水電/漆作/營建/維修/
    $sql = "UPDATE course SET career = '營建工程業' WHERE classname LIKE '%裝修%' or classname LIKE '%配線%' or classname LIKE '%水電%' or classname LIKE '%漆作%' or classname LIKE '%營建%' or classname LIKE '%維修%'";
    $update = mysqli_query( $conn, $sql );
                                                                                // 倉管/倉儲/物流/國際貿易/
    $sql = "UPDATE course SET career = '運輸及倉儲業' WHERE classname LIKE '%倉管%'  or classname LIKE '%倉儲%' or classname LIKE '%物流%' or classname LIKE '%國際貿易%'";
    $update = mysqli_query( $conn, $sql );
                                                                                    //  西餐/中餐/烹調/民宿/旅館/飯店/料理/飲料        
    $sql = "UPDATE course SET career = '住宿及餐飲業' WHERE classname LIKE '%西餐%' or classname LIKE '%中餐%' or classname LIKE '%烹調%' or classname LIKE '%民宿%' or classname LIKE '%旅館%' or classname LIKE '%飯店%' or classname LIKE '%料理%' or classname LIKE '%飲料%'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '出版、影音製作、傳播及資通訊服務業' WHERE classname LIKE '%程式設計%' or classname LIKE '%程式開發%' or classname LIKE '%系統設計%'  or classname LIKE '%電腦網路%'  or classname LIKE '%網頁%'  or classname LIKE '%APP%'  or classname LIKE '%通信%'  or classname LIKE '%電信%'  or classname LIKE '%3D列印%'  or classname LIKE '%通訊%'  or classname LIKE '%物聯網%'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '支援服務業' WHERE classname LIKE '%旅遊%' or classname LIKE '%觀光%'";
    $update = mysqli_query( $conn, $sql );

    $sql = "UPDATE course SET career = '專業、科學及技術服務業' WHERE classname LIKE '%圖文設計%' or classname LIKE '%美編%' or classname LIKE '%設計製圖%' or classname LIKE '%多媒體%' or classname LIKE '%製圖%' or classname LIKE '%行銷%' or classname LIKE '%景觀設計%' or classname LIKE '%建築設計%' or classname LIKE '%視傳設計%' or classname LIKE '%平面設計%' or classname LIKE '%服裝設計%' or classname LIKE '%影音設計%' or classname LIKE '%飾品%' or classname LIKE '%圖文傳播%' or classname LIKE '%機械設計%'";
    $update = mysqli_query( $conn, $sql );

?>

