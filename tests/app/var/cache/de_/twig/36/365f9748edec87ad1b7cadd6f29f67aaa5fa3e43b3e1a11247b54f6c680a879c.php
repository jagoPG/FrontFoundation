<?php

/* node_modules/lodash/fp/isPlainObject.js */
class __TwigTemplate_c492ca2d644cd60154b2d6ec24c65bbda372eeb4f996ec09b0c24c862158402d extends Twig_Template
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
        $__internal_85bfa35d1f25d81db7244bd583a617e008f3bd4e678dbd3e8afd2d145a7a5f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85bfa35d1f25d81db7244bd583a617e008f3bd4e678dbd3e8afd2d145a7a5f1a->enter($__internal_85bfa35d1f25d81db7244bd583a617e008f3bd4e678dbd3e8afd2d145a7a5f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isPlainObject.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isPlainObject', require('../isPlainObject'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_85bfa35d1f25d81db7244bd583a617e008f3bd4e678dbd3e8afd2d145a7a5f1a->leave($__internal_85bfa35d1f25d81db7244bd583a617e008f3bd4e678dbd3e8afd2d145a7a5f1a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isPlainObject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isPlainObject', require('../isPlainObject'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isPlainObject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isPlainObject.js");
    }
}
