<?php

/* node_modules/babel-plugin-transform-es2015-function-name/lib/index.js */
class __TwigTemplate_401144e4d08e38a45c31f7e01063b3785e5849d65a5317c23a940eed3c19818c extends Twig_Template
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
        $__internal_70baf0e2d764c0f41862e42e18b2cbe407571ef067e454f530d15a95f1edbc56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70baf0e2d764c0f41862e42e18b2cbe407571ef067e454f530d15a95f1edbc56->enter($__internal_70baf0e2d764c0f41862e42e18b2cbe407571ef067e454f530d15a95f1edbc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-function-name/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    visitor: {
      FunctionExpression: {
        exit: function exit(path) {
          if (path.key !== \"value\" && !path.parentPath.isObjectProperty()) {
            var replacement = (0, _babelHelperFunctionName2.default)(path);
            if (replacement) path.replaceWith(replacement);
          }
        }
      },

      ObjectProperty: function ObjectProperty(path) {
        var value = path.get(\"value\");
        if (value.isFunction()) {
          var newNode = (0, _babelHelperFunctionName2.default)(value);
          if (newNode) value.replaceWith(newNode);
        }
      }
    }
  };
};

var _babelHelperFunctionName = require(\"babel-helper-function-name\");

var _babelHelperFunctionName2 = _interopRequireDefault(_babelHelperFunctionName);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];";
        
        $__internal_70baf0e2d764c0f41862e42e18b2cbe407571ef067e454f530d15a95f1edbc56->leave($__internal_70baf0e2d764c0f41862e42e18b2cbe407571ef067e454f530d15a95f1edbc56_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-function-name/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    visitor: {
      FunctionExpression: {
        exit: function exit(path) {
          if (path.key !== \"value\" && !path.parentPath.isObjectProperty()) {
            var replacement = (0, _babelHelperFunctionName2.default)(path);
            if (replacement) path.replaceWith(replacement);
          }
        }
      },

      ObjectProperty: function ObjectProperty(path) {
        var value = path.get(\"value\");
        if (value.isFunction()) {
          var newNode = (0, _babelHelperFunctionName2.default)(value);
          if (newNode) value.replaceWith(newNode);
        }
      }
    }
  };
};

var _babelHelperFunctionName = require(\"babel-helper-function-name\");

var _babelHelperFunctionName2 = _interopRequireDefault(_babelHelperFunctionName);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-es2015-function-name/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-function-name/lib/index.js");
    }
}
