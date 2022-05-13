<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LidköpingsNytt++</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@forevolve/bootstrap-dark@1.0.0/dist/css/bootstrap-dark.min.css" />

    <style>
            .container {
                max-width: 1800px;
            }

            #content{
                display: block;
                max-width: 80vh;
                margin: 0 auto;
            }
            
            #content img{
                display: block;
            }

            #content p{
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }

            #link{
                border-top: 2px dashed gray;
                font-style: italic;

            }
    </style>
</head>

<body>
    <div class="container bootstrap">
        <div>
            <?php
            $db = new SQLite3('articles.db');

            $id = $_GET['aid'];

            $res = $db->query('SELECT * FROM article WHERE id=' . $id . '');

            while ($row = $res->fetchArray()) {
                echo '<div id="content">';
                echo "<h1> <u> {$row['title']} </u> </h1>";
                
                echo "{$row['content']}";

                echo '<div id="link"> <a href="'."{$row['link']}".'"> ORGINAL </a> </div>' ;
                echo '</div>';
                
            }
            ?>
        </div>

    </div>

</body>

<script src="masonry.js"> </script>

</html>