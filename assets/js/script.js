const navbar = document.querySelector('.navbar');



document.addEventListener('DOMContentLoaded', () => {

    $('.page-scroll').on('click', function (e) {

        var tujuan = $(this).attr('href');

        var elemenTujuan = $(tujuan);

        $('html , body').animate({
            scrollTop: elemenTujuan.offset().top - 50
        }, 1300, 'easeInOutExpo');

        e.preventDefault();
    });

    window.addEventListener('scroll', () => {
        const height = document.documentElement.scrollTop
        if (height > 120) {
            navbar.classList.remove('py-3')
            navbar.classList.add('shrink_nav')
        } else {
            navbar.classList.add('py-3')
        }

        const wScroll = document.documentElement.scrollTop
        const caraKerja = document.getElementById("caraKerja")
        const titleCaraKerja = document.querySelector('.title_cara_kerja')
        const cardCaraKerja = document.querySelectorAll('.card_cara_kerja')
        if (wScroll > caraKerja.offsetTop - 300) {
            setTimeout(() => {
                titleCaraKerja.classList.replace('hidden_top_el', 'visible_top_el')
            }, 500);
        }
        if (wScroll > caraKerja.offsetTop - 200) {
            setTimeout(() => {
                cardCaraKerja.forEach((i, key) => {
                    setInterval(() => {
                        cardCaraKerja[key].classList.replace('hidden_card', 'visible_card')
                    }, 500 * (key + 1));
                })
            }, 400);
        }
        const kualitas = document.getElementById('kualitas')
        const titleKualitas = document.querySelector('.title_kualitas')
        const cardPaket = document.querySelectorAll('.card_paket')
        if (wScroll > kualitas.offsetTop - 300) {
            setTimeout(() => {
                titleKualitas.classList.replace('hidden_top_el', 'visible_top_el')
            }, 500);
        }
        if (wScroll > kualitas.offsetTop - 200) {
            setTimeout(() => {
                cardPaket.forEach((i, key) => {
                    setInterval(() => {
                        cardPaket[key].classList.replace('hidden_card', 'visible_card')
                    }, 500 * (key + 1));
                })
            }, 500);
        }

        const tentang = document.getElementById('tentang')
        const titleTentang = document.querySelector('.title_tentang')
        const cardTentang = document.querySelector('.card_tentang')
        if (wScroll > tentang.offsetTop - 300) {
            setTimeout(() => {
                titleTentang.classList.replace('hidden_top_el', 'visible_top_el')
            }, 500);
            setTimeout(() => {
                cardTentang.classList.replace('hidden_card', 'visible_card')
            }, 1500);
        }

    })


    setTimeout(() => {
        document.querySelector('.hero_intro').classList.remove('hidden_top')
        document.querySelector('.hero_intro').classList.add('visible_top')
    }, 1500);
})