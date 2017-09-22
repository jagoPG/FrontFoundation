<?php

/* node_modules/babel-helper-get-function-arity/lib/index.js */
class __TwigTemplate_a6edd62164fd0cdc61306777cb7d4edd6193ac688548dd76ae32af2c6a6bb215 extends Twig_Template
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
        $__internal_3f2fb90559aedcc762070032adf01cbef30bb11604d4ab3d211faab9cd00af98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2fb90559aedcc762070032adf01cbef30bb11604d4ab3d211faab9cd00af98->enter($__internal_3f2fb90559aedcc762070032adf01cbef30bb11604d4ab3d211faab9cd00af98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-helper-get-function-arity/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function (node) {
  var params = node.params;
  for (var i = 0; i < params.length; i++) {
    var param = params[i];
    if (t.isAssignmentPattern(param) || t.isRestElement(param)) {
      return i;
    }
  }
  return params.length;
};

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

module.exports = exports[\"default\"];";
        
        $__internal_3f2fb90559aedcc762070032adf01cbef30bb11604d4ab3d211faab9cd00af98->leave($__internal_3f2fb90559aedcc762070032adf01cbef30bb11604d4ab3d211faab9cd00af98_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-helper-get-function-arity/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function (node) {
  var params = node.params;
  for (var i = 0; i < params.length; i++) {
    var param = params[i];
    if (t.isAssignmentPattern(param) || t.isRestElement(param)) {
      return i;
    }
  }
  return params.length;
};

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

module.exports = exports[\"default\"];", "node_modules/babel-helper-get-function-arity/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-helper-get-function-arity/lib/index.js");
    }
}
