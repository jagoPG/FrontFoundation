<?php

/* node_modules/es5-ext/reg-exp/escape.js */
class __TwigTemplate_81a08be7b6dba0e37d1924ac22c0d7792ce82d2613ba7f893a927298c19363e0 extends Twig_Template
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
        $__internal_991803158292d1c7421f255e3e60de0fb21910c138fee2bcef29a5581ce6a93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991803158292d1c7421f255e3e60de0fb21910c138fee2bcef29a5581ce6a93e->enter($__internal_991803158292d1c7421f255e3e60de0fb21910c138fee2bcef29a5581ce6a93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/escape.js"));

        // line 1
        echo "// Thanks to Andrew Clover:
// http://stackoverflow.com/questions/3561493
// /is-there-a-regexp-escape-function-in-javascript

\"use strict\";

var re = /[-/\\\\^\$*+?.()|[\\]{}]/g;

module.exports = function (str) {
\treturn String(str).replace(re, \"\\\\\$&\");
};
";
        
        $__internal_991803158292d1c7421f255e3e60de0fb21910c138fee2bcef29a5581ce6a93e->leave($__internal_991803158292d1c7421f255e3e60de0fb21910c138fee2bcef29a5581ce6a93e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/escape.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Thanks to Andrew Clover:
// http://stackoverflow.com/questions/3561493
// /is-there-a-regexp-escape-function-in-javascript

\"use strict\";

var re = /[-/\\\\^\$*+?.()|[\\]{}]/g;

module.exports = function (str) {
\treturn String(str).replace(re, \"\\\\\$&\");
};
", "node_modules/es5-ext/reg-exp/escape.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/escape.js");
    }
}
