<?php

/* node_modules/es5-ext/test/array/__scopes.js */
class __TwigTemplate_70d2ef7a3c8b2d0425b06cc3fb29825065e7f98be20cfd85031742fc74c286f5 extends Twig_Template
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
        $__internal_28b20b5418bd10a6c73b86bbf4a25006ba486cba7ca5fdf196bb31889ac55e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b20b5418bd10a6c73b86bbf4a25006ba486cba7ca5fdf196bb31889ac55e22->enter($__internal_28b20b5418bd10a6c73b86bbf4a25006ba486cba7ca5fdf196bb31889ac55e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/__scopes.js"));

        // line 1
        echo "\"use strict\";

exports.Array = [\"1\", \"2\", \"3\"];

exports.Arguments = (function () {
\treturn arguments;
}(\"1\", \"2\", \"3\"));

exports.String = \"123\";

exports.Object = { 0: \"1\", 1: \"2\", 2: \"3\", 3: \"4\", length: 3 };
";
        
        $__internal_28b20b5418bd10a6c73b86bbf4a25006ba486cba7ca5fdf196bb31889ac55e22->leave($__internal_28b20b5418bd10a6c73b86bbf4a25006ba486cba7ca5fdf196bb31889ac55e22_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/__scopes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.Array = [\"1\", \"2\", \"3\"];

exports.Arguments = (function () {
\treturn arguments;
}(\"1\", \"2\", \"3\"));

exports.String = \"123\";

exports.Object = { 0: \"1\", 1: \"2\", 2: \"3\", 3: \"4\", length: 3 };
", "node_modules/es5-ext/test/array/__scopes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/__scopes.js");
    }
}
