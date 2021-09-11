window.onload = () => {
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
}       

// change styleLogin box function
const LoginBoxStylechange = (This) => {
    const inp_pw_box = document.getElementById("inp_pw_box");
    const arrow_icon = document.getElementById(`${This.id}_arrow_icon`);

    if(This.value.length) {
        arrow_icon.classList.add('arrow_active');
    }
    else {
        arrow_icon.classList.remove('arrow_active');
    }

    if(This.classList.contains('inp_id')) {
        if(This.value.length) {
            inp_pw_box.classList.add('inp_active');
        }
        else {
            inp_pw_box.classList.remove('inp_active');
        }
    } 
}