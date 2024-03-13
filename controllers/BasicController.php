<?php

namespace app\controllers;

use yii\web\Controller;

class BasicController extends Controller
{
    public $layout = "basic";

    public function actionIndex()
    {
        $this->view->title = "Главная";
        return $this->render("index");
    }
    public function actionFeatures()
    {
        $this->view->title = "Цели";
        return $this->render("features");
    }
    public function actionAbout()
    {
        $this->view->title = "О нас";
        return $this->render("about");
    }
    public function actionBlog()
    {
        $this->view->title = "Blog";
        return $this->render("blog");
    }
    public function actionContact()
    {
        $this->view->title = "Contact";
        return $this->render("contact");
    }
    public function actionTeam()
    {
        $this->view->title = "Team";
        return $this->render("team");
    }
    public function actionWhy()
    {
        $this->view->title = "Почему";
        return $this->render("why");
    }


}