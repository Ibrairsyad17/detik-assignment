<section class="news-section pt-20 pb-10">
    <div class="d-flex flex-column container">
        <div class="d-flex justify-content-start align-items-center mt-10">
            <img src="{{ asset('/assets/img/detiktravel-logo.svg') }}" class="h-8" alt="detiktravel">
            <h1 class="text-warning ms-3">Update</h1>
        </div>
        <div class="row mt-10">
            <div class="col-12 col-md-6">
                <a href="/#news" class="feature-img-container d-block rounded-5 h-full">
                    <img src="{{ asset('assets/img/artikel-1.png') }}" alt="news-1"
                        class="ft-img rounded-5 img-fluid" />
                    <div class="d-flex flex-column align-items-start overlay-text">
                        <h1 class="fs-4 text-white">Warga Thailand Pakai Boneka Doraemon untuk Ritual Pemanggil Hujan
                        </h1>
                        <p class="mt-2">3 jam yang lalu</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 d-flex flex-column list-news">
                <x-news-card image="assets/img/artikel-2.png"
                    title="Thailand Ngarep Cuan Banyak dari Turis China dan Jepang" time="1 jam yang lalu" />
                <x-news-card image="assets/img/artikel-3.png"
                    title="Cahaya Lampu Hiasi Kuil Wat Phra Dhammakaya Thailand Saat Waisak" time="1 jam yang lalu" />
                <x-news-card image="assets/img/artikel-4.png"
                    title="Cantiknya Lisa BLACKPINK Berwisata Sejarah di Thailand" time="1 jam yang lalu" />

                <a href="/register"
                    class="btn btn-second-color news-btn btn-primary fs-6 fw-semibold mt-5 w-full rounded-2">
                    Lihat Berita Lainnya <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
