<?php

/* node_modules/hash.js/lib/hash/sha.js */
class __TwigTemplate_56677dbe5ad5d268682eb9fd312dabdc6b5603b67b797d42c21ad7669d4188e3 extends Twig_Template
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
        $__internal_03e0ec87f44eb58c881d3caddae62f4c0e67d09dd8c4fc510708fa224285d8c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e0ec87f44eb58c881d3caddae62f4c0e67d09dd8c4fc510708fa224285d8c2->enter($__internal_03e0ec87f44eb58c881d3caddae62f4c0e67d09dd8c4fc510708fa224285d8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/hash.js/lib/hash/sha.js"));

        // line 1
        echo "'use strict';

exports.sha1 = require('./sha/1');
exports.sha224 = require('./sha/224');
exports.sha256 = require('./sha/256');
exports.sha384 = require('./sha/384');
exports.sha512 = require('./sha/512');
";
        
        $__internal_03e0ec87f44eb58c881d3caddae62f4c0e67d09dd8c4fc510708fa224285d8c2->leave($__internal_03e0ec87f44eb58c881d3caddae62f4c0e67d09dd8c4fc510708fa224285d8c2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/hash.js/lib/hash/sha.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

exports.sha1 = require('./sha/1');
exports.sha224 = require('./sha/224');
exports.sha256 = require('./sha/256');
exports.sha384 = require('./sha/384');
exports.sha512 = require('./sha/512');
", "node_modules/hash.js/lib/hash/sha.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/hash.js/lib/hash/sha.js");
    }
}
