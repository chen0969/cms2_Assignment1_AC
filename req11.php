<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requirement 11</title>
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
        <h1>Requirement 11</h1>
        <h2>Check out my links</h2>
    </header>
    <main>
        <?php
        $links = [
            "https://match19.com" => "Match19",
            "https://yizixue.com.tw" => "Yizixue",
            "https://template.match19co.com" => "Match19 Template Demo1",
            "https://template.match19co.com/m2" => "Match19 Template Demo2",
            "https://template.match19co.com/m3" => "Match19 Template Demo3",
            "https://template.match19co.com/m4" => "Match19 Template Demo4",
            "https://template.match19co.com/m5" => "Match19 Template Demo5",
            "https://template.match19co.com/m10" => "Match19 Template Demo10",
            "https://broccoli-design.great-site.net" => "My Web-portfolio",
            "https://connectiondialogue.000.pe" => "Youth Connection Dialogue"
        ];
        ?>
        <code>
            <ul>
                <?php
                foreach ($links as $url => $label) {
                    echo "<li><a href='$url' target='_blank'>$label</a></li>";
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