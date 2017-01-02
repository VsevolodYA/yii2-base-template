<?php

use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;
use yii\bootstrap\ActiveForm;
use app\models\Employee;
use app\models\Group;
use app\models\Skill;
use yii\bootstrap\Html;
use app\models\FilterForm;

/**
 * @var $this yii\web\View
 * @var $dataprovider \yii\data\ActiveDataProvider
 * @var $filter FilterForm
 */