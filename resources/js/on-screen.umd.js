!(function (global, factory) {
    "object" == typeof exports && "undefined" != typeof module
        ? (module.exports = factory())
        : "function" == typeof define && define.amd
        ? define(factory)
        : (global.OnScreen = factory());
})(this, function () {
    "use strict";
    function attach() {
        var container = this.options.container;
        if (container instanceof HTMLElement) {
            var style = window.getComputedStyle(container);
            "static" === style.position &&
                (container.style.position = "relative");
        }
        container.addEventListener("scroll", this._scroll, { passive: !0 }),
            window.addEventListener("resize", this._scroll, { passive: !0 }),
            this._scroll(),
            (this.attached = !0);
    }
    function inViewport(el) {
        var options =
            arguments.length > 1 && void 0 !== arguments[1]
                ? arguments[1]
                : { tolerance: 0 };
        if (!el)
            throw new Error("You should specify the element you want to test");
        "string" == typeof el && (el = document.querySelector(el));
        var elRect = el.getBoundingClientRect();
        return (
            elRect.bottom - options.tolerance > 0 &&
            elRect.right - options.tolerance > 0 &&
            elRect.left + options.tolerance <
                (window.innerWidth || document.documentElement.clientWidth) &&
            elRect.top + options.tolerance <
                (window.innerHeight || document.documentElement.clientHeight)
        );
    }
    function inContainer(el) {
        var options =
            arguments.length > 1 && void 0 !== arguments[1]
                ? arguments[1]
                : { tolerance: 0, container: "" };
        if (!el)
            throw new Error("You should specify the element you want to test");
        if (
            ("string" == typeof el && (el = document.querySelector(el)),
            "string" == typeof options &&
                (options = {
                    tolerance: 0,
                    container: document.querySelector(options),
                }),
            "string" == typeof options.container &&
                (options.container = document.querySelector(options.container)),
            options instanceof HTMLElement &&
                (options = { tolerance: 0, container: options }),
            !options.container)
        )
            throw new Error("You should specify a container element");
        var containerRect = options.container.getBoundingClientRect();
        return (
            el.offsetTop + el.clientHeight - options.tolerance >
                options.container.scrollTop &&
            el.offsetLeft + el.clientWidth - options.tolerance >
                options.container.scrollLeft &&
            el.offsetLeft + options.tolerance <
                containerRect.width + options.container.scrollLeft &&
            el.offsetTop + options.tolerance <
                containerRect.height + options.container.scrollTop
        );
    }
    function eventHandler() {
        var trackedElements =
                arguments.length > 0 && void 0 !== arguments[0]
                    ? arguments[0]
                    : {},
            options =
                arguments.length > 1 && void 0 !== arguments[1]
                    ? arguments[1]
                    : { tolerance: 0 },
            selectors = Object.keys(trackedElements),
            testVisibility = void 0;
        selectors.length &&
            ((testVisibility =
                options.container === window ? inViewport : inContainer),
            selectors.forEach(function (selector) {
                trackedElements[selector].nodes.forEach(function (item) {
                    if (
                        (testVisibility(item.node, options)
                            ? ((item.wasVisible = item.isVisible),
                              (item.isVisible = !0))
                            : ((item.wasVisible = item.isVisible),
                              (item.isVisible = !1)),
                        item.isVisible === !0 && item.wasVisible === !1)
                    ) {
                        if (!trackedElements[selector].enter) return;
                        Object.keys(trackedElements[selector].enter).forEach(
                            function (callback) {
                                "function" ==
                                    typeof trackedElements[selector].enter[
                                        callback
                                    ] &&
                                    trackedElements[selector].enter[callback](
                                        item.node,
                                        "enter"
                                    );
                            }
                        );
                    }
                    if (item.isVisible === !1 && item.wasVisible === !0) {
                        if (!trackedElements[selector].leave) return;
                        Object.keys(trackedElements[selector].leave).forEach(
                            function (callback) {
                                "function" ==
                                    typeof trackedElements[selector].leave[
                                        callback
                                    ] &&
                                    trackedElements[selector].leave[callback](
                                        item.node,
                                        "leave"
                                    );
                            }
                        );
                    }
                });
            }));
    }
    function debouncedScroll() {
        var _this = this,
            timeout = void 0;
        return function () {
            clearTimeout(timeout),
                (timeout = setTimeout(function () {
                    eventHandler(_this.trackedElements, _this.options);
                }, _this.options.debounce));
        };
    }
    function destroy() {
        this.options.container.removeEventListener("scroll", this._scroll),
            window.removeEventListener("resize", this._scroll),
            (this.attached = !1);
    }
    function off(event, selector, handler) {
        var enterCallbacks = Object.keys(
                this.trackedElements[selector].enter || {}
            ),
            leaveCallbacks = Object.keys(
                this.trackedElements[selector].leave || {}
            );
        if ({}.hasOwnProperty.call(this.trackedElements, selector))
            if (handler) {
                if (this.trackedElements[selector][event]) {
                    var callbackName =
                        "function" == typeof handler ? handler.name : handler;
                    delete this.trackedElements[selector][event][callbackName];
                }
            } else delete this.trackedElements[selector][event];
        enterCallbacks.length ||
            leaveCallbacks.length ||
            delete this.trackedElements[selector];
    }
    function on(event, selector, callback) {
        var allowed = ["enter", "leave"];
        if (!event)
            throw new Error("No event given. Choose either enter or leave");
        if (!selector) throw new Error("No selector to track");
        if (allowed.indexOf(event) < 0)
            throw new Error(event + " event is not supported");
        ({}.hasOwnProperty.call(this.trackedElements, selector) ||
            (this.trackedElements[selector] = {}),
            (this.trackedElements[selector].nodes = []));
        for (
            var i = 0, elems = document.querySelectorAll(selector);
            i < elems.length;
            i++
        ) {
            var item = { isVisible: !1, wasVisible: !1, node: elems[i] };
            this.trackedElements[selector].nodes.push(item);
        }
        "function" == typeof callback &&
            (this.trackedElements[selector][event] ||
                (this.trackedElements[selector][event] = {}),
            (this.trackedElements[selector][event][
                callback.name || "anonymous"
            ] = callback));
    }
    function observeDOM(obj, callback) {
        var MutationObserver =
            window.MutationObserver || window.WebKitMutationObserver;
        if (MutationObserver) {
            var obs = new MutationObserver(callback);
            obs.observe(obj, { childList: !0, subtree: !0 });
        } else obj.addEventListener("DOMNodeInserted", callback, !1), obj.addEventListener("DOMNodeRemoved", callback, !1);
    }
    function OnScreen() {
        var _this = this,
            options =
                arguments.length > 0 && void 0 !== arguments[0]
                    ? arguments[0]
                    : { tolerance: 0, debounce: 100, container: window };
        (this.options = {}),
            (this.trackedElements = {}),
            Object.defineProperties(this.options, {
                container: {
                    configurable: !1,
                    enumerable: !1,
                    get: function () {
                        var container = void 0;
                        return (
                            "string" == typeof options.container
                                ? (container = document.querySelector(
                                      options.container
                                  ))
                                : options.container instanceof HTMLElement &&
                                  (container = options.container),
                            container || window
                        );
                    },
                    set: function (value) {
                        options.container = value;
                    },
                },
                debounce: {
                    get: function () {
                        return parseInt(options.debounce, 10) || 100;
                    },
                    set: function (value) {
                        options.debounce = value;
                    },
                },
                tolerance: {
                    get: function () {
                        return parseInt(options.tolerance, 10) || 0;
                    },
                    set: function (value) {
                        options.tolerance = value;
                    },
                },
            }),
            Object.defineProperty(this, "_scroll", {
                enumerable: !1,
                configurable: !1,
                writable: !1,
                value: this._debouncedScroll.call(this),
            }),
            observeDOM(document.querySelector("body"), function () {
                Object.keys(_this.trackedElements).forEach(function (element) {
                    _this.on("enter", element), _this.on("leave", element);
                });
            }),
            this.attach();
    }
    return (
        Object.defineProperties(OnScreen.prototype, {
            _debouncedScroll: {
                configurable: !1,
                writable: !1,
                enumerable: !1,
                value: debouncedScroll,
            },
            attach: {
                configurable: !1,
                writable: !1,
                enumerable: !1,
                value: attach,
            },
            destroy: {
                configurable: !1,
                writable: !1,
                enumerable: !1,
                value: destroy,
            },
            off: { configurable: !1, writable: !1, enumerable: !1, value: off },
            on: { configurable: !1, writable: !1, enumerable: !1, value: on },
        }),
        (OnScreen.check = inViewport),
        OnScreen
    );
});
//# sourceMappingURL=dist/on-screen.umd.min.map
