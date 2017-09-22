<?php

/* node_modules/loose-envify/loose-envify.js */
class __TwigTemplate_fbcb909c7f8317d2044f70e254161c7d9c2098f82f129e9a81ffa9cf6acab44c extends Twig_Template
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
        $__internal_6a5bc073da140f68641dc85dcbdc32642a2471c017507ab8dd463f8eb637d39f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5bc073da140f68641dc85dcbdc32642a2471c017507ab8dd463f8eb637d39f->enter($__internal_6a5bc073da140f68641dc85dcbdc32642a2471c017507ab8dd463f8eb637d39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loose-envify/loose-envify.js"));

        // line 1
        echo "'use strict';

var stream = require('stream');
var util = require('util');
var replace = require('./replace');

var jsonExtRe = /\\.json\$/;

module.exports = function(rootEnv) {
  rootEnv = rootEnv || process.env;
  return function (file, trOpts) {
    if (jsonExtRe.test(file)) {
      return stream.PassThrough();
    }
    var envs = trOpts ? [rootEnv, trOpts] : [rootEnv];
    return new LooseEnvify(envs);
  };
};

function LooseEnvify(envs) {
  stream.Transform.call(this);
  this._data = '';
  this._envs = envs;
}
util.inherits(LooseEnvify, stream.Transform);

LooseEnvify.prototype._transform = function(buf, enc, cb) {
  this._data += buf;
  cb();
};

LooseEnvify.prototype._flush = function(cb) {
  var replaced = replace(this._data, this._envs);
  this.push(replaced);
  cb();
};
";
        
        $__internal_6a5bc073da140f68641dc85dcbdc32642a2471c017507ab8dd463f8eb637d39f->leave($__internal_6a5bc073da140f68641dc85dcbdc32642a2471c017507ab8dd463f8eb637d39f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loose-envify/loose-envify.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var stream = require('stream');
var util = require('util');
var replace = require('./replace');

var jsonExtRe = /\\.json\$/;

module.exports = function(rootEnv) {
  rootEnv = rootEnv || process.env;
  return function (file, trOpts) {
    if (jsonExtRe.test(file)) {
      return stream.PassThrough();
    }
    var envs = trOpts ? [rootEnv, trOpts] : [rootEnv];
    return new LooseEnvify(envs);
  };
};

function LooseEnvify(envs) {
  stream.Transform.call(this);
  this._data = '';
  this._envs = envs;
}
util.inherits(LooseEnvify, stream.Transform);

LooseEnvify.prototype._transform = function(buf, enc, cb) {
  this._data += buf;
  cb();
};

LooseEnvify.prototype._flush = function(cb) {
  var replaced = replace(this._data, this._envs);
  this.push(replaced);
  cb();
};
", "node_modules/loose-envify/loose-envify.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loose-envify/loose-envify.js");
    }
}
