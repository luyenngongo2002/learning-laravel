<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class GPTBNController extends Controller
{
    public function giaPTBN( Request $request)
    {
        // Kiểm tra tính hợp lọe trước khi sử lý
        $validated = $request->validate([
            'a' => 'required|interger', // a,b: là tên  input
            'b' => 'required|interger',
        ]);
        // $validator = Validator::make($request->all(), [
        //     'a' => 'required|interger', // a,b: là tên  input
        //     'b' => 'required|interger',
        // ],[
        //    'a.required'=>'he so a la bat buoc' ,
        //     'b.required' => 'he so b la bat buoc',
        //     'a.interger' => 'he so a la so nguyen',
        //     'b.interger' => 'he so b sp nguyen',

        // ]);
        // if ($validator->fails()) {
        //     $errors = $validator->errors();
        //     return view('GPTBN') ->withError($errors);
        // }
        
        // $a = $request->input('a');
        // $b = $request->input('b'); post

        //Xử lý
        $a = $request->query('a');
        $b = $request->query('b'); //get

            if ($a == 0)
                if ($b == 0)
                    $kq = "Vo so nghiem";
                else $kq = "Vo nghiem";
            else $kq = "Phuong trinh co nghiem x=: " . -$b / $a;

            // $kq = round(-$b / $a, 2); //làm tròn 2 số
        return view('GPTBN', compact('a', 'b', 'kq'));
        } 
    }


