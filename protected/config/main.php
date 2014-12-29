<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'PPT Warehouse',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'theme' => 'bootstrap',
    
    'import' => array(
        'application.models.*',
        'application.components.*',
        'ext.AweCrud.components.*', // AweCrud components
    ),
    
    'modules' => array(
        /*'gii' => array(
            //'class' => 'system.gii.GiiModule',
            'generatorPaths' => array(
                //'bootstrap.gii',
                'ext.AweCrud.generators', // AweCrud generators
            ),
        ),*/
        // uncomment the following to enable the Gii tool
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'warehouse',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
            'generatorPaths' => array(
                //'bootstrap.gii',
                'ext.AweCrud.generators', // AweCrud generators
            ),
        ),
    ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        
        'messages' => array(
            'extensionPaths' => array(
                'AweCrud' => 'ext.AweCrud.messages', // AweCrud messages directory.
            ),
        ),
        /*
        'widgetFactory' => array(
            'widgets'=>array(
                'CGridView'=>array(
                    'cssFile'=>'http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css',
                ),
            ),
        ),
        */
        'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),
        // uncomment the following to enable URLs in path-format
        /*
          'urlManager'=>array(
          'urlFormat'=>'path',
          'rules'=>array(
          '<controller:\w+>/<id:\d+>'=>'<controller>/view',
          '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
          ),
          ),
         */
        /*
          'db'=>array(
          'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
          ),
          // uncomment the following to use a MySQL database
         */
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=ppt_warehouse',
            'emulatePrepare' => true,
            //'username' => 'portop_v2',  online
            //'password' => 'dapxK_ZQtU', online
            'username' => 'root', 
            'password' => 'portoprint', 
            'charset' => 'utf8',
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);
