<?php

/* node_modules/babel-plugin-transform-async-to-generator/lib/index.js */
class __TwigTemplate_9eb20a49c3f7f82433f77108bea876820140f65f3af359d83a03275a0da2730f extends Twig_Template
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
        $__internal_1d56ba9eb4da62140d58bcb9cc298a3e93da92cef2e01132405abc5b69cf06f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d56ba9eb4da62140d58bcb9cc298a3e93da92cef2e01132405abc5b69cf06f2->enter($__internal_1d56ba9eb4da62140d58bcb9cc298a3e93da92cef2e01132405abc5b69cf06f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-async-to-generator/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    inherits: require(\"babel-plugin-syntax-async-functions\"),

    visitor: {
      Function: function Function(path, state) {
        if (!path.node.async || path.node.generator) return;

        (0, _babelHelperRemapAsyncToGenerator2.default)(path, state.file, {
          wrapAsync: state.addHelper(\"asyncToGenerator\")
        });
      }
    }
  };
};

var _babelHelperRemapAsyncToGenerator = require(\"babel-helper-remap-async-to-generator\");

var _babelHelperRemapAsyncToGenerator2 = _interopRequireDefault(_babelHelperRemapAsyncToGenerator);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];";
        
        $__internal_1d56ba9eb4da62140d58bcb9cc298a3e93da92cef2e01132405abc5b69cf06f2->leave($__internal_1d56ba9eb4da62140d58bcb9cc298a3e93da92cef2e01132405abc5b69cf06f2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-async-to-generator/lib/index.js";
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
    inherits: require(\"babel-plugin-syntax-async-functions\"),

    visitor: {
      Function: function Function(path, state) {
        if (!path.node.async || path.node.generator) return;

        (0, _babelHelperRemapAsyncToGenerator2.default)(path, state.file, {
          wrapAsync: state.addHelper(\"asyncToGenerator\")
        });
      }
    }
  };
};

var _babelHelperRemapAsyncToGenerator = require(\"babel-helper-remap-async-to-generator\");

var _babelHelperRemapAsyncToGenerator2 = _interopRequireDefault(_babelHelperRemapAsyncToGenerator);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-async-to-generator/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-async-to-generator/lib/index.js");
    }
}
