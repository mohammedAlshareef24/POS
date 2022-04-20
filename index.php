<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="left">

            <p>total</p>
            <?php
                
                $total = 0;
                // 999999999

                $product = $_POST["product"]; 

                //99999999999
                for($i = 0; $i < count($product); $i++){
                    echo $product[$i] .'<br>';
                    
                }
                
                $price =array ("apple" => 6, "banana" => 4); 
                for($j = 0; $j < count($product); $j++){
                    echo $price[$product[$j]] ."<br>";
                    $total += $price[$product[$j]]; 
                }
                echo $total;
             
                
            ?>
            
        </div>
        <div class="right">
            <form action="" method ="POST" >
                <div class="row">
                    <div class="column"><input type="checkbox" name = "product[]" value = "apple"><label for="">apple : $50</label></div>
                    <div class="column"><input type="checkbox" name = "product[]" value = "banana"><label for="">banana name</label></div>
                    <div class="column"><input type="checkbox" name = "product[]" value = "3"><label for="">product name</label></div>

                </div>
                <div class="row">
                    <div class="column"><input type="checkbox" name = "product[]" value = "4"><label for="">product name</label></div>
                    <div class="column"><input type="checkbox" name = "product[]" value = "5"><label for="">product name</label></div>
                    <div class="column"><input type="checkbox" name = "product[]" value = "6"><label for="">product name</label></div>

                </div>
                <div class="row">
                    <div class="column"><input type="checkbox" name = "product[]" value = "7"><label for="">product name</label></div>
                    <div class="column"><input type="checkbox" name = "product[]" value = "8"><label for="">product name</label></div>
                    <div class="column"><input type="checkbox" name = "product[]" value = "9"><label for="">product name</label></div>

                </div>
                <div class="row">
                    <div class="column"><input type="checkbox" name = "product[]" value = "10"><label for="">product name</label></div>
                    <div class="column"><input type="checkbox" name = "product[]" value = "11"><label for="">product name</label></div>
                    <div class="column"><input type="checkbox" name = "product[]" value = "22"><label for="">product name</label></div>

                </div>
                <div class="row">
                    <div class="column"><input type="checkbox" name = "product[]" value = "13"><label for="">product name</label></div>
                    <div class="column"><input type="checkbox" name = "product[]" value = "14"><label for="">product name</label></div>
                    <div class="column"><input type="checkbox" name = "product[]" value = "15"><label for="">product name</label></div>

                </div>
                <div id="form">
                        <input type="submit" value ="Submit" class = "btn btn-submit">
                    </div>
            </form>
        </div>
    </div>

</body>
</html>