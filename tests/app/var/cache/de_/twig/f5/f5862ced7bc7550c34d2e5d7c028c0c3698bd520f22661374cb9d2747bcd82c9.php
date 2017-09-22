<?php

/* node_modules/parsleyjs/src/i18n/it.extra.js */
class __TwigTemplate_9ff0984b1b52f4f250eb00ae4eb462ef7e0704f21d0ad420732b8b8491a5d3eb extends Twig_Template
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
        $__internal_054a039ff366e78123b1c94b0d4f8649a1cf29243a6b1ba37ea1bfe7b75ee616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054a039ff366e78123b1c94b0d4f8649a1cf29243a6b1ba37ea1bfe7b75ee616->enter($__internal_054a039ff366e78123b1c94b0d4f8649a1cf29243a6b1ba37ea1bfe7b75ee616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/it.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('it', {
  dateiso: \"Inserire una data valida (AAAA-MM-GG).\"
});
";
        
        $__internal_054a039ff366e78123b1c94b0d4f8649a1cf29243a6b1ba37ea1bfe7b75ee616->leave($__internal_054a039ff366e78123b1c94b0d4f8649a1cf29243a6b1ba37ea1bfe7b75ee616_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/it.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('it', {
  dateiso: \"Inserire una data valida (AAAA-MM-GG).\"
});
", "node_modules/parsleyjs/src/i18n/it.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/it.extra.js");
    }
}
