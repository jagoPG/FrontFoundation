<?php

/* node_modules/es5-ext/math/clz32/implement.js */
class __TwigTemplate_1f32e580d5f24bcc7ea529cc4bdacf6d68baa9f66c2b34a85e4f7ebd1c25752b extends Twig_Template
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
        $__internal_85b75592b3f49884524b5ef1e6ff408fd623fdf26fdda8b731f5a0f29818cdcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b75592b3f49884524b5ef1e6ff408fd623fdf26fdda8b731f5a0f29818cdcc->enter($__internal_85b75592b3f49884524b5ef1e6ff408fd623fdf26fdda8b731f5a0f29818cdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/clz32/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"clz32\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_85b75592b3f49884524b5ef1e6ff408fd623fdf26fdda8b731f5a0f29818cdcc->leave($__internal_85b75592b3f49884524b5ef1e6ff408fd623fdf26fdda8b731f5a0f29818cdcc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/clz32/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"clz32\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/clz32/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/clz32/implement.js");
    }
}
