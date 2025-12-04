<!-- Hero Section -->
<section class="relative h-[<?php echo ($hero_params['height']); ?>vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="assets/images/<?php echo ($hero_params['background']); ?>"
            alt="Beautiful beach resort in Maragogi with palm trees and turquoise waters"
            class="w-full h-full object-cover" loading="eager" />
        <div class="absolute inset-0 hero-gradient"></div>
    </div>

    <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
        <h4
            class="font-display text-4xl sm:text-5xl md:text-5xl lg:text-5xl font-bold text-white mb-4 md:mb-6 leading-tight">
            <?php echo ($hero_params['title']); ?>
        </h4>
        <p
            class="text-lg sm:text-xl md:text-2xl text-white/95 mb-8 md:mb-12 leading-relaxed max-w-2xl mx-auto font-light">
            <?php echo ($hero_params['subtitle']); ?>
        </p>


    </div>
</section>