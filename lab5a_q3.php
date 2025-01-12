<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    // Function to generate a multiplication table
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                "No" => $i,
                "Multiplier" => $multiplier,
                "Answer" => $i * $multiplier
            ];
        }
        return $results;
    }

    // Generate table for multiplier 5
    $table = multiplication(5);
    ?>

    <h3>Multiplication Table for 5</h3>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php
        foreach ($table as $row) {
            echo "<tr>";
            echo "<td>{$row['No']}</td>";
            echo "<td>{$row['Multiplier']}</td>";
            echo "<td>{$row['Answer']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
