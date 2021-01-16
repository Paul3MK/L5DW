<?php

    // require_once "configure.php";

    // if (mysqli_connect_errno()) {
    //     printf("Connect failed: %s\n", mysqli_connect_error());
    //     exit();
    // }

    function loadStocksTable() {
        require "configure.php";
        
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $link_array = array(
            "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=GOOG&apikey=IGWHKLEEZ6N6GGG1",
            "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=tsla&apikey=IGWHKLEEZ6N6GGG1",
            "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=intc&apikey=IGWHKLEEZ6N6GGG1",
            // "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=uber&apikey=IGWHKLEEZ6N6GGG1",
            // "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=bidu&apikey=IGWHKLEEZ6N6GGG1",
            // "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=yndx&apikey=IGWHKLEEZ6N6GGG1",
            // "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=qcom&apikey=IGWHKLEEZ6N6GGG1",
            "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=nvda&apikey=IGWHKLEEZ6N6GGG1"
        );
    
    
        $load_stocks = $connection->prepare("INSERT INTO stocks(symbol, price, tradingday, `change`, `percent`) VALUES(?, ?, ?, ?, ?)");
        $update_stocks = $connection->prepare("UPDATE stocks SET price=?, tradingday=?, `change`=?, `percent`=? WHERE symbol=?");
        $check_stocks = $connection->prepare("SELECT price FROM stocks WHERE symbol=?");
    
        foreach($link_array as $link){
            
            $var = file_get_contents($link);
            $data = json_decode($var);
            
            // echo $data1;
    
            foreach ($data as $line){
                $symbol = $line->{'01. symbol'};
                $price = $line->{'05. price'};
                $day = $line->{'07. latest trading day'};
                $change = $line->{'09. change'};
                $percent = $line->{'10. change percent'};
                

                $check_stocks->bind_param("s", $symbol);
                $check_stocks->execute();
                $check_stocks->store_result();
                if($check_stocks->num_rows>0){
                    $update_stocks->bind_param("dssss", $price, $day, $change, $percent, $symbol);
                    $update_stocks->execute();
                }else{
                    $load_stocks->bind_param("sdsss", $symbol, $price, $day, $change, $percent);
                    $load_stocks->execute();   
                }
            };
        }
    }
    

    function retrieveStocks($stock){
        require "configure.php";

        $read_stocks = $connection->prepare("SELECT price, tradingday, `change`, `percent` FROM stocks WHERE symbol=?");

        $read_stocks->bind_param("s", $stock);
        $read_stocks->execute();
        $read_stocks->store_result();
        $read_stocks->bind_result($price, $day, $change, $percent);
        $read_stocks->fetch();

        return array($stock, $price, $change, $percent, $day);

    }

    // loadStocksTable();

    $given_stock = json_decode($_POST['stocks']);
    $return_array = array();

    foreach ($given_stock as $stock){
        $temp = retrieveStocks($stock);
        foreach($temp as $i){
            array_push($return_array, $i);
        }
        
    }

    echo json_encode($return_array);

?>