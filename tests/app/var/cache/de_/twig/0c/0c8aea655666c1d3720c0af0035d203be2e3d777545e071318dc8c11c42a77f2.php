<?php

/* node_modules/tape/example/static/server.js */
class __TwigTemplate_43392e36f60d300edd73fa9057be7efc554f3b641e9794170a69e35388e5b05d extends Twig_Template
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
        $__internal_040b30c24de1f55b61c7e035c9ecabae34d2449444dca59b4300abfc9c136b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040b30c24de1f55b61c7e035c9ecabae34d2449444dca59b4300abfc9c136b50->enter($__internal_040b30c24de1f55b61c7e035c9ecabae34d2449444dca59b4300abfc9c136b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/example/static/server.js"));

        // line 1
        echo "var http = require('http');
var ecstatic = require('ecstatic')(__dirname);
var server = http.createServer(ecstatic);
server.listen(8000);
";
        
        $__internal_040b30c24de1f55b61c7e035c9ecabae34d2449444dca59b4300abfc9c136b50->leave($__internal_040b30c24de1f55b61c7e035c9ecabae34d2449444dca59b4300abfc9c136b50_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/example/static/server.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var http = require('http');
var ecstatic = require('ecstatic')(__dirname);
var server = http.createServer(ecstatic);
server.listen(8000);
", "node_modules/tape/example/static/server.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/example/static/server.js");
    }
}
