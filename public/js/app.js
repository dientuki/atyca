/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.l = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// identity function for calling harmory imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };

/******/ 	// define getter function for harmory exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		Object.defineProperty(exports, name, {
/******/ 			configurable: false,
/******/ 			enumerable: true,
/******/ 			get: getter
/******/ 		});
/******/ 	};

/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};

/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

"use strict";
eval("var Lazyload = function Lazyload(opts) {\n    opts = {\n        css: 'afterload',\n        data: 'original'\n    };\n\n    this.opts = opts;\n    this.init();\n};\n\nLazyload.prototype.init = function init () {\n        var this$1 = this;\n\n    var elements = document.querySelectorAll('.' + this.opts.css);\n\n    for(var i = 0, l = elements.length; i < l; i++) {\n        elements[i].setAttribute('src', elements[i].dataset[this$1.opts.data]);\n        elements[i].classList.remove(this$1.opts.css);\n    }\n};\n\n/* harmony default export */ exports[\"default\"] = Lazyload;\n\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMC5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL21vZHVsZXMvTGF6eWxvYWQuanM/NmI2NyIsIndlYnBhY2s6Ly8vP2Q0MWQiXSwic291cmNlc0NvbnRlbnQiOlsiZXhwb3J0IGRlZmF1bHQgY2xhc3MgTGF6eWxvYWQge1xuICAgIGNvbnN0cnVjdG9yKG9wdHMpIHtcbiAgICAgICAgb3B0cyA9IHtcbiAgICAgICAgICAgIGNzczogJ2FmdGVybG9hZCcsXG4gICAgICAgICAgICBkYXRhOiAnb3JpZ2luYWwnXG4gICAgICAgIH07XG5cbiAgICAgICAgdGhpcy5vcHRzID0gb3B0cztcbiAgICAgICAgdGhpcy5pbml0KCk7XG4gICAgfVxuXG4gICAgaW5pdCgpIHtcbiAgICAgICAgbGV0IGVsZW1lbnRzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLicgKyB0aGlzLm9wdHMuY3NzKTtcblxuICAgICAgICBmb3IodmFyIGkgPSAwLCBsID0gZWxlbWVudHMubGVuZ3RoOyBpIDwgbDsgaSsrKSB7XG4gICAgICAgICAgICBlbGVtZW50c1tpXS5zZXRBdHRyaWJ1dGUoJ3NyYycsIGVsZW1lbnRzW2ldLmRhdGFzZXRbdGhpcy5vcHRzLmRhdGFdKTtcbiAgICAgICAgICAgIGVsZW1lbnRzW2ldLmNsYXNzTGlzdC5yZW1vdmUodGhpcy5vcHRzLmNzcyk7XG4gICAgICAgIH1cbiAgICB9XG59XG5cblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyByZXNvdXJjZXMvYXNzZXRzL2pzL21vZHVsZXMvTGF6eWxvYWQuanMiLCJ1bmRlZmluZWRcblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUNDQTtBQUNBO0FBQ0E7QUFDQTtBQUFBO0FBQ0E7Iiwic291cmNlUm9vdCI6IiJ9");

