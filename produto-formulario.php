<html>
	<?php include 'cabecalho.php';?>
	<h1>Formulário de Cadastro</h1>
	    <form action="adiciona-produto.php">
	        <table>
	            <tr>
	                <td>Nome</td>
	                <td><input type="text" name="nome" /></td>
	            </tr>

	            <tr>
	                <td>Preço</td>
	                <td><input type="number" name="preco" /></td>
	            </tr>

	            <tr>
	                <td><input type="submit" value="Cadastrar" /></td>
	            </tr>

	        </table>

	    </form>
	<?php include 'rodape.php';?>
</html>