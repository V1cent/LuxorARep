<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;

/**
 * @var $this \yii\base\View
 * @var $content string
 */
// $this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo Html::encode(\Yii::$app->name); ?> - A ThemeFactory.net Theme</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/style.css" rel="stylesheet">

    <style>
      
      body {
        background-color: white;
      }

      .primary-color-dark {
        background-color: #0d47a1 !important; /* a kek hatter szin */
      }
    /*** TF PALETTE ***/
body{background-color:#FCFFF5;}
.primary-color-dark, .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover{background-color:#193441 !important;border-color:#193441;}
nav.top-nav-collapse{background-color:#91AA9D;}
.btn-primary, .btn-default, .btn-default:focus, .btn-default:hover, .btn-primary:focus, .btn-primary:hover{background-color:#D1DBBD !important;}
body{color:#3E606F;}
    </style>

</head>

<body>

<?php $this->beginBody() ?>

    <header>

        <!--Navbar-->
        <nav class="navbar navbar-dark primary-color-dark">

            <!-- Collapse button-->
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
                <i class="fa fa-bars"></i>
            </button>

            <div class="container">

                <!--Collapse content-->
                <div class="collapse navbar-toggleable-xs" id="collapseEx">
                    <!--Navbar Brand-->
                    <a class="navbar-brand" href="#" target="_blank"><?php echo Html::encode(\Yii::$app->name); ?></a>
                    <!--Links-->
                    <?php
      				        echo Menu::widget([
      				          'options' => [
      				            "id"  => "nav",
      				            "class" => "nav navbar-nav"
      				          ],
    				            'items' => [
    				              ['label' => 'Home', 'url' => ['site/index'], "options" => [ "class" => "nav-item"]],
    				              ['label' => 'About', 'url' => ['site/about'], "options" => [ "class" => "nav-item"]],
    				              ['label' => 'Contact', 'url' => ['site/contact'], "options" => [ "class" => "nav-item"]],
    				              ['label' => 'Login', 'url' => ['site/login'], "options" => [ "class" => "nav-item"], 'visible' => Yii::$app->user->isGuest],
    				            ],
      				        ]);
	  		            ?>

                    <!--Search form-->
                    <form class="form-inline">
                        <input class="form-control" type="text" placeholder="Search">
                    </form>
                </div>
                <!--/.Collapse content-->

            </div>

        </nav>
        <!--/.Navbar-->

    </header>

    <main>

        <!--Main layout-->
        <div class="container">
            <!--First row-->
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
                    <a href="" class="btn btn-primary">Get it now!</a>
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

            <div class="row">
                <div class="col-md-12">
                  <?php echo $content; ?>
                </div> <!-- page content -->
            </div> <!-- third row -->
        </div>
        <!--/.Main layout-->

    </main>

    <!--Footer-->
    <footer class="page-footer center-on-small-only primary-color-dark">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3 col-md-offset-1">
                    <h5 class="title">ABOUT MATERIAL DESIGN</h5>
                    <p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>

                    <p>Material Design for Bootstrap is a powerful Material Design UI KIT for most popular HTML, CSS, and JS framework - Bootstrap.</p>
                </div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-md-2 col-md-offset-1">
                    <h5 class="title">First column</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="hidden-md-up">

                <!--Third column-->
                <div class="col-md-2">
                    <h5 class="title">Second column</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="hidden-md-up">

                <!--Fourth column-->
                <div class="col-md-2">
                    <h5 class="title">Third column</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Call to action-->
        <div class="call-to-action">
            <h4><?php echo Html::encode(\Yii::$app->name); ?></h4>
        </div>
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
               Copyright &copy; 2016 - made with <span style="color:red;">&#9829;</span> by <a href="https://ThemeFactory.net">ThemeFactory.net</a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo $this->theme->baseUrl ?>/js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo $this->theme->baseUrl ?>/js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo $this->theme->baseUrl ?>/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo $this->theme->baseUrl ?>/js/mdb.min.js"></script>
    
        <script>
          // ugly MDB fix ... http://i.imgur.com/WFl7fkh.jpg
          $(function(){
            $("#nav li a").addClass("nav-link");
          });
        </script>

    <?php $this->endBody(); ?>
</body>

</html>

<?php $this->endPage(); ?>
