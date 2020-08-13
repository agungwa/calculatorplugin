const calcKeys = document.getElementById("calcGrid");
const resultScreen = document.getElementById("resultScreen");
// Add click event listener to all buttons under calcGrid
calcKeys.addEventListener("click", function (event) {
  const clickedButtonValue = event.target.value;
  const clickedButtonID = event.target.id;
  displayNumbers(clickedButtonValue, clickedButtonID);
});

function displayNumbers(value, ID) {
  if (ID == "number") {
    resultScreen.value += value;
  }
  if (ID == "clear") {
    resultScreen.value = "";
  }
  if (ID == "operator") {
    resultScreen.value += value;
  }
  if (ID == "isEqual") {
    // If evaluation includes dividing by 0
    if (!isFinite(eval(resultScreen.value))) {
      resultScreen.value = "0";
    } else {
      resultScreen.value = eval(resultScreen.value);
    }
  }
  if (ID == "plusMinus") {
    if (resultScreen.value[0] == "-") {
      resultScreen.value = resultScreen.value.substr(1);
    } else {
      resultScreen.value = "-" + resultScreen.value;
    }
  }
}
