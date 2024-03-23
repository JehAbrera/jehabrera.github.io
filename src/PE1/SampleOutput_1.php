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
    <title>Sample Output</title>
</head>

<body class="w-screen min-h-screen flex content-center justify-center py-10 bg-slate-900">
    <?php
    //Sample Scripts
    //Script name: SampleOutput_1.php
    //Output #1: Without input validation

    ?>

    <div class=" w-2/5 h-fit p-6 flex flex-col items-center bg-gray-300 rounded-xl">
        <div class=" font-extrabold text-2xl w-fit mb-5 border-b-2 border-solid border-slate-900">OUTPUT WITHOUT VALIDATION</div>
        <div class=" w-full flex gap-4 my-4"><span class=" py-1 flex-1 text-right">Name:</span><span class=" py-1 px-2 flex-2 text-left bg-gray-400"><?php echo $_POST['txtName'] ?></span></div>
        <div class=" w-full flex gap-4 my-4"><span class=" py-1 flex-1 text-right">Age:</span><span class=" py-1 px-2 flex-2 text-left bg-gray-400"><?php echo $_POST['txtAge'] ?></span></div>
        <div class=" w-full flex gap-4 my-4"><span class=" py-1 flex-1 text-right">Phone:</span><span class=" py-1 px-2 flex-2 text-left bg-gray-400"><?php echo $_POST['txtPhone'] ?></span></div>
        <div class=" w-full flex gap-4 my-4"><span class=" py-1 flex-1 text-right">Bill:</span><span class=" py-1 px-2 flex-2 text-left bg-gray-400"><?php echo $_POST['txtBill'] ?></span></div>
        <button class=" py-2 px-4 mt-4 rounded-full bg-blue-300 hover:bg-blue-600" onclick="location.href = 'SampleInput_1.php'">Back</button>
    </div>
</body>

</html>