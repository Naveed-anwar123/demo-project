<?php

namespace App\Http\Middleware;

use Closure;

class LocationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


       // $ip= $request->ip();
        $ip= '103.255.4.45';
        $user_country_code="pk";
        $ipdat = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            $user_country_code= @$ipdat->geoplugin_countryCode;
        }
        dd($ipdat);

//        if($user_country_code!=null &&  $user_country_code !="pk"){
//            $user_domain=$user_country_code."yourdomain.com";
//            return Redirect::to($user_domain);
//        }


        return $next($request);
    }
}
