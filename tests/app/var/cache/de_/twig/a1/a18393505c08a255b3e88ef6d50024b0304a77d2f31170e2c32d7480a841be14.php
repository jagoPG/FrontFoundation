<?php

/* node_modules/core-js/fn/number/epsilon.js */
class __TwigTemplate_265a6f0b76b70720cc2c4a21bda36d89686fe272c01ef6f1a3f8b8b35b212857 extends Twig_Template
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
        $__internal_9c931cd575eb15dacedd79f4b2f7142478dca3119772e64720eba7579f1f2f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c931cd575eb15dacedd79f4b2f7142478dca3119772e64720eba7579f1f2f49->enter($__internal_9c931cd575eb15dacedd79f4b2f7142478dca3119772e64720eba7579f1f2f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/number/epsilon.js"));

        // line 1
        echo "require('../../modules/es6.number.epsilon');
module.exports = Math.pow(2, -52);
";
        
        $__internal_9c931cd575eb15dacedd79f4b2f7142478dca3119772e64720eba7579f1f2f49->leave($__internal_9c931cd575eb15dacedd79f4b2f7142478dca3119772e64720eba7579f1f2f49_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/number/epsilon.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.number.epsilon');
module.exports = Math.pow(2, -52);
", "node_modules/core-js/fn/number/epsilon.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/number/epsilon.js");
    }
}
