<?php

/* node_modules/object-inspect/example/fn.js */
class __TwigTemplate_176f362665bd4aba72bd161e5886c5d358b7ebc9940ac7e2e9d4921624833450 extends Twig_Template
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
        $__internal_5aeabf443a156bd7a3f7fe4364e5f676eca2b6555012cc8a1864871d470a9e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aeabf443a156bd7a3f7fe4364e5f676eca2b6555012cc8a1864871d470a9e00->enter($__internal_5aeabf443a156bd7a3f7fe4364e5f676eca2b6555012cc8a1864871d470a9e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/example/fn.js"));

        // line 1
        echo "var inspect = require('../');
var obj = [ 1, 2, function f (n) { return n + 5 }, 4 ];
console.log(inspect(obj));
";
        
        $__internal_5aeabf443a156bd7a3f7fe4364e5f676eca2b6555012cc8a1864871d470a9e00->leave($__internal_5aeabf443a156bd7a3f7fe4364e5f676eca2b6555012cc8a1864871d470a9e00_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/example/fn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var inspect = require('../');
var obj = [ 1, 2, function f (n) { return n + 5 }, 4 ];
console.log(inspect(obj));
", "node_modules/object-inspect/example/fn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/example/fn.js");
    }
}
