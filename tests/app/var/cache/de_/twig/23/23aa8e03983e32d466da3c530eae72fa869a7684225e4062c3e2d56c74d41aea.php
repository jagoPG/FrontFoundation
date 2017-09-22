<?php

/* node_modules/es5-ext/number/is-natural.js */
class __TwigTemplate_fc13c94ac574fa5870cf20096a392a64f03955cd1b7450bd3df1f1866e19d093 extends Twig_Template
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
        $__internal_2163744bf66adfa89a7b670e466390c2d84701e69cb5236ba00a286321bcfdff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2163744bf66adfa89a7b670e466390c2d84701e69cb5236ba00a286321bcfdff->enter($__internal_2163744bf66adfa89a7b670e466390c2d84701e69cb5236ba00a286321bcfdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-natural.js"));

        // line 1
        echo "\"use strict\";

var isInteger = require(\"./is-integer\");

module.exports = function (num) {
 return isInteger(num) && (num >= 0);
};
";
        
        $__internal_2163744bf66adfa89a7b670e466390c2d84701e69cb5236ba00a286321bcfdff->leave($__internal_2163744bf66adfa89a7b670e466390c2d84701e69cb5236ba00a286321bcfdff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-natural.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isInteger = require(\"./is-integer\");

module.exports = function (num) {
 return isInteger(num) && (num >= 0);
};
", "node_modules/es5-ext/number/is-natural.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-natural.js");
    }
}
