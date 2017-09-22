<?php

/* node_modules/es5-ext/reg-exp/#/match/index.js */
class __TwigTemplate_249086d2bda6673e1db6dd2effb57491e30376a97670fff5cfed34d0674419df extends Twig_Template
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
        $__internal_b0cd0ac4cdd05747bfa78f00992e5bf32b14cc11a84fc1add2eb8e6913804661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cd0ac4cdd05747bfa78f00992e5bf32b14cc11a84fc1add2eb8e6913804661->enter($__internal_b0cd0ac4cdd05747bfa78f00992e5bf32b14cc11a84fc1add2eb8e6913804661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/match/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? RegExp.prototype.match
\t: require(\"./shim\");
";
        
        $__internal_b0cd0ac4cdd05747bfa78f00992e5bf32b14cc11a84fc1add2eb8e6913804661->leave($__internal_b0cd0ac4cdd05747bfa78f00992e5bf32b14cc11a84fc1add2eb8e6913804661_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/match/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? RegExp.prototype.match
\t: require(\"./shim\");
", "node_modules/es5-ext/reg-exp/#/match/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/match/index.js");
    }
}
