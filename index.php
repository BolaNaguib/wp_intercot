<!DOCTYPE html>
<html lang="en">
<?php $home = get_template_directory_uri(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            font-weight: semi-bold;

        }

        .iframe iframe {
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- About Section -->
    <section class="py-24">
        <div class="container mx-auto relative">
            <div class="bg-main absolute top-0 left-0 w-full h-full z-10 rounded rounded-lg shadow shadow-lg"></div>
            <span class="bg-gray-200 inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-1  rounded rounded-lg"></span>
            <div class="grid grid-cols-2 relative z-20 flex items-center">

                <div class="text-center flex justify-center py-8">
                    <img class="inline-block" src="<?php echo $home ?>/assets/img/logo-white.png" alt="">
                </div>
                <div>
                    <div class="text-white">
                        <h2 class="mb-4 bg-white inline-block text-main py-4 px-4 rounded rounded-lg shadow shadow-lg font-bold">WELCOME TO INTERCOT HOME COLLECTION</h2>
                        <p>We are Intercot Home Collection, Textile Industrial Company based on Suez Freezone Area, Ataka, Suez, Egypt.</p>
                        <p>We are working in producing, all types of (Quilts, Quilt cover, Bed Sheets, Pillow Cases, Pillows, Mattress Protectors, Bedspreads, Flannel Sheets, Towels, Shower Curtains, Window Curtains).</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Icons Section -->
    <section class='bg-gray-100 py-24'>
        <div class="container mx-auto">
            <div class="text-center block mb-12">
                <h2 class="text-4xl font-bold text-gray-900">Service Perfection</h2>
            </div>
            <div class="grid lg:grid-cols-3 gap-12">

                <div class='relative group '>
                    <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-3 transition duration-300 ease-in-out group-hover:rotate-0 rounded rounded-lg  "></span>
                    <div class='bg-white h-full   group-hover:bg-black relative px-4 py-8 rounded rounded-lg z-10 shadow shadow-lg text-center'>
                        <svg class="w-24 h-24 rounded rounded-full bg-main text-white shadow shadow-lg p-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        <h3 class='text-2xl my-4 font-bold'>High Quality</h3>
                        <p>We pays special attention to quality of raw materials and also to all styles of production in order to meet these high standards and offer high quality products.</p>
                    </div>


                </div>


                <div class='relative group '>
                    <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-3 transition duration-300 ease-in-out group-hover:rotate-0 rounded rounded-lg  "></span>
                    <div class='bg-white h-full group-hover:bg-black relative px-4 py-8 rounded rounded-lg z-10 shadow shadow-lg text-center'>
                        <svg class="w-24 h-24 rounded rounded-full bg-main text-white shadow shadow-lg p-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                        <h3 class='text-2xl my-4 font-bold'>Modern & Customized Styles</h3>
                        <p>
                            We pays special attention to get the lateset designs with comfortable colors, which makes your customers feel satisfied, elite and relaxed.</p>
                    </div>


                </div>


                <div class='relative group '>
                    <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-3 transition duration-300 ease-in-out group-hover:rotate-0 rounded rounded-lg  "></span>
                    <div class='bg-white h-full  group-hover:bg-black relative px-4 py-8 rounded rounded-lg z-10 shadow shadow-lg text-center'>
                        <svg class="w-24 h-24 rounded rounded-full bg-main text-white shadow shadow-lg p-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                        <h3 class='text-2xl my-4 font-bold'> Competitive Prices </h3>

                        <p>Dealing with Egyptian companies now is such a good deal for trading you have high quality products with very good prices. </p>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- Why Section -->
    <section class="py-24">
        <div class="container mx-auto">
            <div class="text-center relative inline-block mb-12">
                <h2 class="text-4xl font-bold text-white text-gray-900 relative z-10">Why Us</h2>
                <hr class="w-32 mx-auto border-main border-8 absolute bottom-0 left-0 mb-1 z-0 ">
            </div>
            <div class="grid lg:grid-cols-3 gap-6">

                <?php for ($i = 0; $i < 6; $i++) : ?>
                    <figcaption class="flex items-center space-x-4 p-6 md:px-10 md:py-6 bg-gradient-to-br rounded-b-xl leading-6 font-semibold">
                        <div class="flex-none w-20 h-20 bg-main rounded-full flex items-center justify-center shadow shadow-lg">
                            <img src="http://intercoteg.com/images/11.png" alt="" class=" h-10 " loading="lazy"></div>
                        <div class="flex-auto">Exporting to European Union and the Middle East and North of America</div>
                    </figcaption>

                <?php endfor; ?>
            </div>
        </div>

    </section>
    <!-- Map -->
    <section class="py-24 bg-main">

        <div class="container mx-auto relative ">
            <div class="bg-white absolute top-0 left-0 w-full h-full z-10 rounded rounded-lg shadow shadow-lg"></div>
            <span class="bg-gray-200 inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-1  rounded rounded-lg"></span>
            <div class="iframe relative z-20 p-4 rounded rounded-lg overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27668.35345959953!2d32.449042!3d29.906232000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x669ce6f62b7d2d55!2sIntercot%20Home%20Collection!5e0!3m2!1sen!2sus!4v1606207646734!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>



</body>

</html>