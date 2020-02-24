<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{

    public function index()
    {
        // $data = [
        //     'msg'=>'お名前を入力してください。',
        // ];
        $data = ['one', 'two', 'three', 'four', 'five'];
        return view('hello.index', ['data'=>$data]);

    }
    public function post(Request $request)
    {
        // $msg = $request->msg;
        // $data = [
        //     'msg'=>'こんにちは' . $msg . 'さん',
        // ];
        return view('hello.index', ['msg'=>$request->msg]);
    }

}





// global $head, $style, $body, $end;
// $head = '<html></html>';
// $style = <<<EOF
// <style>
// body {font-size:16pt; color:#999; }
// h1 { font-size:100pt; text-aline:right; color:#eee; margin:-40px 0px -50px 0px;}
// </style>
// EOF;
// $body = '</head><body>';
// $end = '</body></html>';
// function tag($tag, $txt){
//     return "<{$tag}>" . $txt . "</{$tag}>";
// }

// class HelloController extends Controller
// {

//     public function index(){
//         global $head, $style, $body, $end;
//         $html =  $head . tag('title', 'Hello/Index') . $style . $body . tag('h1', 'Index') . tag('p', 'this is Index page') . '<a href="/hello/other">go to Other page</a>' . $end;
//         return $html;

//     }
//     public function other(){
//         global $head, $style, $body, $end;
//         $html =  $head . tag('title', 'Hello/Other') . $style . $body . tag('h1', 'Other') . tag('p', 'this is Other page') . $end;
//         return $html;

//     }

// }
// class HelloController extends Controller
// {
//     public function __invoke(){

//         return <<<EOF
//   <html>
//   <head>
//   <title>Hello</title>
//   <style>
//   body {font-size:16pt; color:#999; }
//   h1 {font-size:30pt; text-aline:right; color:#eee; margin:-15px 0px 0px 0px;}
//   </style>
//   </head>
//   <body>
//     <h1>Single Action</h1>
//     <p>これは、シングルアクションコントローラのアクションです。</p>
//   </body>
//   </html>
//   EOF;

//     }
// }