<?php

/* node_modules/lin3s-event-bus/dist/lin3s-event-bus.umd.js */
class __TwigTemplate_293fa813ab991d6936ef2bb4fc4de482f051155f19de4bb7fbade7bbe4b90db3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e1228f3279b42fd9535903bc10697b79a7c9cf444f04e19d53cd5a127e1c118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1228f3279b42fd9535903bc10697b79a7c9cf444f04e19d53cd5a127e1c118->enter($__internal_9e1228f3279b42fd9535903bc10697b79a7c9cf444f04e19d53cd5a127e1c118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-event-bus/dist/lin3s-event-bus.umd.js"));

        // line 1
        echo "(function(e, a) { for(var i in a) e[i] = a[i]; }(window, /******/ (function(modules) { // webpackBootstrap
/******/ \t// The module cache
/******/ \tvar installedModules = {};
/******/
/******/ \t// The require function
/******/ \tfunction __webpack_require__(moduleId) {
/******/
/******/ \t\t// Check if module is in cache
/******/ \t\tif(installedModules[moduleId])
/******/ \t\t\treturn installedModules[moduleId].exports;
/******/
/******/ \t\t// Create a new module (and put it into the cache)
/******/ \t\tvar module = installedModules[moduleId] = {
/******/ \t\t\ti: moduleId,
/******/ \t\t\tl: false,
/******/ \t\t\texports: {}
/******/ \t\t};
/******/
/******/ \t\t// Execute the module function
/******/ \t\tmodules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ \t\t// Flag the module as loaded
/******/ \t\tmodule.l = true;
/******/
/******/ \t\t// Return the exports of the module
/******/ \t\treturn module.exports;
/******/ \t}
/******/
/******/
/******/ \t// expose the modules object (__webpack_modules__)
/******/ \t__webpack_require__.m = modules;
/******/
/******/ \t// expose the module cache
/******/ \t__webpack_require__.c = installedModules;
/******/
/******/ \t// identity function for calling harmony imports with the correct context
/******/ \t__webpack_require__.i = function(value) { return value; };
/******/
/******/ \t// define getter function for harmony exports
/******/ \t__webpack_require__.d = function(exports, name, getter) {
/******/ \t\tif(!__webpack_require__.o(exports, name)) {
/******/ \t\t\tObject.defineProperty(exports, name, {
/******/ \t\t\t\tconfigurable: false,
/******/ \t\t\t\tenumerable: true,
/******/ \t\t\t\tget: getter
/******/ \t\t\t});
/******/ \t\t}
/******/ \t};
/******/
/******/ \t// getDefaultExport function for compatibility with non-harmony modules
/******/ \t__webpack_require__.n = function(module) {
/******/ \t\tvar getter = module && module.__esModule ?
/******/ \t\t\tfunction getDefault() { return module['default']; } :
/******/ \t\t\tfunction getModuleExports() { return module; };
/******/ \t\t__webpack_require__.d(getter, 'a', getter);
/******/ \t\treturn getter;
/******/ \t};
/******/
/******/ \t// Object.prototype.hasOwnProperty.call
/******/ \t__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ \t// __webpack_public_path__
/******/ \t__webpack_require__.p = \"\";
/******/
/******/ \t// Load entry module and return exports
/******/ \treturn __webpack_require__(__webpack_require__.s = 19);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var Event = function () {
  function Event(aName) {
    _classCallCheck(this, Event);

    this.name = aName;
  }

  _createClass(Event, [{
    key: 'getName',
    value: function getName() {
      return this.name;
    }
  }]);

  return Event;
}();

exports.default = Event;

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _Priority = __webpack_require__(3);

var _Priority2 = _interopRequireDefault(_Priority);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var EventSubscriber = function () {
  function EventSubscriber(aCallback) {
    var priority = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : new _Priority2.default();

    _classCallCheck(this, EventSubscriber);

    if (this.constructor.name === 'EventSubscriber') {
      throw new TypeError('Abstract class EventSubscriber cannot be instantiated directly.');
    }

    this.callback = aCallback;
    this.priority = priority;
  }

  _createClass(EventSubscriber, [{
    key: 'handle',
    value: function handle(anEvent) {
      if (!this.isSubscribedTo(anEvent)) {
        return;
      }

      return this.callback(anEvent);
    }
  }, {
    key: 'isSubscribedTo',
    value: function isSubscribedTo(anEvent) {
      throw new TypeError('In order to extend EventSubscriber class you must implement isSubscribedTo method.');
    }
  }]);

  return EventSubscriber;
}();

exports.default = EventSubscriber;

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _PriorityQueue = __webpack_require__(15);

var _PriorityQueue2 = _interopRequireDefault(_PriorityQueue);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var EventPublisher = function () {
  function EventPublisher() {
    _classCallCheck(this, EventPublisher);

    this.subscribers = new _PriorityQueue2.default();
  }

  _createClass(EventPublisher, [{
    key: 'subscribe',
    value: function subscribe(aSubscriber) {
      this.subscribers.push(aSubscriber);
    }
  }, {
    key: 'unsubscribe',
    value: function unsubscribe(aSubscriber) {
      this.subscribers.remove(aSubscriber);
    }
  }, {
    key: 'publish',
    value: function publish(anEvent) {
      var subscribers = this.subscribers.getSubscribers();
      subscribers.forEach(function (subscriber) {
        subscriber.handle(anEvent);
      });
    }
  }]);

  return EventPublisher;
}();

var instance = new EventPublisher();

exports.default = instance;

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var Priority = function Priority() {
  var priority = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;

  _classCallCheck(this, Priority);

  if (!(typeof priority === \"number\" && isFinite(priority) && Math.floor(priority) === priority && priority >= 0)) {
    throw new TypeError('Priority must be a positive integer.');
  }

  var privatePriority = priority;

  this.getPriority = function () {
    return privatePriority;
  };
};

exports.default = Priority;

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});
var EventTypes = {
  DOM_READY: 'DOM_READY',
  DOM_LOADED: 'DOM_LOADED',
  NODE_ADDED: 'NODE_ADDED',
  WINDOW_RESIZED: 'WINDOW_RESIZED'
};

exports.default = EventTypes;

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _Event2 = __webpack_require__(0);

var _Event3 = _interopRequireDefault(_Event2);

var _EventTypes = __webpack_require__(4);

var _EventTypes2 = _interopRequireDefault(_EventTypes);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var NodeAddedEvent = function (_Event) {
  _inherits(NodeAddedEvent, _Event);

  function NodeAddedEvent(nodes, domSelectorClassName) {
    _classCallCheck(this, NodeAddedEvent);

    var _this = _possibleConstructorReturn(this, (NodeAddedEvent.__proto__ || Object.getPrototypeOf(NodeAddedEvent)).call(this, _EventTypes2.default.NODE_ADDED));

    _this.nodes = nodes;
    _this.domSelectorClassName = domSelectorClassName;
    return _this;
  }

  return NodeAddedEvent;
}(_Event3.default);

exports.default = NodeAddedEvent;

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _Event2 = __webpack_require__(0);

var _Event3 = _interopRequireDefault(_Event2);

var _EventTypes = __webpack_require__(4);

var _EventTypes2 = _interopRequireDefault(_EventTypes);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var DOMLoadedEvent = function (_Event) {
  _inherits(DOMLoadedEvent, _Event);

  function DOMLoadedEvent() {
    _classCallCheck(this, DOMLoadedEvent);

    return _possibleConstructorReturn(this, (DOMLoadedEvent.__proto__ || Object.getPrototypeOf(DOMLoadedEvent)).call(this, _EventTypes2.default.DOM_LOADED));
  }

  return DOMLoadedEvent;
}(_Event3.default);

exports.default = DOMLoadedEvent;

/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _Event2 = __webpack_require__(0);

var _Event3 = _interopRequireDefault(_Event2);

var _EventTypes = __webpack_require__(4);

var _EventTypes2 = _interopRequireDefault(_EventTypes);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var DOMReadyEvent = function (_Event) {
  _inherits(DOMReadyEvent, _Event);

  function DOMReadyEvent() {
    _classCallCheck(this, DOMReadyEvent);

    return _possibleConstructorReturn(this, (DOMReadyEvent.__proto__ || Object.getPrototypeOf(DOMReadyEvent)).call(this, _EventTypes2.default.DOM_READY));
  }

  return DOMReadyEvent;
}(_Event3.default);

exports.default = DOMReadyEvent;

/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _Event2 = __webpack_require__(0);

var _Event3 = _interopRequireDefault(_Event2);

var _EventTypes = __webpack_require__(4);

