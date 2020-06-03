<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/hover.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
    <div id="portfolio_2020_06">
        <!-- php用 headerファイル -->
        <?php include('header-skip.php'); ?>
        <?php include('bergermenu.php'); ?>
        <h2 class="topic">~ Portfolio ~</h2>
        <main id="app">
            <div v-for="list in lists">
                <div>
                    <a v-bind:href="list.url" class="img-box">
                        <img v-bind:src="list.thumbnailSrc" alt="">
                    </a>
                    <h5><a v-bind:href="list.url">テーマ : {{list.title}}</a></h5>
                    <br>
                    <p>使用言語 : </p>
                    <br>
                    <p>{{}}</p>
                    <p>GitHub : {{}}<a href="">{{}}</a></p>

                    <p>URL : <a href="">{{}}</a></p>

                </div>
            </div>

        </main>



    </div>


    <script src="./assets/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
    <script src="./assets/js/humberger.js"></script>
    <script src="./assets/js/page-top.js"></script>
    <script src="./assets/js/portfolio_vue.js"></script>
</body>

</html>