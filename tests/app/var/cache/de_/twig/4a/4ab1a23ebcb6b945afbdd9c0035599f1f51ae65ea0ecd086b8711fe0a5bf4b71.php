<?php

/* node_modules/lodash/fp/without.js */
class __TwigTemplate_b573368f0dad5ce473550f6b1839bbf74dd701ed5825e8d1a5c76d54960ae4c8 extends Twig_Template
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
        $__internal_6894f178c4a6716efd8a298f981654ca25958ecdd8dc63b9dea40b71b9bda473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6894f178c4a6716efd8a298f981654ca25958ecdd8dc63b9dea40b71b9bda473->enter($__internal_6894f178c4a6716efd8a298f981654ca25958ecdd8dc63b9dea40b71b9bda473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/without.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('without', require('../without'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_6894f178c4a6716efd8a298f981654ca25958ecdd8dc63b9dea40b71b9bda473->leave($__internal_6894f178c4a6716efd8a298f981654ca25958ecdd8dc63b9dea40b71b9bda473_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/without.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('without', require('../without'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/without.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/without.js");
    }
}
