<?php

/* node_modules/object-inspect/tmp.js */
class __TwigTemplate_c8ed863db9e15ac76c8f551490a2462af509f07ace70d93bb0b45abae2cb96e1 extends Twig_Template
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
        $__internal_7242c2125213655eea146e55fe6f2bda355bdd2283baf8ac2ea95ddc4b6a85b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7242c2125213655eea146e55fe6f2bda355bdd2283baf8ac2ea95ddc4b6a85b5->enter($__internal_7242c2125213655eea146e55fe6f2bda355bdd2283baf8ac2ea95ddc4b6a85b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/tmp.js"));

        // line 1
        echo "require('core-js');
var i = require('./');

console.log(i(new Map([[1, 2]])), i(new Set([[1, 2]])));
";
        
        $__internal_7242c2125213655eea146e55fe6f2bda355bdd2283baf8ac2ea95ddc4b6a85b5->leave($__internal_7242c2125213655eea146e55fe6f2bda355bdd2283baf8ac2ea95ddc4b6a85b5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/tmp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('core-js');
var i = require('./');

console.log(i(new Map([[1, 2]])), i(new Set([[1, 2]])));
", "node_modules/object-inspect/tmp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/tmp.js");
    }
}
