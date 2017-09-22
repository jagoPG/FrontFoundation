<?php

/* node_modules/lodash/fp/toUpper.js */
class __TwigTemplate_cf1d0de62b3d1886cf28d5bd4d74caf424447eeb3b03179e857aa1e31d93d2c4 extends Twig_Template
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
        $__internal_db2118c22b22088b2eee4a1dbfea6379a117610829e4810733ce962990dcaf6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2118c22b22088b2eee4a1dbfea6379a117610829e4810733ce962990dcaf6b->enter($__internal_db2118c22b22088b2eee4a1dbfea6379a117610829e4810733ce962990dcaf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/toUpper.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('toUpper', require('../toUpper'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_db2118c22b22088b2eee4a1dbfea6379a117610829e4810733ce962990dcaf6b->leave($__internal_db2118c22b22088b2eee4a1dbfea6379a117610829e4810733ce962990dcaf6b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/toUpper.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('toUpper', require('../toUpper'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/toUpper.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/toUpper.js");
    }
}
