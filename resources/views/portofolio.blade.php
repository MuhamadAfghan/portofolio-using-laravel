<!-- Menghubungkan dengan view template master -->
{{-- @dd($portofolios) --}}
@extends('master')

@section('content')
    <!-- Projects Section-->
    <style scoped>
        @media (max-width: 425px) {
            .col-lg-11 {
                padding: 0
            }
        }
    </style>
    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Portofolio</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Project Card 1-->
                    @foreach ($portofolios as $portofolio)
                        <div class="card overflow-hidden shadow-sm rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex flex-column-reverse text-center align-items-center" style="">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">{{ $portofolio['title'] }}</h2>
                                        <a href="{{ $portofolio['link'] }}" class="btn btn-primary" target="blank">Demo</a>
                                    </div>
                                    <a href="{{ $portofolio['link'] }}" target="blank">
                                        <img class="img-fluid" src="{{ $portofolio['image'] }}"
                                            alt="{{ $portofolio['title'] }}" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact">Contact me</a>
            </div>
        </div>
    </section>
@endsection
