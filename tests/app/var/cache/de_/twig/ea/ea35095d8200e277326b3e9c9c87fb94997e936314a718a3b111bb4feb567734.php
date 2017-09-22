<?php

/* node_modules/node-pre-gyp/lib/configure.js */
class __TwigTemplate_dc07850483e7dd612419b1fcf619883dd119429fe307b56294b018696d9069da extends Twig_Template
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
        $__internal_ce4bbf621d18c69c10385c3f0a0caea3db30fbae544e8264cf1bb7a5673f84ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4bbf621d18c69c10385c3f0a0caea3db30fbae544e8264cf1bb7a5673f84ff->enter($__internal_ce4bbf621d18c69c10385c3f0a0caea3db30fbae544e8264cf1bb7a5673f84ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-pre-gyp/lib/configure.js"));

        // line 1
        echo "\"use strict\";

module.exports = exports = configure;

exports.usage = 'Attempts to configure node-gyp or nw-gyp build';

var compile = require('./util/compile.js');
var handle_gyp_opts = require('./util/handle_gyp_opts.js');

function configure(gyp, argv, callback) {
    handle_gyp_opts(gyp,argv,function(err,result) {
        var final_args = result.gyp.concat(result.pre);
        // pull select node-gyp configure options out of the npm environ
        var known_gyp_args = ['dist-url','python','nodedir','msvs_version'];
        known_gyp_args.forEach(function(key) {
            var val = gyp.opts[key] || gyp.opts[key.replace('-','_')];
            if (val) {
               final_args.push('--'+key+'='+val);
            }
        });
        // --ensure=false tell node-gyp to re-install node development headers
        // but it is only respected by node-gyp install, so we have to call install
        // as a separate step if the user passes it
        if (gyp.opts.ensure === false) {
            var install_args = final_args.concat(['install','--ensure=false']);
            compile.run_gyp(install_args,result.opts,function(err) {
                if (err) return callback(err);
                if (result.unparsed.length > 0) {
                    final_args = final_args.
                                  concat(['--']).
                                  concat(result.unparsed);
                }
                compile.run_gyp(['configure'].concat(final_args),result.opts,function(err) {
                    return callback(err);
                });
            });
        } else {
            if (result.unparsed.length > 0) {
                final_args = final_args.
                              concat(['--']).
                              concat(result.unparsed);
            }
            compile.run_gyp(['configure'].concat(final_args),result.opts,function(err) {
                return callback(err);
            });
        }
    });
}
";
        
        $__internal_ce4bbf621d18c69c10385c3f0a0caea3db30fbae544e8264cf1bb7a5673f84ff->leave($__internal_ce4bbf621d18c69c10385c3f0a0caea3db30fbae544e8264cf1bb7a5673f84ff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-pre-gyp/lib/configure.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = exports = configure;

exports.usage = 'Attempts to configure node-gyp or nw-gyp build';

var compile = require('./util/compile.js');
var handle_gyp_opts = require('./util/handle_gyp_opts.js');

function configure(gyp, argv, callback) {
    handle_gyp_opts(gyp,argv,function(err,result) {
        var final_args = result.gyp.concat(result.pre);
        // pull select node-gyp configure options out of the npm environ
        var known_gyp_args = ['dist-url','python','nodedir','msvs_version'];
        known_gyp_args.forEach(function(key) {
            var val = gyp.opts[key] || gyp.opts[key.replace('-','_')];
            if (val) {
               final_args.push('--'+key+'='+val);
            }
        });
        // --ensure=false tell node-gyp to re-install node development headers
        // but it is only respected by node-gyp install, so we have to call install
        // as a separate step if the user passes it
        if (gyp.opts.ensure === false) {
            var install_args = final_args.concat(['install','--ensure=false']);
            compile.run_gyp(install_args,result.opts,function(err) {
                if (err) return callback(err);
                if (result.unparsed.length > 0) {
                    final_args = final_args.
                                  concat(['--']).
                                  concat(result.unparsed);
                }
                compile.run_gyp(['configure'].concat(final_args),result.opts,function(err) {
                    return callback(err);
                });
            });
        } else {
            if (result.unparsed.length > 0) {
                final_args = final_args.
                              concat(['--']).
                              concat(result.unparsed);
            }
            compile.run_gyp(['configure'].concat(final_args),result.opts,function(err) {
                return callback(err);
            });
        }
    });
}
", "node_modules/node-pre-gyp/lib/configure.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-pre-gyp/lib/configure.js");
    }
}
