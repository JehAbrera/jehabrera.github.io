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
    //Script name: SampleOutput_2.php
    //Output from SampleInput_2.php
    //if(ctype_alpha(str_replace(" ", "",$_POST['txtName']))) //Letters A-Z,a-z and white spaces are accepted
    //$name = $_POST['txtName'];
    if (ctype_alpha($_POST['txtName'])) //Letters A-Z and a-z are accepted
        $name = $_POST['txtName'];
    elseif (!ctype_alpha($_POST['txtName']))
        $name = "type letters a-z only";

    if (ctype_digit($_POST['txtAge'])) // Only integers or whole number is accepted
        $age = $_POST['txtAge'];
    elseif (!ctype_digit($_POST['txtAge']))
        $age = "type numbers 0-9 only";

    if (empty($_POST['txtPhone'])) // Will test if the textbox is empty value
        $phone = "phone number is empty";
    elseif (is_string($_POST['txtPhone'])) // Will accept string values (any characters) 
        $phone = $_POST['txtPhone'];

    if (is_numeric($_POST['txtBill'])) // Only numbers are accepted (integer/floating point)
        $bill = $_POST['txtBill'];
    elseif (!is_numeric($_POST['txtBill']))
        $bill = "letters and special characters are not allowed";
    ?>

    <div class=" w-2/5 h-fit p-6 flex flex-col items-center bg-gray-300 rounded-xl">
        <div class=" font-extrabold text-2xl w-fit mb-5 border-b-2 border-solid border-slate-900">OUTPUT WITH VALIDATION</div>
        <div class=" w-full flex gap-4 my-4"><span class=" py-1 flex-1 text-right">Name:</span><span class=" py-1 px-2 flex-2 text-left bg-gray-400"><?php echo $name ?></span></div>
        <div class=" w-full flex gap-4 my-4"><span class=" py-1 flex-1 text-right">Age:</span><span class=" py-1 px-2 flex-2 text-left bg-gray-400"><?php echo $age ?></span></div>
        <div class=" w-full flex gap-4 my-4"><span class=" py-1 flex-1 text-right">Phone:</span><span class=" py-1 px-2 flex-2 text-left bg-gray-400"><?php echo $phone ?></span></div>
        <div class=" w-full flex gap-4 my-4"><span class=" py-1 flex-1 text-right">Bill:</span><span class=" py-1 px-2 flex-2 text-left bg-gray-400"><?php echo $bill ?></span></div>
        <button class=" py-2 px-4 mt-4 rounded-full bg-blue-300 hover:bg-blue-600" onclick="location.href = 'SampleInput_2.php'">Back</button>
    </div>
</body>

</html>