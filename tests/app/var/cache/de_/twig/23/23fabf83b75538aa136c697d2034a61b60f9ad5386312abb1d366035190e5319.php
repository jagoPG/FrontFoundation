<?php

/* node_modules/parsleyjs/src/i18n/id.extra.js */
class __TwigTemplate_9024e81738464d8b87019edacc2c3afd6f3a2accf2d02d9d6f875b66954783a4 extends Twig_Template
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
        $__internal_143a89f6e7860d92bb9b1681238d79e9856225a032752a52a1c935a05cfa8e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143a89f6e7860d92bb9b1681238d79e9856225a032752a52a1c935a05cfa8e94->enter($__internal_143a89f6e7860d92bb9b1681238d79e9856225a032752a52a1c935a05cfa8e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/id.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('id', {
  dateiso: \"Harus tanggal yang valid (YYYY-MM-DD).\"
});
";
        
        $__internal_143a89f6e7860d92bb9b1681238d79e9856225a032752a52a1c935a05cfa8e94->leave($__internal_143a89f6e7860d92bb9b1681238d79e9856225a032752a52a1c935a05cfa8e94_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/id.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('id', {
  dateiso: \"Harus tanggal yang valid (YYYY-MM-DD).\"
});
", "node_modules/parsleyjs/src/i18n/id.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/id.extra.js");
    }
}
