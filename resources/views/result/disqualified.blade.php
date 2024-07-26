<!DOCTYPE html>
<html lang="en" style="background: #ff0000 !important">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OPREC SMANTA 2024</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app-D5DSSJFG.css') }}">
</head>

<body class="h-screen">
    <main class="h-screen flex flex-col">
        <div id="top" class="pt-8 mx-4 flex-grow">
            <h1 class="text-sm text-white font-black uppercase font-montserrat">{{ $username }},</h1>
            <h3 class="mt-4 text-4xl text-white font-bold uppercase font-montserrat">Anda dinyatakan tidak lolos seleksi
                osis
            </h3>
            <p class="text-xs mt-3 text-white font-light uppercase font-montserrat">Kegagalan bukanlah akhir dari
                segalanya. Gunakan pengalaman ini sebagai pelajaran berharga untuk tumbuh dan mencapai tujuan kamu di
                masa depan.</p>
        </div>
        <div id="bottom" class="w-screen h-56 flex flex-col">
            <div id="button-back" class="w-screen h-24 py-5 flex justify-center">
                <button
                    class=" bg-white flex items-center font-medium text-black text-sm font-montserrat gap-3 px-8 rounded-lg"
                    onclick="goHome(this)">
                    <img src="{{ asset('assets/back-icon.png') }}" class="h-fit w-6">Keluar</button>
            </div>
            <div id="footer" class="w-screen flex-grow bg-white flex gap-5 justify-center items-center">
                <img src="{{ asset('assets/logo.png') }}" class="w-20 h-fit">
                <div id="text" class="font-montserrat">
                    <span class="text-sm text-black font-medium">Dibuat oleh</span>
                    <h3 class="text-3xl text-black font-black">OSIS SMANTA</h3>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('build/assets/app-C1-XIpUa.js') }}"></script>

    <script>
        const elements = document.querySelectorAll('.uppercase');
        elements.forEach(element => {
            element.textContent = element.textContent.toUpperCase();
        });

        function goHome(button) {
            button.disabled = true;
            button.style.opacity = '0.6';
            button.innerHTML = "Sebentar ya...";
            window.location.href = "{{ route('logout') }}";
        }
    </script>
</body>

</html>
