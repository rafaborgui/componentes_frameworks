<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServidorRpcController extends Controller
{
    public $error = null;

    public function divide($dividend, $divisor, $int = false)
    {

        if (!$divisor)
        {
            $this->error = 'Cannot divide by zero';
        }
        else
        {
            $quotient = $dividend / $divisor;
            return $int ? (int) $quotient : $quotient;
        }

    }
}
