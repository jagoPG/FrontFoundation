<?php

/* node_modules/escope/third_party/espree.js */
class __TwigTemplate_4c4cc28e31b80e660e9f3c6685e0ae8b1a3471d22b9c2134332c3cf84fdc8f20 extends Twig_Template
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
        $__internal_4e17b5beef7d2cc9e9d76cef6cc15543ac0a7e22de08c495977ee32205cde0d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e17b5beef7d2cc9e9d76cef6cc15543ac0a7e22de08c495977ee32205cde0d2->enter($__internal_4e17b5beef7d2cc9e9d76cef6cc15543ac0a7e22de08c495977ee32205cde0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/escope/third_party/espree.js"));

        // line 1
        echo "/*
  Copyright (C) 2015 Yusuke Suzuki <utatane.tea@gmail.com>

  Redistribution and use in source and binary forms, with or without
  modification, are permitted provided that the following conditions are met:

    * Redistributions of source code must retain the above copyright
      notice, this list of conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright
      notice, this list of conditions and the following disclaimer in the
      documentation and/or other materials provided with the distribution.

  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS \"AS IS\"
  AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
  ARE DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> BE LIABLE FOR ANY
  DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
  (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
  LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
  ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
  (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF
  THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

var espree = require('espree');

module.exports = function (code) {
    return espree.parse(code, {

        // attach range information to each node
        range: true,

        // attach line/column location information to each node
        loc: true,

        // create a top-level comments array containing all comments
        comments: true,

        // attach comments to the closest relevant node as leadingComments and
        // trailingComments
        attachComment: true,

        // create a top-level tokens array containing all tokens
        tokens: true,

        // try to continue parsing if an error is encountered, store errors in a
        // top-level errors array
        tolerant: true,

        // enable es6 features.
        ecmaVersion: 6,
        sourceType: \"module\"
    });
};

/* vim: set sw=4 ts=4 et tw=80 : */
";
        
        $__internal_4e17b5beef7d2cc9e9d76cef6cc15543ac0a7e22de08c495977ee32205cde0d2->leave($__internal_4e17b5beef7d2cc9e9d76cef6cc15543ac0a7e22de08c495977ee32205cde0d2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/escope/third_party/espree.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
  Copyright (C) 2015 Yusuke Suzuki <utatane.tea@gmail.com>

  Redistribution and use in source and binary forms, with or without
  modification, are permitted provided that the following conditions are met:

    * Redistributions of source code must retain the above copyright
      notice, this list of conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright
      notice, this list of conditions and the following disclaimer in the
      documentation and/or other materials provided with the distribution.

  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS \"AS IS\"
  AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
  ARE DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> BE LIABLE FOR ANY
  DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
  (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
  LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
  ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
  (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF
  THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

var espree = require('espree');

module.exports = function (code) {
    return espree.parse(code, {

        // attach range information to each node
        range: true,

        // attach line/column location information to each node
        loc: true,

        // create a top-level comments array containing all comments
        comments: true,

        // attach comments to the closest relevant node as leadingComments and
        // trailingComments
        attachComment: true,

        // create a top-level tokens array containing all tokens
        tokens: true,

        // try to continue parsing if an error is encountered, store errors in a
        // top-level errors array
        tolerant: true,

        // enable es6 features.
        ecmaVersion: 6,
        sourceType: \"module\"
    });
};

/* vim: set sw=4 ts=4 et tw=80 : */
", "node_modules/escope/third_party/espree.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/escope/third_party/espree.js");
    }
}
