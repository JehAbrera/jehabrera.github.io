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
    <title>PAPSI Holidays</title>
</head>

<body class=" w-full min-h-screen flex items-center justify-center p-4 bg-slate-600">
    <div class=" flex flex-col bg-white overflow-hidden rounded-xl">
        <div class=" flex justify-center py-4 bg-slate-950">
            <span class=" font-extrabold text-2xl text-orange-600 text-left w-fit"><ion-icon class=" text-xl" name="briefcase-outline"></ion-icon>&nbsp;PAPSI Holidays</span>
        </div>
        <?php
        $price = 500;
        $hotelmodifier = 1;
        $placemodifier = 1;
        $hotel = $_POST['rdoHotel'];
        $destination = $_POST['rdoDestination'];
        $hasMSG = false;

        if ($hotel == "three") {
            if ($destination == "HongKong") {
                $hotelmodifier = 2;
                $price = $price * $placemodifier;
                $hasMSG = true;
            } else if ($destination == "Singapore") {
                $hotelmodifier = 3.5;
                $price = $price * $placemodifier;
                $hasMSG = true;
            } else if ($destination == "Malaysia") {
                $price = $price * $placemodifier;
                $hasMSG = true;
            } else {
                $hasMSG = false;
            }
        } else if ($hotel == "five") {
            if ($destination == "HongKong") {
                $hotelmodifier = 2.5;
                $price = $price * $placemodifier * $hotelmodifier;
                $hasMSG = true;
            } else if ($destination == "Singapore") {
                $hotelmodifier = 4;
                $price = $price * $placemodifier * $hotelmodifier;
                $hasMSG = true;
            } else if ($destination == "Malaysia") {
                $price = $price * $placemodifier * $hotelmodifier;
                $hasMSG = true;
            } else {
                $hasMSG = false;
            }
        } else {
            $hasMSG = false;
        }
        ?>
        <div class=" flex flex-col px-4 py-6 items-center">
            <span class=" font-bold text-xl mb-8 block py-1 border-b-2 border-slate-900"> Reservation Form </span>
            <div class=" flex flex-col items-center gap-1">
                <?php
                if ($hasMSG) { ?>
                    <ion-icon class=" text-green-400 text-8xl animate-pulse" name="checkmark-done-circle-outline"></ion-icon>
                    <span class=" text-center text-green-400">Your reservation has been saved.</span>
                    <span class=" text-center text-lg">Your one-week holiday at <strong><?php echo $destination ?></strong> costs <strong><?php echo "\$" . $price ?></strong>.</span>
                    <span class=" text-center text-xs">Thank you for choosing PAPSI Holidays! Enjoy!</span>
                <?php } else { ?>
                    <ion-icon class=" text-red-600 text-8xl animate-spin" name="close-circle-outline"></ion-icon>
                    <span class=" text-center"><strong>Sorry, you have made an invalid entry.</strong></span>
                <?php }
                ?>
            </div>
            <button class=" w-fit py-2 px-4 bg-blue-300 self-center rounded-md mt-6" onclick="location.href ='Holidays.html'">Back</button>
        </div>
    </div>
</body>

</html>