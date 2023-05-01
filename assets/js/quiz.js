// A General function for quizzes
function answerCorrectly(actual, excpectedID) {
  expected = document.getElementById(excpectedID);
  label = document.getElementById(actual.id + "Label");
  if (expected == actual) {
    label.style.color = "green";
  } else {
    label.style.color = "red";
  }
}

function validateQuiz(quizID, answerValue) {
  var form = document.getElementById(quizID);
  var radios = form.getElementsByTagName("input");
  for (i = 0; i < radios.length; i++) {
    if (radios[i].checked && radios[i].value == answerValue) {
      styleQuiz(radios, true);
      alert("You got it right!");
      return true;
    } else if (radios[i].checked && radios[i].value != answerValue) {
      styleQuiz(radios, false);
      alert("womp womp");
      return false;
    }
  }
}

function styleQuiz(radios, answerBool) {
  for (i = 0; i < radios.length; i++) {
    if (radios[i].checked && answerBool) {
      radios[i].parentNode.classList.add("correct");
      console.log(radios[i].classList);
    } else if (radios[i].checked && !answerBool) {
      radios[i].parentNode.classList.add("incorrect");
    }
  }
}
