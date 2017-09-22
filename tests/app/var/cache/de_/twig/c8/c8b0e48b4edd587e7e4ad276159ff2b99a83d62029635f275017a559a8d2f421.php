<?php

/* node_modules/es5-ext/test/math/log1p/is-implemented.js */
class __TwigTemplate_5db7edad65ead54d21cbb4083b28985dbfe39ecff3c7d4a6884f9d07f64b69b6 extends Twig_Template
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
        $__internal_f413865f2b8a3951a1c871ed3f96ba1d10fabae455c43d9e43c788d33439c319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f413865f2b8a3951a1c871ed3f96ba1d10fabae455c43d9e43c788d33439c319->enter($__internal_f413865f2b8a3951a1c871ed3f96ba1d10fabae455c43d9e43c788d33439c319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/log1p/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_f413865f2b8a3951a1c871ed3f96ba1d10fabae455c43d9e43c788d33439c319->leave($__internal_f413865f2b8a3951a1c871ed3f96ba1d10fabae455c43d9e43c788d33439c319_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/log1p/is-implemented.js";
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
", "node_modules/es5-ext/test/math/log1p/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/log1p/is-implemented.js");
    }
}
