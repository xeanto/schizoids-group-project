// A General function for quizzes
function answerCorrectly(actual, excpectedID){
    expected = document.getElementById(excpectedID);
	label = document.getElementById(actual.id + "Label");
    if (expected == actual){
		label.style.color = "green";
    }
    else{
        label.style.color = "red";
    }
}