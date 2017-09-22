<?php

/* node_modules/es5-ext/array/of/is-implemented.js */
class __TwigTemplate_bea6a122c8403afa2eb75cc95a108c6da9e9e1773eb416117bf714653d56a91e extends Twig_Template
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
        $__internal_e2e0c87fec42478eb224298fa600fc8061b28c8fcf1009ab655f519285b4c962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e0c87fec42478eb224298fa600fc8061b28c8fcf1009ab655f519285b4c962->enter($__internal_e2e0c87fec42478eb224298fa600fc8061b28c8fcf1009ab655f519285b4c962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/of/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar of = Array.of, result;
\tif (typeof of !== \"function\") return false;
\tresult = of(\"foo\", \"bar\");
\treturn Boolean(result && (result[1] === \"bar\"));
};
";
        
        $__internal_e2e0c87fec42478eb224298fa600fc8061b28c8fcf1009ab655f519285b4c962->leave($__internal_e2e0c87fec42478eb224298fa600fc8061b28c8fcf1009ab655f519285b4c962_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/of/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar of = Array.of, result;
\tif (typeof of !== \"function\") return false;
\tresult = of(\"foo\", \"bar\");
\treturn Boolean(result && (result[1] === \"bar\"));
};
", "node_modules/es5-ext/array/of/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/of/is-implemented.js");
    }
}
