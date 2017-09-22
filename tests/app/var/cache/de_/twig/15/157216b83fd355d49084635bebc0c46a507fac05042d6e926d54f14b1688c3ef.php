<?php

/* node_modules/es5-ext/test/math/acosh/shim.js */
class __TwigTemplate_aee75171f5f9a8896b10d45bc4259ff31c53c8e2da1b36b184a369bb121fbdd8 extends Twig_Template
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
        $__internal_44d2be8b9112d37f08c5acd6436b07224c989fbc7e09ab486e3bc52002635897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d2be8b9112d37f08c5acd6436b07224c989fbc7e09ab486e3bc52002635897->enter($__internal_44d2be8b9112d37f08c5acd6436b07224c989fbc7e09ab486e3bc52002635897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/acosh/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(-1), NaN, \"Negative\");
\ta(t(0), NaN, \"Zero\");
\ta(t(0.5), NaN, \"Below 1\");
\ta(t(1), 0, \"1\");
\ta(t(2), 1.3169578969248166, \"Other\");
\ta(t(Infinity), Infinity, \"Infinity\");
};
";
        
        $__internal_44d2be8b9112d37f08c5acd6436b07224c989fbc7e09ab486e3bc52002635897->leave($__internal_44d2be8b9112d37f08c5acd6436b07224c989fbc7e09ab486e3bc52002635897_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/acosh/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(-1), NaN, \"Negative\");
\ta(t(0), NaN, \"Zero\");
\ta(t(0.5), NaN, \"Below 1\");
\ta(t(1), 0, \"1\");
\ta(t(2), 1.3169578969248166, \"Other\");
\ta(t(Infinity), Infinity, \"Infinity\");
};
", "node_modules/es5-ext/test/math/acosh/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/acosh/shim.js");
    }
}
