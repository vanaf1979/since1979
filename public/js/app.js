/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/vanilla-lazyload/dist/lazyload.min.js":
/*!************************************************************!*\
  !*** ./node_modules/vanilla-lazyload/dist/lazyload.min.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;function _extends(){return(_extends=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(t[o]=n[o])}return t}).apply(this,arguments)}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}!function(t,e){"object"===( false?undefined:_typeof(exports))&&"undefined"!=typeof module?module.exports=e(): true?!(__WEBPACK_AMD_DEFINE_FACTORY__ = (e),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
				__WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)):undefined}(this,function(){"use strict";var t="undefined"!=typeof window,e=t&&!("onscroll"in window)||"undefined"!=typeof navigator&&/(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent),n=t&&"IntersectionObserver"in window,o=t&&"classList"in document.createElement("p"),r={elements_selector:"img",container:e||t?document:null,threshold:300,thresholds:null,data_src:"src",data_srcset:"srcset",data_sizes:"sizes",data_bg:"bg",class_loading:"loading",class_loaded:"loaded",class_error:"error",load_delay:0,auto_unobserve:!0,callback_enter:null,callback_exit:null,callback_reveal:null,callback_loaded:null,callback_error:null,callback_finish:null,use_native:!1},a=function(t,e){var n,o=new t(e);try{n=new CustomEvent("LazyLoad::Initialized",{detail:{instance:o}})}catch(t){(n=document.createEvent("CustomEvent")).initCustomEvent("LazyLoad::Initialized",!1,!1,{instance:o})}window.dispatchEvent(n)};var i=function(t,e){return t.getAttribute("data-"+e)},s=function(t,e,n){var o="data-"+e;null!==n?t.setAttribute(o,n):t.removeAttribute(o)},c=function(t){return"true"===i(t,"was-processed")},l=function(t,e){return s(t,"ll-timeout",e)},u=function(t){return i(t,"ll-timeout")},d=function(t,e){t&&t(e)},f=function(t,e){t._loadingCount+=e,0===t._elements.length&&0===t._loadingCount&&d(t._settings.callback_finish)},_=function(t){for(var e,n=[],o=0;e=t.children[o];o+=1)"SOURCE"===e.tagName&&n.push(e);return n},v=function(t,e,n){n&&t.setAttribute(e,n)},g=function(t,e){v(t,"sizes",i(t,e.data_sizes)),v(t,"srcset",i(t,e.data_srcset)),v(t,"src",i(t,e.data_src))},m={IMG:function(t,e){var n=t.parentNode;n&&"PICTURE"===n.tagName&&_(n).forEach(function(t){g(t,e)});g(t,e)},IFRAME:function(t,e){v(t,"src",i(t,e.data_src))},VIDEO:function(t,e){_(t).forEach(function(t){v(t,"src",i(t,e.data_src))}),v(t,"src",i(t,e.data_src)),t.load()}},b=function(t,e){var n,o,r=e._settings,a=t.tagName,s=m[a];if(s)return s(t,r),f(e,1),void(e._elements=(n=e._elements,o=t,n.filter(function(t){return t!==o})));!function(t,e){var n=i(t,e.data_src),o=i(t,e.data_bg);n&&(t.style.backgroundImage='url("'.concat(n,'")')),o&&(t.style.backgroundImage=o)}(t,r)},h=function(t,e){o?t.classList.add(e):t.className+=(t.className?" ":"")+e},p=function(t,e,n){t.addEventListener(e,n)},y=function(t,e,n){t.removeEventListener(e,n)},E=function(t,e,n){y(t,"load",e),y(t,"loadeddata",e),y(t,"error",n)},w=function(t,e,n){var r=n._settings,a=e?r.class_loaded:r.class_error,i=e?r.callback_loaded:r.callback_error,s=t.target;!function(t,e){o?t.classList.remove(e):t.className=t.className.replace(new RegExp("(^|\\s+)"+e+"(\\s+|$)")," ").replace(/^\s+/,"").replace(/\s+$/,"")}(s,r.class_loading),h(s,a),d(i,s),f(n,-1)},I=function(t,e){var n=function n(r){w(r,!0,e),E(t,n,o)},o=function o(r){w(r,!1,e),E(t,n,o)};!function(t,e,n){p(t,"load",e),p(t,"loadeddata",e),p(t,"error",n)}(t,n,o)},k=["IMG","IFRAME","VIDEO"],A=function(t,e){var n=e._observer;z(t,e),n&&e._settings.auto_unobserve&&n.unobserve(t)},L=function(t){var e=u(t);e&&(clearTimeout(e),l(t,null))},x=function(t,e){var n=e._settings.load_delay,o=u(t);o||(o=setTimeout(function(){A(t,e),L(t)},n),l(t,o))},z=function(t,e,n){var o=e._settings;!n&&c(t)||(k.indexOf(t.tagName)>-1&&(I(t,e),h(t,o.class_loading)),b(t,e),function(t){s(t,"was-processed","true")}(t),d(o.callback_reveal,t),d(o.callback_set,t))},O=function(t){return!!n&&(t._observer=new IntersectionObserver(function(e){e.forEach(function(e){return function(t){return t.isIntersecting||t.intersectionRatio>0}(e)?function(t,e){var n=e._settings;d(n.callback_enter,t),n.load_delay?x(t,e):A(t,e)}(e.target,t):function(t,e){var n=e._settings;d(n.callback_exit,t),n.load_delay&&L(t)}(e.target,t)})},{root:(e=t._settings).container===document?null:e.container,rootMargin:e.thresholds||e.threshold+"px"}),!0);var e},N=["IMG","IFRAME"],C=function(t,e){return function(t){return t.filter(function(t){return!c(t)})}((n=t||function(t){return t.container.querySelectorAll(t.elements_selector)}(e),Array.prototype.slice.call(n)));var n},M=function(t,e){this._settings=function(t){return _extends({},r,t)}(t),this._loadingCount=0,O(this),this.update(e)};return M.prototype={update:function(t){var n,o=this,r=this._settings;(this._elements=C(t,r),!e&&this._observer)?(function(t){return t.use_native&&"loading"in HTMLImageElement.prototype}(r)&&((n=this)._elements.forEach(function(t){-1!==N.indexOf(t.tagName)&&(t.setAttribute("loading","lazy"),z(t,n))}),this._elements=C(t,r)),this._elements.forEach(function(t){o._observer.observe(t)})):this.loadAll()},destroy:function(){var t=this;this._observer&&(this._elements.forEach(function(e){t._observer.unobserve(e)}),this._observer=null),this._elements=null,this._settings=null},load:function(t,e){z(t,this,e)},loadAll:function(){var t=this;this._elements.forEach(function(e){A(e,t)})}},t&&function(t,e){if(e)if(e.length)for(var n,o=0;n=e[o];o+=1)a(t,n);else a(t,e)}(M,window.lazyLoadOptions),M});
//# sourceMappingURL=lazyload.min.js.map


/***/ }),

