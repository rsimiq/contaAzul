<h1>Estoque - Editar Produto</h1>

	<?php if(isset($error) && !empty($error)) :?>
		<div class="warning"><?php echo $error?></div>
	<?php elseif(isset($success) && !empty($success)) :?>
		<div class="success"><?php echo $success?></div>
	<?php endif;?>

<form method="POST">
	<label for="name">Nome do produto</label></br>
	<input type="text" value="<?php echo $product_info['name'] ?>" name="name" required></input></br>

	<label for="price">Preço</label></br>	
	<input type="text" min="0" value="<?php echo $product_info['price'] ?>" name="price"></input></br>

	<label for="quant">Quantidade</label></br>
	<input type="number" min="0" value="<?php echo $product_info['quant'] ?>" name="quant"></input></br>

	<label for="min_quant">Quantidade Mínima</label></br>
	<input type="number" min="0" value="<?php echo $product_info['min_quant'] ?>" name="min_quant"></input></br>
	</br></br>
	
	<input class="button" type="submit" value="Editar" />
</form>


<script type="text/javascript" src="<?php echo BASE;?>assets/js/jquery.maskMoney.js"></script>
<script type="text/javascript" src="<?php echo BASE;?>assets/js/script_inventory_add.js"></script>