<!-- Pictures Section -->
<section id="pictures" class="py-16 md:py-24 bg-sand-50">
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
                    { url: './assets/images/location1.jpg', thumb: './assets/images/location1.jpg' },
                    { url: './assets/images/location2.jpg', thumb: './assets/images/location2.jpg' },
                    { url: './assets/images/location3.jpg', thumb: './assets/images/location3.jpg' },
                    { url: './assets/images/location4.jpg', thumb: './assets/images/location4.jpg' },
                    { url: './assets/images/location5.jpg', thumb: './assets/images/location5.jpg' },
                    { url: './assets/images/location6.jpg', thumb: './assets/images/location6.jpg' },
                ],
            }">

            <template x-for="image in images">
                <div class="overflow-hidden flex rounded-md shadow-lg">
                    <a href="#" class="overflow-hidden hover:scale-110 transition-transform duration-500"
                        x-lightbox="image.url" x-lightbox:group="multiple">
                        <img class="flex-1 object-cover object-center" :src="image.thumb" alt="">
                    </a>
                </div>
            </template>

        </div>

    </div>
</section>