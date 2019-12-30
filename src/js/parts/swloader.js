var SwLoaders = {

    init: function () {
        // Register Service Worker
        this.registerServiceworkerJs();
    },


    registerServiceworkerJs: function () {
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/wp-content/themes/since1979/public/js/sw.js');
            });
        }
    },

}


export default SwLoaders;