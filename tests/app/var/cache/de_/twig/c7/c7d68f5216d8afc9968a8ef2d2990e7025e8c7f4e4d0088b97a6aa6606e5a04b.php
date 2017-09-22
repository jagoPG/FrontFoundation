<?php

/* node_modules/vm-browserify/example/run/entry.js */
class __TwigTemplate_f7e8415180c53d313e900be931643d14a4b8f533e7ed80e8ba3c7fd5c4032a7c extends Twig_Template
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
        $__internal_aededdc26aa49020e67df2130070cd349e8fb4ecbc95f68ff7aeda5dfeed8de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aededdc26aa49020e67df2130070cd349e8fb4ecbc95f68ff7aeda5dfeed8de8->enter($__internal_aededdc26aa49020e67df2130070cd349e8fb4ecbc95f68ff7aeda5dfeed8de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/vm-browserify/example/run/entry.js"));

        // line 1
        echo "var vm = require('vm');

\$(function () {
    var res = vm.runInNewContext('a + 5', { a : 100 });
    \$('#res').text(res);
});
";
        
        $__internal_aededdc26aa49020e67df2130070cd349e8fb4ecbc95f68ff7aeda5dfeed8de8->leave($__internal_aededdc26aa49020e67df2130070cd349e8fb4ecbc95f68ff7aeda5dfeed8de8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/vm-browserify/example/run/entry.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var vm = require('vm');

\$(function () {
    var res = vm.runInNewContext('a + 5', { a : 100 });
    \$('#res').text(res);
});
", "node_modules/vm-browserify/example/run/entry.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/vm-browserify/example/run/entry.js");
    }
}
