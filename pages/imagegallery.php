<!-- Pictures Section -->
<section id="pictures" class="py-16 md:py-24 bg-sand-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- <div class="text-center mb-12 md:mb-16">
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-almartext mb-4">
                    Instalações e Serviços
                </h2>
                <p class="text-lg md:text-xl text-almartext/60 max-w-3xl mx-auto leading-relaxed">
                    Sua estadia será ainda mais confortável com todas as comodidades da Pousada Almar
                </p>
            </div> -->

        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-6" x-data="{
                images: [
                    <?php foreach ($gallery_pictures as $picture): ?>
                        { 
                            url: './assets/images/<?php echo ($picture); ?>', 
                            thumb: './assets/images/<?php echo ($picture); ?>' 
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