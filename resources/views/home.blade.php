<x-layout>
    <section class="hero-container">
        <div class="image-container">
            <div class="gradient-image"></div>
            <img src="{{ asset('/assets/img/cover.png') }}" id="main-image" alt="Hero Image" class="img-fluid">
            {{-- Content --}}
            <div class="hero-content container row py-5">
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-start">
                    <div class="hero-title-container">
                        <img src="{{ asset('assets/img/hero-title.svg') }}" alt="hero-title"
                            class="hero-title-img main-image">
                    </div>
                    <a href="/#about" class="btn btn-first-color fw-semibold mt-10 w-full w-lg-auto rounded-pill">
                        TENTANG PROGRAM
                    </a>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-end">
                    <swiper-container class="mySwiper m-4" slides-per-view="2" space-between="10" loop="true"
                        autoplay>
                        <swiper-slide class="swiper-slide-active">
                            <img src="{{ asset('/assets/img/cover.png') }}" alt="Hero Image" class="swiper-img">
                        </swiper-slide>
                        <swiper-slide>
                            <img src="{{ asset('/assets/img/cover-2.png') }}" alt="Hero Image" class="swiper-img">
                        </swiper-slide>
                        <swiper-slide>
                            <img src="{{ asset('/assets/img/cover-3.png') }}" alt="Hero Image" class="swiper-img">
                        </swiper-slide>
                    </swiper-container>
                </div>
            </div>
        </div>
    </section>
</x-layout>
