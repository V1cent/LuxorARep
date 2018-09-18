<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;

/**
 * @var $this \yii\base\View
 * @var $content string
 */
//$this->registerAssetBundle('app');
AppAsset::register($this);
?>
<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="<?= Yii::$app->charset ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>


   

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
                    <a class="navbar-brand" href="#" target="_blank "> 
                        <?= Html::img('/img/upload/1/5034a5d62f-logoluxor.jpg',['class'=> "img-fluid"]); ?>
                        
                    </a>
                    
                    <!--Links-->
                    <?php
                    $menuItems[] = ['label' => 'Inicio', 'url' => ['site/index'], "options" => [ "class" => "nav-item"]];
                        $menuItems[] = ['label' => 'Nosotros', 'url' => ['site/about'], "options" => [ "class" => "nav-item"]];
                        $menuItems[] = ['label' => 'Servicios', 'url' => ['blog/2-nuestros-servicios'], "options" => [ "class" => "nav-item"]];
                        $menuItems[] = ['label' => 'Contactenos', 'url' => ['site/contact'], "options" => [ "class" => "nav-item"]];
                    if (Yii::$app->user->isGuest) {
                        $menuItems[] = ['label' => 'Login', 'url' => ['site/login'], "options" => [ "class" => "nav-item"]];
                        echo Menu::widget([
                          'options' => [
                            "id"  => "nav",
                            "class" => "nav navbar-nav"
                          ],
                            'items' => $menuItems,
                        ]);
                    }          
                     else {
                         echo Menu::widget([
      				          'options' => [
      				            "id"  => "nav",
      				            "class" => "nav navbar-nav"
      				          ],
    				            'items' => $menuItems,
      				        ]);
	  		            
                     
                        echo '<li>'
                            . Html::beginForm(['/site/logout'], 'post',[ "class" => "nav nav-item"])
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn btn-link logout']
                            )
                            . Html::endForm()
                            . '</li>';
                        }
                        ?>
                    <!--form class="form-inline">
                        <input class="form-control" type="text" placeholder="Search">
                    </form-->
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
                    <h5 class="title">INMOBILIARIA LUXOR</h5>
                    <p>gente seria y responsable dedicados de manera exclusiva al negocio de administración de condominios y alquileres desde el año 1.958, prestando a nuestros clientes un servicio confiable, personalizado y de alta calidad, apoyándonos siempre en tecnologías de punta y con la mejor atenció</p>
                </div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-md-2 col-md-offset-1">
                    <h5 class="title">Ubiquenos</h5>
                    <ul>
                        <li><a href="#!">Horario de Atencion</a></li>
                        <li><a href="#!">Nuestras Oficinas</a></li>
                        <li><a href="#!">Telefonos</a></li>
                        <li><a href="#!">contactenos</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="hidden-md-up">

                <!--Third column-->
                <div class="col-md-2">
                    <h5 class="title">Servicios</h5>
                    <ul>
                        <li><a href="#!">Administracion de Condominios</a></li>
                        <li><a href="#!">Alquiler de inmuebles</a></li>
                        <li><a href="#!">Asesoria Inmobiliaria</a></li>
                        <li><a href="#!">Servicios Externo de Condominios</a></li>
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

        

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
               C.A. Inmobiliaria Luxor

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