/***/ },
/* 1 */
/***/ function(module, exports, __webpack_require__) {

"use strict";
eval("var Navigation = function Navigation(opts) {\n    opts = {\n        open: '#main-icon .burger-icon',\n        close: '#main-icon .close-icon',\n        css: 'is-menu-opened'\n    };\n\n    this.opts = opts;\n    this.init();\n};\n\nNavigation.prototype.init = function init () {\n        var this$1 = this;\n\n\n    this.el = {\n        open: document.querySelector(this.opts.open),\n        close: document.querySelector(this.opts.close),\n    };\n\n    setTimeout(function () {\n        this$1.el.open.addEventListener('click', function () {\n            this$1.onClick();\n        });\n        this$1.el.close.addEventListener('click', function () {\n            this$1.onClick();\n        });\n    }, 100);\n};\n\nNavigation.prototype.onClick = function onClick () {\n    document.body.classList.toggle(this.opts.css);\n};\n\n/* harmony default export */ exports[\"default\"] = Navigation;\n\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMS5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL21vZHVsZXMvTmF2aWdhdGlvbi5qcz9jZDYxIl0sInNvdXJjZXNDb250ZW50IjpbImV4cG9ydCBkZWZhdWx0IGNsYXNzIE5hdmlnYXRpb24ge1xuICAgIGNvbnN0cnVjdG9yKG9wdHMpIHtcbiAgICAgICAgb3B0cyA9IHtcbiAgICAgICAgICAgIG9wZW46ICcjbWFpbi1pY29uIC5idXJnZXItaWNvbicsXG4gICAgICAgICAgICBjbG9zZTogJyNtYWluLWljb24gLmNsb3NlLWljb24nLFxuICAgICAgICAgICAgY3NzOiAnaXMtbWVudS1vcGVuZWQnXG4gICAgICAgIH07XG5cbiAgICAgICAgdGhpcy5vcHRzID0gb3B0cztcbiAgICAgICAgdGhpcy5pbml0KCk7XG4gICAgfVxuXG4gICAgaW5pdCgpIHtcblxuICAgICAgICB0aGlzLmVsID0ge1xuICAgICAgICAgICAgb3BlbjogZG9jdW1lbnQucXVlcnlTZWxlY3Rvcih0aGlzLm9wdHMub3BlbiksXG4gICAgICAgICAgICBjbG9zZTogZG9jdW1lbnQucXVlcnlTZWxlY3Rvcih0aGlzLm9wdHMuY2xvc2UpLFxuICAgICAgICB9O1xuXG4gICAgICAgIHNldFRpbWVvdXQoKCkgPT4ge1xuICAgICAgICAgICAgdGhpcy5lbC5vcGVuLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4ge1xuICAgICAgICAgICAgICAgIHRoaXMub25DbGljaygpO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB0aGlzLmVsLmNsb3NlLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4ge1xuICAgICAgICAgICAgICAgIHRoaXMub25DbGljaygpO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0sIDEwMCk7XG4gICAgfVxuXG4gICAgb25DbGljaygpIHtcbiAgICAgICAgZG9jdW1lbnQuYm9keS5jbGFzc0xpc3QudG9nZ2xlKHRoaXMub3B0cy5jc3MpO1xuICAgIH1cbn1cblxuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIHJlc291cmNlcy9hc3NldHMvanMvbW9kdWxlcy9OYXZpZ2F0aW9uLmpzIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQUE7QUFDQTsiLCJzb3VyY2VSb290IjoiIn0=");

/***/ },
/* 2 */
/***/ function(module, exports, __webpack_require__) {

"use strict";
eval("/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__modules_Lazyload__ = __webpack_require__(0);\n/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__modules_Navigation__ = __webpack_require__(1);\n\n\n\nnew __WEBPACK_IMPORTED_MODULE_0__modules_Lazyload__[\"default\"]();\nnew __WEBPACK_IMPORTED_MODULE_1__modules_Navigation__[\"default\"]();\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMi5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL2FwcC5qcz84YjY3Il0sInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBMYXp5bG9hZCBmcm9tIFwiLi9tb2R1bGVzL0xhenlsb2FkXCI7XG5pbXBvcnQgTmF2aWdhdGlvbiBmcm9tIFwiLi9tb2R1bGVzL05hdmlnYXRpb25cIjtcblxubmV3IExhenlsb2FkKCk7XG5uZXcgTmF2aWdhdGlvbigpO1xuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIHJlc291cmNlcy9hc3NldHMvanMvYXBwLmpzIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTsiLCJzb3VyY2VSb290IjoiIn0=");

/***/ },
/* 3 */
/***/ function(module, exports, __webpack_require__) {

__webpack_require__(0);
__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }
/******/ ]);