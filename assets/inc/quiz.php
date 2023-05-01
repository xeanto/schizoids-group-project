<?php
// variables to be used for the quiz

// $quizQuestions = array of strings
// $quizAnswers = array of array of strings for each question, with identifier for correct answer
// $title = string for <h2> tag
echo "<h2>$title</h2>";
$count = 0;
foreach ($quizQuestions as $question) {
    echo "<form id='quiz$count'>"; // set id to check answer with JS
    echo "<p>$question</p>";
    $actualAnswer = array_pop($quizAnswers[$count]); // get answer from array
    foreach ($quizAnswers[$count] as $answer) { // print out answers
        echo "<label for=\"$answer\" id=\"clia$count" . "Label\">";
        echo "<input type=\"radio\" id=\"clia$answer\" name=\"cli\" value=\"$answer\" onclick=\"\">";
        echo "$answer</label><br>";
    }
    echo "<input type=\"button\" value=\"Check Answer\" onClick=\"validateQuiz('quiz$count', '$actualAnswer')\">";
    echo "</form>"; // close form and put check answer button
    $count++;
}
