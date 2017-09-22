<?php

/* node_modules/lodash/fp/nth.js */
class __TwigTemplate_a724ae6b27c61708ffe63ddc72ac855cfb5f71853a50e37a121e858132b31092 extends Twig_Template
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
        $__internal_87b4a4eefe24a03cbbca9b96f5c95155b82b11aef763e5dece23ecf4f6ceb2a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b4a4eefe24a03cbbca9b96f5c95155b82b11aef763e5dece23ecf4f6ceb2a3->enter($__internal_87b4a4eefe24a03cbbca9b96f5c95155b82b11aef763e5dece23ecf4f6ceb2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/nth.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('nth', require('../nth'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_87b4a4eefe24a03cbbca9b96f5c95155b82b11aef763e5dece23ecf4f6ceb2a3->leave($__internal_87b4a4eefe24a03cbbca9b96f5c95155b82b11aef763e5dece23ecf4f6ceb2a3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/nth.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('nth', require('../nth'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/nth.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/nth.js");
    }
}
