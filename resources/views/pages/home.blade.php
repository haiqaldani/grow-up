@extends('layouts.app2')

@section('title')
    Grow Up Home
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <h2 class="content-title">Anak</h2>
                <h5 class="content-desc mb-4">Data anak</h5>
            </div>
            <div class="d-flex row">
                @forelse ($kids as $kid)
                    <div class="col-12 col-lg-6">
                        <div class="statistics-card">

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column justify-content-between align-items-start">
                                    <h5 class="content-desc">Raihan</h5>

                                    <h3 class="statistics-value">9 Bulan</h3>
                                </div>

                                <button class="btn-statistics">
                                    <img src="{{ url('frontend/assets/img/global/eye.png') }}" alt="">
                                </button>
                            </div>

                            <div class="d-flex row">
                                <div class="d-flex col-lg-4 col-12 text-center flex-column">
                                    <div class="" style="font-weight: 400; font-size: 13px">Tinggi Badan</div>
                                    <div>
                                        <span class="fs-2 text-info" style="font-weight: 700">1</span>
                                        <span class="text-black-50" style="font-weight: 500; font-size: 12px">Cm</span>
                                    </div>
                                    <div class="border border-danger rounded-2 py-1 m-auto"
                                        style="font-size: 12px; width: 100px">
                                        Normal
                                    </div>
                                </div>
                                <div class="d-flex col-lg-4 col-12 text-center flex-column">
                                    <div class="" style="font-weight: 400; font-size: 13px">Tinggi Badan</div>
                                    <div>
                                        <span class="fs-2 text-info" style="font-weight: 700">1</span>
                                        <span class="text-black-50" style="font-weight: 500; font-size: 12px">Cm</span>
                                    </div>
                                    <div class="border border-danger rounded-2 py-1 m-auto"
                                        style="font-size: 12px; width: 100px">
                                        Normal
                                    </div>
                                </div>
                                <div class="d-flex col-lg-4 col-12 text-center flex-column">
                                    <div class="" style="font-weight: 400; font-size: 13px">Tinggi Badan</div>
                                    <div>
                                        <span class="fs-2 text-info" style="font-weight: 700">1</span>
                                        <span class="text-black-50" style="font-weight: 500; font-size: 12px">Cm</span>
                                    </div>
                                    <div class="border border-danger rounded-2 py-1 m-auto"
                                        style="font-size: 12px; width: 100px">
                                        Normal
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    @if ($kid->count() == 1)
                        <div class="col-12 col-lg-6">
                            <div class="d-flex statistics-card h-100 justify-content-center align-items-center"
                                onclick="location.href='{{ route('create-kid') }}';"" style="cursor: pointer;">
                                <div class="d-flex btn-create-big ">
                                    <img src="{{ url('frontend/assets/img/global/times.svg') }}" alt="">

                                </div>
                                <h5 class="content-desc mt-2 ms-2">Tambah Anak</h5>
                            </div>
                        </div>
                    @endif

                @empty
                    <div class="col-12">
                        <div class="statistics-card">
                            <div class="d-flex justify-content-center align-items-center m-auto"
                                onclick="location.href='{{ route('create-kid') }}';"
                                style="cursor: pointer; width: 170px">
                                <div class="btn-statistics">
                                    <img src="{{ url('frontend/assets/img/global/times.svg') }}" alt="">
                                </div>
                                <h5 class="content-desc mt-2 ms-2">Tambah Anak</h5>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="d-flex row">
                <div class="col-12 col-lg-6">
                    <div class="statistics-card">

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-column justify-content-between align-items-start">
                                <h5 class="content-desc">Raihan</h5>

                                <h3 class="statistics-value">9 Bulan</h3>
                            </div>

                            <button class="btn-statistics">
                                <img src="{{ url('frontend/assets/img/global/eye.png') }}" alt="">
                            </button>
                        </div>

                        <div class="d-flex row">
                            <div class="d-flex col-lg-4 col-12 text-center flex-column">
                                <div class="" style="font-weight: 400; font-size: 13px">Tinggi Badan</div>
                                <div>
                                    <span class="fs-2 text-info" style="font-weight: 700">1</span>
                                    <span class="text-black-50" style="font-weight: 500; font-size: 12px">Cm</span>
                                </div>
                                <div class="border border-danger rounded-2 py-1 m-auto"
                                    style="font-size: 12px; width: 100px">
                                    Normal
                                </div>
                            </div>
                            <div class="d-flex col-lg-4 col-12 text-center flex-column">
                                <div class="" style="font-weight: 400; font-size: 13px">Tinggi Badan</div>
                                <div>
                                    <span class="fs-2 text-info" style="font-weight: 700">1</span>
                                    <span class="text-black-50" style="font-weight: 500; font-size: 12px">Cm</span>
                                </div>
                                <div class="border border-danger rounded-2 py-1 m-auto"
                                    style="font-size: 12px; width: 100px">
                                    Normal
                                </div>
                            </div>
                            <div class="d-flex col-lg-4 col-12 text-center flex-column">
                                <div class="" style="font-weight: 400; font-size: 13px">Tinggi Badan</div>
                                <div>
                                    <span class="fs-2 text-info" style="font-weight: 700">1</span>
                                    <span class="text-black-50" style="font-weight: 500; font-size: 12px">Cm</span>
                                </div>
                                <div class="border border-danger rounded-2 py-1 m-auto"
                                    style="font-size: 12px; width: 100px">
                                    Normal
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="d-flex statistics-card h-100 justify-content-center align-items-center"
                        onclick="location.href='{{ route('create-kid') }}';"" style="cursor: pointer;">
                        <div class="d-flex btn-create-big ">
                            <img src="{{ url('frontend/assets/img/global/times.svg') }}" alt="">

                        </div>
                        <h5 class="content-desc mt-2 ms-2">Tambah Anak</h5>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 col-md-6 col-lg-4">
            <div class="statistics-card">

                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-column justify-content-between align-items-start">
                        <h5 class="content-desc">Employees</h5>

                        <h3 class="statistics-value">18,500,000</h3>
                    </div>

                    <button class="btn-statistics">
                        <img src="{{ url('frontend/assets/img/global/times.svg') }}" alt="">
                    </button>
                </div>

                <div class="statistics-list">
                    <img class="statistics-image" src="{{ url('frontend/assets/img/home/history/photo-4.png') }}" alt="">
                    <img class="statistics-image" src="./assets/img/home/history/photo-3.png" alt="">
                    <img class="statistics-image" src="./assets/img/home/history/photo.png" alt="">
                    <img class="statistics-image" src="./assets/img/home/history/photo-1.png" alt="">
                    <img class="statistics-image" src="./assets/img/home/history/photo-2.png" alt="">
                </div>

            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="statistics-card">

                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-column justify-content-between align-items-start">
                        <h5 class="content-desc">Teams</h5>

                        <h3 class="statistics-value">122,000</h3>
                    </div>

                    <button class="btn-statistics">
                        <img src="{{ url('frontend/assets/img/global/times.svg') }}" alt="">
                    </button>
                </div>

                <div class="statistics-list">
                    <div class="statistics-icon award">
                        <img src="./assets/img/home/team/award.svg" alt="">
                    </div>
                    <div class="statistics-icon globe">
                        <img src="./assets/img/home/team/globe.svg" alt="">
                    </div>
                    <div class="statistics-icon target">
                        <img src="./assets/img/home/team/target.svg" alt="">
                    </div>
                    <div class="statistics-icon box">
                        <img src="./assets/img/home/team/box.svg" alt="">
                    </div>
                </div>

            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="statistics-card">

                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-column justify-content-between align-items-start">
                        <h5 class="content-desc">Projects</h5>

                        <h3 class="statistics-value">150,000,000</h3>
                    </div>

                    <button class="btn-statistics">
                        <img src="{{ url('frontend/assets/img/global/times.svg') }}" alt="">
                    </button>
                </div>

                <div class="statistics-list">
                    <div class="statistics-icon one">
                        <span>SK</span>
                    </div>
                    <div class="statistics-icon two">
                        <span>DW</span>
                    </div>
                    <div class="statistics-icon three">
                        <span>FJ</span>
                    </div>
                    <div class="statistics-icon four">
                        <span>AP</span>
                    </div>
                    <div class="statistics-icon five">
                        <span>ML</span>
                    </div>
                    <!-- <img src="./assets/img/home/icon-1.png" alt=""><img src="./assets/img/home/icon-2.png" alt=""><img src="./assets/img/home/icon-3.png" alt=""><img src="./assets/img/home/icon-4.png" alt=""><img src="./assets/img/home/icon-5.png" alt=""> -->
                </div>

            </div>
        </div> --}}

        </div>

        <div class="row mt-5">
            <div class="col-12 col-lg-6">
                <h2 class="content-title">Documents</h2>
                <h5 class="content-desc mb-4">Standard procedure</h5>

                <div class="document-card">
                    <div class="document-item">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="document-icon box">
                                <img src="./assets/img/home/document/archive.svg" alt="">
                            </div>

                            <div class="d-flex flex-column justify-content-between align-items-start">
                                <h2 class="document-title">Customer Guide</h2>

                                <span class="document-desc">180 MB • PDF</span>
                            </div>
                        </div>

                        <button class="btn-statistics">
                            <img src="./assets/img/global/download.svg" alt="">
                        </button>

                    </div>

                    <div class="document-item">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="document-icon globe">
                                <img src="./assets/img/home/document/twitch.svg" alt="">
                            </div>

                            <div class="d-flex flex-column justify-content-between align-items-start">
                                <h2 class="document-title">Twitch Record</h2>

                                <span class="document-desc">700 GB • MP4</span>
                            </div>
                        </div>

                        <button class="btn-statistics">
                            <img src="./assets/img/global/download.svg" alt="">
                        </button>

                    </div>

                    <div class="document-item">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="document-icon database">
                                <img src="./assets/img/home/document/database.svg" alt="">
                            </div>

                            <div class="d-flex flex-column justify-content-between align-items-start">
                                <h2 class="document-title">Personas Datasets</h2>

                                <span class="document-desc">11 MB • CSV</span>
                            </div>
                        </div>

                        <button class="btn-statistics">
                            <img src="./assets/img/global/download.svg" alt="">
                        </button>

                    </div>

                    <div class="document-item">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="document-icon target">
                                <img src="./assets/img/home/document/book-open.svg" alt="">
                            </div>

                            <div class="d-flex flex-column justify-content-between align-items-start">
                                <h2 class="document-title">Marketing Book</h2>

                                <span class="document-desc">891 MB • PDF</span>
                            </div>
                        </div>

                        <button class="btn-statistics">
                            <img src="./assets/img/global/download.svg" alt="">
                        </button>

                    </div>


                </div>
            </div>

            <div class="col-12 col-lg-6">
                <h2 class="content-title">History</h2>
                <h5 class="content-desc mb-4">Track the flow</h5>

                <div class="document-card">
                    <div class="document-item">
                        <div class="d-flex justify-content-start align-items-center">
                            <img class="document-icon" src="./assets/img/home/history/photo.png" alt="">

                            <div class="d-flex flex-column justify-content-between align-items-start">
                                <h2 class="document-title">Amalia Syahrina</h2>

                                <span class="document-desc">Promoted to Sr. Website Designer</span>
                            </div>
                        </div>


                    </div>

                    <div class="document-item">
                        <div class="d-flex justify-content-start align-items-center">
                            <img class="document-icon" src="./assets/img/home/history/photo-1.png" alt="">

                            <div class="d-flex flex-column justify-content-between align-items-start">
                                <h2 class="document-title">Ah Park Yo</h2>

                                <span class="document-desc">Promoted to Front-End Developer</span>
                            </div>
                        </div>
                    </div>

                    <div class="document-item">
                        <div class="d-flex justify-content-start align-items-center">
                            <img class="document-icon" src="./assets/img/home/history/photo-2.png" alt="">

                            <div class="d-flex flex-column justify-content-between align-items-start">
                                <h2 class="document-title">Sintia Siny</h2>

                                <span class="document-desc">Promoted to Accounting Executive</span>
                            </div>
                        </div>
                    </div>

                    <div class="document-item">
                        <div class="d-flex justify-content-start align-items-center">
                            <img class="document-icon" src="./assets/img/home/history/photo-3.png" alt="">

                            <div class="d-flex flex-column justify-content-between align-items-start">
                                <h2 class="document-title">Jerami Putu</h2>

                                <span class="document-desc">Promoted to Quality Manager</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
