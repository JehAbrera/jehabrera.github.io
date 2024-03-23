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
    <title>Use of Input Types Form Tag in PHP</title>
</head>

<body class="w-full min-h-screen flex items-center justify-center px-10 py-6 bg-slate-600">
    <div class=" w-full h-fit py-6 px-4 flex flex-col items-start bg-white rounded-xl shadow-xl">
        <?php

        $name = $_POST['txtName'];
        $age =  $_POST['txtAge'];
        $course = $_POST['txtCourse'];
        $rdo = $_POST['rdo'];
        $job = $_POST['cboJob'];
        $comments = $_POST['txtaComments'];
        ?>

        <div>
            <span class=" font-bold text-sm">OUTPUTS From</span>
        </div>
        <div class=" flex flex-row gap-6 px-2 py-4 border-b-2 border-black w-full mb-8 items-center">
            <div class=" flex flex-col">
                <div><span class=" text-xl">Hi </span><span class=" text-4xl font-bold"><?php echo $name ?></span></div>
                <div>You are <strong><?php echo $age ?></strong> years old.</div>
                <div>Your course is <strong><?php echo $course ?></strong></div>
            </div>
            <div>
                <div class=" p-1 border-solid border-green-500 border-2 text-green-500 text-xs">TextField</div>
            </div>
        </div>

        <div class=" w-full flex flex-row gap-4">
            <div class=" flex flex-1 flex-col p-4 bg-gray-100 rounded-lg">
                <div class=" mb-4">
                    <span class=" p-1 border-solid border-green-500 border-2 text-green-500 text-xs">Checkbox</span>
                </div>
                <div class=" mb-8">
                    <span>

                        Checkbox status:
                        <strong>
                            <?php
                            if (isset($_POST['chkYes']))
                                echo $_POST['chkYes'];
                            else
                                echo "Off";
                            ?>
                        </strong>
                    </span>
                </div>
                <div class=" mb-4">
                    <span class=" p-1 border-solid border-green-500 border-2 text-green-500 text-xs">Multiple Checkboxes</span>
                </div>
                <div class=" mb-8 flex flex-col">
                    <span>Your favorite computer subject/s is/are:</span>
                    <?php
                    if (isset($_POST['chkCP'])) { ?>
                        <span><?php echo $_POST['chkCP'] ?></span>
                    <?php }
                    ?>
                    <?php
                    if (isset($_POST['chkCG'])) { ?>
                        <span><?php echo $_POST['chkCG'] ?></span>
                    <?php }
                    ?>
                    <?php
                    if (isset($_POST['chkWBA'])) { ?>
                        <span><?php echo $_POST['chkWBA'] ?></span>
                    <?php }
                    ?>
                </div>
                <div class=" mb-4">
                    <span class=" p-1 border-solid border-green-500 border-2 text-green-500 text-xs">Radio Button</span>
                </div>
                <div class=" mb-8">
                    <span>You selected <strong class=" text-lg"><?php echo $rdo ?></strong></span>
                </div>
            </div>
            <div class=" flex flex-1 flex-col p-4">
                <div class=" mb-4">
                    <span class=" p-1 border-solid border-green-500 border-2 text-green-500 text-xs">Combo Box</span>
                </div>
                <div class=" mb-8">
                    <span>You prefer to be a: <strong class=" text-lg"><?php echo $job ?></strong></span>
                </div>
                <div class=" mb-4">
                    <span class=" p-1 border-solid border-green-500 border-2 text-green-500 text-xs">List Box</span>
                </div>
                <div class=" mb-8">
                    <span>You prefered a thesis title like:</span>
                    <span>
                        <strong class=" text-lg">
                            <?php
                            if (isset($_POST['lstThesisTitle']))
                                echo $_POST['lstThesisTitle'];
                            else
                                echo "NONE";
                            ?>
                        </strong>
                    </span>
                </div>
                <div class=" mb-4">
                    <span class=" p-1 border-solid border-green-500 border-2 text-green-500 text-xs">Textarea</span>
                </div>
                <div class=" mb-8 py-2 px-4 outline outline-1">
                    <span><?php echo $comments ?></span>
                </div>
                <button class=" w-fit py-2 px-4 bg-blue-300 self-center rounded-md" onclick=" location.href = 'InputTypes.php'">Back</button>
            </div>
        </div>
    </div>
</body>

</html>