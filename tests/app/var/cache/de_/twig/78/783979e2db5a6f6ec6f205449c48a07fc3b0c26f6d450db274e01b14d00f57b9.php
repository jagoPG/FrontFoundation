<?php

/* node_modules/es5-ext/math/log1p/is-implemented.js */
class __TwigTemplate_b203658f2dcf40f9e16b9e92e770bb6e6da147d29a4f40dffb1db352a8efa7ea extends Twig_Template
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
        $__internal_9d7042f0d223c5a5da1f6250fb987ef1345d3b7dcc0b3acacaa576ddefb9908e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7042f0d223c5a5da1f6250fb987ef1345d3b7dcc0b3acacaa576ddefb9908e->enter($__internal_9d7042f0d223c5a5da1f6250fb987ef1345d3b7dcc0b3acacaa576ddefb9908e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/log1p/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar log1p = Math.log1p;
\tif (typeof log1p !== \"function\") return false;
\treturn log1p(1) === 0.6931471805599453;
};
";
        
        $__internal_9d7042f0d223c5a5da1f6250fb987ef1345d3b7dcc0b3acacaa576ddefb9908e->leave($__internal_9d7042f0d223c5a5da1f6250fb987ef1345d3b7dcc0b3acacaa576ddefb9908e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/log1p/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar log1p = Math.log1p;
\tif (typeof log1p !== \"function\") return false;
\treturn log1p(1) === 0.6931471805599453;
};
", "node_modules/es5-ext/math/log1p/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/log1p/is-implemented.js");
    }
}
