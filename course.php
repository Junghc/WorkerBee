<?php include("../dbconn.php");?>
<?php

    /*$reader = new XMLReader(); 
    $reader->open('https://apiservice.mol.gov.tw/OdService/download/A17000000J-000007-yrg'); //讀取xml數據 
    $num=0;
    $row=1; */
    $doc = new DOMDocument();
    $doc->load( 'https://apiservice.mol.gov.tw/OdService/download/A17000000J-000007-yrg' ); 
    $tables=$doc->getElementsByTagName("Table1");
    foreach ($tables as $table)
    {
        $ords = $table->getElementsByTagName("辦理單位");
        $ord = $ords->item(0)->nodeValue;
        //echo $ord ."<br>";

    }
    echo "<hr>";
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