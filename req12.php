<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $pageTitle = "Requirement 12, Table of IDs and Names";
    $h1 = "Let's see the table of ids and names";
    $tableData = [
        "4458",
        "Mary",
        "9874",
        "Victor",
        "3569",
        "Mathew",
        "1145",
        "John",
        "3574",
        "Peter"
    ];
    echo "<title>";
    echo $pageTitle;
    echo "</title>";
    ?>
</head>

<body>
    <header>
        <h1><?php echo $h1; ?></h1>
    </header>
    <hr>
    <main>
        <div>
            <table border="1" cellpadding="10">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
                <?php
                foreach (array_chunk($tableData, 2) as $row) {
                    echo "<tr>";
                    echo "<td>{$row[0]}</td>";
                    echo "<td>{$row[1]}</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
        <hr>
        <h3>
            for Requirment 10, 11, 12. Please see the following page:
        </h3>
    </main>
    <footer>
        <button><a href="req6-9.php">req 6-9</a></button>
        <button><a href="req10.php">req 10</a></button>
        <button><a href="req11.php">req 11</a></button>
        <button><a href="req12.php">req 12</a></button>
    </footer>
</body>

</html>