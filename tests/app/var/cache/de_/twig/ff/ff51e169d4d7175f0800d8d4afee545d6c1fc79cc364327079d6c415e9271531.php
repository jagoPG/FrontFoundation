<?php

/* node_modules/loader-utils/lib/parseString.js */
class __TwigTemplate_b90e672df5512de646c9aad849f0f61a46cfb8071ed314144cde9db110efe192 extends Twig_Template
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
        $__internal_398eedb546663564c9e29ca5e06ce21cd625fcf1cedb50fb6d084738c605d54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398eedb546663564c9e29ca5e06ce21cd625fcf1cedb50fb6d084738c605d54a->enter($__internal_398eedb546663564c9e29ca5e06ce21cd625fcf1cedb50fb6d084738c605d54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loader-utils/lib/parseString.js"));

        // line 1
        echo "\"use strict\";

function parseString(str) {
\ttry {
\t\tif(str[0] === \"\\\"\") return JSON.parse(str);
\t\tif(str[0] === \"'\" && str.substr(str.length - 1) === \"'\") {
\t\t\treturn parseString(
\t\t\t\tstr
\t\t\t\t\t.replace(/\\\\.|\"/g, x => x === \"\\\"\" ? \"\\\\\\\"\" : x)
\t\t\t\t\t.replace(/^'|'\$/g, \"\\\"\")
\t\t\t);
\t\t}
\t\treturn JSON.parse(\"\\\"\" + str + \"\\\"\");
\t} catch(e) {
\t\treturn str;
\t}
}

module.exports = parseString;
";
        
        $__internal_398eedb546663564c9e29ca5e06ce21cd625fcf1cedb50fb6d084738c605d54a->leave($__internal_398eedb546663564c9e29ca5e06ce21cd625fcf1cedb50fb6d084738c605d54a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loader-utils/lib/parseString.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

function parseString(str) {
\ttry {
\t\tif(str[0] === \"\\\"\") return JSON.parse(str);
\t\tif(str[0] === \"'\" && str.substr(str.length - 1) === \"'\") {
\t\t\treturn parseString(
\t\t\t\tstr
\t\t\t\t\t.replace(/\\\\.|\"/g, x => x === \"\\\"\" ? \"\\\\\\\"\" : x)
\t\t\t\t\t.replace(/^'|'\$/g, \"\\\"\")
\t\t\t);
\t\t}
\t\treturn JSON.parse(\"\\\"\" + str + \"\\\"\");
\t} catch(e) {
\t\treturn str;
\t}
}

module.exports = parseString;
", "node_modules/loader-utils/lib/parseString.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loader-utils/lib/parseString.js");
    }
}
