<?php

/* node_modules/node-pre-gyp/lib/unpublish.js */
class __TwigTemplate_1901b5c183e188d27f4062a6d77a19ce60f21cac904dbd4ed988fbdde12a61cd extends Twig_Template
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
        $__internal_040b454633523eb6cd4d0037eeb8d1c604400ad6de0afc37b1157d5a54b938f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040b454633523eb6cd4d0037eeb8d1c604400ad6de0afc37b1157d5a54b938f3->enter($__internal_040b454633523eb6cd4d0037eeb8d1c604400ad6de0afc37b1157d5a54b938f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-pre-gyp/lib/unpublish.js"));

        // line 1
        echo "\"use strict\";

module.exports = exports = unpublish;

exports.usage = 'Unpublishes pre-built binary (requires aws-sdk)';

var fs = require('fs');
var log = require('npmlog');
var versioning = require('./util/versioning.js');
var s3_setup = require('./util/s3_setup.js');
var url = require('url');
var config = require('rc')(\"node_pre_gyp\",{acl:\"public-read\"});

function unpublish(gyp, argv, callback) {
    var AWS = require(\"aws-sdk\");
    var package_json = JSON.parse(fs.readFileSync('./package.json'));
    var opts = versioning.evaluate(package_json, gyp.opts);
    s3_setup.detect(opts.hosted_path,config);
    AWS.config.update(config);
    var key_name = url.resolve(config.prefix,opts.package_name);
    var s3 =  new AWS.S3();
    var s3_opts = {  Bucket: config.bucket,
                     Key: key_name
                  };
    s3.headObject(s3_opts, function(err, meta) {
        if (err && err.code == 'NotFound') {
            console.log('['+package_json.name+'] Not found: https://' + s3_opts.Bucket + '.s3.amazonaws.com/' + s3_opts.Key);
            return callback();
        } else if(err) {
            return callback(err);
        } else {
            log.info('unpublish', JSON.stringify(meta));
            s3.deleteObject(s3_opts, function(err, resp) {
                if (err) return callback(err);
                log.info(JSON.stringify(resp));
                console.log('['+package_json.name+'] Success: removed https://' + s3_opts.Bucket + '.s3.amazonaws.com/' + s3_opts.Key);
                return callback();
            });
        }
    });
}
";
        
        $__internal_040b454633523eb6cd4d0037eeb8d1c604400ad6de0afc37b1157d5a54b938f3->leave($__internal_040b454633523eb6cd4d0037eeb8d1c604400ad6de0afc37b1157d5a54b938f3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-pre-gyp/lib/unpublish.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = exports = unpublish;

exports.usage = 'Unpublishes pre-built binary (requires aws-sdk)';

var fs = require('fs');
var log = require('npmlog');
var versioning = require('./util/versioning.js');
var s3_setup = require('./util/s3_setup.js');
var url = require('url');
var config = require('rc')(\"node_pre_gyp\",{acl:\"public-read\"});

function unpublish(gyp, argv, callback) {
    var AWS = require(\"aws-sdk\");
    var package_json = JSON.parse(fs.readFileSync('./package.json'));
    var opts = versioning.evaluate(package_json, gyp.opts);
    s3_setup.detect(opts.hosted_path,config);
    AWS.config.update(config);
    var key_name = url.resolve(config.prefix,opts.package_name);
    var s3 =  new AWS.S3();
    var s3_opts = {  Bucket: config.bucket,
                     Key: key_name
                  };
    s3.headObject(s3_opts, function(err, meta) {
        if (err && err.code == 'NotFound') {
            console.log('['+package_json.name+'] Not found: https://' + s3_opts.Bucket + '.s3.amazonaws.com/' + s3_opts.Key);
            return callback();
        } else if(err) {
            return callback(err);
        } else {
            log.info('unpublish', JSON.stringify(meta));
            s3.deleteObject(s3_opts, function(err, resp) {
                if (err) return callback(err);
                log.info(JSON.stringify(resp));
                console.log('['+package_json.name+'] Success: removed https://' + s3_opts.Bucket + '.s3.amazonaws.com/' + s3_opts.Key);
                return callback();
            });
        }
    });
}
", "node_modules/node-pre-gyp/lib/unpublish.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-pre-gyp/lib/unpublish.js");
    }
}
