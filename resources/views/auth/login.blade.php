@extends('templates.default')
@section('main')
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="card px-3 pt-3 d-flex justify-content-center align-items-center w-50">
            <div class="mt-5">
                <h1>Login 👋</h1>
            </div>
            <div class="card-body w-100">
                <p class="mb-4">Por Favor, Faça o Login ou Cadastre-se!</p>
                <form class="mb-3" action="{{ route('login') }}" method="POST">
                    {{csrf_field()}}
                    <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="email" name="email"
                               value="{{old('email')}}" placeholder="Insira seu email" required autofocus
                               autocomplete="email">
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
                    <div class="mb-3 d-flex justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember_me" id="remember_me">
                            <label class="form-check-label" for="remember_me">
                                Mantenha-me conectado
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="float-end mb-1">
                                <span>Esqueceu sua senha?</span>
                            </a>
                        @endif
                    </div>
                    @include('templates.partials.submit_button', ['text' => 'Entrar'])
                    <p class="text-center">
                        <span>Novo por aqui?</span>
                        <a href="{{ route('register') }}">
                            <span>Crie uma conta</span>
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
