<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GPTBNController extends Controller
{
    public function giaPTBN( Request $request)
    {
        //Kiểm tra tính hợp lọe trước khi sử lý
        $validated = $request->validate([
            'a' => 'required|interger', // a,b: là tên  input
            'b' => 'required|interger',
        ]);
        // $a = $request->input('a');
        // $b = $request->input('b'); post

        //Xử lý
        $a = $request->query('a');
        $b = $request->query('b'); //get

        // if ($a=='' || $b=='') 
        //     $kq= '';
        // else
            if ($a == 0)
                if ($b == 0)
                    $kq = "Vo so nghiem";
                else $kq = "Vo nghiem";
            else $kq = "Phuong trinh co nghiem x=: " . -$b / $a;

            // $kq = round(-$b / $a, 2); //làm tròn 2 số
        return view('GPTBN', compact('a', 'b', 'kq'));
        } 
    }


