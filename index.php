<?php

include './common/header.php';


echo <<<HTML
<!-- STYLE -->
<link rel="stylesheet" href="./src/css/index.css" />
<!-- SCRIPT -->
<script src="./js/index.js" type="text/javascript"></script>


<form method="POST" id="frm" class="frm" onSubmit="return frm_chk();">
    <header class="header">
        <div class="row_contents">
            <a href="javascript:">
                <img src="./images/logo_no_initial.png" class="logo_no_initial" alt="Jcloud logo image">
            </a>

            <span>
                <img src="./images/icon_help.png" id="icon_help" class="icon_help" alt="help icon">
            </span>
        </div>
    </header>
    
    <section id="section" class="section">
        <aside class="row_contents aside">
            <div id="info_slide_box" class="info_slide_box">
                <p>ID : admin <br> PW : 1234</p>
            </div>
        </aside>

        <div class="row_contents article_wrap">
            <article class="section_tit">
                <div>
                    <img src="./images/logo.png" class="logo" alt="">
                </div>
                <h1>JCloud 로그인</h1>
            </article>

            <article class="section_login_inp">
                <div class="inp_id_box">
                    <input type="text" name="id" id="inp_id" class="login_inp inp_id" onkeyup="LoginBoxStylechange(this);" placeholder="ID" maxlength="40">
                    <span>
                        <i id="inp_id_arrow_icon" class="far fa-arrow-alt-circle-right"></i>
                    </span>
                </div>
                <div id="inp_pw_box" class="inp_pw_box">
                    <input type="password" name="pw" id="inp_pw" class="login_inp inp_pw" onkeyup="LoginBoxStylechange(this);" placeholder="암호" maxlength="15">
                    <span>
                        <i id="inp_pw_arrow_icon" class="far fa-arrow-alt-circle-right"></i>
                    </span>
                </div>
            </article>

            <article class="section_etc">
                <div>
                    <a href="./join.php" class="join">
                        <i id="guestLogin" class="xi-profile-o"></i>회원가입
                    </a>
                </div>
                <div>
                    <a href="./help.php" class="lost_id_pw">ID 또는 암호를 잊으셨습니까? ↗</a>
                </div>
            </article>
        </div>
    </section>
</form>
HTML;

include './common/footer.php';

?>