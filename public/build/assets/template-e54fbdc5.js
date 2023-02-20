$(document).ready(function(){var g={sm:540,md:720,lg:960,xl:1140},u=$(".navbar-main .collapse");if(u.on("hide.bs.collapse",function(){var t=$(this);t.addClass("collapsing-out"),$("html, body").css("overflow","initial")}),u.on("hidden.bs.collapse",function(){var t=$(this);t.removeClass("collapsing-out")}),u.on("shown.bs.collapse",function(){$("html, body").css("overflow","hidden")}),$(".navbar-main .dropdown").on("hide.bs.dropdown",function(){var t=$(this).find(".dropdown-menu");t.addClass("close"),setTimeout(function(){t.removeClass("close")},200)}),$(document).on("click",".mega-dropdown",function(t){t.stopPropagation()}),$(document).on("click",".navbar-nav > .dropdown",function(t){t.stopPropagation()}),$(".dropdown-submenu > .dropdown-toggle").click(function(t){t.preventDefault(),$(this).parent(".dropdown-submenu").toggleClass("show")}),$(".headroom")[0]){var p=new Headroom(document.querySelector("#navbar-main"),{offset:0,tolerance:{up:0,down:0}});p.init()}if($("[data-background]").each(function(){$(this).css("background-image","url("+$(this).attr("data-background")+")")}),$("[data-background-color]").each(function(){$(this).css("background-color",$(this).attr("data-background-color"))}),$("[data-color]").each(function(){$(this).css("color",$(this).attr("data-color"))}),$('[data-toggle="tooltip"]').tooltip(),$('[data-toggle="popover"]').each(function(){var t="";$(this).data("color")&&(t="popover-"+$(this).data("color")),$(this).popover({trigger:"focus",template:'<div class="popover '+t+'" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'})}),$(".form-control").on("focus blur",function(t){$(this).parents(".form-group").toggleClass("focused",t.type==="focus"||this.value.length>0)}).trigger("blur"),$(".input-slider-container")[0]&&$(".input-slider-container").each(function(){var t=$(this).find(".input-slider"),e=t.attr("id"),a=t.data("range-value-min"),r=t.data("range-value-max"),l=$(this).find(".range-slider-value"),o=l.attr("id"),h=l.data("range-value-low"),v=document.getElementById(e);document.getElementById(o),noUiSlider.create(v,{start:[parseInt(h)],connect:[!0,!1],range:{min:[parseInt(a)],max:[parseInt(r)]}})}),$("#input-slider-range")[0]){var n=document.getElementById("input-slider-range"),i=document.getElementById("input-slider-range-value-low"),s=document.getElementById("input-slider-range-value-high"),d=[i,s];noUiSlider.create(n,{start:[parseInt(i.getAttribute("data-range-value-low")),parseInt(s.getAttribute("data-range-value-high"))],connect:!0,tooltips:!0,range:{min:parseInt(n.getAttribute("data-range-value-min")),max:parseInt(n.getAttribute("data-range-value-max"))}}),n.noUiSlider.on("update",function(t,e){d[e].textContent=t[e]})}if($("#input-slider-vertical-1")[0]){var n=document.getElementById("input-slider-vertical-1"),i=document.getElementById("input-slider-range-value-low-3"),s=document.getElementById("input-slider-range-value-high-3"),d=[i,s];noUiSlider.create(n,{start:[parseInt(i.getAttribute("data-range-value-low")),parseInt(s.getAttribute("data-range-value-high"))],connect:!0,tooltips:!1,orientation:"vertical",range:{min:parseInt(n.getAttribute("data-range-value-min")),max:parseInt(n.getAttribute("data-range-value-max"))}}),n.noUiSlider.on("update",function(l,o){d[o].textContent=l[o]})}if($("#input-slider-vertical-2")[0]){var n=document.getElementById("input-slider-vertical-2"),i=document.getElementById("input-slider-range-value-low"),s=document.getElementById("input-slider-range-value-high"),d=[i,s];noUiSlider.create(n,{start:[parseInt(i.getAttribute("data-range-value-low")),parseInt(s.getAttribute("data-range-value-high"))],connect:!0,tooltips:!0,orientation:"vertical",range:{min:parseInt(n.getAttribute("data-range-value-min")),max:parseInt(n.getAttribute("data-range-value-max"))}}),n.noUiSlider.on("update",function(l,o){d[o].textContent=l[o]})}if($(".progress-bar").each(function(){$(this).waypoint(function(){var t=$(".progress-bar");t.each(function(e){$(this).css("width",$(this).attr("aria-valuenow")+"%")}),$(".progress-bar").css({animation:"animate-positive 3s",opacity:"1"})},{triggerOnce:!0,offset:"60%"})}),$('[data-toggle="on-screen"]')[0]&&$('[data-toggle="on-screen"]').onScreen({container:window,direction:"vertical",doIn:function(){},doOut:function(){},tolerance:200,throttle:50,toggleClass:"on-screen",debug:!1}),$('[data-toggle="scroll"]').on("click",function(t){var e=$(this).attr("href"),a=$(this).data("offset")?$(this).data("offset"):0;$("html, body").stop(!0,!0).animate({scrollTop:$(e).offset().top-a},600),t.preventDefault()}),$(document).on("click",".card-rotate .btn-rotate",function(){var t=$(this).closest(".rotating-card-container");t.hasClass("hover")?t.removeClass("hover"):t.addClass("hover")}),$(document).width()>=g.lg){var c={uniqueIds:[],elements:[]};$("[data-equalize-height]").each(function(){var t=$(this).attr("data-equalize-height");c.uniqueIds.includes(t)||(c.uniqueIds.push(t),c.elements.push({id:t,elements:[]}))}),$("[data-equalize-height]").each(function(){var t=$(this),e=t.attr("data-equalize-height");c.elements.map(function(a){a.id===e&&a.elements.push(t)})}),c.elements.map(function(e){var e=e.elements;if(e.length){var a=0;e.map(function(r){a=a<r.outerHeight()?r.outerHeight():a}),e.map(function(r){r.height(a)})}})}$("[data-bind-characters-target]").each(function(){var t=$($(this).attr("data-bind-characters-target")),e=parseInt($(this).attr("maxlength"));t.text(e),$(this).on("keyup change",function(a){var r=$(this).val(),l=r.length,o=e-l;t.text(o)})}),$(".copy-docs").on("click",function(){var t=$(this),e=t.parents(".nav-wrapper").siblings(".card").find(".tab-pane:last-of-type").html(),a=$("<div/>").html(e).text().trim(),r=$("<textarea>");$("body").append(r),console.log(a),r.val(a).select(),document.execCommand("copy"),r.remove(),t.text("Copied!"),t.addClass("copied"),setTimeout(function(){t.text("Copy"),t.removeClass("copied")},1e3)}),$(".current-year").text(new Date().getFullYear())});