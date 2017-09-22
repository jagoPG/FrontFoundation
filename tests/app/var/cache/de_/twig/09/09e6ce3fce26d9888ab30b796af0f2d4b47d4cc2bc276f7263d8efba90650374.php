<?php

/* node_modules/core-js/library/modules/_parse-float.js */
class __TwigTemplate_b6e9d03157d66b996aec6c1735b6f07761745db33240afdef44b063e1f06a552 extends Twig_Template
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
        $__internal_5d0916451c7bd4671230bb495053467c50020138e058f21f9c2bed2f3958c81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0916451c7bd4671230bb495053467c50020138e058f21f9c2bed2f3958c81d->enter($__internal_5d0916451c7bd4671230bb495053467c50020138e058f21f9c2bed2f3958c81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_parse-float.js"));

        // line 1
        echo "var \$parseFloat = require('./_global').parseFloat;
var \$trim = require('./_string-trim').trim;

module.exports = 1 / \$parseFloat(require('./_string-ws') + '-0') !== -Infinity ? function parseFloat(str) {
  var string = \$trim(String(str), 3);
  var result = \$parseFloat(string);
  return result === 0 && string.charAt(0) == '-' ? -0 : result;
} : \$parseFloat;
";
        
        $__internal_5d0916451c7bd4671230bb495053467c50020138e058f21f9c2bed2f3958c81d->leave($__internal_5d0916451c7bd4671230bb495053467c50020138e058f21f9c2bed2f3958c81d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_parse-float.js";
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
", "node_modules/core-js/library/modules/_parse-float.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_parse-float.js");
    }
}
