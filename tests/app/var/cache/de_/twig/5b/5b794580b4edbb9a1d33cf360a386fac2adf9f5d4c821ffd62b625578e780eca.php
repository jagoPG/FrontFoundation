<?php

/* node_modules/core-js/library/fn/string/bold.js */
class __TwigTemplate_cc5b82cc95c335414fe6246361055e434fbda0c5520ebff174bee5706b453e0c extends Twig_Template
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
        $__internal_fa40466b9563f744332650e347a1118a86f85693671a27126df3fb7e3c2bd803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa40466b9563f744332650e347a1118a86f85693671a27126df3fb7e3c2bd803->enter($__internal_fa40466b9563f744332650e347a1118a86f85693671a27126df3fb7e3c2bd803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/bold.js"));

        // line 1
        echo "require('../../modules/es6.string.bold');
module.exports = require('../../modules/_core').String.bold;
";
        
        $__internal_fa40466b9563f744332650e347a1118a86f85693671a27126df3fb7e3c2bd803->leave($__internal_fa40466b9563f744332650e347a1118a86f85693671a27126df3fb7e3c2bd803_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/bold.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.bold');
module.exports = require('../../modules/_core').String.bold;
", "node_modules/core-js/library/fn/string/bold.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/bold.js");
    }
}
