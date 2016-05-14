<?php

return array(
    'cdihelpers_options' => array(
        'script_update_schema' => ''
    ),
      'doctrine' => array(
        'driver' => array(
            // overriding zfc-user-doctrine-orm's config
            'cdihelpers_helpers' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => __DIR__ . '/../src/CdiHelpers/Helpers',
            ),
            'orm_default' => array(
                'drivers' => array(
                    'CdiHelpers\Helpers' => 'cdihelpers_helpers',
                ),
            ),
        ),
    ),
     'controllers' => array(
        'invokables' => array(
             'CdiHelpers\Controller\Sliders' => 'CdiHelpers\Controller\SlidersController',
        ),
    ),
     'view_manager' => array(
        'template_path_stack' => array(
            'cdihelpers' => __DIR__ . '/../view',
        ),
    ),
    
    'router' => array(
        'routes' => array(
            'chelpers' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/cdihelpers/helpers/abm[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'CdiHelpers\Controller\Helpers',
                        'action' => 'abm',
                    ),
                ),
            ),

        ),
    ),
);


