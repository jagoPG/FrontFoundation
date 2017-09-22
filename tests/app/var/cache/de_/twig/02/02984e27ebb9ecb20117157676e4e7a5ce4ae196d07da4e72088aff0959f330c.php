<?php

/* node_modules/lodash/fp/compact.js */
class __TwigTemplate_2ee66ba8316b70770dffe84deb7a99935e58dd9b37f72cf9a9f569c41ed4485f extends Twig_Template
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
        $__internal_d2d02b6496ec5ae8c422432b297c1731c7fd41b272930daf799aff2e34d5e9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d02b6496ec5ae8c422432b297c1731c7fd41b272930daf799aff2e34d5e9a6->enter($__internal_d2d02b6496ec5ae8c422432b297c1731c7fd41b272930daf799aff2e34d5e9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/compact.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('compact', require('../compact'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_d2d02b6496ec5ae8c422432b297c1731c7fd41b272930daf799aff2e34d5e9a6->leave($__internal_d2d02b6496ec5ae8c422432b297c1731c7fd41b272930daf799aff2e34d5e9a6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/compact.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('compact', require('../compact'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/compact.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/compact.js");
    }
}
