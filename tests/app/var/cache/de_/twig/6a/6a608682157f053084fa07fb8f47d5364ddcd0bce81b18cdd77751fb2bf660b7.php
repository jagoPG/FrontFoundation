<?php

/* node_modules/core-js/modules/_parse-int.js */
class __TwigTemplate_c7adc0577f582b517cd613446297d19dd7789efa517986cece6bcb5251803c6a extends Twig_Template
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
        $__internal_5b04d1679034b9066abe6877f04b03806c376ed21af9f625a346f9ffffd3a3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b04d1679034b9066abe6877f04b03806c376ed21af9f625a346f9ffffd3a3fd->enter($__internal_5b04d1679034b9066abe6877f04b03806c376ed21af9f625a346f9ffffd3a3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_parse-int.js"));

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
        
        $__internal_5b04d1679034b9066abe6877f04b03806c376ed21af9f625a346f9ffffd3a3fd->leave($__internal_5b04d1679034b9066abe6877f04b03806c376ed21af9f625a346f9ffffd3a3fd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_parse-int.js";
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
", "node_modules/core-js/modules/_parse-int.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_parse-int.js");
    }
}
