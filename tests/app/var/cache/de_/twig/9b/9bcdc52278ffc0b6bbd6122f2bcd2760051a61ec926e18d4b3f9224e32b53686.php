<?php

/* node_modules/source-map/source-map.js */
class __TwigTemplate_5c6c002818b30801684f4347bc48c6be39674607db49f56881f801b700fe1a52 extends Twig_Template
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
        $__internal_b67f6169c88c0c6b02ee8cd2d5eced74a25ce476b667f925233df9bcc0862cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67f6169c88c0c6b02ee8cd2d5eced74a25ce476b667f925233df9bcc0862cd7->enter($__internal_b67f6169c88c0c6b02ee8cd2d5eced74a25ce476b667f925233df9bcc0862cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/source-map/source-map.js"));

        // line 1
        echo "/*
 * Copyright 2009-2011 Mozilla Foundation and contributors
 * Licensed under the New BSD license. See LICENSE.txt or:
 * http://opensource.org/licenses/BSD-3-Clause
 */
exports.SourceMapGenerator = require('./lib/source-map-generator').SourceMapGenerator;
exports.SourceMapConsumer = require('./lib/source-map-consumer').SourceMapConsumer;
exports.SourceNode = require('./lib/source-node').SourceNode;
";
        
        $__internal_b67f6169c88c0c6b02ee8cd2d5eced74a25ce476b667f925233df9bcc0862cd7->leave($__internal_b67f6169c88c0c6b02ee8cd2d5eced74a25ce476b667f925233df9bcc0862cd7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/source-map/source-map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
 * Copyright 2009-2011 Mozilla Foundation and contributors
 * Licensed under the New BSD license. See LICENSE.txt or:
 * http://opensource.org/licenses/BSD-3-Clause
 */
exports.SourceMapGenerator = require('./lib/source-map-generator').SourceMapGenerator;
exports.SourceMapConsumer = require('./lib/source-map-consumer').SourceMapConsumer;
exports.SourceNode = require('./lib/source-node').SourceNode;
", "node_modules/source-map/source-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/source-map/source-map.js");
    }
}
