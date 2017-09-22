<?php

/* node_modules/core-js/modules/_parse-float.js */
class __TwigTemplate_eabc145818dda79251f1fe8a79a3f0a59cc8d44bf5405a657807498fb1d59538 extends Twig_Template
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
        $__internal_16ce6519858b8b0747f35b863692d771de034b82545e531f4068fa100f825c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ce6519858b8b0747f35b863692d771de034b82545e531f4068fa100f825c0c->enter($__internal_16ce6519858b8b0747f35b863692d771de034b82545e531f4068fa100f825c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_parse-float.js"));

        // line 1
        echo "var \$parseFloat = require('./_global').parseFloat;
var \$trim = require('./_string-trim').trim;

module.exports = 1 / \$parseFloat(require('./_string-ws') + '-0') !== -Infinity ? function parseFloat(str) {
  var string = \$trim(String(str), 3);
  var result = \$parseFloat(string);
  return result === 0 && string.charAt(0) == '-' ? -0 : result;
} : \$parseFloat;
";
        
        $__internal_16ce6519858b8b0747f35b863692d771de034b82545e531f4068fa100f825c0c->leave($__internal_16ce6519858b8b0747f35b863692d771de034b82545e531f4068fa100f825c0c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_parse-float.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$parseFloat = require('./_global').parseFloat;
var \$trim = require('./_string-trim').trim;

module.exports = 1 / \$parseFloat(require('./_string-ws') + '-0') !== -Infinity ? function parseFloat(str) {
  var string = \$trim(String(str), 3);
  var result = \$parseFloat(string);
  return result === 0 && string.charAt(0) == '-' ? -0 : result;
} : \$parseFloat;
", "node_modules/core-js/modules/_parse-float.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_parse-float.js");
    }
}
