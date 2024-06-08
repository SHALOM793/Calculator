<!DOCTYPE html>
<html>
<head>
<title>Calculator</title>
<style>
body {
  font-family: sans-serif;
}
.container {
  width: 300px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}
input[type="text"] {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 5px;
}
button {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
button:hover {
  background-color: #45a049;
}
</style>
</head>
<body>
<div class="container">
  <h1>Calculator</h1>
  <input type="text" id="display" readonly>
  <br>
  <button onclick="appendNumber('7')">7</button>
  <button onclick="appendNumber('8')">8</button>
  <button onclick="appendNumber('9')">9</button>
  <button onclick="appendOperator('+')">+</button>
  <br>
  <button onclick="appendNumber('4')">4</button>
  <button onclick="appendNumber('5')">5</button>
  <button onclick="appendNumber('6')">6</button>
  <button onclick="appendOperator('-')">-</button>
  <br>
  <button onclick="appendNumber('1')">1</button>
  <button onclick="appendNumber('2')">2</button>
  <button onclick="appendNumber('3')">3</button>
  <button onclick="appendOperator('*')">*</button>
  <br>
  <button onclick="appendNumber('0')">0</button>
  <button onclick="appendNumber('.')">.</button>
  <button onclick="calculate()">=</button>
  <button onclick="appendOperator('/')">/</button>
  <br>
  <button onclick="clearDisplay()">C</button>
</div>

<script>
let display = document.getElementById('display');
let currentInput = '';
let operator = '';

function appendNumber(number) {
  currentInput += number;
  display.value = currentInput;
}

function appendOperator(op) {
  operator = op;
  currentInput += operator;
  display.value = currentInput;
}

function calculate() {
  let result = eval(currentInput);
  display.value = result;
}

function clearDisplay() {
  currentInput = '';
  operator = '';
  display.value = '';
}
</script>

</body>
</html>