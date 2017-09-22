<?php

/* node_modules/lodash/fp/trimCharsEnd.js */
class __TwigTemplate_4d6567585d51cd2ca8e2983984603bc0f1b81a605f03b500f38f383b7385b516 extends Twig_Template
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
        $__internal_d37b801b967da929bb90aa9a29e9422588583073699117cf64a7a605dd41274d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37b801b967da929bb90aa9a29e9422588583073699117cf64a7a605dd41274d->enter($__internal_d37b801b967da929bb90aa9a29e9422588583073699117cf64a7a605dd41274d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/trimCharsEnd.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('trimCharsEnd', require('../trimEnd'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_d37b801b967da929bb90aa9a29e9422588583073699117cf64a7a605dd41274d->leave($__internal_d37b801b967da929bb90aa9a29e9422588583073699117cf64a7a605dd41274d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/trimCharsEnd.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('trimCharsEnd', require('../trimEnd'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/trimCharsEnd.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/trimCharsEnd.js");
    }
}
