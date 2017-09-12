<?php

/**
 * @apiGroup           wepay
 * @apiName            createWepayAccount
 * @api                {post} /v1/wepays Create wepay Account
 * @apiDescription     Before calling this endpoint make sure to call wepay first and get the `customer_id`.
 *                     You may use "Wepay Checkout" or "wepay.js" to make your Wepay call. This Information
 *                     will be used to charge the User whenever he to purchase anything on the platform.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 202 OK
{
   "message":"wepay account created successfully.",
   "wepay_account_id":1
}
 */

$router->post('/wepays', [
    'as' => 'API_Wepay_createWepayAccount',
    'uses' => 'Controller@createWepayAccount',
    'middleware' => [
        'auth:api',
    ],
]);
