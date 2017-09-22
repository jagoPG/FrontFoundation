<?php

/* node_modules/errno/build.js */
class __TwigTemplate_953c1006c0fb1c74db1418f5b624c5ffe5c59abd6709a88bb6db7a39ac1e3a2c extends Twig_Template
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
        $__internal_265f7fe8b045f0405b77f807de5e08184848934248a5cd3654187ac3534d6eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265f7fe8b045f0405b77f807de5e08184848934248a5cd3654187ac3534d6eac->enter($__internal_265f7fe8b045f0405b77f807de5e08184848934248a5cd3654187ac3534d6eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/errno/build.js"));

        // line 1
        echo "#!/usr/bin/env node

var request   = require('request')
  , fs        = require('fs')

  , uvheadloc = 'https://raw.github.com/joyent/libuv/master/include/uv.h'
  , defreg    = /^\\s*XX\\(\\s*([\\-\\d]+),\\s*([A-Z]+),\\s*\"([^\"]*)\"\\s*\\)\\s*\\\\?\$/


request(uvheadloc, function (err, response) {
  if (err)
    throw err

  var data, out

  data = response.body
    .split('\\n')
    .map(function (line) { return line.match(defreg) })
    .filter(function (match) { return match })
    .map(function (match) { return {
        errno: parseInt(match[1], 10)
      , code: match[2]
      , description: match[3]
    }})

  out = 'var all = module.exports.all = ' + JSON.stringify(data, 0, 1) + '\\n\\n'

  out += '\\nmodule.exports.errno = {\\n    '
    + data.map(function (e, i) {
        return '\\'' + e.errno + '\\': all[' + i + ']'
      }).join('\\n  , ')
    + '\\n}\\n\\n'

  out += '\\nmodule.exports.code = {\\n    '
    + data.map(function (e, i) {
        return '\\'' + e.code + '\\': all[' + i + ']'
      }).join('\\n  , ')
    + '\\n}\\n\\n'

  out += '\\nmodule.exports.custom = require(\"./custom\")(module.exports)\\n'

  fs.writeFile('errno.js', out)
})";
        
        $__internal_265f7fe8b045f0405b77f807de5e08184848934248a5cd3654187ac3534d6eac->leave($__internal_265f7fe8b045f0405b77f807de5e08184848934248a5cd3654187ac3534d6eac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/errno/build.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node

var request   = require('request')
  , fs        = require('fs')

  , uvheadloc = 'https://raw.github.com/joyent/libuv/master/include/uv.h'
  , defreg    = /^\\s*XX\\(\\s*([\\-\\d]+),\\s*([A-Z]+),\\s*\"([^\"]*)\"\\s*\\)\\s*\\\\?\$/


request(uvheadloc, function (err, response) {
  if (err)
    throw err

  var data, out

  data = response.body
    .split('\\n')
    .map(function (line) { return line.match(defreg) })
    .filter(function (match) { return match })
    .map(function (match) { return {
        errno: parseInt(match[1], 10)
      , code: match[2]
      , description: match[3]
    }})

  out = 'var all = module.exports.all = ' + JSON.stringify(data, 0, 1) + '\\n\\n'

  out += '\\nmodule.exports.errno = {\\n    '
    + data.map(function (e, i) {
        return '\\'' + e.errno + '\\': all[' + i + ']'
      }).join('\\n  , ')
    + '\\n}\\n\\n'

  out += '\\nmodule.exports.code = {\\n    '
    + data.map(function (e, i) {
        return '\\'' + e.code + '\\': all[' + i + ']'
      }).join('\\n  , ')
    + '\\n}\\n\\n'

  out += '\\nmodule.exports.custom = require(\"./custom\")(module.exports)\\n'

  fs.writeFile('errno.js', out)
})", "node_modules/errno/build.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/errno/build.js");
    }
}
