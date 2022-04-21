<?php
    $arr = array(
        'q1' => $_POST["q1"],
        'q2' => $_POST["q2"],
        'q3' => $_POST["q3"],
        'q4' => $_POST["q4"],
        'q5' => $_POST["q5"],
    );
    $ans = array(
        'q1' => 'Awesome',
        'q2' => "I don't know",
        'q3' => 'Go to McDonalds',
        'q4' => 'Tres Leches',
        'q5' => 'What am I doing',
    );
    
    echo "<p>Question 1: How are you feeling?</p>";
    echo "<p>You answered: " . $arr['q1'] . "</p>";
    echo "<p>Correct answer: Awesome</p><br>";

    echo "<p>Question 2: Why are you feeling this way?</p>";
    echo "<p>You answered: " . $arr['q2'] . "</p>";
    echo "<p>Correct answer: I don't know</p><br>";

    echo "<p>Question 3: What are you going to do about it?</p>";
    echo "<p>You answered: " . $arr['q3'] . "</p>";
    echo "<p>Correct answer: Go to McDonalds</p><br>";

    echo "<p>Question 4: What is your favorite dessert?</p>";
    echo "<p>You answered: " . $arr['q4'] . "</p>";
    echo "<p>Correct answer: Tres Leches</p><br>";

    echo "<p>Question 5: Why are you in CS?</p>";
    echo "<p>You answered: " . $arr['q5'] . "</p>";
    echo "<p>Correct answer: What am I doing</p><br>";

    $correct = 0;
    foreach ($arr as $key => $value) {
        if ($value == $ans[$key]) {
            $correct = $correct + 1;
        }
    }
    echo $correct;
    $score = $correct / 5 * 100;
    echo "<p>Score: " . $score . "%</p>";

?>