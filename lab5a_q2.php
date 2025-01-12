<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php
    // Associative array of students
    $students = [
        ["Name" => "Abdullah Al-Rumaithah", "Matric" => "AI200353", "Course" => "Web", "Year" => 3],
        ["Name" => "khaled Ahmed", "Matric" => "AI200354", "Course" => "Networking", "Year" => 2],
        ["Name" => "mona Hassan", "Matric" => "AI200355", "Course" => "AI", "Year" => 4]
    ];
    ?>

    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Matric</th>
            <th>Course</th>
            <th>Year</th>
        </tr>
        <?php
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>{$student['Name']}</td>";
            echo "<td>{$student['Matric']}</td>";
            echo "<td>{$student['Course']}</td>";
            echo "<td>{$student['Year']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
