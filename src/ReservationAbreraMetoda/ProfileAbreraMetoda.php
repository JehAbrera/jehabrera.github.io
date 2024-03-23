<!DOCTYPE html>
<html class=" scroll-smooth" lang="en">

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
    <title>Company Profile</title>
</head>

<body class=" bg-[url('hotelbg2.jpg')] bg-fixed bg-cover bg-center min-h-screen flex flex-col">
    <!-- Navigation Bar -->
    <nav class=" z-50 fixed top-0 left-0 w-full flex flex-row justify-between">
        <div class=" flex justify-center items-center p-2">
            <span class=" py-1 px-2 flex justify-center items-center text-white text-xl font-bold"><ion-icon class=" text-3xl" name="bed"></ion-icon>&nbsp;PagodNa</span>
        </div>
        <div class=" flex flex-row text-white">
            <div onclick="location.href = 'HomeAbreraMetoda.php'" class=" h-full py-2 px-4 font-semibold flex justify-center items-center cursor-pointer hover:bg-rose-400 hover:bg-opacity-40">Home</div>
            <div onclick="location.href = 'ProfileAbreraMetoda.php'" class=" h-full py-2 px-4 font-semibold text-orange-500 border-solid border-b-2 border-b-orange-500 flex justify-center items-center cursor-pointer hover:bg-rose-400 hover:bg-opacity-40">About</div>
            <div onclick="location.href = 'ContactsAbreraMetoda.php'" class=" h-full py-2 px-4 font-semibold flex justify-center items-center cursor-pointer hover:bg-rose-400 hover:bg-opacity-40">Contacts</div>
            <div onclick="location.href = 'ReservationAbreraMetoda.php'" class=" h-full py-2 px-4 font-semibold flex justify-center items-center cursor-pointer hover:bg-rose-400 hover:bg-opacity-40">Reservation</div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class=" flex flex-col w-full">
        <section class=" h-screen w-full flex flex-col justify-center items-center" id="main">
            <div class=" font-semibold px-6 text-5xl text-white border-solid border-b-2 border-orange-500">Get to know us</div>
            <div class=" w-3/5 mt-6 text-center text-white">Welcome to PagodNa, where comfort meets convenience in every stay. As a premier hotel accommodation company, PagodNa prides itself on offering luxurious experiences tailored to our guests' needs. Experience unparalleled hospitality with us, where relaxation and indulgence await at every turn.</div>
            <button class=" mt-6 px-4 py-2 border-solid border-2 border-orange-500 text-white hover:bg-orange-500" onclick="location.href = '#more'">Read More</button>
        </section>
        <section class=" h-screen w-full flex flex-col px-8 justify-center items-center" id="more">
            <div class=" flex flex-col bg-black bg-opacity-50 rounded-xl justify-center items-center py-4 px-6">
                <div class=" w-full flex flex-col justify-center items-center">
                    <span class=" w-fit text-white text-lg block py-2 px-4 border-solid border-b-2 border-white">Our Goal</span>
                    <div class=" w-full text-white text-center mt-4 mb-8">
                        PagodNa's overarching goal is to become the preferred destination for travelers seeking unparalleled luxury and exceptional service. Through continuous innovation, personalized experiences, and sustainable practices, we aim to exceed guest expectations and set new standards of excellence in the hospitality industry.
                    </div>
                </div>
                <div class=" flex flex-row gap-6">
                    <div class=" flex flex-col flex-1 items-center p-4 text-white text-justify border-solid border-orange-500 border-2 rounded-xl">
                        <span class=" mb-4 flex justify-center text-xl"><ion-icon class=" text-2xl" name="flag"></ion-icon>&nbsp;Our Mission</span>
                        <div>
                            At PagodNa, our mission is to redefine the hospitality experience by providing unparalleled comfort, convenience, and personalized service to every guest. We aim to create memorable stays that exceed expectations, leaving a lasting impression of warmth and excellence.
                        </div>
                    </div>
                    <div class=" flex flex-col flex-1 items-center p-4 text-white text-justify border-solid border-orange-500 border-2 rounded-xl">
                        <span class=" mb-4 flex justify-center text-xl"><ion-icon class=" text-2xl" name="eye"></ion-icon>&nbsp;Our Vision</span>
                        <div>
                            Our vision at PagodNa is to be recognized as the leading choice for discerning travelers seeking luxury accommodation and exceptional service. We aspire to continuously innovate and elevate our offerings, ensuring that every guest feels valued and cherished throughout their stay. With a commitment to sustainability and community engagement, we strive to leave a positive impact on both our guests and the environments in which we operate, setting the standard for hospitality excellence worldwide.
                        </div>
                    </div>
                </div>
                <button class=" w-fit mt-6 px-4 py-2 border-solid border-2 border-orange-500 text-white hover:bg-orange-500" onclick="location.href = '#whyus'">Continue</button>
            </div>
        </section>
        <section class=" h-screen w-full flex flex-col justify-center items-center" id="whyus">
            <div class=" w-full bg-white py-6 flex flex-col items-center">
                <div class=" mb-12">
                    <span class=" block py-3 px-4 border-solid border-b-2 border-slate-950 font-extrabold text-5xl text-slate-950">- Why PagodNa? -</span>
                </div>
                <div class=" w-4/5 flex flex-row justify-evenly">
                    <div class=" flex flex-col items-center justify-center aspect-square px-4 rounded-md shadow-lg bg-slate-900">
                        <div class=" flex items-center text-3xl text-orange-600 mb-4 font-extrabold">
                            <ion-icon class=" text-4xl" name="star"></ion-icon>
                            5
                        </div>
                        <span class=" text-white">
                            5-star quality service
                        </span>
                    </div>
                    <div class=" flex flex-col items-center justify-center aspect-square px-4 rounded-md shadow-lg bg-slate-900">
                        <div class=" flex items-center text-3xl text-orange-600 mb-4">
                            <ion-icon class=" text-4xl" name="wallet"></ion-icon>
                        </div>
                        <span class=" text-white">
                            Budget-friendly
                        </span>
                    </div>
                    <div class=" flex flex-col items-center justify-center aspect-square px-4 rounded-md shadow-lg bg-slate-900">
                        <div class=" flex items-center text-3xl text-orange-600 mb-4">
                            <ion-icon class=" text-4xl" name="cloudy-night"></ion-icon>
                        </div>
                        <span class=" text-white">
                            Comfortable
                        </span>
                    </div>
                </div>
                <div class=" m-4">
                    Book your stay with us now and feel the comfort and service you deserve.
                </div>
                <button onclick="location.href = 'ReservationAbreraMetoda.php'" class=" w-fit px-4 py-2 border-solid border-2 border-orange-500 hover:text-white hover:bg-orange-500" onclick="location.href = '#whyus'">Book Now</button>
            </div>
        </section>
        <button class=" bg-orange-500 text-white text-xl font-bold p-3 rounded-xl fixed bottom-3 right-3 flex justify-center items-center" onclick="location.href = '#main'"><ion-icon name="arrow-up"></ion-icon></button>
    </main>
</body>

</html>