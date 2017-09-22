<?php

/* node_modules/es5-ext/reg-exp/#/match/shim.js */
class __TwigTemplate_57ac63de44356506b5fd0e9e8a0eebb6ef0d669ffa6d50346aaf3d08889003c7 extends Twig_Template
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
        $__internal_5a4cdaab95d1125fa886ca5066a3b3274fb6956649ea337f429f7ca861c05c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4cdaab95d1125fa886ca5066a3b3274fb6956649ea337f429f7ca861c05c3d->enter($__internal_5a4cdaab95d1125fa886ca5066a3b3274fb6956649ea337f429f7ca861c05c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/match/shim.js"));

        // line 1
        echo "\"use strict\";

var validRegExp = require(\"../../valid-reg-exp\");

module.exports = function (string) {
\tvalidRegExp(this);
\treturn String(string).match(this);
};
";
        
        $__internal_5a4cdaab95d1125fa886ca5066a3b3274fb6956649ea337f429f7ca861c05c3d->leave($__internal_5a4cdaab95d1125fa886ca5066a3b3274fb6956649ea337f429f7ca861c05c3d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/match/shim.js";
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
\treturn String(string).match(this);
};
", "node_modules/es5-ext/reg-exp/#/match/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/match/shim.js");
    }
}
