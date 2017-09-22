<?php

/* node_modules/has-ansi/index.js */
class __TwigTemplate_73da495a1a35e1f29e8f3aee4532c37d637b073ed7bb27b391c69b059b68d8d6 extends Twig_Template
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
        $__internal_2a2c4d3037517bc3b39c671aa2590dd856acbd78f905a56e71d25d718d69ca98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2c4d3037517bc3b39c671aa2590dd856acbd78f905a56e71d25d718d69ca98->enter($__internal_2a2c4d3037517bc3b39c671aa2590dd856acbd78f905a56e71d25d718d69ca98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/has-ansi/index.js"));

        // line 1
        echo "'use strict';
var ansiRegex = require('ansi-regex');
var re = new RegExp(ansiRegex().source); // remove the `g` flag
module.exports = re.test.bind(re);
";
        
        $__internal_2a2c4d3037517bc3b39c671aa2590dd856acbd78f905a56e71d25d718d69ca98->leave($__internal_2a2c4d3037517bc3b39c671aa2590dd856acbd78f905a56e71d25d718d69ca98_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/has-ansi/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var ansiRegex = require('ansi-regex');
var re = new RegExp(ansiRegex().source); // remove the `g` flag
module.exports = re.test.bind(re);
", "node_modules/has-ansi/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/has-ansi/index.js");
    }
}
