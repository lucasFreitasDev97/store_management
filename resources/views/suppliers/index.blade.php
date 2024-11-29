@extends('templates.default')
@section('main')
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            @include('templates.partials.menu')
            <div class="layout-page">
                @include('templates.partials.navbar')
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="table-responsive text-nowrap">
                            <header>
                                <h1>Fornecedores</h1>
                            </header>
                            <section>
                                <form action="#" method="GET">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="defaultInput" class="form-label">Nome</label>
                                                <input id="defaultInput" class="form-control" type="text" placeholder="Default input" />
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="defaultSelect" class="form-label">Status</label>
                                                <select id="defaultSelect" class="form-select">
                                                    <option>Selecione uma opção</option>
                                                    <option value="1">Ativo</option>
                                                    <option value="2">Inativo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=text-center>
                                        <button type="submit" class="btn btn-primary mb-3">
                                            <i class="mdi mdi-search-web mdi-24px"></i>
                                            Buscar
                                        </button>
                                    </div>
                                </form>
                            </section>
                            <button type="button" class="btn btn-success mb-3">+ Novo Registro</button>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tours Project</td>
                                    <td><span class="badge rounded-pill bg-label-primary me-1">Ativo</span></td>
                                    <td>
                                        <a href=""><i style="color: dodgerblue" class="mdi mdi-eye mdi-24px"></i></a>
                                        <a href=""><i style="color: orange" class="mdi mdi-lead-pencil mdi-24px"></i></a>
                                        <a href=""><i style="color: red" class="mdi mdi-window-close mdi-24px"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- / Content -->
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
@endsection

