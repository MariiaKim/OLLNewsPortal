<?php
class ViewNews {
	public static function NewsByCategory($arr) {
		foreach($arr as $value) {
			echo '<img src="data:image/jpeg;base64,'.base64_encode($value['picture']).'"width=150 /><br>';
			echo "<h2>".$value['title']."</h2>";
//--------------MVC2 part2
			Controller::CommentsCount($value['id']);
//-----------end MVC2 part2
			echo "<a href='news?id=".$value['id']."'>Edasi</a><br>";
		}
	}
	public static function AllNews($arr){

		foreach($arr as $value) {
			echo "<li>".$value['title'];
//--------------MVC2 part2
			Controller::CommentsCount($value['id']);
//-----------end MVC2 part2
			echo "<a href='news?id=".$value['id']."'>Edasi</a></li><br>";
		}
	}

	public static function ReadNews($n) {
		echo "<h2>".$n['title']."</h2>";
//--------------MVC2 part2
		Controller::CommentsCountWithAncor($n['id']);
//-----------end MVC2 part2
		echo '<img src="data:image/jpeg;base64,'.base64_encode($n['picture']).'"width=150 /><br>';
		echo "<p>".$n['text']."</p>";
	}
//добавить методы для других видов прдставлений новостей
}


?>

