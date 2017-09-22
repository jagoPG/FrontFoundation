<?php

/* node_modules/es5-ext/string/#/@@iterator/implement.js */
class __TwigTemplate_777a3804a0a2bb388eddb84ce78e8beff57085decf9d4cf1030cf69664afe730 extends Twig_Template
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
        $__internal_2891a940fa789601c9456b64b2c3c2cecac6751f607325df8196542a0964ba2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2891a940fa789601c9456b64b2c3c2cecac6751f607325df8196542a0964ba2c->enter($__internal_2891a940fa789601c9456b64b2c3c2cecac6751f607325df8196542a0964ba2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/@@iterator/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String.prototype, require(\"es6-symbol\").iterator,
\t\t{ value: require(\"./shim\"), configurable: true, enumerable: false, writable: true });
}
";
        
        $__internal_2891a940fa789601c9456b64b2c3c2cecac6751f607325df8196542a0964ba2c->leave($__internal_2891a940fa789601c9456b64b2c3c2cecac6751f607325df8196542a0964ba2c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/@@iterator/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String.prototype, require(\"es6-symbol\").iterator,
\t\t{ value: require(\"./shim\"), configurable: true, enumerable: false, writable: true });
}
", "node_modules/es5-ext/string/#/@@iterator/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/@@iterator/implement.js");
    }
}
