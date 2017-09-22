<?php

/* node_modules/lodash/fp/max.js */
class __TwigTemplate_b296f64d156c102b51918e0132b991abb7de0d828cb58da6d6dcb3e5f577eac9 extends Twig_Template
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
        $__internal_c366295b42689e466983b4091fc502e47132348b335249cc9184888333ddb9fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c366295b42689e466983b4091fc502e47132348b335249cc9184888333ddb9fc->enter($__internal_c366295b42689e466983b4091fc502e47132348b335249cc9184888333ddb9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/max.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('max', require('../max'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_c366295b42689e466983b4091fc502e47132348b335249cc9184888333ddb9fc->leave($__internal_c366295b42689e466983b4091fc502e47132348b335249cc9184888333ddb9fc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/max.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('max', require('../max'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/max.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/max.js");
    }
}
