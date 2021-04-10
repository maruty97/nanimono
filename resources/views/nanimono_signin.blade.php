<html>
    <head>
        <meta charset="UTF-8">
        <title>ナニモノ　ホーム</title>
        <link href="{{ asset('/css/nanimono.css')}}" rel="stylesheet">
        <script type="text/javascript" src=></script>
    </head>

    <body>
        <div id="navi">
            <ul>
                <li><a href="#home">ホーム</a></li>
                <li><a href="#explanation">サービス概要</a></li>
                <li><a href="#recommond">どんな人におすすめ</a></li>
                <li><a href="nanimono_signUp.html">新規登録</a></li>
                <li><a href="nanimono_login.html">ログイン</a></li>
            </ul>

        </div>

        <div id="home">
            <h1>ナニモノ</h1>

        </div>

        <div id=home>
            <div id= "signin">
            <div class="signig-subtitle">
                <h2>新規登録</h2>
                <p>下記フォームの必要事項を記載し、内容を確認の上、登録ボタンを押してください。弊社よりあらためてご連絡差し上げます。</p>
            </div>
            <form name="form" method="post" action="signin_action">
                @csrf
                <label for="text">お名前（必須）</label><br>
                <input type="text" name="name">
                <br><label for="mail">メールアドレス（必須）</label><br>
                <input type="email" id="mail" name="mail">
                <br><label for="number">年齢</label>
                <br><input type="number" id="age" name="age">
                <br><label for="text">パスワード</label><br>
                <input type="text" id="password" name="password">
                <br><label for="text">確認のため再度パスワードを入力してください。</label><br>
                <textarea name="repassword" id="password" ></textarea><br>
                <input type="submit" onClick="return check2();" value="登録する">
                <input type="reset" value="リセットする">
            </form>    
            
            </div>
        




        </div>

            
    </body>


    <footer>

    </footer>

</html>