<?php

/* node_modules/tape/test/only2.js */
class __TwigTemplate_551c85bb951cfae410c45b6a615d8dd173cb8451ff5a64b9e363f845c680dbef extends Twig_Template
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
        $__internal_c9f407f77f4ac85868ee887808eb7e07f06f06da3b64f543223ffdc7b20f2715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f407f77f4ac85868ee887808eb7e07f06f06da3b64f543223ffdc7b20f2715->enter($__internal_c9f407f77f4ac85868ee887808eb7e07f06f06da3b64f543223ffdc7b20f2715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/only2.js"));

        // line 1
        echo "var test = require('../');

test('only2 test 1', function (t) {
    t.end();
});

test.only('only2 test 2', function (t) {
    t.end();
});
";
        
        $__internal_c9f407f77f4ac85868ee887808eb7e07f06f06da3b64f543223ffdc7b20f2715->leave($__internal_c9f407f77f4ac85868ee887808eb7e07f06f06da3b64f543223ffdc7b20f2715_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/only2.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

test('only2 test 1', function (t) {
    t.end();
});

test.only('only2 test 2', function (t) {
    t.end();
});
", "node_modules/tape/test/only2.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/only2.js");
    }
}
