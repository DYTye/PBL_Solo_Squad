@extends('layouts.appfe')

@push('style')
<style>
    @media (max-width: 576px) {
        .card-title {
            font-size: 14px;
        }

        .card-text {
            font-size: 13px;
        }

        .card-header {
            font-size: 14px;
        }

        .carousel img {
            height: 180px;
            object-fit: cover;
        }

        .section-header h4,
        .section-title h4 {
            font-size: 18px;
        }

        .main-content p {
            font-size: 14px;
        }

        .sambutan-img {
            width: 100%;
            max-width: 200px;
        }
    }

    /* Tambahan padding agar tidak terlalu mepet */
    .card {
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .card-img-top {
        height: 160px;
        object-fit: cover;
    }
</style>
@endpush

@section('content')
<div class="main-content" data-aos="fade-up">

    {{-- Carousel --}}
    <div class=" mb-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img\c3.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img\c4.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img\c3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>

    <section class="section">
        <div class="section-header">
            <div class="container my-5">
                <div class="row text-center">
                    <div class="col-md-6" data-aos="fade-up">
                        <h4 class="font-weight-bold mb-4 text-success"><i class="fas fa-eye"></i> Visi</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-start">
                                <i class="fas fa-bullseye text-danger mr-2 mt-1"></i>
                                <span>Menjadi institusi pendidikan unggulan yang menghasilkan generasi berkarakter,
                                    berprestasi, dan berwawasan global.</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <i class="fas fa-lightbulb text-warning mr-2 mt-1"></i>
                                <span>Mengembangkan inovasi dalam pendidikan untuk menjawab tantangan zaman.</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <i class="fas fa-globe text-success mr-2 mt-1"></i>
                                <span>Menyiapkan peserta didik agar mampu bersaing di tingkat nasional maupun
                                    internasional.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <h4 class="font-weight-bold mb-4 text-success"><i class="fas fa-bullseye"></i> Misi</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-start">
                                <i class="fas fa-check-circle text-success mr-2 mt-1"></i>
                                <span>Menyelenggarakan proses pembelajaran yang berkualitas dan inovatif untuk
                                    mengembangkan potensi peserta didik secara maksimal.</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <i class="fas fa-chalkboard-teacher text-info mr-2 mt-1"></i>
                                <span>Meningkatkan kualitas sumber daya manusia melalui pelatihan dan pengembangan
                                    profesionalisme guru dan tenaga pendukung.</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <i class="fas fa-school text-warning mr-2 mt-1"></i>
                                <span>Membangun lingkungan sekolah yang aman, nyaman, dan kondusif untuk mendukung
                                    perkembangan akademik dan non-akademik.</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <i class="fas fa-handshake text-success mr-2 mt-1"></i>
                                <span>Menjalin kerjasama yang erat dengan masyarakat dan stakeholder untuk mendukung
                                    keberhasilan pendidikan.</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <i class="fas fa-heart text-danger mr-2 mt-1"></i>
                                <span>Mendorong penerapan nilai-nilai moral, etika, dan budaya yang luhur dalam setiap
                                    kegiatan pembelajaran dan kehidupan sehari-hari.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-title" data-aos="fade-up">
            <h4>Sambutan Kepala Sekolah</h4>
        </div>
        <div class="row my-3 text-center" data-aos="fade-up">
            <div class="col-md-6 col-12 d-flex justify-content-center mb-3">
                <div class="card" style="width:;">
                    <img src="img/fern1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fern S.P.d</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-12 text-left d-flex align-items-center" data-aos="fade-in" data-aos-delay="500">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, at officia? Soluta asperiores
                    dolorem nam quam voluptatem mollitia provident animi totam. Praesentium unde quam, minima ut
                    nesciunt dicta quibusdam laudantium, a id repellendus consequuntur iusto dolorum placeat commodi
                    repellat, earum blanditiis! Repudiandae, debitis. Cumque, id? Adipisci, repellendus? Facilis,
                    beatae? Nulla,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, at officia? Soluta asperiores
                    dolorem nam quam voluptatem mollitia provident animi totam. Praesentium unde quam, minima ut
                    nesciunt dicta quibusdam laudantium, a id repellendus consequuntur iusto dolorum placeat commodi
                    repellat, earum blanditiis! Repudiandae, debitis. Cumque, id? Adipisci, repellendus? Facilis,
                    beatae? Nulla, </p>
            </div>
        </div>

        <div data-aos="fade-in" data-aos-delay="300">
            <div class="section-title">
                <h4>Tenaga Ajar</h4>
            </div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-3 mb-4 d-flex">
                        <div class="card flex-fill d-flex flex-column">
                            <img src="img/fern.png" class="card-img-top" alt="Kepala Sekolah">
                            <div class="card-header ">Kepsek</div>
                            <div class="card-body  flex-grow-1 d-flex flex-column">
                                <h5 class="card-title">Fern</h5>
                                <p class="card-text mt-auto">Pemimpin yang bijak dan berdedikasi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mb-4 d-flex">
                        <div class="card flex-fill d-flex flex-column">
                            <img src="img/owi.webp" class="card-img-top" alt="Raja Jawa">
                            <div class="card-header ">Raja Jawa</div>
                            <div class="card-body  flex-grow-1 d-flex flex-column">
                                <h5 class="card-title">Mulyono</h5>
                                <p class="card-text mt-auto">Gaya mengajar unik dan semangat tinggi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mb-4 d-flex">
                        <div class="card flex-fill d-flex flex-column">
                            <img src="img/owo.webp" class="card-img-top" alt="Operator">
                            <div class="card-header ">Operator</div>
                            <div class="card-body  flex-grow-1 d-flex flex-column">
                                <h5 class="card-title">Prabski</h5>
                                <p class="card-text mt-auto">Ahli teknologi sekolah.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mb-4 d-flex">
                        <div class="card flex-fill d-flex flex-column">
                            <img src="img/fern.png" class="card-img-top" alt="Guru IPA">
                            <div class="card-header ">Guru IPA</div>
                            <div class="card-body  flex-grow-1 d-flex flex-column">
                                <h5 class="card-title">Dina</h5>
                                <p class="card-text mt-auto">Membuat sains seru dan mudah.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection

@push('script')
@endpush
