<?php

/* node_modules/vm-browserify/example/run/server.js */
class __TwigTemplate_568e3cfe4f53ff39a6ba0cfe75fc1101c3bcd05f625b8fe205629c83b35631b6 extends Twig_Template
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
        $__internal_24164955652f5e39746714ac9d00ccaa7f746535985bc19680087023def4e3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24164955652f5e39746714ac9d00ccaa7f746535985bc19680087023def4e3cb->enter($__internal_24164955652f5e39746714ac9d00ccaa7f746535985bc19680087023def4e3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/vm-browserify/example/run/server.js"));

        // line 1
        echo "var ecstatic = require('ecstatic')(__dirname);
var http = require('http');
http.createServer(ecstatic).listen(8000);

console.log('listening on :8000');
console.log('# remember to run browserify entry.js -o bundle.js');
";
        
        $__internal_24164955652f5e39746714ac9d00ccaa7f746535985bc19680087023def4e3cb->leave($__internal_24164955652f5e39746714ac9d00ccaa7f746535985bc19680087023def4e3cb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/vm-browserify/example/run/server.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var ecstatic = require('ecstatic')(__dirname);
var http = require('http');
http.createServer(ecstatic).listen(8000);

console.log('listening on :8000');
console.log('# remember to run browserify entry.js -o bundle.js');
", "node_modules/vm-browserify/example/run/server.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/vm-browserify/example/run/server.js");
    }
}
