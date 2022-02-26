<?php

namespace Rector\Money\Tests\Rule\MultiplyAndDivideByStringRector\Fixture;

use Money\Currency;
use Money\Money;

Money::PLN(500)->multiply(5);

$multiplier = '2.5';
(new Money(100, new Currency('PLN')))->multiply($multiplier);

Money::PLN(500)->divide('5.0');
