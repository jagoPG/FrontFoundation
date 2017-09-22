<?php

/* node_modules/es5-ext/array/#/entries/is-implemented.js */
class __TwigTemplate_839b867027eafd75b7dac2fca95241cb492961e107b40ffb058b7ec7f43410e5 extends Twig_Template
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
        $__internal_0123959553d154069213a7e9264628d4885b32af952871fe713f467afcb4a2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0123959553d154069213a7e9264628d4885b32af952871fe713f467afcb4a2d0->enter($__internal_0123959553d154069213a7e9264628d4885b32af952871fe713f467afcb4a2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/entries/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar arr = [1, \"foo\"], iterator, result;
\tif (typeof arr.entries !== \"function\") return false;
\titerator = arr.entries();
\tif (!iterator) return false;
\tif (typeof iterator.next !== \"function\") return false;
\tresult = iterator.next();
\tif (!result || !result.value) return false;
\tif (result.value[0] !== 0) return false;
\tif (result.value[1] !== 1) return false;
\tif (result.done !== false) return false;
\treturn true;
};
";
        
        $__internal_0123959553d154069213a7e9264628d4885b32af952871fe713f467afcb4a2d0->leave($__internal_0123959553d154069213a7e9264628d4885b32af952871fe713f467afcb4a2d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/entries/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar arr = [1, \"foo\"], iterator, result;
\tif (typeof arr.entries !== \"function\") return false;
\titerator = arr.entries();
\tif (!iterator) return false;
\tif (typeof iterator.next !== \"function\") return false;
\tresult = iterator.next();
\tif (!result || !result.value) return false;
\tif (result.value[0] !== 0) return false;
\tif (result.value[1] !== 1) return false;
\tif (result.done !== false) return false;
\treturn true;
};
", "node_modules/es5-ext/array/#/entries/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/entries/is-implemented.js");
    }
}
