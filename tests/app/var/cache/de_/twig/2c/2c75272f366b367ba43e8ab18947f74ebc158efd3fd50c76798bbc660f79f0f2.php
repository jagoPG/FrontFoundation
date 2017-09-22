<?php

/* node_modules/es5-ext/test/math/tanh/is-implemented.js */
class __TwigTemplate_60e4c9828328467eb3e425236c593e82ff4ec9aab6567f7db6b155de3dde3c76 extends Twig_Template
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
        $__internal_eb148d9bde3f601b8d164a1eea91367c0c436a707346bc0de2c8c5fb8a243a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb148d9bde3f601b8d164a1eea91367c0c436a707346bc0de2c8c5fb8a243a4e->enter($__internal_eb148d9bde3f601b8d164a1eea91367c0c436a707346bc0de2c8c5fb8a243a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/tanh/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_eb148d9bde3f601b8d164a1eea91367c0c436a707346bc0de2c8c5fb8a243a4e->leave($__internal_eb148d9bde3f601b8d164a1eea91367c0c436a707346bc0de2c8c5fb8a243a4e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/tanh/is-implemented.js";
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
", "node_modules/es5-ext/test/math/tanh/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/tanh/is-implemented.js");
    }
}
