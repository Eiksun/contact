// ios 100vh 이슈 대응
let window_vh = window.innerHeight * 0.01;

document.documentElement.style.setProperty('--vh', `${window_vh}px`);

window.addEventListener('resize', () => {
    let window_vh = window.innerHeight * 0.01;

    document.documentElement.style.setProperty('--vh', `${window_vh}px`);
});

// 특수문자 체크 정규식
const chkSpecialCharset = (str) => {
    const chk_special_charset = /[`~!@#$%^&*|\\\'\";:\/?]/gi;

    return chk_special_charset.test(str);
}

// 휴대폰 번호 체크 정규식

// 이메일 형식 체크 정규식
const chkEmail = (str) => {
    const chk_email = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i;

    return chk_email.test(str);
}