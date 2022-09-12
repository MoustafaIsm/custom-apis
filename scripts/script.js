/* Palindrome */

// Variables
const palindromeInput = document.getElementById("palindrome-input");
const palindromeCheck = document.getElementById("palindrome-check");
const palindromeResult = document.getElementById("palindrome-result");

// Event listeners
palindromeCheck.addEventListener("click", checkIfPalindrome);

// Functions
function checkIfPalindrome() {
    if (palindromeInput.value != "") {
        fetch("./apis/palindromeAPI.php?input=" + palindromeInput.value)
            .then((response) => response.json())
            .then((data) => palindromeResult.textContent = data.output);
    }
}

/* Mathematical Expression */

// Variables
const aInput = document.getElementById("a-input");
const bInput = document.getElementById("b-input");
const cInput = document.getElementById("c-input");
const calculate = document.getElementById("calculate");
const calculationResult = document.getElementById("calculation-result");

// Event listners
calculate.addEventListener("click", calculateResult);

// Functions 
function calculateResult() {
    if (aInput.value != "" && bInput.value != "" && cInput.value != "") {
        let formData = new FormData();
        formData.append("input1", aInput.value);
        formData.append("input2", bInput.value);
        formData.append("input3", cInput.value);
        fetch("./apis/expressionAPI.php", {
            method: 'post',
            body: formData
        }).then((response) => response.json())
            .then((data) => calculationResult.textContent = "Result= " + data.output);
    }
}