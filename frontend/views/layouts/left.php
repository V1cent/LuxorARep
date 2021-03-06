<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/img/userone.jpg" class="img-circle" alt="User Image"/>
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
                    ['label' => 'Menu Propietarios', 'options' => ['class' => 'header']],
                    ['label' => 'Ver cartelera', 'icon' => 'folder-open', 'url' => ['/gii']],
                    ['label' => 'Publicar en Cartelera', 'icon' => 'comment', 'url' => ['/debug']],
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
                                ['label' => 'Notificacion de Pago', 'icon' => 'send', 'url' => ['/debug'],],
                                ['label' => 'Ver Recibos en linea', 'icon' => 'search', 'url' => ['/debug'],],
                            ],
                    ],
                    [
                        'label' => 'Perfil del Propietario',
                        'icon' => 'user',
                        'url' => '#',
                        'items' => [
                                ['label' => 'Ver Datos Afiliados', 'icon' => 'save', 'url' => ['/gii'],],
                                ['label' => 'Perfil Web', 'icon' => 'users', 'url' => ['/debug'],],
                                ['label' => 'Cambiar Clace de acceso', 'icon' => 'trash', 'url' => ['/debug'],],
                                ['label' => 'Cargar Foto', 'icon' => 'camera', 'url' => ['/debug'],],
                            ],
                    ],
                ],
            ]
         
        ) ?>

    </section>

</aside>
