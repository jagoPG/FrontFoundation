<?php

/* node_modules/core-js/library/fn/delay.js */
class __TwigTemplate_642db07104a749db9ff6fbe9fcc20765a5082b014b19628f82e987b8818b3626 extends Twig_Template
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
        $__internal_3d29eb4de151f47b08fb758dd087159fd386b051f34d7aba17bd914051250292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d29eb4de151f47b08fb758dd087159fd386b051f34d7aba17bd914051250292->enter($__internal_3d29eb4de151f47b08fb758dd087159fd386b051f34d7aba17bd914051250292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/delay.js"));

        // line 1
        echo "require('../modules/core.delay');
module.exports = require('../modules/_core').delay;
";
        
        $__internal_3d29eb4de151f47b08fb758dd087159fd386b051f34d7aba17bd914051250292->leave($__internal_3d29eb4de151f47b08fb758dd087159fd386b051f34d7aba17bd914051250292_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/delay.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.delay');
module.exports = require('../modules/_core').delay;
", "node_modules/core-js/library/fn/delay.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/delay.js");
    }
}
