<?php

/* node_modules/es6-iterator/test/#/chain.js */
class __TwigTemplate_359298f228a5374567dd3645836d5008163ffd30211b4934da46cccb96020b58 extends Twig_Template
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
        $__internal_bcda8e6ffc6d11eba5fdfb2b228f053c1bad7cb2cd6bc0875a5d5566388abe04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcda8e6ffc6d11eba5fdfb2b228f053c1bad7cb2cd6bc0875a5d5566388abe04->enter($__internal_bcda8e6ffc6d11eba5fdfb2b228f053c1bad7cb2cd6bc0875a5d5566388abe04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/test/#/chain.js"));

        // line 1
        echo "'use strict';

var Iterator = require('../../');

module.exports = function (t, a) {
\tvar i1 = new Iterator(['raz', 'dwa', 'trzy'])
\t  , i2 = new Iterator(['cztery', 'pięć', 'sześć'])
\t  , i3 = new Iterator(['siedem', 'osiem', 'dziewięć'])

\t  , iterator = t.call(i1, i2, i3);

\ta.deep(iterator.next(), { done: false, value: 'raz' }, \"#1\");
\ta.deep(iterator.next(), { done: false, value: 'dwa' }, \"#2\");
\ta.deep(iterator.next(), { done: false, value: 'trzy' }, \"#3\");
\ta.deep(iterator.next(), { done: false, value: 'cztery' }, \"#4\");
\ta.deep(iterator.next(), { done: false, value: 'pięć' }, \"#5\");
\ta.deep(iterator.next(), { done: false, value: 'sześć' }, \"#6\");
\ta.deep(iterator.next(), { done: false, value: 'siedem' }, \"#7\");
\ta.deep(iterator.next(), { done: false, value: 'osiem' }, \"#8\");
\ta.deep(iterator.next(), { done: false, value: 'dziewięć' }, \"#9\");
\ta.deep(iterator.next(), { done: true, value: undefined }, \"Done #1\");
\ta.deep(iterator.next(), { done: true, value: undefined }, \"Done #2\");
};
";
        
        $__internal_bcda8e6ffc6d11eba5fdfb2b228f053c1bad7cb2cd6bc0875a5d5566388abe04->leave($__internal_bcda8e6ffc6d11eba5fdfb2b228f053c1bad7cb2cd6bc0875a5d5566388abe04_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/test/#/chain.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var Iterator = require('../../');

module.exports = function (t, a) {
\tvar i1 = new Iterator(['raz', 'dwa', 'trzy'])
\t  , i2 = new Iterator(['cztery', 'pięć', 'sześć'])
\t  , i3 = new Iterator(['siedem', 'osiem', 'dziewięć'])

\t  , iterator = t.call(i1, i2, i3);

\ta.deep(iterator.next(), { done: false, value: 'raz' }, \"#1\");
\ta.deep(iterator.next(), { done: false, value: 'dwa' }, \"#2\");
\ta.deep(iterator.next(), { done: false, value: 'trzy' }, \"#3\");
\ta.deep(iterator.next(), { done: false, value: 'cztery' }, \"#4\");
\ta.deep(iterator.next(), { done: false, value: 'pięć' }, \"#5\");
\ta.deep(iterator.next(), { done: false, value: 'sześć' }, \"#6\");
\ta.deep(iterator.next(), { done: false, value: 'siedem' }, \"#7\");
\ta.deep(iterator.next(), { done: false, value: 'osiem' }, \"#8\");
\ta.deep(iterator.next(), { done: false, value: 'dziewięć' }, \"#9\");
\ta.deep(iterator.next(), { done: true, value: undefined }, \"Done #1\");
\ta.deep(iterator.next(), { done: true, value: undefined }, \"Done #2\");
};
", "node_modules/es6-iterator/test/#/chain.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/test/#/chain.js");
    }
}
