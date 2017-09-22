<?php

/* node_modules/babel-plugin-transform-es2015-sticky-regex/lib/index.js */
class __TwigTemplate_d73edeb31e34d3150ef25629ce6749534b02d0f6a8a8ac44878ff9873e6f84ba extends Twig_Template
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
        $__internal_c2e181c23a26418c6e92c876cb1724f896ca21c80f4a559c1fe9021682803b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e181c23a26418c6e92c876cb1724f896ca21c80f4a559c1fe9021682803b31->enter($__internal_c2e181c23a26418c6e92c876cb1724f896ca21c80f4a559c1fe9021682803b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-sticky-regex/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    visitor: {
      RegExpLiteral: function RegExpLiteral(path) {
        var node = path.node;

        if (!regex.is(node, \"y\")) return;

        path.replaceWith(t.newExpression(t.identifier(\"RegExp\"), [t.stringLiteral(node.pattern), t.stringLiteral(node.flags)]));
      }
    }
  };
};

var _babelHelperRegex = require(\"babel-helper-regex\");

var regex = _interopRequireWildcard(_babelHelperRegex);

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

module.exports = exports[\"default\"];";
        
        $__internal_c2e181c23a26418c6e92c876cb1724f896ca21c80f4a559c1fe9021682803b31->leave($__internal_c2e181c23a26418c6e92c876cb1724f896ca21c80f4a559c1fe9021682803b31_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-sticky-regex/lib/index.js";
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
      RegExpLiteral: function RegExpLiteral(path) {
        var node = path.node;

        if (!regex.is(node, \"y\")) return;

        path.replaceWith(t.newExpression(t.identifier(\"RegExp\"), [t.stringLiteral(node.pattern), t.stringLiteral(node.flags)]));
      }
    }
  };
};

var _babelHelperRegex = require(\"babel-helper-regex\");

var regex = _interopRequireWildcard(_babelHelperRegex);

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-es2015-sticky-regex/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-sticky-regex/lib/index.js");
    }
}
