<?php

/* node_modules/es5-ext/array/#/keys/is-implemented.js */
class __TwigTemplate_b94260471983968f0da3ab7d2f189a208befbf020bb41b56653a3b39a5667d84 extends Twig_Template
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
        $__internal_26e1eb54c66542128feabe254bbe8eb05381c5c9a5d4c971507ae1f151c08bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e1eb54c66542128feabe254bbe8eb05381c5c9a5d4c971507ae1f151c08bfb->enter($__internal_26e1eb54c66542128feabe254bbe8eb05381c5c9a5d4c971507ae1f151c08bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/keys/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar arr = [1, \"foo\"], iterator, result;
\tif (typeof arr.keys !== \"function\") return false;
\titerator = arr.keys();
\tif (!iterator) return false;
\tif (typeof iterator.next !== \"function\") return false;
\tresult = iterator.next();
\tif (!result) return false;
\tif (result.value !== 0) return false;
\tif (result.done !== false) return false;
\treturn true;
};
";
        
        $__internal_26e1eb54c66542128feabe254bbe8eb05381c5c9a5d4c971507ae1f151c08bfb->leave($__internal_26e1eb54c66542128feabe254bbe8eb05381c5c9a5d4c971507ae1f151c08bfb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/keys/is-implemented.js";
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
\tif (typeof arr.keys !== \"function\") return false;
\titerator = arr.keys();
\tif (!iterator) return false;
\tif (typeof iterator.next !== \"function\") return false;
\tresult = iterator.next();
\tif (!result) return false;
\tif (result.value !== 0) return false;
\tif (result.done !== false) return false;
\treturn true;
};
", "node_modules/es5-ext/array/#/keys/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/keys/is-implemented.js");
    }
}
