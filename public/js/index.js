
// var ==========================
let btn = document.querySelector('.btn');
let video = document.querySelector('.video');
let vid = document.getElementById("about_video");

let play_btn = document.querySelector("play_btn");
let ship_video = document.querySelector("ship_modal-video");

let lang_box = document.querySelector(".lang_box");
let drop_lang = document.querySelector(".drop_lang");

let burger = document.querySelector(".burger");
let navs = document.querySelector(".navs");
let navs_list = document.querySelector(".navs_list");
let lang = document.querySelector(".lang");
let navs_list_link = document.querySelectorAll(".navs_list li");


function sleep(time) {
    return new Promise((resolve) => setTimeout(resolve, time));
}


window.onscroll = function () {
    scrollPosition = Math.round(window.scrollY);

    if (scrollPosition > 100) {
        document.querySelector('.header').classList.add('stick');
    } else {
        document.querySelector('.header').classList.remove('stick');
    }
};

window.onclick = function (e) {

    // drop_lang.forEach(drop_lang => {
    //     if (drop_lang != undefined) {
    //         drop_lang.classList.contains('active') && !e.target.closest('.nav_inner');
    //         drop_lang.classList.remove('active')
    //     }
    // }
    // );



}


// Clicks ======================================================

let element = document.querySelectorAll('.navs_list-link');

if (element && element != undefined) {
    element.forEach(function (el, key) {
        el.addEventListener('click', function () {
            el.classList.toggle("active");

            element.forEach(function (ell, els) {
                if (key !== els) {
                    ell.classList.remove('active');
                }
            });
        });
    });
}

if (btn != undefined) {
    btn.addEventListener('click', function () {
        btn.classList.add('remove');
        video.classList.add('played');
        vid.play();
        vid.setAttribute("controls", "controls");

    });
}

if (burger != undefined) {
    burger.addEventListener('click', function () {
        sleep(2).then(() => {
            navs.classList.add('active');
            navs_list.classList.add('active');
        });
    });
}

if (navs_list_link != undefined && !lang) {
    navs_list_link.forEach(x => {
        x.addEventListener('click', function () {
            sleep(2).then(() => {
                navs.classList.remove('active');
                navs_list.classList.remove('active');
            });
        });
    })
}

if (lang_box != undefined) {
    lang_box.addEventListener('click', function () {
        drop_lang.classList.toggle('active');
    });
}

if (play_btn != undefined) {
    play_btn.addEventListener('click', function () {
        ship_video.autoplay = true;
        alert("asas")

    });
}





if (vid != undefined) {
    vid.addEventListener('ended', function () {
        vid.load();
        btn.classList.remove('remove');
        vid.removeAttribute("controls", "controls");
        video.classList.remove('played');
    });
}