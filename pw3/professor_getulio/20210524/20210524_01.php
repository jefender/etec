<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
    <form action="envio_adados.php" method="get">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <br>
        <input type="e-mail" name="email" placeholder="Digite seu e-mail">
        <br>
        <input type="submit" name="enviar" value="Enviar  Formulário">
        <br>
        Selecione sua cor preferida: <input type="color" name="favcor" value="#0000FF">
        <br>
        Data de nascimento: <input type="date" name="nascimento">
        <br>
        Data de nascimento: <input type="datetime-local" name="bdaytime">
        <br>
        E-mail: <input type="email" name="e-mail" placeholder="Digite seu e-mail aqui">
        <br>
        <input type="file" name="arquivos">
        <br>
        <input type="file" name="arquivos" multiple>
        <br>
        <input type="hidden" id="inputOculto" name="inputOculto" value="meuvalor">
        <br>
        <input type="image">
        <br>
        Mês e ano: <input type="month" name="mesano">
        <br>
        <input type="number">
        <br>
        Quantidade (entre 1 e 5): <input type="number" name="quantidade" min="1" max="5">
        <br>
        <input type="password" name="senha" placeholder="Digite sua Senha">
        <br>
        <p>Qual a sua idade?</p>
        <input type="radio" name="idade" value="18_22">18 a 22
        <br>
        <input type="radio" name="idade" value="23_30">23 a 30
        <br>
        <input type="radio" name="idade" value="mais31">acima de 31
        <br>
        Defina seu nível de satisfação: <br>
        pouco satisfeito
        <input type="range" name="satisfação" min="0" max="10">
        muito satisfeito
        <br>
        <input type="reset">
        <br>
        Pesquisar: <input type="search" name="q">
        <br>
        <br>
        <input type="checkbox" name="veiculo1" value="bicicleta">Eu tenho uma bicicleta <br>
        <input type="checkbox" name="veiculo2" value="carro">Eu tenho um carro <br>
        <input type="checkbox" name="veiculo3" value="moto">Eu tenho uma moto <br>
        <br>
        Telefone: <input type="tel" name="usertel">
        <br>
        Escolha o horário: <input type="time" name="usr_horario">
        <br>
        Selecione uma semana: <input type="week" name="semana">
        <br>
        <textarea name="" id="" cols="30" rows="10">Area de texto com um texto inicial dentro.</textarea>
        <br>
        

    </form>

    <form>
    <br>
    <br><br><br><br>
        <input type="button" value="Clique Aqui" onclick="msg()">
    </form>

    <script>
        function msg(){
            alert("Você clicou no botão!");
        }
    </script>

    <?php echo '<p>Formulário<p>'; ?>

    
</body>
</html>