<?php

/* node_modules/es5-ext/array/#/contains.js */
class __TwigTemplate_e29959ed4af8bcc2f3c3331f46569616facbf5c6f597dffda236b8e65c7d7a98 extends Twig_Template
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
        $__internal_56bf814ad43a0331767820f14437f19614e85f99b7db0a46bd9d5420052d044a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56bf814ad43a0331767820f14437f19614e85f99b7db0a46bd9d5420052d044a->enter($__internal_56bf814ad43a0331767820f14437f19614e85f99b7db0a46bd9d5420052d044a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/contains.js"));

        // line 1
        echo "\"use strict\";

var indexOf = require(\"./e-index-of\");

module.exports = function (searchElement/*, position*/) {
\treturn indexOf.call(this, searchElement, arguments[1]) > -1;
};
";
        
        $__internal_56bf814ad43a0331767820f14437f19614e85f99b7db0a46bd9d5420052d044a->leave($__internal_56bf814ad43a0331767820f14437f19614e85f99b7db0a46bd9d5420052d044a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/contains.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var indexOf = require(\"./e-index-of\");

module.exports = function (searchElement/*, position*/) {
\treturn indexOf.call(this, searchElement, arguments[1]) > -1;
};
", "node_modules/es5-ext/array/#/contains.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/contains.js");
    }
}
