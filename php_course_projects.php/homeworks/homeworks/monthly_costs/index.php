<?php
mb_internal_encoding('UTF-8');
$pageTitle = "Списък";
require "header.php";
$filter = -1;

if(array_key_exists("filter",$_POST)){
    $filter = $_POST['filter'];
}

?>
<div>
    <a href="form.php">Добави разход</a>
    <form method="POST">
        <select name='filter'>
            <?php $selected = ($filter == "Всичко") ? "selected='selected'" : ""; ?>
            <option value="Всички" <?php echo $selected ?>>Всички</option>
            <?php
                foreach ($types as $key => $value){
                    $selected = ($filter == $value) ? "selected='selected'" : "";
                    echo '<option '.$selected.' value='.$value.'>'.$value.'</option>';
                }
            ?>
        </select>
        <input type="submit" value="Филтрирай" />
    </form>
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

                        if(trim($filter) != "Всичко" && trim($columns[3]) == trim($filter)){
                            foreach ($columns as $data){
                                if($indexOfColumn == 2)$sum += (float)$data;
                                echo '<td>
                                        '.htmlspecialchars($data) .'
                                    </td>';
                                if($indexOfColumn == count($columns)-1)$indexOfColumn = 0;
                                else $indexOfColumn++;
                        
                            }
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