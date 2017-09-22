<?php

/* node_modules/es5-ext/math/sinh/is-implemented.js */
class __TwigTemplate_691e720a670fe9a2f731f2539e21bf234c91186ad5a18811b11703f89fb0eafa extends Twig_Template
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
        $__internal_e92125edc817d6a659177a4b710b2b26c6d20c16c5308efa17cbd337b5ae70f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92125edc817d6a659177a4b710b2b26c6d20c16c5308efa17cbd337b5ae70f3->enter($__internal_e92125edc817d6a659177a4b710b2b26c6d20c16c5308efa17cbd337b5ae70f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/sinh/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar sinh = Math.sinh;
\tif (typeof sinh !== \"function\") return false;
\treturn (sinh(1) === 1.1752011936438014) && (sinh(Number.MIN_VALUE) === 5e-324);
};
";
        
        $__internal_e92125edc817d6a659177a4b710b2b26c6d20c16c5308efa17cbd337b5ae70f3->leave($__internal_e92125edc817d6a659177a4b710b2b26c6d20c16c5308efa17cbd337b5ae70f3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/sinh/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar sinh = Math.sinh;
\tif (typeof sinh !== \"function\") return false;
\treturn (sinh(1) === 1.1752011936438014) && (sinh(Number.MIN_VALUE) === 5e-324);
};
", "node_modules/es5-ext/math/sinh/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/sinh/is-implemented.js");
    }
}
