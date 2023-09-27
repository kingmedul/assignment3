<?php

/**
 * @Problem 04
 * Create a multidimensional array called $studentGrades to store the grades of three students. Each
 * student has grades for three subjects: Math, English, and Science. Write a PHP function which takes 
 * "$studentGrades" as an argument to calculate and print the average grade for each student.
 */

$studentGrades = [
    "student1" => ["math" => 90, "english" => 90, "science" => 90],
    "student2" => ["math" => 70, "english" => 70, "science" => 70],
    "student3" => ["math" => 33, "english" => 33, "science" => 33],
];


function gradeCalculate($average)
{
    if ($average >= 80 && $average <= 100) {
        $result = "A+";
    } else if ($average >= 70 && $average < 80) {
        $result = "A";
    } else if ($average >= 60 && $average < 70) {
        $result = "A-";
    } else if ($average >= 50 && $average < 60) {
        $result = "B";
    } else if ($average >= 40 && $average < 50) {
        $result = "C";
    } else if ($average >= 33 && $average < 40) {
        $result = "D";
    } else {
        $result = "F";
    }

    return $result;
}

function studentGrade($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        // Get the number of students in the array & convert them to numbers average 
        $average = array_sum($grades) / count($grades);

        // Get the Grade of students
        $result = gradeCalculate($average);
        echo "{$student} average: {$average} & Grade: {$result} \n";
    }
}

studentGrade($studentGrades);