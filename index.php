<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/base.css" >
<div class="">

</div>
<form action="/script.php" method="post">
    <div>
        <p><label for="nome">Nome:</label></p>
        <p><input type="text" id="name" name="name" /></p>
    </div>
    <div>
        <p><label for="cpf">CPF:</label><p>
        <p><input type="number" id="cpf" name="cpf"/></p>
    </div>
        <p><label for="da">Data de Nascimento:</label></p>
        <p><input type="text" id="date" name:"date"/></p>
    <div>
        <p><label for="phone">Contato:</label></p>
        <p><input type="phone" id="mobile-number" name="mobile-number" /></p>
    </div>
    <div>
        <p><label for="endereco">Endereço:</label></p>
        <p><input type="text" id="adress" name="adress"/></p>
    </div>
    <div>
        <p><label for="email">E-mail:</label></p>
        <p><input type="email" id="email" name="email"/></p>
    </div>
    <div class="button">
        <button type="submit">Enviar sua mensagem</button>
    </div>
</form>
