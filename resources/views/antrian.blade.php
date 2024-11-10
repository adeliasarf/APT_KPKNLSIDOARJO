<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>APT KPKNL SIDOARJO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="dot" />

    <!-- ** CSS Plugins Needed for the Project ** -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/dot_template/plugins/bootstrap/bootstrap.min.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="/dot_template/plugins/themify-icons/themify-icons.css">
    <!--Favicon-->
    <link rel="icon" href="/dot_template/images/logo kpknlsda.png" type="image/x-icon">
    <!-- Import Font Awesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <!-- Main Stylesheet -->
    <link href="/dot_template/assets/style.css" rel="stylesheet" media="screen" />
</head>

<body>
    <!-- header -->
    <header class="banner overlay bg-cover" data-background="/dot_template/images/kpknl.png" style="height: 20vh;">
        <div class="container section">
            <div class="row justify-content-center align-items-center" style="height: 100%;">
                <div class="col-lg-8 text-center">
                    <h1 class="text-white mb-3">APT KPKNL SIDOARJO</h1>
                    <p class="text-white mb-4">Komitmen, Profesional, Amanah, Kesempurnaan</p>
                </div>
            </div>
        </div>
    </header>

    <!-- /header -->

    <!-- topics -->
    <section class="section" style="height: 30vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="section-title">DAFTAR ANTRIAN</h2>
                </div>
                <div class="col-md-6 col-sm-6 mb-4">
                    <a onclick="umum()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
                        <h1 class="font-weight-bold text-primary mb-3">Layanan Umum</h1>
                        <h1 id="antriUmum" class="display-3 font-weight-bold mb-3 mt-0">{{ $antri_umum }}</h1>
                        <h3 class="mb-0">Loket Pelayanan</h3>
                    </a>
                    <!-- Ikon Reset -->
                    <button onclick="resetAntrian('umum')"
                                class="btn" style="position: absolute; top: 1px; right: 1px; background: none; 
                                                   border: none; color: #969696; font-size: 20px;">
                            <i class="fas fa-redo-alt"></i>
                    </button>
                </div>
                <div class="col-md-6 col-sm-6 mb-4">
                    <a onclick="lelang()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
                        <h1 class="font-weight-bold text-primary mb-3">Layanan Lelang</h1>
                        <h1 id="antriLelang" class="display-3 font-weight-bold mb-3 mt-0">{{ $antri_lelang }}</h1>
                        <h3 class="mb-0">Loket Pelayanan</h3>
                    </a>
                    <!-- Ikon Reset -->
                    <button onclick="resetAntrian('lelang')"
                                class="btn" style="position: absolute; top: 1px; right: 1px; background: none; 
                                                   border: none; color: #969696; font-size: 20px;">
                            <i class="fas fa-redo-alt"></i>
                    </button>
                </div>
                <div class="col-md-6 col-sm-6 mb-4">
                    <a onclick="bphtb()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
                        <h1 class="font-weight-bold text-primary mb-3">Layanan BPHTB</h1>
                        <h1 id="antriBPHTB" class="display-3 font-weight-bold mb-3 mt-0">{{ $antri_bphtb }}</h1>
                        <h3 class="mb-0">Loket BPHTB</h3>
                    </a>
                    <!-- Ikon Reset -->
                    <button onclick="resetAntrian('bphtb')"
                                class="btn" style="position: absolute; top: 1px; right: 1px; background: none; 
                                                   border: none; color: #969696; font-size: 20px;">
                            <i class="fas fa-redo-alt"></i>
                    </button>
                </div>
                <div class="col-md-6 col-sm-6 mb-4">
                    <a onclick="skpt()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
                        <h1 class="font-weight-bold text-primary mb-3">Layanan SKPT</h1>
                        <h1 id="antriSKPT" class="display-3 font-weight-bold mb-3 mt-0">{{ $antri_skpt }}</h1>
                        <h3 class="mb-0">Loket SKPT</h3>
                    </a>
                    <!-- Ikon Reset -->
                    <button onclick="resetAntrian('skpt')"
                                class="btn" style="position: absolute; top: 1px; right: 1px; background: none; 
                                                   border: none; color: #969696; font-size: 20px;">
                            <i class="fas fa-redo-alt"></i>
                    </button> 
                </div>
            </div>
        </div>
    </section>
    <!-- /topics -->

    <!-- footer -->
    <footer class="section pb-4" style="height: 10vh">
        <div class="container">
            <div class="row align-items-center"></div>
        </div>
    </footer>
    <!-- /footer -->

    <!-- ** JS Plugins Needed for the Project ** -->
    <script src="/dot_template/plugins/jquery/jquery-1.12.4.js"></script>
    <script src="/dot_template/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="/dot_template/plugins/match-height/jquery.matchHeight-min.js"></script>
    <script src="/dot_template/assets/script.js"></script>

    <script>
    // Fungsi untuk memperbarui antrian Layanan Umum
    function umum() {
        var audioPrefix = new Audio('/audio/Layanan Umum.mp3');
        audioPrefix.play();
        audioPrefix.addEventListener('ended', function () {
            $.ajax({
                url: "/antri_umum",  // Menggunakan endpoint khusus untuk layanan umum
                type: 'GET',
                success: function (data) {
                    $("#antriUmum").html(data.antri_umum);

                    // Mainkan audio sesuai nomor antrian
                    var audioNumber = new Audio('/audio/' + data.antri_umum + '.mp3');
                    audioNumber.play();

                    // Mainkan audio loket layanan
                    audioNumber.addEventListener('ended', function () {
                        var audioLoket = new Audio('/audio/Loket APT.mp3');
                        audioLoket.play();
                    });
                }
            });
        });
    }

    // Fungsi untuk memperbarui antrian Layanan Lelang
    function lelang() {
        var audioPrefix = new Audio('/audio/Layanan Lelang.mp3');
        audioPrefix.play();
        audioPrefix.addEventListener('ended', function () {
            $.ajax({
                url: "/antri_lelang",  // Menggunakan endpoint khusus untuk layanan lelang
                type: 'GET',
                success: function (data) {
                    $("#antriLelang").html(data.antri_lelang);

                    // Mainkan audio sesuai nomor antrian
                    var audioNumber = new Audio('/audio/' + data.antri_lelang + '.mp3');
                    audioNumber.play();

                    // Mainkan audio loket layanan
                    audioNumber.addEventListener('ended', function () {
                        var audioLoket = new Audio('/audio/Loket APT.mp3');
                        audioLoket.play();
                    });
                }
            });
        });
    }

    // Fungsi untuk memperbarui antrian Layanan BPHTB
    function bphtb() {
        var audioPrefix = new Audio('/audio/Layanan BPHTB.mp3');
        audioPrefix.play();
        audioPrefix.addEventListener('ended', function () {
            $.ajax({
                url: "/antri_bphtb",  // Menggunakan endpoint khusus untuk layanan BPHTB
                type: 'GET',
                success: function (data) {
                    $("#antriBPHTB").html(data.antri_bphtb);

                    // Mainkan audio sesuai nomor antrian
                    var audioNumber = new Audio('/audio/' + data.antri_bphtb + '.mp3');
                    audioNumber.play();

                    // Mainkan audio loket layanan
                    audioNumber.addEventListener('ended', function () {
                        var audioLoket = new Audio('/audio/Loket BPHTB.mp3');
                        audioLoket.play();
                    });
                }
            });
        });
    }

    // Fungsi untuk memperbarui antrian Layanan SKPT
    function skpt() {
        var audioPrefix = new Audio('/audio/Layanan SKPT.mp3');
        audioPrefix.play();
        audioPrefix.addEventListener('ended', function () {
            $.ajax({
                url: "/antri_skpt",  // Menggunakan endpoint khusus untuk layanan SKPT
                type: 'GET',
                success: function (data) {
                    $("#antriSKPT").html(data.antri_skpt);

                    // Mainkan audio sesuai nomor antrian
                    var audioNumber = new Audio('/audio/' + data.antri_skpt + '.mp3');
                    audioNumber.play();

                    // Mainkan audio loket layanan
                    audioNumber.addEventListener('ended', function () {
                        var audioLoket = new Audio('/audio/Loket SKPT.mp3');
                        audioLoket.play();
                    });
                }
            });
        });
    }

    function resetAntrian(layanan) {
    $.ajax({
        url: "/reset_antrian/" + layanan,  // Endpoint untuk reset antrian
        type: 'GET',
        success: function (data) {
            if (data.status === 'success') {
                // Perbarui elemen antrian di halaman setelah reset berhasil
                if (layanan === 'umum') {
                    $("#antriUmum").html(0);
                } else if (layanan === 'lelang') {
                    $("#antriLelang").html(0);
                } else if (layanan === 'bphtb') {
                    $("#antriBPHTB").html(0);
                } else if (layanan === 'skpt') {
                    $("#antriSKPT").html(0);
                }
            }
        },
        error: function () {
            alert("Terjadi kesalahan saat mereset antrian " + layanan + ".");
        }
    });
}
</script>

</body>
</html>