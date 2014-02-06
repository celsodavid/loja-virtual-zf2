<?php
/**
 * Configuration file generated by ZFTool
 * The previous configuration file is stored in application.config.old
 *
 * @see https://github.com/zendframework/ZFTool
 */
return array(
    'modules' => array(
        'DoctrineModule',
        'DoctrineORMModule',
        'DoctrineDataFixtureModule',
        'ZFTool',
       // 'ZendDeveloperTools',
        'Produto',
        'Usuario',
        'Webservice',
        'ProdutoPublic',
        'Base',
        'Pagamento',
        'Pagseguro',
        'CarrinhoCompras',
        'DrkCorreios',
        'WebinoImageThumb',
        
        ),
    'module_listener_options' => array(
        'config_glob_paths' => array('config/autoload/{,*.}{global,local}.php'),
        'module_paths' => array(
            './module',
            './vendor'
            )
        )
    );
