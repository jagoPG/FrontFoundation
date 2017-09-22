<?php

/* node_modules/es5-ext/math/imul/is-implemented.js */
class __TwigTemplate_33b99b2026b21c0604f0995edbf7321f8d1177fff689137e626f66a9011cf106 extends Twig_Template
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
        $__internal_85170a6c455a338a73cd7f69bb16fb8a0a91d29b04e526cd961bbea352b7b38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85170a6c455a338a73cd7f69bb16fb8a0a91d29b04e526cd961bbea352b7b38e->enter($__internal_85170a6c455a338a73cd7f69bb16fb8a0a91d29b04e526cd961bbea352b7b38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/imul/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar imul = Math.imul;
\tif (typeof imul !== \"function\") return false;
\treturn imul(-1, 8) === -8;
};
";
        
        $__internal_85170a6c455a338a73cd7f69bb16fb8a0a91d29b04e526cd961bbea352b7b38e->leave($__internal_85170a6c455a338a73cd7f69bb16fb8a0a91d29b04e526cd961bbea352b7b38e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/imul/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar imul = Math.imul;
\tif (typeof imul !== \"function\") return false;
\treturn imul(-1, 8) === -8;
};
", "node_modules/es5-ext/math/imul/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/imul/is-implemented.js");
    }
}
