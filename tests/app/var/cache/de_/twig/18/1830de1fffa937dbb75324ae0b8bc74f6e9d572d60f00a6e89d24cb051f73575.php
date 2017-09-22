<?php

/* node_modules/babel-runtime/helpers/asyncGenerator.js */
class __TwigTemplate_94a83c90299686dc88c68925843c699db0bfba3e8c18575dec49ae4210f1a449 extends Twig_Template
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
        $__internal_97a6efe2cec2dc10574ac4385bd904a57d0cdd9d15ab3295df2d6f2402fdf1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a6efe2cec2dc10574ac4385bd904a57d0cdd9d15ab3295df2d6f2402fdf1e5->enter($__internal_97a6efe2cec2dc10574ac4385bd904a57d0cdd9d15ab3295df2d6f2402fdf1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/asyncGenerator.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _symbol = require(\"../core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

var _promise = require(\"../core-js/promise\");

var _promise2 = _interopRequireDefault(_promise);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function () {
  function AwaitValue(value) {
    this.value = value;
  }

  function AsyncGenerator(gen) {
    var front, back;

    function send(key, arg) {
      return new _promise2.default(function (resolve, reject) {
        var request = {
          key: key,
          arg: arg,
          resolve: resolve,
          reject: reject,
          next: null
        };

        if (back) {
          back = back.next = request;
        } else {
          front = back = request;
          resume(key, arg);
        }
      });
    }

    function resume(key, arg) {
      try {
        var result = gen[key](arg);
        var value = result.value;

        if (value instanceof AwaitValue) {
          _promise2.default.resolve(value.value).then(function (arg) {
            resume(\"next\", arg);
          }, function (arg) {
            resume(\"throw\", arg);
          });
        } else {
          settle(result.done ? \"return\" : \"normal\", result.value);
        }
      } catch (err) {
        settle(\"throw\", err);
      }
    }

    function settle(type, value) {
      switch (type) {
        case \"return\":
          front.resolve({
            value: value,
            done: true
          });
          break;

        case \"throw\":
          front.reject(value);
          break;

        default:
          front.resolve({
            value: value,
            done: false
          });
          break;
      }

      front = front.next;

      if (front) {
        resume(front.key, front.arg);
      } else {
        back = null;
      }
    }

    this._invoke = send;

    if (typeof gen.return !== \"function\") {
      this.return = undefined;
    }
  }

  if (typeof _symbol2.default === \"function\" && _symbol2.default.asyncIterator) {
    AsyncGenerator.prototype[_symbol2.default.asyncIterator] = function () {
      return this;
    };
  }

  AsyncGenerator.prototype.next = function (arg) {
    return this._invoke(\"next\", arg);
  };

  AsyncGenerator.prototype.throw = function (arg) {
    return this._invoke(\"throw\", arg);
  };

  AsyncGenerator.prototype.return = function (arg) {
    return this._invoke(\"return\", arg);
  };

  return {
    wrap: function wrap(fn) {
      return function () {
        return new AsyncGenerator(fn.apply(this, arguments));
      };
    },
    await: function _await(value) {
      return new AwaitValue(value);
    }
  };
}();";
        
        $__internal_97a6efe2cec2dc10574ac4385bd904a57d0cdd9d15ab3295df2d6f2402fdf1e5->leave($__internal_97a6efe2cec2dc10574ac4385bd904a57d0cdd9d15ab3295df2d6f2402fdf1e5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/asyncGenerator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _symbol = require(\"../core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

var _promise = require(\"../core-js/promise\");

var _promise2 = _interopRequireDefault(_promise);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function () {
  function AwaitValue(value) {
    this.value = value;
  }

  function AsyncGenerator(gen) {
    var front, back;

    function send(key, arg) {
      return new _promise2.default(function (resolve, reject) {
        var request = {
          key: key,
          arg: arg,
          resolve: resolve,
          reject: reject,
          next: null
        };

        if (back) {
          back = back.next = request;
        } else {
          front = back = request;
          resume(key, arg);
        }
      });
    }

    function resume(key, arg) {
      try {
        var result = gen[key](arg);
        var value = result.value;

        if (value instanceof AwaitValue) {
          _promise2.default.resolve(value.value).then(function (arg) {
            resume(\"next\", arg);
          }, function (arg) {
            resume(\"throw\", arg);
          });
        } else {
          settle(result.done ? \"return\" : \"normal\", result.value);
        }
      } catch (err) {
        settle(\"throw\", err);
      }
    }

    function settle(type, value) {
      switch (type) {
        case \"return\":
          front.resolve({
            value: value,
            done: true
          });
          break;

        case \"throw\":
          front.reject(value);
          break;

        default:
          front.resolve({
            value: value,
            done: false
          });
          break;
      }

      front = front.next;

      if (front) {
        resume(front.key, front.arg);
      } else {
        back = null;
      }
    }

    this._invoke = send;

    if (typeof gen.return !== \"function\") {
      this.return = undefined;
    }
  }

  if (typeof _symbol2.default === \"function\" && _symbol2.default.asyncIterator) {
    AsyncGenerator.prototype[_symbol2.default.asyncIterator] = function () {
      return this;
    };
  }

  AsyncGenerator.prototype.next = function (arg) {
    return this._invoke(\"next\", arg);
  };

  AsyncGenerator.prototype.throw = function (arg) {
    return this._invoke(\"throw\", arg);
  };

  AsyncGenerator.prototype.return = function (arg) {
    return this._invoke(\"return\", arg);
  };

  return {
    wrap: function wrap(fn) {
      return function () {
        return new AsyncGenerator(fn.apply(this, arguments));
      };
    },
    await: function _await(value) {
      return new AwaitValue(value);
    }
  };
}();", "node_modules/babel-runtime/helpers/asyncGenerator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/asyncGenerator.js");
    }
}
