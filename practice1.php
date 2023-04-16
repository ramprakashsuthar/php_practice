<!DOCTYPE html>
<html>
    <body>

        <?php
            echo "My first PHP script!<br>";
            $a = 5;
            $b = 6;
            $c = $a + $b;
            echo "$c";
            echo '$c<br>';

            $str1 = "My Name is: ";
            $name = "Ramu";
            echo $str1.$name;

            // Array Example
            echo '<br>';
            $arr = array('Volvo',"Tata","BMW");
            var_dump($arr);
            echo '<pre>';
            print_r($arr);
            echo $arr[1].'<br>';

            // Loop Examples
            // Print table of 2

            for($i=1; $i<=10; $i++){
                echo 2*$i." <br>";
                if($i==5){
                    break;
                }
            }
            echo '<br> Loop completed<br>';

            // foreach
            $companylist = array('Volvo',"Tata","BMW");

            echo "List of automobile company<br>";

            foreach($companylist as $company){
                echo $company."<br>";
            }

        ?>
        <select>
            <option>Select Company</option>
            <?php
                foreach($companylist as $company){
            ?>
                    <option><?php echo $company?></option>
            <?php
                }
            ?>
        </select>

    </body>
</html>