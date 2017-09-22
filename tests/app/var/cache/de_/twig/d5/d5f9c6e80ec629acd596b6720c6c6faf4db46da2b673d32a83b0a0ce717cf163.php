<?php

/* node_modules/es6-map/is-implemented.js */
class __TwigTemplate_986f60a5b420f8a8b07f1c9ca3e969cad1e5a11ba18f8919a59948ec736783bc extends Twig_Template
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
        $__internal_fa4e816499fc2bc77621ae434ae40aea6ef6a96110ca4dd482cd0a50189d9a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4e816499fc2bc77621ae434ae40aea6ef6a96110ca4dd482cd0a50189d9a45->enter($__internal_fa4e816499fc2bc77621ae434ae40aea6ef6a96110ca4dd482cd0a50189d9a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/is-implemented.js"));

        // line 1
        echo "'use strict';

module.exports = function () {
\tvar map, iterator, result;
\tif (typeof Map !== 'function') return false;
\ttry {
\t\t// WebKit doesn't support arguments and crashes
\t\tmap = new Map([['raz', 'one'], ['dwa', 'two'], ['trzy', 'three']]);
\t} catch (e) {
\t\treturn false;
\t}
\tif (String(map) !== '[object Map]') return false;
\tif (map.size !== 3) return false;
\tif (typeof map.clear !== 'function') return false;
\tif (typeof map.delete !== 'function') return false;
\tif (typeof map.entries !== 'function') return false;
\tif (typeof map.forEach !== 'function') return false;
\tif (typeof map.get !== 'function') return false;
\tif (typeof map.has !== 'function') return false;
\tif (typeof map.keys !== 'function') return false;
\tif (typeof map.set !== 'function') return false;
\tif (typeof map.values !== 'function') return false;

\titerator = map.entries();
\tresult = iterator.next();
\tif (result.done !== false) return false;
\tif (!result.value) return false;
\tif (result.value[0] !== 'raz') return false;
\tif (result.value[1] !== 'one') return false;

\treturn true;
};
";
        
        $__internal_fa4e816499fc2bc77621ae434ae40aea6ef6a96110ca4dd482cd0a50189d9a45->leave($__internal_fa4e816499fc2bc77621ae434ae40aea6ef6a96110ca4dd482cd0a50189d9a45_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function () {
\tvar map, iterator, result;
\tif (typeof Map !== 'function') return false;
\ttry {
\t\t// WebKit doesn't support arguments and crashes
\t\tmap = new Map([['raz', 'one'], ['dwa', 'two'], ['trzy', 'three']]);
\t} catch (e) {
\t\treturn false;
\t}
\tif (String(map) !== '[object Map]') return false;
\tif (map.size !== 3) return false;
\tif (typeof map.clear !== 'function') return false;
\tif (typeof map.delete !== 'function') return false;
\tif (typeof map.entries !== 'function') return false;
\tif (typeof map.forEach !== 'function') return false;
\tif (typeof map.get !== 'function') return false;
\tif (typeof map.has !== 'function') return false;
\tif (typeof map.keys !== 'function') return false;
\tif (typeof map.set !== 'function') return false;
\tif (typeof map.values !== 'function') return false;

\titerator = map.entries();
\tresult = iterator.next();
\tif (result.done !== false) return false;
\tif (!result.value) return false;
\tif (result.value[0] !== 'raz') return false;
\tif (result.value[1] !== 'one') return false;

\treturn true;
};
", "node_modules/es6-map/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/is-implemented.js");
    }
}
