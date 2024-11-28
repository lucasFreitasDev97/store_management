@extends('templates.default')
@section('main')
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="card px-3 pt-3 d-flex justify-content-center align-items-center w-50">
            <div class="mt-5">
                <h1>Modificar Senha 🔒</h1>
            </div>
            <div class="card-body w-100">
                <p class="mb-4">Sua nova senha deve ser diferente das senhas usadas anteriormente.</p>
                <form class="mb-3" action="{{ route('password.store') }}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="email" name="email"
                               value="{{old('email', $request->email)}}" placeholder="Insira seu email" required
                               autofocus
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
                                           placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"/>
                                    <label for="password">Nova Senha</label>
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
                    @include('templates.partials.submit_button', ['text' => 'Modificar'])
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
