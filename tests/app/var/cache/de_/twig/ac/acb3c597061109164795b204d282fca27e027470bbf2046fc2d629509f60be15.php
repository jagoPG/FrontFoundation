<?php

/* node_modules/parsleyjs/test/setup/node.js */
class __TwigTemplate_aa774668a68d2ad45ade70e83da8c75877bb9c026dce99263e49a7002eb6dd45 extends Twig_Template
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
        $__internal_465afef3b25d4578f84a438814bcf209af67a17e2a981cc92b6eac8a5c2f42d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465afef3b25d4578f84a438814bcf209af67a17e2a981cc92b6eac8a5c2f42d8->enter($__internal_465afef3b25d4578f84a438814bcf209af67a17e2a981cc92b6eac8a5c2f42d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/test/setup/node.js"));

        // line 1
        echo "global.expect = require('expect.js');
global.sinon = require('sinon');
global.travis = process.env.TRAVIS;

require('babel-core/register');

var jsdom = require('jsdom').jsdom;
global.document = jsdom('<html><head></head><body></body></html>');
global.window = document.defaultView;
global.navigator = window.navigator = {
  userAgent: 'NodeJS JSDom',
  appVersion: ''
};

require('./setup')();

";
        
        $__internal_465afef3b25d4578f84a438814bcf209af67a17e2a981cc92b6eac8a5c2f42d8->leave($__internal_465afef3b25d4578f84a438814bcf209af67a17e2a981cc92b6eac8a5c2f42d8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/test/setup/node.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("global.expect = require('expect.js');
global.sinon = require('sinon');
global.travis = process.env.TRAVIS;

require('babel-core/register');

var jsdom = require('jsdom').jsdom;
global.document = jsdom('<html><head></head><body></body></html>');
global.window = document.defaultView;
global.navigator = window.navigator = {
  userAgent: 'NodeJS JSDom',
  appVersion: ''
};

require('./setup')();

", "node_modules/parsleyjs/test/setup/node.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/test/setup/node.js");
    }
}
