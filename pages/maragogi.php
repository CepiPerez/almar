<!-- Location/Attractions Parallax Section -->
<section id="location" class="parallax-section relative py-24 md:py-32"
    style="background-image: url(assets/images/mar.jpg);">
    <div class="absolute inset-0 bg-ocean-900/75"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">
            <?php echo ($language['maragogi']['title'][$current_language]); ?>
        </h2>
        <p class="text-lg md:text-md text-white/90 max-w-3xl mx-auto leading-relaxed mb-12">
            <?php foreach ($language['maragogi']['text'][$current_language] as $element): ?>
                <?php echo ($element); ?>
                <br><br>
            <?php endforeach; ?>
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                <i class="fas fa-water text-4xl text-almar/60 mb-4"></i>
                <h3 class="font-display text-xl font-bold text-white mb-2">
                    <?php echo ($language['maragogi']['card_1_title'][$current_language]); ?>
                </h3>
                <p class="text-white/80 text-sm">
                    <?php echo ($language['maragogi']['card_1_subtitle'][$current_language]); ?>
                </p>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                <i class="fas fa-fish text-4xl text-almar/60 mb-4"></i>
                <h3 class="font-display text-xl font-bold text-white mb-2">
                    <?php echo ($language['maragogi']['card_2_title'][$current_language]); ?>
                </h3>
                <p class="text-white/80 text-sm">
                    <?php echo ($language['maragogi']['card_2_subtitle'][$current_language]); ?>
                </p>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                <i class="fas fa-utensils text-4xl text-almar/60 mb-4"></i>
                <h3 class="font-display text-xl font-bold text-white mb-2">
                    <?php echo ($language['maragogi']['card_3_title'][$current_language]); ?>
                </h3>
                <p class="text-white/80 text-sm">
                    <?php echo ($language['maragogi']['card_3_subtitle'][$current_language]); ?>
                </p>
            </div>
        </div>
    </div>
</section>