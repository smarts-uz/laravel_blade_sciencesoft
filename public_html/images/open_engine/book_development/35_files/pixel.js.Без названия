(function () {
  'use strict';

  /**
   * Данный модуль собирает данные о текущей странице, а потом вставляет на страницу скрытый iframe,
   * в GET-параметры которого передает собранные данные.
   * Этот iframe загружается с нашего домена, поэтому внутри него мы можем читать куки, установленные в наш домен.
   * Скрипт внутри iframe проверяет наличие куки с идентификатором пользователя.
   * А также, скрипт проверяет наличие настроек отслеживаемых сайтов в localStorage.
   * Если нет куки или настроек, скрипт их запросит с сервера.
   * После получения идентификатора пользователя, скрипт внутри iframe отправит postMessage с этим идентификатором
   * в родительское окно (в окно, в котором загружен ДАННЫЙ js-файл).
   * Данный js-файл ловит postMessage, достает из него идентификатор посетителя и сохраняет его в локальную переменную.
   * Если в параметрах скрипта была указана callback-функция на загрузку данных (window.AMOPIXEL_PARAMS.onload),
   * то она будет вызвана и в нее будет передан текущий объект Пикселя первым параметром.
   * С помощью публичного метода "getVisitorUid" этого объекта можно получить идентификатор посетителя, присланный из iframe.
   */

  // JSON polyfill
  window.JSON||(window.JSON={parse:function(sJSON){return eval("("+sJSON+")")},stringify:function(r){if(r instanceof Object){var t="";if(r.constructor===Array){for(var n=0;n<r.length;t+=this.stringify(r[n])+",",n++);return"["+t.substr(0,t.length-1)+"]"}if(r.toString!==Object.prototype.toString)return'"'+r.toString().replace(/"/g,"\\$&")+'"';for(var i in r)t+='"'+i.replace(/"/g,"\\$&")+'":'+this.stringify(r[i])+",";return"{"+t.substr(0,t.length-1)+"}"}return"string"==typeof r?'"'+r.replace(/"/g,"\\$&")+'"':String(r)}});

  /**
   * Константы модуля
   */
  var PIXEL_JS_ID = 'amo_pixel_js';
  var IFRAME_PATH = '/pixel/html/tracker_iframe.html';
  var POST_MESSAGE_ID = 'pixel_tracker';

  /**
   * Приватные данные модуля
   */
  var Data = {
    base_host: '',
    token: '',
    visitor_uid: null,
    callbacks: {
      onload: function () {}
    }
  };

  /**
   * Приватные методы модуля
   */
  var Fn = {};

  /**
   * Метод вставляет iframe на страницу
   * @param {String} token
   * @param {String} base_host
   * @param {String} path
   */
  Fn.insertIframe = function (token, base_host, path) {
    var
      first = document.getElementsByTagName('script')[0],
      iframe = document.createElement('iframe'),
      data = {
        token: token,
        origin: location.origin,
        host: location.host,
        url: location.href
      };
    if(navigator){
      data.app = {
        version: navigator.appVersion,
        language:navigator.language,
        platform:navigator.platform,
        user_agent:navigator.userAgent,
        visitor_uid:Data.visitor_uid
      };
    }
    if(!path){
      path = IFRAME_PATH;
    }

    iframe.src = base_host + path + '?params=' + encodeURIComponent(JSON.stringify(data));
    iframe.setAttribute('style', 'display:none!important');
    first.parentNode.insertBefore(iframe, first);
  };

  /**
   * Обработчик событий postMessage, приходящих из iframe
   * @param {Object} event
   */
  Fn.handlePostMessage = function (event) {
    var data;

    if (event.origin !== Data.base_host || !event.data) {
      return;
    }

    data = JSON.parse(event.data);

    if ((typeof data !== 'object') || data.message_id !== POST_MESSAGE_ID || !data.visitor_uid) {
      return;
    }

    window.removeEventListener('message', Fn.handlePostMessage, false);

    Data.visitor_uid = data.visitor_uid;
    Data.callbacks.onload(window.AMOPIXEL);
  };

  /**
   * Конструктор объекта AMOPIXEL
   * @constructor
   */
  var Pixel = function () {
    var pixel_script, host;

    if (typeof window['amo_pixel_token'] !== 'string') {
      return;
    }

    Data.token = window['amo_pixel_token'];
    pixel_script = document.getElementById(PIXEL_JS_ID);

    if (!pixel_script || !pixel_script.src) {
      return;
    }

    host = pixel_script.src.match(/(http.+\.\w+)\//);

    if (!host || !host[1]) {
      return;
    }

    Data.base_host = host[1];

    if (typeof window['postMessage'] === 'function') {
      window.addEventListener('message', Fn.handlePostMessage, false);
    }

    if (typeof window['AMOPIXEL_PARAMS'] === 'object' && window['AMOPIXEL_PARAMS'] !== null) {
      if (typeof window['AMOPIXEL_PARAMS']['onload'] === 'function') {
        Data.callbacks.onload = window['AMOPIXEL_PARAMS']['onload'];
      }
    }

    Fn.insertIframe.call(this, Data.token, Data.base_host);
  };

  /**
   * Публичный метод получения идентификатора посетителя
   * @public
   * @return {String|null}
   */
  Pixel.prototype.getVisitorUid = function () {
    return Data.visitor_uid;
  };

  window.AMOPIXEL = new Pixel();
})();
