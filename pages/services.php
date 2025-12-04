<!-- Services Section -->
<section id="services" class="py-16 md:py-24 bg-sand-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-almartext mb-4">
                <?php echo ($language['home']['services_title'][$current_language]); ?>
            </h2>
            <p class="text-lg md:text-xl text-almartext/60 max-w-3xl mx-auto leading-relaxed">
                <?php echo ($language['home']['services_text'][$current_language]); ?>
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 md:gap-8">


            <?php
            // SETEAMOS LOS COLORES PARA LOS BOTONES Y LOS ICONOS
            // Dejamos el primer elemento vacio ya que no usamos el 0 (cero)
            $service_colors = ['', 'sunrise', 'ocean', 'sand', 'ocean', 'sunrise', 'ocean', 'sand', 'sunrise', 'ocean', 'sand'];
            $service_icons = [
                '',
                'fas fa-coffee',
                'fas fa-wifi',
                'fas fa-smoking-ban',
                'fas fa-umbrella-beach',
                'fas fa-map-marked-alt',
                'fas fa-paw',
                'fas fa-tv',
                'fas fa-snowflake',
                'fas fa-concierge-bell'
            ];
            ?>

            <?php for ($i = 1; $i < 10; $i++): ?>
                <div
                    class="bg-white rounded-xl p-6 text-center shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-<?php echo ($service_colors[$i]); ?>-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="<?php echo ($service_icons[$i]); ?> text-<?php echo ($service_colors[$i]); ?>-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-almartext/80 mb-2">
                        <?php echo ($language['home']['services_button_' . $i . '_title'][$current_language]); ?>
                    </h3>
                    <p class="text-sm text-almartext/60">
                        <?php echo ($language['home']['services_button_' . $i . '_subtitle'][$current_language]); ?>
                    </p>
                </div>

            <?php endfor; ?>

        </div>
    </div>
</section>