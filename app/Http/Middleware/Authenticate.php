<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $this->handleURI($request);
        //return $request->expectsJson() ? null : route('login');
    }
    private function handleURI($request)
    {
        if (!empty($request->route()->uri)) {
            $url_set = explode("/", $request->route()->uri);

            if (in_array("admin", $url_set)) {
                return route('admin.login');
            }
            //  else if (in_array("delivery", $url_set)) {  // for delivery boy
            //     return route('delivery.login');
            // } else if (in_array("seller", $url_set)) {  // for seller
            //     return route('seller.login');
            // } 
            else {
                return route('login');
            }
        } else {
            return route('login');
        }
    }
}
