<?php


class FizzBuzz
{
    const FIZZ = "Fizz";
    const BUZZ = "Buzz";
    const FIZZBUZZ = "FizzBuzz";

    public function isFizz($number)
    {
        if ($number % 3 === 0) {
            return self::FIZZ;
        }
    }

    public function isBuzz($number)
    {
        if ($number % 5 === 0) {
            return self::BUZZ;
        }
    }

    public function fizzBuzz($number)
    {
        if ($this->isFizz($number) && $this->isBuzz($number)) {
            return self::FIZZBUZZ;
        } elseif ($this->isFizz($number)) {
            return self::FIZZ;
        } elseif ($this->isBuzz($number)) {
            return self::BUZZ;
        } else {
            echo $number . "Your number must be fizz or buzz";
        }
    }
}