<?php

/* node_modules/lodash/fp/string.js */
class __TwigTemplate_682bc6b3fc962ad248bbdc50a537783eaf77374bc6732006f3687e0fc32049df extends Twig_Template
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
        $__internal_04d8f27f59a500ecfe026cc7cf9c33e8b01222f5c0a2a4852fceb44ba3cfa8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d8f27f59a500ecfe026cc7cf9c33e8b01222f5c0a2a4852fceb44ba3cfa8f5->enter($__internal_04d8f27f59a500ecfe026cc7cf9c33e8b01222f5c0a2a4852fceb44ba3cfa8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/string.js"));

        // line 1
        echo "var convert = require('./convert');
module.exports = convert(require('../string'));
";
        
        $__internal_04d8f27f59a500ecfe026cc7cf9c33e8b01222f5c0a2a4852fceb44ba3cfa8f5->leave($__internal_04d8f27f59a500ecfe026cc7cf9c33e8b01222f5c0a2a4852fceb44ba3cfa8f5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert');
module.exports = convert(require('../string'));
", "node_modules/lodash/fp/string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/string.js");
    }
}
