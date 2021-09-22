window.onload = () => {
    // 아이디 검증
    // 비밀번호 검증
    // 사진 썸네일 등록
    const add_image = document.getElementById("add_image");
    const empty_image = document.getElementById("empty_image");
    
    add_image.addEventListener('change', (e) => {
        const file  = e.target.files;

        // 파일 확장자 추출
        const file_name = file[0].name;
        const file_length = file_name.length;
        const file_last_index = file_name.lastIndexOf('.');
        const file_ext = file_name.substring((file_last_index + 1), file_length);

        const ext_arr = ["jpg", "JPG", "png", "PNG", "jpeg"];

        // 파일 확장자 체크
        if(ext_arr.includes(file_ext) === false) {
            alert(`${ext_arr} 확장자만 업로드 가능합니다.`);
            return false;
        }

        // 파일 사이즈 체크
        const file_size =file[0].size;
        const max_size = 1 * 1024 * 1024;  // 1MB
      
        if(file_size > max_size) {
            alert("파일 사이즈는 1MB 이하여야 합니다.");
            return false;
        }

        // 업로드 파일 이미지 썸네일
        const add_image = document.querySelector(".add_image");

        const reader = new FileReader();  // 파일 읽기
        reader.readAsDataURL(file[0]);  // 데이터 URL로
        reader.onload = (e) => {  // onload 이벤트 핸들러
            empty_image.src = e.target.result; 
            add_image.style.color = "transparent";
            console.log(file_name);
        }
    });

    // 이미지를 바꿔주고 정보 담기
    // 성, 이름, 휴대전화 특수문자 제외 정규식

    // 주소 찾기
    const address1 = document.getElementById("address1");
    const address2 = document.getElementById("address2");

    address1.addEventListener('click', () => {
        new daum.Postcode({
            oncomplete: function(data) {
                address1.value = data.address;
                address2.focus();
            }
        }).open();
    });

}

// 가입하기 버튼 event
const frm_chk = () => {
    const frm = document.getElementById("frm");
    const id = document.getElementsByName("id")[0].value;
    const pw = document.getElementsByName("pw")[0].value;
    const last_name = document.getElementsByName("last_name")[0].value;
    const first_name = document.getElementsByName("first_name")[0].value;
    const phone_number = document.getElementsByName("phone_number")[0].value;
    const address1 = document.getElementsByName("address1")[0].value;
    const address2 = document.getElementsByName("address2")[0].value;
    const email = document.getElementsByName("email")[0].value;
    const memo = document.getElementsByName("memo")[0].value;

    // if(!id || id.length < 3) {
    //     alert("아이디를 확인해주세요.");
    //     return false;
    // }
    // else {
    //     // 특수문자 체크 정규식
    //     if(chkSpecialCharset(id)) {
    //         alert("특수문자 입력이 불가합니다.");
    //         return false;
    //     }
    // }

    // if(!pw || pw.length < 5) {
    //     alert("비밀번호를 확인해주세요.");
    //     return false;
    // }
    
    // if(!last_name) {
    //     alert("성을 확인해주세요.");
    //     return false;
    // }
    // else {
    //     // 특수문자 체크 정규식
    //     if(chkSpecialCharset(last_name)) {
    //         alert("특수문자 입력이 불가합니다.");
    //         return false;
    //     }
    // }
    
    // if(!first_name) {
    //     alert("이름을 확인해주세요.");
    //     return false;
    // }
    // else {
    //     // 특수문자 체크 정규식
    //     if(chkSpecialCharset(first_name)) {
    //         alert("특수문자 입력이 불가합니다.");
    //         return false;
    //     }
    // }

    if(email) {
        // 이메일 형식 체크 정규식
        if(!chkEmail(email)) {
            alert("이메일을 확인해주세요.");
            return false;
        }
    }

    frm.setAttribute("action", "/contact/exec_join.php");
    frm.submit();
}