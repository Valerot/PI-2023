<?php
    $acao  = "create";
    $id    = "";
    $nome  = "";
    $email = "";
    $senha = "";
?>
    <div class="card-panel col-6 col-md">
        <h3>Cadastro de Usuários</h3>
        <form method="post" id="formusuario" 
        action="/universidade/controller/UsuarioController.php?acao=<?=$acao?>">
            <div class="mb-3">
                <label class="form-label">Código</label>
                <input placeholder="Campo restrito" class="form-control" value="<?=$id?>" 
                       id="codigo" type="number" name="codigo" readonly />
            </div>
            <div class="mb-3">
                <label class="form-label">Nome Usuário</label>
                <input placeholder="Digite o nome" class="form-control" value="<?=$nome?>"
                       id="nome" type="text" name="nome" required />
            </div>
            <div class="mb-3">
                <label class="form-label">E-mail Usuário</label>
                <input placeholder="Digite o e-mail" class="form-control" value="<?=$email?>"
                       id="email" type="text" name="email" required />
            </div>
            <div class="mb-3">
                <label class="form-label">Senha Usuário</label>
                <input placeholder="Digite a senha" class="form-control" value="<?=$senha?>"
                       id="senha" type="password" name="senha" required />
            </div>

            <button class="btn btn-primary btn-lg">Salvar</button>
        </form>
    </div>  