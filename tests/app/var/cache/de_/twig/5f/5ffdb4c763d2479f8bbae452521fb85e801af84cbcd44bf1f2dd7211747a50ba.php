<?php

/* node_modules/lodash/fp/isBoolean.js */
class __TwigTemplate_0db0794db6109d897525feb940513fb8498d1483a6335f731bfd49e9c06c3887 extends Twig_Template
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
        $__internal_4f782fd605f3b4f5edda9c38d12d04cefe66845cc9262fcb8829ed2e980211c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f782fd605f3b4f5edda9c38d12d04cefe66845cc9262fcb8829ed2e980211c2->enter($__internal_4f782fd605f3b4f5edda9c38d12d04cefe66845cc9262fcb8829ed2e980211c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isBoolean.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isBoolean', require('../isBoolean'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_4f782fd605f3b4f5edda9c38d12d04cefe66845cc9262fcb8829ed2e980211c2->leave($__internal_4f782fd605f3b4f5edda9c38d12d04cefe66845cc9262fcb8829ed2e980211c2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isBoolean.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isBoolean', require('../isBoolean'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isBoolean.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isBoolean.js");
    }
}
