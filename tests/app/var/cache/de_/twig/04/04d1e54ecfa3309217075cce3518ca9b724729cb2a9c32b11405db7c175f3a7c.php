<?php

/* node_modules/core-js/modules/_is-integer.js */
class __TwigTemplate_084210bc08b5bd95807ed085d8f040d187059618fae0a6d9c3473900847c8402 extends Twig_Template
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
        $__internal_4a5628d0fcbbb3d1221b42a0959c52f865f1135028deb73cd750b306d52f59dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5628d0fcbbb3d1221b42a0959c52f865f1135028deb73cd750b306d52f59dc->enter($__internal_4a5628d0fcbbb3d1221b42a0959c52f865f1135028deb73cd750b306d52f59dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_is-integer.js"));

        // line 1
        echo "// 20.1.2.3 Number.isInteger(number)
var isObject = require('./_is-object');
var floor = Math.floor;
module.exports = function isInteger(it) {
  return !isObject(it) && isFinite(it) && floor(it) === it;
};
";
        
        $__internal_4a5628d0fcbbb3d1221b42a0959c52f865f1135028deb73cd750b306d52f59dc->leave($__internal_4a5628d0fcbbb3d1221b42a0959c52f865f1135028deb73cd750b306d52f59dc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_is-integer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.1.2.3 Number.isInteger(number)
var isObject = require('./_is-object');
var floor = Math.floor;
module.exports = function isInteger(it) {
  return !isObject(it) && isFinite(it) && floor(it) === it;
};
", "node_modules/core-js/modules/_is-integer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_is-integer.js");
    }
}
