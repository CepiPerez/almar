<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Agustina</title>

    <!-- Tailwind config file -->
    <script src="../assets/js/tailwind.config.js?v=<?php echo (date('Ymdhis')); ?>"></script>

    <!-- Lightbox Plugin -->
    <script defer
        src="https://cdn.jsdelivr.net/npm/alpine-tailwind-lightbox@1.x.x/dist/alpine-tailwind-lightbox.min.js"></script>

    <!-- Focus Plugin -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>

    <!-- AlpineJS Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<?php

$imagenes = [
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116_IMG_2441.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2273.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2276.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2278.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2280.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2282.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2282.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2282.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2285.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2285.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2285.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2297.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2297.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2297.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2298.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2298.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2298.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2299.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2300.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2301.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2302.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2303.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2304.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2305.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2306.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2307.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2308.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2309.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2310.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2311.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2312.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2313.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2314.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2315.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2316.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2317.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2318.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2319.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2321.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2322.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2323.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2324.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2325.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2326.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2327.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2328.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2329.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2330.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2331.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2332.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2333.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2334.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2335.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2336.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2337.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2338.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2339.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2340.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2341.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2342.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2343.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2344.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2345.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2346.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2347.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2348.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2349.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2350.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2351.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2352.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2353.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2354.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2355.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2356.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2357.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2358.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2359.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2361.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2362.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2364.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2365.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2366.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2367.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2368.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2369.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2370.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2371.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2372.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2373.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2374.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2376.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2377.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2378.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2379.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2380.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2381.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2382.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2383.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2384.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2385.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2386.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2387.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2388.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2389.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2390.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2391.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2392.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2393.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2394.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2395.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2396.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2397.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2399.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2400.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2401.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2402.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2403.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2404.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2405.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2406.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2407.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2408.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2409.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2411.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2412.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2413.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2414.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2416.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2419.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2420.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2421.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2422.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2423.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2424.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2425.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2426.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2427.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2428.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2429.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2430.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2431.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2432.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2433.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2434.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2435.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2436.jpg',
    'https://graduados.unlam.edu.ar/upload/imagenes/galeria/G116__MG_2437.jpg',
];

?>

<body>
    <section id="pictures" class="py-16 md:py-24 bg-sand-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-6" x-data="{
                    images: [
                        <?php foreach ($imagenes as $imagen): ?>
                            { 
                                url: '<?php echo ($imagen); ?>', 
                                thumb: '<?php echo ($imagen); ?>' 
                            },
                        <?php endforeach; ?>
                    ],
                }">

                <template x-for="image in images">
                    <div class="overflow-hidden flex rounded-md shadow-lg ">
                        <a href="#" class="overflow-hidden hover:scale-110 transition-transform duration-500"
                            x-lightbox="image.url" x-lightbox:group="multiple">
                            <img class="flex-1 aspect-[4/3] object-cover object-center" :src="image.thumb" alt="">
                        </a>
                    </div>
                </template>

            </div>

        </div>
    </section>


</body>

</html>