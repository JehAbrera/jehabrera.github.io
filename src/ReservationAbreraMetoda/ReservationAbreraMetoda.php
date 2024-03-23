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
    <title>Reservation</title>
</head>

<body class=" bg-[url('hotelbg2.jpg')] bg-fixed bg-center bg-cover min-h-screen flex flex-col">
    <?php
    date_default_timezone_set('Asia/Manila');
    ?>
    <!-- Navigation Bar -->
    <nav id="nav" class=" z-50 fixed top-0 left-0 w-full flex flex-row justify-between">
        <div class=" flex justify-center items-center p-2">
            <span class=" py-1 px-2 flex justify-center items-center text-white text-xl font-bold"><ion-icon class=" text-3xl" name="bed"></ion-icon>&nbsp;PagodNa</span>
        </div>
        <div class=" flex flex-row text-white">
            <div onclick="location.href = 'HomeAbreraMetoda.php'" class=" h-full py-2 px-4 font-semibold flex justify-center items-center cursor-pointer hover:bg-rose-400 hover:bg-opacity-40">Home</div>
            <div onclick="location.href = 'ProfileAbreraMetoda.php'" class=" h-full py-2 px-4 font-semibold flex justify-center items-center cursor-pointer hover:bg-rose-400 hover:bg-opacity-40">About</div>
            <div onclick="location.href = 'ContactsAbreraMetoda.php'" class=" h-full py-2 px-4 font-semibold flex justify-center items-center cursor-pointer hover:bg-rose-400 hover:bg-opacity-40">Contacts</div>
            <div onclick="location.href = 'ReservationAbreraMetoda.php'" class=" h-full py-2 px-4 font-semibold text-orange-500 border-solid border-b-2 border-b-orange-500 flex justify-center items-center cursor-pointer hover:bg-rose-400 hover:bg-opacity-40">Reservation</div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class=" flex flex-col items-center justify-center pt-16 pb-2">
        <?php
        $name = "";
        $cont = "";
        $array = "";
        $rtype = "";
        $rcap = "";
        $pay = "";
        $start = "";
        $end = "";
        $days = 0;
        $subtotal = 0;
        $disc = 0;
        $total = 0;
        $msg = "";
        $rate = 0;
        $addchar = 0;
        $addtot = 0;
        $disctot = 0;
        $comp = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $cont = $_POST['phone'];
            $array = explode("-", $_POST['datetime']);
            $rtype = $_POST['type'];
            $rcap = $_POST['cap'];
            $pay = $_POST['payment'];
            $start = $_POST['start'];
            $end = $_POST['end'];
            $date1 = new DateTime($start);
            $date2 = new DateTime($end);
            if ($rtype == "None") {
                $msg = "* No selected room type";
            } else if ($rcap == "None") {
                $msg = "* No selected room capacity";
            } else if ($pay == "None") {
                $msg = "* No selected type of payment";
            } else if ($date1 > $date2) {
                $msg = "Invalid Date";
            } else {
                $days = ($date1->diff($date2))->days;
                $comp = true;
            }
        }

        ?>
        <?php
        if (isset($_POST['submit']) && $comp == true) { ?>
            <?php
            // For Rate
            switch ($rcap) {
                case 'Single':
                    switch ($rtype) {
                        case 'Regular':
                            $rate = 100.00;
                            break;
                        case 'Deluxe':
                            $rate = 300.00;
                            break;
                        case 'Suite':
                            $rate = 500.00;
                            break;
                    }
                    break;
                case 'Double':
                    switch ($rtype) {
                        case 'Regular':
                            $rate = 200.00;
                            break;
                        case 'Deluxe':
                            $rate = 500.00;
                            break;
                        case 'Suite':
                            $rate = 800.00;
                            break;
                    }
                    break;
                case 'Family':
                    switch ($rtype) {
                        case 'Regular':
                            $rate = 500.00;
                            break;
                        case 'Deluxe':
                            $rate = 750.00;
                            break;
                        case 'Suite':
                            $rate = 1000.00;
                            break;
                    }
                    break;
            }
            switch ($pay) {
                case 'Cash':
                    $addchar = 0;
                    if ($days >= 3 && $days <= 5) {
                        $disc = 0.10;
                    } elseif ($days >= 6) {
                        $disc = 0.15;
                    } else {
                        $disc = 0;
                    }
                    break;
                case 'Cheque':
                    $addchar = 0.05;
                    break;
                case 'Credit Card':
                    $addchar = 0.1;
                    break;
            }
            $subtotal = ($rate * $days);
            $addtot = $subtotal * $addchar;
            $disctot = $subtotal * $disc;
            $total = $subtotal + $addtot - $disctot;
            ?>
            <section class=" bg-gray-50 flex flex-row w-2/5 rounded-xl overflow-hidden">
                <div class=" w-full flex flex-col justify-stretch p-4 gap-4">
                    <div class=" flex flex-col items-center border-solid border-black border-b-2 pb-2">
                        <span class=" text-2xl font-bold">Receipt: Billing Information</span>
                        <span class=" text-xs">Thanks for choosing PagodNa as your relaxation partner.</span>
                    </div>
                    <div class=" flex flex-row justify-between text-xs mb-4">
                        <div>
                            <span>Registration Date:</span>
                            <span><strong><?php echo $array[0] ?></strong></span>
                        </div>
                        <div>
                            <span>Time:</span>
                            <span><strong><?php echo $array[1] ?></strong></span>
                        </div>
                    </div>
                    <div>
                        <span>Name:</span>
                        <span><strong><?php echo $name ?></strong></span>
                    </div>
                    <div>
                        <span>Contact:</span>
                        <span><strong><?php echo $cont ?></strong></span>
                    </div>
                    <div class=" w-full flex justify-center py-2 border-solid border-orange-600 border-2">Reservation Details</div>
                    <div class=" flex flex-row">
                        <div class=" flex-1 flex flex-col">
                            <span>From:</span>
                            <span><strong><?php echo date('F d, Y', strtotime($start)) ?></strong></span>
                        </div>
                        <div class=" flex-1 flex flex-col items-end">
                            <span>To:</span>
                            <span><strong><?php echo date('F d, Y', strtotime($end)) ?></strong></span>
                        </div>
                    </div>
                    <div class=" flex flex-row justify-between border-solid border-b-black border-b-2">
                        <div>
                            Room
                        </div>
                        <div>
                            Payement
                        </div>
                    </div>
                    <div class=" flex flex-row justify-between">
                        <div class=" flex flex-col">
                            <span>Type: <strong><?php echo $rtype ?></strong></span>
                            <span>Capacity: <strong><?php echo $rcap ?></strong></span>
                        </div>
                        <div class=" bg-green-300 px-2 flex justify-center items-center">
                            <span><?php echo $pay ?></span>
                        </div>
                    </div>
                    <div class=" w-full flex justify-center py-2 border-solid border-orange-600 border-2">
                        <span>Billing Statements:</span>
                    </div>
                    <div class=" flex flex-row justify-between">
                        <span>Number of days:</span>
                        <span><strong><?php echo $days ?></strong></span>
                    </div>
                    <div class=" flex flex-row justify-between">
                        <span>Subtotal:</span>
                        <span><strong><?php echo number_format($subtotal, 2, '.', ',') ?></strong></span>
                    </div>
                    <div class=" flex flex-row justify-between">
                        <span>Discount</span>
                        <span><strong><?php echo number_format($disctot, 2, '.', ',') ?></strong></span>
                    </div>
                    <div class=" flex flex-row justify-between">
                        <span>Additional Charges</span>
                        <span><strong><?php echo number_format($addtot, 2, '.', ',') ?></strong></span>
                    </div>
                    <div class=" flex flex-row justify-between bg-black p-2 text-white">
                        <span><strong>Total Bill:</strong></span>
                        <span><strong><?php echo number_format($total, 2, '.', ',') ?></strong></span>
                    </div>
                    <div class=" flex justify-end gap-6">
                        <button onclick="location.href = 'ReservationAbreraMetoda.php'" class=" bg-blue-400 py-2 px-4">Back</button>
                        <button onclick="location.href = 'HomeAbreraMetoda.php'" class=" bg-blue-400 py-2 px-4">Home</button>
                    </div>
                </div>
            </section>
        <?php } else { ?>
            <section class=" bg-gray-50 flex flex-row w-4/5 rounded-xl overflow-hidden">
                <div class=" flex-1 flex justify-center items-center bg-[url('hotelbg3.jpg')] bg-center bg-cover">
                    <span class=" font-bold text-white text-4xl">Book with us now!</span>
                </div>
                <div class=" flex-[2]">
                    <form class=" w-full p-4 flex flex-col items-stretch gap-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class=" w-1/2 flex self-end mb-4">
                            <input class=" w-full py-2 px-4 bg-inherit border-solid border-green-600 border-b-2 focus:outline-none" type="text" name="datetime" value="<?php echo date('F d, Y - h:i a') ?>" id="" readonly>
                        </div>
                        <div class=" font-bold text-xl py-2 border-solid border-black border-b-2">
                            <span>Customer Info:</span>
                        </div>
                        <div class=" flex flex-row">
                            <span class=" flex-1">Name:</span>
                            <input class=" flex-[2] py-2 px-4 outline outline-black outline-1" type="text" value="<?php echo $name ?>" name="name" id="" required>
                        </div>
                        <div class=" flex flex-row">
                            <span class=" flex-1">Contact Number:</span>
                            <input class=" flex-[2] py-2 px-4 outline outline-black outline-1" type="text" pattern="09+[0-9]{9}" value="<?php echo $cont ?>" name="phone" id="" inputmode="numeric" required>
                        </div>
                        <div class=" font-bold text-xl py-2 border-solid border-black border-b-2">
                            <span>Reservation Date:</span>
                        </div>
                        <div class=" flex flex-row gap-8">
                            <span class=" flex-1">From:</span>
                            <span class=" flex-1">To:</span>
                        </div>
                        <div class=" flex flex-row gap-8">
                            <input class=" flex-1 p-2 outline outline-black outline-1" type="date" name="start" id="" required>
                            <input class=" flex-1 p-2 outline outline-black outline-1" type="date" name="end" id="" required>
                        </div>
                        <div class=" flex flex-row gap-4">
                            <span class=" flex-1">Room Type:</span>
                            <span class=" flex-1">Room Capacity:</span>
                            <span class=" flex-1">Payment Type:</span>
                        </div>
                        <div class=" flex flex-row gap-4">
                            <select class=" flex-1 p-2 outline outline-black outline-1" name="type" id="">
                                <option value="None" selected>Select</option>
                                <option value="Suite">Suite</option>
                                <option value="Deluxe">Deluxe</option>
                                <option value="Regular">Regular</option>
                            </select>
                            <select class=" flex-1 p-2 outline outline-black outline-1" name="cap" id="">
                                <option value="None" selected>Select</option>
                                <option value="Family">Family</option>
                                <option value="Double">Double</option>
                                <option value="Single">Single</option>
                            </select>
                            <select class=" flex-1 p-2 outline outline-black outline-1" name="payment" id="">
                                <option value="None" selected>Select</option>
                                <option value="Cash">Cash</option>
                                <option value="Cheque">Cheque</option>
                                <option value="Credit Card">Credit Card</option>
                            </select>
                        </div>
                        <div>
                            <span class=" text-xs text-red-600"><?php echo $msg ?></span>
                        </div>
                        <div class=" flex flex-row-reverse w-fit gap-6 self-end">
                            <button class=" py-2 px-4 bg-green-400 hover:bg-green-700 hover:text-white" type="submit" name="submit">Submit Reservation</button>
                            <button class=" text-red-600 hover:underline" type="reset">Clear Form</button>
                        </div>
                    </form>
                </div>
            </section>
        <?php }
        ?>
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbar = document.querySelector('#nav');
            console.log(navbar);
            window.onscroll = () => {
                if (window.scrollY > 20) {
                    navbar.classList.add('bg-slate-950');
                } else {
                    navbar.classList.remove('bg-slate-950');
                }
            };
        });
    </script>
</body>

</html>