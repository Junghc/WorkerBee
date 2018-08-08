<?php include("../dbconn.php");?>
<?php

    /*$reader = new XMLReader(); 
    $reader->open('https://apiservice.mol.gov.tw/OdService/download/A17000000J-000007-yrg'); //讀取xml數據 
    $num=0;*/
    $row=0; 
    $doc = new DOMDocument();
    $doc->load( 'https://apiservice.mol.gov.tw/OdService/download/A17000000J-000007-yrg' ); 
    $tables=$doc->getElementsByTagName("Table1");
    echo "<table border='3'><tr><th>辦理單位</th> <th>開班單位</th> <th>訓練期間</th> <th>訓練時段</th>  <th>訓練時數</th>  <th>訓練地點</th>  <th>訓練位置</th>  <th>報名日期</th>  <th>甄試日期</th>  <th>負擔費用</th>  <th>聯絡人</th>  <th>聯絡電話</th>  <th>課程名稱 <th>期別</th>  <th>課程代碼</th> <th>訓練概要</th> <th>課程內容</th></tr>";
    foreach ($tables as $table)
    {
        $contents = $table->getElementsByTagName("課程內容");
        $content =  $contents->item(0)->nodeValue;
        if ($content==" ") 
            continue;
        $row++;
        // get data 
        $orgs = $table->getElementsByTagName("辦理單位");
        $org = $orgs->item(0)->nodeValue;

        $classes = $table->getElementsByTagName("開班單位");
        $class = $classes->item(0)->nodeValue;

        $sessions = $table->getElementsByTagName("訓練期間");
        $session = $sessions->item(0)->nodeValue;

        $times = $table->getElementsByTagName("訓練時段");
        $time = $times->item(0)->nodeValue;

        $hourss = $table->getElementsByTagName("訓練時數");
        $hours = $hourss->item(0)->nodeValue;

        $places = $table->getElementsByTagName("訓練地點");
        $place = $places->item(0)->nodeValue;

        $locations = $table->getElementsByTagName("訓練位置");
        $location = $locations->item(0)->nodeValue;

        $signdates = $table->getElementsByTagName("報名日期");
        $signdate = $signdates->item(0)->nodeValue;

        $testdates = $table->getElementsByTagName("甄試日期");
        $testdate = $testdates->item(0)->nodeValue;

        $costs = $table->getElementsByTagName("負擔費用");
        $cost = $costs->item(0)->nodeValue;

        $pocs = $table->getElementsByTagName("聯絡人");
        $poc = $pocs->item(0)->nodeValue;

        $phones = $table->getElementsByTagName("聯絡電話");
        $phone = $phones->item(0)->nodeValue;

        $classnames = $table->getElementsByTagName("課程名稱");
        $classname = $classnames->item(0)->nodeValue;

        $periods = $table->getElementsByTagName("期別");
        $period = $periods->item(0)->nodeValue;

        $codes = $table->getElementsByTagName("課程代碼");
        $code = $codes->item(0)->nodeValue;

        $summarys = $table->getElementsByTagName("訓練概要");
        $summary = $summarys->item(0)->nodeValue;

        

        echo "<tr><th>".$org."</th><th>".$class."</th><th>".$session."</th><th>".$time."</th><th>".$hours."</th><th>".$place."</th><th>".$location."</th><th>".$signdate."</th><th>".$testdate."</th><th>".$cost."</th><th>".$poc."</th><th>".$phone."</th><th>".$classname."</th><th>".$period."</th><th>".$code."</th><th>".$summary."</th><th>".$content."</th></tr>";
        
        //echo gettype($content);
        //echo $ord ."<br>";

        // insert data to mysql
        $sql="INSERT INTO course(organizer,class,session,time,hours,place,location,signdate,testdate,cost,poc,phone,classname,period,code,summary,content)VALUES('$org','$class','$session','$time','$hours','$place','$location','$signdate','$testdate','$cost','$poc','$phone','$classname','$period','$code','$summary','$content')";
        /*if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }*/
    }
    echo "Number: ".$row;
    //echo "<hr>";
    //echo "<table border='3'><tr><th>辦理單位</th> <th>開班單位</th> <th>訓練期間</th> <th>訓練時段</th>  <th>訓練時數</th></tr>";
    /*while ($reader->read()) { //是否讀取 
        //echo "read yes";
        if ($reader->nodeType == XMLReader::TEXT) { //判斷node類型 
            
            
            switch($row%17)
            {
                case 1:
                echo "<tr><td>".$reader->value."</td>";
                break;
                case 2:
                echo "<td>".$reader->value. "</td>";
                break;
                case 3:
                echo "<td>".$reader->value. "</td>";
                break;
                case 4:
                echo "<td>".$reader->value. "</td>";
                break;
                case 5:
                echo "<td>".$reader->value. "</td></tr>";
                break;
                default:
                break;
            }
            if($i) { 
                echo $reader->value; //取得node的值 
            } else { 
                echo $reader->value."<br>" ; 
            } 
            $row++; 
        } 
    } */
    //echo "========data end=========";
    
    /*$xml=simplexml_load_file("course.xml") or die("Error: Cannot create object");
            echo "<table border='3'><tr><th>ORG_NAME</th> <th>DIVISION</th> <th>PERSON_IN_CHARGE</th> <th>ADDRESS</th> </tr>";
            foreach($xml->children() as $set){
                //echo $xml->MAP[0]->ORG_NAME . "<br>";
                //echo $set->getName();
                //foreach($set[1]->children() as $new){
                    echo "<tr><td>".$set->辦理單位."</td>";
                    echo "<td>".$set->開班單位."</td>";
                    echo "<td>".$set->訓練期間."</td>";
                    echo "<td>".$set->訓練時段."</td></tr>";
                    //$count=$count+1;
            }
               */     
            //}
            //echo "</table>";
            //echo $xml->MAP[0]->ORG_NAME . "<br>";
            //print_r($xml);
$conn->close();
?> 