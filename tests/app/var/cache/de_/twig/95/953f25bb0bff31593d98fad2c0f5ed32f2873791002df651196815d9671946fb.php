<?php

/* node_modules/es5-ext/object/is-callable.js */
class __TwigTemplate_99d4a58df658c3fdabc3aabfc3b7a746e7d60777b4ca73a23d757b7e636ba7ce extends Twig_Template
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
        $__internal_61f1ea9e03b4d53cd9748cce451e057be676fc6079a470ab25a328e98517bf01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f1ea9e03b4d53cd9748cce451e057be676fc6079a470ab25a328e98517bf01->enter($__internal_61f1ea9e03b4d53cd9748cce451e057be676fc6079a470ab25a328e98517bf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/is-callable.js"));

        // line 1
        echo "// Deprecated

\"use strict\";

module.exports = function (obj) {
 return typeof obj === \"function\";
};
";
        
        $__internal_61f1ea9e03b4d53cd9748cce451e057be676fc6079a470ab25a328e98517bf01->leave($__internal_61f1ea9e03b4d53cd9748cce451e057be676fc6079a470ab25a328e98517bf01_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/is-callable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Deprecated

\"use strict\";

module.exports = function (obj) {
 return typeof obj === \"function\";
};
", "node_modules/es5-ext/object/is-callable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/is-callable.js");
    }
}
