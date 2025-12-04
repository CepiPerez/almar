<!-- Featured Highlights -->
<section class="py-16 md:py-16 bg-gradient-to-b from-almar/20 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">

            <!-- CARDS -->
            <?php for ($i = 1; $i < 4; $i++): ?>

                <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative h-64 overflow-hidden">
                        <img src="assets/images/card<?php echo ($i); ?>.jpg"
                            alt="Comfortable hotel room with modern amenities and ocean view"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            loading="lazy" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="font-display text-2xl md:text-3xl font-bold text-white mb-2">
                                <?php echo ($language['home']['card_' . $i . '_title'][$current_language]); ?>
                            </h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-almartext/60 leading-relaxed mb-4">
                            <?php echo ($language['home']['card_' . $i . '_text'][$current_language]); ?>
                        </p>
                        <a class="inline-flex items-center text-almartext/70 hover:text-almartext font-semibold transition-colors"
                            href="<?php echo ($language['home']['card_' . $i . '_link']); ?>">
                            <?php echo ($language['home']['card_' . $i . '_button'][$current_language]); ?> <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

            <?php endfor; ?>

        </div>
    </div>
</section>