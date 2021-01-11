<?php

    include "configure.php";

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $uname = $_POST['username'];

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $send_message = $connection->prepare("INSERT INTO messages(username, email, messagesent VALUES (?,?,?)");
        $send_message->bind_param("sss", $uname, $email, $message);
        if($send_message->execute()){
            $positive_status = "Message sent.";
        }
        else{
            $negative_status = "Something went wrong. Please try again later.";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <title>Driverless - FAQs</title>
</head>
<body class="bodygradient">
    <div class="overflow-hidden z-1">
    <div class="relative h-screen" style="background-image: url('images/contact-img.gif'); background-position:left 40% top 40%; background-size:cover"></div>
    </div>
    <div class="h-screen w-full z-3 absolute top-0" style="clip-path: polygon(0 0, 83% 0, 24% 100%, 0% 100%); backdrop-filter: blur(1px) brightness(0.85);"></div>
    <!--navbar-->
    <header class="z-5 absolute w-full top-0">
        <nav class="w-full flex items-center justify-between flex-wrap p-6 top-0">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <!-- <svg id="Capa_1" enable-background="new 0 0 512.006 512.006" height="32" width="32" viewBox="0 0 512.006 512.006" width="512" xmlns="http://www.w3.org/2000/svg"><g><path fill="white" d="m216.006 206.003c-29.058 0-50 24.316-50 53.84 0 32.45 24.975 53.729 62.78 85.939 6.588 5.613 13.401 11.418 20.636 17.747 1.885 1.649 4.234 2.474 6.584 2.474s4.699-.824 6.584-2.474c7.235-6.329 14.048-12.134 20.636-17.747 37.805-32.21 62.78-53.489 62.78-85.939 0-29.527-20.947-53.84-50-53.84-19.864 0-32.463 11.342-40 22.295-7.536-10.953-20.136-22.295-40-22.295zm49.644 47.646c.076-.276 7.843-27.646 30.356-27.646 17.103 0 30 14.548 30 33.84 0 23.215-20.985 41.095-55.751 70.716-4.613 3.931-9.335 7.954-14.249 12.197-4.914-4.243-9.636-8.267-14.249-12.197-34.766-29.621-55.751-47.501-55.751-70.716 0-19.292 12.897-33.84 30-33.84 22.226 0 30.011 26.43 30.364 27.675 1.201 4.328 5.142 7.325 9.636 7.325 4.504 0 8.452-3.011 9.644-7.354z"/><circle cx="126.006" cy="102.003" r="10"/><path fill="white" d="m447.786 237.837c7.012 5.343 15.387 8.166 24.22 8.166 22.056 0 40-17.944 40-40 0-12.599-5.753-24.203-15.746-31.809l-50.254-38.621v-125.57c0-5.522-4.477-10-10-10h-60c-5.523 0-10 4.478-10 10v64.089l-85.78-65.923c-7.012-5.343-15.387-8.166-24.22-8.166s-17.208 2.823-24.254 8.191l-76.139 58.515c-4.379 3.365-5.201 9.644-1.835 14.022 3.365 4.378 9.644 5.201 14.023 1.835l76.105-58.489c3.499-2.665 7.683-4.074 12.1-4.074s8.601 1.409 12.067 4.049l216.037 166.028c5.018 3.819 7.896 9.623 7.896 15.923 0 11.028-8.972 20-20 20-4.417 0-8.601-1.409-12.064-4.047-11.202-8.615-188.803-145.21-197.839-152.16-3.467-2.667-8.265-2.771-11.845-.256-.453.317-198.135 152.375-198.156 152.392-4.009 3.058-9.021 4.465-14.133 3.968-9.902-.959-15.274-5.616-17.42-15.104-1.798-7.949 1.021-15.889 7.39-20.744l68.529-52.665c4.379-3.365 5.201-9.644 1.835-14.022s-9.645-5.201-14.023-1.835l-68.496 52.64c-12.64 9.636-18.288 25.361-14.741 41.039 4.057 17.938 16.487 28.805 34.991 30.596 10.145.993 20.157-1.839 28.197-7.971l-.015-.019c.425-.313 1.005-.75 1.791-1.35v137.199c-22.881 5.488-40.575 24.105-44.8 47.678-13.192 9.328-21.2 24.482-21.2 40.66 0 27.57 22.43 50 50 50h412c27.57 0 50-22.43 50-50 0-16.178-8.008-31.332-21.2-40.66-4.226-23.583-21.932-42.206-44.8-47.682v-137.192zm-61.78-217.834h40v100.2l-40-30.741zm-226 472h-110c-16.542 0-30-13.458-30-30 0-10.685 5.895-20.647 15.384-26 2.849-1.607 4.731-4.506 5.042-7.763 1.955-20.533 18.954-36.237 39.575-36.237 12.877 0 25.062 6.342 32.592 16.963 2.36 3.328 6.505 4.89 10.475 3.944 2.563-.61 4.831-.907 6.933-.907 16.149 0 29.802 12.97 29.998 29.647-.852 6.012 2.362 10.123 6.532 11.576 7.74 2.696 13.47 10.014 13.47 18.776-.001 11.029-8.973 20.001-20.001 20.001zm172.216-54.644c-6.181 3.497-11.283 8.54-14.826 14.645h-122.783c-3.545-6.107-8.645-11.149-14.823-14.645-.168-1.801-.434-3.588-.794-5.365h154.021c-.36 1.776-.626 3.564-.795 5.365zm-137.584 54.644c3.413-5.887 5.368-12.72 5.368-20h112c0 7.28 1.956 14.113 5.368 20zm276.943-63.763c.31 3.257 2.193 6.155 5.042 7.763 9.489 5.353 15.384 15.315 15.384 26 0 16.542-13.458 30-30 30h-110c-11.028 0-20-8.972-20-20 0-8.772 5.74-16.084 13.47-18.776 4.206-1.465 7.379-5.599 6.532-11.576.196-16.635 13.81-29.647 29.998-29.647 2.102 0 4.37.297 6.933.907 3.967.944 8.115-.615 10.475-3.944 7.531-10.621 19.715-16.963 32.592-16.963 20.613-.001 37.617 15.685 39.574 36.236zm-45.575-55.922c-14.945 1.523-28.856 8.674-38.866 19.985-1.747-.2-3.451-.3-5.134-.3-15.777 0-30.598 7.54-39.979 20h-172.041c-9.377-12.457-24.201-20-39.98-20-1.684 0-3.388.1-5.134.3-10.01-11.312-23.92-18.462-38.866-19.985v-151.229c14.516-11.165 153.296-117.907 169.999-130.751l170.001 130.749z"/></g></svg> -->
                <!-- <span class="font-semibold text-xl tracking-tight ml-4">Driverless</span> -->
                <a href="index.php"><img src="images/logo.svg" alt="" h=16 w=16></a>
                    
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-indigo-200 border-indigo-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>  
            <div class="block lg:flex lg:items-center">
                <span>
                    <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-indigo-200 hover:text-white mr-4 font-archivo">
                        About Us
                    </a>
                </span>
                <span>
                    <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-indigo-200 hover:text-white mr-4 font-archivo">
                        Contact
                    </a>
                </span>
                <span>
                    <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-indigo-200 hover:text-white font-archivo">
                        Subscribe
                    </a>
                </span>
                <!-- <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-indigo-200 hover:text-white mr-4">
                    Contact Us
                </a> -->
            </div>
            <div class="">
                <a href="<?php echo isset(($_SESSION['loggedin'])) ? 'logout.php' : 'login.php'?>" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-indigo-500 hover:bg-white mt-4 lg:mt-0"><?php echo (isset($_SESSION['loggedin'])) ? 'Logout' : 'Login'?></a>
            </div>
        </nav>
        <div class="grid grid-cols-12 container max-w-5xl mx-auto pt-32">
            <div class="col-span-12">
                <h1 class="font-kayak font-light text-7xl text-primary">Any<br><span class="font-bold">questions?</span></h1>
            </div>
        </div>
        <!-- carousel -->
    </header>
    <div class="container max-w-5xl mx-auto pt-16">
        <!--FAQ section. We'll put these before the contact us form-->
        <h1 class="font-kayak text-6xl text-primary font-light">FAQs</h1>
        <span class="pt-16 font-archivo text-secondary text-xl">Please check out frequently asked questions, for any common queries.
            There's not much point typing out a question if the answer's already
            available!</span>
        <div id="acc-container" class="block border border-transparent rounded-t-xl">
            <button class="accordion py-4 px-4 text-xl m-0 rounded-xl text-primary font-archivo focus:outline-none blur w-full text-left" onclick="addBorder()">What's the difference between subcribe and register?</button>
            <div class="panel hidden font-light font-archivo text-secondary text-lg">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, eligendi minus impedit ut repellendus molestiae, nesciunt expedita harum quo et facilis voluptatum vel possimus velit cum exercitationem vero asperiores officia!
            </div>
        </div>
        <div class="block">
            <button class="accordion py-4 px-4 text-xl m-0 rounded-xl text-primary font-archivo focus:outline-none blur w-full text-left" onclick="addBorder()">What's the difference between subcribe and register?</button>
            <div class="panel hidden font-light font-archivo text-secondary text-lg">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, eligendi minus impedit ut repellendus molestiae, nesciunt expedita harum quo et facilis voluptatum vel possimus velit cum exercitationem vero asperiores officia!
            </div>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $_POST['name'] ?>">
            <input type="hidden" value="<?php echo $_POST['email'] ?>">
            <input type="hidden" value="<?php echo $_POST['message'] ?>">
            <div>
                <span <?php echo isset($_POST['message']) ? ">Your message: ".$_POST['message'] : "class='hidden'"?></span>
            </div>
            <input type="submit">
        </form>
    </div>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var accContainer = document.getElementById("acc-container");
        var i;

        function addBorder() {
            accContainer.classList.toggle("border-primary");
        }

        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            var panel = this.nextElementSibling;
            // panel.classList.toggle("hidden");
            if (panel.classList.contains("hidden")) {
                panel.classList.toggle("hidden", false);
            } else {
                panel.classList.toggle("hidden", true);
            }
        });
    }
    </script>
</body>
</html>