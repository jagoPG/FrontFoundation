<?php

/* node_modules/lodash/fp/conformsTo.js */
class __TwigTemplate_d390c42cc990c2d5f5118b664a9a30441bbabba8d5582141cf615b3db96ce470 extends Twig_Template
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
        $__internal_3f192f3f24a885a858cb3890c10a2d0cc0ab5809f59c3cdea0075a0eeb7d6ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f192f3f24a885a858cb3890c10a2d0cc0ab5809f59c3cdea0075a0eeb7d6ab6->enter($__internal_3f192f3f24a885a858cb3890c10a2d0cc0ab5809f59c3cdea0075a0eeb7d6ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/conformsTo.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('conformsTo', require('../conformsTo'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_3f192f3f24a885a858cb3890c10a2d0cc0ab5809f59c3cdea0075a0eeb7d6ab6->leave($__internal_3f192f3f24a885a858cb3890c10a2d0cc0ab5809f59c3cdea0075a0eeb7d6ab6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/conformsTo.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('conformsTo', require('../conformsTo'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/conformsTo.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/conformsTo.js");
    }
}
