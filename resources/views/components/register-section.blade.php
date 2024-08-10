<section class="register-container">
    <div class="image-container-reg">
        <div class="gradient-image-reg"></div>
        <img src="{{ asset('/assets/img/registration.png') }}" id="main-image" alt="Hero Image" class="img-fluid">
        {{-- Content --}}
        <div class="register-content container d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-white">Registrasi</h2>
                <p class="text-white my-5 fs-5">Lengkapi data diri kamu dengan benar</p>
                <form method="POST" class="bg-white form-register d-flex flex-column">
                    @csrf
                    <div class="form-floating mb-5 d-flex flex-column justify-content-start align-items-start">
                        <input type="text" class="form-control" id="floatingInputName"
                            placeholder="Masukkan nama anda">
                        <label for="floatingInputName" class="text-black">
                            Nama Lengkap
                            <span class="text-danger">*</span>
                        </label>
                    </div>
                    <div class="form-floating mb-5">
                        <input type="email" class="form-control" id="floatingInputEmail"
                            placeholder="name@example.com">
                        <label for="floatingInputEmail" class="text-black">Email
                            <span class="text-danger">*</span>
                        </label>
                    </div>
                    <div class="form-floating mb-5 d-flex flex-column justify-content-start align-items-start">
                        <input type="number" class="form-control" id="floatingInputNumber"
                            placeholder="Masukkan nomor telepon">
                        <label for="floatingInputNumber" class="text-black">
                            Nomor Telepon
                            <span class="text-danger">*</span>
                        </label>
                        <p class="fs-6 text-secondary mt-2">Isi hanya angka</p>
                    </div>
                    <div class="row up-file my-6">
                        <div class="col-5 mb-5">
                            <div
                                class="bg-light border up-file rounded-4 d-flex justify-content-between align-items-center flex-column">
                                <div></div>
                                <input id="file-upload" type="file" />
                                <label for="file-upload" class="upload-button rounded-circle">
                                    <i class="bi bi-plus-lg"></i>
                                </label>
                                <label for="file-upload" class="custom-file-upload">
                                    <p class="text-black mb-3">Upload Foto Profil</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-7 mb-5 d-flex justify-content-cente align-items-center">
                            <ol>
                                <li class="text-black">Ukuran file maksimal 2MB</li>
                                <li class="text-black">Format file .jpg, .jpeg, .png</li>
                                <li class="text-black">Disarankan foto mencakup 3:4 badan</li>
                            </ol>
                        </div>
                    </div>
                    <div class="mb-5 form-floating">
                        <textarea class="form-control h-6" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Tuliskan alasan mengikuti program"></textarea>
                        <label for="exampleFormControlTextarea1" class="text-black">Alasan mengikuti program “Explore
                            Thailand by
                            Detiktravel”<span class="text-danger">*</span></label>
                    </div>
                    <div class="form-floating mb-5 d-flex flex-column justify-content-start align-items-start">
                        <input type="text" class="form-control" id="floatingInputIg"
                            placeholder="Masukkan akun instagram">
                        <label for="floatingInputIg" class="text-black">
                            Link Instagram
                            <span class="text-danger">*</span>
                        </label>
                        <p class="fs-6 text-secondary mt-2">Contoh: https://www.instagram.com/yourusername</p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Dengan menekan tombol "Daftar", Saya menyetujui <a href="/tac"
                                style="color: #00d1ff">syarat dan ketentuan</a>
                            yang berlaku
                        </label>
                    </div>
                    <button type="submit" class="btn btn-second-color fw-semibold mt-10 rounded-pill">Daftar</button>
                </form>
        </div>
    </div>
</section>
