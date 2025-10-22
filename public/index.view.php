<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        } */
    </style>
</head>

<body>


    <!-- <h1>
        <?php
            $greeting = "Hello";

            echo "$greeting World!"
        ?>
    </h1> -->

    <!-- <?php
      $name = "Dark Matter";
      $read = false;

      if ($read) {
        $message = "You have read \"$name.\"";
      }else{
        $message = "You have not read \"$name.\"";
      }
    ?>
    -->
    <!-- <h1>
      <?php
        echo $message;
      ?>
      <?= $message ?>
    </h1> -->

    <h1> Recommended Books</h1>



    <!-- <ul>
        <?php foreach ($books as $book){
            echo "<li>{$book}™</li>";
        }
        ?>

        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul> -->

    <!-- <p>
       <?= $books[2] ?>
    </p> -->

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
        <?php if ($book['author'] === 'Andy Weir') : ?>
        <li>
            <a href="<?= $book['url'] ?>">
                <strong>
                    <?= $book['name']; ?> (Author: <?= $book['author']; ?>)
                </strong>
            </a>
        </li>
        <?php endif; ?>

        <!-- <li>
            <a href="<?= $book['url'] ?>">
                <?= $book['name']; ?>
            </a>
        </li> -->
        <?php endforeach; ?>
    </ul>

    <!-- <p>
        <?= array_filter($books, fn($book) => $book['author'] === 'Andy Weir') ?>
    </p> -->

</body>

</html>