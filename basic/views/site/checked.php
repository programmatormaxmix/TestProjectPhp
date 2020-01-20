<?php

/** 
 * @Autor Startsev Maxim
 * @Copyright 2020
 * @Description Checker authentication users script
 */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$this->title = 'PhpTestApplication';

  if (Yii::$app->user->isGuest == 1) 

    {
      $guest = 1;
      $id= 0;
      $username = 'Unknown';
      $name = 'Unknown';
      $surname = 'Unknown';
      $post = 'Unknown';
      $money = 'Unknown';
      $bonus = 'Unknown';
      $loyalty = 'Unknown';
      $card = 'Unknown';
      $post = 'Unknown';     

    } else {
      $guest = 0;
      $username = Yii::$app->user->identity->username;
      $qry = "select * from users where login='$username'";
      $row = Yii::$app->db->createCommand($qry)->QueryAll();
      $val = $row[0];
      $id= $val["uid"];   
      $surname = $val["lastname"];
      $name = $val["firstname"];
      $money = $val["money"];
      $bonus = $val["points"];
      $loyalty = $val["loyalty"];
      $card  = $val["cardnumber"];
      $post = $val["state"] . ", ";
      $post .= $val["street"];
    }  
?>