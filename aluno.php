<!DOCTYPE html>
<html>
<head>
<title> Cadastrar Aluno </title>
</head>
<body>
    <form action="recebe_dados.php">
            <label>Matricula:</label><input type="text" name="siape" id="siape"><br>
            <label>Nome Completo:</label><input type="text" name="login" id="login"><br>
            <label>E-mail:</label><input type="text" name="email" id="email"><br>
            <label>Senha:</label><input type="password" name="senha" id="senha"><br>
            <label>RG:</label><input type="number" name="RG" id="RG"><br> 
            <label>Data de nascimento:</label><input type="date" name="data" id="data"><br>
            <label>Telefone:</label><input type="text" name="email" id="email"><br> 
            <label>Foto:</label><input type="file" name="foto" id="foto"><br>
             Sexo: <br>
                <input type="radio" name="sex" value="masc"> Masculino
                <input type="radio" name="sex" value="femi"> Feminino
                <input type="radio" name="sex" value="Outro"> Outros
<br>
<br>
                <input type="submit" value="Entrar" id="Entrar" name="Entrar"><br>
                <input type="reset" value="Limpar tudo" id="Limpar Tudo" name="Limpar Tudo"><br>
       </form>
</body>
</html>