<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:
$netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]);

$annualIncome = $netIncome - $socialSecurity;

print_r($annualIncome);


$annualIncome -= $annualExpenses["vacations"] + $annualExpenses[ "carRepairs"];
echo "\nAnnual income after calculation:\n$annualIncome\n";

$monthlyIncome = $annualIncome / 12;
print_r($monthlyIncome);

$monthlyIncome -= $monthlyExpenses["rent"] + $monthlyExpenses["utilities"] + $monthlyExpenses["healthInsurance"];
echo "\nMonthly income after calculation:\n$monthlyIncome \n";

echo "\n";

$weeklyIncome = $monthlyIncome / 4.33;
print_r($weeklyIncome);

$weeklyExpenses = [
  "gas" => 25,
  "food" => 90,
  "entertainment" => 47
];

$weeklyIncome -= $weeklyExpenses["gas"] + $weeklyExpenses[ "food"] + $weeklyExpenses["entertainment"];
echo "\n";
print_r($weeklyIncome);

$weeklyIncome = $weeklyIncome * 52;
echo "\n";
print_r($weeklyIncome);

