<?php

/* node_modules/core-js/fn/array/virtual/reduce.js */
class __TwigTemplate_00bc5d0c9c93ef314751b799dab7a3b11d1f8a374531e78d470651e0edf0ca72 extends Twig_Template
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
        $__internal_54f77e8a18c54940d976d00cd87cb37814af81984fdf9c5fa37ecad19ce39c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f77e8a18c54940d976d00cd87cb37814af81984fdf9c5fa37ecad19ce39c08->enter($__internal_54f77e8a18c54940d976d00cd87cb37814af81984fdf9c5fa37ecad19ce39c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/virtual/reduce.js"));

        // line 1
        echo "require('../../../modules/es6.array.reduce');
module.exports = require('../../../modules/_entry-virtual')('Array').reduce;
";
        
        $__internal_54f77e8a18c54940d976d00cd87cb37814af81984fdf9c5fa37ecad19ce39c08->leave($__internal_54f77e8a18c54940d976d00cd87cb37814af81984fdf9c5fa37ecad19ce39c08_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/virtual/reduce.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.reduce');
module.exports = require('../../../modules/_entry-virtual')('Array').reduce;
", "node_modules/core-js/fn/array/virtual/reduce.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/virtual/reduce.js");
    }
}
