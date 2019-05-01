<?php
mb_internal_encoding('UTF-8');
$pageTitle = "Списък";
require "header.php";


?>
<div>
    <a href="form.php">Добави разход</a>
</div>
<table style="border:1px solid black">
    <thead>
        <tr>
            <th>Дата</th>
            <th>Име</th>
            <th>Сума</th>
            <th>Вид</th>
        </tr>
    </thead>
    <tbody>
        
            <?php
                if(file_exists('data.txt')){
                    $result = file('data.txt');
                    $sum = 0;
                    $indexOfColumn = 0;
                    foreach ($result as $row){

                    echo "<tr>";
                        $columns = explode('!', $row);
                        foreach ($columns as $data){
                        if($indexOfColumn == 2)$sum += (float)$data;
                        echo '<td>
                                '.htmlspecialchars($data) .'
                              </td>';
                        if($indexOfColumn == count($columns)-1)$indexOfColumn = 0;
                        else $indexOfColumn++;
                    
                         }
                    echo "</tr>";
                    }
                    

                    echo "<tr>";
                        for($i = 0; $i < count($columns); $i++){
                        if($i != 2){
                            echo '<td></td>';
                        } else {
                            echo '<td>
                                '.$sum.'
                              </td>';
                        }
                        
                    }
                    echo "</tr>";
                }

            ?>
    </tbody>
</table>

<?php
include "footer.php";