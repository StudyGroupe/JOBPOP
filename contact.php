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
        <div class="contact">
            <h1>contact</h1>
            <div class="contact-form">
                <h2>下記の項目をご記入の上送信ボタンを押してください</h2>
                <div>
                    <p>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
                    <p>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>
                    <p><span>*</span>は必須項目となります。</p>
                </div>
                <form action="#" method="post">
                    <div class="text-form">
                        <div>
                            <p>氏名<span>*</span></p>
                            <input class="text-form1" type="text">
                        </div>
                        <div>
                            <p>フリガナ<span>*</span></p>
                            <input class="text-form2" type="text">
                        </div>
                        <div>
                            <p>電話番号</p>
                            <input class="text-form3" type="text">
                        </div>
                        <div>
                            <p>メールアドレス<span>*</span></p>
                            <input class="text-form4" type="text">
                        </div>
                    </div>
                    <h2>1.お問い合わせ内容をご記入ください<span>*</span></h2>
                    <div class="textarea-form">
                        <textarea class="text-form5" name="name" rows="8" cols="80"></textarea>
                        <input class="send" type="submit" value="送信">
                    </div>
                </form>
            </div>
        </div>
        <?php require_once "tpl/footer.html"; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/index.js"></script>
    </body>
</html>
