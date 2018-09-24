<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/useradmin.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Nombre Propietario</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Administrador', 'options' => ['class' => 'header']],
                    ['label' => 'Ver Categorias', 'icon' => 'folder-open', 'url' => ['/blog/blog-category']],
                    ['label' => 'Ver Articulos', 'icon' => 'comment', 'url' => ['/blog/blog-post']],
                    [
                        'label' => 'Informacion por Edificio',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                                ['label' => 'Gastos del Mes', 'icon' => 'money', 'url' => ['/gii'],],
                                ['label' => 'Fondo de Reserva', 'icon' => 'list', 'url' => ['/debug'],],
                                ['label' => 'Listado de Morosos', 'icon' => 'search', 'url' => ['/debug'],],
                                [
                                    'label' => 'Opciones Generales',
                                    'icon' => 'circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Junta de Condominio', 'icon' => 'circle-o', 'url' => '#',],
                                        ['label' => 'Proeedores Edificio', 'icon' => 'circle-o', 'url' => '#',],
                                        ['label' => 'Servicios Edificio', 'icon' => 'circle-o', 'url' => '#',],
                                    ],
                                ],
                            ],
                    ],
                    [
                        'label' => 'Detalle por Apto',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                                ['label' => 'Estado de Cuenta', 'icon' => 'money', 'url' => ['/gii'],],
                                ['label' => 'Historico de Pagos', 'icon' => 'list', 'url' => ['/debug'],],
                                ['label' => 'Confirmacion de Pagos', 'icon' => 'send', 'url' => ['/debug'],],
                                ['label' => 'Ver Recibos en linea', 'icon' => 'search', 'url' => ['/debug'],],
                            ],
                    ],
                    [
                        'label' => 'Funciones Sistema',
                        'icon' => 'gear',
                        'url' => '#',
                        'items' => [
                                ['label' => 'Generar Recibos', 'icon' => 'save', 'url' => ['/gii'],],
                                ['label' => 'Generar Notificaciones', 'icon' => 'send', 'url' => ['/debug'],],
                                ['label' => 'Consultar Propietarios', 'icon' => 'users', 'url' => ['/debug'],],
                                ['label' => 'Actualizar Datos web', 'icon' => 'camera', 'url' => ['/debug'],],
                            ],
                    ],
                ],
            ]
         
        ) ?>

    </section>

</aside>
