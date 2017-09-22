<?php

/* node_modules/core-js/library/modules/core.function.part.js */
class __TwigTemplate_066153147e03119272c63372bd71bf583b2438313babff42d70e034af1f2deb3 extends Twig_Template
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
        $__internal_7f3bbce57700dd8e66c8ea58df4458bf1710c2cc1064d34864da2c3a4f8cfbcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3bbce57700dd8e66c8ea58df4458bf1710c2cc1064d34864da2c3a4f8cfbcb->enter($__internal_7f3bbce57700dd8e66c8ea58df4458bf1710c2cc1064d34864da2c3a4f8cfbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/core.function.part.js"));

        // line 1
        echo "var path = require('./_path');
var \$export = require('./_export');

// Placeholder
require('./_core')._ = path._ = path._ || {};

\$export(\$export.P + \$export.F, 'Function', { part: require('./_partial') });
";
        
        $__internal_7f3bbce57700dd8e66c8ea58df4458bf1710c2cc1064d34864da2c3a4f8cfbcb->leave($__internal_7f3bbce57700dd8e66c8ea58df4458bf1710c2cc1064d34864da2c3a4f8cfbcb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/core.function.part.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var path = require('./_path');
var \$export = require('./_export');

// Placeholder
require('./_core')._ = path._ = path._ || {};

\$export(\$export.P + \$export.F, 'Function', { part: require('./_partial') });
", "node_modules/core-js/library/modules/core.function.part.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/core.function.part.js");
    }
}
