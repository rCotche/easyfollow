var Ce=(P,A)=>()=>(A||P((A={exports:{}}).exports,A),A.exports);var qe=Ce((Wt,ye)=>{(function(P,A){typeof Wt=="object"&&typeof ye<"u"?A(Wt):typeof define=="function"&&define.amd?define(["exports"],A):A((P=typeof globalThis<"u"?globalThis:P||self).Popper={})})(globalThis,function(P){function A(e){if(e==null)return window;if(e.toString()!=="[object Window]"){var t=e.ownerDocument;return t&&t.defaultView||window}return e}function J(e){return e instanceof A(e).Element||e instanceof Element}function S(e){return e instanceof A(e).HTMLElement||e instanceof HTMLElement}function bt(e){return typeof ShadowRoot<"u"&&(e instanceof A(e).ShadowRoot||e instanceof ShadowRoot)}var K=Math.max,ct=Math.min,Z=Math.round;function wt(){var e=navigator.userAgentData;return e!=null&&e.brands?e.brands.map(function(t){return t.brand+"/"+t.version}).join(" "):navigator.userAgent}function Vt(){return!/^((?!chrome|android).)*safari/i.test(wt())}function F(e,t,n){t===void 0&&(t=!1),n===void 0&&(n=!1);var r=e.getBoundingClientRect(),s=1,o=1;t&&S(e)&&(s=e.offsetWidth>0&&Z(r.width)/e.offsetWidth||1,o=e.offsetHeight>0&&Z(r.height)/e.offsetHeight||1);var f=(J(e)?A(e):window).visualViewport,i=!Vt()&&n,a=(r.left+(i&&f?f.offsetLeft:0))/s,u=(r.top+(i&&f?f.offsetTop:0))/o,p=r.width/s,c=r.height/o;return{width:p,height:c,top:u,right:a+p,bottom:u+c,left:a,x:a,y:u}}function xt(e){var t=A(e);return{scrollLeft:t.pageXOffset,scrollTop:t.pageYOffset}}function U(e){return e?(e.nodeName||"").toLowerCase():null}function Y(e){return((J(e)?e.ownerDocument:e.document)||window.document).documentElement}function Ot(e){return F(Y(e)).left+xt(e).scrollLeft}function I(e){return A(e).getComputedStyle(e)}function jt(e){var t=I(e),n=t.overflow,r=t.overflowX,s=t.overflowY;return/auto|scroll|overlay|hidden/.test(n+s+r)}function be(e,t,n){n===void 0&&(n=!1);var r,s,o=S(t),f=S(t)&&function(c){var y=c.getBoundingClientRect(),d=Z(y.width)/c.offsetWidth||1,v=Z(y.height)/c.offsetHeight||1;return d!==1||v!==1}(t),i=Y(t),a=F(e,f,n),u={scrollLeft:0,scrollTop:0},p={x:0,y:0};return(o||!o&&!n)&&((U(t)!=="body"||jt(i))&&(u=(r=t)!==A(r)&&S(r)?{scrollLeft:(s=r).scrollLeft,scrollTop:s.scrollTop}:xt(r)),S(t)?((p=F(t,!0)).x+=t.clientLeft,p.y+=t.clientTop):i&&(p.x=Ot(i))),{x:a.left+u.scrollLeft-p.x,y:a.top+u.scrollTop-p.y,width:a.width,height:a.height}}function Dt(e){var t=F(e),n=e.offsetWidth,r=e.offsetHeight;return Math.abs(t.width-n)<=1&&(n=t.width),Math.abs(t.height-r)<=1&&(r=t.height),{x:e.offsetLeft,y:e.offsetTop,width:n,height:r}}function pt(e){return U(e)==="html"?e:e.assignedSlot||e.parentNode||(bt(e)?e.host:null)||Y(e)}function Ct(e){return["html","body","#document"].indexOf(U(e))>=0?e.ownerDocument.body:S(e)&&jt(e)?e:Ct(pt(e))}function rt(e,t){var n;t===void 0&&(t=[]);var r=Ct(e),s=r===((n=e.ownerDocument)==null?void 0:n.body),o=A(r),f=s?[o].concat(o.visualViewport||[],jt(r)?r:[]):r,i=t.concat(f);return s?i:i.concat(rt(pt(f)))}function we(e){return["table","td","th"].indexOf(U(e))>=0}function qt(e){return S(e)&&I(e).position!=="fixed"?e.offsetParent:null}function ot(e){for(var t=A(e),n=qt(e);n&&we(n)&&I(n).position==="static";)n=qt(n);return n&&(U(n)==="html"||U(n)==="body"&&I(n).position==="static")?t:n||function(r){var s=/firefox/i.test(wt());if(/Trident/i.test(wt())&&S(r)&&I(r).position==="fixed")return null;var o=pt(r);for(bt(o)&&(o=o.host);S(o)&&["html","body"].indexOf(U(o))<0;){var f=I(o);if(f.transform!=="none"||f.perspective!=="none"||f.contain==="paint"||["transform","perspective"].indexOf(f.willChange)!==-1||s&&f.willChange==="filter"||s&&f.filter&&f.filter!=="none")return o;o=o.parentNode}return null}(e)||t}var k="top",B="bottom",W="right",R="left",Et="auto",it=[k,B,W,R],_="start",at="end",Nt="viewport",st="popper",Ut=it.reduce(function(e,t){return e.concat([t+"-"+_,t+"-"+at])},[]),zt=[].concat(it,[Et]).reduce(function(e,t){return e.concat([t,t+"-"+_,t+"-"+at])},[]),xe=["beforeRead","read","afterRead","beforeMain","main","afterMain","beforeWrite","write","afterWrite"];function Oe(e){var t=new Map,n=new Set,r=[];function s(o){n.add(o.name),[].concat(o.requires||[],o.requiresIfExists||[]).forEach(function(f){if(!n.has(f)){var i=t.get(f);i&&s(i)}}),r.push(o)}return e.forEach(function(o){t.set(o.name,o)}),e.forEach(function(o){n.has(o.name)||s(o)}),r}function z(e){return e.split("-")[0]}function It(e,t){var n=t.getRootNode&&t.getRootNode();if(e.contains(t))return!0;if(n&&bt(n)){var r=t;do{if(r&&e.isSameNode(r))return!0;r=r.parentNode||r.host}while(r)}return!1}function At(e){return Object.assign({},e,{left:e.x,top:e.y,right:e.x+e.width,bottom:e.y+e.height})}function Xt(e,t,n){return t===Nt?At(function(r,s){var o=A(r),f=Y(r),i=o.visualViewport,a=f.clientWidth,u=f.clientHeight,p=0,c=0;if(i){a=i.width,u=i.height;var y=Vt();(y||!y&&s==="fixed")&&(p=i.offsetLeft,c=i.offsetTop)}return{width:a,height:u,x:p+Ot(r),y:c}}(e,n)):J(t)?function(r,s){var o=F(r,!1,s==="fixed");return o.top=o.top+r.clientTop,o.left=o.left+r.clientLeft,o.bottom=o.top+r.clientHeight,o.right=o.left+r.clientWidth,o.width=r.clientWidth,o.height=r.clientHeight,o.x=o.left,o.y=o.top,o}(t,n):At(function(r){var s,o=Y(r),f=xt(r),i=(s=r.ownerDocument)==null?void 0:s.body,a=K(o.scrollWidth,o.clientWidth,i?i.scrollWidth:0,i?i.clientWidth:0),u=K(o.scrollHeight,o.clientHeight,i?i.scrollHeight:0,i?i.clientHeight:0),p=-f.scrollLeft+Ot(r),c=-f.scrollTop;return I(i||o).direction==="rtl"&&(p+=K(o.clientWidth,i?i.clientWidth:0)-a),{width:a,height:u,x:p,y:c}}(Y(e)))}function je(e,t,n,r){var s=t==="clippingParents"?function(a){var u=rt(pt(a)),p=["absolute","fixed"].indexOf(I(a).position)>=0&&S(a)?ot(a):a;return J(p)?u.filter(function(c){return J(c)&&It(c,p)&&U(c)!=="body"}):[]}(e):[].concat(t),o=[].concat(s,[n]),f=o[0],i=o.reduce(function(a,u){var p=Xt(e,u,r);return a.top=K(p.top,a.top),a.right=ct(p.right,a.right),a.bottom=ct(p.bottom,a.bottom),a.left=K(p.left,a.left),a},Xt(e,f,r));return i.width=i.right-i.left,i.height=i.bottom-i.top,i.x=i.left,i.y=i.top,i}function tt(e){return e.split("-")[1]}function Mt(e){return["top","bottom"].indexOf(e)>=0?"x":"y"}function Yt(e){var t,n=e.reference,r=e.element,s=e.placement,o=s?z(s):null,f=s?tt(s):null,i=n.x+n.width/2-r.width/2,a=n.y+n.height/2-r.height/2;switch(o){case k:t={x:i,y:n.y-r.height};break;case B:t={x:i,y:n.y+n.height};break;case W:t={x:n.x+n.width,y:a};break;case R:t={x:n.x-r.width,y:a};break;default:t={x:n.x,y:n.y}}var u=o?Mt(o):null;if(u!=null){var p=u==="y"?"height":"width";switch(f){case _:t[u]=t[u]-(n[p]/2-r[p]/2);break;case at:t[u]=t[u]+(n[p]/2-r[p]/2)}}return t}function Gt(e){return Object.assign({},{top:0,right:0,bottom:0,left:0},e)}function Jt(e,t){return t.reduce(function(n,r){return n[r]=e,n},{})}function et(e,t){t===void 0&&(t={});var n=t,r=n.placement,s=r===void 0?e.placement:r,o=n.strategy,f=o===void 0?e.strategy:o,i=n.boundary,a=i===void 0?"clippingParents":i,u=n.rootBoundary,p=u===void 0?Nt:u,c=n.elementContext,y=c===void 0?st:c,d=n.altBoundary,v=d!==void 0&&d,g=n.padding,h=g===void 0?0:g,E=Gt(typeof h!="number"?h:Jt(h,it)),D=y===st?"reference":st,b=e.rects.popper,w=e.elements[v?D:y],l=je(J(w)?w:w.contextElement||Y(e.elements.popper),a,p,f),m=F(e.elements.reference),x=Yt({reference:m,element:b,strategy:"absolute",placement:s}),j=At(Object.assign({},b,x)),O=y===st?j:m,M={top:l.top-O.top+E.top,bottom:O.bottom-l.bottom+E.bottom,left:l.left-O.left+E.left,right:O.right-l.right+E.right},L=e.modifiersData.offset;if(y===st&&L){var V=L[s];Object.keys(M).forEach(function(C){var X=[W,B].indexOf(C)>=0?1:-1,H=[k,B].indexOf(C)>=0?"y":"x";M[C]+=V[H]*X})}return M}var Kt={placement:"bottom",modifiers:[],strategy:"absolute"};function Qt(){for(var e=arguments.length,t=new Array(e),n=0;n<e;n++)t[n]=arguments[n];return!t.some(function(r){return!(r&&typeof r.getBoundingClientRect=="function")})}function Pt(e){e===void 0&&(e={});var t=e,n=t.defaultModifiers,r=n===void 0?[]:n,s=t.defaultOptions,o=s===void 0?Kt:s;return function(f,i,a){a===void 0&&(a=o);var u,p,c={placement:"bottom",orderedModifiers:[],options:Object.assign({},Kt,o),modifiersData:{},elements:{reference:f,popper:i},attributes:{},styles:{}},y=[],d=!1,v={state:c,setOptions:function(h){var E=typeof h=="function"?h(c.options):h;g(),c.options=Object.assign({},o,c.options,E),c.scrollParents={reference:J(f)?rt(f):f.contextElement?rt(f.contextElement):[],popper:rt(i)};var D,b,w=function(l){var m=Oe(l);return xe.reduce(function(x,j){return x.concat(m.filter(function(O){return O.phase===j}))},[])}((D=[].concat(r,c.options.modifiers),b=D.reduce(function(l,m){var x=l[m.name];return l[m.name]=x?Object.assign({},x,m,{options:Object.assign({},x.options,m.options),data:Object.assign({},x.data,m.data)}):m,l},{}),Object.keys(b).map(function(l){return b[l]})));return c.orderedModifiers=w.filter(function(l){return l.enabled}),c.orderedModifiers.forEach(function(l){var m=l.name,x=l.options,j=x===void 0?{}:x,O=l.effect;if(typeof O=="function"){var M=O({state:c,name:m,instance:v,options:j}),L=function(){};y.push(M||L)}}),v.update()},forceUpdate:function(){if(!d){var h=c.elements,E=h.reference,D=h.popper;if(Qt(E,D)){c.rects={reference:be(E,ot(D),c.options.strategy==="fixed"),popper:Dt(D)},c.reset=!1,c.placement=c.options.placement,c.orderedModifiers.forEach(function(O){return c.modifiersData[O.name]=Object.assign({},O.data)});for(var b=0;b<c.orderedModifiers.length;b++)if(c.reset!==!0){var w=c.orderedModifiers[b],l=w.fn,m=w.options,x=m===void 0?{}:m,j=w.name;typeof l=="function"&&(c=l({state:c,options:x,name:j,instance:v})||c)}else c.reset=!1,b=-1}}},update:(u=function(){return new Promise(function(h){v.forceUpdate(),h(c)})},function(){return p||(p=new Promise(function(h){Promise.resolve().then(function(){p=void 0,h(u())})})),p}),destroy:function(){g(),d=!0}};if(!Qt(f,i))return v;function g(){y.forEach(function(h){return h()}),y=[]}return v.setOptions(a).then(function(h){!d&&a.onFirstUpdate&&a.onFirstUpdate(h)}),v}}var ut={passive:!0},Lt={name:"eventListeners",enabled:!0,phase:"write",fn:function(){},effect:function(e){var t=e.state,n=e.instance,r=e.options,s=r.scroll,o=s===void 0||s,f=r.resize,i=f===void 0||f,a=A(t.elements.popper),u=[].concat(t.scrollParents.reference,t.scrollParents.popper);return o&&u.forEach(function(p){p.addEventListener("scroll",n.update,ut)}),i&&a.addEventListener("resize",n.update,ut),function(){o&&u.forEach(function(p){p.removeEventListener("scroll",n.update,ut)}),i&&a.removeEventListener("resize",n.update,ut)}},data:{}},kt={name:"popperOffsets",enabled:!0,phase:"read",fn:function(e){var t=e.state,n=e.name;t.modifiersData[n]=Yt({reference:t.rects.reference,element:t.rects.popper,strategy:"absolute",placement:t.placement})},data:{}},De={top:"auto",right:"auto",bottom:"auto",left:"auto"};function $t(e){var t,n=e.popper,r=e.popperRect,s=e.placement,o=e.variation,f=e.offsets,i=e.position,a=e.gpuAcceleration,u=e.adaptive,p=e.roundOffsets,c=e.isFixed,y=f.x,d=y===void 0?0:y,v=f.y,g=v===void 0?0:v,h=typeof p=="function"?p({x:d,y:g}):{x:d,y:g};d=h.x,g=h.y;var E=f.hasOwnProperty("x"),D=f.hasOwnProperty("y"),b=R,w=k,l=window;if(u){var m=ot(n),x="clientHeight",j="clientWidth";m===A(n)&&I(m=Y(n)).position!=="static"&&i==="absolute"&&(x="scrollHeight",j="scrollWidth"),m=m,(s===k||(s===R||s===W)&&o===at)&&(w=B,g-=(c&&m===l&&l.visualViewport?l.visualViewport.height:m[x])-r.height,g*=a?1:-1),(s===R||(s===k||s===B)&&o===at)&&(b=W,d-=(c&&m===l&&l.visualViewport?l.visualViewport.width:m[j])-r.width,d*=a?1:-1)}var O,M=Object.assign({position:i},u&&De),L=p===!0?function(V){var C=V.x,X=V.y,H=window.devicePixelRatio||1;return{x:Z(C*H)/H||0,y:Z(X*H)/H||0}}({x:d,y:g}):{x:d,y:g};return d=L.x,g=L.y,a?Object.assign({},M,((O={})[w]=D?"0":"",O[b]=E?"0":"",O.transform=(l.devicePixelRatio||1)<=1?"translate("+d+"px, "+g+"px)":"translate3d("+d+"px, "+g+"px, 0)",O)):Object.assign({},M,((t={})[w]=D?g+"px":"",t[b]=E?d+"px":"",t.transform="",t))}var Rt={name:"computeStyles",enabled:!0,phase:"beforeWrite",fn:function(e){var t=e.state,n=e.options,r=n.gpuAcceleration,s=r===void 0||r,o=n.adaptive,f=o===void 0||o,i=n.roundOffsets,a=i===void 0||i,u={placement:z(t.placement),variation:tt(t.placement),popper:t.elements.popper,popperRect:t.rects.popper,gpuAcceleration:s,isFixed:t.options.strategy==="fixed"};t.modifiersData.popperOffsets!=null&&(t.styles.popper=Object.assign({},t.styles.popper,$t(Object.assign({},u,{offsets:t.modifiersData.popperOffsets,position:t.options.strategy,adaptive:f,roundOffsets:a})))),t.modifiersData.arrow!=null&&(t.styles.arrow=Object.assign({},t.styles.arrow,$t(Object.assign({},u,{offsets:t.modifiersData.arrow,position:"absolute",adaptive:!1,roundOffsets:a})))),t.attributes.popper=Object.assign({},t.attributes.popper,{"data-popper-placement":t.placement})},data:{}},Tt={name:"applyStyles",enabled:!0,phase:"write",fn:function(e){var t=e.state;Object.keys(t.elements).forEach(function(n){var r=t.styles[n]||{},s=t.attributes[n]||{},o=t.elements[n];S(o)&&U(o)&&(Object.assign(o.style,r),Object.keys(s).forEach(function(f){var i=s[f];i===!1?o.removeAttribute(f):o.setAttribute(f,i===!0?"":i)}))})},effect:function(e){var t=e.state,n={popper:{position:t.options.strategy,left:"0",top:"0",margin:"0"},arrow:{position:"absolute"},reference:{}};return Object.assign(t.elements.popper.style,n.popper),t.styles=n,t.elements.arrow&&Object.assign(t.elements.arrow.style,n.arrow),function(){Object.keys(t.elements).forEach(function(r){var s=t.elements[r],o=t.attributes[r]||{},f=Object.keys(t.styles.hasOwnProperty(r)?t.styles[r]:n[r]).reduce(function(i,a){return i[a]="",i},{});S(s)&&U(s)&&(Object.assign(s.style,f),Object.keys(o).forEach(function(i){s.removeAttribute(i)}))})}},requires:["computeStyles"]},Zt={name:"offset",enabled:!0,phase:"main",requires:["popperOffsets"],fn:function(e){var t=e.state,n=e.options,r=e.name,s=n.offset,o=s===void 0?[0,0]:s,f=zt.reduce(function(p,c){return p[c]=function(y,d,v){var g=z(y),h=[R,k].indexOf(g)>=0?-1:1,E=typeof v=="function"?v(Object.assign({},d,{placement:y})):v,D=E[0],b=E[1];return D=D||0,b=(b||0)*h,[R,W].indexOf(g)>=0?{x:b,y:D}:{x:D,y:b}}(c,t.rects,o),p},{}),i=f[t.placement],a=i.x,u=i.y;t.modifiersData.popperOffsets!=null&&(t.modifiersData.popperOffsets.x+=a,t.modifiersData.popperOffsets.y+=u),t.modifiersData[r]=f}},Ee={left:"right",right:"left",bottom:"top",top:"bottom"};function lt(e){return e.replace(/left|right|bottom|top/g,function(t){return Ee[t]})}var Ae={start:"end",end:"start"};function Ft(e){return e.replace(/start|end/g,function(t){return Ae[t]})}function Me(e,t){t===void 0&&(t={});var n=t,r=n.placement,s=n.boundary,o=n.rootBoundary,f=n.padding,i=n.flipVariations,a=n.allowedAutoPlacements,u=a===void 0?zt:a,p=tt(r),c=p?i?Ut:Ut.filter(function(v){return tt(v)===p}):it,y=c.filter(function(v){return u.indexOf(v)>=0});y.length===0&&(y=c);var d=y.reduce(function(v,g){return v[g]=et(e,{placement:g,boundary:s,rootBoundary:o,padding:f})[z(g)],v},{});return Object.keys(d).sort(function(v,g){return d[v]-d[g]})}var _t={name:"flip",enabled:!0,phase:"main",fn:function(e){var t=e.state,n=e.options,r=e.name;if(!t.modifiersData[r]._skip){for(var s=n.mainAxis,o=s===void 0||s,f=n.altAxis,i=f===void 0||f,a=n.fallbackPlacements,u=n.padding,p=n.boundary,c=n.rootBoundary,y=n.altBoundary,d=n.flipVariations,v=d===void 0||d,g=n.allowedAutoPlacements,h=t.options.placement,E=z(h),D=a||(E===h||!v?[lt(h)]:function(q){if(z(q)===Et)return[];var N=lt(q);return[Ft(q),N,Ft(N)]}(h)),b=[h].concat(D).reduce(function(q,N){return q.concat(z(N)===Et?Me(t,{placement:N,boundary:p,rootBoundary:c,padding:u,flipVariations:v,allowedAutoPlacements:g}):N)},[]),w=t.rects.reference,l=t.rects.popper,m=new Map,x=!0,j=b[0],O=0;O<b.length;O++){var M=b[O],L=z(M),V=tt(M)===_,C=[k,B].indexOf(L)>=0,X=C?"width":"height",H=et(t,{placement:M,boundary:p,rootBoundary:c,altBoundary:y,padding:u}),T=C?V?W:R:V?B:k;w[X]>l[X]&&(T=lt(T));var G=lt(T),Q=[];if(o&&Q.push(H[L]<=0),i&&Q.push(H[T]<=0,H[G]<=0),Q.every(function(q){return q})){j=M,x=!1;break}m.set(M,Q)}if(x)for(var dt=function(q){var N=b.find(function(ht){var mt=m.get(ht);if(mt)return mt.slice(0,q).every(function(vt){return vt})});if(N)return j=N,"break"},nt=v?3:1;nt>0&&dt(nt)!=="break";nt--);t.placement!==j&&(t.modifiersData[r]._skip=!0,t.placement=j,t.reset=!0)}},requiresIfExists:["offset"],data:{_skip:!1}};function ft(e,t,n){return K(e,ct(t,n))}var te={name:"preventOverflow",enabled:!0,phase:"main",fn:function(e){var t=e.state,n=e.options,r=e.name,s=n.mainAxis,o=s===void 0||s,f=n.altAxis,i=f!==void 0&&f,a=n.boundary,u=n.rootBoundary,p=n.altBoundary,c=n.padding,y=n.tether,d=y===void 0||y,v=n.tetherOffset,g=v===void 0?0:v,h=et(t,{boundary:a,rootBoundary:u,padding:c,altBoundary:p}),E=z(t.placement),D=tt(t.placement),b=!D,w=Mt(E),l=w==="x"?"y":"x",m=t.modifiersData.popperOffsets,x=t.rects.reference,j=t.rects.popper,O=typeof g=="function"?g(Object.assign({},t.rects,{placement:t.placement})):g,M=typeof O=="number"?{mainAxis:O,altAxis:O}:Object.assign({mainAxis:0,altAxis:0},O),L=t.modifiersData.offset?t.modifiersData.offset[t.placement]:null,V={x:0,y:0};if(m){if(o){var C,X=w==="y"?k:R,H=w==="y"?B:W,T=w==="y"?"height":"width",G=m[w],Q=G+h[X],dt=G-h[H],nt=d?-j[T]/2:0,q=D===_?x[T]:j[T],N=D===_?-j[T]:-x[T],ht=t.elements.arrow,mt=d&&ht?Dt(ht):{width:0,height:0},vt=t.modifiersData["arrow#persistent"]?t.modifiersData["arrow#persistent"].padding:{top:0,right:0,bottom:0,left:0},ae=vt[X],se=vt[H],gt=ft(0,x[T],mt[T]),ke=b?x[T]/2-nt-gt-ae-M.mainAxis:q-gt-ae-M.mainAxis,Re=b?-x[T]/2+nt+gt+se+M.mainAxis:N+gt+se+M.mainAxis,Ht=t.elements.arrow&&ot(t.elements.arrow),Te=Ht?w==="y"?Ht.clientTop||0:Ht.clientLeft||0:0,fe=(C=L==null?void 0:L[w])!=null?C:0,He=G+Re-fe,ce=ft(d?ct(Q,G+ke-fe-Te):Q,G,d?K(dt,He):dt);m[w]=ce,V[w]=ce-G}if(i){var pe,Se=w==="x"?k:R,Be=w==="x"?B:W,$=m[l],yt=l==="y"?"height":"width",ue=$+h[Se],le=$-h[Be],St=[k,R].indexOf(E)!==-1,de=(pe=L==null?void 0:L[l])!=null?pe:0,he=St?ue:$-x[yt]-j[yt]-de+M.altAxis,me=St?$+x[yt]+j[yt]-de-M.altAxis:le,ve=d&&St?function(We,Ve,Bt){var ge=ft(We,Ve,Bt);return ge>Bt?Bt:ge}(he,$,me):ft(d?he:ue,$,d?me:le);m[l]=ve,V[l]=ve-$}t.modifiersData[r]=V}},requiresIfExists:["offset"]},ee={name:"arrow",enabled:!0,phase:"main",fn:function(e){var t,n=e.state,r=e.name,s=e.options,o=n.elements.arrow,f=n.modifiersData.popperOffsets,i=z(n.placement),a=Mt(i),u=[R,W].indexOf(i)>=0?"height":"width";if(o&&f){var p=function(j,O){return Gt(typeof(j=typeof j=="function"?j(Object.assign({},O.rects,{placement:O.placement})):j)!="number"?j:Jt(j,it))}(s.padding,n),c=Dt(o),y=a==="y"?k:R,d=a==="y"?B:W,v=n.rects.reference[u]+n.rects.reference[a]-f[a]-n.rects.popper[u],g=f[a]-n.rects.reference[a],h=ot(o),E=h?a==="y"?h.clientHeight||0:h.clientWidth||0:0,D=v/2-g/2,b=p[y],w=E-c[u]-p[d],l=E/2-c[u]/2+D,m=ft(b,l,w),x=a;n.modifiersData[r]=((t={})[x]=m,t.centerOffset=m-l,t)}},effect:function(e){var t=e.state,n=e.options.element,r=n===void 0?"[data-popper-arrow]":n;r!=null&&(typeof r!="string"||(r=t.elements.popper.querySelector(r)))&&It(t.elements.popper,r)&&(t.elements.arrow=r)},requires:["popperOffsets"],requiresIfExists:["preventOverflow"]};function ne(e,t,n){return n===void 0&&(n={x:0,y:0}),{top:e.top-t.height-n.y,right:e.right-t.width+n.x,bottom:e.bottom-t.height+n.y,left:e.left-t.width-n.x}}function re(e){return[k,W,B,R].some(function(t){return e[t]>=0})}var oe={name:"hide",enabled:!0,phase:"main",requiresIfExists:["preventOverflow"],fn:function(e){var t=e.state,n=e.name,r=t.rects.reference,s=t.rects.popper,o=t.modifiersData.preventOverflow,f=et(t,{elementContext:"reference"}),i=et(t,{altBoundary:!0}),a=ne(f,r),u=ne(i,s,o),p=re(a),c=re(u);t.modifiersData[n]={referenceClippingOffsets:a,popperEscapeOffsets:u,isReferenceHidden:p,hasPopperEscaped:c},t.attributes.popper=Object.assign({},t.attributes.popper,{"data-popper-reference-hidden":p,"data-popper-escaped":c})}},Pe=Pt({defaultModifiers:[Lt,kt,Rt,Tt]}),ie=[Lt,kt,Rt,Tt,Zt,_t,te,ee,oe],Le=Pt({defaultModifiers:ie});P.applyStyles=Tt,P.arrow=ee,P.computeStyles=Rt,P.createPopper=Le,P.createPopperLite=Pe,P.defaultModifiers=ie,P.detectOverflow=et,P.eventListeners=Lt,P.flip=_t,P.hide=oe,P.offset=Zt,P.popperGenerator=Pt,P.popperOffsets=kt,P.preventOverflow=te,Object.defineProperty(P,"__esModule",{value:!0})})});export default qe();