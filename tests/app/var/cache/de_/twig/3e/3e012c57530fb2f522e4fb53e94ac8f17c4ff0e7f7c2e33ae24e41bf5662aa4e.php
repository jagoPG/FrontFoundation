<?php

/* node_modules/es6-weak-map/is-implemented.js */
class __TwigTemplate_82ded91389185eecf1a7cfd00c2e1b6c535ff91c4bdcd818c2a2ed85facd783a extends Twig_Template
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
        $__internal_2281d773bcf5d965daa081dcdff65fcc18fdceb13428f3ca2312dba9ba576653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2281d773bcf5d965daa081dcdff65fcc18fdceb13428f3ca2312dba9ba576653->enter($__internal_2281d773bcf5d965daa081dcdff65fcc18fdceb13428f3ca2312dba9ba576653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-weak-map/is-implemented.js"));

        // line 1
        echo "'use strict';

module.exports = function () {
\tvar weakMap, x;
\tif (typeof WeakMap !== 'function') return false;
\ttry {
\t\t// WebKit doesn't support arguments and crashes
\t\tweakMap = new WeakMap([[x = {}, 'one'], [{}, 'two'], [{}, 'three']]);
\t} catch (e) {
\t\treturn false;
\t}
\tif (String(weakMap) !== '[object WeakMap]') return false;
\tif (typeof weakMap.set !== 'function') return false;
\tif (weakMap.set({}, 1) !== weakMap) return false;
\tif (typeof weakMap.delete !== 'function') return false;
\tif (typeof weakMap.has !== 'function') return false;
\tif (weakMap.get(x) !== 'one') return false;

\treturn true;
};
";
        
        $__internal_2281d773bcf5d965daa081dcdff65fcc18fdceb13428f3ca2312dba9ba576653->leave($__internal_2281d773bcf5d965daa081dcdff65fcc18fdceb13428f3ca2312dba9ba576653_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-weak-map/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function () {
\tvar weakMap, x;
\tif (typeof WeakMap !== 'function') return false;
\ttry {
\t\t// WebKit doesn't support arguments and crashes
\t\tweakMap = new WeakMap([[x = {}, 'one'], [{}, 'two'], [{}, 'three']]);
\t} catch (e) {
\t\treturn false;
\t}
\tif (String(weakMap) !== '[object WeakMap]') return false;
\tif (typeof weakMap.set !== 'function') return false;
\tif (weakMap.set({}, 1) !== weakMap) return false;
\tif (typeof weakMap.delete !== 'function') return false;
\tif (typeof weakMap.has !== 'function') return false;
\tif (weakMap.get(x) !== 'one') return false;

\treturn true;
};
", "node_modules/es6-weak-map/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-weak-map/is-implemented.js");
    }
}
