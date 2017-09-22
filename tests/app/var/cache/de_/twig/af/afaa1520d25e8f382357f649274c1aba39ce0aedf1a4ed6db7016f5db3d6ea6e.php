<?php

/* node_modules/is-stream/index.js */
class __TwigTemplate_c07db840028fe7cceec0218c16612beb324315303abbf84c8be54cd684ef5dfd extends Twig_Template
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
        $__internal_cf438989b914c3593b28b1a1f0dd6564de6ff9ed753a81b3820f402228abf2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf438989b914c3593b28b1a1f0dd6564de6ff9ed753a81b3820f402228abf2df->enter($__internal_cf438989b914c3593b28b1a1f0dd6564de6ff9ed753a81b3820f402228abf2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-stream/index.js"));

        // line 1
        echo "'use strict';

var isStream = module.exports = function (stream) {
\treturn stream !== null && typeof stream === 'object' && typeof stream.pipe === 'function';
};

isStream.writable = function (stream) {
\treturn isStream(stream) && stream.writable !== false && typeof stream._write === 'function' && typeof stream._writableState === 'object';
};

isStream.readable = function (stream) {
\treturn isStream(stream) && stream.readable !== false && typeof stream._read === 'function' && typeof stream._readableState === 'object';
};

isStream.duplex = function (stream) {
\treturn isStream.writable(stream) && isStream.readable(stream);
};

isStream.transform = function (stream) {
\treturn isStream.duplex(stream) && typeof stream._transform === 'function' && typeof stream._transformState === 'object';
};
";
        
        $__internal_cf438989b914c3593b28b1a1f0dd6564de6ff9ed753a81b3820f402228abf2df->leave($__internal_cf438989b914c3593b28b1a1f0dd6564de6ff9ed753a81b3820f402228abf2df_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-stream/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var isStream = module.exports = function (stream) {
\treturn stream !== null && typeof stream === 'object' && typeof stream.pipe === 'function';
};

isStream.writable = function (stream) {
\treturn isStream(stream) && stream.writable !== false && typeof stream._write === 'function' && typeof stream._writableState === 'object';
};

isStream.readable = function (stream) {
\treturn isStream(stream) && stream.readable !== false && typeof stream._read === 'function' && typeof stream._readableState === 'object';
};

isStream.duplex = function (stream) {
\treturn isStream.writable(stream) && isStream.readable(stream);
};

isStream.transform = function (stream) {
\treturn isStream.duplex(stream) && typeof stream._transform === 'function' && typeof stream._transformState === 'object';
};
", "node_modules/is-stream/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-stream/index.js");
    }
}
