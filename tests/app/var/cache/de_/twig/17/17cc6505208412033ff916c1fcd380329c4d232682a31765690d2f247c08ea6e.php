<?php

/* node_modules/lodash/fp/uniq.js */
class __TwigTemplate_ae54792000cc626ca87fec99b9271a925f762285e174f5a0052f3f9f7bcd23f9 extends Twig_Template
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
        $__internal_be258e8bfa253b892949d2963bd03f4fc482dc934fc18405dd3d2a862a560c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be258e8bfa253b892949d2963bd03f4fc482dc934fc18405dd3d2a862a560c1d->enter($__internal_be258e8bfa253b892949d2963bd03f4fc482dc934fc18405dd3d2a862a560c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/uniq.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('uniq', require('../uniq'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_be258e8bfa253b892949d2963bd03f4fc482dc934fc18405dd3d2a862a560c1d->leave($__internal_be258e8bfa253b892949d2963bd03f4fc482dc934fc18405dd3d2a862a560c1d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/uniq.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('uniq', require('../uniq'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/uniq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/uniq.js");
    }
}
