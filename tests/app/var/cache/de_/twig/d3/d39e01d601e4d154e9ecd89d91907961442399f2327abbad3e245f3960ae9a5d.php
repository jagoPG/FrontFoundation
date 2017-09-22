<?php

/* node_modules/lodash/fp/startsWith.js */
class __TwigTemplate_54644a78939021d83ceec81fca3dcb7226defeaed45f6e8c8b2aad6217c5042c extends Twig_Template
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
        $__internal_819dd37c88db9c1cb6dac17168f16d2300158478945d64926010857b5ad6f408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819dd37c88db9c1cb6dac17168f16d2300158478945d64926010857b5ad6f408->enter($__internal_819dd37c88db9c1cb6dac17168f16d2300158478945d64926010857b5ad6f408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/startsWith.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('startsWith', require('../startsWith'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_819dd37c88db9c1cb6dac17168f16d2300158478945d64926010857b5ad6f408->leave($__internal_819dd37c88db9c1cb6dac17168f16d2300158478945d64926010857b5ad6f408_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/startsWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('startsWith', require('../startsWith'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/startsWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/startsWith.js");
    }
}
