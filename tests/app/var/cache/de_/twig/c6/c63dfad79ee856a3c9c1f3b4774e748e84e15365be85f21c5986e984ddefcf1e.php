<?php

/* node_modules/core-js/library/fn/object/define.js */
class __TwigTemplate_eca3407528965f8f859650e4a613922056fb589f2721d81766a602ab235250eb extends Twig_Template
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
        $__internal_5d7d3cb250c32de8ce7f54d005478dc806a3ab2345645aefa8b2b2d04f0b3200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7d3cb250c32de8ce7f54d005478dc806a3ab2345645aefa8b2b2d04f0b3200->enter($__internal_5d7d3cb250c32de8ce7f54d005478dc806a3ab2345645aefa8b2b2d04f0b3200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/define.js"));

        // line 1
        echo "require('../../modules/core.object.define');
module.exports = require('../../modules/_core').Object.define;
";
        
        $__internal_5d7d3cb250c32de8ce7f54d005478dc806a3ab2345645aefa8b2b2d04f0b3200->leave($__internal_5d7d3cb250c32de8ce7f54d005478dc806a3ab2345645aefa8b2b2d04f0b3200_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/define.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/core.object.define');
module.exports = require('../../modules/_core').Object.define;
", "node_modules/core-js/library/fn/object/define.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/define.js");
    }
}
