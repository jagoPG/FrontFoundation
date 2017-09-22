<?php

/* node_modules/es5-ext/array/#/fill/is-implemented.js */
class __TwigTemplate_518aae9a9fc3e10a827e10a259764affff3bacc5b47958d27b6dd7de4131875e extends Twig_Template
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
        $__internal_02602685c937fea6d4927a3387c575682c3984838575ab9ad4b98dbce5725c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02602685c937fea6d4927a3387c575682c3984838575ab9ad4b98dbce5725c6f->enter($__internal_02602685c937fea6d4927a3387c575682c3984838575ab9ad4b98dbce5725c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/fill/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar arr = [1, 2, 3, 4, 5, 6];
\tif (typeof arr.fill !== \"function\") return false;
\treturn String(arr.fill(-1, -3)) === \"1,2,3,-1,-1,-1\";
};
";
        
        $__internal_02602685c937fea6d4927a3387c575682c3984838575ab9ad4b98dbce5725c6f->leave($__internal_02602685c937fea6d4927a3387c575682c3984838575ab9ad4b98dbce5725c6f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/fill/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar arr = [1, 2, 3, 4, 5, 6];
\tif (typeof arr.fill !== \"function\") return false;
\treturn String(arr.fill(-1, -3)) === \"1,2,3,-1,-1,-1\";
};
", "node_modules/es5-ext/array/#/fill/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/fill/is-implemented.js");
    }
}
