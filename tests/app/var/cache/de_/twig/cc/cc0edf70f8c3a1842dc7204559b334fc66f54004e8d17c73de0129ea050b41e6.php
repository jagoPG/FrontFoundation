<?php

/* node_modules/core-js/core/string.js */
class __TwigTemplate_50c895244e38530a1c7f2bc61b6cf65c52f348acfe0893687e27ee6b776cbade extends Twig_Template
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
        $__internal_2d134a32ce5455690ac563d96c21e70b9815e9a29994a6a1fd595e34fae88317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d134a32ce5455690ac563d96c21e70b9815e9a29994a6a1fd595e34fae88317->enter($__internal_2d134a32ce5455690ac563d96c21e70b9815e9a29994a6a1fd595e34fae88317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/core/string.js"));

        // line 1
        echo "require('../modules/core.string.escape-html');
require('../modules/core.string.unescape-html');
module.exports = require('../modules/_core').String;
";
        
        $__internal_2d134a32ce5455690ac563d96c21e70b9815e9a29994a6a1fd595e34fae88317->leave($__internal_2d134a32ce5455690ac563d96c21e70b9815e9a29994a6a1fd595e34fae88317_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/core/string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.string.escape-html');
require('../modules/core.string.unescape-html');
module.exports = require('../modules/_core').String;
", "node_modules/core-js/core/string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/core/string.js");
    }
}
