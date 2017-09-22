<?php

/* node_modules/es5-ext/reg-exp/#/is-sticky.js */
class __TwigTemplate_868054caf9bf95c86c2b116f16380256854d523a0ab350c2a7c55cd9bbc08f8e extends Twig_Template
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
        $__internal_be77261b6d23bf904c06fb9894d7e382dc3580a7d6a42e1b06529b5891187250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be77261b6d23bf904c06fb9894d7e382dc3580a7d6a42e1b06529b5891187250->enter($__internal_be77261b6d23bf904c06fb9894d7e382dc3580a7d6a42e1b06529b5891187250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/is-sticky.js"));

        // line 1
        echo "\"use strict\";

var validRegExp = require(\"../valid-reg-exp\")

  , re = /\\/[a-xz]*y[a-xz]*\$/;

module.exports = function () {
\treturn Boolean(String(validRegExp(this)).match(re));
};
";
        
        $__internal_be77261b6d23bf904c06fb9894d7e382dc3580a7d6a42e1b06529b5891187250->leave($__internal_be77261b6d23bf904c06fb9894d7e382dc3580a7d6a42e1b06529b5891187250_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/is-sticky.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var validRegExp = require(\"../valid-reg-exp\")

  , re = /\\/[a-xz]*y[a-xz]*\$/;

module.exports = function () {
\treturn Boolean(String(validRegExp(this)).match(re));
};
", "node_modules/es5-ext/reg-exp/#/is-sticky.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/is-sticky.js");
    }
}
