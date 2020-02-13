<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/16
 *Time: 17:18
 **/

namespace app\api\controller\v1;


use app\api\service\AppToken;
use app\api\service\UserToken;
use app\api\validate\AppTokenGet;
use app\api\validate\TokenGet;
use app\lib\exception\ParamterException;
use app\api\service\Token as TokenService;

class Token
{
    public function getToken($code = '')
    {
        (new TokenGet())->goCheck();
        $ut = new UserToken($code);
        $token = $ut->get();
        return [
            'token' => $token
        ];
    }

    /*
     * 第三方应用获取令牌
     * @url ： /app_token?
     * @POST  ac=:ac  se=:secret
     * */
//    public function getAppToken($ac = '', $se = '')
//    {
//        header('Access-Control-Allow-Origin: *');
//        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
//        header('Access-Control-Allow-Methods: GET');
//        (new AppTokenGet())->goCheck();
//        $app = new AppToken();
//        $token = $app->get($ac, $se);
//        return [
//            'token' => $token
//        ];
//    }

    public function verifyToken($token = '')
    {
        if (!$token) {
            throw new ParamterException([
                'token不允许为空'
            ]);
        }
        $valid = TokenService::verifyToken($token);
        return [
            'isValid' => $valid
        ];
    }
}