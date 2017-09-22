<?php

/* node_modules/tape/lib/default_stream.js */
class __TwigTemplate_17cf6a8edcd9569312f1c278d8664c40a6100e66347732bfa548ad9399bc8fd0 extends Twig_Template
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
        $__internal_e7fcfbf1a1cd4269ace725816374655e2e3deeb2304570a99ddf121d9b14213e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fcfbf1a1cd4269ace725816374655e2e3deeb2304570a99ddf121d9b14213e->enter($__internal_e7fcfbf1a1cd4269ace725816374655e2e3deeb2304570a99ddf121d9b14213e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/lib/default_stream.js"));

        // line 1
        echo "var through = require('through');
var fs = require('fs');

module.exports = function () {
    var line = '';
    var stream = through(write, flush);
    return stream;
    
    function write (buf) {
        for (var i = 0; i < buf.length; i++) {
            var c = typeof buf === 'string'
                ? buf.charAt(i)
                : String.fromCharCode(buf[i])
            ;
            if (c === '\\n') flush();
            else line += c;
        }
    }
    
    function flush () {
        if (fs.writeSync && /^win/.test(process.platform)) {
            try { fs.writeSync(1, line + '\\n'); }
            catch (e) { stream.emit('error', e) }
        } else {
            try { console.log(line) }
            catch (e) { stream.emit('error', e) }
        }
        line = '';
    }
};
";
        
        $__internal_e7fcfbf1a1cd4269ace725816374655e2e3deeb2304570a99ddf121d9b14213e->leave($__internal_e7fcfbf1a1cd4269ace725816374655e2e3deeb2304570a99ddf121d9b14213e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/lib/default_stream.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var through = require('through');
var fs = require('fs');

module.exports = function () {
    var line = '';
    var stream = through(write, flush);
    return stream;
    
    function write (buf) {
        for (var i = 0; i < buf.length; i++) {
            var c = typeof buf === 'string'
                ? buf.charAt(i)
                : String.fromCharCode(buf[i])
            ;
            if (c === '\\n') flush();
            else line += c;
        }
    }
    
    function flush () {
        if (fs.writeSync && /^win/.test(process.platform)) {
            try { fs.writeSync(1, line + '\\n'); }
            catch (e) { stream.emit('error', e) }
        } else {
            try { console.log(line) }
            catch (e) { stream.emit('error', e) }
        }
        line = '';
    }
};
", "node_modules/tape/lib/default_stream.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/lib/default_stream.js");
    }
}
