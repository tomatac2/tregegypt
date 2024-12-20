<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {
    /*
     * The default class to use for all routes
     *
     * The following route classes are supplied with CakePHP and are appropriate
     * to set as the default:
     *
     * - Route
     * - InflectedRoute
     * - DashedRoute
     *
     * If no call is made to `Router::defaultRouteClass()`, the class used is
     * `Route` (`Cake\Routing\Route\Route`)
     *
     * Note that `Route` does not do any inflections on URLs which will result in
     * inconsistently cased URLs when used with `{plugin}`, `{controller}` and
     * `{action}` markers.
     */
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) {
        /*
         * Here, we are connecting '/' (base path) to a controller called 'Pages',
         * its action called 'display', and we pass a param to select the view file
         * to use (in this case, templates/Pages/home.php)...
         */
        $builder->connect('/', ['controller' => 'About', 'action' => 'home']);

        /*
         * ...and connect the rest of 'Pages' controller's URLs.
         */
        $builder->connect('/pages/*', 'Pages::display');

        //dashboard links 
        $builder->connect('/categories-list', ['controller' => 'Categories', 'action' => 'index']);
        $builder->connect('/articles-list', ['controller' => 'Articles', 'action' => 'index']);
        $builder->connect('/comments-list', ['controller' => 'Comments', 'action' => 'index']);
        $builder->connect('/contacts-list', ['controller' => 'ContactUs', 'action' => 'index']);
        $builder->connect('/order-list', ['controller' => 'ContactUs', 'action' => 'indexOrders']);
        $builder->connect('/agents-list', ['controller' => 'Agents', 'action' => 'index']);
        $builder->connect('/products-list', ['controller' => 'Products', 'action' => 'index']);
        $builder->connect('/team-list', ['controller' => 'Teams', 'action' => 'index']);
        $builder->connect('/settings', ['controller' => 'Users', 'action' => 'edit' , 1]);


        //website
        $builder->connect('/details/:id/:name', ['controller' => 'Articles', 'action' => 'details'])->setPass(['id','name']);
        $builder->connect('/category/:id/:name', ['controller' => 'Articles', 'action' => 'category'])->setPass(['id','name']);
        $builder->connect('/company-products/:id/:name', ['controller' => 'Products', 'action' => 'products'])->setPass(['id','name']);
        $builder->connect('/agents', ['controller' => 'Agents', 'action' => 'agents']);
        $builder->connect('/get-product', ['controller' => 'ContactUs', 'action' => 'getProduct']);
        $builder->connect('/contact', ['controller' => 'ContactUs', 'action' => 'contact']);

        
        $builder->fallbacks();
    });

    /*
     * If you need a different set of middleware or none at all,
     * open new scope and define routes there.
     *
     * ```
     * $routes->scope('/api', function (RouteBuilder $builder) {
     *     // No $builder->applyMiddleware() here.
     *
     *     // Parse specified extensions from URLs
     *     // $builder->setExtensions(['json', 'xml']);
     *
     *     // Connect API actions here.
     * });
     * ```
     */
};
