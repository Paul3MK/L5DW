<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "<link rel='stylesheet' type='text/css' href='public/styles.css?v=<?php echo time(); ?>'>"; ?>
    <?php echo "<link rel='stylesheet' href='node_modules/@glidejs/glide/dist/css/glide.core.min.css?v=<?php echo time(); ?>'>"; ?>
    <title>Driverless</title>
</head>
<body class="bodygradient">
    <nav id="navSection" class="z-10 hidden blur w-full items-center justify-between flex-wrap p-6 pl-8 top-0 fixed">
        <div class="block lg:hidden">
            <button class="">
            <img id="closeNav" src="images/Close.svg" alt="" onclick="toggleMenu()">
            </button>
        </div>  
        <div class="flex items-center flex-shrink-0 text-white mr-28">
            <!-- <svg id="Capa_1" enable-background="new 0 0 512.006 512.006" height="32" width="32" viewBox="0 0 512.006 512.006" width="512" xmlns="http://www.w3.org/2000/svg"><g><path fill="white" d="m216.006 206.003c-29.058 0-50 24.316-50 53.84 0 32.45 24.975 53.729 62.78 85.939 6.588 5.613 13.401 11.418 20.636 17.747 1.885 1.649 4.234 2.474 6.584 2.474s4.699-.824 6.584-2.474c7.235-6.329 14.048-12.134 20.636-17.747 37.805-32.21 62.78-53.489 62.78-85.939 0-29.527-20.947-53.84-50-53.84-19.864 0-32.463 11.342-40 22.295-7.536-10.953-20.136-22.295-40-22.295zm49.644 47.646c.076-.276 7.843-27.646 30.356-27.646 17.103 0 30 14.548 30 33.84 0 23.215-20.985 41.095-55.751 70.716-4.613 3.931-9.335 7.954-14.249 12.197-4.914-4.243-9.636-8.267-14.249-12.197-34.766-29.621-55.751-47.501-55.751-70.716 0-19.292 12.897-33.84 30-33.84 22.226 0 30.011 26.43 30.364 27.675 1.201 4.328 5.142 7.325 9.636 7.325 4.504 0 8.452-3.011 9.644-7.354z"/><circle cx="126.006" cy="102.003" r="10"/><path fill="white" d="m447.786 237.837c7.012 5.343 15.387 8.166 24.22 8.166 22.056 0 40-17.944 40-40 0-12.599-5.753-24.203-15.746-31.809l-50.254-38.621v-125.57c0-5.522-4.477-10-10-10h-60c-5.523 0-10 4.478-10 10v64.089l-85.78-65.923c-7.012-5.343-15.387-8.166-24.22-8.166s-17.208 2.823-24.254 8.191l-76.139 58.515c-4.379 3.365-5.201 9.644-1.835 14.022 3.365 4.378 9.644 5.201 14.023 1.835l76.105-58.489c3.499-2.665 7.683-4.074 12.1-4.074s8.601 1.409 12.067 4.049l216.037 166.028c5.018 3.819 7.896 9.623 7.896 15.923 0 11.028-8.972 20-20 20-4.417 0-8.601-1.409-12.064-4.047-11.202-8.615-188.803-145.21-197.839-152.16-3.467-2.667-8.265-2.771-11.845-.256-.453.317-198.135 152.375-198.156 152.392-4.009 3.058-9.021 4.465-14.133 3.968-9.902-.959-15.274-5.616-17.42-15.104-1.798-7.949 1.021-15.889 7.39-20.744l68.529-52.665c4.379-3.365 5.201-9.644 1.835-14.022s-9.645-5.201-14.023-1.835l-68.496 52.64c-12.64 9.636-18.288 25.361-14.741 41.039 4.057 17.938 16.487 28.805 34.991 30.596 10.145.993 20.157-1.839 28.197-7.971l-.015-.019c.425-.313 1.005-.75 1.791-1.35v137.199c-22.881 5.488-40.575 24.105-44.8 47.678-13.192 9.328-21.2 24.482-21.2 40.66 0 27.57 22.43 50 50 50h412c27.57 0 50-22.43 50-50 0-16.178-8.008-31.332-21.2-40.66-4.226-23.583-21.932-42.206-44.8-47.682v-137.192zm-61.78-217.834h40v100.2l-40-30.741zm-226 472h-110c-16.542 0-30-13.458-30-30 0-10.685 5.895-20.647 15.384-26 2.849-1.607 4.731-4.506 5.042-7.763 1.955-20.533 18.954-36.237 39.575-36.237 12.877 0 25.062 6.342 32.592 16.963 2.36 3.328 6.505 4.89 10.475 3.944 2.563-.61 4.831-.907 6.933-.907 16.149 0 29.802 12.97 29.998 29.647-.852 6.012 2.362 10.123 6.532 11.576 7.74 2.696 13.47 10.014 13.47 18.776-.001 11.029-8.973 20.001-20.001 20.001zm172.216-54.644c-6.181 3.497-11.283 8.54-14.826 14.645h-122.783c-3.545-6.107-8.645-11.149-14.823-14.645-.168-1.801-.434-3.588-.794-5.365h154.021c-.36 1.776-.626 3.564-.795 5.365zm-137.584 54.644c3.413-5.887 5.368-12.72 5.368-20h112c0 7.28 1.956 14.113 5.368 20zm276.943-63.763c.31 3.257 2.193 6.155 5.042 7.763 9.489 5.353 15.384 15.315 15.384 26 0 16.542-13.458 30-30 30h-110c-11.028 0-20-8.972-20-20 0-8.772 5.74-16.084 13.47-18.776 4.206-1.465 7.379-5.599 6.532-11.576.196-16.635 13.81-29.647 29.998-29.647 2.102 0 4.37.297 6.933.907 3.967.944 8.115-.615 10.475-3.944 7.531-10.621 19.715-16.963 32.592-16.963 20.613-.001 37.617 15.685 39.574 36.236zm-45.575-55.922c-14.945 1.523-28.856 8.674-38.866 19.985-1.747-.2-3.451-.3-5.134-.3-15.777 0-30.598 7.54-39.979 20h-172.041c-9.377-12.457-24.201-20-39.98-20-1.684 0-3.388.1-5.134.3-10.01-11.312-23.92-18.462-38.866-19.985v-151.229c14.516-11.165 153.296-117.907 169.999-130.751l170.001 130.749z"/></g></svg> -->
            <!-- <span class="font-semibold text-xl tracking-tight ml-4">Driverless</span> -->
            <img src="images/logo.svg" alt="" class="hidden lg:inline-block" h=16 w=16> 
        </div>
        <div class="z-20 lg:flex lg:items-center h-screen lg:h-auto lg:relative w-full">
            <span>
                <a href="#" class="block text-lg mt-4 lg:inline-block lg:mt-0 text-white hover:border-primary border-b-2 border-transparent transition duration-200 mr-4 font-archivo">
                    Home
                </a>
            </span>
            <span>
                <a href="#" class="block text-lg mt-4 lg:inline-block lg:mt-0 text-white hover:border-primary border-b-2 border-transparent transition duration-200 mr-4 font-archivo">
                    About Us
                </a>
            </span>
            <span>
                <a href="contact.html" class="block text-lg mt-4 lg:inline-block lg:mt-0 text-white hover:border-primary border-b-2 border-transparent transition duration-200 mr-4 font-archivo">
                    Contact
                </a>
            </span>
            <span>
                <a href="#" class="block text-lg mt-4 lg:inline-block lg:mt-0 text-white hover:border-primary border-b-2 border-transparent transition duration-200 font-archivo">
                    Login
                </a>
            </span>
            <span>
                <a href="#" class="block text-lg mt-4 lg:inline-block lg:mt-0 text-white hover:border-primary border-b-2 border-transparent transition duration-200 font-archivo">
                    Sign up
                </a>
            </span>
            <!-- <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-indigo-200 hover:text-white mr-4">
                Contact Us
            </a> -->
        </div>
        <div class="hidden lg:block">
            <a href="<?php echo isset(($_SESSION['loggedin'])) ? 'logout.php' : 'login.php'?>" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-indigo-500 hover:bg-white mt-4 lg:mt-0"><?php echo (isset($_SESSION['loggedin'])) ? 'Logout' : 'Login'?></a>
        </div>
    </nav>
    <div class="glide z-1 absolute top-0">
        <div class="glide__track h-" data-glide-el="track">
            <ul class="glide__slides">
                <li class="glide__slide"><div class="relative h-screen" style="background-image: url(images/roborace1.jpg); background-position:left 20% top 40%;"></div></li>
                <li class="glide__slide"><div class="h-screen"><img src="images/roborace1.jpg" alt=""></div></li> <!-- TODO: add this style into the src css -->
                <!-- <li class="glide__slide"><img src="images/vlad-tchompalov-jwyO3NhPZKQ-unsplash.jpg" width=20% alt=""></li> -->
            </ul>
        </div>
        <!-- <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
        </div> -->
    </div>
    <div class="h-screen w-full z-2 absolute top-0 hidden lg:block" style="clip-path: polygon(0 0, 83% 0, 24% 100%, 0% 100%); backdrop-filter: blur(1px) brightness(0.85);"></div>
    <div id="pageWrapper" class="z-3 absolute top-0 grid grid-cols-4 mx-8">
        <span class=" col-start-2 row-start-1 col-span-2 inline-block lg:hidden mt-4">
            <img src="images/Logo-small.svg" alt="" class="mx-auto" h=16 w=16>
        </span>
        <img id="openMenu" src="images/menu.svg" alt="" class="col-start-1 row-start-1 mt-6" onclick="toggleMenu()">
        <header class="w-full col-span-4">
            <div class="lg:grid lg:grid-cols-12 container max-w-xl lg:max-w-5xl mx-auto lg:pt-24">
                <div class=" lg:col-span-12 pt-52">
                    <h1 class="font-kayak font-light text-5xl lg:text-7xl text-primary text-center lg:text-left">The <span class="font-bold tracking-wider">future<br></span> is present.</h1>
                </div>
                <span class="font-kayak text-white text-2xl lg:text-4xl col-span-full pt-20 lg:pt-4 block text-center lg:text-left">welcome to driverless.</span>
                <button class="py-2 rounded-3xl text-primary bg-secondary col-span-2 focus:outline-none focus:bg-opacity-0 mt-12 border-transparent border-2 lg:px-12 px-20 mx-auto block transition duration-300 hover:bg-opacity-0 hover:border-secondary justify-center"><span class="font-archivo ">Sign up</span></button>
            </div>
            <img src="images/Scroll down.svg" alt="" class="mx-auto mt-12">
        </header>
        <div class="blur max-w-full contents">
            <div class="contents lg:flex justify-between container max-w-5xl mx-auto py-8">
                <div class="col-span-2 col-start-2 my-8">
                    <a href="https://aimotive.com" style="background-color: rgba(0,0,0,0.0);"><img src="images/aimotive.png" alt="aimotive logo" class="mx-auto "></a>
                </div>
                <div class="col-start-2 col-span-2 my-8">
                    <a href="https://automotiveworld.com"><img src="images/automotive-world.png" alt="aw logo" class="mx-auto"></a>
                </div>
                <div class="col-start-2 col-span-2 my-8">
                    <a href="https://autonomousvehicleinternational.com"><img src="images/autonomous-vehicle.png" alt="avi logo" class="mx-auto"></a>
                </div>
            </div>
        </div>
        <div id="glide2" class="col-span-4">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="grid lg:grid-cols-2 grid-cols-4">
                            <?php
                                $var1 = file_get_contents("https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=TSLA&apikey=IGWHKLEEZ6N6GGG1");
                                $data = json_decode($var1);
                                
                                foreach ($data as $line){
                                    $symbol = $line->{'01. symbol'};
                                    $price = $line ->{'05. price'};
                                    $day = $line ->{'07. latest trading day'};
                                    $change = $line ->{'09. change'};
                                    $percent = $line ->{'10. change percent'};
                                    
                                    echo "<span class='text-primary font-archivo text-5xl col-span-4'>Tesla Inc.</span>";
                                    echo "<span class='text-primary font-archivo text-3xl col-span-4 mt-4'>NASDAQ: ".$symbol."</span>";
                                    echo "<div class='col-span-2 mt-8'><span class='text-primary font-archivo text-3xl'>".$price."</span> <span class='text-primary font-archivo text-xl'> USD</span></div>";
                                    echo "<div class='col-span-2 self-end'><span class='text-primary font-archivo text-xl'>+".$change."</span>";
                                    echo "<span class='text-primary font-archivo text-xl'> (".$percent.")</span></div>";
                                    echo "<span class='text-primary font-archivo text-xl col-span-4 mt-4'>".$day."</span>";
                                };
                            ?>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="grid lg:grid-cols-2 grid-cols-4">
                            <?php

                                $var1 = file_get_contents("https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=GOOG&apikey=IGWHKLEEZ6N6GGG1");
                                $data = json_decode($var1);
                                
                                foreach ($data as $line){
                                    $symbol = $line->{'01. symbol'};
                                    $price = $line ->{'05. price'};
                                    $day = $line ->{'07. latest trading day'};
                                    $change = $line ->{'09. change'};
                                    $percent = $line ->{'10. change percent'};
                                    
                                    echo "<span class='text-primary font-archivo text-5xl col-span-4'>Alphabet Inc Class C</span>";
                                    echo "<span class='text-primary font-archivo text-3xl col-span-4 mt-4'>NASDAQ: ".$symbol."</span>";
                                    echo "<div class='col-span-2 mt-8'><span class='text-primary font-archivo text-3xl'>".$price."</span> <span class='text-primary font-archivo text-xl'> USD</span></div>";
                                    echo "<div class='col-span-2 self-end justify-end'><span class='text-primary font-archivo text-xl'>".$change."</span>";
                                    echo "<span class='text-primary font-archivo text-xl'> (".$percent.")</span></div>";
                                    echo "<span class='text-primary font-archivo text-xl col-span-4 mt-4'>".$day."</span>";
                                };
                                
                            ?>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
                <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button>
                <button class="glide__bullet" data-glide-dir="=2"></button>
            </div>
        </div>
        <div class="col-span-4">
            <div id="accordionTab" onclick="toggleAccordion()">
                <span>Fresh news in the world of autonomous vehicles.</span>
            </div>
            <div id="accordionContent" class="hidden">
                <!-- PHP to get the actual RSS feed and display -->
                <?php
                    $xml = ("https://news.google.com/rss/topics/CAAqIggKIhxDQkFTRHdvSkwyMHZNREZyYkRrM0VnSmxiaWdBUAE?hl=en-US&gl=US&ceid=US%3Aen");

                    $xmlDoc = new DOMDocument();
                    $xmlDoc->load($xml);

                    //get elements from "<channel>"
                    $channel = $xmlDoc->getElementsByTagName('channel')->item(0);
                    $channel_title = $channel->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
                    $channel_link  = $channel->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
                    echo "<p>Source: <a href='".$channel_link."'>Google News</a>.";
                    $channel_desc  = $channel->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;

                    //get and output "<item>" elements
                    $x=$xmlDoc->getElementsByTagName('item');
                    for ($i=0; $i<=10; $i++) {
                        $item_title=$x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
                        $item_link=$x->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
                        list($item_title, $item_source) = explode(" - ", $item_title);
                        echo "<p class='text-primary font-archivo my-2'><a href='".$item_link."'>".$item_title." - <span class='italic'>".$item_source."</span></a>";
                    }
                ?>
            </div>
        </div>
        <div class="container col-span-3 col-start-2">
            <div class="flex items-center justify-between">
                <span class="font-inconsolata text-white col-span-1 text-right">DAY</span>
                <span class="font-inconsolata text-white col-span-1 text-right">HRS</span>
                <span class="font-inconsolata text-white col-span-1 text-right">MIN</span>
                <span class="font-inconsolata text-white col-span-1 text-right">SEC</span>
            </div>
            <div class="flex items-center justify-between">
                <span id="countdown-days" class="font-inconsolata text-primary text-3xl col-span-1 text-right">&nbsp;</span>
                <span id="countdown-hr" class="font-inconsolata text-primary text-3xl col-span-1 text-right"></span>
                <span id="countdown-min" class="font-inconsolata text-primary text-3xl col-span-1 text-right"></span>
                <span id="countdown-sec" class="font-inconsolata text-primary text-3xl col-span-1 text-right"></span>
            </div>
        </div>
        <div class="col-span-3">
            <img src="images/Driverless.png" alt="">
        </div>
    </div>
    <script>
        function toggleMenu() {
            var x = document.getElementById("navSection");
            x.classList.toggle("hidden");
            var y = document.getElementById("openMenu");
            if (y.style.opacity === 100){
                y.style.opacity = 0
            }else{
                y.style.opacity = 100
            }
        }
        function toggleAccordion() {
            var acc = document.getElementById("accordionContent");
            acc.classList.toggle("hidden");
        }
    </script>
    <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>
    <script>
        const config = {
            type: "carousel",
            autoplay: 10000,
            hoverpause: true
        }
        new Glide('.glide', config).mount()

        const config2 = {
            type: "slider",
            swipeThreshold: 50,
            dragThreshold: 100
        }
        new Glide('#glide2', config2).mount()
        </script>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 11, 2021 17:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("countdown-days").innerHTML = "0" + days;
        document.getElementById("countdown-hr").innerHTML = hours;
        document.getElementById("countdown-min").innerHTML = minutes;
        document.getElementById("countdown-sec").innerHTML = seconds;

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "EXPIRED";
        }
        }, 1000);
</script>
</body>
</html>