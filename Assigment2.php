<?php

/* =========================================================
   PAGE STYLE
   ========================================================= */

echo "
<style>

    body {
        font-family: Arial, sans-serif;
        background-color: #f4f7fb;
        margin: 0;
        padding: 30px;
        color: #263238;
    }

    .container {
        max-width: 1100px;
        margin: auto;
    }

    .header {
        background-color: #17365d;
        color: white;
        padding: 30px;
        text-align: center;
        border-radius: 12px;
        margin-bottom: 25px;
    }

    .header h1 {
        margin: 0;
        font-size: 32px;
    }

    .header p {
        margin-top: 8px;
        font-size: 16px;
    }

    .section {
        background-color: white;
        padding: 25px;
        margin-bottom: 25px;
        border-radius: 12px;
        border-left: 6px solid #2878b5;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    }

    .section h2 {
        color: #17365d;
        border-bottom: 2px solid #dbe7f3;
        padding-bottom: 10px;
        margin-top: 0;
    }

    .result {
        background-color: #eef6ff;
        border: 1px solid #c9def2;
        padding: 12px 15px;
        margin: 8px 0;
        border-radius: 6px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }

    th {
        background-color: #17365d;
        color: white;
        padding: 12px;
        border: 1px solid #d5dce5;
    }

    td {
        padding: 11px;
        border: 1px solid #d5dce5;
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: #f5f8fc;
    }

    tr:hover {
        background-color: #eaf3fb;
    }

    .pass {
        color: #16803c;
        font-weight: bold;
    }

    .fail {
        color: #c62828;
        font-weight: bold;
    }

    .footer {
        text-align: center;
        color: #607d8b;
        margin-top: 30px;
        padding: 15px;
        font-size: 14px;
    }

</style>
";


/* =========================================================
   MAIN CONTAINER
   ========================================================= */

echo "<div class='container'>";


/* =========================================================
   HEADER
   ========================================================= */

echo "
<div class='header'>
    <h1>PHP Assignment 2</h1>
    <p>Array and Associative Array Exercises</p>
</div>
";


/* =========================================================
   QUESTION 1
   ========================================================= */

echo "
<div class='section'>

<h2>Question 1 — One-Dimensional Array</h2>
";

$array = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];


// Print all elements
echo "<div class='result'>";
echo "<b>All Elements:</b> ";

foreach ($array as $value) {
    echo $value . " ";
}

echo "</div>";


// Total
$total = 0;

foreach ($array as $value) {
    $total = $total + $value;
}

echo "<div class='result'>";
echo "<b>Total of all elements:</b> " . $total;
echo "</div>";


// Even
$evenTotal = 0;

foreach ($array as $value) {

    if ($value % 2 == 0) {
        $evenTotal = $evenTotal + $value;
    }

}

echo "<div class='result'>";
echo "<b>Total of even elements:</b> " . $evenTotal;
echo "</div>";


// Odd
$oddTotal = 0;

foreach ($array as $value) {

    if ($value % 2 != 0) {
        $oddTotal = $oddTotal + $value;
    }

}

echo "<div class='result'>";
echo "<b>Total of odd elements:</b> " . $oddTotal;
echo "</div>";


// Minimum
$min = min($array);

echo "<div class='result'>";
echo "<b>Minimum element:</b> " . $min . "<br>";
echo "<b>Minimum positions:</b> ";

foreach ($array as $index => $value) {

    if ($value == $min) {
        echo ($index + 1) . " ";
    }

}

echo "</div>";


// Maximum
$max = max($array);

echo "<div class='result'>";
echo "<b>Maximum element:</b> " . $max . "<br>";
echo "<b>Maximum positions:</b> ";

foreach ($array as $index => $value) {

    if ($value == $max) {
        echo ($index + 1) . " ";
    }

}

echo "</div>";

echo "</div>";


/* =========================================================
   QUESTION 2
   ========================================================= */

echo "
<div class='section'>

<h2>Question 2 — Associative Two-Dimensional Array</h2>
";

$colors = [

    "Light" => [
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ],

    "Normal" => [
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ],

    "Dark" => [
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    ]

];


echo "<table>";

echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";


foreach ($colors as $rowName => $row) {

    echo "<tr>";

    echo "<th>" . $rowName . "</th>";

    foreach ($row as $value) {
        echo "<td>" . $value . "</td>";
    }

    echo "</tr>";
}

echo "</table>";

echo "</div>";


/* =========================================================
   QUESTION 3
   ========================================================= */

echo "
<div class='section'>

<h2>Question 3 — Square Two-Dimensional Array</h2>
";

$matrix = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];


// Display Matrix
echo "<b>Array:</b>";

echo "<table>";

foreach ($matrix as $row) {

    echo "<tr>";

    foreach ($row as $value) {
        echo "<td>" . $value . "</td>";
    }

    echo "</tr>";
}

echo "</table>";


// Odd total
$oddTotal = 0;

foreach ($matrix as $row) {

    foreach ($row as $value) {

        if ($value % 2 != 0) {
            $oddTotal = $oddTotal + $value;
        }

    }
}

echo "<div class='result'>";
echo "<b>Total of odd elements:</b> " . $oddTotal;
echo "</div>";


// Even total
$evenTotal = 0;

foreach ($matrix as $row) {

    foreach ($row as $value) {

        if ($value % 2 == 0) {
            $evenTotal = $evenTotal + $value;
        }

    }
}

