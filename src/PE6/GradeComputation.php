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
    <title>Grade Computation</title>
</head>

<body class=" w-full min-h-screen flex items-center justify-center p-2 bg-slate-600">
    <?php
    // declare variables
    $nameErr = $midErr = $finErr = "";
    $name = $midGrade = $finGrade = $semGrd = $remarks = $fontColor = "";
    $nameFlag = $midFlag = $finFlag = FALSE;

    // declare function named testInput
    function testInput($data)
    {
        $data = trim($data); // trim the text value
        $data = stripslashes($data); // removed slash
        $data = htmlspecialchars($data); // removed special characters like <,>,% and so on.
        return $data; // return the value of $data
    }

    // check if the method in form set as POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // check if name textfield is empty
        if (empty($_POST['txtName'])) {
            $nameErr = "Name is required.";
            $nameFlag = FALSE;
        } else {
            $name = testInput($_POST['txtName']);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z .]*$/", $name)) // same with this (!ctype_alpha($name))
            {
                $nameErr = "Only letters and white space allowed";
                $nameFlag = FALSE;
            }
        }

        if (!empty($name) && preg_match("/^[a-zA-Z .]*$/", $name))
            $nameFlag = TRUE;


        // check if midGrade textfield is empty
        if (empty($_POST['txtMid'])) {
            $midErr = "Midterm grade is required.";
            $midGradeFlag = FALSE;
        } else {
            $midGrade = testInput($_POST['txtMid']);
            // check if midterm Grade only contains numberss
            if (!is_numeric($midGrade)) {
                $midErr = "Only numbers are allowed.";
                $midGradeFlag = FALSE;
            } else
                             if (($midGrade < 50) || ($midGrade > 100)) {
                $midErr = "Midterm Grade must be between 50 - 100 only.";
                $midGradeFlag = FALSE;
            }
        }

        if (!empty($midGrade) && is_numeric($midGrade) && (($midGrade >= 50) && ($midGrade <= 100)))
            $midGradeFlag = TRUE;

        // check if finGrade textfield is empty
        if (empty($_POST['txtFin'])) {
            $finErr = "Final grade is required.";
            $finGradeFlag = FALSE;
        } else {
            $finGrade = testInput($_POST['txtFin']);
            // check if final grade only contains numbers
            if (!is_numeric($finGrade)) {
                $finErr = "Only numbers are allowed.";
                $finGradeFlag = FALSE;
            } else if (($finGrade < 50) || ($finGrade > 100)) {
                $finErr = "Final Grade must be between 50 - 100 only.";
                $finGradeFlag = FALSE;
            }
        }
        if (!empty($finGrade) && is_numeric($finGrade) && (($finGrade >= 50) && ($finGrade <= 100)))
            $finGradeFlag = TRUE;

        //compute for the semGrade
        if (($nameFlag == TRUE) && ($midGradeFlag == TRUE) && ($finGradeFlag == TRUE)) {
            $semGrd = ($midGrade + $finGrade) / 2;

            //determine remarks
            if ($semGrd >= 74.5)
                $remarks = "Passed";
            else
                $remarks = "Failed";
        }
    }
    ?>
    <div class=" w-2/5 flex flex-col rounded-xl bg-white overflow-hidden">
        <div class=" w-full flex justify-center py-6 bg-slate-950">
            <span class=" px-4 py-2 flex items-center border-solid border-2 border-orange-600 text-orange-600 text-2xl"><ion-icon class=" text-4xl" name="calculator-outline"></ion-icon>GRADE COMPUTATION </span>
        </div>
        <form class=" w-full px-4 py-6 flex flex-col" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <small class=" w-fit text-red-600 block px-4 py-2 border-solid border-2 border-red-600 mb-6"> (*) - required field.</small>
            <div class=" grid grid-cols-3 p-1">Student Name: <input class=" outline outline-1 p-1" type="textbox" name="txtName" value="<?php echo $name; ?>"><span class=" text-red-600">&nbsp;*</span></div>
            <small class=" text-red-600 mb-4"><?php echo $nameErr; ?> </small>
            <div class=" grid grid-cols-3 p-1">Midterm Grade: <input class=" outline outline-1 p-1" type="textbox" name="txtMid" value="<?php echo $midGrade; ?>"><span class=" text-red-600">&nbsp;*</span></div>
            <small class=" text-red-600 mb-4"><?php echo $midErr; ?> </small>
            <div class=" grid grid-cols-3 p-1">Final Grade: <input class=" outline outline-1 p-1" type="textbox" name="txtFin" value="<?php echo $finGrade; ?>"><span class=" text-red-600">&nbsp;*</span></div>
            <small class=" text-red-600 mb-4"><?php echo $finErr; ?> </small>
            <div class=" flex flex-row-reverse justify-center gap-5">
                <button class=" py-2 px-4 bg-green-400 rounded-md w-fit" type="submit" name="btnCompute">Compute</button>
                <button class=" text-red-600 underline" onclick="location.href ='GradeComputation.php'" type="button">Reset</button>
            </div>
        </form>

        <div class=" flex flex-col">
            <?php
            if (isset($_POST['btnCompute']) && ($nameFlag == TRUE) && ($midGradeFlag == TRUE) && ($finGradeFlag == TRUE)) { ?>
                <div class=" flex justify-center py-2 bg-slate-950">
                    <span class=" text-lg font-bold text-white py-1 border-b-2 border-white">GRADE INFORMATION</span>
                </div>
                <div class=" flex flex-col gap-1 px-6">
                    <div class=" flex justify-between">
                        <span>Student Name:</span>
                        <span><strong><?php echo $name ?></strong></span>
                    </div>
                    <div class=" flex justify-between">
                        <span>Midterm Grade:</span>
                        <span><strong><?php echo $midGrade ?></strong></span>
                    </div>
                    <div class=" flex justify-between">
                        <span>Final Grade:</span>
                        <span><strong><?php echo $finGrade ?></strong></span>
                    </div>
                    <div class=" flex justify-between">
                        <span>Semestral Grade:</span>
                        <span><strong><?php echo round($semGrd, 2) ?></strong></span>
                    </div>
                    <div class=" flex justify-between">
                        <span>Remarks:</span>
                        <?php
                        if ($semGrd <= 74)
                            echo "<span class=' text-red-600'><strong>$remarks</strong></span>";
                        else
                            echo "<span><strong>$remarks</strong></span>";
                        ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>