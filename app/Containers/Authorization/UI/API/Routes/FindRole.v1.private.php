<?php

/**
 * @apiGroup           RolePermission
 * @apiName            getRole
 * @api                {get} /v1/roles/:id Find a Role by ID
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiUse             RoleSuccessSingleResponse
 */

$router->get('roles/{id}', [
    'as' => 'API_Authorization_getRole',
    'uses'       => 'Controller@getRole',
    'middleware' => [
        'auth:api',
    ],
]);
