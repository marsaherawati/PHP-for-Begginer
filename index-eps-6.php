<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Demo</title>
</head>
<body>
    <h1>Recommended Books</h1>
    <?php 
    $books = [
        "Do Androids Dream of Eletric Sheep",
        "The langoliers",
        "Hail Mary"
    ]
    ?>
    <ul>
        <?php foreach ($books as $book){
            echo "<li>$book</li>";
        } 
        ?>
    </ul>
</body>
</html>
