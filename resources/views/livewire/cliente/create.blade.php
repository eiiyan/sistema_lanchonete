<div>
    <div class="d-flex justify-content-center align-items-center vh-100">

        <div class="w-50">

           
            <style>
                h3 {
                    -webkit-text-stroke: 1px rgb(0, 0, 0);
                    font-size: 30px; 
                    color: white;
                }

                /* Estilo do card com sombra mais forte */
                .card {
                    width: 80%;  /* Define a largura do card */
                    box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.4); /* Aumentando a sombra */
                    margin: 0 auto;  /* Garantir que o card se alinhe no centro */
                }

                /* Estilo do conteúdo dentro do card */
                .card-body {
                    border-radius: 20px;  /* Bordas arredondadas */
                }

            </style>

            <!-- Card com sombra mais forte -->
            <div class="card shadow" style="border-radius: 10px;">
                <div class="card-body" style="background-color: #839deb; border-radius: 10px;">
                    <form wire:submit.prevent="salvar">

                        <div class="mt-4">
                            <div class="mb-4">
                                <h3 class="text-center" style="color: #577ae4">
                                    <strong>Cadastro de Clientes</strong>
                                </h3>
                            </div>
                        </div>

                        <div class="ms-3">
                            <div class="me-3">
                                <!-- Campo de Nome -->
                                <div class="mb-3">
                                    <label for="nome" class="form-label" style="color: white">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome"
                                        placeholder="Ex: Yan Gabriel" wire:model.defer="nome">
                                    @error('nome') <span class="error">{{$message}}</span> @enderror
                                </div>

                                <!-- Campo de Endereço -->
                                <div class="mb-3">
                                    <label for="endereco" style="color: white">Endereço</label>
                                    <input type="endereco" name="endereco" id="endereco" class="form-control"
                                        wire:model.defer="endereco" placeholder="Ex: Rua Curitiba 273 Centro">
                                    @error('endereco') <span class="error">{{$message}}</span> @enderror
                                </div>

                                <!-- Campo de Telefone -->
                                <div class="mb-3">
                                    <label for="telefone" style="color: white">Telefone</label>
                                    <input type="text" name="telefone" id="telefone" class="form-control"
                                        placeholder="(XX) XXXX-XXXX" wire:model.defer="telefone">
                                    @error('telefone') <span class="error">{{$message}}</span> @enderror
                                </div>

                                <!-- Campo de CPF -->
                                <div class="mb-3">
                                    <label for="cpf" style="color: white">CPF</label>
                                    <input type="cpf" name="cpf" id="cpf" class="form-control"
                                        wire:model.defer="cpf" placeholder="Ex: 12345678910">
                                    @error('cpf') <span class="error">{{$message}}</span> @enderror
                                </div>

                                <!-- Campo de Email -->
                                <div class="mb-3">
                                    <label for="email" style="color: white">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        wire:model.defer="email" placeholder="Ex: yangabx@gmail.com">
                                    @error('email') <span class="error">{{$message}}</span> @enderror
                                </div>

                                <!-- Campo de Senha -->
                                <div class="mb-3">
                                    <label for="password" style="color: white">Senha</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        wire:model.defer="password" placeholder= "*****">
                                    @error('password') <span class="error">{{$message}}</span> @enderror
                                    <p style="color: white"> <i class="bi bi-4-circle-fill"> 5 caracteres no mínimo</i>
                                    </p>
                                </div>

                                @if (session()->has('success'))
                                <div class="alert alert-dismissible fade show" role="alert"
                                    style="background-color: #577ae4; color: white; border-color: #2699EC">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                                <div class="mt-4">
                                    <div class="mb-3">
                                        <h3 class="text-center">
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <button type="submit" class="btn"
                                                    style="background-color: #577ae4; color: black;">
                                                    <strong>Cadastrar</strong></button>
                                            </div>
                                        </h3>
                                    </div>
                                </div>


                               
                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
