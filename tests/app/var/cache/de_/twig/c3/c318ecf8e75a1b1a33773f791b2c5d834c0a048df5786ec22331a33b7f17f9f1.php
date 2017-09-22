<?php

/* node_modules/lodash/fp/isMap.js */
class __TwigTemplate_bf058102fb14e2fa41388fc4e5c37a9b8615cd16714a707455e0b340360095f3 extends Twig_Template
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
        $__internal_c370147e69d2eaedd79153126d4db6b2e9b077634ed670d9412c34f6f7fb74a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c370147e69d2eaedd79153126d4db6b2e9b077634ed670d9412c34f6f7fb74a8->enter($__internal_c370147e69d2eaedd79153126d4db6b2e9b077634ed670d9412c34f6f7fb74a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isMap.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isMap', require('../isMap'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_c370147e69d2eaedd79153126d4db6b2e9b077634ed670d9412c34f6f7fb74a8->leave($__internal_c370147e69d2eaedd79153126d4db6b2e9b077634ed670d9412c34f6f7fb74a8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isMap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isMap', require('../isMap'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isMap.js");
    }
}
