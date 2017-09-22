<?php

/* node_modules/tape/test/max_listeners/source.js */
class __TwigTemplate_464b6b395153a858f9bf4952c16552f01e0aac56ee18694d31032522cb7a2dfc extends Twig_Template
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
        $__internal_599962eab4e265372c1fb6527f03a4ae4862842cd1f997631783eaae72fb5ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599962eab4e265372c1fb6527f03a4ae4862842cd1f997631783eaae72fb5ca7->enter($__internal_599962eab4e265372c1fb6527f03a4ae4862842cd1f997631783eaae72fb5ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/max_listeners/source.js"));

        // line 1
        echo "var test = require('../../');

for (var i = 0; i < 11; i ++) {
    test(function (t) { t.ok(true, 'true is truthy'); t.end() });
}
";
        
        $__internal_599962eab4e265372c1fb6527f03a4ae4862842cd1f997631783eaae72fb5ca7->leave($__internal_599962eab4e265372c1fb6527f03a4ae4862842cd1f997631783eaae72fb5ca7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/max_listeners/source.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../../');

for (var i = 0; i < 11; i ++) {
    test(function (t) { t.ok(true, 'true is truthy'); t.end() });
}
", "node_modules/tape/test/max_listeners/source.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/max_listeners/source.js");
    }
}
