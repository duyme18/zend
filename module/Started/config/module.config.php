<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Started;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            /*'started' => [ // name route
                'type'    => Segment::class, // type route
                'options' => [
                    // 'route'    => '/started[/:action][/:id]',
                    'route' => '/started',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                    'constraints' => [
                        'action' => '[a-zA-Z]*',
                        'id' => '[0-9]*'
                    ]
                ],
                // 'may_terminate' => true,
                'may_terminate' => false,
                // 'child_routes' => [
                //     'sub_route' => [ //name child route
                //         'type' => Segment::class,
                //         'options' => [
                //             'route' => '[/:action][/:id]',
                //             'defaults' => [
                //                 'controller' => Controller\UserController::class
                //             ]
                //         ],
                //         'constraints' => [
                //             'action' => '[a-zA-Z]*',
                //             'id' => '[0-9]*'
                //         ]
                //     ]
                // ]
                'child_routes' => [
                    'login' => [ //name child route
                        'type' => Literal::class,
                        'options' => [
                            'route' => '/login',
                            'defaults' => [
                                'controller' => Controller\UserController::class,
                                'action' => 'login'
                            ]
                        ],
                    ],
                    'logout' => [ //name child route
                        'type' => Literal::class,
                        'options' => [
                            'route' => '/logout',
                            'defaults' => [
                                'controller' => Controller\UserController::class,
                                'action' => 'logout'
                            ]
                        ],
                    ]
                ]
            ],
            */

            // 'started' => [
            //     'type' => Literal::class,
            //     'options' => [
            //         'route' => '/started/index',
            //         'defaults' => [
            //             'controller' => Controller\IndexController::class,
            //             'action' => 'index'
            //         ]
            //     ]
            // ],
            // 'started-edit' => [
            //     'type' => Literal::class,
            //     'options' => [
            //         'route' => '/started/edit',
            //         'defaults' => [
            //             'controller' => Controller\IndexController::class,
            //             'action' => 'edit'
            //         ]
            //     ]
            // ],
            // 'started-delete' => [
            //     'type' => Literal::class,
            //     'options' => [
            //         'route' => '/started/delete',
            //         'defaults' => [
            //             'controller' => Controller\IndexController::class,
            //             'action' => 'delete'
            //         ]
            //     ]
            // ]

            'started' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/started',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'index'
                    ]
                ],
                'may_terminate' => false,
                'child_routes' => [
                    'sub_route' => [
                        'type' => Segment::class,
                        'options' => [
                            'route' => '[/:action][/:id]',
                            'defaults' => [
                                'controller' => 'User',
                                'action' => 'login'
                            ]
                        ],
                        'constraits' => [
                            'action' => '[a-zA-Z0-9]*',
                            'id' => '[0-9*'
                        ]
                    ]
                ]
            ]
        ]
    ],
    'controllers' => [
        'factories' => [
            // Controller\IndexController::class => InvokableFactory::class,
            // Controller\UserController::class => InvokableFactory::class,
            Controller\IndexController::class => \Started\Controller\Factory\IndexControllerFactory::class
        ],
        'invokables' => [
            'UserController' => \Started\Controller\UserController::class
        ],
        'aliases' =>[
            'User' => 'UserController'
        ]
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
