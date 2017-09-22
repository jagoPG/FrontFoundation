<?php

/* node_modules/es5-ext/array/#/values/is-implemented.js */
class __TwigTemplate_b2cdd9aa29bdb1cb0bb49c8cc13bb932ad91be9999634a176208dedcd7b88bc2 extends Twig_Template
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
        $__internal_5bf612f96934df8f05dcdae916572ba82bb04bc9064272e6ac87d408a2142fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf612f96934df8f05dcdae916572ba82bb04bc9064272e6ac87d408a2142fcd->enter($__internal_5bf612f96934df8f05dcdae916572ba82bb04bc9064272e6ac87d408a2142fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/values/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar arr = [\"foo\", 1], iterator, result;
\tif (typeof arr.values !== \"function\") return false;
\titerator = arr.values();
\tif (!iterator) return false;
\tif (typeof iterator.next !== \"function\") return false;
\tresult = iterator.next();
\tif (!result) return false;
\tif (result.value !== \"foo\") return false;
\tif (result.done !== false) return false;
\treturn true;
};
";
        
        $__internal_5bf612f96934df8f05dcdae916572ba82bb04bc9064272e6ac87d408a2142fcd->leave($__internal_5bf612f96934df8f05dcdae916572ba82bb04bc9064272e6ac87d408a2142fcd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/values/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar arr = [\"foo\", 1], iterator, result;
\tif (typeof arr.values !== \"function\") return false;
\titerator = arr.values();
\tif (!iterator) return false;
\tif (typeof iterator.next !== \"function\") return false;
\tresult = iterator.next();
\tif (!result) return false;
\tif (result.value !== \"foo\") return false;
\tif (result.done !== false) return false;
\treturn true;
};
", "node_modules/es5-ext/array/#/values/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/values/is-implemented.js");
    }
}
