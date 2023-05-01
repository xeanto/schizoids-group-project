<?php
// variables to be used for the quiz

// $quizQuestions = array of strings
// $quizAnswers = array of array of strings for each question, with identifier for correct answer
// $title = string for <h2> tag
echo "<h2>$title</h2>";
$count = 0;
foreach ($quizQuestions as $question) {
    echo "<form id='quiz$count'>";
    echo "<p>$question</p>";
    $actualAnswer = $quizAnswers[$count][count($quizAnswers) - 1]; // get answer from array
    $currentQuestionSet = array_slice(
        $quizAnswers[$count],
        0,
        count($quizAnswers[$count]) - 1,
        true
    ); // remove last element since last element is correct answer
    foreach ($currentQuestionSet as $answer) {
        echo "<label for=\"$answer\" id=\"clia$count" . "Label\">";
        echo "<input type=\"radio\" id=\"clia$answer\" name=\"cli\" value=\"$answer\" onclick=\"\">";
        echo "$answer</label><br>";
    }
    echo "<input type=\"button\" value=\"Submit\" onClick='validateQuiz(quiz$count)'>";
    echo "</form>";
    $count++;
}