var _EventTypes2 = _interopRequireDefault(_EventTypes);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var WindowResizedEvent = function (_Event) {
  _inherits(WindowResizedEvent, _Event);

  function WindowResizedEvent(windowHeight, windowWidth) {
    _classCallCheck(this, WindowResizedEvent);

    var _this = _possibleConstructorReturn(this, (WindowResizedEvent.__proto__ || Object.getPrototypeOf(WindowResizedEvent)).call(this, _EventTypes2.default.WINDOW_RESIZED));

    _this.windowHeight = windowHeight;
    _this.windowWidth = windowWidth;
    return _this;
  }

  return WindowResizedEvent;
}(_Event3.default);

exports.default = WindowResizedEvent;

/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _NodeAddedEvent = __webpack_require__(5);

var _NodeAddedEvent2 = _interopRequireDefault(_NodeAddedEvent);

var _NodeAddedEventSubscriber = __webpack_require__(12);

var _NodeAddedEventSubscriber2 = _interopRequireDefault(_NodeAddedEventSubscriber);

var _EventPublisher = __webpack_require__(2);

var _EventPublisher2 = _interopRequireDefault(_EventPublisher);

var _Priority = __webpack_require__(3);

var _Priority2 = _interopRequireDefault(_Priority);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var NodeAddedObserver = function () {
  function NodeAddedObserver() {
    _classCallCheck(this, NodeAddedObserver);

    this.subscribersSelectorClassNames = [];
    this.isMutationObserverInitialized = false;
  }

  _createClass(NodeAddedObserver, [{
    key: 'initMutationObserver',
    value: function initMutationObserver() {
      var targetNode = document.body,
          observerConfig = {
        childList: true,
        subtree: true
      };

      var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
      this.mutationObserver = new MutationObserver(this.onNodeMutated.bind(this));
      this.mutationObserver.observe(targetNode, observerConfig);

      this.isMutationObserverInitialized = true;
    }
  }, {
    key: 'subscribe',
    value: function subscribe(selectorClassName, onNodeAddedCallback, priority) {
      if (this.subscribersSelectorClassNames.find(function (subscriberSelectorClassName) {
        return subscriberSelectorClassName === selectorClassName;
      }) !== undefined) {
        return;
      }

      this.subscribersSelectorClassNames.push(selectorClassName);

      _EventPublisher2.default.subscribe(new _NodeAddedEventSubscriber2.default(onNodeAddedCallback, new _Priority2.default(priority), selectorClassName));

      if (this.isMutationObserverInitialized) {
        return;
      }

      this.initMutationObserver();
    }
  }, {
    key: 'onNodeMutated',
    value: function onNodeMutated(mutations) {
      var _this = this;

      mutations.forEach(function (mutation) {
        return Array.from(mutation.addedNodes).forEach(function (node) {
          var matchedNodesByClassName = _this.getMatchedNodesByClassName(node),
              matchedClassNames = Object.keys(matchedNodesByClassName);

          if (matchedClassNames.length === 0) {
            return;
          }

          matchedClassNames.forEach(function (className) {
            return _EventPublisher2.default.publish(new _NodeAddedEvent2.default(matchedNodesByClassName[className], className));
          });
        });
      });
    }
  }, {
    key: 'getMatchedNodesByClassName',
    value: function getMatchedNodesByClassName(rootNode) {
      var _this2 = this;

      var matchedNodesByClassName = {};

      var getMatchedNodesBySelectorClassName = function getMatchedNodesBySelectorClassName(rootNode) {
        _this2.subscribersSelectorClassNames.forEach(function (selectorClassName) {
          if (rootNode.classList !== undefined && rootNode.classList.contains(selectorClassName)) {
            matchedNodesByClassName[selectorClassName] = matchedNodesByClassName[selectorClassName] !== undefined ? matchedNodesByClassName[selectorClassName].concat(rootNode) : [rootNode];
          }
        });

        Array.from(rootNode.childNodes).forEach(function (node) {
          return getMatchedNodesBySelectorClassName(node);
        });
      };

      getMatchedNodesBySelectorClassName(rootNode);
      return matchedNodesByClassName;
    }
  }]);

  return NodeAddedObserver;
}();

var instance = new NodeAddedObserver();

exports.default = instance;

/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});
exports.listenWindowResized = exports.listenDomLoaded = exports.listenDomReady = undefined;

var _EventPublisher = __webpack_require__(2);

var _EventPublisher2 = _interopRequireDefault(_EventPublisher);

var _DOMReadyEvent = __webpack_require__(7);

var _DOMReadyEvent2 = _interopRequireDefault(_DOMReadyEvent);

var _DOMLoadedEvent = __webpack_require__(6);

var _DOMLoadedEvent2 = _interopRequireDefault(_DOMLoadedEvent);

var _WindowResizedEvent = __webpack_require__(8);

var _WindowResizedEvent2 = _interopRequireDefault(_WindowResizedEvent);

var _lodash = __webpack_require__(17);

var _lodash2 = _interopRequireDefault(_lodash);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var listenDomReady = function listenDomReady() {
  document.addEventListener('DOMContentLoaded', function () {
    _EventPublisher2.default.publish(new _DOMReadyEvent2.default());
  });
};

var listenDomLoaded = function listenDomLoaded() {
  window.addEventListener('load', function () {
    _EventPublisher2.default.publish(new _DOMLoadedEvent2.default());
  });
};

var listenWindowResized = function listenWindowResized() {
  var debounceDelay = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 200;

  window.addEventListener('resize', (0, _lodash2.default)(function () {
    _EventPublisher2.default.publish(new _WindowResizedEvent2.default(window.innerHeight, window.innerWidth));
  }, debounceDelay));
};

exports.listenDomReady = listenDomReady;
exports.listenDomLoaded = listenDomLoaded;
exports.listenWindowResized = listenWindowResized;

/***/ }),
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});
exports.onWindowResized = exports.onDomLoaded = exports.onDomReady = undefined;

var _EventPublisher = __webpack_require__(2);

var _EventPublisher2 = _interopRequireDefault(_EventPublisher);

var _DOMReadyEventSubscriber = __webpack_require__(14);

var _DOMReadyEventSubscriber2 = _interopRequireDefault(_DOMReadyEventSubscriber);

var _DOMLoadedEventSubscriber = __webpack_require__(13);

var _DOMLoadedEventSubscriber2 = _interopRequireDefault(_DOMLoadedEventSubscriber);

var _WindowResizedEventSubscriber = __webpack_require__(16);

var _WindowResizedEventSubscriber2 = _interopRequireDefault(_WindowResizedEventSubscriber);

var _Priority = __webpack_require__(3);

var _Priority2 = _interopRequireDefault(_Priority);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var onDomReady = function onDomReady(onReadyCallback, priority) {
  var domReadyEventSubscriber = new _DOMReadyEventSubscriber2.default(onReadyCallback, new _Priority2.default(priority));

  _EventPublisher2.default.subscribe(domReadyEventSubscriber);

  return domReadyEventSubscriber;
};

var onDomLoaded = function onDomLoaded(onLoadedCallback, priority) {
  var domLoadedEventSubscriber = new _DOMLoadedEventSubscriber2.default(onLoadedCallback, new _Priority2.default(priority));

  _EventPublisher2.default.subscribe(domLoadedEventSubscriber);

  return domLoadedEventSubscriber;
};

var onWindowResized = function onWindowResized(onWindowResizedCallback, priority) {
  var windowResizedEventSubscriber = new _WindowResizedEventSubscriber2.default(onWindowResizedCallback, new _Priority2.default(priority));

  _EventPublisher2.default.subscribe(windowResizedEventSubscriber);

  return windowResizedEventSubscriber;
};

exports.onDomReady = onDomReady;
exports.onDomLoaded = onDomLoaded;
exports.onWindowResized = onWindowResized;

