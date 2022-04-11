/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/viewer.js":
/*!********************************!*\
  !*** ./resources/js/viewer.js ***!
  \********************************/
/***/ (() => {

eval("function registerView() {\n  $.ajaxSetup({\n    headers: {\n      'X-CSRF-TOKEN': $('meta[name=\"csrf-token\"]').attr('content')\n    }\n  });\n  var data = {\n    \"id\": articleId\n  };\n  $.post(\"/api/view\", data, function (response) {\n    $('.views .count').html(response.views);\n  });\n}\n\nfunction registerLike() {\n  $.ajaxSetup({\n    headers: {\n      'X-CSRF-TOKEN': $('meta[name=\"csrf-token\"]').attr('content')\n    }\n  });\n  var data = {\n    \"id\": articleId\n  };\n  $.post(\"/api/like\", data, function (response) {\n    $('.like .count').html(response.likes);\n  });\n}\n\nsetTimeout(registerView, 1000);\n$(function () {\n  $('.like').on('click', function () {\n    registerLike();\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvdmlld2VyLmpzPzNhZTYiXSwibmFtZXMiOlsicmVnaXN0ZXJWaWV3IiwiJCIsImFqYXhTZXR1cCIsImhlYWRlcnMiLCJhdHRyIiwiZGF0YSIsImFydGljbGVJZCIsInBvc3QiLCJyZXNwb25zZSIsImh0bWwiLCJ2aWV3cyIsInJlZ2lzdGVyTGlrZSIsImxpa2VzIiwic2V0VGltZW91dCIsIm9uIl0sIm1hcHBpbmdzIjoiQUFBQSxTQUFTQSxZQUFULEdBQXdCO0FBQ3BCQyxFQUFBQSxDQUFDLENBQUNDLFNBQUYsQ0FBWTtBQUNSQyxJQUFBQSxPQUFPLEVBQUU7QUFDTCxzQkFBZ0JGLENBQUMsQ0FBQyx5QkFBRCxDQUFELENBQTZCRyxJQUE3QixDQUFrQyxTQUFsQztBQURYO0FBREQsR0FBWjtBQUtBLE1BQUlDLElBQUksR0FBRztBQUFDLFVBQU1DO0FBQVAsR0FBWDtBQUNBTCxFQUFBQSxDQUFDLENBQUNNLElBQUYsQ0FBUSxXQUFSLEVBQXFCRixJQUFyQixFQUEyQixVQUFVRyxRQUFWLEVBQW9CO0FBQzNDUCxJQUFBQSxDQUFDLENBQUMsZUFBRCxDQUFELENBQW1CUSxJQUFuQixDQUF3QkQsUUFBUSxDQUFDRSxLQUFqQztBQUNILEdBRkQ7QUFHSDs7QUFFRCxTQUFTQyxZQUFULEdBQXdCO0FBQ3BCVixFQUFBQSxDQUFDLENBQUNDLFNBQUYsQ0FBWTtBQUNSQyxJQUFBQSxPQUFPLEVBQUU7QUFDTCxzQkFBZ0JGLENBQUMsQ0FBQyx5QkFBRCxDQUFELENBQTZCRyxJQUE3QixDQUFrQyxTQUFsQztBQURYO0FBREQsR0FBWjtBQUtBLE1BQUlDLElBQUksR0FBRztBQUFDLFVBQU1DO0FBQVAsR0FBWDtBQUNBTCxFQUFBQSxDQUFDLENBQUNNLElBQUYsQ0FBUSxXQUFSLEVBQXFCRixJQUFyQixFQUEyQixVQUFVRyxRQUFWLEVBQW9CO0FBQzNDUCxJQUFBQSxDQUFDLENBQUMsY0FBRCxDQUFELENBQWtCUSxJQUFsQixDQUF1QkQsUUFBUSxDQUFDSSxLQUFoQztBQUNILEdBRkQ7QUFHSDs7QUFFREMsVUFBVSxDQUFDYixZQUFELEVBQWUsSUFBZixDQUFWO0FBRUFDLENBQUMsQ0FBQyxZQUFZO0FBQ1ZBLEVBQUFBLENBQUMsQ0FBQyxPQUFELENBQUQsQ0FBV2EsRUFBWCxDQUFjLE9BQWQsRUFBdUIsWUFBWTtBQUMvQkgsSUFBQUEsWUFBWTtBQUNmLEdBRkQ7QUFHSCxDQUpBLENBQUQiLCJzb3VyY2VzQ29udGVudCI6WyJmdW5jdGlvbiByZWdpc3RlclZpZXcoKSB7XG4gICAgJC5hamF4U2V0dXAoe1xuICAgICAgICBoZWFkZXJzOiB7XG4gICAgICAgICAgICAnWC1DU1JGLVRPS0VOJzogJCgnbWV0YVtuYW1lPVwiY3NyZi10b2tlblwiXScpLmF0dHIoJ2NvbnRlbnQnKVxuICAgICAgICB9XG4gICAgfSk7XG4gICAgbGV0IGRhdGEgPSB7XCJpZFwiOiBhcnRpY2xlSWR9O1xuICAgICQucG9zdCggXCIvYXBpL3ZpZXdcIiwgZGF0YSwgZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICQoJy52aWV3cyAuY291bnQnKS5odG1sKHJlc3BvbnNlLnZpZXdzKTtcbiAgICB9KTtcbn1cblxuZnVuY3Rpb24gcmVnaXN0ZXJMaWtlKCkge1xuICAgICQuYWpheFNldHVwKHtcbiAgICAgICAgaGVhZGVyczoge1xuICAgICAgICAgICAgJ1gtQ1NSRi1UT0tFTic6ICQoJ21ldGFbbmFtZT1cImNzcmYtdG9rZW5cIl0nKS5hdHRyKCdjb250ZW50JylcbiAgICAgICAgfVxuICAgIH0pO1xuICAgIGxldCBkYXRhID0ge1wiaWRcIjogYXJ0aWNsZUlkfTtcbiAgICAkLnBvc3QoIFwiL2FwaS9saWtlXCIsIGRhdGEsIGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAkKCcubGlrZSAuY291bnQnKS5odG1sKHJlc3BvbnNlLmxpa2VzKTtcbiAgICB9KTtcbn1cblxuc2V0VGltZW91dChyZWdpc3RlclZpZXcsIDEwMDApO1xuXG4kKGZ1bmN0aW9uICgpIHtcbiAgICAkKCcubGlrZScpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgcmVnaXN0ZXJMaWtlKCk7XG4gICAgfSlcbn0pXG4iXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3ZpZXdlci5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/viewer.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/viewer.js"]();
/******/ 	
/******/ })()
;