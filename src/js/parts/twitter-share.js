var TwitterShare = {

    init: function () {

        this.attachTwitterButton();

    },


    attachTwitterButton: function () {
        var twitterBtn = document.querySelector('.twitter-share');

        if (!twitterBtn)
            return;

        var text = encodeURIComponent(twitterBtn.dataset.tweet);
        var shareUrl = 'https://twitter.com/intent/tweet?url=' + location.href + '&text=' + text;
        twitterBtn.href = shareUrl;

        twitterBtn.addEventListener('click', (e) => {
            e.preventDefault();
            var win = window.open(shareUrl, 'ShareOnTwitter', this.getWindowOptions());
            win.opener = null; // 2
        })
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


export default TwitterShare;
