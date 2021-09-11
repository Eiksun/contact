<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ICON -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

    <!-- STYLE -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" type="text/css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css" type="text/css">
    <link rel="stylesheet" href="./src/css/index.css">

    <title>Jcloud :: login</title>

    <!-- SCRIPT -->
    <script src="./js/index.js" type="text/javascript"></script>
</head>

<body>
    <form action="" id="frm" class="frm">
        <header class="header">
            <a href="javascript:">
                <img src="./images/logo_no_initial.png" class="logo_no_initial" alt="Jcloud logo image">
            </a>

            <span>
                <img src="./images/icon_help.png" id="icon_help" class="icon_help" alt="help icon">
            </span>
        </header>
        
        <section id="section" class="section">
            <aside class="aside">
                <div id="info_slide_box" class="info_slide_box">
                    <p>ID : admin <br> PW : 1234</p>
                </div>
            </aside>

            <div class="article_wrap">
                <article class="section_tit">
                    <div>
                        <img src="./images/logo.png" class="logo" alt="">
                    </div>
                    <h1>JCloud 로그인</h1>
                </article>

                <article class="section_login_inp">
                    <div class="inp_id_box">
                        <input type="text" name="inp_id" id="inp_id" class="login_inp inp_id" onkeyup="LoginBoxStylechange(this);" placeholder="ID" maxlength="40">
                        <span>
                            <i id="inp_id_arrow_icon" class="far fa-arrow-alt-circle-right"></i>
                        </span>
                    </div>
                    <div id="inp_pw_box" class="inp_pw_box">
                        <input type="password" name="inp_pw" id="inp_pw" class="login_inp inp_pw" onkeyup="LoginBoxStylechange(this);" placeholder="암호" maxlength="15">
                        <span>
                            <i id="inp_pw_arrow_icon" class="far fa-arrow-alt-circle-right"></i>
                        </span>
                    </div>
                </article>

                <article class="section_etc">
                    <p class="join">
                        <i id="guestLogin" class="xi-profile-o"></i>회원가입
                    </p>
                    <p class="lost_id_pw">ID 또는 암호를 잊으셨습니까? ↗</p>
                </article>
            </div>
        </section>
    </form>

</body>