/***/ "./src/js/app.js":
/*!***********************!*\
  !*** ./src/js/app.js ***!
  \***********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _parts_swloader__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./parts/swloader */ "./src/js/parts/swloader.js");
/* harmony import */ var _parts_lazyloading__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./parts/lazyloading */ "./src/js/parts/lazyloading.js");
/* harmony import */ var _parts_anchor_scroll__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./parts/anchor-scroll */ "./src/js/parts/anchor-scroll.js");
/* harmony import */ var _parts_twitter_share__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./parts/twitter-share */ "./src/js/parts/twitter-share.js");
/* harmony import */ var _parts_reddit_share__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./parts/reddit-share */ "./src/js/parts/reddit-share.js");
/* harmony import */ var _parts_facebook_share__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./parts/facebook-share */ "./src/js/parts/facebook-share.js");
/* harmony import */ var _parts_mobile_nav__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./parts/mobile-nav */ "./src/js/parts/mobile-nav.js");







window.$ = jQuery;
$(document).ready(function () {
  _parts_lazyloading__WEBPACK_IMPORTED_MODULE_1__["default"].init();
  _parts_swloader__WEBPACK_IMPORTED_MODULE_0__["default"].init();
  _parts_anchor_scroll__WEBPACK_IMPORTED_MODULE_2__["default"].init();
  _parts_twitter_share__WEBPACK_IMPORTED_MODULE_3__["default"].init();
  _parts_reddit_share__WEBPACK_IMPORTED_MODULE_4__["default"].init();
  _parts_facebook_share__WEBPACK_IMPORTED_MODULE_5__["default"].init();
  _parts_mobile_nav__WEBPACK_IMPORTED_MODULE_6__["default"].init();
});

