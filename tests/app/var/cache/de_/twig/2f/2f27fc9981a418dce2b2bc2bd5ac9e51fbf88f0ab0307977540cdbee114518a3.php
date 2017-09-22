<?php

/* node_modules/babel-plugin-transform-es2015-unicode-regex/lib/index.js */
class __TwigTemplate_1e49cec52ca1b22ceb82ef67a0506e32683f07b73bf523e610a83a4dcb526a9a extends Twig_Template
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
        $__internal_56d8a69b4df781d5c6412c1c26a7129491d43e54de52bbf27386de5fc3c3bf7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d8a69b4df781d5c6412c1c26a7129491d43e54de52bbf27386de5fc3c3bf7f->enter($__internal_56d8a69b4df781d5c6412c1c26a7129491d43e54de52bbf27386de5fc3c3bf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-unicode-regex/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    visitor: {
      RegExpLiteral: function RegExpLiteral(_ref) {
        var node = _ref.node;

        if (!regex.is(node, \"u\")) return;
        node.pattern = (0, _regexpuCore2.default)(node.pattern, node.flags);
        regex.pullFlag(node, \"u\");
      }
    }
  };
};

var _regexpuCore = require(\"regexpu-core\");

var _regexpuCore2 = _interopRequireDefault(_regexpuCore);

var _babelHelperRegex = require(\"babel-helper-regex\");

var regex = _interopRequireWildcard(_babelHelperRegex);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];";
        
        $__internal_56d8a69b4df781d5c6412c1c26a7129491d43e54de52bbf27386de5fc3c3bf7f->leave($__internal_56d8a69b4df781d5c6412c1c26a7129491d43e54de52bbf27386de5fc3c3bf7f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-unicode-regex/lib/index.js";
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
      RegExpLiteral: function RegExpLiteral(_ref) {
        var node = _ref.node;

        if (!regex.is(node, \"u\")) return;
        node.pattern = (0, _regexpuCore2.default)(node.pattern, node.flags);
        regex.pullFlag(node, \"u\");
      }
    }
  };
};

var _regexpuCore = require(\"regexpu-core\");

var _regexpuCore2 = _interopRequireDefault(_regexpuCore);

var _babelHelperRegex = require(\"babel-helper-regex\");

var regex = _interopRequireWildcard(_babelHelperRegex);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-es2015-unicode-regex/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-unicode-regex/lib/index.js");
    }
}
