<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LidköpingsNytt++</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@forevolve/bootstrap-dark@1.0.0/dist/css/bootstrap-dark.min.css" />
    <script src="masonry.js"></script>

    <style>
        #description {
            font-size: 0.8em;
            color: rgb(208, 190, 190);
        }

        .masonry-container {
            margin: 0 auto;
            /* this is the css that keeps the container centered in page */
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1800px;
            }
        }
    </style>
</head>

<body>
    <script>
        window.onload = function() {
            var grid = document.querySelector('.row');
            var msnry = new Masonry(grid, {
                percentPosition: true
            });

            msnry.layout();
        }
    </script>

    <div class="container bootstrap">
        <div class="row justify-content-center"'>

            <?php
            $db = new SQLite3('articles.db');

            $res = $db->query('SELECT * FROM article');

            $counter = 0;

            while ($row = $res->fetchArray()) {
                echo '<div class="col-md-4 py-3 grid-item" style="width: 18rem;">';
                if ($row['content'] != "None")
                    echo '<a href="contennnt.php?aid=' . "{$row['id']}" . '">';
                echo '<div class="card">';
                if ($row['image'] != null)
                    echo '<img src="' . "{$row['image']}" . '" class="card-img-top" alt="...">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . "{$row['title']}" . '</h5>';
                echo '<p id="description">' . "{$row['date']}" . '</p>';
                echo '</div>';
                echo '</div>';
                if ($row['content'] != "None")
                    echo '</a>';
                echo '</div>';
            }


            ?>
        </div>

    </div>

</body>

</html>