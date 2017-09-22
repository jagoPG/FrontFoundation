<?php

/* node_modules/es5-ext/test/array/#/clear.js */
class __TwigTemplate_14ef6b684621ac879db9749b49d6afe1ef7dd70768dd9af6eb12bb99d2031c7c extends Twig_Template
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
        $__internal_5f4960d66803a2a89d3e42660fd965756638121114dabd4e68ff982334394d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4960d66803a2a89d3e42660fd965756638121114dabd4e68ff982334394d26->enter($__internal_5f4960d66803a2a89d3e42660fd965756638121114dabd4e68ff982334394d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/clear.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar arr = [1, 2, {}, 4];
\ta(t.call(arr), arr, \"Returns same array\");
\ta.deep(arr, [], \"Empties array\");
};
";
        
        $__internal_5f4960d66803a2a89d3e42660fd965756638121114dabd4e68ff982334394d26->leave($__internal_5f4960d66803a2a89d3e42660fd965756638121114dabd4e68ff982334394d26_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/clear.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar arr = [1, 2, {}, 4];
\ta(t.call(arr), arr, \"Returns same array\");
\ta.deep(arr, [], \"Empties array\");
};
", "node_modules/es5-ext/test/array/#/clear.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/clear.js");
    }
}
