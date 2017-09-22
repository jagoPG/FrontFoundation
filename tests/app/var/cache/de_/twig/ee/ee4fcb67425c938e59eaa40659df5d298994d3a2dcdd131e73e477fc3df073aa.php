<?php

/* node_modules/lodash/fp/forIn.js */
class __TwigTemplate_4271c2f896e5fe15b37e41300b4deb02aed01c53898eeafc0f0cde996efb7b8c extends Twig_Template
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
        $__internal_9c1dfcc02adcdf038b5a814205563f3b82d325ff16d2da8246b1ea7dadde9293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1dfcc02adcdf038b5a814205563f3b82d325ff16d2da8246b1ea7dadde9293->enter($__internal_9c1dfcc02adcdf038b5a814205563f3b82d325ff16d2da8246b1ea7dadde9293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/forIn.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('forIn', require('../forIn'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_9c1dfcc02adcdf038b5a814205563f3b82d325ff16d2da8246b1ea7dadde9293->leave($__internal_9c1dfcc02adcdf038b5a814205563f3b82d325ff16d2da8246b1ea7dadde9293_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/forIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('forIn', require('../forIn'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/forIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/forIn.js");
    }
}
