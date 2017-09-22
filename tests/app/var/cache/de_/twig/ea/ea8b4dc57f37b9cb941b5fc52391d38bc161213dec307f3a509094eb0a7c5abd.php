<?php

/* node_modules/fsevents/node_modules/extsprintf/examples/simple.js */
class __TwigTemplate_e7cf997c7dde37bca82e8037277826781229a1a122977bfb418cd01f5f76277f extends Twig_Template
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
        $__internal_d5cb308c9b29ec2c11d9dc3d342baadb4257f5d4e0d10c7dcd11a5453edaa9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5cb308c9b29ec2c11d9dc3d342baadb4257f5d4e0d10c7dcd11a5453edaa9a1->enter($__internal_d5cb308c9b29ec2c11d9dc3d342baadb4257f5d4e0d10c7dcd11a5453edaa9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/extsprintf/examples/simple.js"));

        // line 1
        echo "var mod_extsprintf = require('extsprintf');
console.log(mod_extsprintf.sprintf('hello %25s', 'world'));
";
        
        $__internal_d5cb308c9b29ec2c11d9dc3d342baadb4257f5d4e0d10c7dcd11a5453edaa9a1->leave($__internal_d5cb308c9b29ec2c11d9dc3d342baadb4257f5d4e0d10c7dcd11a5453edaa9a1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/extsprintf/examples/simple.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var mod_extsprintf = require('extsprintf');
console.log(mod_extsprintf.sprintf('hello %25s', 'world'));
", "node_modules/fsevents/node_modules/extsprintf/examples/simple.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/extsprintf/examples/simple.js");
    }
}
