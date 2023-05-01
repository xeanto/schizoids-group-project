<?php
// variables to be used for the quiz

// $quizQuestions = array of strings
// $quizAnswers = array of array of strings for each question, with identifier for correct answer
// $title = string for <h2> tag
echo "<h2>$title</h2>";
foreach ($quizQuestions as $question) {
    echo "<form>";
    echo "<p>$question</p>";
    foreach ($quizAnswers as $answer) {
        echo "<label for=\"$answer\" id=\"clia$answer" . "Label\">";
        echo "<input type=\"radio\" id=\"clia$answer\" name=\"cli\" value=\"$answer\" onclick=\"\"><br>";
    }
}
