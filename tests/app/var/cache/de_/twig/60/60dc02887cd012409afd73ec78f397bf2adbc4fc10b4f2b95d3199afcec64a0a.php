<?php

/* node_modules/es5-ext/test/number/is-safe-integer/is-implemented.js */
class __TwigTemplate_10a06656a29199540d71ded4bd7160f6fec8d8e9bad03e17910a603b59326372 extends Twig_Template
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
        $__internal_17e6649eb12d94d15bd09410b34b49d0a133cf96a105b2fc0f0ce6ab22803d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e6649eb12d94d15bd09410b34b49d0a133cf96a105b2fc0f0ce6ab22803d34->enter($__internal_17e6649eb12d94d15bd09410b34b49d0a133cf96a105b2fc0f0ce6ab22803d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/is-safe-integer/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_17e6649eb12d94d15bd09410b34b49d0a133cf96a105b2fc0f0ce6ab22803d34->leave($__internal_17e6649eb12d94d15bd09410b34b49d0a133cf96a105b2fc0f0ce6ab22803d34_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/is-safe-integer/is-implemented.js";
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
", "node_modules/es5-ext/test/number/is-safe-integer/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/is-safe-integer/is-implemented.js");
    }
}
