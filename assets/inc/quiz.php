<?php
// variables to be used for the quiz

// $quizQuestions = array of strings
// $quizAnswers = array of array of strings for each question, with identifier for correct answer
// $title = string for <h2> tag
echo "<h2>$title</h2>";
$count = 0;
foreach ($quizQuestions as $question) {
    echo "<form id='quiz$count' class='quiz'>"; // set id to check answer with JS
    echo "<p>$question</p>";
    $actualAnswer = array_pop($quizAnswers[$count]); // get answer from array
    $subCount = 0;
    foreach ($quizAnswers[$count] as $answer) { // print out answers
        // label ID's are prepended with l
        // input ID's are prepended with a
        $subCount++;
        echo "<label for=\"a$subCount\" id=\"l$subCount\">";
        echo "<input type=\"radio\" id=\"a$subCount\" name=\"$count\" value=\"a$subCount\" onclick=\"\">";
        echo "$answer</label><br>";
    }
    echo "<input type=\"button\" value=\"Check Answer\" onClick=\"validateQuiz('quiz$count', '$actualAnswer')\">";
    echo "</form>"; // close form and put check answer button
    $count++;
}
