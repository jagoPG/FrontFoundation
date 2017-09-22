<?php

/* node_modules/preserve/test.js */
class __TwigTemplate_35850351fbf7f6d6d9ac4f522a4fc618a6bdb6a19bdce1480d98b2c67cb9c5e1 extends Twig_Template
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
        $__internal_cd7b0f7f0460f4f01137981678391205e158ac3642a6fe3672105b86f4153c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7b0f7f0460f4f01137981678391205e158ac3642a6fe3672105b86f4153c5c->enter($__internal_cd7b0f7f0460f4f01137981678391205e158ac3642a6fe3672105b86f4153c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/preserve/test.js"));

        // line 1
        echo "/*!
 * preserve <https://github.com/jonschlinkert/preserve>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License
 */

'use strict';

var should = require('should');
var tokens = require('./');

var re = /<%=\\s*[^>]+%>/g;
var pretty = function(str) {
  return require('js-beautify').html(str, {
    indent_char: ' ',
    indent_size: 2,
  });
};

describe('preserve tokens', function () {
  var testRe = /__ID.{5}__\\n__ID.{5}__\\n__ID.{5}__/;
  var re = /<%=\\s*[^>]+%>/g;

  it('should (e.g. shouldn\\'t, but will) mangle tokens in the given string', function () {
    var html = pretty('<ul><li><%= name %></li></ul>');
    html.should.equal('<ul>\\n  <li>\\n    <%=n ame %>\\n  </li>\\n</ul>');
  });

  it('should preserve tokens in the given string', function () {
    var html = tokens.after(pretty(tokens.before('<ul><li><%= name %></li></ul>', re)));
    html.should.equal('<ul>\\n  <li><%= name %></li>\\n</ul>');
  });

  describe('.before()', function () {
    it('should replace matches with placeholder tokens:', function () {
      tokens.before('<%= a %>\\n<%= b %>\\n<%= c %>', re).should.match(testRe);
    });
  });

  describe('tokens.after()', function () {
    it('should replace placeholder tokens with original values:', function () {
      var before = tokens.before('<%= a %>\\n<%= b %>\\n<%= c %>', re);
      before.should.match(testRe);
      tokens.after(before).should.equal('<%= a %>\\n<%= b %>\\n<%= c %>');
    });
  });
});
";
        
        $__internal_cd7b0f7f0460f4f01137981678391205e158ac3642a6fe3672105b86f4153c5c->leave($__internal_cd7b0f7f0460f4f01137981678391205e158ac3642a6fe3672105b86f4153c5c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/preserve/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * preserve <https://github.com/jonschlinkert/preserve>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License
 */

'use strict';

var should = require('should');
var tokens = require('./');

var re = /<%=\\s*[^>]+%>/g;
var pretty = function(str) {
  return require('js-beautify').html(str, {
    indent_char: ' ',
    indent_size: 2,
  });
};

describe('preserve tokens', function () {
  var testRe = /__ID.{5}__\\n__ID.{5}__\\n__ID.{5}__/;
  var re = /<%=\\s*[^>]+%>/g;

  it('should (e.g. shouldn\\'t, but will) mangle tokens in the given string', function () {
    var html = pretty('<ul><li><%= name %></li></ul>');
    html.should.equal('<ul>\\n  <li>\\n    <%=n ame %>\\n  </li>\\n</ul>');
  });

  it('should preserve tokens in the given string', function () {
    var html = tokens.after(pretty(tokens.before('<ul><li><%= name %></li></ul>', re)));
    html.should.equal('<ul>\\n  <li><%= name %></li>\\n</ul>');
  });

  describe('.before()', function () {
    it('should replace matches with placeholder tokens:', function () {
      tokens.before('<%= a %>\\n<%= b %>\\n<%= c %>', re).should.match(testRe);
    });
  });

  describe('tokens.after()', function () {
    it('should replace placeholder tokens with original values:', function () {
      var before = tokens.before('<%= a %>\\n<%= b %>\\n<%= c %>', re);
      before.should.match(testRe);
      tokens.after(before).should.equal('<%= a %>\\n<%= b %>\\n<%= c %>');
    });
  });
});
", "node_modules/preserve/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/preserve/test.js");
    }
}
