<!-- About Section -->
<section id="about" class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-almartext mb-6">
                    <?php echo ($language['home']['location_title'][$current_language]); ?>
                </h2>
                <div class="prose prose-lg max-w-none text-almartext/60 leading-relaxed space-y-4 margin-t-3">
                    <?php foreach ($language['home']['location_text'][$current_language] as $element): ?>
                        <p>
                            <?php echo ($element); ?>
                        </p>
                    <?php endforeach; ?>
                </div>
                <div class="mt-8 flex flex-wrap gap-4">
                    <div class="flex items-center gap-2 text-almartext/80">
                        <i class="fas fa-check-circle text-xl"></i>
                        <span class="font-medium">
                            <?php echo ($language['home']['location_button_1'][$current_language]); ?>
                        </span>
                    </div>
                    <div class="flex items-center gap-2 text-almartext/80">
                        <i class="fas fa-check-circle text-xl"></i>
                        <span class="font-medium">
                            <?php echo ($language['home']['location_button_2'][$current_language]); ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <div class="widget maps-embed">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.1505750250553!2d-35.24241032491352!3d-9.050026593364953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x700f5a2533c8829%3A0xa14b979a96743fd5!2sR.%20Jos%C3%A9%20Alvim%20Fontes%20-%20Maragogi%2C%20AL%2C%2057955-000!5e0!3m2!1spt-BR!2sbr!4v1764719120012!5m2!1spt-BR!2sbr"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            frameborder="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>