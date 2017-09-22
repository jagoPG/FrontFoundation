<?php

/* node_modules/es5-ext/safe-to-string.js */
class __TwigTemplate_d5ab96ec3828e429f3f8d81bd5e6db00c274e8e241b2785cba4050f366e5a6fb extends Twig_Template
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
        $__internal_bc0698ed23a636588126250cdb4cb78030ce9adb2892ca6399a36d3b6b2fb2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0698ed23a636588126250cdb4cb78030ce9adb2892ca6399a36d3b6b2fb2d8->enter($__internal_bc0698ed23a636588126250cdb4cb78030ce9adb2892ca6399a36d3b6b2fb2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/safe-to-string.js"));

        // line 1
        echo "\"use strict\";

var isCallable = require(\"./object/is-callable\");

module.exports = function (value) {
\ttry {
\t\tif (value && isCallable(value.toString)) return value.toString();
\t\treturn String(value);
\t} catch (e) {
\t\treturn \"<non-stringifiable value>\";
\t}
};
";
        
        $__internal_bc0698ed23a636588126250cdb4cb78030ce9adb2892ca6399a36d3b6b2fb2d8->leave($__internal_bc0698ed23a636588126250cdb4cb78030ce9adb2892ca6399a36d3b6b2fb2d8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/safe-to-string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isCallable = require(\"./object/is-callable\");

module.exports = function (value) {
\ttry {
\t\tif (value && isCallable(value.toString)) return value.toString();
\t\treturn String(value);
\t} catch (e) {
\t\treturn \"<non-stringifiable value>\";
\t}
};
", "node_modules/es5-ext/safe-to-string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/safe-to-string.js");
    }
}
