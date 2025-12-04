<!-- Contact Section -->
<section id="contact" class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <div>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-almartext mb-6">
                    <?php echo ($language['contact']['title'][$current_language]); ?>
                </h2>
                <p class="text-almartext/60 text-lg leading-relaxed mb-8">
                    <?php echo ($language['contact']['description'][$current_language]); ?>
                </p>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 bg-ocean-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-ocean-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-almartext/80 mb-1">Rua José Alvim Fontes, Maragogi
                                57955-000
                            </h3>
                            <p class="text-almartext/80">
                                <?php echo ($language['contact']['address_1'][$current_language]); ?>
                            </p>
                            <p class="text-sm text-almartext/70">
                                <?php echo ($language['contact']['address_2'][$current_language]); ?>
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 bg-ocean-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone text-ocean-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-almartext/80 mb-1">+558299648</h3>
                            <p class="text-almartext/80">
                                <?php echo ($language['contact']['phone_1'][$current_language]); ?>
                            </p>
                            <p class="text-sm text-almartext/70">
                                <?php echo ($language['contact']['phone_2'][$current_language]); ?>
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 bg-ocean-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-clock text-ocean-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-almartext/80 mb-1">Check-in / Check-out</h3>
                            <p class="text-almartext/80">Check-in: 2:00 PM</p>
                            <p class="text-almartext/80">Check-out: 10:00 AM</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-almar/20 rounded-2xl p-8 md:p-10">
                <h3 class="font-display text-2xl md:text-3xl font-bold text-almartext mb-6">
                    <?php echo ($language['contact']['send_message'][$current_language]); ?>
                </h3>
                <form class="space-y-4" onsubmit="handleSubmit(event)">
                    <div>
                        <label class="block text-sm font-medium text-almartext/70 mb-2">
                            <?php echo ($language['contact']['name'][$current_language]); ?>
                        </label>
                        <input type="text" required=""
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-ocean-500 focus:border-transparent outline-none transition-all" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-almartext/70 mb-2">
                            <?php echo ($language['contact']['email'][$current_language]); ?>
                        </label>
                        <input type="email" required=""
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-ocean-500 focus:border-transparent outline-none transition-all" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-almartext/70 mb-2">
                            <?php echo ($language['contact']['message'][$current_language]); ?>
                        </label>
                        <textarea rows="4" required=""
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-ocean-500 focus:border-transparent outline-none transition-all resize-none"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-ocean-600 hover:bg-ocean-700 text-white py-3 rounded-lg font-semibold transition-colors">
                        <?php echo ($language['contact']['send'][$current_language]); ?>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>