<?php

/* node_modules/babel-plugin-transform-strict-mode/lib/index.js */
class __TwigTemplate_f9a152c26a08cc53ad7f5bb22fa13c7aed8bfd88411c6a2883ade7f9a342697b extends Twig_Template
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
        $__internal_d9c7840604849dbb3884f082bb68136d7bb663c7e604fb6644ef86223f6c14f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c7840604849dbb3884f082bb68136d7bb663c7e604fb6644ef86223f6c14f1->enter($__internal_d9c7840604849dbb3884f082bb68136d7bb663c7e604fb6644ef86223f6c14f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-strict-mode/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _getIterator2 = require(\"babel-runtime/core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

exports.default = function () {
  return {
    visitor: {
      Program: function Program(path, state) {
        if (state.opts.strict === false || state.opts.strictMode === false) return;

        var node = path.node;


        for (var _iterator = node.directives, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
          var _ref;

          if (_isArray) {
            if (_i >= _iterator.length) break;
            _ref = _iterator[_i++];
          } else {
            _i = _iterator.next();
            if (_i.done) break;
            _ref = _i.value;
          }

          var directive = _ref;

          if (directive.value.value === \"use strict\") return;
        }

        path.unshiftContainer(\"directives\", t.directive(t.directiveLiteral(\"use strict\")));
      }
    }
  };
};

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];";
        
        $__internal_d9c7840604849dbb3884f082bb68136d7bb663c7e604fb6644ef86223f6c14f1->leave($__internal_d9c7840604849dbb3884f082bb68136d7bb663c7e604fb6644ef86223f6c14f1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-strict-mode/lib/index.js";
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

exports.default = function () {
  return {
    visitor: {
      Program: function Program(path, state) {
        if (state.opts.strict === false || state.opts.strictMode === false) return;

        var node = path.node;


        for (var _iterator = node.directives, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
          var _ref;

          if (_isArray) {
            if (_i >= _iterator.length) break;
            _ref = _iterator[_i++];
          } else {
            _i = _iterator.next();
            if (_i.done) break;
            _ref = _i.value;
          }

          var directive = _ref;

          if (directive.value.value === \"use strict\") return;
        }

        path.unshiftContainer(\"directives\", t.directive(t.directiveLiteral(\"use strict\")));
      }
    }
  };
};

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-strict-mode/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-strict-mode/lib/index.js");
    }
}
