<?php
mb_internal_encoding('UTF-8');
$pageTitle = "Списък";
include "header.php";


?>
<div>
    <a href="form.php">Добави разход</a>
</div>
<table style="border:1px solid black">
    <thead>
        <tr>
            <th>Име</th>
            <th>Сума</th>
            <th>Вид</th>
        </tr>
    </thead>
    <tbody>
        
            <?php
                if(file_exists('data.txt')){
                    $result = file('data.txt');
                    foreach ($result as $row){
                    echo "<tr>";
                        $columns = explode('!', $row);
                        foreach ($columns as $data)
                        echo '<td>
                                '.$data.'
                              </td>';
                    }
                    echo "</tr>";
                }
                

            ?>
    </tbody>
</table>

<?php
include "footer.php";