/***/ }),

/***/ "./src/js/parts/anchor-scroll.js":
/*!***************************************!*\
  !*** ./src/js/parts/anchor-scroll.js ***!
  \***************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var AnchorScroll = {
  init: function init() {
    this.scrollToAnhors();
  },
  scrollToAnhors: function scrollToAnhors() {// document.querySelectorAll('a[href^="#"]').forEach(anchor => {
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
};
/* harmony default export */ __webpack_exports__["default"] = (AnchorScroll);

/***/ }),

/***/ "./src/js/parts/facebook-share.js":
/*!****************************************!*\
  !*** ./src/js/parts/facebook-share.js ***!
  \****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var FacebookShare = {
  init: function init() {
    this.attachTwitterButton();
  },
  attachTwitterButton: function attachTwitterButton() {
    var _this = this;

    var facebookButton = document.querySelector('.facebook-share');
    if (!facebookButton) return;
    var shareUrl = window.location.href;
    facebookButton.href = shareUrl;
    facebookButton.addEventListener('click', function (e) {
      e.preventDefault();
      var win = window.open('https://www.facebook.com/sharer/sharer.php?u=' + shareUrl, 'ShareOnFacebook', _this.getWindowOptions());
      win.opener = null;
    });
  },
  getWindowOptions: function getWindowOptions() {
    var width = 500;
    var height = 350;
    var left = window.innerWidth / 2 - width / 2;
    var top = window.innerHeight / 2 - height / 2;
    return ['resizable,scrollbars,status', 'height=' + height, 'width=' + width, 'left=' + left, 'top=' + top].join();
  }
};
/* harmony default export */ __webpack_exports__["default"] = (FacebookShare);

/***/ }),

/***/ "./src/js/parts/lazyloading.js":
/*!*************************************!*\
  !*** ./src/js/parts/lazyloading.js ***!
  \*************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vanilla_lazyload__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vanilla-lazyload */ "./node_modules/vanilla-lazyload/dist/lazyload.min.js");
/* harmony import */ var vanilla_lazyload__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(vanilla_lazyload__WEBPACK_IMPORTED_MODULE_0__);

var LazyLoading = {
  init: function init() {
    this.dependOnIntersectionObserver();
  },
  dependOnIntersectionObserver: function dependOnIntersectionObserver() {
    var _this = this;

    if (!('IntersectionObserver' in window) || !('IntersectionObserverEntry' in window) || !('intersectionRatio' in window.IntersectionObserverEntry.prototype)) {
      this.addScript('https://cdn.jsdelivr.net/npm/intersection-observer@0.5.1/intersection-observer.js', function () {
        _this.lazyLoadImages();
      });
    } else {
      this.lazyLoadImages();
    }
  },
  lazyLoadImages: function lazyLoadImages() {
    var lazyLoadInstance = new vanilla_lazyload__WEBPACK_IMPORTED_MODULE_0___default.a({
      elements_selector: ".lazy"
    });
  },
  addScript: function addScript() {
    var script = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
    var callback = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
    var element = document.createElement('script');
    element.type = 'text/javascript';
    element.async = true;
    element.src = script;
    parent = 'body';

    if (callback != null && typeof callback === "function") {
      element.onload = function () {
        callback();
      };
    }

    document[parent].appendChild(element);
  }
};
/* harmony default export */ __webpack_exports__["default"] = (LazyLoading);

/***/ }),

