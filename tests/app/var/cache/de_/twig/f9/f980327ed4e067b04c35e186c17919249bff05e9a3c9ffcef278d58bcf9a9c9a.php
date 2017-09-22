<?php

/* node_modules/es5-ext/math/log10/implement.js */
class __TwigTemplate_268a17195697296870adddcb71d815d286f6a31b7a67b28cace8661fee6d5333 extends Twig_Template
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
        $__internal_8d1ba78f337cbde5eb0684b57c3f5348e5f0bd2deb0630bafb5e73a15a4457c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1ba78f337cbde5eb0684b57c3f5348e5f0bd2deb0630bafb5e73a15a4457c8->enter($__internal_8d1ba78f337cbde5eb0684b57c3f5348e5f0bd2deb0630bafb5e73a15a4457c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/log10/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"log10\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_8d1ba78f337cbde5eb0684b57c3f5348e5f0bd2deb0630bafb5e73a15a4457c8->leave($__internal_8d1ba78f337cbde5eb0684b57c3f5348e5f0bd2deb0630bafb5e73a15a4457c8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/log10/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"log10\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/log10/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/log10/implement.js");
    }
}
