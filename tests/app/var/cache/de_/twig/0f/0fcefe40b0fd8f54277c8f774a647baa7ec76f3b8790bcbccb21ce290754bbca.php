<?php

/* node_modules/lodash/fp/find.js */
class __TwigTemplate_206094e57bf1fcc1170a1939d66b3ea7920acbeea1f9cf09120a4321d6a80d67 extends Twig_Template
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
        $__internal_93388045dbeb6acef59fbc377742fc0f0ae3644afeab4164ad75de20ab057516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93388045dbeb6acef59fbc377742fc0f0ae3644afeab4164ad75de20ab057516->enter($__internal_93388045dbeb6acef59fbc377742fc0f0ae3644afeab4164ad75de20ab057516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/find.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('find', require('../find'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_93388045dbeb6acef59fbc377742fc0f0ae3644afeab4164ad75de20ab057516->leave($__internal_93388045dbeb6acef59fbc377742fc0f0ae3644afeab4164ad75de20ab057516_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/find.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('find', require('../find'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/find.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/find.js");
    }
}
