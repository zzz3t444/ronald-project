<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/categoies.css'); ?>">
</head>

<body class="bg-black">
    <?php $this->load->view('_partials/navbar.php'); ?>
    <div class="container mx-auto py-16 px-4">
        <div class="text-center text-neutral-200 tracking-tighter font-bold text-9xl dm-sans">
            <h1 class="text-red-500">About.</h1>
            <h1 class="-mt-3">Sebelah.</h1>
            <h1 class="-mt-3">Layar.</h1>
        </div>
        <div>
            <ul class="flex items-center gap-5 justify-center mt-10">
                <button class="px-8 py-2 hover:scale-95 duration-300 bg-red-500 rounded-lg hover:bg-red-600 text-neutral-200 archivo text-sm">Read More</button>
                <button class="px-8 py-2 hover:scale-95 duration-300 border border-neutral-800 rounded-lg text-sm hover:border-neutral-500 text-neutral-200">Send Me</button>
            </ul>
            <p class="text-neutral-400 text-center max-w-3xl mx-auto mt-8 archivo leading-7">Selamat datang di Sebelah Layar, destinasi utama Anda untuk menikmati dunia film dari sudut pandang yang berbeda! Kami adalah platform yang didedikasikan untuk menyediakan ulasan film</p>
            <p class="uppercase font-light text-center text-neutral-400 tracking-wider mt-20">rise 26 May 2024</p>
        </div>

        <!-- for About Content -->
        <div class="mt-20">
            <h1 class="text-4xl font-bold text-center text-neutral-200 dm-sans tracking-tight">Who is Sebelah Layar?</h1>
            <ul class="flex items-start justify-center mt-8 gap-5">
                <p class="max-w-xl text-neutral-400 text-sm archivo leading-6">Sebelah <span class="text-red-500">Layar</span> didirikan oleh sekelompok pecinta film yang bersemangat dan berpengalaman di dunia perfilman. Kami percaya bahwa setiap film memiliki cerita unik di balik layar yang patut untuk diungkapkan. Tim kami terdiri dari <span class="text-red-500">penulis, kritikus, dan sineas</span> yang berkomitmen untuk memberikan perspektif baru dan mendalam tentang berbagai genre film, baik dari dalam negeri maupun internasional.</p>
                <p class="max-w-xl text-neutral-400 text-sm archivo leading-6">Misi kami adalah menghubungkan penonton dengan kekayaan dunia film melalui konten berkualitas <span class="text-red-500">tinggi</span> dan <span class="text-red-500">informatif</span>. Kami ingin menjadi jembatan antara pembuat film dan penonton, membawa wawasan yang belum pernah Anda lihat sebelumnya dan <span class="text-red-500">membantu</span> Anda <span class="text-red-500">menemukan</span> film yang sesuai dengan selera Anda.</p>
            </ul>
        </div>

        <div class="flex items-center mt-16 justify-center gap-10">
            <img src="https://www.greenscene.co.id/wp-content/uploads/2018/09/film.jpg" class="rounded-3xl" alt="" width="600px" height="500px">
            <div>
                <ul>
                    <h1 class="text-2xl font-semibold dm-sans text-neutral-200">Ulasan Film</h1>
                    <p class="max-w-xl archivo text-sm text-neutral-400 mt-2 leading-7">Kami menyediakan ulasan film yang mendalam dan objektif, mengupas setiap aspek mulai dari alur cerita, karakter, sinematografi, hingga pesan moral yang disampaikan.</p>
                </ul>
                <ul class="mt-5">
                    <h1 class="text-2xl font-semibold dm-sans text-neutral-200">Rekomendasi Film</h1>
                    <p class="max-w-xl archivo text-sm text-neutral-400 mt-2 leading-7">Temukan film-film terbaik sesuai dengan genre kesukaan Anda. Tim kami siap memberikan rekomendasi yang akan memperkaya pengalaman menonton Anda.</p>
                </ul>
                <ul class="mt-5">
                    <h1 class="text-2xl font-semibold dm-sans text-neutral-200">Berita Terbaru</h1>
                    <p class="max-w-xl archivo text-sm text-neutral-400 mt-2 leading-7">Dapatkan update terkini tentang film-film baru, perkembangan di industri perfilman, serta berita eksklusif dari balik layar.</p>
                </ul>
            </div>
        </div>
    </div>

    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>