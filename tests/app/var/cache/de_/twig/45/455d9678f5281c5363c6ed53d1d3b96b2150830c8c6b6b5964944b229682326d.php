<?php

/* node_modules/es5-ext/string/#/last.js */
class __TwigTemplate_2bccc06003d7799bac0042df0f58be036f46998d8045b6dda3ece07ffdbfe271 extends Twig_Template
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
        $__internal_8412b8deb856c0448f6a3bf049476c64a652757b29d3d99d1954600a018564e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8412b8deb856c0448f6a3bf049476c64a652757b29d3d99d1954600a018564e1->enter($__internal_8412b8deb856c0448f6a3bf049476c64a652757b29d3d99d1954600a018564e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/last.js"));

        // line 1
        echo "\"use strict\";

var value = require(\"../../object/valid-value\");

module.exports = function () {
\tvar self = String(value(this)), length = self.length;
\treturn length ? self[length - 1] : null;
};
";
        
        $__internal_8412b8deb856c0448f6a3bf049476c64a652757b29d3d99d1954600a018564e1->leave($__internal_8412b8deb856c0448f6a3bf049476c64a652757b29d3d99d1954600a018564e1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/last.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var value = require(\"../../object/valid-value\");

module.exports = function () {
\tvar self = String(value(this)), length = self.length;
\treturn length ? self[length - 1] : null;
};
", "node_modules/es5-ext/string/#/last.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/last.js");
    }
}