/***/ }),
/* 12 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _EventSubscriber2 = __webpack_require__(1);

var _EventSubscriber3 = _interopRequireDefault(_EventSubscriber2);

var _NodeAddedEvent = __webpack_require__(5);

var _NodeAddedEvent2 = _interopRequireDefault(_NodeAddedEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var NodeAddedEventSubscriber = function (_EventSubscriber) {
  _inherits(NodeAddedEventSubscriber, _EventSubscriber);

  function NodeAddedEventSubscriber(aCallback, aPriority, domSelectorClassName) {
    _classCallCheck(this, NodeAddedEventSubscriber);

    var _this = _possibleConstructorReturn(this, (NodeAddedEventSubscriber.__proto__ || Object.getPrototypeOf(NodeAddedEventSubscriber)).call(this, aCallback, aPriority));

    _this.domSelectorClassName = domSelectorClassName;
    return _this;
  }

  _createClass(NodeAddedEventSubscriber, [{
    key: 'isSubscribedTo',
    value: function isSubscribedTo(anEvent) {
      var event = new _NodeAddedEvent2.default();

      return anEvent.getName() === event.getName() && this.domSelectorClassName === anEvent.domSelectorClassName;
    }
  }]);

  return NodeAddedEventSubscriber;
}(_EventSubscriber3.default);

exports.default = NodeAddedEventSubscriber;

/***/ }),
/* 13 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _EventSubscriber2 = __webpack_require__(1);

var _EventSubscriber3 = _interopRequireDefault(_EventSubscriber2);

var _DOMLoadedEvent = __webpack_require__(6);

var _DOMLoadedEvent2 = _interopRequireDefault(_DOMLoadedEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var DOMLoadedEventSubscriber = function (_EventSubscriber) {
  _inherits(DOMLoadedEventSubscriber, _EventSubscriber);

  function DOMLoadedEventSubscriber(aCallback, aPriority) {
    _classCallCheck(this, DOMLoadedEventSubscriber);

    return _possibleConstructorReturn(this, (DOMLoadedEventSubscriber.__proto__ || Object.getPrototypeOf(DOMLoadedEventSubscriber)).call(this, aCallback, aPriority));
  }

  _createClass(DOMLoadedEventSubscriber, [{
    key: 'isSubscribedTo',
    value: function isSubscribedTo(anEvent) {
      var event = new _DOMLoadedEvent2.default();

      return anEvent.getName() === event.getName();
    }
  }]);

  return DOMLoadedEventSubscriber;
}(_EventSubscriber3.default);

exports.default = DOMLoadedEventSubscriber;

/***/ }),
/* 14 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _EventSubscriber2 = __webpack_require__(1);

var _EventSubscriber3 = _interopRequireDefault(_EventSubscriber2);

var _DOMReadyEvent = __webpack_require__(7);

var _DOMReadyEvent2 = _interopRequireDefault(_DOMReadyEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var DOMReadyEventSubscriber = function (_EventSubscriber) {
  _inherits(DOMReadyEventSubscriber, _EventSubscriber);

  function DOMReadyEventSubscriber(aCallback, aPriority) {
    _classCallCheck(this, DOMReadyEventSubscriber);

    return _possibleConstructorReturn(this, (DOMReadyEventSubscriber.__proto__ || Object.getPrototypeOf(DOMReadyEventSubscriber)).call(this, aCallback, aPriority));
  }

  _createClass(DOMReadyEventSubscriber, [{
    key: 'isSubscribedTo',
    value: function isSubscribedTo(anEvent) {
      var event = new _DOMReadyEvent2.default();

      return anEvent.getName() === event.getName();
    }
  }]);

  return DOMReadyEventSubscriber;
}(_EventSubscriber3.default);

exports.default = DOMReadyEventSubscriber;

/***/ }),
/* 15 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var PriorityQueue = function PriorityQueue() {
  var _this = this;

  _classCallCheck(this, PriorityQueue);

  var queue = [];

  this.isSorted = true;

  this.sort = function () {
    queue.sort(function (aSubscriber, anotherSubscriber) {
      return anotherSubscriber.priority.getPriority() - aSubscriber.priority.getPriority();
    });

    _this.isSorted = true;
  };

  this.push = function (aSubscriber) {
    _this.isSorted = false;
    queue.push(aSubscriber);
  };

  this.remove = function (aSubscriber) {
    var aSubscriberIndex = queue.indexOf(aSubscriber);
    if (aSubscriberIndex < 0) {
      return;
    }

    _this.isSorted = false;
    queue.splice(aSubscriberIndex, 1);
  };

  this.getSubscribers = function () {
    if (!_this.isSorted) {
      _this.sort();
    }

    return queue;
  };
};

exports.default = PriorityQueue;

/***/ }),
/* 16 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _EventSubscriber2 = __webpack_require__(1);

var _EventSubscriber3 = _interopRequireDefault(_EventSubscriber2);

var _WindowResizedEvent = __webpack_require__(8);

var _WindowResizedEvent2 = _interopRequireDefault(_WindowResizedEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var WindowResizedEventSubscriber = function (_EventSubscriber) {
  _inherits(WindowResizedEventSubscriber, _EventSubscriber);

  function WindowResizedEventSubscriber(aCallback, aPriority) {
    _classCallCheck(this, WindowResizedEventSubscriber);

    return _possibleConstructorReturn(this, (WindowResizedEventSubscriber.__proto__ || Object.getPrototypeOf(WindowResizedEventSubscriber)).call(this, aCallback, aPriority));
  }

  _createClass(WindowResizedEventSubscriber, [{
    key: 'isSubscribedTo',
    value: function isSubscribedTo(anEvent) {
      var event = new _WindowResizedEvent2.default();

      return anEvent.getName() === event.getName();
    }
  }]);

  return WindowResizedEventSubscriber;
}(_EventSubscriber3.default);

exports.default = WindowResizedEventSubscriber;

/***/ }),
/* 17 */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global) {/**
 * lodash (Custom Build) <https://lodash.com/>
 * Build: `lodash modularize exports=\"npm\" -o ./`
 * Copyright jQuery Foundation and other contributors <https://jquery.org/>
 * Released under MIT license <https://lodash.com/license>
 * Based on Underscore.js 1.8.3 <http://underscorejs.org/LICENSE>
 * Copyright Jeremy Ashkenas, DocumentCloud and Investigative Reporters & Editors
 */

/** Used as the `TypeError` message for \"Functions\" methods. */
var FUNC_ERROR_TEXT = 'Expected a function';

/** Used as references for various `Number` constants. */
var NAN = 0 / 0;

/** `Object#toString` result references. */
var symbolTag = '[object Symbol]';

/** Used to match leading and trailing whitespace. */
var reTrim = /^\\s+|\\s+\$/g;

/** Used to detect bad signed hexadecimal string values. */
var reIsBadHex = /^[-+]0x[0-9a-f]+\$/i;

/** Used to detect binary string values. */
var reIsBinary = /^0b[01]+\$/i;

/** Used to detect octal string values. */
var reIsOctal = /^0o[0-7]+\$/i;

/** Built-in method references without a dependency on `root`. */
var freeParseInt = parseInt;

/** Detect free variable `global` from Node.js. */
var freeGlobal = typeof global == 'object' && global && global.Object === Object && global;

/** Detect free variable `self`. */
var freeSelf = typeof self == 'object' && self && self.Object === Object && self;

/** Used as a reference to the global object. */
var root = freeGlobal || freeSelf || Function('return this')();

/** Used for built-in method references. */
var objectProto = Object.prototype;

/**
 * Used to resolve the
 * [`toStringTag`](http://ecma-international.org/ecma-262/7.0/#sec-object.prototype.tostring)
 * of values.
 */
var objectToString = objectProto.toString;

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeMax = Math.max,
    nativeMin = Math.min;

/**
 * Gets the timestamp of the number of milliseconds that have elapsed since
 * the Unix epoch (1 January 1970 00:00:00 UTC).
 *
 * @static
 * @memberOf _
 * @since 2.4.0
 * @category Date
 * @returns {number} Returns the timestamp.
 * @example
 *
 * _.defer(function(stamp) {
 *   console.log(_.now() - stamp);
 * }, _.now());
 * // => Logs the number of milliseconds it took for the deferred invocation.
 */
var now = function() {
  return root.Date.now();
};

/**
 * Creates a debounced function that delays invoking `func` until after `wait`
 * milliseconds have elapsed since the last time the debounced function was
 * invoked. The debounced function comes with a `cancel` method to cancel
 * delayed `func` invocations and a `flush` method to immediately invoke them.
 * Provide `options` to indicate whether `func` should be invoked on the
 * leading and/or trailing edge of the `wait` timeout. The `func` is invoked
 * with the last arguments provided to the debounced function. Subsequent
 * calls to the debounced function return the result of the last `func`
 * invocation.
 *
 * **Note:** If `leading` and `trailing` options are `true`, `func` is
 * invoked on the trailing edge of the timeout only if the debounced function
 * is invoked more than once during the `wait` timeout.
 *
 * If `wait` is `0` and `leading` is `false`, `func` invocation is deferred
 * until to the next tick, similar to `setTimeout` with a timeout of `0`.
 *
 * See [David Corbacho's article](https://css-tricks.com/debouncing-throttling-explained-examples/)
 * for details over the differences between `_.debounce` and `_.throttle`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Function
 * @param {Function} func The function to debounce.
 * @param {number} [wait=0] The number of milliseconds to delay.
 * @param {Object} [options={}] The options object.
 * @param {boolean} [options.leading=false]
 *  Specify invoking on the leading edge of the timeout.
 * @param {number} [options.maxWait]
 *  The maximum time `func` is allowed to be delayed before it's invoked.
 * @param {boolean} [options.trailing=true]
 *  Specify invoking on the trailing edge of the timeout.
 * @returns {Function} Returns the new debounced function.
 * @example
 *
 * // Avoid costly calculations while the window size is in flux.
 * jQuery(window).on('resize', _.debounce(calculateLayout, 150));
 *
 * // Invoke `sendMail` when clicked, debouncing subsequent calls.
 * jQuery(element).on('click', _.debounce(sendMail, 300, {
 *   'leading': true,
 *   'trailing': false
 * }));
 *
 * // Ensure `batchLog` is invoked once after 1 second of debounced calls.
 * var debounced = _.debounce(batchLog, 250, { 'maxWait': 1000 });
 * var source = new EventSource('/stream');
 * jQuery(source).on('message', debounced);
 *
 * // Cancel the trailing debounced invocation.
 * jQuery(window).on('popstate', debounced.cancel);
 */
function debounce(func, wait, options) {
  var lastArgs,
      lastThis,
      maxWait,
      result,
      timerId,
      lastCallTime,
      lastInvokeTime = 0,
      leading = false,
      maxing = false,
      trailing = true;

  if (typeof func != 'function') {
    throw new TypeError(FUNC_ERROR_TEXT);
  }
  wait = toNumber(wait) || 0;
  if (isObject(options)) {
    leading = !!options.leading;
    maxing = 'maxWait' in options;
    maxWait = maxing ? nativeMax(toNumber(options.maxWait) || 0, wait) : maxWait;
    trailing = 'trailing' in options ? !!options.trailing : trailing;
  }

  function invokeFunc(time) {
    var args = lastArgs,
        thisArg = lastThis;

    lastArgs = lastThis = undefined;
    lastInvokeTime = time;
    result = func.apply(thisArg, args);
    return result;
  }

  function leadingEdge(time) {
    // Reset any `maxWait` timer.
    lastInvokeTime = time;
    // Start the timer for the trailing edge.
    timerId = setTimeout(timerExpired, wait);
    // Invoke the leading edge.
    return leading ? invokeFunc(time) : result;
  }

  function remainingWait(time) {
    var timeSinceLastCall = time - lastCallTime,
        timeSinceLastInvoke = time - lastInvokeTime,
        result = wait - timeSinceLastCall;

    return maxing ? nativeMin(result, maxWait - timeSinceLastInvoke) : result;
  }

  function shouldInvoke(time) {
    var timeSinceLastCall = time - lastCallTime,
        timeSinceLastInvoke = time - lastInvokeTime;

    // Either this is the first call, activity has stopped and we're at the
    // trailing edge, the system time has gone backwards and we're treating
    // it as the trailing edge, or we've hit the `maxWait` limit.
    return (lastCallTime === undefined || (timeSinceLastCall >= wait) ||
      (timeSinceLastCall < 0) || (maxing && timeSinceLastInvoke >= maxWait));
  }

  function timerExpired() {
    var time = now();
    if (shouldInvoke(time)) {
      return trailingEdge(time);
    }
    // Restart the timer.
    timerId = setTimeout(timerExpired, remainingWait(time));
  }

  function trailingEdge(time) {
    timerId = undefined;

    // Only invoke if we have `lastArgs` which means `func` has been
    // debounced at least once.
    if (trailing && lastArgs) {
      return invokeFunc(time);
    }
    lastArgs = lastThis = undefined;
    return result;
  }

  function cancel() {
    if (timerId !== undefined) {
      clearTimeout(timerId);
    }
    lastInvokeTime = 0;
    lastArgs = lastCallTime = lastThis = timerId = undefined;
  }

  function flush() {
    return timerId === undefined ? result : trailingEdge(now());
  }

  function debounced() {
    var time = now(),
        isInvoking = shouldInvoke(time);

    lastArgs = arguments;
    lastThis = this;
    lastCallTime = time;

    if (isInvoking) {
      if (timerId === undefined) {
        return leadingEdge(lastCallTime);
      }
      if (maxing) {
        // Handle invocations in a tight loop.
        timerId = setTimeout(timerExpired, wait);
        return invokeFunc(lastCallTime);
      }
    }
    if (timerId === undefined) {
      timerId = setTimeout(timerExpired, wait);
    }
    return result;
  }
  debounced.cancel = cancel;
  debounced.flush = flush;
  return debounced;
}

/**
 * Checks if `value` is the
 * [language type](http://www.ecma-international.org/ecma-262/7.0/#sec-ecmascript-language-types)
 * of `Object`. (e.g. arrays, functions, objects, regexes, `new Number(0)`, and `new String('')`)
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an object, else `false`.
 * @example
 *
 * _.isObject({});
 * // => true
 *
 * _.isObject([1, 2, 3]);
 * // => true
 *
 * _.isObject(_.noop);
 * // => true
 *
 * _.isObject(null);
 * // => false
 */
function isObject(value) {
  var type = typeof value;
  return !!value && (type == 'object' || type == 'function');
}

/**
 * Checks if `value` is object-like. A value is object-like if it's not `null`
 * and has a `typeof` result of \"object\".
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is object-like, else `false`.
 * @example
 *
 * _.isObjectLike({});
 * // => true
 *
 * _.isObjectLike([1, 2, 3]);
 * // => true
 *
 * _.isObjectLike(_.noop);
 * // => false
 *
 * _.isObjectLike(null);
 * // => false
 */
function isObjectLike(value) {
  return !!value && typeof value == 'object';
}

/**
 * Checks if `value` is classified as a `Symbol` primitive or object.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a symbol, else `false`.
 * @example
 *
 * _.isSymbol(Symbol.iterator);
 * // => true
 *
 * _.isSymbol('abc');
 * // => false
 */
function isSymbol(value) {
  return typeof value == 'symbol' ||
    (isObjectLike(value) && objectToString.call(value) == symbolTag);
}

/**
 * Converts `value` to a number.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to process.
 * @returns {number} Returns the number.
 * @example
 *
 * _.toNumber(3.2);
 * // => 3.2
 *
 * _.toNumber(Number.MIN_VALUE);
 * // => 5e-324
 *
 * _.toNumber(Infinity);
 * // => Infinity
 *
 * _.toNumber('3.2');
 * // => 3.2
 */
function toNumber(value) {
  if (typeof value == 'number') {
    return value;
  }
  if (isSymbol(value)) {
    return NAN;
  }
  if (isObject(value)) {
    var other = typeof value.valueOf == 'function' ? value.valueOf() : value;
    value = isObject(other) ? (other + '') : other;
  }
  if (typeof value != 'string') {
    return value === 0 ? value : +value;
  }
  value = value.replace(reTrim, '');
  var isBinary = reIsBinary.test(value);
  return (isBinary || reIsOctal.test(value))
    ? freeParseInt(value.slice(2), isBinary ? 2 : 8)
    : (reIsBadHex.test(value) ? NAN : +value);
}

module.exports = debounce;

/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(18)))

