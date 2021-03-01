(function () {
  'use strict';

  /**
   * Данный модуль загружается с помощью pixel.js внутри iframe с нашего домена.
   * В GET-параметрах iframe передаются данные внешнего сайта.
   * Внутри iframe мы можем читать куки, установленные в наш домен.
   * Данный скрипт проверяет наличие куки с идентификатором посетителя.
   * А также, скрипт проверяет наличие настроек отслеживаемых сайтов в localStorage.
   * Если нет куки или настроек, скрипт их запросит с сервера.
   * После получения идентификатора посетителя, скрипт отправит postMessage с этим идентификатором в родительское окно
   * (в окно, в котором загружен pixel.js).
   */

  // JSON polyfill
  window.JSON||(window.JSON={parse:function(sJSON){return eval("("+sJSON+")")},stringify:function(r){if(r instanceof Object){var t="";if(r.constructor===Array){for(var n=0;n<r.length;t+=this.stringify(r[n])+",",n++);return"["+t.substr(0,t.length-1)+"]"}if(r.toString!==Object.prototype.toString)return'"'+r.toString().replace(/"/g,"\\$&")+'"';for(var i in r)t+='"'+i.replace(/"/g,"\\$&")+'":'+this.stringify(r[i])+",";return"{"+t.substr(0,t.length-1)+"}"}return"string"==typeof r?'"'+r.replace(/"/g,"\\$&")+'"':String(r)}});

   // Reqwest! A general purpose XHR connection manager
   // https://github.com/ded/reqwest
  !function(e,t,n){typeof module!="undefined"&&module.exports?module.exports=n():typeof define=="function"&&define.amd?define(n):t[e]=n()}("reqwest",this,function(){function succeed(e){var t=protocolRe.exec(e.url);return t=t&&t[1]||context.location.protocol,httpsRe.test(t)?twoHundo.test(e.request.status):!!e.request.response}function handleReadyState(e,t,n){return function(){if(e._aborted)return n(e.request);if(e._timedOut)return n(e.request,"Request is aborted: timeout");e.request&&e.request[readyState]==4&&(e.request.onreadystatechange=noop,succeed(e)?t(e.request):n(e.request))}}function setHeaders(e,t){var n=t.headers||{},r;n.Accept=n.Accept||defaultHeaders.accept[t.type]||defaultHeaders.accept["*"];var i=typeof FormData!="undefined"&&t.data instanceof FormData;!t.crossOrigin&&!n[requestedWith]&&(n[requestedWith]=defaultHeaders.requestedWith),!n[contentType]&&!i&&(n[contentType]=t.contentType||defaultHeaders.contentType);for(r in n)n.hasOwnProperty(r)&&"setRequestHeader"in e&&e.setRequestHeader(r,n[r])}function setCredentials(e,t){typeof t.withCredentials!="undefined"&&typeof e.withCredentials!="undefined"&&(e.withCredentials=!!t.withCredentials)}function generalCallback(e){lastValue=e}function urlappend(e,t){return e+(/\?/.test(e)?"&":"?")+t}function handleJsonp(e,t,n,r){var i=uniqid++,s=e.jsonpCallback||"callback",o=e.jsonpCallbackName||reqwest.getcallbackPrefix(i),u=new RegExp("((^|\\?|&)"+s+")=([^&]+)"),a=r.match(u),f=doc.createElement("script"),l=0,c=navigator.userAgent.indexOf("MSIE 10.0")!==-1;return a?a[3]==="?"?r=r.replace(u,"$1="+o):o=a[3]:r=urlappend(r,s+"="+o),context[o]=generalCallback,f.type="text/javascript",f.src=r,f.async=!0,typeof f.onreadystatechange!="undefined"&&!c&&(f.htmlFor=f.id="_reqwest_"+i),f.onload=f.onreadystatechange=function(){if(f[readyState]&&f[readyState]!=="complete"&&f[readyState]!=="loaded"||l)return!1;f.onload=f.onreadystatechange=null,f.onclick&&f.onclick(),t(lastValue),lastValue=undefined,head.removeChild(f),l=1},head.appendChild(f),{abort:function(){f.onload=f.onreadystatechange=null,n({},"Request is aborted: timeout",{}),lastValue=undefined,head.removeChild(f),l=1}}}function getRequest(e,t){var n=this.o,r=(n.method||"GET").toUpperCase(),i=typeof n=="string"?n:n.url,s=n.processData!==!1&&n.data&&typeof n.data!="string"?reqwest.toQueryString(n.data):n.data||null,o,u=!1;return(n["type"]=="jsonp"||r=="GET")&&s&&(i=urlappend(i,s),s=null),n["type"]=="jsonp"?handleJsonp(n,e,t,i):(o=n.xhr&&n.xhr(n)||xhr(n),o.open(r,i,n.async===!1?!1:!0),setHeaders(o,n),setCredentials(o,n),context[xDomainRequest]&&o instanceof context[xDomainRequest]?(o.onload=e,o.onerror=t,o.onprogress=function(){},u=!0):o.onreadystatechange=handleReadyState(this,e,t),n.before&&n.before(o),u?setTimeout(function(){o.send(s)},200):o.send(s),o)}function Reqwest(e,t){this.o=e,this.fn=t,init.apply(this,arguments)}function setType(e){if(e===null)return undefined;if(e.match("json"))return"json";if(e.match("javascript"))return"js";if(e.match("text"))return"html";if(e.match("xml"))return"xml"}function init(o,fn){function complete(e){o.timeout&&clearTimeout(self.timeout),self.timeout=null;while(self._completeHandlers.length>0)self._completeHandlers.shift()(e)}function success(resp){var type=o.type||resp&&setType(resp.getResponseHeader("Content-Type"));resp=type!=="jsonp"?self.request:resp;var filteredResponse=globalSetupOptions.dataFilter(resp.responseText,type),r=filteredResponse;try{resp.responseText=r}catch(e){}if(r)switch(type){case"json":try{resp=context.JSON?context.JSON.parse(r):eval("("+r+")")}catch(err){return error(resp,"Could not parse JSON in response",err)}break;case"js":resp=eval(r);break;case"html":resp=r;break;case"xml":resp=resp.responseXML&&resp.responseXML.parseError&&resp.responseXML.parseError.errorCode&&resp.responseXML.parseError.reason?null:resp.responseXML}self._responseArgs.resp=resp,self._fulfilled=!0,fn(resp),self._successHandler(resp);while(self._fulfillmentHandlers.length>0)resp=self._fulfillmentHandlers.shift()(resp);complete(resp)}function timedOut(){self._timedOut=!0,self.request.abort()}function error(e,t,n){e=self.request,self._responseArgs.resp=e,self._responseArgs.msg=t,self._responseArgs.t=n,self._erred=!0;while(self._errorHandlers.length>0)self._errorHandlers.shift()(e,t,n);complete(e)}this.url=typeof o=="string"?o:o.url,this.timeout=null,this._fulfilled=!1,this._successHandler=function(){},this._fulfillmentHandlers=[],this._errorHandlers=[],this._completeHandlers=[],this._erred=!1,this._responseArgs={};var self=this;fn=fn||function(){},o.timeout&&(this.timeout=setTimeout(function(){timedOut()},o.timeout)),o.success&&(this._successHandler=function(){o.success.apply(o,arguments)}),o.error&&this._errorHandlers.push(function(){o.error.apply(o,arguments)}),o.complete&&this._completeHandlers.push(function(){o.complete.apply(o,arguments)}),this.request=getRequest.call(this,success,error)}function reqwest(e,t){return new Reqwest(e,t)}function normalize(e){return e?e.replace(/\r?\n/g,"\r\n"):""}function serial(e,t){var n=e.name,r=e.tagName.toLowerCase(),i=function(e){e&&!e.disabled&&t(n,normalize(e.attributes.value&&e.attributes.value.specified?e.value:e.text))},s,o,u,a;if(e.disabled||!n)return;switch(r){case"input":/reset|button|image|file/i.test(e.type)||(s=/checkbox/i.test(e.type),o=/radio/i.test(e.type),u=e.value,(!s&&!o||e.checked)&&t(n,normalize(s&&u===""?"on":u)));break;case"textarea":t(n,normalize(e.value));break;case"select":if(e.type.toLowerCase()==="select-one")i(e.selectedIndex>=0?e.options[e.selectedIndex]:null);else for(a=0;e.length&&a<e.length;a++)e.options[a].selected&&i(e.options[a])}}function eachFormElement(){var e=this,t,n,r=function(t,n){var r,i,s;for(r=0;r<n.length;r++){s=t[byTag](n[r]);for(i=0;i<s.length;i++)serial(s[i],e)}};for(n=0;n<arguments.length;n++)t=arguments[n],/input|select|textarea/i.test(t.tagName)&&serial(t,e),r(t,["input","select","textarea"])}function serializeQueryString(){return reqwest.toQueryString(reqwest.serializeArray.apply(null,arguments))}function serializeHash(){var e={};return eachFormElement.apply(function(t,n){t in e?(e[t]&&!isArray(e[t])&&(e[t]=[e[t]]),e[t].push(n)):e[t]=n},arguments),e}function buildParams(e,t,n,r){var i,s,o,u=/\[\]$/;if(isArray(t))for(s=0;t&&s<t.length;s++)o=t[s],n||u.test(e)?r(e,o):buildParams(e+"["+(typeof o=="object"?s:"")+"]",o,n,r);else if(t&&t.toString()==="[object Object]")for(i in t)buildParams(e+"["+i+"]",t[i],n,r);else r(e,t)}
    var context = window; // amoCRM fix. Original code: var context = this;
    if("window"in context)var doc=document,byTag="getElementsByTagName",head=doc[byTag]("head")[0];else{var XHR2;try{XHR2=require("xhr2")}catch(ex){throw new Error("Peer dependency `xhr2` required! Please npm install xhr2")}}var httpsRe=/^http/,protocolRe=/(^\w+):\/\//,twoHundo=/^(20\d|1223)$/,readyState="readyState",contentType="Content-Type",requestedWith="X-Requested-With",uniqid=0,callbackPrefix="reqwest_"+ +(new Date),lastValue,xmlHttpRequest="XMLHttpRequest",xDomainRequest="XDomainRequest",noop=function(){},isArray=typeof Array.isArray=="function"?Array.isArray:function(e){return e instanceof Array},defaultHeaders={contentType:"application/x-www-form-urlencoded",requestedWith:xmlHttpRequest,accept:{"*":"text/javascript, text/html, application/xml, text/xml, */*",xml:"application/xml, text/xml",html:"text/html",text:"text/plain",json:"application/json, text/javascript",js:"application/javascript, text/javascript"}},xhr=function(e){if(e.crossOrigin===!0){var t=context[xmlHttpRequest]?new XMLHttpRequest:null;if(t&&"withCredentials"in t)return t;if(context[xDomainRequest])return new XDomainRequest;throw new Error("Browser does not support cross-origin requests")}return context[xmlHttpRequest]?new XMLHttpRequest:XHR2?new XHR2:new ActiveXObject("Microsoft.XMLHTTP")},globalSetupOptions={dataFilter:function(e){return e}};return Reqwest.prototype={abort:function(){this._aborted=!0,this.request.abort()},retry:function(){init.call(this,this.o,this.fn)},then:function(e,t){return e=e||function(){},t=t||function(){},this._fulfilled?this._responseArgs.resp=e(this._responseArgs.resp):this._erred?t(this._responseArgs.resp,this._responseArgs.msg,this._responseArgs.t):(this._fulfillmentHandlers.push(e),this._errorHandlers.push(t)),this},always:function(e){return this._fulfilled||this._erred?e(this._responseArgs.resp):this._completeHandlers.push(e),this},fail:function(e){return this._erred?e(this._responseArgs.resp,this._responseArgs.msg,this._responseArgs.t):this._errorHandlers.push(e),this},"catch":function(e){return this.fail(e)}},reqwest.serializeArray=function(){var e=[];return eachFormElement.apply(function(t,n){e.push({name:t,value:n})},arguments),e},reqwest.serialize=function(){if(arguments.length===0)return"";var e,t,n=Array.prototype.slice.call(arguments,0);return e=n.pop(),e&&e.nodeType&&n.push(e)&&(e=null),e&&(e=e.type),e=="map"?t=serializeHash:e=="array"?t=reqwest.serializeArray:t=serializeQueryString,t.apply(null,n)},reqwest.toQueryString=function(e,t){var n,r,i=t||!1,s=[],o=encodeURIComponent,u=function(e,t){t="function"==typeof t?t():t==null?"":t,s[s.length]=o(e)+"="+o(t)};if(isArray(e))for(r=0;e&&r<e.length;r++)u(e[r].name,e[r].value);else for(n in e)e.hasOwnProperty(n)&&buildParams(n,e[n],i,u);return s.join("&").replace(/%20/g,"+")},reqwest.getcallbackPrefix=function(){return callbackPrefix},reqwest.compat=function(e,t){return e&&(e.type&&(e.method=e.type)&&delete e.type,e.dataType&&(e.type=e.dataType),e.jsonpCallback&&(e.jsonpCallbackName=e.jsonpCallback)&&delete e.jsonpCallback,e.jsonp&&(e.jsonpCallback=e.jsonp)),new Reqwest(e,t)},reqwest.ajaxSetup=function(e){e=e||{};for(var t in e)globalSetupOptions[t]=e[t]},reqwest});

   // JavaScript Cookie v2.1.0
   // https://github.com/js-cookie/js-cookie
  !function(e){if("function"==typeof define&&define.amd)define(e);else if("object"==typeof exports)module.exports=e();else{var n=window.Cookies,t=window.Cookies=e();t.noConflict=function(){return window.Cookies=n,t}}}(function(){function e(){for(var e=0,n={};e<arguments.length;e++){var t=arguments[e];for(var o in t)n[o]=t[o]}return n}function n(t){function o(n,r,i){var c;if(arguments.length>1){if(i=e({path:"/"},o.defaults,i),"number"==typeof i.expires){var s=new Date;s.setMilliseconds(s.getMilliseconds()+864e5*i.expires),i.expires=s}try{c=JSON.stringify(r),/^[\{\[]/.test(c)&&(r=c)}catch(a){}return r=t.write?t.write(r,n):encodeURIComponent(String(r)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g,decodeURIComponent),n=encodeURIComponent(String(n)),n=n.replace(/%(23|24|26|2B|5E|60|7C)/g,decodeURIComponent),n=n.replace(/[\(\)]/g,escape),document.cookie=[n,"=",r,i.expires&&"; expires="+i.expires.toUTCString(),i.path&&"; path="+i.path,i.domain&&"; domain="+i.domain,i.secure?"; secure":""].join("")}n||(c={});for(var p=document.cookie?document.cookie.split("; "):[],d=/(%[0-9A-Z]{2})+/g,u=0;u<p.length;u++){var f=p[u].split("="),l=f[0].replace(d,decodeURIComponent),m=f.slice(1).join("=");'"'===m.charAt(0)&&(m=m.slice(1,-1));try{if(m=t.read?t.read(m,l):t(m,l)||m.replace(d,decodeURIComponent),this.json)try{m=JSON.parse(m)}catch(a){}if(n===l){c=m;break}n||(c[l]=m)}catch(a){}}return c}return o.get=o.set=o,o.getJSON=function(){return o.apply({json:!0},[].slice.call(arguments))},o.defaults={},o.remove=function(n,t){o(n,"",e(t,{expires:-1}))},o.withConverter=n,o}return n(function(){})});

  /**
   * Константы модуля
   */
  var VISITOR_COOKIE_NAME = 'visitor_uid';
  var STORAGE_KEY_PREFIX = 'amo_pixel_';
  var POST_MESSAGE_ID = 'pixel_tracker';

  var SITE_PROP_URL = 'url';
  var SITE_PROP_HOST = 'host';
  var SITE_PROP_FULL_SITE = 'full_site';

  var SITE_KEY_SEND_DATE = 'send_date'; // ключ настроек, в котором указывается дата последней отправки захода на URL
  var SEND_TIMEOUT = 60 * 1000; // таймаут отправки события о заходе на определенный URL // TODO: set 10 * 60 * 1000 after demo

  var SETTINGS_KEY_UPDATED = 'updated'; // ключ настроек, в котором указывается дата последнего обновления настроек пикселя
  var UPDATE_TIMEOUT = 60 * 1000; // таймаут обновления настроек пикселя // TODO: set 15 * 60 * 1000 after demo

  var IFRAME_PARAMS_KEYS = ['token', 'origin', 'host', 'url']; // обязательные ключи параметров iframe

  /**
   * Приватные методы модуля
   */
  var Fn = {};

  /**
   * Метод определяет наличие поддержки localStorage в браузере
   * @return {boolean}
   */
  Fn.supportsLocalStorage = function () {
    try {
      return 'localStorage' in window && window['localStorage'] !== null;
    } catch (e) {
      return false;
    }
  };

  /**
   * Получение значений GET-параметров из URL
   * @param {String} name
   * @param {String} [url]
   * @return {String|null}
   */
  Fn.getQueryParam = function (name, url) {
    url = url || window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&").toLowerCase();
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  };

  /**
   * @param {String} url
   * @return {String}
   */
  Fn.removeGetParamsFromUrl = function (url) {
    return url.replace(/\?.*/, '');
  };

  /**
   * @param {String} url
   * @return {String}
   */
  Fn.removeTrailingCharsFromUrl = function (url) {
    return url.replace(/[?#\/]+$/, '');
  };

  /**
   * @param {String} url
   * @return {String}
   */
  Fn.prepareUrlForCompare = function (url) {
    try {
      url = url.toLowerCase();
      url = url.replace(/^https?:\/\//, '');
      url = url.replace(/^www./, '');
      url = Fn.removeTrailingCharsFromUrl(url);
    } catch (e) {}
    return url || '';
  };

  /**
   * @return {String}
   */
  Fn.getLocationOrigin = function () {
    var origin = window.location.origin;

    if (!origin) {
      origin = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ':' + window.location.port : '');
    }

    return origin;
  };

  /**
   * APP constructor
   * @constructor
   */
  var App = function () {
    var params, can_send;

    if (!Fn.supportsLocalStorage()) {
      return;
    }

    params = Fn.getQueryParam('params');
    params = params ? JSON.parse(params) : false;

    for (var i = 0; i < IFRAME_PARAMS_KEYS.length; i++) {
      if (!params || !params.hasOwnProperty(IFRAME_PARAMS_KEYS[i])) {
        return;
      }
    }

    this.params = params;
    this.server_host = Fn.getLocationOrigin();
    this.storage = window.localStorage;
    this.visitor_uid = this.getVisitorUidFromCookie();
    can_send = !!this.visitor_uid; // Если у посетителя нет идентификатора, то отправлять просмотр страницы не нужно

    this.checkSettings(function () {
      this.sendDataToParentWindow();
      if (can_send) {
        this.handleSiteVisit();
      }
    });
  };

  /**
   * Получение идентификатора посетителя из текущего объекта
   * @return {String|null}
   */
  App.prototype.getVisitorUid = function () {
    return this.visitor_uid;
  };

  /**
   * Получение идентификатора посетителя из куки
   * @return {String|null}
   */
  App.prototype.getVisitorUidFromCookie = function () {
    return Cookies.get(VISITOR_COOKIE_NAME);
  };

  /**
   * Получение токена пикселя
   * @return {String}
   */
  App.prototype.getToken = function () {
    return this.params.token;
  };

  /**
   * Получение ключа localStorage, по которому будут храниться настройки пикселя
   * @param {string} token
   * @return {string}
   */
  App.prototype.getStorageKey = function (token) {
    return STORAGE_KEY_PREFIX + token;
  };

  /**
   * Проверка настроек пикселя
   * @param {Function} callback
   */
  App.prototype.checkSettings = function (callback) {
    var
      _this = this,
      now = Date.now(),
      need_cookie = false,
      need_sites = false,
      pixel_settings;

    if (!this.visitor_uid) {
      need_cookie = true;
    }

    pixel_settings = this.getSettings(this.getToken());

    if (
      !pixel_settings || !pixel_settings.sites ||
      !pixel_settings[SETTINGS_KEY_UPDATED] ||
      (now - pixel_settings[SETTINGS_KEY_UPDATED]) > UPDATE_TIMEOUT
    ) {
      need_sites = true;
    }

    if (need_cookie || need_sites) {
      this.updateSettings(need_sites ? {sites: 1} : {}, function () {
        callback.call(_this);
      });
    } else {
      callback.call(_this);
    }
  };

  /**
   * Запрос с сервера кук и настроек пикселя
   * @param {Object} params
   * @param {Function} callback
   */
  App.prototype.updateSettings = function (params, callback) {
    var _this = this;

    params = params || {};

    reqwest({
      url: _this.server_host + '/api/pixel/tracker/get_settings',
      method: 'get',
      data: {
        token: _this.getToken(),
        params: params
      },
      success: function (res) {
        if (!res || !res['response']) {
          return;
        }

        if (res['response']['visitor_uid']) {
          _this.visitor_uid = res['response']['visitor_uid'];
        }

        if (params['sites']) {
          if (!res['response']['sites']) {
            return;
          }
          var settings = {
            sites: res['response']['sites']
          };
          settings[SETTINGS_KEY_UPDATED] = Date.now();
          _this.saveSettings(_this.getToken(), settings);
        }

        callback();
      }
    });
  };

  /**
   * Получение настроек пикселя из localStorage
   * @param {String} token
   * @return {Object|boolean}
   */
  App.prototype.getSettings = function (token) {
    var settings = this.storage.getItem(this.getStorageKey(token));
    if (!settings || (typeof settings !== 'string')) {
      return false;
    }

    settings = JSON.parse(settings);
    if (!settings || !settings['sites']) {
      return false;
    }

    return settings;
  };

  /**
   * Сохранение настроек пикселя в localStorage
   * @param {String} token
   * @param {Object} settings
   */
  App.prototype.saveSettings = function (token, settings) {
    this.storage.setItem(this.getStorageKey(token), JSON.stringify(settings));
  };

  /**
   * Отправка данных в родительское окно через postMessage
   */
  App.prototype.sendDataToParentWindow = function () {
    if (typeof window['postMessage'] === 'function') {
      var data = {
        message_id: POST_MESSAGE_ID,
        visitor_uid: this.getVisitorUid()
      };
      window.top.postMessage(JSON.stringify(data), this.params['origin']);
    }
  };

  /**
   * Обработчик захода на сайт
   */
  App.prototype.handleSiteVisit = function () {
    var
      _this = this,
      now = Date.now(),
      settings = this.getSettings(this.getToken()),
      site,
      site_url,
      current_url,
      current_url_without_get;

    if (!settings || !settings.sites) {
      return;
    }
    if (!this.params['url']) {
      return;
    }

    current_url = Fn.prepareUrlForCompare(_this.params['url']);
    current_url_without_get = Fn.removeTrailingCharsFromUrl(Fn.removeGetParamsFromUrl(current_url));

    for (var index = 0; index < settings.sites.length; index++) {
      site = settings.sites[index];
      if (!site || !site[SITE_PROP_URL] || !site.hasOwnProperty(SITE_PROP_FULL_SITE)) {
        continue;
      }

      site_url = Fn.prepareUrlForCompare(site[SITE_PROP_URL]);

      if ((site[SITE_PROP_FULL_SITE] && site[SITE_PROP_HOST] === _this.params['host']) ||
        (!site[SITE_PROP_FULL_SITE] && site_url === current_url) ||
        (!site[SITE_PROP_FULL_SITE] && site_url === current_url_without_get)
      ) {
        if (!site[SITE_KEY_SEND_DATE] || ((now - site[SITE_KEY_SEND_DATE]) > SEND_TIMEOUT)) {
          _this.sendPageView(function () {
            //noinspection JSReferencingMutableVariableFromClosure
            site[SITE_KEY_SEND_DATE] = Date.now();
            _this.saveSettings(_this.getToken(), settings);
          });
        }
        break;
      }
    }
  };

  /**
   * Отправка события о просмотре страницы на наш сервер
   * @param {Function} callback
   */
  App.prototype.sendPageView = function (callback) {
    var _this = this;

    reqwest({
      url: _this.server_host + '/api/pixel/tracker/page_view?token=' + encodeURIComponent(_this.getToken()),
      method: 'post',
      data: {
        url: this.params.url
      },
      success: function (res) {
        if (res && res['response'] && res['response']['result']) {
          callback();
        }
      }
    });
  };

  new App();
}).call(window);