echo "<div class='result'>";
echo "<b>Total of even elements:</b> " . $evenTotal;
echo "</div>";


// Row totals
echo "<h3>Row Totals</h3>";

echo "<table>";

echo "<tr>";
echo "<th>Row</th>";
echo "<th>Total</th>";
echo "</tr>";

for ($i = 0; $i < 3; $i++) {

    $rowTotal = 0;

    for ($j = 0; $j < 3; $j++) {
        $rowTotal = $rowTotal + $matrix[$i][$j];
    }

    echo "<tr>";
    echo "<td>Row " . ($i + 1) . "</td>";
    echo "<td>" . $rowTotal . "</td>";
    echo "</tr>";
}

echo "</table>";


// Column totals
echo "<h3>Column Totals</h3>";

echo "<table>";

echo "<tr>";
echo "<th>Column</th>";
echo "<th>Total</th>";
echo "</tr>";

for ($j = 0; $j < 3; $j++) {

    $columnTotal = 0;

    for ($i = 0; $i < 3; $i++) {
        $columnTotal = $columnTotal + $matrix[$i][$j];
    }

    echo "<tr>";
    echo "<td>Column " . ($j + 1) . "</td>";
    echo "<td>" . $columnTotal . "</td>";
    echo "</tr>";
}

echo "</table>";


// Diagonals
$diagonal1 = 0;
$diagonal2 = 0;

for ($i = 0; $i < 3; $i++) {

    $diagonal1 = $diagonal1 + $matrix[$i][$i];

    $diagonal2 = $diagonal2 + $matrix[$i][2 - $i];
}

echo "<div class='result'>";
echo "<b>First diagonal:</b> " . $diagonal1 . "<br>";
echo "<b>Second diagonal:</b> " . $diagonal2;
echo "</div>";


// Total
$total = 0;

foreach ($matrix as $row) {

    foreach ($row as $value) {
        $total = $total + $value;
    }

}

echo "<div class='result'>";
echo "<b>Total of all elements:</b> " . $total;
echo "</div>";


// Minimum
$min = $matrix[0][0];

foreach ($matrix as $row) {

    foreach ($row as $value) {

        if ($value < $min) {
            $min = $value;
        }

    }
}

echo "<div class='result'>";
echo "<b>Minimum element:</b> " . $min . "<br>";
echo "<b>Minimum positions:</b> ";

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] == $min) {
            echo "(" . ($i + 1) . "," . ($j + 1) . ") ";
        }

    }
}

echo "</div>";


// Maximum
$max = $matrix[0][0];

foreach ($matrix as $row) {

    foreach ($row as $value) {

        if ($value > $max) {
            $max = $value;
        }

    }
}

echo "<div class='result'>";
echo "<b>Maximum element:</b> " . $max . "<br>";
echo "<b>Maximum positions:</b> ";

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] == $max) {
            echo "(" . ($i + 1) . "," . ($j + 1) . ") ";
        }

    }
}

echo "</div>";

echo "</div>";


/* =========================================================
   QUESTION 4
   ========================================================= */

echo "
<div class='section'>

<h2>Question 4 — Student Information</h2>
";


$students = [

    [
        "ID" => "CA221",
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ],

    [
        "ID" => "CA223",
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ],

    [
        "ID" => "CA221",
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    ]

];


echo "<table>";

echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";


foreach ($students as $student) {

    echo "<tr>";

    echo "<td>" . $student["ID"] . "</td>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";

    echo "</tr>";
}

echo "</table>";

echo "</div>";


/* =========================================================
   QUESTION 5
   ========================================================= */

echo "
<div class='section'>

<h2>Question 5 — Student Transcript</h2>
";


$transcript = [

    "Semester 1" => [

        "Course 1" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],

        "Course 2" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],

        "Course 3" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ]

    ],


    "Semester 2" => [

        "Course 1" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 0,
            "Total" => 45,
            "Status" => "Fail"
        ],

        "Course 2" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],

        "Course 3" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ]

    ]

];


echo "<table>";

echo "<tr>";
echo "<th>Semester</th>";
echo "<th>Course</th>";
echo "<th>CW1</th>";
echo "<th>MidTerm</th>";
echo "<th>CW2</th>";
echo "<th>Final</th>";
echo "<th>Total</th>";
echo "<th>Status</th>";
echo "</tr>";


foreach ($transcript as $semester => $courses) {

    foreach ($courses as $course => $data) {

        echo "<tr>";

        echo "<td>" . $semester . "</td>";
        echo "<td>" . $course . "</td>";
        echo "<td>" . $data["CW1"] . "</td>";
        echo "<td>" . $data["MidTerm"] . "</td>";
        echo "<td>" . $data["CW2"] . "</td>";
        echo "<td>" . $data["Final"] . "</td>";
        echo "<td>" . $data["Total"] . "</td>";

        if ($data["Status"] == "Pass") {
            echo "<td class='pass'>Pass</td>";
        } else {
            echo "<td class='fail'>Fail</td>";
        }

        echo "</tr>";
    }
}

echo "</table>";

echo "</div>";


/* =========================================================
   FOOTER
   ========================================================= */

echo "
<div class='footer'>
    PHP Assignment 2 &nbsp; | &nbsp; Student Submission
</div>
";


echo "</div>";

?>