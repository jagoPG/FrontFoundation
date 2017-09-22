<?php

/* node_modules/es5-ext/test/number/is-integer/is-implemented.js */
class __TwigTemplate_dcbd06b6510819c7b8fba2b466e55d2c7f4959513402ca8d569dac7a6d774d0b extends Twig_Template
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
        $__internal_f3274586b5589ff5b1c2d677e4b13210b3ca39a0f1ea18fc7a03f6ddf5e63dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3274586b5589ff5b1c2d677e4b13210b3ca39a0f1ea18fc7a03f6ddf5e63dba->enter($__internal_f3274586b5589ff5b1c2d677e4b13210b3ca39a0f1ea18fc7a03f6ddf5e63dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/is-integer/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_f3274586b5589ff5b1c2d677e4b13210b3ca39a0f1ea18fc7a03f6ddf5e63dba->leave($__internal_f3274586b5589ff5b1c2d677e4b13210b3ca39a0f1ea18fc7a03f6ddf5e63dba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/is-integer/is-implemented.js";
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
", "node_modules/es5-ext/test/number/is-integer/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/is-integer/is-implemented.js");
    }
}
