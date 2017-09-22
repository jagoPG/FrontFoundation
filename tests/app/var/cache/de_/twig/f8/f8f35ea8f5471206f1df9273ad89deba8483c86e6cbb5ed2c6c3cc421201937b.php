<?php

/* node_modules/es5-ext/string/#/normalize/is-implemented.js */
class __TwigTemplate_1bf815d39c08fc76c46cb0d0fdaacce8a56e6ebf88fca055064b37c5bf02eccd extends Twig_Template
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
        $__internal_af4aa2a27532e6c4ad1e5400e99acfc7149fd46694caf539cce1282adacb8367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4aa2a27532e6c4ad1e5400e99acfc7149fd46694caf539cce1282adacb8367->enter($__internal_af4aa2a27532e6c4ad1e5400e99acfc7149fd46694caf539cce1282adacb8367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/normalize/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var str = \"æøåäüö\";

module.exports = function () {
\tif (typeof str.normalize !== \"function\") return false;
\treturn str.normalize(\"NFKD\") === \"æøåäüö\";
};
";
        
        $__internal_af4aa2a27532e6c4ad1e5400e99acfc7149fd46694caf539cce1282adacb8367->leave($__internal_af4aa2a27532e6c4ad1e5400e99acfc7149fd46694caf539cce1282adacb8367_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/normalize/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var str = \"æøåäüö\";

module.exports = function () {
\tif (typeof str.normalize !== \"function\") return false;
\treturn str.normalize(\"NFKD\") === \"æøåäüö\";
};
", "node_modules/es5-ext/string/#/normalize/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/normalize/is-implemented.js");
    }
}
