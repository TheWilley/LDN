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
                padding-top: 30px;
            }

            .alignleft {
                float: left;
            }

            #home {
                display: inline-block;
                padding: 30px;
                float: left;
            }

            #description {
                font-size: 0.8em;
                color: rgb(208, 190, 190);
            }

            #content{
                display: block;
                max-width: 80vh;
                margin: 0 auto;
            }
            
            #content img{
                display: block;
                margin-right: 15px
            }

            #content > p:nth-child(2) > img {
                width: 100%;
                min-height: 300px;
            }

            #content p{
                font-family: Franklin Gothic Medium;
                overflow: auto;
            }

            #content em {
                font-size: 0.8em;
                text-align: left;
            }

            #content em #text{
                text-align: left;
            }

            #link{
                border-top: 2px dashed gray;
                font-style: italic;

            }
    </style>
</head>

<body>
    <a href='../php/index.php' id="home"> LDN </a>
    <div class="container bootstrap">
        <div>
            <?php
            $db = new SQLite3('../database/articles.db');
            $id = $_GET['aid'];
            $res = $db->query('SELECT * FROM article WHERE id=' . $id . '');

            while ($row = $res->fetchArray()) {
                echo '<div id="content">';
                echo "<h1> {$row['title']} </h1>";
                echo "<p id='description'> {$row['date']} </p>";
                
                echo "{$row['content']}";

                echo '<div id="link"> <a href="'."{$row['link']}".'"> ORGINAL </a> </div>' ;
                echo '</div>';
            }
            ?>
        </div>

    </div>
</body>

<script src="../lib/ar.js"> </script>

</html>