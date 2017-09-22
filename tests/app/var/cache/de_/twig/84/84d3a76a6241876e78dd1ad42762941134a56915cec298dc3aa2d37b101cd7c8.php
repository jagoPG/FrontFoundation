<?php

/* node_modules/es5-ext/string/from-code-point/is-implemented.js */
class __TwigTemplate_3259a002557ffba41ffe9b8c6636d6c65c179f18f50d614845f3a5463525f92d extends Twig_Template
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
        $__internal_cdfb0fce38602f3f29d113234a9cb3032729b4a9a49e3cbca002085cf762ab51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdfb0fce38602f3f29d113234a9cb3032729b4a9a49e3cbca002085cf762ab51->enter($__internal_cdfb0fce38602f3f29d113234a9cb3032729b4a9a49e3cbca002085cf762ab51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/from-code-point/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar fromCodePoint = String.fromCodePoint;
\tif (typeof fromCodePoint !== \"function\") return false;
\treturn fromCodePoint(0x1D306, 0x61, 0x1D307) === \"\\ud834\\udf06a\\ud834\\udf07\";
};
";
        
        $__internal_cdfb0fce38602f3f29d113234a9cb3032729b4a9a49e3cbca002085cf762ab51->leave($__internal_cdfb0fce38602f3f29d113234a9cb3032729b4a9a49e3cbca002085cf762ab51_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/from-code-point/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar fromCodePoint = String.fromCodePoint;
\tif (typeof fromCodePoint !== \"function\") return false;
\treturn fromCodePoint(0x1D306, 0x61, 0x1D307) === \"\\ud834\\udf06a\\ud834\\udf07\";
};
", "node_modules/es5-ext/string/from-code-point/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/from-code-point/is-implemented.js");
    }
}
