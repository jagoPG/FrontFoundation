<?php

/* node_modules/lodash/fp/cond.js */
class __TwigTemplate_62206a35233531e8afa677d06c64ac03748c8f02bc4e94d146d4d6792929ca2c extends Twig_Template
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
        $__internal_e2895757dde41c462f82c5268069bb8ecb80f5c7b8b1aa0e991a36e67580e37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2895757dde41c462f82c5268069bb8ecb80f5c7b8b1aa0e991a36e67580e37e->enter($__internal_e2895757dde41c462f82c5268069bb8ecb80f5c7b8b1aa0e991a36e67580e37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/cond.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('cond', require('../cond'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_e2895757dde41c462f82c5268069bb8ecb80f5c7b8b1aa0e991a36e67580e37e->leave($__internal_e2895757dde41c462f82c5268069bb8ecb80f5c7b8b1aa0e991a36e67580e37e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/cond.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('cond', require('../cond'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/cond.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/cond.js");
    }
}
