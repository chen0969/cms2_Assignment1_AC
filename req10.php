<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requirement 10</title>
    <style>
        code,
        pre,
        ul {
            background-color: gray;
            color: yellow;
        }

        .req {
            border: solid 2px gray;
            padding: 1rem;
        }
    </style>
</head>

<body>
    <header>
        <h1>Requirement 10</h1>
        <h2>check out the names</h2>
    </header>
    <main>
        <?php
        $names = [
            "Alice",
            "Shiva",
            "Shinji",
            "Asuka",
            "Lei",
            "Frank",
            "Sayoli",
            "Kurisu",
            "Ivy",
            "John Wick"
        ];
        ?>
        <code>
            <ul>
                <?php
                foreach ($names as $name) {
                    echo "<li>$name</li>";
                }
                ?>
            </ul>
        </code>
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