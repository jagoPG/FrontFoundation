<?php

/* node_modules/es5-ext/error/#/throw.js */
class __TwigTemplate_8979a3c937cf96083902be23f075b91052d6e83d3dd6d9a0a880aa07be7716c8 extends Twig_Template
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
        $__internal_2542b534306b040fe09d87d7e5699f2c08996e78e53b563f64ab830db2dbccec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2542b534306b040fe09d87d7e5699f2c08996e78e53b563f64ab830db2dbccec->enter($__internal_2542b534306b040fe09d87d7e5699f2c08996e78e53b563f64ab830db2dbccec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/error/#/throw.js"));

        // line 1
        echo "\"use strict\";

var error = require(\"../valid-error\");

module.exports = function () {
 throw error(this);
};
";
        
        $__internal_2542b534306b040fe09d87d7e5699f2c08996e78e53b563f64ab830db2dbccec->leave($__internal_2542b534306b040fe09d87d7e5699f2c08996e78e53b563f64ab830db2dbccec_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/error/#/throw.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var error = require(\"../valid-error\");

module.exports = function () {
 throw error(this);
};
", "node_modules/es5-ext/error/#/throw.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/error/#/throw.js");
    }
}
