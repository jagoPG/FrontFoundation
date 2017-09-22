<?php

/* node_modules/crypto-browserify/example/test.js */
class __TwigTemplate_d0fbc99f9717222fa6300aa944aca46c439857eee10b4fe41295d7ebd0ea9ff2 extends Twig_Template
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
        $__internal_0f1111f7f5948f7cec2a01ad63da287e1f4418b2a6bf16a5f1bdae6122860748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1111f7f5948f7cec2a01ad63da287e1f4418b2a6bf16a5f1bdae6122860748->enter($__internal_0f1111f7f5948f7cec2a01ad63da287e1f4418b2a6bf16a5f1bdae6122860748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/crypto-browserify/example/test.js"));

        // line 1
        echo "var crypto = require('crypto')
var abc = crypto.createHash('sha1').update('abc').digest('hex')
console.log(abc)
// require('hello').inlineCall().call2()
";
        
        $__internal_0f1111f7f5948f7cec2a01ad63da287e1f4418b2a6bf16a5f1bdae6122860748->leave($__internal_0f1111f7f5948f7cec2a01ad63da287e1f4418b2a6bf16a5f1bdae6122860748_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/crypto-browserify/example/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var crypto = require('crypto')
var abc = crypto.createHash('sha1').update('abc').digest('hex')
console.log(abc)
// require('hello').inlineCall().call2()
", "node_modules/crypto-browserify/example/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/crypto-browserify/example/test.js");
    }
}
