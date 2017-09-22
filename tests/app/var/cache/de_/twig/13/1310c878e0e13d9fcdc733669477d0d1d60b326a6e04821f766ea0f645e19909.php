<?php

/* node_modules/strip-bom/index.js */
class __TwigTemplate_18c76076a1836567ee12d53551eb618bba8147eebdeb0c29deff0b5ac9bf3724 extends Twig_Template
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
        $__internal_c2705a622943023d57b8cfa33324265180083f9f423933200c246b67f323b9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2705a622943023d57b8cfa33324265180083f9f423933200c246b67f323b9c8->enter($__internal_c2705a622943023d57b8cfa33324265180083f9f423933200c246b67f323b9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/strip-bom/index.js"));

        // line 1
        echo "'use strict';
module.exports = x => {
\tif (typeof x !== 'string') {
\t\tthrow new TypeError('Expected a string, got ' + typeof x);
\t}

\t// Catches EFBBBF (UTF-8 BOM) because the buffer-to-string
\t// conversion translates it to FEFF (UTF-16 BOM)
\tif (x.charCodeAt(0) === 0xFEFF) {
\t\treturn x.slice(1);
\t}

\treturn x;
};
";
        
        $__internal_c2705a622943023d57b8cfa33324265180083f9f423933200c246b67f323b9c8->leave($__internal_c2705a622943023d57b8cfa33324265180083f9f423933200c246b67f323b9c8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/strip-bom/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = x => {
\tif (typeof x !== 'string') {
\t\tthrow new TypeError('Expected a string, got ' + typeof x);
\t}

\t// Catches EFBBBF (UTF-8 BOM) because the buffer-to-string
\t// conversion translates it to FEFF (UTF-16 BOM)
\tif (x.charCodeAt(0) === 0xFEFF) {
\t\treturn x.slice(1);
\t}

\treturn x;
};
", "node_modules/strip-bom/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/strip-bom/index.js");
    }
}
