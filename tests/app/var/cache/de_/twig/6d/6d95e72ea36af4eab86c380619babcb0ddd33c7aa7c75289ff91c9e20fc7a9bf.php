<?php

/* node_modules/core-js/fn/set-interval.js */
class __TwigTemplate_1fb91ad8df3fb846532b8e3443d55b3f8b6a36b51d513505a4aba7a8d2eddb6f extends Twig_Template
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
        $__internal_82cc6ad1285396572f8e77eb6953e0b7312cc8c6f91efd1544014f9dc360b44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cc6ad1285396572f8e77eb6953e0b7312cc8c6f91efd1544014f9dc360b44b->enter($__internal_82cc6ad1285396572f8e77eb6953e0b7312cc8c6f91efd1544014f9dc360b44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/set-interval.js"));

        // line 1
        echo "require('../modules/web.timers');
module.exports = require('../modules/_core').setInterval;
";
        
        $__internal_82cc6ad1285396572f8e77eb6953e0b7312cc8c6f91efd1544014f9dc360b44b->leave($__internal_82cc6ad1285396572f8e77eb6953e0b7312cc8c6f91efd1544014f9dc360b44b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/set-interval.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/web.timers');
module.exports = require('../modules/_core').setInterval;
", "node_modules/core-js/fn/set-interval.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/set-interval.js");
    }
}
