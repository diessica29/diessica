<HTML lang="pt-br">
<HEAD>
 <TITLE>cadastro cliente</TITLE>
</HEAD>
<BODY>
Cadastro de clientes<br><br><br>
<form action=cadclienteenvio.php method=POST>
Nome <input type=text name=nome> <br> <br>
Data de Nascimento  <input type=date name=dn><br><br>
RG <input type=text name=rg> <br><br>
CPF <input type=text name=cpf> <br><br>
Cidades
<select name=cidade>
<?PHP
  require ('conexao.php');
  $sql="select id_cidade, nome_cidade fron cidade" ;
  $result=mysqli_query ($db, $sql) or die (mysqli_error () );
  echo"<option value='Selecione...'>Selecione...</option>";
  while ($dados=mysqli_fetch_array ($result)){
  echo"<option value=' ".utf8_encode ($dados ['idcidade'])."'>".utf8_encode ($dados ['nomecidade']).".</option>";
  }
?>
</select>
<input type=submit value=CADASTRAR>
<input type=reset value=LIMPAR>
</FORM>
</BODY>
</HTML>
