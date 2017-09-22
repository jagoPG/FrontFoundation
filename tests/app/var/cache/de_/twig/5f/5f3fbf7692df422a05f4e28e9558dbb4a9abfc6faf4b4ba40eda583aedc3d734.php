<?php

/* node_modules/lodash/fp/forInRight.js */
class __TwigTemplate_9f90eeecc37efd64b2275224364bda2f4733de2abfd9162e1e2f7bb41e097d84 extends Twig_Template
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
        $__internal_e7e447cb5ba52189d3e256593c2a257f2bf4ee1067466df75cc36cf291f323f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e447cb5ba52189d3e256593c2a257f2bf4ee1067466df75cc36cf291f323f5->enter($__internal_e7e447cb5ba52189d3e256593c2a257f2bf4ee1067466df75cc36cf291f323f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/forInRight.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('forInRight', require('../forInRight'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_e7e447cb5ba52189d3e256593c2a257f2bf4ee1067466df75cc36cf291f323f5->leave($__internal_e7e447cb5ba52189d3e256593c2a257f2bf4ee1067466df75cc36cf291f323f5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/forInRight.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('forInRight', require('../forInRight'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/forInRight.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/forInRight.js");
    }
}
