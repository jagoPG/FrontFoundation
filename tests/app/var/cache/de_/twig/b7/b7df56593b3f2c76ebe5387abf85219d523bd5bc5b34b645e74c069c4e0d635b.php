<?php

/* node_modules/es5-ext/math/log2/implement.js */
class __TwigTemplate_b8137a3f7cb7164d1827711c2b481243e2accd2c4e48b53df32c08323f3a056b extends Twig_Template
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
        $__internal_21581daaf9be5dc6e740d925dfcab10137167632b321fdd823612938e7742538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21581daaf9be5dc6e740d925dfcab10137167632b321fdd823612938e7742538->enter($__internal_21581daaf9be5dc6e740d925dfcab10137167632b321fdd823612938e7742538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/log2/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"log2\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_21581daaf9be5dc6e740d925dfcab10137167632b321fdd823612938e7742538->leave($__internal_21581daaf9be5dc6e740d925dfcab10137167632b321fdd823612938e7742538_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/log2/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"log2\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/log2/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/log2/implement.js");
    }
}
