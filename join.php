<?php
include './common/header.php';

echo <<<HTML
<!-- STYLE -->
<link rel="stylesheet" href="/contact/src/css/join.css" />
<!-- SCRIPT -->
<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script src="/contact/js/join.js" type="text/javascript"></script>


<form method="POST" enctype="multipart/form-data" id="frm" class="frm" onSubmit="return frm_chk();">
    <header class="header">
        <div class="row_contents">
            <a href="/contact/index.php" class="header_a">
                <i class="xi-arrow-left"></i>
            </a>
        </div>
    </header>
    
    <section class="section">
        <div class="container">
            <article class="contact_info">
                <div class="info_left">
                    <label for="id">아이디</label>
                </div>
                <div class="info_right">
                    <input type="text" name="id" data-inp-word="아이디" maxlength="20" autocomplete="off" />
                </div>
            </article>

            <article class="contact_info">
                <div class="info_left">
                    <label for="pw">비밀번호</label>
                </div>
                <div class="info_right">
                    <input type="password" name="pw" autocomplete="off" />
                </div>
            </article>

            <article class="contact_info">
                <div class="info_left">
                    <input type="file" name="add_image" id="add_image" class="hideText" />

					<label for="add_image" class="add_image">사진<br />추가</label>
                    <img src="./images/empty_image.png" id="empty_image" class="empty_image" />
                </div>
                <div class="info_right">
                    <input type="text" name="last_name" placeholder="성" autocomplete="off" />
                    <input type="text" name="first_name" placeholder="이름" autocomplete="off" />
                </div>
            </article>

            <article class="contact_info">
                <div class="info_left">
                    <label for="phone_number">휴대전화</label>
                </div>
                <div class="info_right">
                    <input type="text" name="phone_number" placeholder="'-'를 제외하고 입력해주세요" autocomplete="off" />
                </div>
            </article>

            <article class="contact_info">
                <div class="info_left">
                    <label for="address1">주소</label>
                </div>
                <div class="info_right">
                    <input type="text" name="address1" id="address1" placeholder="주소" redonly />
                    <input type="text" name="address2" id="address2" placeholder="상세주소" autocomplete="off" />
                </div>
            </article>

            <article class="contact_info">
                <div class="info_left">
                    <label for="email">이메일</label>
                </div>
                <div class="info_right">
                    <input type="text" name="email" id="email" autocomplete="off" />
                </div>
            </article>

            <article class="contact_info">
                <div class="info_left">
                    <label for="memo">메모</label>
                </div>
                <div class="info_right">
                    <textarea name="memo" id="memo" cols="30" rows="5"></textarea>
                </div>
            </article>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <button type="submit" class="btn_join">가입하기</button>
        </div>
    </footer>
</form>
HTML;

include './common/footer.php';
?>