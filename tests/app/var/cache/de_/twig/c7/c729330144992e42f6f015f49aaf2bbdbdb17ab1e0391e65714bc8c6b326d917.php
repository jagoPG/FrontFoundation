<?php

/* node_modules/es5-ext/array/#/remove.js */
class __TwigTemplate_b12c5339943ded1f26d14f524def214d71de65e1adaf5c1279788502dfe1fd1f extends Twig_Template
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
        $__internal_7250a4c69e2fea7709031424c2f708b4d3c22bfbe405a9e0f475fd4de741095c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7250a4c69e2fea7709031424c2f708b4d3c22bfbe405a9e0f475fd4de741095c->enter($__internal_7250a4c69e2fea7709031424c2f708b4d3c22bfbe405a9e0f475fd4de741095c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/remove.js"));

        // line 1
        echo "\"use strict\";

var indexOf = require(\"./e-index-of\")
  , forEach = Array.prototype.forEach
  , splice  = Array.prototype.splice;

// eslint-disable-next-line no-unused-vars
module.exports = function (itemToRemove /*, …item*/) {
\tforEach.call(
\t\targuments,
\t\tfunction (item) {
\t\t\tvar index = indexOf.call(this, item);
\t\t\tif (index !== -1) splice.call(this, index, 1);
\t\t},
\t\tthis
\t);
};
";
        
        $__internal_7250a4c69e2fea7709031424c2f708b4d3c22bfbe405a9e0f475fd4de741095c->leave($__internal_7250a4c69e2fea7709031424c2f708b4d3c22bfbe405a9e0f475fd4de741095c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/remove.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var indexOf = require(\"./e-index-of\")
  , forEach = Array.prototype.forEach
  , splice  = Array.prototype.splice;

// eslint-disable-next-line no-unused-vars
module.exports = function (itemToRemove /*, …item*/) {
\tforEach.call(
\t\targuments,
\t\tfunction (item) {
\t\t\tvar index = indexOf.call(this, item);
\t\t\tif (index !== -1) splice.call(this, index, 1);
\t\t},
\t\tthis
\t);
};
", "node_modules/es5-ext/array/#/remove.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/remove.js");
    }
}
