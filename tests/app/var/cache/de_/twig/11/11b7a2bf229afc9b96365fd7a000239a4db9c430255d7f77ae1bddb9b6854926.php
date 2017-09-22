<?php

/* node_modules/es5-ext/test/string/raw/is-implemented.js */
class __TwigTemplate_fa8e4c524107ade6c6e1c4bdd50112471e4857f2cdb95a0cf0e4d3e369e0ca23 extends Twig_Template
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
        $__internal_bbec49d32d9b197237ea0c03d30fb524f346ef59a23b6127d655091bd96205e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbec49d32d9b197237ea0c03d30fb524f346ef59a23b6127d655091bd96205e9->enter($__internal_bbec49d32d9b197237ea0c03d30fb524f346ef59a23b6127d655091bd96205e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/raw/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_bbec49d32d9b197237ea0c03d30fb524f346ef59a23b6127d655091bd96205e9->leave($__internal_bbec49d32d9b197237ea0c03d30fb524f346ef59a23b6127d655091bd96205e9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/raw/is-implemented.js";
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
", "node_modules/es5-ext/test/string/raw/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/raw/is-implemented.js");
    }
}
