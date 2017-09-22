<?php

/* node_modules/lodash/fp/mixin.js */
class __TwigTemplate_8324974960dcc515ab2a80b78ae2407acaffe117feade948bf1367dceccc046f extends Twig_Template
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
        $__internal_98ab450969c346f44d7f94c6cc3e09a5b8caf64aaa2ada34414649f07c17ff35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ab450969c346f44d7f94c6cc3e09a5b8caf64aaa2ada34414649f07c17ff35->enter($__internal_98ab450969c346f44d7f94c6cc3e09a5b8caf64aaa2ada34414649f07c17ff35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/mixin.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('mixin', require('../mixin'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_98ab450969c346f44d7f94c6cc3e09a5b8caf64aaa2ada34414649f07c17ff35->leave($__internal_98ab450969c346f44d7f94c6cc3e09a5b8caf64aaa2ada34414649f07c17ff35_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/mixin.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('mixin', require('../mixin'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/mixin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/mixin.js");
    }
}
