<?php

/* node_modules/hash.js/lib/hash.js */
class __TwigTemplate_28f198262bdb904591c100b6a98bea9ce76531ff8c3b78d1154bedad2985c2f5 extends Twig_Template
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
        $__internal_670dec26d5f1d4c37730fa881b9a06c00c2f60091d23f7dc721b94581d923844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670dec26d5f1d4c37730fa881b9a06c00c2f60091d23f7dc721b94581d923844->enter($__internal_670dec26d5f1d4c37730fa881b9a06c00c2f60091d23f7dc721b94581d923844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/hash.js/lib/hash.js"));

        // line 1
        echo "var hash = exports;

hash.utils = require('./hash/utils');
hash.common = require('./hash/common');
hash.sha = require('./hash/sha');
hash.ripemd = require('./hash/ripemd');
hash.hmac = require('./hash/hmac');

// Proxy hash functions to the main object
hash.sha1 = hash.sha.sha1;
hash.sha256 = hash.sha.sha256;
hash.sha224 = hash.sha.sha224;
hash.sha384 = hash.sha.sha384;
hash.sha512 = hash.sha.sha512;
hash.ripemd160 = hash.ripemd.ripemd160;
";
        
        $__internal_670dec26d5f1d4c37730fa881b9a06c00c2f60091d23f7dc721b94581d923844->leave($__internal_670dec26d5f1d4c37730fa881b9a06c00c2f60091d23f7dc721b94581d923844_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/hash.js/lib/hash.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var hash = exports;

hash.utils = require('./hash/utils');
hash.common = require('./hash/common');
hash.sha = require('./hash/sha');
hash.ripemd = require('./hash/ripemd');
hash.hmac = require('./hash/hmac');

// Proxy hash functions to the main object
hash.sha1 = hash.sha.sha1;
hash.sha256 = hash.sha.sha256;
hash.sha224 = hash.sha.sha224;
hash.sha384 = hash.sha.sha384;
hash.sha512 = hash.sha.sha512;
hash.ripemd160 = hash.ripemd.ripemd160;
", "node_modules/hash.js/lib/hash.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/hash.js/lib/hash.js");
    }
}