/***/ }),
/* 18 */
/***/ (function(module, exports) {

var g;

// This works in non-strict mode
g = (function() {
\treturn this;
})();

try {
\t// This works if eval is allowed (see CSP)
\tg = g || Function(\"return this\")() || (1,eval)(\"this\");
} catch(e) {
\t// This works if the window reference is available
\tif(typeof window === \"object\")
\t\tg = window;
}

// g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}

module.exports = g;


/***/ }),
/* 19 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});
exports.onWindowResized = exports.onDomLoaded = exports.onDomReady = exports.NodeAddedObserver = exports.Priority = exports.EventSubscriber = exports.EventPublisher = exports.Event = undefined;

var _Event = __webpack_require__(0);

var _Event2 = _interopRequireDefault(_Event);

var _EventPublisher = __webpack_require__(2);

var _EventPublisher2 = _interopRequireDefault(_EventPublisher);

var _EventSubscriber = __webpack_require__(1);

var _EventSubscriber2 = _interopRequireDefault(_EventSubscriber);

var _Priority = __webpack_require__(3);

var _Priority2 = _interopRequireDefault(_Priority);

var _NodeAddedObserver = __webpack_require__(9);

var _NodeAddedObserver2 = _interopRequireDefault(_NodeAddedObserver);

var _DOMEventSubscriptions = __webpack_require__(11);

var _DOMEventPublishers = __webpack_require__(10);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(0, _DOMEventPublishers.listenDomReady)();
(0, _DOMEventPublishers.listenDomLoaded)();
(0, _DOMEventPublishers.listenWindowResized)();

exports.Event = _Event2.default;
exports.EventPublisher = _EventPublisher2.default;
exports.EventSubscriber = _EventSubscriber2.default;
exports.Priority = _Priority2.default;
exports.NodeAddedObserver = _NodeAddedObserver2.default;
exports.onDomReady = _DOMEventSubscriptions.onDomReady;
exports.onDomLoaded = _DOMEventSubscriptions.onDomLoaded;
exports.onWindowResized = _DOMEventSubscriptions.onWindowResized;

/***/ })
/******/ ])));
//# sourceMappingURL=lin3s-event-bus.umd.js.map";
        
        $__internal_9e1228f3279b42fd9535903bc10697b79a7c9cf444f04e19d53cd5a127e1c118->leave($__internal_9e1228f3279b42fd9535903bc10697b79a7c9cf444f04e19d53cd5a127e1c118_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-event-bus/dist/lin3s-event-bus.umd.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("(function(e, a) { for(var i in a) e[i] = a[i]; }(window, /******/ (function(modules) { // webpackBootstrap
/******/ \t// The module cache
/******/ \tvar installedModules = {};
/******/
/******/ \t// The require function
/******/ \tfunction __webpack_require__(moduleId) {
/******/
/******/ \t\t// Check if module is in cache
/******/ \t\tif(installedModules[moduleId])
/******/ \t\t\treturn installedModules[moduleId].exports;
/******/
/******/ \t\t// Create a new module (and put it into the cache)
/******/ \t\tvar module = installedModules[moduleId] = {
/******/ \t\t\ti: moduleId,
/******/ \t\t\tl: false,
/******/ \t\t\texports: {}
/******/ \t\t};
/******/
/******/ \t\t// Execute the module function
/******/ \t\tmodules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ \t\t// Flag the module as loaded
/******/ \t\tmodule.l = true;
/******/
/******/ \t\t// Return the exports of the module
/******/ \t\treturn module.exports;
/******/ \t}
/******/
/******/
/******/ \t// expose the modules object (__webpack_modules__)
/******/ \t__webpack_require__.m = modules;
/******/
/******/ \t// expose the module cache
/******/ \t__webpack_require__.c = installedModules;
/******/
/******/ \t// identity function for calling harmony imports with the correct context
/******/ \t__webpack_require__.i = function(value) { return value; };
/******/
/******/ \t// define getter function for harmony exports
/******/ \t__webpack_require__.d = function(exports, name, getter) {
/******/ \t\tif(!__webpack_require__.o(exports, name)) {
/******/ \t\t\tObject.defineProperty(exports, name, {
/******/ \t\t\t\tconfigurable: false,
/******/ \t\t\t\tenumerable: true,
/******/ \t\t\t\tget: getter
/******/ \t\t\t});
/******/ \t\t}
/******/ \t};
/******/
/******/ \t// getDefaultExport function for compatibility with non-harmony modules
/******/ \t__webpack_require__.n = function(module) {
/******/ \t\tvar getter = module && module.__esModule ?
/******/ \t\t\tfunction getDefault() { return module['default']; } :
/******/ \t\t\tfunction getModuleExports() { return module; };
/******/ \t\t__webpack_require__.d(getter, 'a', getter);
/******/ \t\treturn getter;
/******/ \t};
/******/
/******/ \t// Object.prototype.hasOwnProperty.call
/******/ \t__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ \t// __webpack_public_path__
/******/ \t__webpack_require__.p = \"\";
/******/
/******/ \t// Load entry module and return exports
/******/ \treturn __webpack_require__(__webpack_require__.s = 19);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var Event = function () {
  function Event(aName) {
    _classCallCheck(this, Event);

    this.name = aName;
  }

  _createClass(Event, [{
    key: 'getName',
    value: function getName() {
      return this.name;
    }
  }]);

  return Event;
}();

exports.default = Event;

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _Priority = __webpack_require__(3);

var _Priority2 = _interopRequireDefault(_Priority);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var EventSubscriber = function () {
  function EventSubscriber(aCallback) {
    var priority = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : new _Priority2.default();

    _classCallCheck(this, EventSubscriber);

    if (this.constructor.name === 'EventSubscriber') {
      throw new TypeError('Abstract class EventSubscriber cannot be instantiated directly.');
    }

    this.callback = aCallback;
    this.priority = priority;
  }

  _createClass(EventSubscriber, [{
    key: 'handle',
    value: function handle(anEvent) {
      if (!this.isSubscribedTo(anEvent)) {
        return;
      }

      return this.callback(anEvent);
    }
  }, {
    key: 'isSubscribedTo',
    value: function isSubscribedTo(anEvent) {
      throw new TypeError('In order to extend EventSubscriber class you must implement isSubscribedTo method.');
    }
  }]);

  return EventSubscriber;
}();

exports.default = EventSubscriber;

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _PriorityQueue = __webpack_require__(15);

var _PriorityQueue2 = _interopRequireDefault(_PriorityQueue);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var EventPublisher = function () {
  function EventPublisher() {
    _classCallCheck(this, EventPublisher);

    this.subscribers = new _PriorityQueue2.default();
  }

  _createClass(EventPublisher, [{
    key: 'subscribe',
    value: function subscribe(aSubscriber) {
      this.subscribers.push(aSubscriber);
    }
  }, {
    key: 'unsubscribe',
    value: function unsubscribe(aSubscriber) {
      this.subscribers.remove(aSubscriber);
    }
  }, {
    key: 'publish',
    value: function publish(anEvent) {
      var subscribers = this.subscribers.getSubscribers();
      subscribers.forEach(function (subscriber) {
        subscriber.handle(anEvent);
      });
    }
  }]);

  return EventPublisher;
}();

var instance = new EventPublisher();

exports.default = instance;

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var Priority = function Priority() {
  var priority = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;

  _classCallCheck(this, Priority);

  if (!(typeof priority === \"number\" && isFinite(priority) && Math.floor(priority) === priority && priority >= 0)) {
    throw new TypeError('Priority must be a positive integer.');
  }

  var privatePriority = priority;

  this.getPriority = function () {
    return privatePriority;
  };
};

exports.default = Priority;

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});
var EventTypes = {
  DOM_READY: 'DOM_READY',
  DOM_LOADED: 'DOM_LOADED',
  NODE_ADDED: 'NODE_ADDED',
  WINDOW_RESIZED: 'WINDOW_RESIZED'
};

exports.default = EventTypes;

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _Event2 = __webpack_require__(0);

var _Event3 = _interopRequireDefault(_Event2);

var _EventTypes = __webpack_require__(4);

var _EventTypes2 = _interopRequireDefault(_EventTypes);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var NodeAddedEvent = function (_Event) {
  _inherits(NodeAddedEvent, _Event);

  function NodeAddedEvent(nodes, domSelectorClassName) {
    _classCallCheck(this, NodeAddedEvent);

    var _this = _possibleConstructorReturn(this, (NodeAddedEvent.__proto__ || Object.getPrototypeOf(NodeAddedEvent)).call(this, _EventTypes2.default.NODE_ADDED));

    _this.nodes = nodes;
    _this.domSelectorClassName = domSelectorClassName;
    return _this;
  }

  return NodeAddedEvent;
}(_Event3.default);

exports.default = NodeAddedEvent;

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _Event2 = __webpack_require__(0);

var _Event3 = _interopRequireDefault(_Event2);

var _EventTypes = __webpack_require__(4);

var _EventTypes2 = _interopRequireDefault(_EventTypes);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var DOMLoadedEvent = function (_Event) {
  _inherits(DOMLoadedEvent, _Event);

  function DOMLoadedEvent() {
    _classCallCheck(this, DOMLoadedEvent);

    return _possibleConstructorReturn(this, (DOMLoadedEvent.__proto__ || Object.getPrototypeOf(DOMLoadedEvent)).call(this, _EventTypes2.default.DOM_LOADED));
  }

  return DOMLoadedEvent;
}(_Event3.default);

exports.default = DOMLoadedEvent;

/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _Event2 = __webpack_require__(0);

var _Event3 = _interopRequireDefault(_Event2);

var _EventTypes = __webpack_require__(4);

var _EventTypes2 = _interopRequireDefault(_EventTypes);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var DOMReadyEvent = function (_Event) {
  _inherits(DOMReadyEvent, _Event);

  function DOMReadyEvent() {
    _classCallCheck(this, DOMReadyEvent);

    return _possibleConstructorReturn(this, (DOMReadyEvent.__proto__ || Object.getPrototypeOf(DOMReadyEvent)).call(this, _EventTypes2.default.DOM_READY));
  }

  return DOMReadyEvent;
}(_Event3.default);

exports.default = DOMReadyEvent;

/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _Event2 = __webpack_require__(0);

var _Event3 = _interopRequireDefault(_Event2);

var _EventTypes = __webpack_require__(4);

var _EventTypes2 = _interopRequireDefault(_EventTypes);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var WindowResizedEvent = function (_Event) {
  _inherits(WindowResizedEvent, _Event);

  function WindowResizedEvent(windowHeight, windowWidth) {
    _classCallCheck(this, WindowResizedEvent);

    var _this = _possibleConstructorReturn(this, (WindowResizedEvent.__proto__ || Object.getPrototypeOf(WindowResizedEvent)).call(this, _EventTypes2.default.WINDOW_RESIZED));

    _this.windowHeight = windowHeight;
    _this.windowWidth = windowWidth;
    return _this;
  }

  return WindowResizedEvent;
}(_Event3.default);

exports.default = WindowResizedEvent;

/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _NodeAddedEvent = __webpack_require__(5);

var _NodeAddedEvent2 = _interopRequireDefault(_NodeAddedEvent);

var _NodeAddedEventSubscriber = __webpack_require__(12);

var _NodeAddedEventSubscriber2 = _interopRequireDefault(_NodeAddedEventSubscriber);

var _EventPublisher = __webpack_require__(2);

var _EventPublisher2 = _interopRequireDefault(_EventPublisher);

var _Priority = __webpack_require__(3);

var _Priority2 = _interopRequireDefault(_Priority);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var NodeAddedObserver = function () {
  function NodeAddedObserver() {
    _classCallCheck(this, NodeAddedObserver);

    this.subscribersSelectorClassNames = [];
    this.isMutationObserverInitialized = false;
  }

  _createClass(NodeAddedObserver, [{
    key: 'initMutationObserver',
    value: function initMutationObserver() {
      var targetNode = document.body,
          observerConfig = {
        childList: true,
        subtree: true
      };

      var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
      this.mutationObserver = new MutationObserver(this.onNodeMutated.bind(this));
      this.mutationObserver.observe(targetNode, observerConfig);

      this.isMutationObserverInitialized = true;
    }
  }, {
    key: 'subscribe',
    value: function subscribe(selectorClassName, onNodeAddedCallback, priority) {
      if (this.subscribersSelectorClassNames.find(function (subscriberSelectorClassName) {
        return subscriberSelectorClassName === selectorClassName;
      }) !== undefined) {
        return;
      }

      this.subscribersSelectorClassNames.push(selectorClassName);

      _EventPublisher2.default.subscribe(new _NodeAddedEventSubscriber2.default(onNodeAddedCallback, new _Priority2.default(priority), selectorClassName));

      if (this.isMutationObserverInitialized) {
        return;
      }

      this.initMutationObserver();
    }
  }, {
    key: 'onNodeMutated',
    value: function onNodeMutated(mutations) {
      var _this = this;

      mutations.forEach(function (mutation) {
        return Array.from(mutation.addedNodes).forEach(function (node) {
          var matchedNodesByClassName = _this.getMatchedNodesByClassName(node),
              matchedClassNames = Object.keys(matchedNodesByClassName);

          if (matchedClassNames.length === 0) {
            return;
          }

          matchedClassNames.forEach(function (className) {
            return _EventPublisher2.default.publish(new _NodeAddedEvent2.default(matchedNodesByClassName[className], className));
          });
        });
      });
    }
  }, {
    key: 'getMatchedNodesByClassName',
    value: function getMatchedNodesByClassName(rootNode) {
      var _this2 = this;

      var matchedNodesByClassName = {};

      var getMatchedNodesBySelectorClassName = function getMatchedNodesBySelectorClassName(rootNode) {
        _this2.subscribersSelectorClassNames.forEach(function (selectorClassName) {
          if (rootNode.classList !== undefined && rootNode.classList.contains(selectorClassName)) {
            matchedNodesByClassName[selectorClassName] = matchedNodesByClassName[selectorClassName] !== undefined ? matchedNodesByClassName[selectorClassName].concat(rootNode) : [rootNode];
          }
        });

        Array.from(rootNode.childNodes).forEach(function (node) {
          return getMatchedNodesBySelectorClassName(node);
        });
      };

      getMatchedNodesBySelectorClassName(rootNode);
      return matchedNodesByClassName;
    }
  }]);

  return NodeAddedObserver;
}();

var instance = new NodeAddedObserver();

exports.default = instance;

/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});
exports.listenWindowResized = exports.listenDomLoaded = exports.listenDomReady = undefined;

