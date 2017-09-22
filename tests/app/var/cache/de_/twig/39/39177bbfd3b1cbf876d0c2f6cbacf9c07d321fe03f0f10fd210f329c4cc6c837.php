<?php

/* node_modules/es5-ext/test/object/assign/is-implemented.js */
class __TwigTemplate_0bc2d68e4e4a9f3088ecd6fbd088ef93fab18d650b6a0f66c8612fbdf86b460e extends Twig_Template
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
        $__internal_15b2dd086cec4d8acc856d022c7903ca63736bd9cc314f3f03db66640984ba8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b2dd086cec4d8acc856d022c7903ca63736bd9cc314f3f03db66640984ba8d->enter($__internal_15b2dd086cec4d8acc856d022c7903ca63736bd9cc314f3f03db66640984ba8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/assign/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_15b2dd086cec4d8acc856d022c7903ca63736bd9cc314f3f03db66640984ba8d->leave($__internal_15b2dd086cec4d8acc856d022c7903ca63736bd9cc314f3f03db66640984ba8d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/assign/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
", "node_modules/es5-ext/test/object/assign/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/assign/is-implemented.js");
    }
}
