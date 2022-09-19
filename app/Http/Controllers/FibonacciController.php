<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function calculate(Request $request) {
        // retrieve input number
        $p = $request->input('position');
        $status = '';
        $num = '';
        $msg = '';

        if (!is_numeric($p)) { 
            // check if a number was enter
            $msg = 'Please enter a valid number.';
        } elseif (floor($p) != $p) { 
            // check if a decimal was entered
            $msg = 'Please enter whole numbers only.';
        } else {
            // search for number position
            $p = intval($p);
            if ($p<1 || $p>90) { 
                $msg = 'Please enter a number between 1 and 90.'; // check if number is in range 
            }
            elseif ($p==1) { $num = 0; $status = 'sucess'; }
            elseif ($p==2) { $num = 1; $status = 'sucess'; }
            else {
                $n = 0;
                $x = 2;
                $n1 = 0;
                $n2 = 1;
                while($n <= 90) {
                    $x++;
                    $n3 = $n1 + $n2;
                    if ($x == $p ) { $num = $n3; $status = 'sucess'; break; }
                    $n1 = $n2;
                    $n2 = $n3;
                    $n++;
                }
            }
            if ($status == 'sucess') {
                $msg = '<span class="text-success">The number at postion <b>' . $p . '</b> is:</span>';
            }
        }
        return response()->json(['status'=>$status,'msg'=>$msg, 'num'=>$num]);
    }
}
