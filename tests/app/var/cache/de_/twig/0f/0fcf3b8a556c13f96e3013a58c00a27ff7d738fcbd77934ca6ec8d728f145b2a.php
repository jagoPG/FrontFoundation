<?php

/* node_modules/core-js/modules/es7.weak-set.from.js */
class __TwigTemplate_8e9e67a26aacdd666119aab77f234e73bdc96060f3ef5d7d26b0c781502f171e extends Twig_Template
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
        $__internal_ed0d566d1910ae84ad0f4395818102091736834ae6753891cd469087b9cfb5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0d566d1910ae84ad0f4395818102091736834ae6753891cd469087b9cfb5b1->enter($__internal_ed0d566d1910ae84ad0f4395818102091736834ae6753891cd469087b9cfb5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.weak-set.from.js"));

        // line 1
        echo "// https://tc39.github.io/proposal-setmap-offrom/#sec-weakset.from
require('./_set-collection-from')('WeakSet');
";
        
        $__internal_ed0d566d1910ae84ad0f4395818102091736834ae6753891cd469087b9cfb5b1->leave($__internal_ed0d566d1910ae84ad0f4395818102091736834ae6753891cd469087b9cfb5b1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.weak-set.from.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://tc39.github.io/proposal-setmap-offrom/#sec-weakset.from
require('./_set-collection-from')('WeakSet');
", "node_modules/core-js/modules/es7.weak-set.from.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.weak-set.from.js");
    }
}
