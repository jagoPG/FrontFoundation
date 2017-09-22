<?php

/* node_modules/lodash/fp/sortedIndex.js */
class __TwigTemplate_062a9ea788d28f5b35cd88a4312be7d901a4afdcdfb99c6d4007959b06cf931a extends Twig_Template
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
        $__internal_980686bc28b944858c23fd04b29aa7488f8c718341948ccc5e742c8985c3a85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980686bc28b944858c23fd04b29aa7488f8c718341948ccc5e742c8985c3a85a->enter($__internal_980686bc28b944858c23fd04b29aa7488f8c718341948ccc5e742c8985c3a85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/sortedIndex.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('sortedIndex', require('../sortedIndex'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_980686bc28b944858c23fd04b29aa7488f8c718341948ccc5e742c8985c3a85a->leave($__internal_980686bc28b944858c23fd04b29aa7488f8c718341948ccc5e742c8985c3a85a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/sortedIndex.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('sortedIndex', require('../sortedIndex'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/sortedIndex.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/sortedIndex.js");
    }
}
