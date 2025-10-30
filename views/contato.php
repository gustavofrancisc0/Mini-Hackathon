<main class="container my-5" style="max-width: 600px;">
    <h2 class="mb-4 text-center">Entre em Contato</h2>

    <form class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
            <div class="invalid-feedback">Por favor, informe seu nome.</div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <div class="invalid-feedback">Digite um e-mail válido.</div>
        </div>

        <div class="mb-3">
            <label for="assunto" class="form-label">Assunto</label>
            <input type="text" class="form-control" id="assunto" name="assunto" required>
            <div class="invalid-feedback">Informe o assunto.</div>
        </div>

        <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
            <div class="invalid-feedback">Escreva sua mensagem.</div>
        </div>

        <button type="submit" class="btn btn-primary w-100 py-2">Enviar</button>
    </form>
</main>