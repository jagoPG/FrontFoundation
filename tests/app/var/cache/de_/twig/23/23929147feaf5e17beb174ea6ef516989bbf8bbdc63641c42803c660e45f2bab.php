<?php

/* node_modules/es5-ext/test/array/generate.js */
class __TwigTemplate_803c488cabe854a9635b2a0549a743a505c05c678e961b1d7685b6594ceb2087 extends Twig_Template
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
        $__internal_e1bb4e96d024bcd38c3d1fd8e8eb89d7af4bb3fc75f99038f3d635167d3a0d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1bb4e96d024bcd38c3d1fd8e8eb89d7af4bb3fc75f99038f3d635167d3a0d0e->enter($__internal_e1bb4e96d024bcd38c3d1fd8e8eb89d7af4bb3fc75f99038f3d635167d3a0d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/generate.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar x = {}, y = {};
\ta.deep(t(3), [undefined, undefined, undefined], \"Just length\");
\ta.deep(t(0, \"x\"), [], \"No repeat\");
\ta.deep(t(1, x, y), [x], \"Arguments length larger than repeat number\");
\ta.deep(t(3, x), [x, x, x], \"Single argument\");
\ta.deep(t(5, x, y), [x, y, x, y, x], \"Many arguments\");
};
";
        
        $__internal_e1bb4e96d024bcd38c3d1fd8e8eb89d7af4bb3fc75f99038f3d635167d3a0d0e->leave($__internal_e1bb4e96d024bcd38c3d1fd8e8eb89d7af4bb3fc75f99038f3d635167d3a0d0e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/generate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar x = {}, y = {};
\ta.deep(t(3), [undefined, undefined, undefined], \"Just length\");
\ta.deep(t(0, \"x\"), [], \"No repeat\");
\ta.deep(t(1, x, y), [x], \"Arguments length larger than repeat number\");
\ta.deep(t(3, x), [x, x, x], \"Single argument\");
\ta.deep(t(5, x, y), [x, y, x, y, x], \"Many arguments\");
};
", "node_modules/es5-ext/test/array/generate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/generate.js");
    }
}
