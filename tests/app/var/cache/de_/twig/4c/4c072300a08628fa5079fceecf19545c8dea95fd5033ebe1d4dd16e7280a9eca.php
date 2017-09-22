<?php

/* node_modules/node-pre-gyp/lib/info.js */
class __TwigTemplate_e5c715501b2c5a7cb59354acff781890309189de28372657eb11c6344908d12d extends Twig_Template
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
        $__internal_acfe855c8ba79a5849e467317b1caf1331f53b860dd67dda62894f4c1143cf77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfe855c8ba79a5849e467317b1caf1331f53b860dd67dda62894f4c1143cf77->enter($__internal_acfe855c8ba79a5849e467317b1caf1331f53b860dd67dda62894f4c1143cf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-pre-gyp/lib/info.js"));

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
        
        $__internal_acfe855c8ba79a5849e467317b1caf1331f53b860dd67dda62894f4c1143cf77->leave($__internal_acfe855c8ba79a5849e467317b1caf1331f53b860dd67dda62894f4c1143cf77_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-pre-gyp/lib/info.js";
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
", "node_modules/node-pre-gyp/lib/info.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-pre-gyp/lib/info.js");
    }
}
