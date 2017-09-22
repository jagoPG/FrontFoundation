<?php

/* node_modules/es5-ext/reg-exp/#/is-unicode.js */
class __TwigTemplate_1d6637bcee28c13b22328b4ccd506ae44012cc705a1f45ee82973ce26f40ce32 extends Twig_Template
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
        $__internal_fef3a9ea70aea71d816efecf0187f1101a640a72208d7da66c553e32a8033d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef3a9ea70aea71d816efecf0187f1101a640a72208d7da66c553e32a8033d52->enter($__internal_fef3a9ea70aea71d816efecf0187f1101a640a72208d7da66c553e32a8033d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/is-unicode.js"));

        // line 1
        echo "\"use strict\";

var validRegExp = require(\"../valid-reg-exp\")

  , re = /\\/[a-xz]*u[a-xz]*\$/;

module.exports = function () {
\treturn Boolean(String(validRegExp(this)).match(re));
};
";
        
        $__internal_fef3a9ea70aea71d816efecf0187f1101a640a72208d7da66c553e32a8033d52->leave($__internal_fef3a9ea70aea71d816efecf0187f1101a640a72208d7da66c553e32a8033d52_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/is-unicode.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var validRegExp = require(\"../valid-reg-exp\")

  , re = /\\/[a-xz]*u[a-xz]*\$/;

module.exports = function () {
\treturn Boolean(String(validRegExp(this)).match(re));
};
", "node_modules/es5-ext/reg-exp/#/is-unicode.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/is-unicode.js");
    }
}
