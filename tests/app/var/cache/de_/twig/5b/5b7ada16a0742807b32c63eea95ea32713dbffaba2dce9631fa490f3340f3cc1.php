<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/lib/info.js */
class __TwigTemplate_2872bb776249643ea80d04b5091b29ad48504006bf8b1b0f27edd91a59e45ebc extends Twig_Template
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
        $__internal_e957968e283e0277ee617bf1373e65693cc08373328b31bfde5e0763713c1bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e957968e283e0277ee617bf1373e65693cc08373328b31bfde5e0763713c1bfe->enter($__internal_e957968e283e0277ee617bf1373e65693cc08373328b31bfde5e0763713c1bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/lib/info.js"));

        // line 1
        echo "\"use strict\";

module.exports = exports = unpublish;

exports.usage = 'Lists all published binaries (requires aws-sdk)';

var fs = require('fs');
var log = require('npmlog');
var versioning = require('./util/versioning.js');
var s3_setup = require('./util/s3_setup.js');
var config = require('rc')(\"node_pre_gyp\",{acl:\"public-read\"});

function unpublish(gyp, argv, callback) {
    var AWS = require(\"aws-sdk\");
    var package_json = JSON.parse(fs.readFileSync('./package.json'));
    var opts = versioning.evaluate(package_json, gyp.opts);
    s3_setup.detect(opts.hosted_path,config);
    AWS.config.update(config);
    var s3 =  new AWS.S3();
    var s3_opts = {  Bucket: config.bucket,
                     Prefix: config.prefix
                  };
    s3.listObjects(s3_opts, function(err, meta){
        if (err && err.code == 'NotFound') {
            return callback(new Error('['+package_json.name+'] Not found: https://' + s3_opts.Bucket + '.s3.amazonaws.com/'+config.prefix));
        } else if(err) {
            return callback(err);
        } else {
            log.verbose(JSON.stringify(meta,null,1));
            if (meta && meta.Contents) {
                meta.Contents.forEach(function(obj) {
                    console.log(obj.Key);
                });
            } else {
                console.error('['+package_json.name+'] No objects found at https://' + s3_opts.Bucket + '.s3.amazonaws.com/'+config.prefix );
            }
            return callback();
        }
    });
}
";
        
        $__internal_e957968e283e0277ee617bf1373e65693cc08373328b31bfde5e0763713c1bfe->leave($__internal_e957968e283e0277ee617bf1373e65693cc08373328b31bfde5e0763713c1bfe_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/lib/info.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = exports = unpublish;

exports.usage = 'Lists all published binaries (requires aws-sdk)';

var fs = require('fs');
var log = require('npmlog');
var versioning = require('./util/versioning.js');
var s3_setup = require('./util/s3_setup.js');
var config = require('rc')(\"node_pre_gyp\",{acl:\"public-read\"});

function unpublish(gyp, argv, callback) {
    var AWS = require(\"aws-sdk\");
    var package_json = JSON.parse(fs.readFileSync('./package.json'));
    var opts = versioning.evaluate(package_json, gyp.opts);
    s3_setup.detect(opts.hosted_path,config);
    AWS.config.update(config);
    var s3 =  new AWS.S3();
    var s3_opts = {  Bucket: config.bucket,
                     Prefix: config.prefix
                  };
    s3.listObjects(s3_opts, function(err, meta){
        if (err && err.code == 'NotFound') {
            return callback(new Error('['+package_json.name+'] Not found: https://' + s3_opts.Bucket + '.s3.amazonaws.com/'+config.prefix));
        } else if(err) {
            return callback(err);
        } else {
            log.verbose(JSON.stringify(meta,null,1));
            if (meta && meta.Contents) {
                meta.Contents.forEach(function(obj) {
                    console.log(obj.Key);
                });
            } else {
                console.error('['+package_json.name+'] No objects found at https://' + s3_opts.Bucket + '.s3.amazonaws.com/'+config.prefix );
            }
            return callback();
        }
    });
}
", "node_modules/fsevents/node_modules/node-pre-gyp/lib/info.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/lib/info.js");
    }
}
