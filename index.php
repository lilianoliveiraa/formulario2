<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/base.css" >

<form action="/script.php" method="post">
    <div>
        <p><label for="nome">Nome:</label>
        <p><input type="text" id="name" name="name" />
    </div>
    <div>
        <p><label for="cpf">CPF:</label>
        <p><input type="number" id="cpf" name="cpf"/>
    </div>
        <p><label for="da">Data de Nascimento:</label>
        <p><input type="text" id="date" name:"date"/>
    <div>
        <p><label for="phone">Contato:</label>
        <p><input type="phone" id="mobile-number" name="mobile-number" />
    </div>
    <div>
        <p><label for="endereco">Endereço:</label>
        <p><input type="text" id="adress" name="adress"/>
    </div>
    <div>
        <p><label for="email">E-mail:</label>
        <p><input type="email" id="email" name="email"/>
    </div>
    <div class="button">
        <button type="submit">Enviar sua mensagem</button>
    </div>
</form>
