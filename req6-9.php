<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment1 PHP part</title>
    <style>
        code,
        pre {
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
        <h1>this page contains the reqs in Asignment PHP part</h1>
    </header>
    <hr>
    <main>
        <!-- #6 -->
        <div>
            <h2>#6 Requirment 1</h2>
            <h3>First of all, lets explain 4 interesting functions</h3>
            <!-- str repeat -->
            <div class="req">
                <h3>str_repeat() Function</h3>
                <p>this code can repeat the contain you want to put in the web, <br>
                    it works like this: str_repeat('the contain yoy want to put', the amount you want to repeat)
                </p>
                <p>when I type <code>str_repeat("check me out! ", 5);</code></p>
                <p>it works like this:</p>
                <code> <?php echo str_repeat("check me out! ", 5); ?></code>
            </div>
            <!-- str replace -->
            <div class="req">
                <h3>str_replace() Function</h3>
                <p>this code can replace the contain you want to put in the web, <br>
                    it works like this: str_replace("the hook", "the content you want to replace", "the org content");
                </p>
                <p>See this is the org content:</p>
                <code>
                    <?php
                    $text = "I need a job in Canada.";
                    echo $text;
                    ?>
                </code>
                <p>when I type <code> echo str_replace("a job","money","$text"); </code></p>
                <p>it works like this:</p>
                <code>
                    <?php
                    $test = str_replace("a job", "money", $text);
                    echo $text;
                    ?>
                </code>
            </div>
            <!-- str word count -->
            <div class="req">
                <h3>str_word_count() Function</h3>
                <p>this code can count the word you chose, <br>
                    it works like this: str_word_count("the content");
                </p>
                <p>See this is the org content:</p>
                <code>
                    <?php
                    $text = "I need a job in Canada, I don't want to be homeless and jobless anymore.";
                    echo $text;
                    ?>
                </code>
                <p>when I type <code> echo str_word_count($text); </code></p>
                <p>it works like this:</p>
                <code>
                    <?php
                    $count = str_word_count($text);
                    echo $count;
                    ?>
                </code>
            </div>
            <!-- strcmp() -->
            <div class="req">
                <h3>strcmp() Function</h3>
                <p>this code can compare the word you chose, <br>
                    it means string comapre. <br>
                    it works like this: strcmp("contentA", "contentB"); <br>
                    and if it returns 0, it means two strings are equal.
                </p>
                <h4>fun fact, this function doesn't just compare the word amount, it also compares the cases.</h4>
                <p>See this is the org content:</p>
                <code>
                    <?php
                    $textA = "I need a job in Canada, I don't want to be homeless and jobless anymore.";
                    $textB = "I need a job to survive, I can't feel hope in Canada anymore.";
                    echo $text;
                    echo "<br>";
                    echo $textB;
                    ?>
                </code>
                <p>when I type <code> echo strcmp($textA, $$textB); </code></p>
                <p>it works like this:</p>
                <code>
                    <?php
                    $count = strcmp($textA, $textB);
                    echo $count;
                    ?>
                </code>
            </div>
        </div>
        <hr>
        <!-- #7 -->
        <div>
            <h2>#7 Requirment 2</h2>
            <!-- str repeat -->
            <div class="req">
                <h3>round() Function</h3>
                <p>First, let's see 3 numbers:</p>
                <code>
                    <?php
                    $n1 = 3.141;
                    $n2 = 5.618;
                    $n3 = 1.459;
                    echo "
                    number1: $n1 <br>
                    number2: $n2 <br>
                    number3: $n3 <br>
                    "
                    ?>
                </code>
                <p>When I use round() function, it will become:</p>
                <code>
                    <?php
                    $r1 = round($n1, 1);
                    $r2 = round($n2, 1);
                    $r3 = round($n3, 1);

                    echo "
                    number1: $r1 <br>
                    number2: $r2 <br>
                    number3: $r3 <br>
                    "
                    ?>
                </code>
            </div>
        </div>
        <hr>
        <!-- #8 -->
        <div>
            <h2>#8 Requirment 3</h2>
            <!-- str repeat -->
            <div class="req">
                <h3>array_search() and in_array() Function</h3>
                <p>First, let's see an array:</p>
                <code>
                    <?php
                    $array = array("a" => "black", "b" => "white", "c" => "gray");
                    echo '<pre>';
                    print_r($array);
                    echo '</pre>';
                    ?>
                </code>
                <p>I can use array_search("white", $array) to see the contnt of 2nd srray</p>
                <code>
                    <?php echo array_search("white", $array); ?>
                </code>
                <p>As for in_array() function, I can use (in_array("black", $array)) to check if any element is inside
                    of the array:</p>
                <code>
                    <?php
                    if (in_array("black", $array)) {
                        echo "found it!";
                    } else {
                        echo "not found";
                    }
                    ?>
                </code>
            </div>
        </div>
        <hr>
        <!-- #9 -->
        <div>
            <h2>#9 Requirment 4</h2>
            <!-- str repeat -->
            <div class="req">
                <h3>date() Function</h3>
                <p>First, let's see an array:</p>
                <code>
                    <?php
                    $array = array("a" => "black", "b" => "white", "c" => "gray");
                    echo '<pre>';
                    print_r($array);
                    echo '</pre>';
                    ?>
                </code>
            </div>
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