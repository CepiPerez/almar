<!-- Hero Section -->
<section class="relative <?php echo ($hero_params['height']); ?> flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0">

        <?php if (count($hero_params['images']) > 1): ?>
            <div x-data="{            
                autoplayIntervalTime: 3000,
                slides: [
                    <?php foreach ($hero_params['images'] as $img): ?>
                    {
                        imgSrc: '../assets/images/<?php echo ($img); ?>',
                        imgAlt: '',
                    },                
                    <?php endforeach; ?>
                ],            
                currentSlideIndex: 1,
                isPaused: false,
                autoplayInterval: null,
                previous() {                
                    if (this.currentSlideIndex > 1) {                    
                        this.currentSlideIndex = this.currentSlideIndex - 1                
                    } else {   
                        this.currentSlideIndex = this.slides.length                
                    }            
                },            
                next() {                
                    if (this.currentSlideIndex < this.slides.length) {                    
                        this.currentSlideIndex = this.currentSlideIndex + 1                
                    } else {                 
                        this.currentSlideIndex = 1                
                    }            
                },    
                autoplay() {
                    this.autoplayInterval = setInterval(() => {
                        if (! this.isPaused) {
                            this.next()
                        }
                    }, this.autoplayIntervalTime)
                },
                setAutoplayInterval(newIntervalTime) {
                    clearInterval(this.autoplayInterval)
                    this.autoplayIntervalTime = newIntervalTime
                    this.autoplay()
                },    
            }" x-init="autoplay" class="relative h-full w-full overflow-hidden">

                <!-- slides -->
                <!-- Change min-h-[50svh] to your preferred height size -->
                <div class="relative h-full w-full">
                    <template x-for="(slide, index) in slides">
                        <div x-show="currentSlideIndex == index + 1" class="absolute inset-0"
                            x-transition.opacity.duration.1000ms>
                            <img class="absolute w-full h-full inset-0 object-cover" x-bind:src="slide.imgSrc"
                                x-bind:alt="slide.imgAlt" />
                        </div>
                    </template>
                </div>
            </div>

        <?php else: ?>

            <img src="assets/images/<?php echo ($hero_params['images'][0]); ?>"
                alt=""
                class="w-full h-full object-cover" loading="eager" />
            <div class="absolute inset-0 hero-gradient"></div>

        <?php endif; ?>

        <div class="absolute inset-0 hero-gradient"></div>
    </div>

    <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
        <h2 class="font-display text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-4 md:mb-6 leading-tight">
            <?php echo ($hero_params['title']); ?>
        </h2>
        <p class="text-lg sm:text-xl md:text-2xl text-white/95 mb-8 md:mb-12 leading-relaxed max-w-2xl mx-auto font-light">
            <?php echo ($hero_params['subtitle']); ?>
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <?php if (isset($hero_params['slider_button_1'])): ?>
                <a class="bg-white text-almartext px-8 py-4 rounded-full text-lg font-semibold hover:bg-sand-50 transition-all duration-300 transform hover:scale-105 shadow-xl w-full sm:w-auto"
                    href="#booking">
                    <?php echo ($hero_params['slider_button_1']); ?>
                </a>
            <?php endif; ?>
            <?php if (isset($hero_params['slider_button_2'])): ?>
                <a class="border-2 border-white text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-white hover:text-almartext transition-all duration-300 w-full sm:w-auto"
                    href="rooms.html">
                    <?php echo ($hero_params['slider_button_2']); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <?php if (isset($hero_params['slider_button_2'])): ?>
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce hidden md:block">
            <i class="fas fa-chevron-down text-white text-2xl"></i>
        </div>
    <?php endif; ?>

</section>