<?php

/* node_modules/loose-envify/replace.js */
class __TwigTemplate_bb314602c5bf620fcd454fd059fa5a255e6b49e57cc6578d9f78dcaa97eaf84b extends Twig_Template
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
        $__internal_cf2e48e0f34c1e6bcc1099997a1e9110894cb347da42a148544e92f9d572095b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2e48e0f34c1e6bcc1099997a1e9110894cb347da42a148544e92f9d572095b->enter($__internal_cf2e48e0f34c1e6bcc1099997a1e9110894cb347da42a148544e92f9d572095b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loose-envify/replace.js"));

        // line 1
        echo "'use strict';

var jsTokens = require('js-tokens').default;

var processEnvRe = /\\bprocess\\.env\\.[_\$a-zA-Z][\$\\w]+\\b/;
var spaceOrCommentRe = /^(?:\\s|\\/[/*])/;

function replace(src, envs) {
  if (!processEnvRe.test(src)) {
    return src;
  }

  var out = [];
  var purge = envs.some(function(env) {
    return env._ && env._.indexOf('purge') !== -1;
  });

  jsTokens.lastIndex = 0
  var parts = src.match(jsTokens);

  for (var i = 0; i < parts.length; i++) {
    if (parts[i    ] === 'process' &&
        parts[i + 1] === '.' &&
        parts[i + 2] === 'env' &&
        parts[i + 3] === '.') {
      var prevCodeToken = getAdjacentCodeToken(-1, parts, i);
      var nextCodeToken = getAdjacentCodeToken(1, parts, i + 4);
      var replacement = getReplacementString(envs, parts[i + 4], purge);
      if (prevCodeToken !== '.' &&
          nextCodeToken !== '.' &&
          nextCodeToken !== '=' &&
          typeof replacement === 'string') {
        out.push(replacement);
        i += 4;
        continue;
      }
    }
    out.push(parts[i]);
  }

  return out.join('');
}

function getAdjacentCodeToken(dir, parts, i) {
  while (true) {
    var part = parts[i += dir];
    if (!spaceOrCommentRe.test(part)) {
      return part;
    }
  }
}

function getReplacementString(envs, name, purge) {
  for (var j = 0; j < envs.length; j++) {
    var env = envs[j];
    if (typeof env[name] !== 'undefined') {
      return JSON.stringify(env[name]);
    }
  }
  if (purge) {
    return 'undefined';
  }
}

module.exports = replace;
";
        
        $__internal_cf2e48e0f34c1e6bcc1099997a1e9110894cb347da42a148544e92f9d572095b->leave($__internal_cf2e48e0f34c1e6bcc1099997a1e9110894cb347da42a148544e92f9d572095b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loose-envify/replace.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var jsTokens = require('js-tokens').default;

var processEnvRe = /\\bprocess\\.env\\.[_\$a-zA-Z][\$\\w]+\\b/;
var spaceOrCommentRe = /^(?:\\s|\\/[/*])/;

function replace(src, envs) {
  if (!processEnvRe.test(src)) {
    return src;
  }

  var out = [];
  var purge = envs.some(function(env) {
    return env._ && env._.indexOf('purge') !== -1;
  });

  jsTokens.lastIndex = 0
  var parts = src.match(jsTokens);

  for (var i = 0; i < parts.length; i++) {
    if (parts[i    ] === 'process' &&
        parts[i + 1] === '.' &&
        parts[i + 2] === 'env' &&
        parts[i + 3] === '.') {
      var prevCodeToken = getAdjacentCodeToken(-1, parts, i);
      var nextCodeToken = getAdjacentCodeToken(1, parts, i + 4);
      var replacement = getReplacementString(envs, parts[i + 4], purge);
      if (prevCodeToken !== '.' &&
          nextCodeToken !== '.' &&
          nextCodeToken !== '=' &&
          typeof replacement === 'string') {
        out.push(replacement);
        i += 4;
        continue;
      }
    }
    out.push(parts[i]);
  }

  return out.join('');
}

function getAdjacentCodeToken(dir, parts, i) {
  while (true) {
    var part = parts[i += dir];
    if (!spaceOrCommentRe.test(part)) {
      return part;
    }
  }
}

function getReplacementString(envs, name, purge) {
  for (var j = 0; j < envs.length; j++) {
    var env = envs[j];
    if (typeof env[name] !== 'undefined') {
      return JSON.stringify(env[name]);
    }
  }
  if (purge) {
    return 'undefined';
  }
}

module.exports = replace;
", "node_modules/loose-envify/replace.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loose-envify/replace.js");
    }
}
