<?php

/* node_modules/lodash/fp/difference.js */
class __TwigTemplate_aa57add7420b72c83d68ac5872a1be2de402d6e181335e0f255acc98c05ea16e extends Twig_Template
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
        $__internal_db499df2940d74a1946562c6fd2ad8df13f596e3d9de86a26945b0185e72f00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db499df2940d74a1946562c6fd2ad8df13f596e3d9de86a26945b0185e72f00d->enter($__internal_db499df2940d74a1946562c6fd2ad8df13f596e3d9de86a26945b0185e72f00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/difference.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('difference', require('../difference'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_db499df2940d74a1946562c6fd2ad8df13f596e3d9de86a26945b0185e72f00d->leave($__internal_db499df2940d74a1946562c6fd2ad8df13f596e3d9de86a26945b0185e72f00d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/difference.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('difference', require('../difference'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/difference.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/difference.js");
    }
}
