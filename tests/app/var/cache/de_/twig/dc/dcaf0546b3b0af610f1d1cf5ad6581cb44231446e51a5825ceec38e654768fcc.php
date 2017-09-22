<?php

/* node_modules/es5-ext/array/#/@@iterator/implement.js */
class __TwigTemplate_037b8ddd49d3c0e91e9f85003595f0eb17416f7d73baafe45d537172a3541eac extends Twig_Template
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
        $__internal_7488bb08ab0a1ea5ef0ba4189a284c49253c463245d4b020e3d8318c2730441c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7488bb08ab0a1ea5ef0ba4189a284c49253c463245d4b020e3d8318c2730441c->enter($__internal_7488bb08ab0a1ea5ef0ba4189a284c49253c463245d4b020e3d8318c2730441c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/@@iterator/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, require(\"es6-symbol\").iterator, {
\t\tvalue: require(\"./shim\"),
\t\tconfigurable: true,
\t\tenumerable: false,
\t\twritable: true
\t});
}
";
        
        $__internal_7488bb08ab0a1ea5ef0ba4189a284c49253c463245d4b020e3d8318c2730441c->leave($__internal_7488bb08ab0a1ea5ef0ba4189a284c49253c463245d4b020e3d8318c2730441c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/@@iterator/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, require(\"es6-symbol\").iterator, {
\t\tvalue: require(\"./shim\"),
\t\tconfigurable: true,
\t\tenumerable: false,
\t\twritable: true
\t});
}
", "node_modules/es5-ext/array/#/@@iterator/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/@@iterator/implement.js");
    }
}
