<form action="login.php" method="post">
    <fieldset id="login">
        <h3>Iniciar Sessão</h3>
        <p>
            <input type="radio" name="opcao" value="logincliente">
            <label for="opcaocl">Cliente</label>
            <input type="radio" name="opcao" value="logincondo">
            <label for="opcaocd">Condomínio</label>
        </p>
        <p>
            <input type="email" id="entraremailcl" name="entraremailcl" placeholder="E-mail">
        </p>
        <p>
            <input type="password" id="entrarsenhacl" name="entrarsenhacl" placeholder="Senha">
        </p>
        <p>
            <input type="submit" value="Entrar">
        </p>
    </fieldset>
</form>