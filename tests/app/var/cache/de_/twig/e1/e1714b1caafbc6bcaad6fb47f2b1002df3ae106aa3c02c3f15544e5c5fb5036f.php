<?php

/* node_modules/es5-ext/object/validate-stringifiable.js */
class __TwigTemplate_9e1129004e6e3d46dd8ee185ac355bc055ac2365b32eea2b03266d0e068b1445 extends Twig_Template
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
        $__internal_772a687b265687882da70516b094c8fc6df8c328a30458476ffe319daf2a5f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772a687b265687882da70516b094c8fc6df8c328a30458476ffe319daf2a5f76->enter($__internal_772a687b265687882da70516b094c8fc6df8c328a30458476ffe319daf2a5f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/validate-stringifiable.js"));

        // line 1
        echo "\"use strict\";

var isCallable = require(\"./is-callable\");

module.exports = function (stringifiable) {
\ttry {
\t\tif (stringifiable && isCallable(stringifiable.toString)) return stringifiable.toString();
\t\treturn String(stringifiable);
\t} catch (e) {
\t\tthrow new TypeError(\"Passed argument cannot be stringifed\");
\t}
};
";
        
        $__internal_772a687b265687882da70516b094c8fc6df8c328a30458476ffe319daf2a5f76->leave($__internal_772a687b265687882da70516b094c8fc6df8c328a30458476ffe319daf2a5f76_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/validate-stringifiable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isCallable = require(\"./is-callable\");

module.exports = function (stringifiable) {
\ttry {
\t\tif (stringifiable && isCallable(stringifiable.toString)) return stringifiable.toString();
\t\treturn String(stringifiable);
\t} catch (e) {
\t\tthrow new TypeError(\"Passed argument cannot be stringifed\");
\t}
};
", "node_modules/es5-ext/object/validate-stringifiable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/validate-stringifiable.js");
    }
}
