<?php
function currency_format($number, $unit){
    return number_format($number).$unit;
}