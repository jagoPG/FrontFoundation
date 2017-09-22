<?php

/* node_modules/es5-ext/string/raw/implement.js */
class __TwigTemplate_e5011f2f7246ecd153921ea5a6ced5fff2ef1210ccc6af072f5e99de769f6d00 extends Twig_Template
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
        $__internal_9280267e7b69458081cf210af3b7f53d63af64642c641389e438e00da6e7108d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9280267e7b69458081cf210af3b7f53d63af64642c641389e438e00da6e7108d->enter($__internal_9280267e7b69458081cf210af3b7f53d63af64642c641389e438e00da6e7108d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/raw/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String, \"raw\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_9280267e7b69458081cf210af3b7f53d63af64642c641389e438e00da6e7108d->leave($__internal_9280267e7b69458081cf210af3b7f53d63af64642c641389e438e00da6e7108d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/raw/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String, \"raw\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/string/raw/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/raw/implement.js");
    }
}
