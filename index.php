<!DOCTYPE html>
<html lang="en">

<?php
$ruta = $_GET['ruta'] ?? 'index';

require('config.php');
require('lang.php');
include('pages/head.php');

?>

<body class="bg-white text-almartext/80">

    <!-- MENU NAVEGACION -->
    <nav class="fixed w-full z-50 transition-all duration-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">

                <div class="flex-shrink-0">
                    <img src="../assets/images/translohoh2.png" class="h-16" alt="Almar">
                </div>

                <div class="hidden md:flex space-x-8">
                    <?php foreach ($language['navbar']['menu'] as $key => $val): ?>
                        <a href="<?php echo ($key); ?>" class="text-almartext hover:text-ocean-600 transition-colors 
                            <?php echo ($key == $ruta ? 'pointer-events-none font-bold underline underline-offset-8' : 'font-medium'); ?>">
                            <?php echo ($val[$current_language]) ?>
                        </a>
                    <?php endforeach; ?>
                </div>

                <a href="#booking" id="bookbtn"
                    class="bg-almar hover:bg-sunrise-600 text-white px-4 md:px-6 py-2 rounded-full transition-all duration-300 transform hover:scale-105 font-medium text-sm md:text-base">
                    <?php echo ($language['navbar']['reserve'][$current_language]); ?>
                </a>
            </div>
        </div>
    </nav>


    <!-- MODULOS PAGINA INICIO -->
    <?php if ($ruta == 'index') {
        $hero_params = [
            'height' => ($config['hero']['height']['home'] ? 'h-screen' : 'h-[' . $config['hero']['height']['home'] . 'vh]'),
            'images' => $config['hero']['images']['home'],
            'scroll' => $config['hero']['scroll']['home'],
            'title' => $language['home']['slider_title'][$current_language],
            'subtitle' => $language['home']['slider_text'][$current_language],
            'slider_button_1' => $language['home']['slider_button_1'][$current_language],
            'slider_button_2' => $language['home']['slider_button_2'][$current_language]
        ];

        include('pages/hero.php');
        include('pages/highlights.php');
        include('pages/about.php');
        include('pages/services.php');
        include('pages/booking.php');
    } ?>

    <!-- MODULOS PAGINA HABITACIONES -->
    <?php if ($ruta == 'rooms') {
        $hero_params = [
            'height' => ($config['hero']['height']['rooms'] == 100 ? 'h-screen' : 'h-[' . $config['hero']['height']['rooms'] . 'vh]'),
            'images' => $config['hero']['images']['rooms'],
            'scroll' => $config['hero']['scroll']['rooms'],
            'title' => $language['rooms']['slider_title'][$current_language],
            'subtitle' => $language['rooms']['slider_text'][$current_language],
            'slider_button_1' => isset($language['rooms']['slider_button_1']) ? $language['rooms']['slider_button_1'][$current_language] : null,
            'slider_button_2' => isset($language['rooms']['slider_button_2']) ? $language['rooms']['slider_button_2'][$current_language] : null,
        ];

        include('pages/hero.php');
        include('pages/rooms.php');
        include('pages/booking.php');
    } ?>

    <!-- MODULOS PAGINA MARAGOGI -->
    <?php if ($ruta == 'maragogi') {
        $hero_params = [
            'height' => ($config['hero']['height']['maragogi'] == 100 ? 'h-screen' : 'h-[' . $config['hero']['height']['maragogi'] . 'vh]'),
            'images' => $config['hero']['images']['maragogi'],
            'scroll' => $config['hero']['scroll']['maragogi'],
            'title' => $language['maragogi']['slider_title'][$current_language],
            'subtitle' => $language['maragogi']['slider_text'][$current_language],
            'slider_button_1' => isset($language['rooms']['slider_button_1']) ? $language['maragogi']['slider_button_1'][$current_language] : null,
            'slider_button_2' => isset($language['rooms']['slider_button_2']) ? $language['maragogi']['slider_button_2'][$current_language] : null,
        ];

        include('pages/hero.php');
        include('pages/maragogi.php');
        include('pages/gallery.php');
        include('pages/booking.php');
    } ?>

    <!-- MODULOS PAGINA CONTACTO -->
    <?php if ($ruta == 'contact') {
        $hero_params = [
            'height' => ($config['hero']['height']['contact'] == 100 ? 'h-screen' : 'h-[' . $config['hero']['height']['contact'] . 'vh]'),
            'images' => $config['hero']['images']['contact'],
            'scroll' => $config['hero']['scroll']['contact'],
            'title' => $language['contact']['slider_title'][$current_language],
            'subtitle' => $language['contact']['slider_text'][$current_language],
            'slider_button_1' => isset($language['rooms']['slider_button_1']) ? $language['contact']['slider_button_1'][$current_language] : null,
            'slider_button_2' => isset($language['rooms']['slider_button_2']) ? $language['contact']['slider_button_2'][$current_language] : null,
        ];

        include('pages/hero.php');
        include('pages/contact.php');
        include('pages/booking.php');
    } ?>

    <!-- FOOTER -->
    <?php include('pages/footer.php'); ?>



    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 80;
                    const targetPosition = target.offsetTop - offset;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Form submission handler
        function handleSubmit(event) {
            event.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            event.target.reset();
        }

        // Navbar scroll effect
        let lastScroll = 0;
        const navbar = document.querySelector('nav');
        //const logoimg = document.querySelector('#logo');
        const bookbtn = document.querySelector('#bookbtn');

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll <= 0) {
                navbar.classList.remove('shadow-lg');
                navbar.classList.add('bg-transparent');
                navbar.classList.remove('bg-ocean-50');
                //logoimg.classList.add('shadow-lg');
                bookbtn.classList.add('bg-almar');
                bookbtn.classList.remove('bg-sunrise-400');
            } else {
                navbar.classList.add('shadow-lg');
                navbar.classList.remove('bg-transparent');
                navbar.classList.add('bg-ocean-50');
                //logoimg.classList.remove('shadow-lg');
                bookbtn.classList.remove('bg-almar');
                bookbtn.classList.add('bg-sunrise-400');
            }

            lastScroll = currentScroll;
        });
    </script>

</body>

</html>