<?php

/* node_modules/es5-ext/date/#/floor-month.js */
class __TwigTemplate_283bef84f2245a1c420cec9289bee48ad7bc0d3313794d100dce74d048f783b7 extends Twig_Template
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
        $__internal_5d860d0d54358d0b380b2c30eb2781a1702eb187b04744dd7fd2466eadb67fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d860d0d54358d0b380b2c30eb2781a1702eb187b04744dd7fd2466eadb67fe2->enter($__internal_5d860d0d54358d0b380b2c30eb2781a1702eb187b04744dd7fd2466eadb67fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/date/#/floor-month.js"));

        // line 1
        echo "\"use strict\";

var floorDay = require(\"./floor-day\");

module.exports = function () {
\tfloorDay.call(this).setDate(1);
\treturn this;
};
";
        
        $__internal_5d860d0d54358d0b380b2c30eb2781a1702eb187b04744dd7fd2466eadb67fe2->leave($__internal_5d860d0d54358d0b380b2c30eb2781a1702eb187b04744dd7fd2466eadb67fe2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/date/#/floor-month.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var floorDay = require(\"./floor-day\");

module.exports = function () {
\tfloorDay.call(this).setDate(1);
\treturn this;
};
", "node_modules/es5-ext/date/#/floor-month.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/date/#/floor-month.js");
    }
}
