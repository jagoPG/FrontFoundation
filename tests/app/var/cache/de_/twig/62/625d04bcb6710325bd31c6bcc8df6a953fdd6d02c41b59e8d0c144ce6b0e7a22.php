<?php

/* node_modules/es5-ext/test/math/cosh/is-implemented.js */
class __TwigTemplate_0a54a15f6865b9ee7d2d98d2838aae5b309b1a0ffe6e575232c1fb0808739129 extends Twig_Template
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
        $__internal_1fcc31000d9229bfb87b1ddef683e188e12a05f131ccd3bb197b1b2677b83c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fcc31000d9229bfb87b1ddef683e188e12a05f131ccd3bb197b1b2677b83c23->enter($__internal_1fcc31000d9229bfb87b1ddef683e188e12a05f131ccd3bb197b1b2677b83c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/cosh/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_1fcc31000d9229bfb87b1ddef683e188e12a05f131ccd3bb197b1b2677b83c23->leave($__internal_1fcc31000d9229bfb87b1ddef683e188e12a05f131ccd3bb197b1b2677b83c23_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/cosh/is-implemented.js";
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
", "node_modules/es5-ext/test/math/cosh/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/cosh/is-implemented.js");
    }
}
