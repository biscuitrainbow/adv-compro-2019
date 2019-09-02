<?php

// $students = array(
//     "A" => array("Adam", "Denny"),
//     "B" => array(),
//     "C" => array(),
//     "D" => array('Candy'),
//     "F" => array('Frank', 'Bob')
// );

$students = array(
    "A" => array(),
    "B" => array(),
    "C" => array(),
    "D" => array(),
    "F" => array(),
);

$grades = array("A", "B", "C", "D", "F");

$i = 0;
while (true) {
    $name = NULL;
    $grade = NULL;

    printf("Student %d: (name, grade enter for end of data): ", $i++);
    fscanf(STDIN, "%s %s", $name, $grade);

    if ($name == NULL || $grade == NULL) break;

    if (in_array($grade, $grades))  $students[$grade][] = $name;
}

foreach ($grades as $grade) {
    printf("%s (%d) : %s\n", $grade, count($students[$grade]), implode(", ", $students[$grade]));
}
