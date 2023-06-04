<?php

// Creating an array
$fruits = array("apple", "banana", "orange");

// Accessing array elements
echo $fruits[0]; // Output: apple

// Modifying array elements
$fruits[1] = "grape";

// Adding elements to an array
$fruits[] = "mango";

// Looping through an array
foreach ($fruits as $fruit) {
    echo $fruit . ", ";
}
// Output: apple, grape, orange, mango

// Array functions
$length = count($fruits);
echo $length; // Output: 4

$lastFruit = array_pop($fruits);
echo $lastFruit; // Output: mango

// Associative arrays
$person = array(
    "name" => "John",
    "age" => 25,
    "country" => "USA"
);

echo $person["name"]; // Output: John

echo "<hr>";

// Multidimensional arrays
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Dynamic arrays (Lists)

$final_result = [
    [
        "roll_no" => "161107",
        "report" => [
                "student_name" => "Prashant",
                "phone" => "9876543210",
                "email" => "prashant.std@itsbhm.org",
                "marks" => [
                    "hindi" => 49,
                    "english" => 82,
                    "math" => 91
                ]
            ]
    ],
    [
    "roll_no" => "161108",
    "report" => [
            "student_name" => "Zoya",
            "phone" => "9898981342",
            "email" => "zoya.d@itsbhm.org",
            "marks" => [
                "hindi" => 62,
                "english" => 92,
                "math" => 94
            ]
        ]
    ]
];

var_dump ($final_result[0]);

echo "<hr>";

// Accessing Array Data Thought Roll No

$rollNumber = "161108"; // The roll number you want to search for
$foundStudent = null; // Variable to store the found student

foreach ($final_result as $student) {
    if ($student['roll_no'] === $rollNumber) {
        $foundStudent = $student;
        break; // Stop the loop once the student is found
    }
}

if ($foundStudent !== null) {
    // Student found
    $studentName = $foundStudent['report']['student_name'];
    $studentPhone = $foundStudent['report']['phone'];
    $studentEmail = $foundStudent['report']['email'];
    $studentMarks = $foundStudent['report']['marks'];

    echo "Student Name: " . $studentName . "<br>";
    echo "Phone: " . $studentPhone . "<br>";
    echo "Email: " . $studentEmail . "<br>";
    echo "Marks:<br>";
    foreach ($studentMarks as $subject => $mark) {
        echo $subject . ": " . $mark . "<br>";
    }
} else {
    // Student not found
    echo "Student with roll number " . $rollNumber . " not found.";
}