<?php
/**
 * Copyright (c) 2018
 * cms Smetana
 * project: alt-money
 *
 */

namespace backend\controllers;

use akiraz2\blog\traits\ModuleTrait;
use akiraz2\blog\controllers\backend\BaseAdminController;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use dektrium\user\filters\AccessRule;
use yii\filters\AccessControl;

class BaseAdminluxorController extends \akiraz2\blog\controllers\backend\BaseAdminController {

    use \akiraz2\blog\traits\ModuleTrait;

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ]
        ];
    }

    public function init()
    {
        if($this->module->adminAccessControl) {
            $this->attachBehavior('access', [
                'class' => $this->module->adminAccessControl,
            ]);
        }

        parent::init();
    }
}
