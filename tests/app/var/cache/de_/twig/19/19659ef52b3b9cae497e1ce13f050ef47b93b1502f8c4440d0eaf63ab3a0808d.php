<?php

/* node_modules/minimist/example/parse.js */
class __TwigTemplate_4659b8f40ee176cfb09fdd35660ee74556cac533d14747ae8d5a491ace410df5 extends Twig_Template
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
        $__internal_c477f4641a62b53108c24d5ba2871e7765685f3570b420b8dfc88fcd62691215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c477f4641a62b53108c24d5ba2871e7765685f3570b420b8dfc88fcd62691215->enter($__internal_c477f4641a62b53108c24d5ba2871e7765685f3570b420b8dfc88fcd62691215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/minimist/example/parse.js"));

        // line 1
        echo "var argv = require('../')(process.argv.slice(2));
console.dir(argv);
";
        
        $__internal_c477f4641a62b53108c24d5ba2871e7765685f3570b420b8dfc88fcd62691215->leave($__internal_c477f4641a62b53108c24d5ba2871e7765685f3570b420b8dfc88fcd62691215_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/minimist/example/parse.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var argv = require('../')(process.argv.slice(2));
console.dir(argv);
", "node_modules/minimist/example/parse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/minimist/example/parse.js");
    }
}
