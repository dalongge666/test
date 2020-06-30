<?php

namespace App\Http\Middleware;

use App\Category;
use Closure;

class CateTree
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
        //查询分类树
        $cateTree = Category::getCateTree();
        view()->share(['cateTree'=>$cateTree]);
        return $next($request);
    }
}
