<?php 
	namespace think\yytest;

	use think\Db;
	use app\common\model\Users;


	class Dosomething{

		public function hello()
		{
			return User::all();
		}

		public function getConfig()
		{
			if(isset($defindconfig)) return $defindconfig;
			return 'i am notttttt defined';
			
		}
	}

 ?>