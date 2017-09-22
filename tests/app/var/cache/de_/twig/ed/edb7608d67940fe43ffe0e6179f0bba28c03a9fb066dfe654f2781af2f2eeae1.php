<?php

/* node_modules/es5-ext/reg-exp/#/search/index.js */
class __TwigTemplate_fdb611dfaf94c3e1a53f910e4c9b31bde7e69b55a56c3f5046f89032faa45dcf extends Twig_Template
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
        $__internal_703fbed48a955981dc2ccf335d6d4d1fb98b10ce11d1f2f5680697fa62aa642f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703fbed48a955981dc2ccf335d6d4d1fb98b10ce11d1f2f5680697fa62aa642f->enter($__internal_703fbed48a955981dc2ccf335d6d4d1fb98b10ce11d1f2f5680697fa62aa642f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/search/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? RegExp.prototype.search
\t: require(\"./shim\");
";
        
        $__internal_703fbed48a955981dc2ccf335d6d4d1fb98b10ce11d1f2f5680697fa62aa642f->leave($__internal_703fbed48a955981dc2ccf335d6d4d1fb98b10ce11d1f2f5680697fa62aa642f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/search/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? RegExp.prototype.search
\t: require(\"./shim\");
", "node_modules/es5-ext/reg-exp/#/search/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/search/index.js");
    }
}
