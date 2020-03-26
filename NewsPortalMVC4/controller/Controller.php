<?php
class Controller {

	public static function StartSite() {
		$arr = News::getLast10News();
		include_once 'view/start.php';
	}
	public static function AllCategory() {
		$arr = Category::getAllCategory();
		include_once 'view/category.php';
	}
	    public static function AllNews() {
		$arr = News::getAllNews();
            //echo '?????????????';
		include_once 'view/allnews.php';
            //echo '22222???????';
	}
	    public static function NewsByCatID($id) {
		$arr = News::getNewsByCategoryID($id);

			//echo '333333333???????';
		include_once 'view/catnews.php';
			//echo '4444444444???????';
	}
	    public static function NewsByID($id) {
		$n = News::getNewsByID($id);
		include_once 'view/readnews.php';
	}
		public static function error404() {
		include_once 'view/error404.php';
	}
	//---------MVC2
		public static function InsertComment($c,$id) { 
		Comments::InsertComment($c,$id); 
			//$c-техт комментария, $id - номер новости, для которой добавлен комментарий
			//self::NewsByID($id);
		header('Location:news?id='.$id.'#ctable');
	}
	//----------MVC2
	//----------MVC part 2
	//comments list
	public static function Comments($newsid)  { 
		$arr =Comments::getCommentByNewsID($newsid); 
		ViewComments::CommentsByNews($arr);
	}
	//guantity comment for news
	public static function CommentsCount($newsid) {
		$arr = Comments::getCommentsCountByNewsID($newsid); 	ViewComments::CommentsCount($arr);
	}
	//to comments list
	public static function CommentsCountWithAncor($newsid) { 
		$arr = Comments::getCommentsCountByNewsID($newsid); 	ViewComments::CommentsCountWithAncor($arr);
}/**/
		//------------------------------Registration
public function registerForm()
	{
		include_once('view/formRegister.php');
	}
public function registerUser()
	{
		$result = Register::registerUser();
		
		include_once('view/answerRegister.php');
	}
	
	//----------end MVC part 2
	}//---------MVC2       //end class
	/*?>*/