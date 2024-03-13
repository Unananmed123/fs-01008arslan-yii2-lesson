<?php

namespace app\controllers;

use yii\web\Controller;

class FlowerController extends Controller
{
    public $layout = "flower";

    public function actionIndex(){
        $this->view->title = "Теплицы на кубани";
        return $this->render("index");
    }

}