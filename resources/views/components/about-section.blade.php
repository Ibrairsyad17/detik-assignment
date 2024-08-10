<section class="about-section py-20">
    <div class="row container mx-auto">
        <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('/assets/img/about-image.png') }}" alt="" class="about-image">
        </div>
        <div class="col-12 col-md-6 d-flex flex-column justify-content-start align-items-start">
            <div class="about-program">
                <h1 class="text-white">
                    Tentang Program
                </h1>
                <p class="text-white">
                    Bergabunglah dalam "Explore Thailand bersama Detiktravel"! Kompetisi ini terbuka bagi pembaca
                    Detiktravel yang ingin menikmati perjalanan ke Thailand. Kunjungi destinasi menakjubkan seperti
                    pantai Pak Bia Island dan destinasi lain di Phuket, Thailand. Jadi bagian dari perjalanan kami dan
                    menangkan hadiah jalan-jalan yang tak terlupakan!
                </p>
                <a href="/register" class="btn btn-first-color fw-semibold mt-5 w-lg-auto rounded-pill">
                    DAFTAR SEKARANG
                </a>
            </div>
            <div class="timeline mt-10 w-full">
                <h1 class="text-white">
                    Mekanisme
                </h1>
                <x-timeline-range title="Isi Formulir" date="1 - 31 Mei 2023"
                    description="Lengkapi formulir pendaftaran dengan data sebenarnya" />
                <x-timeline-range title="Penjurian" date="1 - 7 Juni 2023"
                    description="Ikuti rangkaian penjurian online/offline" />
                <x-timeline-range title="Pengumuman Pemenang" date="11 Juni 2023"
                    description="Ikuti rangkaian penjurian online/offline" />
            </div>
        </div>
    </div>
</section>
