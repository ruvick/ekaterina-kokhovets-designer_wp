document.addEventListener("DOMContentLoaded", () => { 
    let portfolio_sw = document.querySelectorAll('.portfolio_sw');

    for (let i =0; i< portfolio_sw.length; i++) {
        let galid = portfolio_sw[i].dataset.galid
        new Swiper(portfolio_sw[i], {
            loop: true,
            navigation: {
                nextEl: '#portfolio_sw_btn_next'+galid,
                prevEl: '#portfolio_sw_btn_prev'+galid,
            },
        })
    }
});