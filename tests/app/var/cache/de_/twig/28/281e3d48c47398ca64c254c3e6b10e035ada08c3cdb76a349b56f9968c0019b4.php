<?php

/* node_modules/babel-plugin-check-es2015-constants/lib/index.js */
class __TwigTemplate_322f0df18ae59214afbccddc127255f0f497a675aec3dc412b1ad393d3e27a1a extends Twig_Template
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
        $__internal_af2b2e0208d899e81eeccd383752fea8d9d9182514d2ae00d57d0477efe3c992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2b2e0208d899e81eeccd383752fea8d9d9182514d2ae00d57d0477efe3c992->enter($__internal_af2b2e0208d899e81eeccd383752fea8d9d9182514d2ae00d57d0477efe3c992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-check-es2015-constants/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _getIterator2 = require(\"babel-runtime/core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

exports.default = function (_ref) {
  var messages = _ref.messages;

  return {
    visitor: {
      Scope: function Scope(_ref2) {
        var scope = _ref2.scope;

        for (var name in scope.bindings) {
          var binding = scope.bindings[name];
          if (binding.kind !== \"const\" && binding.kind !== \"module\") continue;

          for (var _iterator = binding.constantViolations, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
            var _ref3;

            if (_isArray) {
              if (_i >= _iterator.length) break;
              _ref3 = _iterator[_i++];
            } else {
              _i = _iterator.next();
              if (_i.done) break;
              _ref3 = _i.value;
            }

            var violation = _ref3;

            throw violation.buildCodeFrameError(messages.get(\"readOnly\", name));
          }
        }
      }
    }
  };
};

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];";
        
        $__internal_af2b2e0208d899e81eeccd383752fea8d9d9182514d2ae00d57d0477efe3c992->leave($__internal_af2b2e0208d899e81eeccd383752fea8d9d9182514d2ae00d57d0477efe3c992_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-check-es2015-constants/lib/index.js";
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

exports.default = function (_ref) {
  var messages = _ref.messages;

  return {
    visitor: {
      Scope: function Scope(_ref2) {
        var scope = _ref2.scope;

        for (var name in scope.bindings) {
          var binding = scope.bindings[name];
          if (binding.kind !== \"const\" && binding.kind !== \"module\") continue;

          for (var _iterator = binding.constantViolations, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
            var _ref3;

            if (_isArray) {
              if (_i >= _iterator.length) break;
              _ref3 = _iterator[_i++];
            } else {
              _i = _iterator.next();
              if (_i.done) break;
              _ref3 = _i.value;
            }

            var violation = _ref3;

            throw violation.buildCodeFrameError(messages.get(\"readOnly\", name));
          }
        }
      }
    }
  };
};

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];", "node_modules/babel-plugin-check-es2015-constants/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-check-es2015-constants/lib/index.js");
    }
}
