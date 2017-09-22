<?php

/* node_modules/es5-ext/reg-exp/#/replace/implement.js */
class __TwigTemplate_b474f0d470a73843a51a2c85ab07509ab4b6f02e18dabfdd12b7920bb289dd53 extends Twig_Template
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
        $__internal_1a6ebc71db101b778ca92836f2711011fa060d3fa8753c92de1c4dee65c6e22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6ebc71db101b778ca92836f2711011fa060d3fa8753c92de1c4dee65c6e22f->enter($__internal_1a6ebc71db101b778ca92836f2711011fa060d3fa8753c92de1c4dee65c6e22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/replace/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(RegExp.prototype, \"replace\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_1a6ebc71db101b778ca92836f2711011fa060d3fa8753c92de1c4dee65c6e22f->leave($__internal_1a6ebc71db101b778ca92836f2711011fa060d3fa8753c92de1c4dee65c6e22f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/replace/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(RegExp.prototype, \"replace\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/reg-exp/#/replace/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/replace/implement.js");
    }
}
