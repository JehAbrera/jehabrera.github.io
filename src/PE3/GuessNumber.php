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

    <div class=" w-3/12 h-fit py-6 px-4 flex flex-col items-center bg-gray-300 rounded-xl shadow-xl">
        <ion-icon class=" text-9xl text-blue-600 my-4 animate-bounce" name="dice-outline"></ion-icon>
        <span class=" font-extrabold text-xl"> Guess the Number Game </span>
        <form class=" mt-6 flex flex-col items-center" action="GuessOutput.php" method="post">
            <span>Think of a number from 1-10:</span>
            <input class=" w-20 h-12 mb-10 px-2 rounded-md" type="text" name="guess">
            <button class=" px-4 py-2 rounded-md bg-green-400 hover:bg-green-600 hover:text-white" type="submit">See If You Are Correct</button>
        </form>
    </div>

</body>

</html>