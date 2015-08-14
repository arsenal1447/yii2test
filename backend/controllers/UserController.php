<?php

namespace backend\controllers;

use Yii;
use common\models\User;
use common\models\search\UserSearch;
use backend\base\BaseBackController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use base\YiiForum;
use yii\rbac\Role;


class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = User::find();
		$locals = YiiForum::getPagedRows($query);

		return $this->render('index', $locals);
    }

}
