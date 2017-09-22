<?php

/* node_modules/es5-ext/object/clear.js */
class __TwigTemplate_f6407fbffc13ba3bf85c0528b5cf9b3b931f15b3c906c945ac818789f2660542 extends Twig_Template
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
        $__internal_8cfb624b3c7ed6f3d42d1a16e08ff9e95c78bd137d21cbd73982e4f7be282edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cfb624b3c7ed6f3d42d1a16e08ff9e95c78bd137d21cbd73982e4f7be282edd->enter($__internal_8cfb624b3c7ed6f3d42d1a16e08ff9e95c78bd137d21cbd73982e4f7be282edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/clear.js"));

        // line 1
        echo "\"use strict\";

var keys = require(\"./keys\");

module.exports = function (obj) {
\tvar error;
\tkeys(obj).forEach(function (key) {
\t\ttry {
\t\t\tdelete this[key];
\t\t} catch (e) {
\t\t\tif (!error) error = e;
\t\t}
\t}, obj);
\tif (error !== undefined) throw error;
\treturn obj;
};
";
        
        $__internal_8cfb624b3c7ed6f3d42d1a16e08ff9e95c78bd137d21cbd73982e4f7be282edd->leave($__internal_8cfb624b3c7ed6f3d42d1a16e08ff9e95c78bd137d21cbd73982e4f7be282edd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/clear.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var keys = require(\"./keys\");

module.exports = function (obj) {
\tvar error;
\tkeys(obj).forEach(function (key) {
\t\ttry {
\t\t\tdelete this[key];
\t\t} catch (e) {
\t\t\tif (!error) error = e;
\t\t}
\t}, obj);
\tif (error !== undefined) throw error;
\treturn obj;
};
", "node_modules/es5-ext/object/clear.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/clear.js");
    }
}
