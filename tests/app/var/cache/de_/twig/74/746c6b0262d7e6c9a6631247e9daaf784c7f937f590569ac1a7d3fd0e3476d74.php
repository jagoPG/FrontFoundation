<?php

/* node_modules/es5-ext/test/array/#/splice/is-implemented.js */
class __TwigTemplate_9a5344d4eaa26d995a390d4dabf2f26cf062e12950782b96e898e0e09e60b55f extends Twig_Template
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
        $__internal_b848c5dbc0639bf67ae3c62c58edafc6e6b439fa6d5f557f819959f48b608beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b848c5dbc0639bf67ae3c62c58edafc6e6b439fa6d5f557f819959f48b608beb->enter($__internal_b848c5dbc0639bf67ae3c62c58edafc6e6b439fa6d5f557f819959f48b608beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/splice/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_b848c5dbc0639bf67ae3c62c58edafc6e6b439fa6d5f557f819959f48b608beb->leave($__internal_b848c5dbc0639bf67ae3c62c58edafc6e6b439fa6d5f557f819959f48b608beb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/splice/is-implemented.js";
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
", "node_modules/es5-ext/test/array/#/splice/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/splice/is-implemented.js");
    }
}
