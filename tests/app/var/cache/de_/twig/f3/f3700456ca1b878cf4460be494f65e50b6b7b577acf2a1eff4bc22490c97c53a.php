<?php

/* node_modules/es5-ext/object/assign/shim.js */
class __TwigTemplate_2a4bccebf29f55678a9eeafe91d4cb982d8c6c27e64d7a958319638a331e49de extends Twig_Template
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
        $__internal_08be95bc27f8b15ad049bfca27ad3458d3ae714594047b2c1666f9f7d3610715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08be95bc27f8b15ad049bfca27ad3458d3ae714594047b2c1666f9f7d3610715->enter($__internal_08be95bc27f8b15ad049bfca27ad3458d3ae714594047b2c1666f9f7d3610715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/assign/shim.js"));

        // line 1
        echo "\"use strict\";

var keys  = require(\"../keys\")
  , value = require(\"../valid-value\")
  , max   = Math.max;

module.exports = function (dest, src /*, …srcn*/) {
\tvar error, i, length = max(arguments.length, 2), assign;
\tdest = Object(value(dest));
\tassign = function (key) {
\t\ttry {
\t\t\tdest[key] = src[key];
\t\t} catch (e) {
\t\t\tif (!error) error = e;
\t\t}
\t};
\tfor (i = 1; i < length; ++i) {
\t\tsrc = arguments[i];
\t\tkeys(src).forEach(assign);
\t}
\tif (error !== undefined) throw error;
\treturn dest;
};
";
        
        $__internal_08be95bc27f8b15ad049bfca27ad3458d3ae714594047b2c1666f9f7d3610715->leave($__internal_08be95bc27f8b15ad049bfca27ad3458d3ae714594047b2c1666f9f7d3610715_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/assign/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var keys  = require(\"../keys\")
  , value = require(\"../valid-value\")
  , max   = Math.max;

module.exports = function (dest, src /*, …srcn*/) {
\tvar error, i, length = max(arguments.length, 2), assign;
\tdest = Object(value(dest));
\tassign = function (key) {
\t\ttry {
\t\t\tdest[key] = src[key];
\t\t} catch (e) {
\t\t\tif (!error) error = e;
\t\t}
\t};
\tfor (i = 1; i < length; ++i) {
\t\tsrc = arguments[i];
\t\tkeys(src).forEach(assign);
\t}
\tif (error !== undefined) throw error;
\treturn dest;
};
", "node_modules/es5-ext/object/assign/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/assign/shim.js");
    }
}
