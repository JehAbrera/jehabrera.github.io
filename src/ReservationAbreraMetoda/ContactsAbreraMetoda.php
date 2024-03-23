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
            <div onclick="location.href = 'HomeAbreraMetoda.php'" class=" h-full py-2 px-4 font-semibold flex justify-center items-center cursor-pointer hover:bg-rose-400 hover:bg-opacity-40">Home</div>
            <div onclick="location.href = 'ProfileAbreraMetoda.php'" class=" h-full py-2 px-4 font-semibold flex justify-center items-center cursor-pointer hover:bg-rose-400 hover:bg-opacity-40">About</div>
            <div onclick="location.href = 'ContactsAbreraMetoda.php'" class=" h-full py-2 px-4 font-semibold text-orange-500 border-solid border-b-2 border-b-orange-500 flex justify-center items-center cursor-pointer hover:bg-rose-400 hover:bg-opacity-40">Contacts</div>
            <div onclick="location.href = 'ReservationAbreraMetoda.php'" class=" h-full py-2 px-4 font-semibold flex justify-center items-center cursor-pointer hover:bg-rose-400 hover:bg-opacity-40">Reservation</div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class=" flex flex-col items-stretch">
        <section class=" min-h-screen flex flex-row gap-12 justify-center items-center pt-16">
            <div class=" w-5/12 flex flex-col items-center text-white">
                <span class=" font-bold text-4xl py-2 border-b-2 border-solid border-b-white">Get in touch</span>
                <span class=" text-center">We'd like to hear from you. Share with us your experience, comments, and suggestions to make our service better than ever</span>
            </div>
            <div class=" w-5/12 flex flex-col items-center gap-12">
                <div class=" min-h-48 flex flex-col items-center justify-center text-white bg-orange-400 bg-opacity-50 rounded-lg p-4">
                    <ion-icon class=" text-4xl mb-4" name="call"></ion-icon>
                    <span class=" text-center">Give us a call anytime and anywhere. We want to here what you want to say, so don't hesitate to reach out with our 24/7 call support.</span>
                    <span class=" text-blue-500 underline underline-offset-4">(+63)921-603-2887</span>
                </div>
                <div class=" min-h-48 flex flex-col items-center justify-center text-white bg-orange-400 bg-opacity-50 rounded-lg p-4">
                    <ion-icon class=" text-4xl mb-4" name="mail-unread"></ion-icon>
                    <span class=" text-center">Confused about something? Send as an email and we'll make sure to provide you a guide to ease your troubles away.</span>
                    <span class=" text-blue-500 underline underline-offset-4">PagodNa@cares.com.ph</span>
                </div>
            </div>
        </section>
    </main>
</body>

</html>