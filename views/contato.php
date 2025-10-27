    <section class="py-5 bg-light-custom">
        <div class="container">
            <h1 class="text-center mb-5 text-primary">Entre em Contato</h1>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <!-- Formulário do Bootstrap -->
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">
                            <h4 class="mb-4 text-primary">Envie uma Mensagem</h4>
                            <form>
                                <!-- mb-3: margin-bottom de 3 unidades -->
                                <div class="mb-3">
                                    <!-- form-label: estilo para labels de formulário -->
                                    <label for="nome" class="form-label">Nome Completo</label>
                                    <!-- form-control: classe que estiliza inputs do Bootstrap -->
                                    <input type="text" class="form-control" id="nome" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="telefone" class="form-label">Telefone</label>
                                    <input type="tel" class="form-control" id="telefone">
                                </div>

                                <div class="mb-3">
                                    <label for="assunto" class="form-label">Assunto</label>
                                    <!-- form-select: estilização para elementos select -->
                                    <select class="form-select" id="assunto">
                                        <option selected>Selecione um assunto</option>
                                        <option value="1">Orçamento</option>
                                        <option value="2">Parceria</option>
                                        <option value="3">Suporte</option>
                                        <option value="4">Outros</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="mensagem" class="form-label">Mensagem</label>
                                    <!-- Textarea para mensagens longas -->
                                    <textarea class="form-control" id="mensagem" rows="4" required></textarea>
                                </div>

                                <!-- d-grid: transforma o botão em block (largura total) -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-custom">Enviar Mensagem</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Informações de contato -->
                <div class="col-lg-6 mb-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">
                            <h4 class="mb-4 text-primary">Informações de Contato</h4>

                            <!-- d-flex: display flex para alinhamento -->
                            <!-- align-items-center: alinha itens verticalmente no centro -->
                            <div class="d-flex align-items-center mb-4">
                                <i class="bi bi-geo-alt-fill text-primary fs-3 me-3"></i>
                                <div>
                                    <h5 class="mb-1">Endereço</h5>
                                    <p class="text-muted mb-0">Av. Paulista, 1000 - São Paulo, SP</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-4">
                                <i class="bi bi-telephone-fill text-primary fs-3 me-3"></i>
                                <div>
                                    <h5 class="mb-1">Telefone</h5>
                                    <p class="text-muted mb-0">(11) 98765-4321</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-4">
                                <i class="bi bi-envelope-fill text-primary fs-3 me-3"></i>
                                <div>
                                    <h5 class="mb-1">E-mail</h5>
                                    <p class="text-muted mb-0">contato@datacore.com.br</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-4">
                                <i class="bi bi-clock-fill text-primary fs-3 me-3"></i>
                                <div>
                                    <h5 class="mb-1">Horário de Atendimento</h5>
                                    <p class="text-muted mb-0">Seg - Sex: 9h às 18h</p>
                                </div>
                            </div>

                            <hr>

                            <h5 class="mb-3 text-primary">Redes Sociais</h5>
                            <!-- fs-2: font-size 2 (ícones grandes) -->
                            <!-- me-3: margin-end (direita) de 3 unidades -->
                            <div>
                                <a href="#" class="text-primary me-3 fs-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="text-primary me-3 fs-2"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="text-primary me-3 fs-2"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="text-primary fs-2"><i class="bi bi-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>