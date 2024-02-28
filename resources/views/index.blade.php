@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card p-4 text-center">
                    <div class="card-header">
                        <h4 class="card-title text-center text-primary font-bold">Application Services</h4>
                        <small>Select the application you would like to apply for.</small>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{route('certificate.apply')}}" class="group_item">
                                    <img src="{{asset('assets/icons/1.png')}}" alt="">
                                    <small>SUCCESSION</small>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{route('certificate.apply')}}" class="group_item">
                                    <img src="{{asset('assets/icons/2.png')}}" alt="">
                                    <small>CHARACTER</small>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{route('certificate.apply')}}" class="group_item">
                                    <img src="{{asset('assets/icons/3.png')}}" alt="">
                                    <small>NATIONALITY</small>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{route('certificate.apply')}}" class="group_item">
                                    <img src="{{asset('assets/icons/4.png')}}" alt="">
                                    <small>UNMARRIED</small>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{route('certificate.apply')}}" class="group_item">
                                    <img src="{{asset('assets/icons/5.png')}}" alt="">
                                    <small>LANDLESS</small>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{route('certificate.apply')}}" class="group_item">
                                    <img src="{{asset('assets/icons/6.png')}}" alt="">
                                    <small>MARRIAGE</small>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{route('certificate.apply')}}" class="group_item">
                                    <img src="{{asset('assets/icons/7.png')}}" alt="">
                                    <small>RIVER EROSION</small>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{route('certificate.apply')}}" class="group_item">
                                    <img src="{{asset('assets/icons/8.png')}}" alt="">
                                    <small>REMARRIAGE</small>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{route('certificate.apply')}}" class="group_item">
                                    <img src="{{asset('assets/icons/9.png')}}" alt="">
                                    <small>INCOME</small>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{route('certificate.apply')}}" class="group_item">
                                    <img src="{{asset('assets/icons/10.png')}}" alt="">
                                    <small>GENERAL</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title text-primary font-bold">Temporary Application</h4>
                        <small>Select the application you would like to apply for.</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="">
                                    <span class="badge bg-danger">Payment Fee</span>
                                    <a href="#">(Bengali)সুমী ভদ্র</a>
                                </div>
                                <div class="">
                                    <span class="badge bg-dark">NATIONALITY</span>
                                    <span class="badge bg-danger">26/02/2024</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="">
                                    <span class="badge bg-danger">Payment Fee</span>
                                    <a href="#">(Bengali)সুমী ভদ্র</a>
                                </div>
                                <div class="">
                                    <span class="badge bg-dark">NATIONALITY</span>
                                    <span class="badge bg-danger">26/02/2024</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title text-primary font-bold">Under Review Application</h4>
                        <small>Select the application you would like to apply for.</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="">
                                    <span>(Bengali)</span>
                                    <a href="#" class="text-primary">(Bengali)সুমী ভদ্র</a>
                                </div>
                                <div class="">
                                    <span class="badge bg-dark">NATIONALITY</span>
                                    <span class="badge bg-danger">26/02/2024</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="">
                                    <span>(Bengali)</span>
                                    <a href="#" class="text-primary">(Bengali)সুমী ভদ্র</a>
                                </div>
                                <div class="">
                                    <span class="badge bg-dark">NATIONALITY</span>
                                    <span class="badge bg-danger">26/02/2024</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title text-primary font-bold">Posted Application</h4>
                        <small>Select the application you would like to apply for.</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="">
                                    <span>(Bengali)</span>
                                    <a href="{{route('certificate.show', 1)}}" class="text-primary">(Bengali)সুমী ভদ্র</a>
                                </div>
                                <div class="">
                                    <span class="badge bg-dark">NATIONALITY</span>
                                    <span class="badge bg-danger">26/02/2024</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="">
                                    <span>(Bengali)</span>
                                    <a href="{{route('certificate.download')}}" class="text-primary">(Bengali)সুমী ভদ্র</a>
                                </div>
                                <div class="">
                                    <span class="badge bg-dark">NATIONALITY</span>
                                    <span class="badge bg-danger">26/02/2024</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
