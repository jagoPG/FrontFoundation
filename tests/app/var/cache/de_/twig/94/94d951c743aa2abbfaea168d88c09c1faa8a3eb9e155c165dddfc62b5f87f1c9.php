<?php

/* node_modules/lodash/fp/bind.js */
class __TwigTemplate_ae225bf22fb2e22828c3472281568c1e054048a892d0a465fbfc8834b59c7235 extends Twig_Template
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
        $__internal_7461a5e6d3db1f5a8c6cb42257a4d81d1091c0c71065eb1540649ca021e9a1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7461a5e6d3db1f5a8c6cb42257a4d81d1091c0c71065eb1540649ca021e9a1eb->enter($__internal_7461a5e6d3db1f5a8c6cb42257a4d81d1091c0c71065eb1540649ca021e9a1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/bind.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('bind', require('../bind'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_7461a5e6d3db1f5a8c6cb42257a4d81d1091c0c71065eb1540649ca021e9a1eb->leave($__internal_7461a5e6d3db1f5a8c6cb42257a4d81d1091c0c71065eb1540649ca021e9a1eb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/bind.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('bind', require('../bind'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/bind.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/bind.js");
    }
}
