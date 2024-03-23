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

<body class=" w-full min-h-screen flex items-center justify-center p-4 bg-slate-800">

    <div class=" w-full h-fit flex flex-col items-center">
        <form class=" w-full flex flex-row justify-between gap-6" action="InputTypes_Output.php" method="post">
            <div class=" flex flex-1 flex-col px-2 py-6 bg-gray-300 rounded-md gap-6">
                <div class=" font-bold text-2xl"><ion-icon name="newspaper"></ion-icon>&nbsp;Input Types</div>
                <div class=" font-bold text-xl">TextFields</div>
                <div class=" flex flex-col gap-2">
                    <div>Enter Your Name:</div>
                    <input class=" outline outline-1 py-1 px-2" type="text" name="txtName" placeholder="Last, First Middle">
                </div>
                <div class=" flex flex-col gap-2">
                    <div>Enter Your Age:</div>
                    <input class=" outline outline-1 py-1 px-2" type="text" name="txtAge">
                </div>
                <div class=" flex flex-col gap-2">
                    <div>Enter Your course:</div>
                    <input class=" outline outline-1 py-1 px-2" type="text" name="txtCourse">
                </div>
            </div>

            <div class=" flex flex-1 flex-col px-2 py-6 bg-gray-300 rounded-md gap-6">
                <div class=" font-bold text-xl"> Checkbox </div>
                <div>
                    <div>Are you an officer of COMSOC?</div>
                    <div><input type="checkbox" name="chkYes"> Yes</div>
                </div>

                <div class=" font-bold text-xl"> Multiple Checkboxes </div>
                <div class=" flex flex-col">
                    <div>What is/are your favorite computer subject/s:</div>
                    <div class=" flex flex-col">
                        <div><input type="checkbox" name="chkCP" value="Computer Programming"> Computer Programming</div>
                        <div><input type="checkbox" name="chkCG" value="Computer Graphics"> Computer Graphics</div>
                        <div><input type="checkbox" name="chkWBA" value="Web Based Application"> Web Based Application</div>
                    </div>
                </div>

                <div class=" font-bold text-xl"> Radio Buttons </div>
                <div class=" flex flex-col">
                    <div>Which do you prefer most?</div>
                    <div class=" flex flex-col">
                        <div><input type="radio" name="rdo" value="Microsoft" checked="TRUE"> Microsoft</div>
                        <div><input type="radio" name="rdo" value="Open Source"> Open Source</div>
                        <div><input type="radio" name="rdo" value="No comment"> No comment</div>
                    </div>
                </div>
            </div>

            <div class=" flex flex-1 flex-col px-2 py-6 bg-gray-300 rounded-md gap-6">
                <div class=" font-bold text-xl"> Combo Boxes </div>
                <div>What job do you prefer after graduation?</div>
                <select class=" py-1 px-2" name="cboJob">
                    <option> Call Center Agent </option>
                    <option> Programmer / Analyst </option>
                    <option> Office Employee </option>
                    <option> Computer Instructor </option>
                </select>

                <div class=" font-bold text-xl"> List Boxes </div>
                <div>Which do you prefer for a thesis topic/title?</div>
                <select name="lstThesisTitle" multiple>
                    <option class=" py-1 px-2"> Web Based/On-Line Application </option>
                    <option class=" py-1 px-2"> Network-Based Application </option>
                    <option class=" py-1 px-2"> System/Software Development </option>
                    <option class=" py-1 px-2"> Computer Aided Instruction </option>
                </select>
            </div>

            <div class=" flex flex-1 flex-col px-2 py-6 bg-gray-300 rounded-md gap-6">
                <div class=" font-bold text-xl"> TextArea </div>
                <div>Enter comments here:</div>
                <textarea class=" outline outline-1" name="txtaComments" rows="5"> </textarea>
                <div class=" flex flex-col items-center gap-4">
                    <button class=" bg-green-400 px-4 py-2 rounded w-fit" type="submit" value="See Results">See Results</button>
                    <button class=" text-red-600 hover:underline" type="reset" value="Clear">Clear</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>