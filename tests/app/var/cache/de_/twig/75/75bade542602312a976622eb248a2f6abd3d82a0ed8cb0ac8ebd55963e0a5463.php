<?php

/* node_modules/lodash/fp/sortedIndexBy.js */
class __TwigTemplate_f726d1e30ac5399cb41e305341f8168aac14beca184f679bb207f158b5790bf4 extends Twig_Template
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
        $__internal_b68f1145261d54e79ef40af92dd644d19f2bbf0c01c26ba2f1516548d8cfb6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68f1145261d54e79ef40af92dd644d19f2bbf0c01c26ba2f1516548d8cfb6aa->enter($__internal_b68f1145261d54e79ef40af92dd644d19f2bbf0c01c26ba2f1516548d8cfb6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/sortedIndexBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('sortedIndexBy', require('../sortedIndexBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_b68f1145261d54e79ef40af92dd644d19f2bbf0c01c26ba2f1516548d8cfb6aa->leave($__internal_b68f1145261d54e79ef40af92dd644d19f2bbf0c01c26ba2f1516548d8cfb6aa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/sortedIndexBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('sortedIndexBy', require('../sortedIndexBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/sortedIndexBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/sortedIndexBy.js");
    }
}
