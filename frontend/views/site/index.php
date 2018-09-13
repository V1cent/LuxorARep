<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;

$this->title = \Yii::$app->name;
?>
<div class="site-index">
    
    
    <?php
    $cuenta=1;
    foreach($modelblog4 as $articulos){
        switch ($cuenta){
            case 1: ?>
                 <div class="row">
                <div class="col-md-7">
                    <!--Featured image -->
                    <div class="view overlay hm-white-light z-depth-1-half">
                        <?= Html::img($articulos->getImageFileUrl('banner'),['class'=> "img-fluid"]); ?>
                        
                        <div class="mask">
                        </div>
                    </div>
                    <br>
                </div>

                <!--Main information-->
                <div class="col-md-5">
                    <h2 class="h2-responsive"><?= Html::a(Html::encode($articulos->title), $articulos->url); ?></h2>
                    <hr>
                    <p>
                         <?php
                        echo \yii\helpers\HtmlPurifier::process($articulos->brief);
                        ?>
                    </p>
                    <a href="" class="btn btn-primary">Ver mas!</a>
                </div>
            </div>
             <hr class="extra-margins">
                
                
                <?php break;
            default: ?>
     
                <!--Second row-->
                <div class="row">
                    <!--First columnn-->
                    <div class="col-md-4">
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <?= Html::img($articulos->getImageFileUrl('banner'),['class'=> "img-fluid"]); ?>
                                
                                <a href="#">
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                <h4 class="card-title">><?= Html::a(Html::encode($articulos->title), $articulos->url); ?></h4>
                                <!--Text-->
                                <p class="card-text">
                                     <?php
                                    echo \yii\helpers\HtmlPurifier::process($articulos->brief);
                                    ?>
                                </p>
                                <?= Html::a("Ver detalle", $articulos->url,['class'=>"btn btn-primary"]); ?>
                               
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->
                    </div>
                    <!--First columnn-->             
   
            
        <?php    
        }
        $cuenta++;
    }
    
    ?>
   
    
</div>
