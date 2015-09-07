#### Question 3
* Create a PHP function returning the sum of all the multiples of 3 or 5 below a value chosen by the user. What is its algorithmic complexity?


#### Answer
* Source: https://github.com/tuandm/sat/blob/master/src/3-Sum-of-Multitple/MultipleSummary.php

Lets say:
* For calculating multiple of 3, we can use f(3, N) = 3 * floor(N/3) * (floor(N/3) + 1) / 2
* Same as 5, f(5, N) = 5 * floor(N/5) * (floor(N/5) + 1) / 2.
* We need to exclude one time of f(3 * 5, N) because they are counted twice.
* Then we can have result f(3, 5, N) = f(3, N) + f(5, N) - f(3 * 5, N);

So we can have methods:

```
function sumMulitple($number, $max)
{
    return $number * floor($max / $number) * (floor($max / $number) + 1) / 2;
}

function getSum($max)
{
    return sumMulitple(3, $max) + sumMulitple(5, $max) - sumMulitple(3 * 5, $max);
}
```

The complexity is O(1)

#### Test
```
echo MultipleSummary::getSum(2); // 0
echo MultipleSummary::getSum(3); // 0
echo MultipleSummary::getSum(6); // 8
echo MultipleSummary::getSum(20); // 78 ( = 3 + 5 + 6 + 9 + 10 + 12 + 15 + 18)
echo MultipleSummary::getSum(10000000); // 23333331666668
```