var _EventPublisher = __webpack_require__(2);

var _EventPublisher2 = _interopRequireDefault(_EventPublisher);

var _DOMReadyEvent = __webpack_require__(7);

var _DOMReadyEvent2 = _interopRequireDefault(_DOMReadyEvent);

var _DOMLoadedEvent = __webpack_require__(6);

var _DOMLoadedEvent2 = _interopRequireDefault(_DOMLoadedEvent);

var _WindowResizedEvent = __webpack_require__(8);

var _WindowResizedEvent2 = _interopRequireDefault(_WindowResizedEvent);

var _lodash = __webpack_require__(17);

var _lodash2 = _interopRequireDefault(_lodash);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var listenDomReady = function listenDomReady() {
  document.addEventListener('DOMContentLoaded', function () {
    _EventPublisher2.default.publish(new _DOMReadyEvent2.default());
  });
};

var listenDomLoaded = function listenDomLoaded() {
  window.addEventListener('load', function () {
    _EventPublisher2.default.publish(new _DOMLoadedEvent2.default());
  });
};

var listenWindowResized = function listenWindowResized() {
  var debounceDelay = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 200;

  window.addEventListener('resize', (0, _lodash2.default)(function () {
    _EventPublisher2.default.publish(new _WindowResizedEvent2.default(window.innerHeight, window.innerWidth));
  }, debounceDelay));
};

