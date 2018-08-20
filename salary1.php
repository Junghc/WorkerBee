<?php


//echo "Connected successfully";
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>SalaryDisplay</title>
    </head>
    <style>
        #sortButton {
            /*▼*/
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        /*padding: 16px 32px;*/
        text-align: center;
        text-decoration: none;
        display: inline-block;
        /*font-size: 16px;*/
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s;
        /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 12px;
    }

    #sortButton {
        background-color: white;
        color: black;
        border: 2px solid #e7e7e7;
        
    }

    button:hover {
        background-color: #e7e7e7;
    }
        h1{
            background-color: #F1F1F1;
            text-align: center;
            padding: 20px; 
            color:lightcoral;
            border-radius: 12px;
        }
        table{
            width: 100%;
            border: 2px solid #e7e7e7;
            border-radius: 6px;
        }
        td{
            text-align: center;
            
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
    <body>
        
	<h1>Salary Display</h1>
	<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wb_test";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        mysqli_set_charset($conn,"utf8"); //設定編碼
        $xml="";
        
        //echo "<table border='3'><tr><th>年度</th><th>職類別</th><th>經常性薪資</th> </tr>";
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET["salary2017"])){
                $xml=simplexml_load_file("salary2017.xml");
                //echo "get ".$_GET["salary2017"];
            }
            else if(isset($_GET["salary2016"])){
                $xml=simplexml_load_file("salary2016.xml");
            }
            else if(isset($_GET["salary2015"])){
                $xml=simplexml_load_file("salary2015.xml");
            }
        }
        /*$sql = "DELETE FROM salary";
		$update = mysqli_query( $conn, $sql );*/
        //$salary = array();
        foreach($xml->children() as $row){
			//echo $xml->MAP[0]->ORG_NAME . "<br>";
            if ($row->Col6 == '—' || $row->Col6 == '…') continue;
            if($row->Col1 == "") continue;
            $sql="INSERT INTO salary(annual,career,industry,salary)VALUES('$row->Col1','$row->Col2','$row->Col3','$row->Col6')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
			/*echo "<tr><td>".$row->Col1."</td>";  //year 2016 
			echo "<td>".$row->Col2."</td>";  // 職類別
            echo "<td>".$row->Col6."</td>";  //經常性薪資*/
            //array_push($salary, $row->Col6);
            
        }
        /*$click=1;
        if (isset($_GET["sortSalary"])){
            
            if ($click){
                asort($salary);
                $click=0;
            }
            else{
                asort($salary);
                $click=1;
            }
            
        }
        */
        
        //echo "</table>"; 
        //$conn->close();
        //print_r($salary);
		//echo $xml->row[0]->經常性薪資 . "<br>123";
		//print_r($xml);
    ?> 
    <script>
        var isLow=1;
    function sort(){
            
            if(isLow){
                document.getElementById("sortButton").value="▼";
                isLow=0;
                
            }
            else{
                document.getElementById("sortButton").value="▲";
                isLow=1;
                
            }
            
        }
    
	</script>
	
    </body>
</html>