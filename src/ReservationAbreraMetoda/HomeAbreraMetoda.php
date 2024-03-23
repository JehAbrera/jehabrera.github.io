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
    <title>Home</title>
</head>

<body class=" bg-[url('hotelbg2.jpg')] bg-fixed bg-center bg-cover min-h-screen flex flex-col">
    <!-- Navigation Bar -->
    <nav class=" z-50 fixed top-0 left-0 w-full flex flex-row justify-between">
        <div class=" flex justify-center items-center p-2">
            <span class=" py-1 px-2 flex justify-center items-center text-white text-xl font-bold"><ion-icon class=" text-3xl" name="bed"></ion-icon>&nbsp;PagodNa</span>
        </div>
        <div class=" flex flex-row text-white">
            <div onclick="location.href = 'HomeAbreraMetoda.php'" class=" h-full py-2 px-4 font-semibold text-orange-500 border-solid border-b-2 border-b-orange-500 flex justify-center items-center cursor-pointer hover:bg-rose-400 hover:bg-opacity-40">Home</div>
            <div onclick="location.href = 'ProfileAbreraMetoda.php'" class=" h-full py-2 px-4 font-semibold flex justify-center items-center cursor-pointer hover:bg-rose-400 hover:bg-opacity-40">About</div>
            <div onclick="location.href = 'ContactsAbreraMetoda.php'" class=" h-full py-2 px-4 font-semibold flex justify-center items-center cursor-pointer hover:bg-rose-400 hover:bg-opacity-40">Contacts</div>
            <div onclick="location.href = 'ReservationAbreraMetoda.php'" class=" h-full py-2 px-4 font-semibold flex justify-center items-center cursor-pointer hover:bg-rose-400 hover:bg-opacity-40">Reservation</div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <section class=" h-screen w-full flex flex-col justify-center items-center">
            <div class=" text-white">When the world drains you</div>
            <div class=" font-bold text-white text-5xl">Welcome to PagodNa</div>
            <div class=" text-white">We will be your rest</div>
            <button onclick="location.href = 'ReservationAbreraMetoda.php'" class=" bg-transparent py-2 px-4 mt-4 border-solid border-2 border-orange-500 text-white hover:bg-orange-500">Book Now</button>
        </section>
    </main>
</body>

</html>