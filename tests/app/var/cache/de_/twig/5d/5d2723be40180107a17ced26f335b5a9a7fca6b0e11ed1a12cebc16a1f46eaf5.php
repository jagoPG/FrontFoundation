<?php

/* node_modules/core-js/library/fn/set-timeout.js */
class __TwigTemplate_d5950266773be3ef3d99ce69de386a087d9cd393189354c209dbca275c642078 extends Twig_Template
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
        $__internal_1ad50754a44fd8ae18ed1d2ae68942eb28c22fe56450e71d1d1bb1a6f1aec451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad50754a44fd8ae18ed1d2ae68942eb28c22fe56450e71d1d1bb1a6f1aec451->enter($__internal_1ad50754a44fd8ae18ed1d2ae68942eb28c22fe56450e71d1d1bb1a6f1aec451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/set-timeout.js"));

        // line 1
        echo "require('../modules/web.timers');
module.exports = require('../modules/_core').setTimeout;
";
        
        $__internal_1ad50754a44fd8ae18ed1d2ae68942eb28c22fe56450e71d1d1bb1a6f1aec451->leave($__internal_1ad50754a44fd8ae18ed1d2ae68942eb28c22fe56450e71d1d1bb1a6f1aec451_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/set-timeout.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/web.timers');
module.exports = require('../modules/_core').setTimeout;
", "node_modules/core-js/library/fn/set-timeout.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/set-timeout.js");
    }
}
