<?php

/* node_modules/node-libs-browser/mock/console.js */
class __TwigTemplate_0448e28a9b9e4e646e84c6febf10a592d5b58fe46084f745a938a7f87fc3cc56 extends Twig_Template
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
        $__internal_976fdd89ea7f22f2432d0b787658bf6a60ec82f6c8563d9de74a4f6b65259b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976fdd89ea7f22f2432d0b787658bf6a60ec82f6c8563d9de74a4f6b65259b30->enter($__internal_976fdd89ea7f22f2432d0b787658bf6a60ec82f6c8563d9de74a4f6b65259b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-libs-browser/mock/console.js"));

        // line 1
        echo "var console;
if (typeof global !== \"undefined\" && global.console) {
    console = global.console
} else if (typeof window !== \"undefined\" && window.console) {
    console = window.console
} else {
    console = window.console = {}
}
module.exports = console;
for(var name in {log:1, info:1, error:1, warn:1, dir:1, trace:1, assert:1, time:1, timeEnd: 1})
\tif(!console[name])
\t\tconsole[name] = function() {};
";
        
        $__internal_976fdd89ea7f22f2432d0b787658bf6a60ec82f6c8563d9de74a4f6b65259b30->leave($__internal_976fdd89ea7f22f2432d0b787658bf6a60ec82f6c8563d9de74a4f6b65259b30_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-libs-browser/mock/console.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var console;
if (typeof global !== \"undefined\" && global.console) {
    console = global.console
} else if (typeof window !== \"undefined\" && window.console) {
    console = window.console
} else {
    console = window.console = {}
}
module.exports = console;
for(var name in {log:1, info:1, error:1, warn:1, dir:1, trace:1, assert:1, time:1, timeEnd: 1})
\tif(!console[name])
\t\tconsole[name] = function() {};
", "node_modules/node-libs-browser/mock/console.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-libs-browser/mock/console.js");
    }
}
