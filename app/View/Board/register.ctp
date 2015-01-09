<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>登録</title>
</head>
<body>
<h1><?= $result ?> <h3>
	<?php echo $this->Form->create(false, array('type' =>'post', 
		'action' =>'register'));
		echo $this ->Form->text("user");
		echo $this ->Form->submit("登録");
	?>
</body>
</html>

