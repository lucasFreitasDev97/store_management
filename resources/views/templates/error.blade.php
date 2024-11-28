@extends('templates.default')
@section('main')
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="card px-3 pt-3 d-flex justify-content-center align-items-center w-50">
            <div class="mt-5">
                <h4 class="mx-2 text-center" style="font-size: 6rem;">{{$code}}</h4>
                <h1 class="fw-semibold text-center">{{$message}}</h1>
            </div>
            <div class="card-body w-100">
                <div class="text-center">
                    <a href="{{ route('login') }}" class="d-flex align-items-center justify-content-center">
                        <i class="mdi mdi-chevron-left scaleX-n1-rtl mdi-24px"></i>
                        Voltar ao Login
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
