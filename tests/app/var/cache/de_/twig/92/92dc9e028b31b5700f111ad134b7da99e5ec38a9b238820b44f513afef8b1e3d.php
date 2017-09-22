<?php

/* node_modules/lodash/fp/sortedUniq.js */
class __TwigTemplate_03700787344f615a6a14ca8ec4f6239c574d135ed205286fdfba8bdd854ec504 extends Twig_Template
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
        $__internal_155e1d844b051091961f2d7d34476298a370cc8043fecfbc60e6e6935af8ffe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155e1d844b051091961f2d7d34476298a370cc8043fecfbc60e6e6935af8ffe9->enter($__internal_155e1d844b051091961f2d7d34476298a370cc8043fecfbc60e6e6935af8ffe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/sortedUniq.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('sortedUniq', require('../sortedUniq'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_155e1d844b051091961f2d7d34476298a370cc8043fecfbc60e6e6935af8ffe9->leave($__internal_155e1d844b051091961f2d7d34476298a370cc8043fecfbc60e6e6935af8ffe9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/sortedUniq.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('sortedUniq', require('../sortedUniq'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/sortedUniq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/sortedUniq.js");
    }
}
