<!-- Q1
Create a form  with email and password, 
in the action page you will determine if the data is sent by GET or POST -->

<form action="index.php" method="post">
    E-mail: <input type="text" name="email"><br>
    password: <input type="password" name="pass"><br>
    <input type="submit">
</form>
<?php
if (isset($_POST["email"]) && isset($_POST["pass"])) {
    echo  "Your email address is : " . $_POST["email"] . "<br>";
    echo  "Your password  is : " . $_POST["pass"] . "<br>";
}
?>


<!-- Q2
Make a Calculator that contains Basic Mathematical operations(+,-,*,/)
 -->
 <!DOCTYPE html>

<head>
    <title> simple calculator
    </title>
</head>
<?php
    $CalculatorResult = "";
if(isset($_POST['FirstNumber']) || isset($_POST['SecondNumber']) || isset($_POST['operator'])){
    $FirstNumber = $_POST['FirstNumber'];
    $SecondNumber = $_POST['SecondNumber'];
    $operator = $_POST['operator'];

if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {

    switch ($operator) {
        case "Sum":
            $CalculatorResult = $FirstNumber + $SecondNumber;
            break;
        case "Subtraction":
            $CalculatorResult = $FirstNumber - $SecondNumber;
            break;
        case "Multiplication":
            $CalculatorResult = $FirstNumber * $SecondNumber;
            break;
        case "Division":
            $CalculatorResult = $FirstNumber / $SecondNumber;
    }
}
}
?>

<body>
    <div id="page-wrap">
        <h1>PHP - Simple Calculator Program</h1>
        <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="FirstNumber" id="FirstNumber" required="required" value="<?php echo $FirstNumber  ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="SecondNumber" id="SecondNumber" required="required" value="<?php echo $SecondNumber; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="CalculatorResult" value="<?php echo $CalculatorResult; ?>"> <b>CalculatorResult</b>
            </p>
            <input type="submit" name="operator" value="Sum" />
            <input type="submit" name="operator" value="Subtraction" />
            <input type="submit" name="operator" value="Multiplication" />
            <input type="submit" name="operator" value="Division" />
        </form>
    </div>
</body>

</html>



<!-- #Q3
Extra:
Create a To-Do List Page. -->


    <div>
        <h1>TO DO LIST</h1>
        <form action="index.php" method="post" id="form">
            <p>
                <input type="text" name="text"> 
                <input  type="submit" value ="add">
            </p>
        </form>
    </div>

<?php
session_start();

 if(!isset($_POST["text"])){ $_SESSION['text']="";}
if(isset($_POST["text"])){

        $_SESSION['text'] .= $_POST["text"]."<br>";
  
    print_r  ( $_SESSION['text']); 
}
?>


