<?php

/* node_modules/babel-plugin-transform-es2015-duplicate-keys/lib/index.js */
class __TwigTemplate_dafde1ecc316445b5234ea07512abc44eef075c956416107bd9caa5b63bcad36 extends Twig_Template
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
        $__internal_44b0824b142a5e48309181139701cb52a73c5c87869cddb92335acaf5de96cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b0824b142a5e48309181139701cb52a73c5c87869cddb92335acaf5de96cc5->enter($__internal_44b0824b142a5e48309181139701cb52a73c5c87869cddb92335acaf5de96cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-duplicate-keys/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _getIterator2 = require(\"babel-runtime/core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

var _create = require(\"babel-runtime/core-js/object/create\");

var _create2 = _interopRequireDefault(_create);

exports.default = function () {
  return {
    visitor: {
      ObjectExpression: function ObjectExpression(path) {
        var node = path.node;

        var plainProps = node.properties.filter(function (prop) {
          return !t.isSpreadProperty(prop) && !prop.computed;
        });

        var alreadySeenData = (0, _create2.default)(null);
        var alreadySeenGetters = (0, _create2.default)(null);
        var alreadySeenSetters = (0, _create2.default)(null);

        for (var _iterator = plainProps, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
          var _ref;

          if (_isArray) {
            if (_i >= _iterator.length) break;
            _ref = _iterator[_i++];
          } else {
            _i = _iterator.next();
            if (_i.done) break;
            _ref = _i.value;
          }

          var prop = _ref;

          var name = getName(prop.key);
          var isDuplicate = false;
          switch (prop.kind) {
            case \"get\":
              if (alreadySeenData[name] || alreadySeenGetters[name]) {
                isDuplicate = true;
              }
              alreadySeenGetters[name] = true;
              break;
            case \"set\":
              if (alreadySeenData[name] || alreadySeenSetters[name]) {
                isDuplicate = true;
              }
              alreadySeenSetters[name] = true;
              break;
            default:
              if (alreadySeenData[name] || alreadySeenGetters[name] || alreadySeenSetters[name]) {
                isDuplicate = true;
              }
              alreadySeenData[name] = true;
          }

          if (isDuplicate) {
            prop.computed = true;
            prop.key = t.stringLiteral(name);
          }
        }
      }
    }
  };
};

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function getName(key) {
  if (t.isIdentifier(key)) {
    return key.name;
  }
  return key.value.toString();
}

module.exports = exports[\"default\"];";
        
        $__internal_44b0824b142a5e48309181139701cb52a73c5c87869cddb92335acaf5de96cc5->leave($__internal_44b0824b142a5e48309181139701cb52a73c5c87869cddb92335acaf5de96cc5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-duplicate-keys/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _getIterator2 = require(\"babel-runtime/core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

var _create = require(\"babel-runtime/core-js/object/create\");

var _create2 = _interopRequireDefault(_create);

exports.default = function () {
  return {
    visitor: {
      ObjectExpression: function ObjectExpression(path) {
        var node = path.node;

        var plainProps = node.properties.filter(function (prop) {
          return !t.isSpreadProperty(prop) && !prop.computed;
        });

        var alreadySeenData = (0, _create2.default)(null);
        var alreadySeenGetters = (0, _create2.default)(null);
        var alreadySeenSetters = (0, _create2.default)(null);

        for (var _iterator = plainProps, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
          var _ref;

          if (_isArray) {
            if (_i >= _iterator.length) break;
            _ref = _iterator[_i++];
          } else {
            _i = _iterator.next();
            if (_i.done) break;
            _ref = _i.value;
          }

          var prop = _ref;

          var name = getName(prop.key);
          var isDuplicate = false;
          switch (prop.kind) {
            case \"get\":
              if (alreadySeenData[name] || alreadySeenGetters[name]) {
                isDuplicate = true;
              }
              alreadySeenGetters[name] = true;
              break;
            case \"set\":
              if (alreadySeenData[name] || alreadySeenSetters[name]) {
                isDuplicate = true;
              }
              alreadySeenSetters[name] = true;
              break;
            default:
              if (alreadySeenData[name] || alreadySeenGetters[name] || alreadySeenSetters[name]) {
                isDuplicate = true;
              }
              alreadySeenData[name] = true;
          }

          if (isDuplicate) {
            prop.computed = true;
            prop.key = t.stringLiteral(name);
          }
        }
      }
    }
  };
};

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function getName(key) {
  if (t.isIdentifier(key)) {
    return key.name;
  }
  return key.value.toString();
}

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-es2015-duplicate-keys/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-duplicate-keys/lib/index.js");
    }
}
