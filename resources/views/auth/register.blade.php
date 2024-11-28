@extends('templates.default')
@section('main')
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="card px-3 pt-3 d-flex justify-content-center align-items-center w-50">
            <div class="mt-5">
                <h1>Cadastro 🚀</h1>
            </div>
            <div class="card-body w-100">
                <p class="mb-4">Cadastre-se para ter seu acesso liberado.</p>
                <form class="mb-3" action="{{ route('register') }}" method="POST">
                    {{csrf_field()}}
                    <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="name" name="name"
                               value="{{old('name')}}" placeholder="Insira seu nome" required autofocus>
                        <label for="name">Nome</label>
                        @include('templates.partials.validation_error', ['inputName' => 'name'])
                    </div>
                    <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="email" name="email"
                               value="{{old('email')}}" placeholder="Insira seu email" required autofocus>
                        <label for="email">Email</label>
                        @include('templates.partials.validation_error', ['inputName' => 'email'])
                    </div>
                    <div class="mb-3">
                        <div class="form-password-toggle">
                            <div class="input-group input-group-merge">
                                <div class="form-floating form-floating-outline">
                                    <input type="password" id="password" class="form-control" name="password"
                                           required
                                           placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                           aria-describedby="password"/>
                                    <label for="password">Senha</label>
                                    @include('templates.partials.validation_error', ['inputName' => 'password'])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-password-toggle">
                            <div class="input-group input-group-merge">
                                <div class="form-floating form-floating-outline">
                                    <input type="password" id="password_confirmation" class="form-control"
                                           name="password_confirmation"
                                           required
                                           placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"/>
                                    <label for="password_confirmation">Confirmação de Senha</label>
                                    @include('templates.partials.validation_error', ['inputName' => 'password_confirmation'])
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('templates.partials.submit_button', ['text' => 'Cadastrar'])
                    <p class="text-center">
                        <span>Já possui uma conta?</span>
                        <a href="{{ route('login') }}">
                            <span>Entrar</span>
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
