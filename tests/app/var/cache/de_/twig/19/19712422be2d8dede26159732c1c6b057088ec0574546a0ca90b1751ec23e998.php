<?php

/* node_modules/core-js/library/modules/_parse-int.js */
class __TwigTemplate_324e1c92dd15dde6f9cbf8518f43fff34b25b86e32a974721a0ce4b5e6191028 extends Twig_Template
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
        $__internal_c0d8c71f0547c1fb30eb22770e854999523cbf6b9d595aad1c8e671c85d969ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d8c71f0547c1fb30eb22770e854999523cbf6b9d595aad1c8e671c85d969ac->enter($__internal_c0d8c71f0547c1fb30eb22770e854999523cbf6b9d595aad1c8e671c85d969ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_parse-int.js"));

        // line 1
        echo "var \$parseInt = require('./_global').parseInt;
var \$trim = require('./_string-trim').trim;
var ws = require('./_string-ws');
var hex = /^[-+]?0[xX]/;

module.exports = \$parseInt(ws + '08') !== 8 || \$parseInt(ws + '0x16') !== 22 ? function parseInt(str, radix) {
  var string = \$trim(String(str), 3);
  return \$parseInt(string, (radix >>> 0) || (hex.test(string) ? 16 : 10));
} : \$parseInt;
";
        
        $__internal_c0d8c71f0547c1fb30eb22770e854999523cbf6b9d595aad1c8e671c85d969ac->leave($__internal_c0d8c71f0547c1fb30eb22770e854999523cbf6b9d595aad1c8e671c85d969ac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_parse-int.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$parseInt = require('./_global').parseInt;
var \$trim = require('./_string-trim').trim;
var ws = require('./_string-ws');
var hex = /^[-+]?0[xX]/;

module.exports = \$parseInt(ws + '08') !== 8 || \$parseInt(ws + '0x16') !== 22 ? function parseInt(str, radix) {
  var string = \$trim(String(str), 3);
  return \$parseInt(string, (radix >>> 0) || (hex.test(string) ? 16 : 10));
} : \$parseInt;
", "node_modules/core-js/library/modules/_parse-int.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_parse-int.js");
    }
}
