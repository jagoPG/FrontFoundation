<?php

/* node_modules/es5-ext/array/#/copy-within/is-implemented.js */
class __TwigTemplate_86783bcf94e554b2eb9ae63c2a3666637eb9a4fef0c91328825cae530153df30 extends Twig_Template
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
        $__internal_6881fa389309daa45c2d2008cd0918d9f156c26c174e730362a0501b8a8e47ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6881fa389309daa45c2d2008cd0918d9f156c26c174e730362a0501b8a8e47ab->enter($__internal_6881fa389309daa45c2d2008cd0918d9f156c26c174e730362a0501b8a8e47ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/copy-within/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar arr = [1, 2, 3, 4, 5];
\tif (typeof arr.copyWithin !== \"function\") return false;
\treturn String(arr.copyWithin(1, 3)) === \"1,4,5,4,5\";
};
";
        
        $__internal_6881fa389309daa45c2d2008cd0918d9f156c26c174e730362a0501b8a8e47ab->leave($__internal_6881fa389309daa45c2d2008cd0918d9f156c26c174e730362a0501b8a8e47ab_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/copy-within/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar arr = [1, 2, 3, 4, 5];
\tif (typeof arr.copyWithin !== \"function\") return false;
\treturn String(arr.copyWithin(1, 3)) === \"1,4,5,4,5\";
};
", "node_modules/es5-ext/array/#/copy-within/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/copy-within/is-implemented.js");
    }
}
