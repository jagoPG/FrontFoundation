<?php

/* node_modules/commondir/index.js */
class __TwigTemplate_67d169a5f56fb9f2cce242cb31cac182dd79850c67b0d71e9a536ae8b831633e extends Twig_Template
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
        $__internal_449fb969b233bc288b41809a7b079906126a938f66c0d2aeeff3ecb7755c387c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449fb969b233bc288b41809a7b079906126a938f66c0d2aeeff3ecb7755c387c->enter($__internal_449fb969b233bc288b41809a7b079906126a938f66c0d2aeeff3ecb7755c387c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/commondir/index.js"));

        // line 1
        echo "var path = require('path');

module.exports = function (basedir, relfiles) {
    if (relfiles) {
        var files = relfiles.map(function (r) {
            return path.resolve(basedir, r);
        });
    }
    else {
        var files = basedir;
    }
    
    var res = files.slice(1).reduce(function (ps, file) {
        if (!file.match(/^([A-Za-z]:)?\\/|\\\\/)) {
            throw new Error('relative path without a basedir');
        }
        
        var xs = file.split(/\\/+|\\\\+/);
        for (
            var i = 0;
            ps[i] === xs[i] && i < Math.min(ps.length, xs.length);
            i++
        );
        return ps.slice(0, i);
    }, files[0].split(/\\/+|\\\\+/));
    
    // Windows correctly handles paths with forward-slashes
    return res.length > 1 ? res.join('/') : '/'
};
";
        
        $__internal_449fb969b233bc288b41809a7b079906126a938f66c0d2aeeff3ecb7755c387c->leave($__internal_449fb969b233bc288b41809a7b079906126a938f66c0d2aeeff3ecb7755c387c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/commondir/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var path = require('path');

module.exports = function (basedir, relfiles) {
    if (relfiles) {
        var files = relfiles.map(function (r) {
            return path.resolve(basedir, r);
        });
    }
    else {
        var files = basedir;
    }
    
    var res = files.slice(1).reduce(function (ps, file) {
        if (!file.match(/^([A-Za-z]:)?\\/|\\\\/)) {
            throw new Error('relative path without a basedir');
        }
        
        var xs = file.split(/\\/+|\\\\+/);
        for (
            var i = 0;
            ps[i] === xs[i] && i < Math.min(ps.length, xs.length);
            i++
        );
        return ps.slice(0, i);
    }, files[0].split(/\\/+|\\\\+/));
    
    // Windows correctly handles paths with forward-slashes
    return res.length > 1 ? res.join('/') : '/'
};
", "node_modules/commondir/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/commondir/index.js");
    }
}
