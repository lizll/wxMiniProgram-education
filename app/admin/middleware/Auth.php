<?php


namespace app\admin\middleware;


class Auth
{
    public function handle($request, \Closure $next) {
        // precursor middleware
        if(empty(session(config("admin.session_admin"))) && !preg_match("/login/", $request->pathinfo())) {
            return redirect((string) url("login/index"));
        }
        return $next($request);

        // rear middleware
    }

    /**
     * middleware end scheduling
     * @param \think\Response $response
     */
    public function end(\think\Response $response) {

    }

}