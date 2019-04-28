<?php
    $lines = file("questions.txt");
    $line_num = 0;
    $quest_num = null;
    $correct = 0;
    if(isset($_POST["answers"]) && !empty($_POST["answers"])){
        $answers = $_POST["answers"];
        foreach($answers as $ans_num => $answer){
            $lines[($ans_num + 1) * 3 - 1] = trim(preg_replace('/\s\s+/', ' ',$lines[($ans_num + 1) * 3 - 1]));
            if(strtolower($answer) == strtolower($lines[($ans_num + 1) * 3 - 1])){
                $correct++;
            }
        }
        echo "You have $correct correct answers.";
        echo "<br />";
        $score = ($correct / count($answers)) * 100;
        echo "Your score is $score%.";
    }
    else {
?>
    <form method="post" action="">

    <?php
    foreach($lines as $line){
        $quest_num = $line_num / 3;
        if($line_num % 3 == 1){
            ?>
            <div>
                <p><?php echo $line ?></p>
            </div>
            Answer : <input type="text" name="answers[]" />
            <?php
        }
        $line_num ++;
    }
    ?>
        <br />
        <input type="submit" value="Send" />

    <?php
    }
    ?>