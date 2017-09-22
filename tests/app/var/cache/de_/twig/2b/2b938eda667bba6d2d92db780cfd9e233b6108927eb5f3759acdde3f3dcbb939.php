<?php

/* node_modules/es5-ext/object/is-object.js */
class __TwigTemplate_45ccad45f9f1ad9bbefe73b1e418767f853fd925989f93097b90defbb2a4eb23 extends Twig_Template
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
        $__internal_5e481f586b34e5306b3b4ab3130d3c4d1d7ca08a81ebe08101326c9ae3aaff3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e481f586b34e5306b3b4ab3130d3c4d1d7ca08a81ebe08101326c9ae3aaff3a->enter($__internal_5e481f586b34e5306b3b4ab3130d3c4d1d7ca08a81ebe08101326c9ae3aaff3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/is-object.js"));

        // line 1
        echo "\"use strict\";

var isValue = require(\"./is-value\");

var map = { function: true, object: true };

module.exports = function (value) {
\treturn (isValue(value) && map[typeof value]) || false;
};
";
        
        $__internal_5e481f586b34e5306b3b4ab3130d3c4d1d7ca08a81ebe08101326c9ae3aaff3a->leave($__internal_5e481f586b34e5306b3b4ab3130d3c4d1d7ca08a81ebe08101326c9ae3aaff3a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/is-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isValue = require(\"./is-value\");

var map = { function: true, object: true };

module.exports = function (value) {
\treturn (isValue(value) && map[typeof value]) || false;
};
", "node_modules/es5-ext/object/is-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/is-object.js");
    }
}
