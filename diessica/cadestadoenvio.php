<HTML lang="pt-br">
<HEAD>
<script type="text/javascript"> </script>
 <TITLE>estado envio</TITLE>
</HEAD>
<BODY>
<?PHP
$estado=$_POST['estado'];
require ('conexao.php');
$inserir="insert into estado values('','$estado')";
mysqli_query ($db,$inserir) or die ('não foi possível cadastrar');
echo"<script> alert('Cadastro realizado com sucesso')</script>";
?>
</BODY>
</HTML>
