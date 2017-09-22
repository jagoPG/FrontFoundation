<?php

/* node_modules/es5-ext/math/asinh/implement.js */
class __TwigTemplate_dfc797ca3466b7a4dd43b4de88790860ee7152530c0c4d93f8ae6a2a68f19d84 extends Twig_Template
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
        $__internal_5989ed5a09fd1ba8ed450b4d1e0ed6ccf3957fd2052844ba6c79c38640604fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5989ed5a09fd1ba8ed450b4d1e0ed6ccf3957fd2052844ba6c79c38640604fe5->enter($__internal_5989ed5a09fd1ba8ed450b4d1e0ed6ccf3957fd2052844ba6c79c38640604fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/asinh/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"asinh\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_5989ed5a09fd1ba8ed450b4d1e0ed6ccf3957fd2052844ba6c79c38640604fe5->leave($__internal_5989ed5a09fd1ba8ed450b4d1e0ed6ccf3957fd2052844ba6c79c38640604fe5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/asinh/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"asinh\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/asinh/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/asinh/implement.js");
    }
}
