<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 8/27/2018
 * Time: 2:57 PM
 */

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestApiController extends Controller
{
    public function index(Request $request)
    {
        $token = $request['_token'];
        $title = $request->get('title');
        $body = $request->get('body');
        $data = [
           'token' => $token,
           'title' => $title,
           'body' => $body,
        ];

        return response()->json(
          $data,201
        );
    }

}