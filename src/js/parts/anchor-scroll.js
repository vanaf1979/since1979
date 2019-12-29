var AnchorScroll = {

    init: function () {

        this.scrollToAnhors();

    },


    scrollToAnhors: function () {

        // document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        //     anchor.addEventListener('click', function (e) {
        //         e.preventDefault();
        //
        //         if (this.getAttribute('href') != "#menu") {
        //             document.querySelector(this.getAttribute('href').replace("/", "")).scrollIntoView({
        //                 behavior: 'smooth',
        //                 block: 'start'
        //             });
        //         }
        //     });
        // });

    }

}


export default AnchorScroll;



