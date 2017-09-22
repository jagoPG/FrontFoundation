<?php

/* node_modules/lodash/fp/uniqBy.js */
class __TwigTemplate_77373e95ba10eb8c312e2416376708fe2a2c4bb91bde1be1fbd3a6a1a53202c7 extends Twig_Template
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
        $__internal_7801fbba3071c704ded6235b6d5df508858e5a907075ea493c727abd9018914a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7801fbba3071c704ded6235b6d5df508858e5a907075ea493c727abd9018914a->enter($__internal_7801fbba3071c704ded6235b6d5df508858e5a907075ea493c727abd9018914a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/uniqBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('uniqBy', require('../uniqBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_7801fbba3071c704ded6235b6d5df508858e5a907075ea493c727abd9018914a->leave($__internal_7801fbba3071c704ded6235b6d5df508858e5a907075ea493c727abd9018914a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/uniqBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('uniqBy', require('../uniqBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/uniqBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/uniqBy.js");
    }
}