exports.listenDomReady = listenDomReady;
exports.listenDomLoaded = listenDomLoaded;
exports.listenWindowResized = listenWindowResized;

/***/ }),
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});
exports.onWindowResized = exports.onDomLoaded = exports.onDomReady = undefined;

var _EventPublisher = __webpack_require__(2);

var _EventPublisher2 = _interopRequireDefault(_EventPublisher);

var _DOMReadyEventSubscriber = __webpack_require__(14);

var _DOMReadyEventSubscriber2 = _interopRequireDefault(_DOMReadyEventSubscriber);

var _DOMLoadedEventSubscriber = __webpack_require__(13);

var _DOMLoadedEventSubscriber2 = _interopRequireDefault(_DOMLoadedEventSubscriber);

var _WindowResizedEventSubscriber = __webpack_require__(16);

var _WindowResizedEventSubscriber2 = _interopRequireDefault(_WindowResizedEventSubscriber);

var _Priority = __webpack_require__(3);

var _Priority2 = _interopRequireDefault(_Priority);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var onDomReady = function onDomReady(onReadyCallback, priority) {
  var domReadyEventSubscriber = new _DOMReadyEventSubscriber2.default(onReadyCallback, new _Priority2.default(priority));

  _EventPublisher2.default.subscribe(domReadyEventSubscriber);

  return domReadyEventSubscriber;
};

var onDomLoaded = function onDomLoaded(onLoadedCallback, priority) {
  var domLoadedEventSubscriber = new _DOMLoadedEventSubscriber2.default(onLoadedCallback, new _Priority2.default(priority));

  _EventPublisher2.default.subscribe(domLoadedEventSubscriber);

  return domLoadedEventSubscriber;
};

var onWindowResized = function onWindowResized(onWindowResizedCallback, priority) {
  var windowResizedEventSubscriber = new _WindowResizedEventSubscriber2.default(onWindowResizedCallback, new _Priority2.default(priority));

  _EventPublisher2.default.subscribe(windowResizedEventSubscriber);

  return windowResizedEventSubscriber;
};

exports.onDomReady = onDomReady;
exports.onDomLoaded = onDomLoaded;
exports.onWindowResized = onWindowResized;

