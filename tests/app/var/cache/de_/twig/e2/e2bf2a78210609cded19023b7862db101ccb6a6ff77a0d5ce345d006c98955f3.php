<?php

/* node_modules/es5-ext/reg-exp/#/search/is-implemented.js */
class __TwigTemplate_6218937b7648c1e52e87dbc8d681021dd19d02290693a1abb34cec4574e3365f extends Twig_Template
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
        $__internal_cb6bea016ea871850c95faa4bb1c4090c6bfcbd824a83e7b7cbb8920cff21581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6bea016ea871850c95faa4bb1c4090c6bfcbd824a83e7b7cbb8920cff21581->enter($__internal_cb6bea016ea871850c95faa4bb1c4090c6bfcbd824a83e7b7cbb8920cff21581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/search/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var re = /foo/;

module.exports = function () {
\tif (typeof re.search !== \"function\") return false;
\treturn re.search(\"barfoo\") === 3;
};
";
        
        $__internal_cb6bea016ea871850c95faa4bb1c4090c6bfcbd824a83e7b7cbb8920cff21581->leave($__internal_cb6bea016ea871850c95faa4bb1c4090c6bfcbd824a83e7b7cbb8920cff21581_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/search/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var re = /foo/;

module.exports = function () {
\tif (typeof re.search !== \"function\") return false;
\treturn re.search(\"barfoo\") === 3;
};
", "node_modules/es5-ext/reg-exp/#/search/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/search/is-implemented.js");
    }
}
