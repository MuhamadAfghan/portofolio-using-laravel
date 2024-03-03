@extends('master')

@section('content')
    <!-- Page Content-->
    <div class="container px-4 my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                <section>
                    <style scoped>
                        @media (max-width: 525px) {
                            .d-flex {
                                flex-direction: column;
                                gap: .5rem;
                                align-items: start !important
                            }
                        }
                    </style>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                        <!-- Download resume button-->
                        <!-- Note: Set the link href target to a PDF file within your project-->
                        <a class="btn btn-primary p-2"
                            href="https://portofolio-kangal.vercel.app/image/CV%20Muhamad%20Afghan%20Alzena.pdf">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Download Resume
                        </a>
                    </div>
                    <!-- Experience Card 1-->
                    <div class="card shadow border-0 rounded-3 mb-5">
                        <div class="card-body p-3">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-3">
                                        <div class="text-primary fw-bolder mb-2">2019 - Present</div>
                                        <div class="small fw-bolder">Web Developer</div>
                                        <div class="small text-muted">Stark Industries</div>
                                        <div class="small text-muted">Los Angeles, CA</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>Di Stark Industries, saya mengisi posisi Pengembang Web. Tanggung jawab saya
                                        meliputi merancang dan mengembangkan aplikasi web serta situs web. Saya bekerja
                                        dengan tim internal untuk menciptakan solusi digital yang inovatif dan meningkatkan
                                        pengalaman pengguna. Saya juga terus mempelajari perkembangan terbaru dalam
                                        teknologi web untuk meningkatkan kualitas produk kami.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Experience Card 2-->
                    <div class="card shadow border-0 rounded-3 mb-5">
                        <div class="card-body p-3">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-3">
                                        <div class="text-primary fw-bolder mb-2">2017 - 2019</div>
                                        <div class="small fw-bolder">Software Engineer</div>
                                        <div class="small text-muted">MNCTV</div>
                                        <div class="small text-muted">Jakarta, Indonesia</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>Saya bekerja sebagai Insinyur Perangkat Lunak di MNCTV, Jakarta. Tugas saya
                                        meliputi pengembangan dan pemeliharaan sistem yang mendukung operasional stasiun
                                        televisi. Saya terlibat dalam merancang solusi teknologi untuk meningkatkan
                                        efisiensi layanan. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Education Section-->
                <section>
                    <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                    <!-- Education Card 1-->
                    <div class="card shadow border-0 rounded-3 mb-5">
                        <div class="card-body p-3">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-3">
                                        <div class="text-secondary fw-bolder mb-2">2023 - 2026</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">SMK Wikrama Bogor</div>
                                            <div class="small text-muted">Bogor, Indonesia</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>Selama masa pendidikan ini, saya mendalami berbagai aspek pengembangan perangkat
                                        lunak dan pembuatan gim. Saya belajar tentang teknologi terbaru dalam industri ini
                                        dan terlibat dalam berbagai proyek yang menuntut kreativitas dan pemecahan masalah.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Skills Section-->
                <section>
                    <h2 class="text-primary fw-bolder mb-4">Skills</h2>
                    <!-- Skillset Card-->
                    <div class="card shadow border-0 rounded-3 mb-5">
                        <div class="card-body p-3">
                            <!-- Professional skills list-->
                            <div class="mb-5">
                                <div class="d-flex align-items-center mb-4">
                                    <div
                                        class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        <i class="bi bi-tools"></i>
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Front End</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-3 p-3 h-100">HTML</div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-3 p-3 h-100">
                                            CSS</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-3 p-3 h-100">JS</div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-3 p-3 h-100">Boostrap</div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-3 p-3 h-100">Ajax</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Languages list-->
                            <div class="mb-0">
                                <div class="d-flex align-items-center mb-4">
                                    <div
                                        class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        <i class="bi bi-code-slash"></i>
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Back End</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-3 p-3 h-100">PHP
                                        </div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-3 p-3 h-100">MySQL
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-3 p-3 h-100">
                                            Laravel</div>
                                    </div>
                                </div>
                                {{-- <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-3 p-3 h-100">Python
                                        </div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-3 p-3 h-100">Ruby
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-3 p-3 h-100">Node.js
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
