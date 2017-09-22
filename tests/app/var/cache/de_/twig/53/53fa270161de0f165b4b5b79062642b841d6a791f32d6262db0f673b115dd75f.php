<?php

/* node_modules/resolve/example/sync.js */
class __TwigTemplate_1c85ee715457134b6f93b7842cc7280f4e579cf4f89655bdbc0ace8fdb32e73a extends Twig_Template
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
        $__internal_9a8b1a917fe543af2dbb8ee22f346949dfdc16a5afae007089456a623a63ea36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8b1a917fe543af2dbb8ee22f346949dfdc16a5afae007089456a623a63ea36->enter($__internal_9a8b1a917fe543af2dbb8ee22f346949dfdc16a5afae007089456a623a63ea36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/example/sync.js"));

        // line 1
        echo "var resolve = require('../');
var res = resolve.sync('tap', { basedir: __dirname });
console.log(res);
";
        
        $__internal_9a8b1a917fe543af2dbb8ee22f346949dfdc16a5afae007089456a623a63ea36->leave($__internal_9a8b1a917fe543af2dbb8ee22f346949dfdc16a5afae007089456a623a63ea36_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/example/sync.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var resolve = require('../');
var res = resolve.sync('tap', { basedir: __dirname });
console.log(res);
", "node_modules/resolve/example/sync.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/example/sync.js");
    }
}
