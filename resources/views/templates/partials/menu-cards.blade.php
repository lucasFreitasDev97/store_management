<div class="card-body">
    <h4 class="card-title mb-1 text-center">Boas vindas ao Gerenciador de Loja!</h4>
    <p class="text-center mb-4 text-muted">Confira aqui um resumo dos registros do
        sistema.</p>
    <div class="row mb-4">
        <div class="col-6">
            <div class="card">
                <div class="card-body d-flex flex-column justify-content-center board-card">
                    <i class="mdi mdi-bus-school mdi-48px text-center"></i>
                    <span class="text-center" style="font-size: 16px">Fornecedores:</span>
                    <span class="text-center" style="font-size: 40px">0</span>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body d-flex flex-column justify-content-center board-card" onclick="boardRedirect('students')">
                    <i class="mdi mdi-account-switch mdi-48px text-center"></i>
                    <span class="text-center" style="font-size: 16px">Clientes:</span>
                    <span class="text-center" style="font-size: 40px">0</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body d-flex flex-column justify-content-center board-card" onclick="boardRedirect('employees?is_teacher=true')">
                    <i class="mdi mdi-account-multiple mdi-36px text-center"></i>
                    <span class="text-center" style="font-size: 16px">Funcionários:</span>
                    <span class="text-center" style="font-size: 40px">0</span>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body d-flex flex-column justify-content-center board-card" onclick="boardRedirect('scholar-classes')">
                    <i class="mdi mdi-cash mdi-36px text-center"></i>
                    <span class="text-center" style="font-size: 16px">Vendas:</span>
                    <span class="text-center" style="font-size: 40px">0</span>
                </div>
            </div>
        </div>
    </div>
</div>