/***/ }),
/* 12 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _EventSubscriber2 = __webpack_require__(1);

var _EventSubscriber3 = _interopRequireDefault(_EventSubscriber2);

var _NodeAddedEvent = __webpack_require__(5);

var _NodeAddedEvent2 = _interopRequireDefault(_NodeAddedEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var NodeAddedEventSubscriber = function (_EventSubscriber) {
  _inherits(NodeAddedEventSubscriber, _EventSubscriber);

  function NodeAddedEventSubscriber(aCallback, aPriority, domSelectorClassName) {
    _classCallCheck(this, NodeAddedEventSubscriber);

    var _this = _possibleConstructorReturn(this, (NodeAddedEventSubscriber.__proto__ || Object.getPrototypeOf(NodeAddedEventSubscriber)).call(this, aCallback, aPriority));

    _this.domSelectorClassName = domSelectorClassName;
    return _this;
  }

  _createClass(NodeAddedEventSubscriber, [{
    key: 'isSubscribedTo',
    value: function isSubscribedTo(anEvent) {
      var event = new _NodeAddedEvent2.default();

      return anEvent.getName() === event.getName() && this.domSelectorClassName === anEvent.domSelectorClassName;
    }
  }]);

  return NodeAddedEventSubscriber;
}(_EventSubscriber3.default);

exports.default = NodeAddedEventSubscriber;

/***/ }),
/* 13 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _EventSubscriber2 = __webpack_require__(1);

var _EventSubscriber3 = _interopRequireDefault(_EventSubscriber2);

var _DOMLoadedEvent = __webpack_require__(6);

var _DOMLoadedEvent2 = _interopRequireDefault(_DOMLoadedEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var DOMLoadedEventSubscriber = function (_EventSubscriber) {
  _inherits(DOMLoadedEventSubscriber, _EventSubscriber);

  function DOMLoadedEventSubscriber(aCallback, aPriority) {
    _classCallCheck(this, DOMLoadedEventSubscriber);

    return _possibleConstructorReturn(this, (DOMLoadedEventSubscriber.__proto__ || Object.getPrototypeOf(DOMLoadedEventSubscriber)).call(this, aCallback, aPriority));
  }

  _createClass(DOMLoadedEventSubscriber, [{
    key: 'isSubscribedTo',
    value: function isSubscribedTo(anEvent) {
      var event = new _DOMLoadedEvent2.default();

      return anEvent.getName() === event.getName();
    }
  }]);

  return DOMLoadedEventSubscriber;
}(_EventSubscriber3.default);

exports.default = DOMLoadedEventSubscriber;

/***/ }),
/* 14 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _EventSubscriber2 = __webpack_require__(1);

var _EventSubscriber3 = _interopRequireDefault(_EventSubscriber2);

var _DOMReadyEvent = __webpack_require__(7);

var _DOMReadyEvent2 = _interopRequireDefault(_DOMReadyEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var DOMReadyEventSubscriber = function (_EventSubscriber) {
  _inherits(DOMReadyEventSubscriber, _EventSubscriber);

  function DOMReadyEventSubscriber(aCallback, aPriority) {
    _classCallCheck(this, DOMReadyEventSubscriber);

    return _possibleConstructorReturn(this, (DOMReadyEventSubscriber.__proto__ || Object.getPrototypeOf(DOMReadyEventSubscriber)).call(this, aCallback, aPriority));
  }

  _createClass(DOMReadyEventSubscriber, [{
    key: 'isSubscribedTo',
    value: function isSubscribedTo(anEvent) {
      var event = new _DOMReadyEvent2.default();

      return anEvent.getName() === event.getName();
    }
  }]);

  return DOMReadyEventSubscriber;
}(_EventSubscriber3.default);

exports.default = DOMReadyEventSubscriber;

/***/ }),
/* 15 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var PriorityQueue = function PriorityQueue() {
  var _this = this;

  _classCallCheck(this, PriorityQueue);

  var queue = [];

  this.isSorted = true;

  this.sort = function () {
    queue.sort(function (aSubscriber, anotherSubscriber) {
      return anotherSubscriber.priority.getPriority() - aSubscriber.priority.getPriority();
    });

    _this.isSorted = true;
  };

  this.push = function (aSubscriber) {
    _this.isSorted = false;
    queue.push(aSubscriber);
  };

  this.remove = function (aSubscriber) {
    var aSubscriberIndex = queue.indexOf(aSubscriber);
    if (aSubscriberIndex < 0) {
      return;
    }

    _this.isSorted = false;
    queue.splice(aSubscriberIndex, 1);
  };

  this.getSubscribers = function () {
    if (!_this.isSorted) {
      _this.sort();
    }

    return queue;
  };
};

exports.default = PriorityQueue;

/***/ }),
/* 16 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _EventSubscriber2 = __webpack_require__(1);

var _EventSubscriber3 = _interopRequireDefault(_EventSubscriber2);

var _WindowResizedEvent = __webpack_require__(8);

var _WindowResizedEvent2 = _interopRequireDefault(_WindowResizedEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var WindowResizedEventSubscriber = function (_EventSubscriber) {
  _inherits(WindowResizedEventSubscriber, _EventSubscriber);

  function WindowResizedEventSubscriber(aCallback, aPriority) {
    _classCallCheck(this, WindowResizedEventSubscriber);

    return _possibleConstructorReturn(this, (WindowResizedEventSubscriber.__proto__ || Object.getPrototypeOf(WindowResizedEventSubscriber)).call(this, aCallback, aPriority));
  }

  _createClass(WindowResizedEventSubscriber, [{
    key: 'isSubscribedTo',
    value: function isSubscribedTo(anEvent) {
      var event = new _WindowResizedEvent2.default();

      return anEvent.getName() === event.getName();
    }
  }]);

  return WindowResizedEventSubscriber;
}(_EventSubscriber3.default);

exports.default = WindowResizedEventSubscriber;

/***/ }),
/* 17 */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global) {/**
 * lodash (Custom Build) <https://lodash.com/>
 * Build: `lodash modularize exports=\"npm\" -o ./`
 * Copyright jQuery Foundation and other contributors <https://jquery.org/>
 * Released under MIT license <https://lodash.com/license>
 * Based on Underscore.js 1.8.3 <http://underscorejs.org/LICENSE>
 * Copyright Jeremy Ashkenas, DocumentCloud and Investigative Reporters & Editors
 */

/** Used as the `TypeError` message for \"Functions\" methods. */
var FUNC_ERROR_TEXT = 'Expected a function';

/** Used as references for various `Number` constants. */
var NAN = 0 / 0;

/** `Object#toString` result references. */
var symbolTag = '[object Symbol]';

/** Used to match leading and trailing whitespace. */
var reTrim = /^\\s+|\\s+\$/g;

/** Used to detect bad signed hexadecimal string values. */
var reIsBadHex = /^[-+]0x[0-9a-f]+\$/i;

/** Used to detect binary string values. */
var reIsBinary = /^0b[01]+\$/i;

/** Used to detect octal string values. */
var reIsOctal = /^0o[0-7]+\$/i;

/** Built-in method references without a dependency on `root`. */
var freeParseInt = parseInt;

/** Detect free variable `global` from Node.js. */
var freeGlobal = typeof global == 'object' && global && global.Object === Object && global;

/** Detect free variable `self`. */
var freeSelf = typeof self == 'object' && self && self.Object === Object && self;

/** Used as a reference to the global object. */
var root = freeGlobal || freeSelf || Function('return this')();

/** Used for built-in method references. */
var objectProto = Object.prototype;

/**
 * Used to resolve the
 * [`toStringTag`](http://ecma-international.org/ecma-262/7.0/#sec-object.prototype.tostring)
 * of values.
 */
var objectToString = objectProto.toString;

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeMax = Math.max,
    nativeMin = Math.min;

/**
 * Gets the timestamp of the number of milliseconds that have elapsed since
 * the Unix epoch (1 January 1970 00:00:00 UTC).
 *
 * @static
 * @memberOf _
 * @since 2.4.0
 * @category Date
 * @returns {number} Returns the timestamp.
 * @example
 *
 * _.defer(function(stamp) {
 *   console.log(_.now() - stamp);
 * }, _.now());
 * // => Logs the number of milliseconds it took for the deferred invocation.
 */
var now = function() {
  return root.Date.now();
};

/**
 * Creates a debounced function that delays invoking `func` until after `wait`
 * milliseconds have elapsed since the last time the debounced function was
 * invoked. The debounced function comes with a `cancel` method to cancel
 * delayed `func` invocations and a `flush` method to immediately invoke them.
 * Provide `options` to indicate whether `func` should be invoked on the
 * leading and/or trailing edge of the `wait` timeout. The `func` is invoked
 * with the last arguments provided to the debounced function. Subsequent
 * calls to the debounced function return the result of the last `func`
 * invocation.
 *
 * **Note:** If `leading` and `trailing` options are `true`, `func` is
 * invoked on the trailing edge of the timeout only if the debounced function
 * is invoked more than once during the `wait` timeout.
 *
 * If `wait` is `0` and `leading` is `false`, `func` invocation is deferred
 * until to the next tick, similar to `setTimeout` with a timeout of `0`.
 *
 * See [David Corbacho's article](https://css-tricks.com/debouncing-throttling-explained-examples/)
 * for details over the differences between `_.debounce` and `_.throttle`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Function
 * @param {Function} func The function to debounce.
 * @param {number} [wait=0] The number of milliseconds to delay.
 * @param {Object} [options={}] The options object.
 * @param {boolean} [options.leading=false]
 *  Specify invoking on the leading edge of the timeout.
 * @param {number} [options.maxWait]
 *  The maximum time `func` is allowed to be delayed before it's invoked.
 * @param {boolean} [options.trailing=true]
 *  Specify invoking on the trailing edge of the timeout.
 * @returns {Function} Returns the new debounced function.
 * @example
 *
 * // Avoid costly calculations while the window size is in flux.
 * jQuery(window).on('resize', _.debounce(calculateLayout, 150));
 *
 * // Invoke `sendMail` when clicked, debouncing subsequent calls.
 * jQuery(element).on('click', _.debounce(sendMail, 300, {
 *   'leading': true,
 *   'trailing': false
 * }));
 *
 * // Ensure `batchLog` is invoked once after 1 second of debounced calls.
 * var debounced = _.debounce(batchLog, 250, { 'maxWait': 1000 });
 * var source = new EventSource('/stream');
 * jQuery(source).on('message', debounced);
 *
 * // Cancel the trailing debounced invocation.
 * jQuery(window).on('popstate', debounced.cancel);
 */
function debounce(func, wait, options) {
  var lastArgs,
      lastThis,
      maxWait,
      result,
      timerId,
      lastCallTime,
      lastInvokeTime = 0,
      leading = false,
      maxing = false,
      trailing = true;

  if (typeof func != 'function') {
    throw new TypeError(FUNC_ERROR_TEXT);
  }
  wait = toNumber(wait) || 0;
  if (isObject(options)) {
    leading = !!options.leading;
    maxing = 'maxWait' in options;
    maxWait = maxing ? nativeMax(toNumber(options.maxWait) || 0, wait) : maxWait;
    trailing = 'trailing' in options ? !!options.trailing : trailing;
  }

  function invokeFunc(time) {
    var args = lastArgs,
        thisArg = lastThis;

    lastArgs = lastThis = undefined;
    lastInvokeTime = time;
    result = func.apply(thisArg, args);
    return result;
  }

  function leadingEdge(time) {
    // Reset any `maxWait` timer.
    lastInvokeTime = time;
    // Start the timer for the trailing edge.
    timerId = setTimeout(timerExpired, wait);
    // Invoke the leading edge.
    return leading ? invokeFunc(time) : result;
  }

  function remainingWait(time) {
    var timeSinceLastCall = time - lastCallTime,
        timeSinceLastInvoke = time - lastInvokeTime,
        result = wait - timeSinceLastCall;

    return maxing ? nativeMin(result, maxWait - timeSinceLastInvoke) : result;
  }

  function shouldInvoke(time) {
    var timeSinceLastCall = time - lastCallTime,
        timeSinceLastInvoke = time - lastInvokeTime;

    // Either this is the first call, activity has stopped and we're at the
    // trailing edge, the system time has gone backwards and we're treating
    // it as the trailing edge, or we've hit the `maxWait` limit.
    return (lastCallTime === undefined || (timeSinceLastCall >= wait) ||
      (timeSinceLastCall < 0) || (maxing && timeSinceLastInvoke >= maxWait));
  }

  function timerExpired() {
    var time = now();
    if (shouldInvoke(time)) {
      return trailingEdge(time);
    }
    // Restart the timer.
    timerId = setTimeout(timerExpired, remainingWait(time));
  }

  function trailingEdge(time) {
    timerId = undefined;

    // Only invoke if we have `lastArgs` which means `func` has been
    // debounced at least once.
    if (trailing && lastArgs) {
      return invokeFunc(time);
    }
    lastArgs = lastThis = undefined;
    return result;
  }

  function cancel() {
    if (timerId !== undefined) {
      clearTimeout(timerId);
    }
    lastInvokeTime = 0;
    lastArgs = lastCallTime = lastThis = timerId = undefined;
  }

  function flush() {
    return timerId === undefined ? result : trailingEdge(now());
  }

  function debounced() {
    var time = now(),
        isInvoking = shouldInvoke(time);

    lastArgs = arguments;
    lastThis = this;
    lastCallTime = time;

    if (isInvoking) {
      if (timerId === undefined) {
        return leadingEdge(lastCallTime);
      }
      if (maxing) {
        // Handle invocations in a tight loop.
        timerId = setTimeout(timerExpired, wait);
        return invokeFunc(lastCallTime);
      }
    }
    if (timerId === undefined) {
      timerId = setTimeout(timerExpired, wait);
    }
    return result;
  }
  debounced.cancel = cancel;
  debounced.flush = flush;
  return debounced;
}

/**
 * Checks if `value` is the
 * [language type](http://www.ecma-international.org/ecma-262/7.0/#sec-ecmascript-language-types)
 * of `Object`. (e.g. arrays, functions, objects, regexes, `new Number(0)`, and `new String('')`)
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an object, else `false`.
 * @example
 *
 * _.isObject({});
 * // => true
 *
 * _.isObject([1, 2, 3]);
 * // => true
 *
 * _.isObject(_.noop);
 * // => true
 *
 * _.isObject(null);
 * // => false
 */
function isObject(value) {
  var type = typeof value;
  return !!value && (type == 'object' || type == 'function');
}

/**
 * Checks if `value` is object-like. A value is object-like if it's not `null`
 * and has a `typeof` result of \"object\".
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is object-like, else `false`.
 * @example
 *
 * _.isObjectLike({});
 * // => true
 *
 * _.isObjectLike([1, 2, 3]);
 * // => true
 *
 * _.isObjectLike(_.noop);
 * // => false
 *
 * _.isObjectLike(null);
 * // => false
 */
function isObjectLike(value) {
  return !!value && typeof value == 'object';
}

/**
 * Checks if `value` is classified as a `Symbol` primitive or object.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a symbol, else `false`.
 * @example
 *
 * _.isSymbol(Symbol.iterator);
 * // => true
 *
 * _.isSymbol('abc');
 * // => false
 */
function isSymbol(value) {
  return typeof value == 'symbol' ||
    (isObjectLike(value) && objectToString.call(value) == symbolTag);
}

/**
 * Converts `value` to a number.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to process.
 * @returns {number} Returns the number.
 * @example
 *
 * _.toNumber(3.2);
 * // => 3.2
 *
 * _.toNumber(Number.MIN_VALUE);
 * // => 5e-324
 *
 * _.toNumber(Infinity);
 * // => Infinity
 *
 * _.toNumber('3.2');
 * // => 3.2
 */
function toNumber(value) {
  if (typeof value == 'number') {
    return value;
  }
  if (isSymbol(value)) {
    return NAN;
  }
  if (isObject(value)) {
    var other = typeof value.valueOf == 'function' ? value.valueOf() : value;
    value = isObject(other) ? (other + '') : other;
  }
  if (typeof value != 'string') {
    return value === 0 ? value : +value;
  }
  value = value.replace(reTrim, '');
  var isBinary = reIsBinary.test(value);
  return (isBinary || reIsOctal.test(value))
    ? freeParseInt(value.slice(2), isBinary ? 2 : 8)
    : (reIsBadHex.test(value) ? NAN : +value);
}

module.exports = debounce;

/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(18)))

