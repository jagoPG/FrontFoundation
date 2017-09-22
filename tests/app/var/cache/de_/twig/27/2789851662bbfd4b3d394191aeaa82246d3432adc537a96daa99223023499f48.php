<?php

/* node_modules/core-js/library/es7/set.js */
class __TwigTemplate_a92cf8f8f536fb6e80bfaa31643f1eb1d684a23fab1297ca8a3b5b01c488a10c extends Twig_Template
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
        $__internal_c8a27c4f263e6e44b2cf289f0444f012931ea7244b9eb7208c025e46bc7f2170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a27c4f263e6e44b2cf289f0444f012931ea7244b9eb7208c025e46bc7f2170->enter($__internal_c8a27c4f263e6e44b2cf289f0444f012931ea7244b9eb7208c025e46bc7f2170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es7/set.js"));

        // line 1
        echo "require('../modules/es7.set.to-json');
require('../modules/es7.set.of');
require('../modules/es7.set.from');
module.exports = require('../modules/_core').Set;
";
        
        $__internal_c8a27c4f263e6e44b2cf289f0444f012931ea7244b9eb7208c025e46bc7f2170->leave($__internal_c8a27c4f263e6e44b2cf289f0444f012931ea7244b9eb7208c025e46bc7f2170_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es7/set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.set.to-json');
require('../modules/es7.set.of');
require('../modules/es7.set.from');
module.exports = require('../modules/_core').Set;
", "node_modules/core-js/library/es7/set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es7/set.js");
    }
}
