const result = document.querySelector(".result");
const buttons = document.querySelectorAll(".buttons button");

let currentNumber = "";
let firstOperand = null;
let operator = null;
let restart = false;

buttons.forEach((button) => {
    button.addEventListener("click", () => {
        const buttonText = button.innerText;
        if (/^[0-9,]+$/.test(buttonText)) {
            addDigit(buttonText);
        } else if (["+", "-", "×", "÷"].includes(buttonText)) {
            setOperator(buttonText);
        } else if (buttonText === "=") {
            calculate();
        }
    });
});

// Função para atualizar o resultado na tela
function updateResult(originClear = false) {
    let formattedNumber = currentNumber.replace(".", ",");
    if (originClear) {
        formattedNumber = "0";
    }
    result.innerHTML = formattedNumber;
}

// Função para adicionar dígitos ao número atual
function addDigit(digit) {
    if (digit === "," && (currentNumber.includes(",") || !currentNumber)) return;

    if (restart) {
        currentNumber = digit;
        restart = false;
    } else {
        currentNumber += digit;
    }
    updateResult();
}

// Função para definir o operador
function setOperator(newOperator) {
    if (currentNumber) {
        calculate();
        firstOperand = parseFloat(currentNumber.replace(",", "."));
        currentNumber = "";
    }
    operator = newOperator;
}

// Função para calcular o resultado
function calculate() {
    if (operator === null || firstOperand === null) return;
    let secondOperand = parseFloat(currentNumber.replace(",", "."));
    let resultValue;

    switch (operator) {
        case "+":
            resultValue = firstOperand + secondOperand;
            break;
        case "-":
            resultValue = firstOperand - secondOperand;
            break;
        case "×":
            resultValue = firstOperand * secondOperand;
            break;
        case "÷":
            resultValue = firstOperand / secondOperand;
            break;
        default:
            break;
    }

    // Formata o resultado para exibir na tela
    if (resultValue.toString().split(".")[1]?.length > 5) {
        currentNumber = parseFloat(resultValue.toFixed(5)).toString().replace(".", ",");
    } else {
        currentNumber = resultValue.toString().replace(".", ",");
    }

    operator = null;
    firstOperand = null;
    restart = true;
    updateResult();
}
