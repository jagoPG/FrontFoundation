<?php

/* node_modules/resumer/index.js */
class __TwigTemplate_87d0e6330ede0f82f0ea5aa1820154ce0114db3e01bc2c6fb3716d207336e5f4 extends Twig_Template
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
        $__internal_755d3bddb34370395dadcc9f637532e243d31ee1434c423b70ffb2e9630f05fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755d3bddb34370395dadcc9f637532e243d31ee1434c423b70ffb2e9630f05fb->enter($__internal_755d3bddb34370395dadcc9f637532e243d31ee1434c423b70ffb2e9630f05fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resumer/index.js"));

        // line 1
        echo "var through = require('through');
var nextTick = typeof setImmediate !== 'undefined'
    ? setImmediate
    : process.nextTick
;

module.exports = function (write, end) {
    var tr = through(write, end);
    tr.pause();
    var resume = tr.resume;
    var pause = tr.pause;
    var paused = false;
    
    tr.pause = function () {
        paused = true;
        return pause.apply(this, arguments);
    };
    
    tr.resume = function () {
        paused = false;
        return resume.apply(this, arguments);
    };
    
    nextTick(function () {
        if (!paused) tr.resume();
    });
    
    return tr;
};
";
        
        $__internal_755d3bddb34370395dadcc9f637532e243d31ee1434c423b70ffb2e9630f05fb->leave($__internal_755d3bddb34370395dadcc9f637532e243d31ee1434c423b70ffb2e9630f05fb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resumer/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var through = require('through');
var nextTick = typeof setImmediate !== 'undefined'
    ? setImmediate
    : process.nextTick
;

module.exports = function (write, end) {
    var tr = through(write, end);
    tr.pause();
    var resume = tr.resume;
    var pause = tr.pause;
    var paused = false;
    
    tr.pause = function () {
        paused = true;
        return pause.apply(this, arguments);
    };
    
    tr.resume = function () {
        paused = false;
        return resume.apply(this, arguments);
    };
    
    nextTick(function () {
        if (!paused) tr.resume();
    });
    
    return tr;
};
", "node_modules/resumer/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resumer/index.js");
    }
}
