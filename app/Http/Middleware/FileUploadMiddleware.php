<?php

namespace App\Http\Middleware;

use Closure;
use Intervention\Image\Facades\Image;

class FileUploadMiddleware
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
        dd($request->all());
        $img = Image::make('C:\Users\Public\Pictures\Sample Pictures\Chrysanthemum.jpg')->resize(300, 200);

        return $img->response('jpg');
//        return $next($request);
    }
}
