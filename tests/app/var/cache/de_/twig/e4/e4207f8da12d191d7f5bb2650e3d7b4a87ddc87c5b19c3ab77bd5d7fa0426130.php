<?php

/* node_modules/lodash/fp/trimChars.js */
class __TwigTemplate_519a1c32b360907c85efa717e4c9bab4734ca8325ad99a4a99115d15b3288742 extends Twig_Template
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
        $__internal_86093d9a73f88e90e852866896bfbd320c5adba51d439ee17aeea6dd7db119ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86093d9a73f88e90e852866896bfbd320c5adba51d439ee17aeea6dd7db119ad->enter($__internal_86093d9a73f88e90e852866896bfbd320c5adba51d439ee17aeea6dd7db119ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/trimChars.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('trimChars', require('../trim'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_86093d9a73f88e90e852866896bfbd320c5adba51d439ee17aeea6dd7db119ad->leave($__internal_86093d9a73f88e90e852866896bfbd320c5adba51d439ee17aeea6dd7db119ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/trimChars.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('trimChars', require('../trim'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/trimChars.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/trimChars.js");
    }
}
