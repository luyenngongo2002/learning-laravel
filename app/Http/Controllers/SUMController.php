<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SUMController extends Controller
{
    public function sum(Request $request)
    {
        // Kiểm tra tính hợp lọe trước khi sử lý
        $validated = $request->validate(
            [
                'a' => 'required|integer',
                'b' => 'required|integer',
                'Tinh' => 'required'
            ],
            [
                'a.required' => 'a bắt buộc nhập',
                'b.required' => 'b bắt buộc nhập',
                'a.integer' => 'a phải là số nguyên',
                'b.integer' => 'b phải là số nguyên',
                'Tite.required' => 'Nhập phép tính'
            ]
        );

        $a = $request->input('a');
        $b = $request->input('b');
        $Tinh =$request->input('Tinh');

        switch ($Tinh) {
            case 'Cong':
                $result  ='Kết quả phép cộng là:'.($a + $b);
                break;
            case 'Tru':
                $result = 'Kết quả phép trừ là:' . ($a - $b);
                break;
            case 'Nhan':
                if ($a == 0 || $b == 0) {
                    $result = 0;
                }else{
                    $result = 'Kết quả phép nhân là:' . ($a * $b);
                }
                break;
            case 'Chia':
                $result = 'Kết quả phép chia là:' . ($a % $b);
                break;
        }
        return view('sum', compact('result'));
    }
}
