<?php

/* node_modules/es5-ext/test/array/#/values/is-implemented.js */
class __TwigTemplate_fb203b9a910f49de29fdb927af8614b8d28638a6bd87d8b053bedfcc74c33405 extends Twig_Template
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
        $__internal_73d58b5fcecaae561800a0845f3038a6e8acb543f8a7157503dfecaa06c6145c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d58b5fcecaae561800a0845f3038a6e8acb543f8a7157503dfecaa06c6145c->enter($__internal_73d58b5fcecaae561800a0845f3038a6e8acb543f8a7157503dfecaa06c6145c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/values/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_73d58b5fcecaae561800a0845f3038a6e8acb543f8a7157503dfecaa06c6145c->leave($__internal_73d58b5fcecaae561800a0845f3038a6e8acb543f8a7157503dfecaa06c6145c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/values/is-implemented.js";
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
", "node_modules/es5-ext/test/array/#/values/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/values/is-implemented.js");
    }
}
