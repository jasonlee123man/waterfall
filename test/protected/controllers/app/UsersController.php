<?php

class UsersController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
	/*
	 * 获取好友
	 * @param $uid  用户id
	 * reutrn array
	 */
	public function actionGetFriendByUid()
	{
		$uid = $_GET['uid'];
		$ret = User::model()->with('friends.user')->findByAttributes(array('id'=>$uid));
		$items=array();
		foreach ($ret->friends as $v)
		{
			$item['id'] = $v->user->id;
			$item['realname'] = $v->user->realname;
			$item['username'] = $v->user->username;
			array_push($items, $item);
		}
		echo json_encode($items);
		
	}

}