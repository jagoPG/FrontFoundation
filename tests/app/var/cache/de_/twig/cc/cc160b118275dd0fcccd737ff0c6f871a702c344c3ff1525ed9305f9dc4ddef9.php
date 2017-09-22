<?php

/* node_modules/es5-ext/array/#/@@iterator/is-implemented.js */
class __TwigTemplate_942e1f3803fba0b0df10c856c4ddd705b404c8e44bff6cd465eda21c44f7f1fb extends Twig_Template
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
        $__internal_02942bf8f6d07b4dda567c34dec935d1e50e229cd8f659e3190da1162c0aaea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02942bf8f6d07b4dda567c34dec935d1e50e229cd8f659e3190da1162c0aaea2->enter($__internal_02942bf8f6d07b4dda567c34dec935d1e50e229cd8f659e3190da1162c0aaea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/@@iterator/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var iteratorSymbol = require(\"es6-symbol\").iterator;

module.exports = function () {
\tvar arr = [\"foo\", 1], iterator, result;
\tif (typeof arr[iteratorSymbol] !== \"function\") return false;
\titerator = arr[iteratorSymbol]();
\tif (!iterator) return false;
\tif (typeof iterator.next !== \"function\") return false;
\tresult = iterator.next();
\tif (!result) return false;
\tif (result.value !== \"foo\") return false;
\tif (result.done !== false) return false;
\treturn true;
};
";
        
        $__internal_02942bf8f6d07b4dda567c34dec935d1e50e229cd8f659e3190da1162c0aaea2->leave($__internal_02942bf8f6d07b4dda567c34dec935d1e50e229cd8f659e3190da1162c0aaea2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/@@iterator/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var iteratorSymbol = require(\"es6-symbol\").iterator;

module.exports = function () {
\tvar arr = [\"foo\", 1], iterator, result;
\tif (typeof arr[iteratorSymbol] !== \"function\") return false;
\titerator = arr[iteratorSymbol]();
\tif (!iterator) return false;
\tif (typeof iterator.next !== \"function\") return false;
\tresult = iterator.next();
\tif (!result) return false;
\tif (result.value !== \"foo\") return false;
\tif (result.done !== false) return false;
\treturn true;
};
", "node_modules/es5-ext/array/#/@@iterator/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/@@iterator/is-implemented.js");
    }
}
