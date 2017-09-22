<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/lib/build.js */
class __TwigTemplate_b4648fde753102338a93e1ef5384ca7e0fb114dc4134cb5d3a03d0788d910f75 extends Twig_Template
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
        $__internal_c646cc396c396d222f40dfa2cb1af172a64e5960c336917d9dc0451b88cb77aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c646cc396c396d222f40dfa2cb1af172a64e5960c336917d9dc0451b88cb77aa->enter($__internal_c646cc396c396d222f40dfa2cb1af172a64e5960c336917d9dc0451b88cb77aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/lib/build.js"));

        // line 1
        echo "\"use strict\";

module.exports = exports = build;

exports.usage = 'Attempts to compile the module by dispatching to node-gyp or nw-gyp';

var compile = require('./util/compile.js');
var handle_gyp_opts = require('./util/handle_gyp_opts.js');
var configure = require('./configure.js');

function do_build(gyp,argv,callback) {
    handle_gyp_opts(gyp,argv,function(err,result) {
        var final_args = ['build'].concat(result.gyp).concat(result.pre);
        if (result.unparsed.length > 0) {
            final_args = final_args.
                          concat(['--']).
                          concat(result.unparsed);
        }
        compile.run_gyp(final_args,result.opts,function(err) {
            return callback(err);
        });
    });
}

function build(gyp, argv, callback) {

    // Form up commands to pass to node-gyp:
    // We map `node-pre-gyp build` to `node-gyp configure build` so that we do not
    // trigger a clean and therefore do not pay the penalty of a full recompile
    if (argv.length && (argv.indexOf('rebuild') > -1)) {
        // here we map `node-pre-gyp rebuild` to `node-gyp rebuild` which internally means
        // \"clean + configure + build\" and triggers a full recompile
        compile.run_gyp(['clean'],{},function(err) {
            if (err) return callback(err);
            configure(gyp,argv,function(err) {
                if (err) return callback(err);
                return do_build(gyp,argv,callback);
            });
        });
    } else {
        return do_build(gyp,argv,callback);        
    }
}
";
        
        $__internal_c646cc396c396d222f40dfa2cb1af172a64e5960c336917d9dc0451b88cb77aa->leave($__internal_c646cc396c396d222f40dfa2cb1af172a64e5960c336917d9dc0451b88cb77aa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/lib/build.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = exports = build;

exports.usage = 'Attempts to compile the module by dispatching to node-gyp or nw-gyp';

var compile = require('./util/compile.js');
var handle_gyp_opts = require('./util/handle_gyp_opts.js');
var configure = require('./configure.js');

function do_build(gyp,argv,callback) {
    handle_gyp_opts(gyp,argv,function(err,result) {
        var final_args = ['build'].concat(result.gyp).concat(result.pre);
        if (result.unparsed.length > 0) {
            final_args = final_args.
                          concat(['--']).
                          concat(result.unparsed);
        }
        compile.run_gyp(final_args,result.opts,function(err) {
            return callback(err);
        });
    });
}

function build(gyp, argv, callback) {

    // Form up commands to pass to node-gyp:
    // We map `node-pre-gyp build` to `node-gyp configure build` so that we do not
    // trigger a clean and therefore do not pay the penalty of a full recompile
    if (argv.length && (argv.indexOf('rebuild') > -1)) {
        // here we map `node-pre-gyp rebuild` to `node-gyp rebuild` which internally means
        // \"clean + configure + build\" and triggers a full recompile
        compile.run_gyp(['clean'],{},function(err) {
            if (err) return callback(err);
            configure(gyp,argv,function(err) {
                if (err) return callback(err);
                return do_build(gyp,argv,callback);
            });
        });
    } else {
        return do_build(gyp,argv,callback);        
    }
}
", "node_modules/fsevents/node_modules/node-pre-gyp/lib/build.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/lib/build.js");
    }
}
