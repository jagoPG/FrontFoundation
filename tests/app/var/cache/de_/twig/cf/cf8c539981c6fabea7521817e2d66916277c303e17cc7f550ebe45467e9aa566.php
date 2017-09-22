<?php

/* node_modules/core-js/modules/core.object.classof.js */
class __TwigTemplate_b66c6246ac82f97ae9d11a23fff608036214de2d44ea6b357dae54b090018dfc extends Twig_Template
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
        $__internal_a66d13cc1876f5fa99ff8efcf353e009ee2793b4a4458db14871989c77d44de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66d13cc1876f5fa99ff8efcf353e009ee2793b4a4458db14871989c77d44de4->enter($__internal_a66d13cc1876f5fa99ff8efcf353e009ee2793b4a4458db14871989c77d44de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/core.object.classof.js"));

        // line 1
        echo "var \$export = require('./_export');

\$export(\$export.S + \$export.F, 'Object', { classof: require('./_classof') });
";
        
        $__internal_a66d13cc1876f5fa99ff8efcf353e009ee2793b4a4458db14871989c77d44de4->leave($__internal_a66d13cc1876f5fa99ff8efcf353e009ee2793b4a4458db14871989c77d44de4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/core.object.classof.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');

\$export(\$export.S + \$export.F, 'Object', { classof: require('./_classof') });
", "node_modules/core-js/modules/core.object.classof.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/core.object.classof.js");
    }
}
