<?php

/* node_modules/es6-weak-map/test/polyfill.js */
class __TwigTemplate_e1e38b6e2ae1fddddd8276e53ce1abc2fb53f1e2f4c138949be9750a0268cbca extends Twig_Template
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
        $__internal_98c12c13437820df96181fef10902e94c0c0685211e9594c11c67022f461e867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c12c13437820df96181fef10902e94c0c0685211e9594c11c67022f461e867->enter($__internal_98c12c13437820df96181fef10902e94c0c0685211e9594c11c67022f461e867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-weak-map/test/polyfill.js"));

        // line 1
        echo "'use strict';

module.exports = function (T, a) {
\tvar x = {}, y = {}, z = {}, arr = [[x, 'raz'], [y, 'dwa']], map = new T(arr);

\ta(map instanceof T, true, \"WeakMap\");
\ta(map.has(x), true, \"Has: true\");
\ta(map.get(x), 'raz', \"Get: contains\");
\ta(map.has(z), false, \"Has: false\");
\ta(map.get(z), undefined, \"Get: doesn't contain\");
\ta(map.set(z, 'trzy'), map, \"Set: return\");
\ta(map.has(z), true, \"Add\");
\ta(map.delete({}), false, \"Delete: false\");

\ta(map.delete(x), true, \"Delete: true\");
\ta(map.get(x), undefined, \"Get: after delete\");
\ta(map.has(x), false, \"Has: after delete\");

\ta.h1(\"Empty initialization\");
\tmap = new T();
\tmap.set(x, 'bar');
\ta(map.get(x), 'bar');
};
";
        
        $__internal_98c12c13437820df96181fef10902e94c0c0685211e9594c11c67022f461e867->leave($__internal_98c12c13437820df96181fef10902e94c0c0685211e9594c11c67022f461e867_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-weak-map/test/polyfill.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function (T, a) {
\tvar x = {}, y = {}, z = {}, arr = [[x, 'raz'], [y, 'dwa']], map = new T(arr);

\ta(map instanceof T, true, \"WeakMap\");
\ta(map.has(x), true, \"Has: true\");
\ta(map.get(x), 'raz', \"Get: contains\");
\ta(map.has(z), false, \"Has: false\");
\ta(map.get(z), undefined, \"Get: doesn't contain\");
\ta(map.set(z, 'trzy'), map, \"Set: return\");
\ta(map.has(z), true, \"Add\");
\ta(map.delete({}), false, \"Delete: false\");

\ta(map.delete(x), true, \"Delete: true\");
\ta(map.get(x), undefined, \"Get: after delete\");
\ta(map.has(x), false, \"Has: after delete\");

\ta.h1(\"Empty initialization\");
\tmap = new T();
\tmap.set(x, 'bar');
\ta(map.get(x), 'bar');
};
", "node_modules/es6-weak-map/test/polyfill.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-weak-map/test/polyfill.js");
    }
}
