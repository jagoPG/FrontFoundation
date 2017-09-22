<?php

/* node_modules/core-js/es6/set.js */
class __TwigTemplate_531fdc74c147272b4ad2b5e59348099b2a218b75e0e6557169c571c83a03b738 extends Twig_Template
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
        $__internal_80c1c4fb0da0de98c5e7f0413ce020ca8c925b7a7b92c389424e5a42a3a10d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c1c4fb0da0de98c5e7f0413ce020ca8c925b7a7b92c389424e5a42a3a10d00->enter($__internal_80c1c4fb0da0de98c5e7f0413ce020ca8c925b7a7b92c389424e5a42a3a10d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es6/set.js"));

        // line 1
        echo "require('../modules/es6.object.to-string');
require('../modules/es6.string.iterator');
require('../modules/web.dom.iterable');
require('../modules/es6.set');
module.exports = require('../modules/_core').Set;
";
        
        $__internal_80c1c4fb0da0de98c5e7f0413ce020ca8c925b7a7b92c389424e5a42a3a10d00->leave($__internal_80c1c4fb0da0de98c5e7f0413ce020ca8c925b7a7b92c389424e5a42a3a10d00_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es6/set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.object.to-string');
require('../modules/es6.string.iterator');
require('../modules/web.dom.iterable');
require('../modules/es6.set');
module.exports = require('../modules/_core').Set;
", "node_modules/core-js/es6/set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es6/set.js");
    }
}
