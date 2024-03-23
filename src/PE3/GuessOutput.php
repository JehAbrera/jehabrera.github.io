<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../output.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            font-family: "Poppins", sans-serif;
        }
    </style>
    <title>Use of Decision Statements in PHP</title>
</head>

<body class="w-screen min-h-screen flex items-center justify-center py-10 bg-slate-900">
    <?php
    //Script name: GuessNumber.php
    $guess = $_POST['guess'];
    $msg = "";
    $num = rand(1, 10); //or you can set the value for the number, e.g. 
    //$num = 5;
    if ($guess > $num) {
        $msg = "Your guess is too high.";
    }
    if ($guess < $num) {
        $msg = "Your guess is too low.";
    }
    if ($guess == $num) {
        $msg = "You're Right!";
    }
    ?>
    <div class=" w-3/12 h-fit py-6 px-4 flex flex-col items-center bg-gray-300 rounded-xl shadow-xl">
        <div class=" font-extrabold text-xl mb-6"> Guess the Number Game </div>
        <span>The Number Is</span>
        <span class=" font-extrabold text-9xl my-4"><?php echo $num ?></span>
        <span><?php echo $msg ?></span>
        <button class=" px-4 py-2 rounded-md bg-blue-400 mt-4 hover:bg-blue-600 hover:text-white" type="button" onclick="location.href = 'GuessNumber.php'">Back</button>
    </div>
</body>

</html>