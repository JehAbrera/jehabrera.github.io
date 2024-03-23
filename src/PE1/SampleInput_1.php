<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../output.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            font-family: "Poppins", sans-serif;
        }
    </style>
    <title>Sample Input</title>
</head>

<body class="w-screen min-h-screen flex content-center justify-center py-10 bg-slate-900">
    <?php
    //Sample Scripts
    //Script name: SampleInput_1.php

    //Sample Scripts without input validation
    ?>

    <div class=" w-2/5 h-fit py-6 flex flex-col items-center bg-gray-300 rounded-xl">
        <div class=" font-extrabold text-2xl w-fit mb-5 border-b-2 border-solid border-slate-900">DATA ENTRY</div>
        <form class=" w-full px-10 flex flex-col" action=SampleOutput_1.php method=post>
            <div class=" flex justify-center gap-4 my-4"><span class=" py-1 flex-1 text-right">Enter your name:</span><input class=" flex-1 outline outline-1 p-1" type=text name=txtName /></div>
            <div class=" flex justify-center gap-4 my-4"><span class=" py-1 flex-1 text-right">Enter your age:</span><input class=" flex-1 outline outline-1 p-1" type=text name=txtAge /></div>
            <div class=" flex justify-center gap-4 my-4"><span class=" py-1 flex-1 text-right">Enter your phone number:</span><input class=" flex-1 outline outline-1 p-1" type=text name=txtPhone></div>
            <div class=" flex justify-center gap-4 my-4"><span class=" py-1 flex-1 text-right">Enter your bill:</span><input class=" flex-1 outline outline-1 p-1" type=text name=txtBill></div>

            <div class=" flex justify-center gap-6 mt-10">
                <button class=" px-4 py-2 bg-green-400 rounded-full hover:bg-green-600 hover:text-gray-100" type=submit name=btnSubmit>Submit</button>
                <button class=" px-4 py-2 text-red-600 hover:underline" type=reset>Reset</button>
            </div>
        </form>
    </div>
</body>

</html>