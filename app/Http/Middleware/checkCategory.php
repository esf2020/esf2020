<?php

namespace App\Http\Middleware;
use App\Models\Categorie;
use Closure;
use Illuminate\Http\Request;

class checkCategory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $count = Categorie::all()->count();
        if($count == 0){
            session()->flash('error_msg','First you need to add some categorie !!!!');
                return redirect('home/listescateg');
        }
        return $next($request);
    }
}