/***/ }),
/* 18 */
/***/ (function(module, exports) {

var g;

// This works in non-strict mode
g = (function() {
\treturn this;
})();

try {
\t// This works if eval is allowed (see CSP)
\tg = g || Function(\"return this\")() || (1,eval)(\"this\");
} catch(e) {
\t// This works if the window reference is available
\tif(typeof window === \"object\")
\t\tg = window;
}

// g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}

module.exports = g;


/***/ }),
/* 19 */
/***/ (function(module, exports, __webpack_require__) {

\"use strict\";
/*
 * This file is part of the EventBusJS library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */



Object.defineProperty(exports, \"__esModule\", {
  value: true
});
exports.onWindowResized = exports.onDomLoaded = exports.onDomReady = exports.NodeAddedObserver = exports.Priority = exports.EventSubscriber = exports.EventPublisher = exports.Event = undefined;

var _Event = __webpack_require__(0);

var _Event2 = _interopRequireDefault(_Event);

var _EventPublisher = __webpack_require__(2);

var _EventPublisher2 = _interopRequireDefault(_EventPublisher);

var _EventSubscriber = __webpack_require__(1);

var _EventSubscriber2 = _interopRequireDefault(_EventSubscriber);

var _Priority = __webpack_require__(3);

var _Priority2 = _interopRequireDefault(_Priority);

var _NodeAddedObserver = __webpack_require__(9);

var _NodeAddedObserver2 = _interopRequireDefault(_NodeAddedObserver);

var _DOMEventSubscriptions = __webpack_require__(11);

var _DOMEventPublishers = __webpack_require__(10);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(0, _DOMEventPublishers.listenDomReady)();
(0, _DOMEventPublishers.listenDomLoaded)();
(0, _DOMEventPublishers.listenWindowResized)();

exports.Event = _Event2.default;
exports.EventPublisher = _EventPublisher2.default;
exports.EventSubscriber = _EventSubscriber2.default;
exports.Priority = _Priority2.default;
exports.NodeAddedObserver = _NodeAddedObserver2.default;
exports.onDomReady = _DOMEventSubscriptions.onDomReady;
exports.onDomLoaded = _DOMEventSubscriptions.onDomLoaded;
exports.onWindowResized = _DOMEventSubscriptions.onWindowResized;

/***/ })
/******/ ])));
//# sourceMappingURL=lin3s-event-bus.umd.js.map", "node_modules/lin3s-event-bus/dist/lin3s-event-bus.umd.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-event-bus/dist/lin3s-event-bus.umd.js");
    }
}
