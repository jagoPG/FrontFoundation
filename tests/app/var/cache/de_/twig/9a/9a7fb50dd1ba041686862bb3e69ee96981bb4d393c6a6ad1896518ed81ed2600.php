<?php

/* node_modules/es5-ext/math/sinh/implement.js */
class __TwigTemplate_d735ba4fc45eb39191cc05b06b84760a0bfcbe999f3f83e70bc5562c29750490 extends Twig_Template
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
        $__internal_e1c2d001e8bbb40e238d52f5237be85847baf75a3b74f9e6ec9eb56465070308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c2d001e8bbb40e238d52f5237be85847baf75a3b74f9e6ec9eb56465070308->enter($__internal_e1c2d001e8bbb40e238d52f5237be85847baf75a3b74f9e6ec9eb56465070308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/sinh/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"sinh\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_e1c2d001e8bbb40e238d52f5237be85847baf75a3b74f9e6ec9eb56465070308->leave($__internal_e1c2d001e8bbb40e238d52f5237be85847baf75a3b74f9e6ec9eb56465070308_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/sinh/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"sinh\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/sinh/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/sinh/implement.js");
    }
}
