<?php

/* node_modules/es5-ext/test/math/sign/is-implemented.js */
class __TwigTemplate_cd5abb04daf39684591d26a143b85f4aadabf676aafbf3538f0406077b97506b extends Twig_Template
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
        $__internal_7a5cf0e3374f435eac22ec7d167e19949d6b1b2d06e1aff7571b4ec5f17c134a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5cf0e3374f435eac22ec7d167e19949d6b1b2d06e1aff7571b4ec5f17c134a->enter($__internal_7a5cf0e3374f435eac22ec7d167e19949d6b1b2d06e1aff7571b4ec5f17c134a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/sign/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_7a5cf0e3374f435eac22ec7d167e19949d6b1b2d06e1aff7571b4ec5f17c134a->leave($__internal_7a5cf0e3374f435eac22ec7d167e19949d6b1b2d06e1aff7571b4ec5f17c134a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/sign/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
", "node_modules/es5-ext/test/math/sign/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/sign/is-implemented.js");
    }
}
