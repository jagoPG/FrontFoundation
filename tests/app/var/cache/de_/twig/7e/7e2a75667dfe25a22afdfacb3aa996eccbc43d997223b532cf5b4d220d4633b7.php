<?php

/* node_modules/es5-ext/math/atanh/implement.js */
class __TwigTemplate_b25372981ebc15be645f2a86d9c6698da493a6855447a5779c66a322f9ac6cf9 extends Twig_Template
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
        $__internal_35b404e46b38a434e6898fe7277872a94aa2bdeeed915ecfdd2043766b2b9108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b404e46b38a434e6898fe7277872a94aa2bdeeed915ecfdd2043766b2b9108->enter($__internal_35b404e46b38a434e6898fe7277872a94aa2bdeeed915ecfdd2043766b2b9108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/atanh/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"atanh\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_35b404e46b38a434e6898fe7277872a94aa2bdeeed915ecfdd2043766b2b9108->leave($__internal_35b404e46b38a434e6898fe7277872a94aa2bdeeed915ecfdd2043766b2b9108_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/atanh/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"atanh\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/atanh/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/atanh/implement.js");
    }
}
