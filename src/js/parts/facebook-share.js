var FacebookShare = {

    init: function () {
        this.attachTwitterButton();
    },


    attachTwitterButton: function () {
        var facebookButton = document.querySelector('.facebook-share');

        if (!facebookButton)
            return;

        var shareUrl = window.location.href;
        facebookButton.href = shareUrl;

        facebookButton.addEventListener('click', (e) => {
            e.preventDefault();
            var win = window.open('https://www.facebook.com/sharer/sharer.php?u=' + shareUrl, 'ShareOnFacebook', this.getWindowOptions());
            win.opener = null;
        });
    },


    getWindowOptions: function () {
        var width = 500;
        var height = 350;
        var left = (window.innerWidth / 2) - (width / 2);
        var top = (window.innerHeight / 2) - (height / 2);

        return [
            'resizable,scrollbars,status',
            'height=' + height,
            'width=' + width,
            'left=' + left,
            'top=' + top,
        ].join();
    }

}


export default FacebookShare;
