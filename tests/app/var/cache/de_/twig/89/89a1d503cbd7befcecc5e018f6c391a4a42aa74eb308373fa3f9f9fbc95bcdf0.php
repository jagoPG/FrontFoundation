<?php

/* node_modules/is-arrayish/index.js */
class __TwigTemplate_8ebce05c367586927a9ebc982fc8b96575adfcdec70c9661c13bbf3195d200e9 extends Twig_Template
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
        $__internal_983758da6d928cdc16e4363815b65f73ab278e1bd50ed4b8224ee4de2ffd1f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983758da6d928cdc16e4363815b65f73ab278e1bd50ed4b8224ee4de2ffd1f91->enter($__internal_983758da6d928cdc16e4363815b65f73ab278e1bd50ed4b8224ee4de2ffd1f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-arrayish/index.js"));

        // line 1
        echo "'use strict';

module.exports = function isArrayish(obj) {
\tif (!obj) {
\t\treturn false;
\t}

\treturn obj instanceof Array || Array.isArray(obj) ||
\t\t(obj.length >= 0 && obj.splice instanceof Function);
};
";
        
        $__internal_983758da6d928cdc16e4363815b65f73ab278e1bd50ed4b8224ee4de2ffd1f91->leave($__internal_983758da6d928cdc16e4363815b65f73ab278e1bd50ed4b8224ee4de2ffd1f91_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-arrayish/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function isArrayish(obj) {
\tif (!obj) {
\t\treturn false;
\t}

\treturn obj instanceof Array || Array.isArray(obj) ||
\t\t(obj.length >= 0 && obj.splice instanceof Function);
};
", "node_modules/is-arrayish/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-arrayish/index.js");
    }
}
