<?php

/* node_modules/async/internal/slice.js */
class __TwigTemplate_bd01ab7e84e828c3974c01e721ed1e3e655e1ee1aa85b66c544599404a68f049 extends Twig_Template
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
        $__internal_bec3ceaa99bc79e7587d8dee16f025518893baee897ad3f3bb30dacc28733f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec3ceaa99bc79e7587d8dee16f025518893baee897ad3f3bb30dacc28733f35->enter($__internal_bec3ceaa99bc79e7587d8dee16f025518893baee897ad3f3bb30dacc28733f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/internal/slice.js"));

        // line 1
        echo "\"use strict\";

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = slice;
function slice(arrayLike, start) {
    start = start | 0;
    var newLen = Math.max(arrayLike.length - start, 0);
    var newArr = Array(newLen);
    for (var idx = 0; idx < newLen; idx++) {
        newArr[idx] = arrayLike[start + idx];
    }
    return newArr;
}
module.exports = exports[\"default\"];";
        
        $__internal_bec3ceaa99bc79e7587d8dee16f025518893baee897ad3f3bb30dacc28733f35->leave($__internal_bec3ceaa99bc79e7587d8dee16f025518893baee897ad3f3bb30dacc28733f35_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/internal/slice.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = slice;
function slice(arrayLike, start) {
    start = start | 0;
    var newLen = Math.max(arrayLike.length - start, 0);
    var newArr = Array(newLen);
    for (var idx = 0; idx < newLen; idx++) {
        newArr[idx] = arrayLike[start + idx];
    }
    return newArr;
}
module.exports = exports[\"default\"];", "node_modules/async/internal/slice.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/internal/slice.js");
    }
}
