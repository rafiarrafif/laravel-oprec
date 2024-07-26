<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OPREC SMANTA 2024</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="h-dvh">
    <div id="login-nav" class="login-btn-container">
        @if ($session_avaiable == false)
            <button class="btn btn-success px-12" onclick="login_modal.showModal()">Lihat Hasil</button>
            <dialog id="login_modal" class="modal ">
                <div class="modal-box pb-0 pt-4">
                    <h3 class="text-lg font-bold">Masukan token</h3>
                    <form action="{{ route('login') }}" class="mt-6" method="POST" id="mainForm">
                        @csrf
                        <label class="input input-bordered flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                class="h-4 w-4 opacity-70">
                                <path fill-rule="evenodd"
                                    d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <input type="password" name="password" class="grow" required autocomplete="on" />
                        </label>
                        <button type="submit" class="btn w-full btn-success mt-4" onclick="submit(this)">Lihat
                            Hasil</button>
                    </form>
                    <p class="py-4 text-xs">Tekan bagian luar popup untuk menutup</p>
                </div>
                <form method="dialog" class="modal-backdrop">
                    <button>close</button>
                </form>
            </dialog>
        @else
            <button class="btn btn-success px-12" onclick="redirect(this)">Lihat Hasil</button>
        @endif
    </div>
    <!-- Welcome Session -->
    <div class="hero min-h-screen" style="background-image: url(./images/Fotbar-os.jpeg);">
        <div class="hero-overlay bg-opacity-70"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-3 mt-3 text-4xl font-bold font-montserrat">Welcome</h1>
            </div>
        </div>
    </div>
    <!-- Welcome End -->

    <!-- Content -->
    <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0 glass">
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]"
                aria-hidden="true">
                <defs>
                    <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1"
                        patternUnits="userSpaceOnUse">
                        <path d="M100 200V.5M.5 .5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                    <path
                        d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z"
                        stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0"
                    fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
            </svg>
        </div>
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
            <div
                class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <!-- Pengertian Apa Itu OSIS -->
                    <div class="lg:max-w-lg">
                        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-800 sm:text-3xl font-montserrat">Apa
                            itu OSIS?
                        </h1>
                        <h2 class="mt-8 text-2xl font-bold tracking-tight text-gray-900 font-montserrat">Pengertian</h2>
                        <p class="mt-2 text-ll leading-8 text-gray-700 font-poppins">OSIS atau Organisasi Siswa Intra
                            sekolah
                            merupakan wadah pembinaan kesiswaan di sekolah untuk mengembangkan minat, bakat, serta
                            potensi siswa.</p>
                    </div>
                    <!-- Fungsi OSIS -->
                    <div class="lg:max-w-lg text-start">
                        <h2 class="mt-8 text-2xl font-bold tracking-tight text-gray-900 font-montserrat">Fungsi</h2>
                        <p class="mt-2 text-l leading-8 text-gray-700 font-poppins">1.
                            Sebagai organisasi resmi di sekolah yang mewadahi
                            kegiatan para siswa dengan jalur pembinaan untuk
                            tujuan pembinaan kesiswaan.<br /></p>
                        <p class="mt-2 text-l leading-8 text-gray-700 font-poppins">2.
                            Berperan sebagai motivator dalam menggali minat
                            dan bakat siswa yang dikembangkan melalui
                            kegiatan-kegiatan OSIS dan ekstrakurikuler.<br /></p>
                        <p class="mt-2 text-l leading-8 text-gray-700 font-poppins">
                            3.
                            Secara preventif OSIS ikut mengamankan sekolah dari
                            segala ancaman yang datang dari dalam maupun
                            dari luar, seperti menyelesaikan persoalan perilaku
                            menyimpang siswa dan lain sebagainya.</p>
                    </div>
                </div>
            </div>
            <!-- Gmbar/Image -->
            <div
                class="-ml-8 -mt-8 p-8 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                <img class="w-[25rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[45rem]"
                    src="{{ asset('images/Fotbar-os.jpeg') }}" alt="">
            </div>
            <div
                class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <!-- Tujuan OSIS -->
                    <div class="lg:max-w-lg text-start">
                        <h2 class="mt-8 text-2xl font-bold tracking-tight text-gray-900 font-montserrat">Tujuan</h2>
                        <p class="mt-2 text-l leading-8 text-gray-700 font-poppins">Menghimpun ide, pemikiran,
                            bakat, kreativitas, serta
                            minat para siswa ke dalam
                            salah satu wadah yang
                            bebas dari berbagai macam
                            pengaruh negatif dari luar
                            sekolah.<br /></p>
                    </div>
                    <!-- Anggota OSIS -->
                    <div class="lg:max-w-lg text-start">
                        <h2 class="mt-8 text-2xl font-bold tracking-tight text-gray-900 font-montserrat">Keanggotaan
                        </h2>
                        <p class="mt-2 text-l leading-8 text-gray-700 font-poppins"> Seluruh siswa / siswi Sekolah
                            Menengah Atas
                            Negeri 1 Tawangsari.<br /></p>
                    </div>
                    <!-- Kepengurusan -->
                    <div class="lg:max-w-lg text-start">
                        <h2 class="mt-8 text-2xl font-bold tracking-tight text-gray-900 font-montserrat">Kepengurusan
                        </h2>
                        <p class="mt-2 text-l leading-8 text-gray-700 font-poppins">Untuk melihat struktur kepengurusan,
                            tekan
                            dibawah sini<br /></p>
                        <a href="structure.html" class="mt-4">
                            <button class="btn btn-outline font-poppins">Klik aku 👌</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->

    <!-- Footer -->
    <footer class="footer bg-white text-black items-center p-4 flex justify-between">
        <aside class="flex items-center">
            <p>Osmanta© - All right reserved</p>
        </aside>
        <nav class="flex gap-4">
            <!-- Whatsapp -->
            <a href="https://wa.me/6285878288582?text=Halo%20saya%20tertarik%20untuk%20mengetahui%20lebih%20lanjut%20tentang%20kegiatan%20OSIS"
                target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    class="fill-current text-black">
                    <path
                        d="M6.014 8.00613C6.12827 7.1024 7.30277 5.87414 8.23488 6.01043L8.23339 6.00894C9.14051 6.18132 9.85859 7.74261 10.2635 8.44465C10.5504 8.95402 10.3641 9.4701 10.0965 9.68787C9.7355 9.97883 9.17099 10.3803 9.28943 10.7834C9.5 11.5 12 14 13.2296 14.7107C13.695 14.9797 14.0325 14.2702 14.3207 13.9067C14.5301 13.6271 15.0466 13.46 15.5548 13.736C16.3138 14.178 17.0288 14.6917 17.69 15.27C18.0202 15.546 18.0977 15.9539 17.8689 16.385C17.4659 17.1443 16.3003 18.1456 15.4542 17.9421C13.9764 17.5868 8 15.27 6.08033 8.55801C5.97237 8.24048 5.99955 8.12044 6.014 8.00613Z">
                    </path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 23C10.7764 23 10.0994 22.8687 9 22.5L6.89443 23.5528C5.56462 24.2177 4 23.2507 4 21.7639V19.5C1.84655 17.492 1 15.1767 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23ZM6 18.6303L5.36395 18.0372C3.69087 16.4772 3 14.7331 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21C11.0143 21 10.552 20.911 9.63595 20.6038L8.84847 20.3397L6 21.7639V18.6303Z"
                        fill="black" />
                </svg>
            </a>
            <!-- Whatsapp End -->

            <!-- Youtube -->
            <a href="https://www.youtube.com/@smantajuara" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    class="fill-current text-black">
                    <path
                        d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                    </path>
                </svg>
            </a>
            <!-- Youtube End -->

            <!-- Instagram -->
            <a href="https://www.instagram.com/mpkosismanta/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    class="fill-current text-black">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                        fill="#17171f" />
                    <path
                        d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                        fill="#17171f" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z"
                        fill="#17171f" />
                </svg>
            </a>
            <!-- Instagram End -->

        </nav>
    </footer>

    <script>
        function redirect(button) {
            button.disabled = true;
            button.textContent = "Sebentar ya...";
            window.location.href = '{{ route('result') }}';
        }

        document.getElementById('mainForm').addEventListener('submit', function(event) {
            const submitButton = this.querySelector('button[type="submit"]');
            submitButton.disabled = true;
            submitButton.innerHTML = "Mencari Token...";
        });
    </script>
</body>

</html>
