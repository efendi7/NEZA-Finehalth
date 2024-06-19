<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeController extends Controller
{
    public function findPrimes(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');

        $primes = $this->getPrimesInRange($start, $end);

        return view('primeResults', compact('primes', 'start', 'end'));
    }

    private function getPrimesInRange($start, $end)
    {
        $primes = [];
        for ($num = $start; $num <= $end; $num++) {
            if ($this->isPrime($num)) {
                $primes[] = $num;
            }
        }
        return $primes;
    }

    private function isPrime($num)
    {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }
}
