<?php 
class ViewComments{
//--------------------MVC2
	public static function CommentsForm(){ 
	echo '<form  action="insertcomment">
	<input type="hidden" name="id" value="'.$_GET['id'].'">
		Your comments: <input type="text" name="comment"> 
	<input type="submit" value="Saada"> </form>';
	}
//--------------------end MVC2
//--------------------MVC2 part2
	public static function CommentsByNews($arr)
{
	if($arr!=null) {
	echo '<table id="ctable"><th>Comments</th><th>Kuupaev</th>'; 
	foreach($arr as $value){
		echo '<tr><td>'.$value['text']."</td><td>".$value['date'] ."</td></tr>";
	}
	echo '</table>'; 
	}
} 

public static function CommentsCountWithAncor($value){ 
	if ($value['count']>0)
	echo '<b><a href="#ctable"/> ('.$value['count'].') </a></b>';
}
public static function CommentsCount($value){ 
	if ($value['count']>0) {
		echo '<b><font color="red"> ('.$value ['count'].') </font></b>'; 
	}
}/**/
}//end class
//------------------end MVC2 part2
