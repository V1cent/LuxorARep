<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;

$this->title = 'My Yii Application';
?>
<div class="site-index">

   
    <div class="body-content">

         <div class="row">
                <div class="col-md-7">
                    <!--Featured image -->
                    <div class="view overlay hm-white-light z-depth-1-half">
                        <img src="https://i.imgur.com/aEHJevW.jpg" class="img-fluid " alt="">
                        <div class="mask">
                        </div>
                    </div>
                    <br>
                </div>

                <!--Main information-->
                <div class="col-md-5">
                    <h2 class="h2-responsive"><?php echo Html::encode(\Yii::$app->name); ?></h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis pariatur quod ipsum atque quam dolorem voluptate officia sunt placeat consectetur alias fugit cum praesentium ratione sint mollitia, perferendis natus quaerat!</p>
                    <a href="" class="btn btn-primary"> mas</a>
                </div>
            </div>
            <!--/.First row-->

            <hr class="extra-margins">

            <!--Second row-->
            <div class="row">
                <!--First columnn-->
                <div class="col-md-4">
                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://i.imgur.com/XzpqvMu.jpg" class="img-fluid" alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--First columnn-->

                <!--Second columnn-->
                <div class="col-md-4">
                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://i.imgur.com/Az4N6jb.jpg" class="img-fluid" alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--Second columnn-->

                <!--Third columnn-->
                <div class="col-md-4">
                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://i.imgur.com/HjAZ4RT.jpg" class="img-fluid" alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--Third columnn-->
            </div>
            <!--/.Second row-->

    </div>
</div>
