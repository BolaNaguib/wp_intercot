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

    <!-- Why Section -->
    <section class="py-24">
        <div class="container mx-auto">
            <div class="grid grid-cols-3 gap-6">

                <?php for ($i = 0; $i < 6; $i++) : ?>
                    <div class="relative group  ">
                        <span class="bg-gray-300 inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-3 rounded rounded-lg  "></span>

                        <div class="relative overflow-hidden rounded rounded-lg shadow-lg">
                            <div class="bg-main opacity-75 absolute top-0 left-0 w-full h-full z-20  shadow shadow-lg"></div>
                            <div class="bg-gradient-to-t from-black  absolute top-0 left-0 w-full h-full z-20  shadow shadow-lg"></div>
                            <img class="group-hover:scale-125 z-10 w-full absolute" src="<?php echo $home ?>/assets/img/bg1.jpg" alt="">
                            <div class="relative z-30 p-4 text-white text-center">
                                <img class="inline-block py-4" src="http://intercoteg.com/images/11.png" alt="">
                                <span class="block py-4">Exporting to European Union and the Middle East and North of America
                                </span>
                            </div>
                        </div>

                    </div>
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