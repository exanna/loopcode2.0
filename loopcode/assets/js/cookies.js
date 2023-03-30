if (localStorage.getItem("cookiesAccepted") === null) {
    setTimeout(function () {
        let cookies = document.querySelector('#cookies');
        cookies.classList.remove('d-none');
    }, 3000);
}

let cookiesBtn = document.querySelector('.js-cookies');
let cookiesBtnNope = document.querySelector('.js-cookies-nope');

cookiesBtn.addEventListener('click', () => {
    let cookies = document.querySelector('#cookies');
    cookies.classList.add('d-none');
    localStorage.setItem("cookiesAccepted", true);
})

cookiesBtnNope.addEventListener('click', () => {
    let cookies = document.querySelector('#cookies');
    cookies.classList.add('d-none');
})

