<?php

/* node_modules/es5-ext/math/fround/implement.js */
class __TwigTemplate_c2ede0e74fb0482db8ca801963336b3d3a35b84a75a763e8c9c5427dcae273c3 extends Twig_Template
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
        $__internal_c7cf49d1687de50850108e993bb27dee6e9038b75ec3ddea8cefe76fadb8119c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cf49d1687de50850108e993bb27dee6e9038b75ec3ddea8cefe76fadb8119c->enter($__internal_c7cf49d1687de50850108e993bb27dee6e9038b75ec3ddea8cefe76fadb8119c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/fround/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"fround\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_c7cf49d1687de50850108e993bb27dee6e9038b75ec3ddea8cefe76fadb8119c->leave($__internal_c7cf49d1687de50850108e993bb27dee6e9038b75ec3ddea8cefe76fadb8119c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/fround/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"fround\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/fround/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/fround/implement.js");
    }
}
