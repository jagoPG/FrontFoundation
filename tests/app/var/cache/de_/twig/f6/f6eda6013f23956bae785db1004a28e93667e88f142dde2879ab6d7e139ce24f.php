<?php

/* node_modules/es-abstract/helpers/assign.js */
class __TwigTemplate_c9e7f3cdd90eafa7e7c86692ce364bcb4ecc8a8d220b382866dbcb70d93b7668 extends Twig_Template
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
        $__internal_6d93204a351fe8f04fad9454d94c98ce7df999c4c7343b44ba079089fe9d8def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d93204a351fe8f04fad9454d94c98ce7df999c4c7343b44ba079089fe9d8def->enter($__internal_6d93204a351fe8f04fad9454d94c98ce7df999c4c7343b44ba079089fe9d8def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/helpers/assign.js"));

        // line 1
        echo "var has = Object.prototype.hasOwnProperty;
module.exports = function assign(target, source) {
\tif (Object.assign) {
\t\treturn Object.assign(target, source);
\t}
\tfor (var key in source) {
\t\tif (has.call(source, key)) {
\t\t\ttarget[key] = source[key];
\t\t}
\t}
\treturn target;
};
";
        
        $__internal_6d93204a351fe8f04fad9454d94c98ce7df999c4c7343b44ba079089fe9d8def->leave($__internal_6d93204a351fe8f04fad9454d94c98ce7df999c4c7343b44ba079089fe9d8def_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/helpers/assign.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var has = Object.prototype.hasOwnProperty;
module.exports = function assign(target, source) {
\tif (Object.assign) {
\t\treturn Object.assign(target, source);
\t}
\tfor (var key in source) {
\t\tif (has.call(source, key)) {
\t\t\ttarget[key] = source[key];
\t\t}
\t}
\treturn target;
};
", "node_modules/es-abstract/helpers/assign.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/helpers/assign.js");
    }
}
