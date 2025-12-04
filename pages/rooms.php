<!-- Rooms Section -->
<section id="rooms" class="py-16 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 md:mb-16">
            <!-- <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-almartext mb-4">
                    Conforto e qualidade a poucos passos da praia.
                </h2> -->
            <p class="text-lg md:text-xl text-almartext/60 max-w-3xl mx-auto leading-relaxed">
                <?php echo ($language['rooms']['header'][$current_language]); ?>
            </p>
        </div>

        <!-- ESTE ES EL CODIGO PARA ABRIR UNA GALERIA DESDE UN BOTON -->
        <!-- <div class="mb-6" x-data="{ images: ['./assets/9.jpg', './assets/10.jpg', './assets/11.jpg'] }"
                x-init="$lightbox(images, 'kittens')">
                <button type="button" class="px-6 py-3 bg-violet-600 rounded-md"
                    @click="$lightbox.open(images[2], 'kittens')">
                    Open Lightbox
                </button>
            </div> -->

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <?php foreach ($language['rooms']['rooms'] as $index => $room): ?>

                <div
                    class="bg-sand-50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-64 md:h-80 overflow-hidden" x-data="{ images: [
                            './assets/images/location1.jpg',
                            './assets/images/location2.jpg',
                            './assets/images/location3.jpg',
                            ] }" x-init="$lightbox(images, 'rooms')">

                        <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=800&amp;q=80"
                            alt="Standard double room with comfortable bed and modern decor"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-500"
                            loading="lazy" />
                    </div>
                    <div class="p-6 md:p-8">
                        <h3 class="font-display text-2xl md:text-3xl font-bold text-almartext mb-4">
                            <?php echo ($room['title'][$current_language]); ?>
                        </h3>
                        <p class="text-almartext/70 font-bold mb-5">
                            <i class="fas fa-bed text-almartext me-2"></i>
                            <?php echo ($room['description'][$current_language]); ?>
                        </p>
                        <div class="grid grid-cols-2 gap-3 mb-6">
                            <div class="flex items-center gap-2 text-gray-700">
                                <i class="fas fa-snowflake text-almartext/60" style="font-size: 16px;"></i>
                                <span class="text-sm">
                                    <?php echo ($language['rooms']['services']['ac'][$current_language]); ?>
                                </span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-700">
                                <i class="ri-wifi-fill text-almartext/60"></i>
                                <span class="text-sm">
                                    <?php echo ($language['rooms']['services']['wifi'][$current_language]); ?>
                                </span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-700">
                                <i class="ri-tv-2-line text-almartext/60"></i>
                                <span class="text-sm">
                                    <?php echo ($language['rooms']['services']['tv'][$current_language]); ?>
                                </span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-700">
                                <i class="fas fa-bath text-almartext/60" style="font-size: 14px;"></i>
                                <span class="text-sm">
                                    <?php echo ($language['rooms']['services']['bath'][$current_language]); ?>
                                </span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-700">
                                <i class="ri-fridge-line text-almartext/60"></i>
                                <span class="text-sm">
                                    <?php echo ($language['rooms']['services']['fridge'][$current_language]); ?>
                                </span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-700">
                                <i class="fas fa-couch text-almartext/60" style="font-size: 12px;"></i>
                                <span class="text-sm">
                                    <?php echo ($language['rooms']['services']['living'][$current_language]); ?>
                                </span>
                            </div>
                        </div>
                        <a href="#booking"
                            class="block w-full bg-almartext/70 hover:bg-almartext text-white text-center py-3 rounded-lg font-semibold transition-colors">
                            <?php echo ($language['rooms']['check'][$current_language]); ?>
                        </a>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>