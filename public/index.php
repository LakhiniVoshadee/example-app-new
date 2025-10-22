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

    <?php
       $books = [
        // "Do Androids Dream of Electric Sheep"
        // ,"The Longoliers"
        // ,"Hail Mary"
        // ,"Animal Farm"
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'url' => 'http://example.com',
        ],
         [
            'name' => 'The Longoliers',
            'author' => 'Stephen King',
            'url' => 'http://example.com',
         ],
          [
            'name' => 'Hail Mary',
            'author' => 'Andy Weir',
            'url' => 'http://example.com',
          ],
           [
            'name' => 'Animal Farm',
            'author' => 'George Orwell',
            'url' => 'http://example.com',
        ]
       ];
    ?>

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
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['url'] ?>">
                    <?= $book['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>