<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main class="font-lora">
        
        <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 'login'){
            include 'includes/logout.php';
        }else {
            include 'includes/header.php' ;
        } ?>
        <section class="mix-blend-overlay relative w-full h-[80vh] overflow-hidden">
            <img src="./assets/images/12.jpg" alt="cover image" class="h-[80vh] w-full object-cover absolute opacity-70">
            <div class="absolute -z-10 w-full h-[80vh] bg-black"></div>
            <div class="absolute flex justify-center px-20 w-full text-white z-10 capitalize h-[80vh] flex-col gap-y-5">
                <h1 class="text-7xl font-semibold tracking-wider ">Hello we are!</h1>
                <h1 class="text-4xl font-bold tracking-wider text-[rgb(255,255,255)]">"DYOXHY"</h1>
                <p class="max-w-3xl w-full text-left font-medium text-lg">Horor dan Kreativitas Bersatu:Eksplorasi Dunia Seram Bersama Junji Ito!”.</p>
            </div>
        </section>
        <div id="gallery" class="mb-24"></div>
        <section class="flex justify-center flex-col container mx-auto my-24">
            <div class="flex flex-col">
                <h1 class="text-3xl text-neutral-800 text-center mb-4 uppercase tracking-wider font-medium">THE GALLERY</h1>
                <p class="text-neutral-600 mx-auto max-w-5xl text-center mb-12">Telusuri Keindahan yang Tak Terhingga: Mengembara di Antara Pepohonan yang Merayakan Kehidupan, Menyatu dengan Gemerlapnya Matahari Terbenam, dan Merasakan Ketenangan yang Hanya Dapat Ditemukan di Antara Pemandangan yang Menggetarkan Jiwa.</p>
                <div class="mt-1 ">
        <div class="flex justify-center mt5">
            <a href="pages/gallery/">
            <button class="bg-[#e29494] text-white px-14 py-3 rounded-full hover:bg-white hover:text-[rgb(41,39,39)] hover:border-2 transition border-2 border-[rgb(113,43,43)] ">explore</button></a>
        </div>
        <div class="mt-10">
        </div>
        <div class="grid grid-cols-3 grid-rows-2 gap-2">
            <img src="./assets/images/7.jpg" alt="" class="row-span-3 h-full rounded-md object-cover">
            <img src="./assets/images/2.jpg" alt="" class="h-full w-full rounded-md object-cover" />
            <img src="./assets/images/3.jpg" alt="" class="h-full w-full rounded-md object-cover" />
            <img src="./assets/images/4.jpg" alt="" class="h-full w-full rounded-md object-cover" />
            <img src="./assets/images/5.jpg" alt="" class="h-full w-full rounded-md object-cover" />
        </div>
        </div>
        </section>
        <section class="flex justify-center flex-col px-52 bg-[#974b4b] py-24" id="faq">
            <h1 class="text-3xl text-neutral-100 text-center mb-20 uppercase tracking-wider font-medium">faq</h1>
            <div class="flex justify-center text-center gap-x-10">
                <div class="space-y-2 ">
                    <h1 class="text-xl text-neutral-100">Apa itu Junji Ito?</h1>
                    <p class="text-neutral-100">unji Ito adalah seorang mangaka Jepang yang terkenal dengan karya-karya horornya yang menggetarkan.</p>
                </div>
                <div class="space-y-2">
                    <h1 class="text-xl text-neutral-100">Apakah semua karya Junji Ito memiliki tema horor?</h1>
                    <p class="text-neutral-100">Ya, mayoritas karyanya memiliki elemen horor yang mendalam. Ito memiliki cara unik untuk menggambarkan kegelapan dalam berbagai bentuk.</p>
                </div>
                <div class="space-y-2">
                    <h1 class="text-xl text-neutral-100">Bagaimana cara menjelajahi karya-karya Junji Ito di sini?</h1>
                    <p class="text-neutral-100">unji Ito adalah seorang mangaka Jepang yang terkenal dengan karya-karya horornya yang menggetarkan.<a href="/pages/contact/">Contact Us</a>' section on our website. We're here to assist you..</p>
                </div>
            </div>
            <div id="about" class="mb-24"></div>
        </section>
        <section class="flex justify-center flex-col px-52 my-24 mb-64">
            <h1 class="text-3xl text-neutral-800 text-center mb-20 uppercase tracking-wider font-medium">about us</h1>
            <div class="flex items-center gap-x-10">
                <img src="./assets/images/12.jpg" alt="" class="w-[36rem] h-50 object-cover">
                <div class="max-w-3xl w-full text-lg">
                    <p>Hai, kami adalah tim yang bersemangat tentang keindahan alam! Kami percaya bahwa setiap sudut dunia ini memiliki keunikan dan pesona yang menakjubkan untuk dijelajahi. Dari hutan lebat hingga pantai berpasir putih, kami mencintai segala jenis pemandangan alam.</p>
                    <p>Kami di sini untuk berbagi keindahan ini dengan Anda. Melalui situs web kami, kami ingin membawa Anda dalam perjalanan visual melalui pemandangan yang menakjubkan. Kami mengumpulkan gambar-gambar yang memukau dari penjuru dunia, memberikan inspirasi untuk petualangan Anda berikutnya atau sekadar untuk mengisi hari Anda dengan keindahan.</p>
                    <p>Bergabunglah dengan kami dalam menghargai keajaiban alam yang luar biasa ini. Mari jelajahi, mari terpesona, dan mari bersama-sama merayakan keindahan yang luar biasa dari alam kita!</p>
                    
                </div>
            </div>
            </p>
        </section>
        
    </main>
</body>

</html>