<?php

/* node_modules/lodash/fp/unescape.js */
class __TwigTemplate_25896a88122c8236ed73b3762a782956df949264cb64f09ca6aa56726c108810 extends Twig_Template
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
        $__internal_f8ef119fd341011b0c75b849da407a7e3972056935ad0c4bd1256609cd5a29a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ef119fd341011b0c75b849da407a7e3972056935ad0c4bd1256609cd5a29a7->enter($__internal_f8ef119fd341011b0c75b849da407a7e3972056935ad0c4bd1256609cd5a29a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/unescape.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('unescape', require('../unescape'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_f8ef119fd341011b0c75b849da407a7e3972056935ad0c4bd1256609cd5a29a7->leave($__internal_f8ef119fd341011b0c75b849da407a7e3972056935ad0c4bd1256609cd5a29a7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/unescape.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('unescape', require('../unescape'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/unescape.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/unescape.js");
    }
}
