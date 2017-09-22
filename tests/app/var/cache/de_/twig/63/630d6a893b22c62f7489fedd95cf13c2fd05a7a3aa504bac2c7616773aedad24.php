<?php

/* node_modules/lodash/fp/divide.js */
class __TwigTemplate_4eb82643c4838356de4a50f83766e345c59efbe666d4216ad93c21dd705f5cbc extends Twig_Template
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
        $__internal_b871c8bf53973fe60da6f877171b726ca8c5a0d176526089cc72a41e8b38b3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b871c8bf53973fe60da6f877171b726ca8c5a0d176526089cc72a41e8b38b3f3->enter($__internal_b871c8bf53973fe60da6f877171b726ca8c5a0d176526089cc72a41e8b38b3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/divide.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('divide', require('../divide'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_b871c8bf53973fe60da6f877171b726ca8c5a0d176526089cc72a41e8b38b3f3->leave($__internal_b871c8bf53973fe60da6f877171b726ca8c5a0d176526089cc72a41e8b38b3f3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/divide.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('divide', require('../divide'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/divide.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/divide.js");
    }
}
