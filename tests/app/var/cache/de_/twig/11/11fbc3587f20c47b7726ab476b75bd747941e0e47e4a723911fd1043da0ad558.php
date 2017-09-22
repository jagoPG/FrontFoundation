<?php

/* node_modules/es6-map/test/lib/iterator-kinds.js */
class __TwigTemplate_e2bbed3af7230166dc54eb863a5aca7c19707be1cdf2377059d1c01e4b586d89 extends Twig_Template
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
        $__internal_c2f1968b372684c8d7fccf9409e804039b25d4aa1cceb863c81ce0e453a41558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f1968b372684c8d7fccf9409e804039b25d4aa1cceb863c81ce0e453a41558->enter($__internal_c2f1968b372684c8d7fccf9409e804039b25d4aa1cceb863c81ce0e453a41558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/test/lib/iterator-kinds.js"));

        // line 1
        echo "'use strict';

module.exports = function (t, a) {
\ta.deep(t, { key: true, value: true, 'key+value': true });
};
";
        
        $__internal_c2f1968b372684c8d7fccf9409e804039b25d4aa1cceb863c81ce0e453a41558->leave($__internal_c2f1968b372684c8d7fccf9409e804039b25d4aa1cceb863c81ce0e453a41558_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/test/lib/iterator-kinds.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function (t, a) {
\ta.deep(t, { key: true, value: true, 'key+value': true });
};
", "node_modules/es6-map/test/lib/iterator-kinds.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/test/lib/iterator-kinds.js");
    }
}
