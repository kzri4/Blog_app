<!DOCTYPE html>
<html lang="ja">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">

<?php include __DIR__ . "/../common/_head.php"; ?>

<body>
    <?php include __DIR__ . "/../common/_header.php"; ?>

    <div class="wrapper user-wrapper">
    <div class="form-main">
        <h2 class="title">ログイン</h2>
        <form action="session_create.php" method="post">
            <div class="form-group">
                <label for="email">メールアドレス<span class="required">必須</span></label>
                <input type="email" id="email" name="user[email]" placeholder="メールアドレスを入力してください" required>
            </div>
            <div class="form-group">
                <label for="password">パスワード<span class="required">必須</span></label>
                <input type="password" id="password" name="user[password]" placeholder="パスワードを入力してください" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn" value="ログイン">
            </div>
        </form>
    </div>
</div>

    <?php include __DIR__ . "/../common/_footer.php"; ?>
</body>

</html>