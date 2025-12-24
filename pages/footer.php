<!-- Footer -->
<footer class="bg-almar text-black py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8 text-center">
            <div>
                <h3
                    class="justify-center font-display text-2xl text-almartext font-bold mb-4 flex items-center gap-2">
                    <img src="../assets/images/logosmall.png" alt="Almar" style="height: 26px;">
                    Almar
                </h3>
                <div class="justify-center mx-12">
                    <p class="text-almartext/80 leading-relaxed">
                        <?php echo ($language['footer']['almar_text'][$current_language]); ?>
                    </p>
                </div>
            </div>
            <div>
                <h4 class="font-semibold text-almartext text-lg mb-4">
                    <?php echo ($language['footer']['quick_links'][$current_language]); ?>
                </h4>
                <ul class="space-y-2">
                    <?php foreach ($language['navbar']['menu'] as $key => $val): ?>
                        <li>
                            <a href="<?php echo ($key == 'home' ? '/' : strtolower($val[$current_language])); ?>"
                                class="hover:text-almartext transition-colors
                                <?php echo ($key == $ruta ? 'pointer-events-none text-almartext' : 'text-almartext/80 ');  ?>">
                                <?php echo ($val[$current_language]) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-lg mb-4 text-almartext">
                    <?php echo ($language['footer']['social_media'][$current_language]); ?>
                </h4>
                <div class="flex gap-4 justify-center">
                    <!-- <a href="#" target="_blank"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a> -->
                    <a href="https://www.instagram.com/almarmaragogipousada?igsh=MWw3YXhnZXh2eHRtbg=="
                        target="_blank"
                        class="w-10 h-10 rounded-full flex items-center justify-center bg-sunrise-500/30 hover:bg-sunrise-500/50 transition-colors">
                        <i class="fab fa-instagram text-almartext"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?l=pt_BR&phone=558299648" target="_blank"
                        class="w-10 h-10 rounded-full flex items-center justify-center bg-sunrise-500/30 hover:bg-sunrise-500/50 transition-colors">
                        <i class="fab fa-whatsapp text-almartext"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-almartext/40 py-4 flex gap-1 justify-center text-almartext/80 text-sm">
            <p class="pe-4"><?php echo ($language['footer']['language'][$current_language]); ?></p>

            <?php foreach (['pt' => 'Português', 'es' => 'Español', 'en' => 'English'] as $lang => $text): ?>

                <a class="flex px-3 text-left hover:text-almartext
                    <?php echo ($lang == $current_language ? 'pointer-events-none text-almartext' : '');  ?>"
                    href="set_language.php?lang=<?php echo ($lang . ($ruta != 'home' ? '&page=' . traducirRuta($ruta, $lang) : '')); ?>">
                    <img src="/assets/flags/<?php echo ($lang); ?>.png" alt="<?php echo ($text); ?>" style="height: 18px; margin: 1px 8px 0 0;">
                    <?php echo ($text); ?>
                </a>
            <?php endforeach; ?>

        </div>

        <div class="border-t border-almartext/40 pt-4 text-center text-almartext/80 text-sm">
            <p>© 2025 Pousada Almar. <?php echo ($language['footer']['rights'][$current_language]); ?>.</p>
        </div>
    </div>
</footer>