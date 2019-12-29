// https://www.reddit.com/submit?url=&title=

// https://forum.webflow.com/t/dynamic-share-buttons-for-different-social-media/30991


var RedditShare = {

    init: function () {
        this.attachTwitterButton();
    },


    attachTwitterButton: function () {
        var redditBtn = document.querySelector('.reddit-share');

        if (!redditBtn)
            return;

        var text = encodeURIComponent(redditBtn.dataset.post);
        var shareUrl = 'https://www.reddit.com/submit?url=' + location.href + '&title=' + text;
        redditBtn.href = shareUrl;

        redditBtn.addEventListener('click', (e) => {
            e.preventDefault();
            var win = window.open(shareUrl, 'ShareOnReddit', this.getWindowOptions());
            win.opener = null; // 2
        })
    },


    getWindowOptions: function () {
        var width = 700;
        var height = 600;
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


export default RedditShare;
