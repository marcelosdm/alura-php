<?php include 'cabecalho.php';
include 'conecta.php';
include 'banco-produto.php';?>

<?php $produtos = listaProdutos($conexao)?>

<table class="table table-striped table-bordered">
	<?php
		foreach($produtos as $produto):
	 ?>

	 <tr>
	 	<td><?=$produto['nome']?></td>
	 	<td><?=$produto['preco']?></td>
	 	<td><a href="remove-produto.php?id=<?=$produto['id']?>" class="btn btn-danger">Remover</a></td>
	 </tr>
	<?php endforeach?>
 </table>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
<p class="alert‐success">Produto removido com sucesso.</p>
<?php } ?>

<?php include 'rodape.php';?>

