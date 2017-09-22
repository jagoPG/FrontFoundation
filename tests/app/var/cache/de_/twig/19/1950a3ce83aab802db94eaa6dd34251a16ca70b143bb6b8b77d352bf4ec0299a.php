<?php

/* node_modules/es5-ext/test/array/#/slice/is-implemented.js */
class __TwigTemplate_f45a78d81c1f925024895347cd93754d07cfdea67a2fa5249b792e1d88e0914d extends Twig_Template
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
        $__internal_c8013ca81215df6c72bf595966aa899a5e4abe59469d406cbaa1c6862923083d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8013ca81215df6c72bf595966aa899a5e4abe59469d406cbaa1c6862923083d->enter($__internal_c8013ca81215df6c72bf595966aa899a5e4abe59469d406cbaa1c6862923083d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/slice/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_c8013ca81215df6c72bf595966aa899a5e4abe59469d406cbaa1c6862923083d->leave($__internal_c8013ca81215df6c72bf595966aa899a5e4abe59469d406cbaa1c6862923083d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/slice/is-implemented.js";
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
", "node_modules/es5-ext/test/array/#/slice/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/slice/is-implemented.js");
    }
}
