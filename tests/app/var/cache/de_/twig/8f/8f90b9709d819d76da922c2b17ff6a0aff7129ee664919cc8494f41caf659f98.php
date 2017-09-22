<?php

/* node_modules/core-js/modules/es6.object.is.js */
class __TwigTemplate_28ea908b5fac27760274462d5985ea42b45afac2ffde4086272442cdd88f94e4 extends Twig_Template
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
        $__internal_18c34d133bd4c4755f8f8693bf044fb7de1ec2dbb17777d314f3a5169d24fd5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c34d133bd4c4755f8f8693bf044fb7de1ec2dbb17777d314f3a5169d24fd5b->enter($__internal_18c34d133bd4c4755f8f8693bf044fb7de1ec2dbb17777d314f3a5169d24fd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.object.is.js"));

        // line 1
        echo "// 19.1.3.10 Object.is(value1, value2)
var \$export = require('./_export');
\$export(\$export.S, 'Object', { is: require('./_same-value') });
";
        
        $__internal_18c34d133bd4c4755f8f8693bf044fb7de1ec2dbb17777d314f3a5169d24fd5b->leave($__internal_18c34d133bd4c4755f8f8693bf044fb7de1ec2dbb17777d314f3a5169d24fd5b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.object.is.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.3.10 Object.is(value1, value2)
var \$export = require('./_export');
\$export(\$export.S, 'Object', { is: require('./_same-value') });
", "node_modules/core-js/modules/es6.object.is.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.object.is.js");
    }
}
