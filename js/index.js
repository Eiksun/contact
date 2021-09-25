window.onload = () => {
    // login box hidden & visible
    const inp_id_arrow_icon = document.getElementById("inp_id_arrow_icon");

    inp_id_arrow_icon.addEventListener('click', () => {
        loginInputVisible();
    });

    this.addEventListener('keypress', () => {
        if(window.event.keyCode == 13) {
            loginInputVisible();
        }
    });

    // info_slide_box content toggle event
    const icon_help = document.getElementById("icon_help");
    const info_slide_box = document.getElementById("info_slide_box");
    
    icon_help.addEventListener('click', () => {
        info_slide_box.classList.toggle('show_info_slide_box');
    });

    const section = document.getElementById("section");

    section.addEventListener('click', () => {
        if(info_slide_box.classList.contains('show_info_slide_box')) {
            info_slide_box.classList.remove('show_info_slide_box');
        }
    });

    // change style login input focous & blur 
    const login_inp = document.querySelectorAll(".login_inp");

    login_inp.forEach((e) => {
        const inp_id_box = e.parentElement;

        e.onfocus = () => inp_id_box.classList.add('active_inp_box');
        e.onblur = () => inp_id_box.classList.remove('active_inp_box');
    });

    // submit
    const inp_pw_arrow_icon = document.getElementById("inp_pw_arrow_icon");
    
    inp_pw_arrow_icon.addEventListener('click', () => {
        frm_chk();
    });
}       

// change style login box function
const LoginBoxStylechange = (This) => {
    const arrow_icon = document.getElementById(`${This.id}_arrow_icon`);

    // 화살표 아이콘 active
    if(This.value.length) {
        arrow_icon.classList.add('arrow_active');
    }
    else {
        arrow_icon.classList.remove('arrow_active');
    }
}

// login box hidden & visible function
const loginInputVisible = () => {
    const inp_pw_box = document.getElementById("inp_pw_box");
    const inp_id_arrow_icon = document.getElementById("inp_id_arrow_icon");

    if(inp_id_arrow_icon.classList.contains('arrow_active')) {
        inp_id_arrow_icon.classList.add('ico_hidden');
        inp_pw_box.classList.add('inp_active');
    }
    else {
        inp_pw_box.classList.remove('inp_active');
    }
}

// submit
const frm_chk = () => {
    const inp_id_arrow_icon = document.getElementById("inp_id_arrow_icon");
    const infrmp_id_arrow_icon = document.getElementById("frm");

    if(!inp_id_arrow_icon.classList.contains('arrow_active')) {
        alert("아이디 또는 비밀번호를 확인해주세요.");

        return false;
    }
    else {
        frm.setAttribute("action", "/contact/exec_index.php");
        frm.submit();
    }
}