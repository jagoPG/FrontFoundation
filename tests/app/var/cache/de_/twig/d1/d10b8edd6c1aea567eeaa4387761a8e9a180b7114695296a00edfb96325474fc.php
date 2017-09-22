<?php

/* node_modules/loader-utils/lib/getOptions.js */
class __TwigTemplate_63a662440f82a1ade325f7a1ce8efc8822cf70c2d3e486da241efdd4adc33fe0 extends Twig_Template
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
        $__internal_b0c3ba9e3b07b6028917310bc30fb2581bcc784a7157be75d52c0ec31cd9dbe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c3ba9e3b07b6028917310bc30fb2581bcc784a7157be75d52c0ec31cd9dbe3->enter($__internal_b0c3ba9e3b07b6028917310bc30fb2581bcc784a7157be75d52c0ec31cd9dbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loader-utils/lib/getOptions.js"));

        // line 1
        echo "\"use strict\";

const parseQuery = require(\"./parseQuery\");

function getOptions(loaderContext) {
\tconst query = loaderContext.query;
\tif(typeof query === \"string\" && query !== \"\") {
\t\treturn parseQuery(loaderContext.query);
\t}
\tif(!query || typeof query !== \"object\") {
\t\t// Not object-like queries are not supported.
\t\treturn null;
\t}
\treturn query;
}

module.exports = getOptions;
";
        
        $__internal_b0c3ba9e3b07b6028917310bc30fb2581bcc784a7157be75d52c0ec31cd9dbe3->leave($__internal_b0c3ba9e3b07b6028917310bc30fb2581bcc784a7157be75d52c0ec31cd9dbe3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loader-utils/lib/getOptions.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

const parseQuery = require(\"./parseQuery\");

function getOptions(loaderContext) {
\tconst query = loaderContext.query;
\tif(typeof query === \"string\" && query !== \"\") {
\t\treturn parseQuery(loaderContext.query);
\t}
\tif(!query || typeof query !== \"object\") {
\t\t// Not object-like queries are not supported.
\t\treturn null;
\t}
\treturn query;
}

module.exports = getOptions;
", "node_modules/loader-utils/lib/getOptions.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loader-utils/lib/getOptions.js");
    }
}
