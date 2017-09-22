<?php

/* node_modules/es5-ext/math/clz32/is-implemented.js */
class __TwigTemplate_ecf9e5f5edf6aea0f9f075da35a0941c8bc8caf06ffd49f18aeeb434fc03acdc extends Twig_Template
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
        $__internal_94912a304f4b69ff4d66bfb0ae93cf4b4c17ad6ba53d73c6dd1927732250686e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94912a304f4b69ff4d66bfb0ae93cf4b4c17ad6ba53d73c6dd1927732250686e->enter($__internal_94912a304f4b69ff4d66bfb0ae93cf4b4c17ad6ba53d73c6dd1927732250686e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/clz32/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar clz32 = Math.clz32;
\tif (typeof clz32 !== \"function\") return false;
\treturn clz32(1000) === 22;
};
";
        
        $__internal_94912a304f4b69ff4d66bfb0ae93cf4b4c17ad6ba53d73c6dd1927732250686e->leave($__internal_94912a304f4b69ff4d66bfb0ae93cf4b4c17ad6ba53d73c6dd1927732250686e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/clz32/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar clz32 = Math.clz32;
\tif (typeof clz32 !== \"function\") return false;
\treturn clz32(1000) === 22;
};
", "node_modules/es5-ext/math/clz32/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/clz32/is-implemented.js");
    }
}
