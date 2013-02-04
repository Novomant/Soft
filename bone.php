<!DOCTYPE html>
<html>
    <head>
		<title>Игра в кости V 1.0</title>
	</head>
		<body>
			<h1 align="center">Испытайте свою удачу и сразитесь с Фортуной. Кидайте кубик.</h1>
				<form method="POST" action="bone.php">
					<p align="center">
						<input type="submit" name="ok" value="Кинуть кубик">
				</form>
			<p align="center">
<?php
if (isset ($_REQUEST['ok']))
{
	$randPlayer=rand(1,6);
	$randFortune=rand(1,6);
	echo "Вам выпало число $randPlayer";
	echo "<br>";
	echo "У Фортуны число $randFortune";
	echo "<br><br>";
		if ($randPlayer>$randFortune)
		{
			echo "Вы победили!";
		}
		if ($randPlayer<$randFortune)
		{
			echo "Вы проиграли!";
		}
		if ($randPlayer==$randFortune)
		{
			echo "Ничья!";
		}
}
?>
		</body>
</html>
