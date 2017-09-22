<?php

/* node_modules/lodash/fp/isMatch.js */
class __TwigTemplate_3bf00470c71452b9ebe1f50393f9cd3d3cacfb6200655f680c755b7ad40d2a9c extends Twig_Template
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
        $__internal_24cd15b117302f96fe30b405ab051da90bb6f0e510824fd2356a55de173a6374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cd15b117302f96fe30b405ab051da90bb6f0e510824fd2356a55de173a6374->enter($__internal_24cd15b117302f96fe30b405ab051da90bb6f0e510824fd2356a55de173a6374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isMatch.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isMatch', require('../isMatch'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_24cd15b117302f96fe30b405ab051da90bb6f0e510824fd2356a55de173a6374->leave($__internal_24cd15b117302f96fe30b405ab051da90bb6f0e510824fd2356a55de173a6374_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isMatch.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isMatch', require('../isMatch'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isMatch.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isMatch.js");
    }
}
