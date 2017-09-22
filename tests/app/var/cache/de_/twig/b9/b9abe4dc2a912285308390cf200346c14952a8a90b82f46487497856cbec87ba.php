<?php

/* node_modules/lodash/fp/isArrayBuffer.js */
class __TwigTemplate_78372bca2f631452beaa95dcb521d647c9e7c9cfc13cb97101426f8a5898b9cc extends Twig_Template
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
        $__internal_41096a9f919cf01a1c64851bdaf43dec1be7da42b6424aba5a104b8a979a83b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41096a9f919cf01a1c64851bdaf43dec1be7da42b6424aba5a104b8a979a83b8->enter($__internal_41096a9f919cf01a1c64851bdaf43dec1be7da42b6424aba5a104b8a979a83b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isArrayBuffer.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isArrayBuffer', require('../isArrayBuffer'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_41096a9f919cf01a1c64851bdaf43dec1be7da42b6424aba5a104b8a979a83b8->leave($__internal_41096a9f919cf01a1c64851bdaf43dec1be7da42b6424aba5a104b8a979a83b8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isArrayBuffer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isArrayBuffer', require('../isArrayBuffer'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isArrayBuffer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isArrayBuffer.js");
    }
}
