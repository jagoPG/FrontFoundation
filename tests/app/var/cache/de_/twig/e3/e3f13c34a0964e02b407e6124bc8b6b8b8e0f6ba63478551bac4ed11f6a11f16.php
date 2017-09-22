<?php

/* node_modules/es5-ext/reg-exp/#/replace/index.js */
class __TwigTemplate_105973f2491966019596eb8b0eb682874303f791151cdd285320942166b4227f extends Twig_Template
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
        $__internal_8a75c65ae7f27a3c9714b94f560a53e32078f23b05236b02e40c02547251f6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a75c65ae7f27a3c9714b94f560a53e32078f23b05236b02e40c02547251f6c8->enter($__internal_8a75c65ae7f27a3c9714b94f560a53e32078f23b05236b02e40c02547251f6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/replace/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? RegExp.prototype.replace
\t: require(\"./shim\");
";
        
        $__internal_8a75c65ae7f27a3c9714b94f560a53e32078f23b05236b02e40c02547251f6c8->leave($__internal_8a75c65ae7f27a3c9714b94f560a53e32078f23b05236b02e40c02547251f6c8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/replace/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? RegExp.prototype.replace
\t: require(\"./shim\");
", "node_modules/es5-ext/reg-exp/#/replace/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/replace/index.js");
    }
}
