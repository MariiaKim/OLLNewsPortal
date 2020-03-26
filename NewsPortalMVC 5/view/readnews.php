<?php
ob_start();
?>
<br> 
<?php
ViewNews::ReadNews($n); 
//------MVC2 
echo "<br>";
			//echo "<p>first mistake</p>";
Controller::Comments($_GET['id']);// ()// !!!!!вывод формы (первая часть работы MVC2) не работал с этой строкой.(Uncaught Error: Call to undefined method Controller::Comments()).Надо отключать. Во второй части-подключить!
			//echo "<p>second mistake</p>";
//вывод выбранной новости для чтения. Добавить в файл строки
//------end MVC2 
echo "<br>"; 
ViewComments::CommentsForm();

$content = ob_get_clean();
include_once 'view/layout.php';
?>

