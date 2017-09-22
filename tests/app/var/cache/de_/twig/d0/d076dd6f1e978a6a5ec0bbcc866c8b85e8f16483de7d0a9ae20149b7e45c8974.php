<?php

/* node_modules/loose-envify/custom.js */
class __TwigTemplate_ab175454c9045ecda790426134610e9d3bf308b626c6c9e28accc4f9c21f79ae extends Twig_Template
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
        $__internal_8a4091efbbadfc14b00e15ef338eb8f9c653d84fa8390a16161e8d15a5fd53ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4091efbbadfc14b00e15ef338eb8f9c653d84fa8390a16161e8d15a5fd53ee->enter($__internal_8a4091efbbadfc14b00e15ef338eb8f9c653d84fa8390a16161e8d15a5fd53ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loose-envify/custom.js"));

        // line 1
        echo "// envify compatibility
'use strict';

module.exports = require('./loose-envify');
";
        
        $__internal_8a4091efbbadfc14b00e15ef338eb8f9c653d84fa8390a16161e8d15a5fd53ee->leave($__internal_8a4091efbbadfc14b00e15ef338eb8f9c653d84fa8390a16161e8d15a5fd53ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loose-envify/custom.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// envify compatibility
'use strict';

module.exports = require('./loose-envify');
", "node_modules/loose-envify/custom.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loose-envify/custom.js");
    }
}