/***/ "./src/js/parts/mobile-nav.js":
/*!************************************!*\
  !*** ./src/js/parts/mobile-nav.js ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var MobileNav = {
  init: function init() {
    $("#menu").mmenu({
      extensions: ["theme-dark", "position-right"]
    });
  }
};
/* harmony default export */ __webpack_exports__["default"] = (MobileNav);

/***/ }),

/***/ "./src/js/parts/reddit-share.js":
/*!**************************************!*\
  !*** ./src/js/parts/reddit-share.js ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// https://www.reddit.com/submit?url=&title=
// https://forum.webflow.com/t/dynamic-share-buttons-for-different-social-media/30991
var RedditShare = {
  init: function init() {
    this.attachTwitterButton();
  },
  attachTwitterButton: function attachTwitterButton() {
    var _this = this;

    var redditBtn = document.querySelector('.reddit-share');
    if (!redditBtn) return;
    var text = encodeURIComponent(redditBtn.dataset.post);
    var shareUrl = 'https://www.reddit.com/submit?url=' + location.href + '&title=' + text;
    redditBtn.href = shareUrl;
    redditBtn.addEventListener('click', function (e) {
      e.preventDefault();
      var win = window.open(shareUrl, 'ShareOnReddit', _this.getWindowOptions());
      win.opener = null; // 2
    });
  },
  getWindowOptions: function getWindowOptions() {
    var width = 700;
    var height = 600;
    var left = window.innerWidth / 2 - width / 2;
    var top = window.innerHeight / 2 - height / 2;
    return ['resizable,scrollbars,status', 'height=' + height, 'width=' + width, 'left=' + left, 'top=' + top].join();
  }
};
/* harmony default export */ __webpack_exports__["default"] = (RedditShare);

/***/ }),

/***/ "./src/js/parts/swloader.js":
/*!**********************************!*\
  !*** ./src/js/parts/swloader.js ***!
  \**********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var SwLoaders = {
  init: function init() {
    // Register Service Worker
    this.registerServiceworkerJs();
  },
  registerServiceworkerJs: function registerServiceworkerJs() {
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', function () {
        navigator.serviceWorker.register('/wp-content/themes/vanaf1979/public/js/sw.js');
      });
    }
  }
};
/* harmony default export */ __webpack_exports__["default"] = (SwLoaders);

/***/ }),

/***/ "./src/js/parts/twitter-share.js":
/*!***************************************!*\
  !*** ./src/js/parts/twitter-share.js ***!
  \***************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var TwitterShare = {
  init: function init() {
    this.attachTwitterButton();
  },
  attachTwitterButton: function attachTwitterButton() {
    var _this = this;

    var twitterBtn = document.querySelector('.twitter-share');
    if (!twitterBtn) return;
    var text = encodeURIComponent(twitterBtn.dataset.tweet);
    var shareUrl = 'https://twitter.com/intent/tweet?url=' + location.href + '&text=' + text;
    twitterBtn.href = shareUrl;
    twitterBtn.addEventListener('click', function (e) {
      e.preventDefault();
      var win = window.open(shareUrl, 'ShareOnTwitter', _this.getWindowOptions());
      win.opener = null; // 2
    });
  },
  getWindowOptions: function getWindowOptions() {
    var width = 500;
    var height = 350;
    var left = window.innerWidth / 2 - width / 2;
    var top = window.innerHeight / 2 - height / 2;
    return ['resizable,scrollbars,status', 'height=' + height, 'width=' + width, 'left=' + left, 'top=' + top].join();
  }
};
/* harmony default export */ __webpack_exports__["default"] = (TwitterShare);

/***/ }),

/***/ "./src/scss/app.scss":
/*!***************************!*\
  !*** ./src/scss/app.scss ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************!*\
  !*** multi ./src/js/app.js ./src/scss/app.scss ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/saskia/Documents/repos/websites/since1979/wp-content/themes/since1979/src/js/app.js */"./src/js/app.js");
module.exports = __webpack_require__(/*! /Users/saskia/Documents/repos/websites/since1979/wp-content/themes/since1979/src/scss/app.scss */"./src/scss/app.scss");


/***/ })

/******/ });