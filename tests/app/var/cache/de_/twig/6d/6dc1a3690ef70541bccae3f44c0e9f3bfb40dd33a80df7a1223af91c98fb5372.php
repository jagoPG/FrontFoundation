<?php

/* node_modules/defined/example/defined.js */
class __TwigTemplate_bda8bb1f0b8fed3f881f38c807ea9a441492887782786caa603a9c6680d58021 extends Twig_Template
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
        $__internal_8dd9e6b5e8815f1092314fbb68531b4097e740e35aa102f7df23a429e7ff845b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd9e6b5e8815f1092314fbb68531b4097e740e35aa102f7df23a429e7ff845b->enter($__internal_8dd9e6b5e8815f1092314fbb68531b4097e740e35aa102f7df23a429e7ff845b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/defined/example/defined.js"));

        // line 1
        echo "var defined = require('../');
var opts = { y : false, w : 4 };
var x = defined(opts.x, opts.y, opts.w, 8);
console.log(x);
";
        
        $__internal_8dd9e6b5e8815f1092314fbb68531b4097e740e35aa102f7df23a429e7ff845b->leave($__internal_8dd9e6b5e8815f1092314fbb68531b4097e740e35aa102f7df23a429e7ff845b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/defined/example/defined.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var defined = require('../');
var opts = { y : false, w : 4 };
var x = defined(opts.x, opts.y, opts.w, 8);
console.log(x);
", "node_modules/defined/example/defined.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/defined/example/defined.js");
    }
}
