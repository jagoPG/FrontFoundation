<?php

/* node_modules/es5-ext/array/#/splice/implement.js */
class __TwigTemplate_f97b9436b4be419043fcf71d4c47bc6c43b792b8d78916a4ed9821772a6c7cee extends Twig_Template
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
        $__internal_3c976a4c9c6f3a5c8abdab0ecbc5a0029bc6df603f8dbe14cc8d0e141bf87baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c976a4c9c6f3a5c8abdab0ecbc5a0029bc6df603f8dbe14cc8d0e141bf87baf->enter($__internal_3c976a4c9c6f3a5c8abdab0ecbc5a0029bc6df603f8dbe14cc8d0e141bf87baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/splice/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"splice\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_3c976a4c9c6f3a5c8abdab0ecbc5a0029bc6df603f8dbe14cc8d0e141bf87baf->leave($__internal_3c976a4c9c6f3a5c8abdab0ecbc5a0029bc6df603f8dbe14cc8d0e141bf87baf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/splice/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"splice\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/array/#/splice/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/splice/implement.js");
    }
}
