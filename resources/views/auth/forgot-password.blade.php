@extends('templates.default')
@section('main')
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="card px-3 pt-3 d-flex justify-content-center align-items-center w-50">
            <div class="mt-5">
                <h1>Esqueci minha senha 🔒</h1>
            </div>
            <div class="card-body w-100">
                <p class="mb-4">Esqueceu sua senha? Sem problemas. Nos informe seu endereço de email e enviaremos um
                    link para que você possa escolher uma nova.</p>
                <form class="mb-3" action="{{ route('password.email') }}" method="POST">
                    {{csrf_field()}}
                    @include('templates.partials.session_status')
                    <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="email" name="email"
                               value="{{old('email')}}" placeholder="Insira seu email" required autofocus>
                        <label for="email">Email</label>
                        @include('templates.partials.validation_error', ['inputName' => 'email'])
                    </div>
                    @include('templates.partials.submit_button', ['text' => 'Enviar link'])
                    <div class="text-center">
                        <a href="{{ route('login') }}" class="d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-chevron-left scaleX-n1-rtl mdi-24px"></i>
                            Voltar ao Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
