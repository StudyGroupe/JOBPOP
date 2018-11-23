<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>JOBPOP</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/base.css">
    </head>
    <body>
        <?php require_once "tpl/header.html"; ?>
        <div class="main-wrapper">
            <img src="img/main_img.jpg">
            <img class="catchcopy" src="img/catchcopy.png">
            <img class="catchcopy2" src="img/catchcopy2.png">
        </div>
        <div class="title">
            <img class="title1" src="img/title.png">
        </div>
        <div class="contents">
            <a href="index.php">
                <img src="img/btn01.png">
                <p>ジョブポップとはこういう会社です。</p>
                <p>more</p>
            </a>
            <a href="company.php">
                <img src="img/btn02.png">
                <p>会社概要</p>
                <p>more</p>
            </a>
            <a href="recruit.php">
                <img src="img/btn03.png">
                <p>随時スタッフ募集しています。</p>
                <p>more</p>
            </a>
            <a href="Q&A.php">
                <img src="img/btn04.png">
                <p>よくある質問Q&A</p>
                <p>more</p>
            </a>
            <a href="contact.php">
                <img src="img/btn05.png">
                <p>ジョブポップへのお問い合せ</p>
                <p>more</p>
            </a>
        </div>
        <?php require_once "tpl/footer.html"; ?>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/index.js"></script>
    </body>
</html>
