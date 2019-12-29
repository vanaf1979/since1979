import SwLoader from './parts/swloader';
import LazyLoading from './parts/lazyloading';
import AnchorScroll from './parts/anchor-scroll';
import TwitterShare from './parts/twitter-share';
import RedditShare from './parts/reddit-share';
import FacebookShare from './parts/facebook-share';
import MobileNav from './parts/mobile-nav';


window.$ = jQuery;


$(document).ready(function () {
    LazyLoading.init();
    SwLoader.init();
    AnchorScroll.init();
    TwitterShare.init();
    RedditShare.init();
    FacebookShare.init();
    MobileNav.init();
});