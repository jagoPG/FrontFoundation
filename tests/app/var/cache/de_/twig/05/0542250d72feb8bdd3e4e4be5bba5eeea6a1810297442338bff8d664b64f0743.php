<?php

/* node_modules/es5-ext/array/#/uniq.js */
class __TwigTemplate_6d022bdeae90135bfe944a0f2c0b78b41bac4698df63b77a2233abf390b5f531 extends Twig_Template
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
        $__internal_a3fae1dd2924db17d10643ed58527390bded9f7ca594647ae5be4ccd4f69ec38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3fae1dd2924db17d10643ed58527390bded9f7ca594647ae5be4ccd4f69ec38->enter($__internal_a3fae1dd2924db17d10643ed58527390bded9f7ca594647ae5be4ccd4f69ec38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/uniq.js"));

        // line 1
        echo "\"use strict\";

var indexOf = require(\"./e-index-of\")

  , filter = Array.prototype.filter

  , isFirst;

isFirst = function (value, index) {
\treturn indexOf.call(this, value) === index;
};

module.exports = function () {
 return filter.call(this, isFirst, this);
};
";
        
        $__internal_a3fae1dd2924db17d10643ed58527390bded9f7ca594647ae5be4ccd4f69ec38->leave($__internal_a3fae1dd2924db17d10643ed58527390bded9f7ca594647ae5be4ccd4f69ec38_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/uniq.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var indexOf = require(\"./e-index-of\")

  , filter = Array.prototype.filter

  , isFirst;

isFirst = function (value, index) {
\treturn indexOf.call(this, value) === index;
};

module.exports = function () {
 return filter.call(this, isFirst, this);
};
", "node_modules/es5-ext/array/#/uniq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/uniq.js");
    }
}
