!function(e){"use strict";
e(function(){e(".search-toggle")
.on("click",function(i){i.preventDefault();
var t=e(this)
.siblings("label");
t.animate({width:"toggle"}),t.children('[type="search"]')
.focus()}),e(".search-field")
.on("blur",function(){""===e(this)
.val()&&e(".header-search label")
.animate({width:"hide"})})})}(jQuery);