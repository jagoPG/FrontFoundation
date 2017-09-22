<?php

/* node_modules/babel-helper-optimise-call-expression/lib/index.js */
class __TwigTemplate_1beeaba1ec7d7a312bad8960ac8f16e37302dbdeb4169b2cfc6c00da98776e42 extends Twig_Template
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
        $__internal_2443109555c57a8f45261817d7de4cd1332c69be452401214cc0fe2a70fe0407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2443109555c57a8f45261817d7de4cd1332c69be452401214cc0fe2a70fe0407->enter($__internal_2443109555c57a8f45261817d7de4cd1332c69be452401214cc0fe2a70fe0407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-helper-optimise-call-expression/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function (callee, thisNode, args) {
  if (args.length === 1 && t.isSpreadElement(args[0]) && t.isIdentifier(args[0].argument, { name: \"arguments\" })) {
    return t.callExpression(t.memberExpression(callee, t.identifier(\"apply\")), [thisNode, args[0].argument]);
  } else {
    return t.callExpression(t.memberExpression(callee, t.identifier(\"call\")), [thisNode].concat(args));
  }
};

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

module.exports = exports[\"default\"];";
        
        $__internal_2443109555c57a8f45261817d7de4cd1332c69be452401214cc0fe2a70fe0407->leave($__internal_2443109555c57a8f45261817d7de4cd1332c69be452401214cc0fe2a70fe0407_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-helper-optimise-call-expression/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function (callee, thisNode, args) {
  if (args.length === 1 && t.isSpreadElement(args[0]) && t.isIdentifier(args[0].argument, { name: \"arguments\" })) {
    return t.callExpression(t.memberExpression(callee, t.identifier(\"apply\")), [thisNode, args[0].argument]);
  } else {
    return t.callExpression(t.memberExpression(callee, t.identifier(\"call\")), [thisNode].concat(args));
  }
};

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

module.exports = exports[\"default\"];", "node_modules/babel-helper-optimise-call-expression/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-helper-optimise-call-expression/lib/index.js");
    }
}
