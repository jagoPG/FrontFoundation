<?php

/* node_modules/es5-ext/reg-exp/#/split/shim.js */
class __TwigTemplate_100f14a3707c5d3d6fd5c44c3e8e3cf68d782647df2e25baa13f07434e994874 extends Twig_Template
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
        $__internal_f4c1af481564612eb7576cbe5ef53cfc3c0e7d20e1e001a559286dd768e64427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c1af481564612eb7576cbe5ef53cfc3c0e7d20e1e001a559286dd768e64427->enter($__internal_f4c1af481564612eb7576cbe5ef53cfc3c0e7d20e1e001a559286dd768e64427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/split/shim.js"));

        // line 1
        echo "\"use strict\";

var validRegExp = require(\"../../valid-reg-exp\");

module.exports = function (string) {
\tvalidRegExp(this);
\treturn String(string).split(this);
};
";
        
        $__internal_f4c1af481564612eb7576cbe5ef53cfc3c0e7d20e1e001a559286dd768e64427->leave($__internal_f4c1af481564612eb7576cbe5ef53cfc3c0e7d20e1e001a559286dd768e64427_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/split/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var validRegExp = require(\"../../valid-reg-exp\");

module.exports = function (string) {
\tvalidRegExp(this);
\treturn String(string).split(this);
};
", "node_modules/es5-ext/reg-exp/#/split/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/split/shim.js");
    }
}
