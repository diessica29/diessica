<HTML lang="pt-br">
<HEAD>
<script type="text/javascript"> </script>
 <TITLE>cidade envio</TITLE>
</HEAD>
<BODY>
<?PHP
$cidade=$_POST['cidade'];
require ('conexao.php');
$inserir="insert into cidade values('','$cidade')";
mysqli_query ($db,$inserir) or die ('não foi possível cadastrar');
echo"<script> alert('Cadastro realizado com sucesso')</script>";
?>
</BODY>
</HTML>
