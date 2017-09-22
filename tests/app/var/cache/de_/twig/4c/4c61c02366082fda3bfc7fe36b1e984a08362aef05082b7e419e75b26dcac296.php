<?php

/* node_modules/es6-set/valid-set.js */
class __TwigTemplate_e4cc31c5483a0af129df851264d46efde04c904ce779d39207ac7a45469e446f extends Twig_Template
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
        $__internal_1bfbe3cddf1ee194bea32b9a98dee51645bbb81f7265dee02f0f28ed1f5570b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bfbe3cddf1ee194bea32b9a98dee51645bbb81f7265dee02f0f28ed1f5570b7->enter($__internal_1bfbe3cddf1ee194bea32b9a98dee51645bbb81f7265dee02f0f28ed1f5570b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/valid-set.js"));

        // line 1
        echo "'use strict';

var isSet = require('./is-set');

module.exports = function (x) {
\tif (!isSet(x)) throw new TypeError(x + \" is not a Set\");
\treturn x;
};
";
        
        $__internal_1bfbe3cddf1ee194bea32b9a98dee51645bbb81f7265dee02f0f28ed1f5570b7->leave($__internal_1bfbe3cddf1ee194bea32b9a98dee51645bbb81f7265dee02f0f28ed1f5570b7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/valid-set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var isSet = require('./is-set');

module.exports = function (x) {
\tif (!isSet(x)) throw new TypeError(x + \" is not a Set\");
\treturn x;
};
", "node_modules/es6-set/valid-set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/valid-set.js");
    }
}
