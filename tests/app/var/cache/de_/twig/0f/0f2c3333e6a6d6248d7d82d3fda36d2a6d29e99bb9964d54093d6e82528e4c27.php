<?php

/* node_modules/lodash/fp/snakeCase.js */
class __TwigTemplate_40d425a49be7c98901926e4fb639f27277a6380eedea80e537bb42a30fbe4bec extends Twig_Template
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
        $__internal_012cee0364f3cb4034ac0ed1d14be3d0e84139471ec932248be7b237d5fda082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012cee0364f3cb4034ac0ed1d14be3d0e84139471ec932248be7b237d5fda082->enter($__internal_012cee0364f3cb4034ac0ed1d14be3d0e84139471ec932248be7b237d5fda082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/snakeCase.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('snakeCase', require('../snakeCase'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_012cee0364f3cb4034ac0ed1d14be3d0e84139471ec932248be7b237d5fda082->leave($__internal_012cee0364f3cb4034ac0ed1d14be3d0e84139471ec932248be7b237d5fda082_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/snakeCase.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('snakeCase', require('../snakeCase'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/snakeCase.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/snakeCase.js");
    }
}
