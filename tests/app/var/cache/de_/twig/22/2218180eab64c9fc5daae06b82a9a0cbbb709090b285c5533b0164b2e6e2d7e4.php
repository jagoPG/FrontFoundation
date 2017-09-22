<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/lib/reveal.js */
class __TwigTemplate_e15dd4ac780bf1653157d49fab22c8530922ef7c04508c43d43efbf5cd4795e1 extends Twig_Template
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
        $__internal_8534c01002a189246394dde6b5af02327e63854f182cd8401574563f1652185d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8534c01002a189246394dde6b5af02327e63854f182cd8401574563f1652185d->enter($__internal_8534c01002a189246394dde6b5af02327e63854f182cd8401574563f1652185d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/lib/reveal.js"));

        // line 1
        echo "\"use strict\";

module.exports = exports = reveal;

exports.usage = 'Reveals data on the versioned binary';

var fs = require('fs');
var versioning = require('./util/versioning.js');

function unix_paths(key, val) {
    return val && val.replace ? val.replace(/\\\\/g, '/') : val;
}

function reveal(gyp, argv, callback) {
    var package_json = JSON.parse(fs.readFileSync('./package.json'));
    var opts = versioning.evaluate(package_json, gyp.opts);
    var hit = false;
    // if a second arg is passed look to see
    // if it is a known option
    //console.log(JSON.stringify(gyp.opts,null,1))
    var remain = gyp.opts.argv.remain.pop();
    if (remain && opts.hasOwnProperty(remain)) {
        console.log(opts[remain].replace(/\\\\/g, '/'));
        hit = true;
    }
    // otherwise return all options as json
    if (!hit) {
        console.log(JSON.stringify(opts,unix_paths,2));
    }
    return callback();
}
";
        
        $__internal_8534c01002a189246394dde6b5af02327e63854f182cd8401574563f1652185d->leave($__internal_8534c01002a189246394dde6b5af02327e63854f182cd8401574563f1652185d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/lib/reveal.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = exports = reveal;

exports.usage = 'Reveals data on the versioned binary';

var fs = require('fs');
var versioning = require('./util/versioning.js');

function unix_paths(key, val) {
    return val && val.replace ? val.replace(/\\\\/g, '/') : val;
}

function reveal(gyp, argv, callback) {
    var package_json = JSON.parse(fs.readFileSync('./package.json'));
    var opts = versioning.evaluate(package_json, gyp.opts);
    var hit = false;
    // if a second arg is passed look to see
    // if it is a known option
    //console.log(JSON.stringify(gyp.opts,null,1))
    var remain = gyp.opts.argv.remain.pop();
    if (remain && opts.hasOwnProperty(remain)) {
        console.log(opts[remain].replace(/\\\\/g, '/'));
        hit = true;
    }
    // otherwise return all options as json
    if (!hit) {
        console.log(JSON.stringify(opts,unix_paths,2));
    }
    return callback();
}
", "node_modules/fsevents/node_modules/node-pre-gyp/lib/reveal.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/lib/reveal.js");
    }
}
