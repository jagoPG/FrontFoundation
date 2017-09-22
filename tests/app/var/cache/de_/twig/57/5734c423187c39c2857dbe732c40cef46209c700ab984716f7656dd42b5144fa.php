<?php

/* node_modules/lodash/fp/partial.js */
class __TwigTemplate_8185c5732ab93b2ecbc0a6b2c44970a94b729492cfef3a63f5427ce3449ca9f2 extends Twig_Template
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
        $__internal_6bf5951b90b4f9cc3e402d43f1ccd78695d7c00d2a00810d7c9f5cd0d1009907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf5951b90b4f9cc3e402d43f1ccd78695d7c00d2a00810d7c9f5cd0d1009907->enter($__internal_6bf5951b90b4f9cc3e402d43f1ccd78695d7c00d2a00810d7c9f5cd0d1009907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/partial.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('partial', require('../partial'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_6bf5951b90b4f9cc3e402d43f1ccd78695d7c00d2a00810d7c9f5cd0d1009907->leave($__internal_6bf5951b90b4f9cc3e402d43f1ccd78695d7c00d2a00810d7c9f5cd0d1009907_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/partial.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('partial', require('../partial'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/partial.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/partial.js");
    }
}
