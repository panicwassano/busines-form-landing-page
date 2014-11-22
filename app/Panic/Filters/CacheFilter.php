<?php 

namespace Panic\Filters;

use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Str;
use Cache;

class CacheFilter {

    public function fetch($route, $request)
    {
        $key = $this->makeCacheKey($request->url());

        if(Cache::has($key))
        {
            return Cache::get($key);
        }
    }

    public function put($route, $request, $response)
    {
        $key = $this->makeCacheKey($request->url());

        if(!Cache::has($key))
        {
            return Cache::put($key, $response->getContent(), 60);
        }
    }

    protected function makeCacheKey($url)
    {
        return sprintf('route_%s', Str::slug($url));
    }
}