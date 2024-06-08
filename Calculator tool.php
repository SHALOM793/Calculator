<?php
// PHP script to handle calculator operations

// Function to perform addition
function add($num1, $num2) {
  return $num1 + $num2;
}

// Function to perform subtraction
function subtract($num1, $num2) {
  return $num1 - $num2;
}

// Function to perform multiplication
function multiply($num1, $num2) {
  return $num1 * $num2;
}

// Function to perform division
function divide($num1, $num2) {
  if ($num2 == 0) {
    return "Error: Division by zero!";
  } else {
    return $num1 / $num2;
  }
}

// Function to calculate percentage
function percentage($num1, $num2) {
  return ($num1 / 100) * $num2;
}

// Function to calculate square root
function sqrt($num) {
  return sqrt($num);
}

// Function to calculate logarithm
function log($num) {
  return log($num);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $operator = $_POST["operator"];

  switch ($operator) {
    case "+":
      $result = add($num1, $num2);
      break;
    case "-":
      $result = subtract($num1, $num2);
      break;
    case "*":
      $result = multiply($num1, $num2);
      break;
    case "/":
      $result = divide($num1, $num2);
      break;
    case "%":
      $result = percentage($num1, $num2);
      break;
    case "sqrt":
      $result = sqrt($num1);
      break;
    case "log":
      $result = log($num1);
      break;
    default:
      $result = "Error: Invalid operator!";
  }
}
?>

<!-- HTML and CSS for the calculator interface -->
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
    <form method="post">
      <input type="text" id="num1" name="num1" placeholder="Number 1">
      <input type="text" id="num2" name="num2" placeholder="Number 2">
      <select id="operator" name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
        <option value="sqrt">√</option>
        <option value="log">log</option>
      </select>
      <button type="submit">Calculate</button>
      <p>Result: <?php echo $result;?></p>
    </form>
  </div>
</body>
</html>