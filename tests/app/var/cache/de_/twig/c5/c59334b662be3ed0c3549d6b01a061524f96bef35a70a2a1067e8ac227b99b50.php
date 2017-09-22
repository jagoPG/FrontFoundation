<?php

/* node_modules/escope/src/definition.js */
class __TwigTemplate_2f7bb8d812d88cd2bd6b748cd76ba9e084a722eda8fec653b135021918beb9e0 extends Twig_Template
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
        $__internal_99d36e8b1ac71ba5ad2ddca2bf73c082a3b68a75822e487b705ba095750153b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d36e8b1ac71ba5ad2ddca2bf73c082a3b68a75822e487b705ba095750153b0->enter($__internal_99d36e8b1ac71ba5ad2ddca2bf73c082a3b68a75822e487b705ba095750153b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/escope/src/definition.js"));

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

import Variable from './variable';

/**
 * @class Definition
 */
export default class Definition {
    constructor(type, name, node, parent, index, kind) {
        /**
         * @member {String} Definition#type - type of the occurrence (e.g. \"Parameter\", \"Variable\", ...).
         */
        this.type = type;
        /**
         * @member {esprima.Identifier} Definition#name - the identifier AST node of the occurrence.
         */
        this.name = name;
        /**
         * @member {esprima.Node} Definition#node - the enclosing node of the identifier.
         */
        this.node = node;
        /**
         * @member {esprima.Node?} Definition#parent - the enclosing statement node of the identifier.
         */
        this.parent = parent;
        /**
         * @member {Number?} Definition#index - the index in the declaration statement.
         */
        this.index = index;
        /**
         * @member {String?} Definition#kind - the kind of the declaration statement.
         */
        this.kind = kind;
    }
}

/**
 * @class ParameterDefinition
 */
class ParameterDefinition extends Definition {
    constructor(name, node, index, rest) {
        super(Variable.Parameter, name, node, null, index, null);
        /**
         * Whether the parameter definition is a part of a rest parameter.
         * @member {boolean} ParameterDefinition#rest
         */
        this.rest = rest;
    }
}

export {
    ParameterDefinition,
    Definition
}

/* vim: set sw=4 ts=4 et tw=80 : */
";
        
        $__internal_99d36e8b1ac71ba5ad2ddca2bf73c082a3b68a75822e487b705ba095750153b0->leave($__internal_99d36e8b1ac71ba5ad2ddca2bf73c082a3b68a75822e487b705ba095750153b0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/escope/src/definition.js";
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

import Variable from './variable';

/**
 * @class Definition
 */
export default class Definition {
    constructor(type, name, node, parent, index, kind) {
        /**
         * @member {String} Definition#type - type of the occurrence (e.g. \"Parameter\", \"Variable\", ...).
         */
        this.type = type;
        /**
         * @member {esprima.Identifier} Definition#name - the identifier AST node of the occurrence.
         */
        this.name = name;
        /**
         * @member {esprima.Node} Definition#node - the enclosing node of the identifier.
         */
        this.node = node;
        /**
         * @member {esprima.Node?} Definition#parent - the enclosing statement node of the identifier.
         */
        this.parent = parent;
        /**
         * @member {Number?} Definition#index - the index in the declaration statement.
         */
        this.index = index;
        /**
         * @member {String?} Definition#kind - the kind of the declaration statement.
         */
        this.kind = kind;
    }
}

/**
 * @class ParameterDefinition
 */
class ParameterDefinition extends Definition {
    constructor(name, node, index, rest) {
        super(Variable.Parameter, name, node, null, index, null);
        /**
         * Whether the parameter definition is a part of a rest parameter.
         * @member {boolean} ParameterDefinition#rest
         */
        this.rest = rest;
    }
}

export {
    ParameterDefinition,
    Definition
}

/* vim: set sw=4 ts=4 et tw=80 : */
", "node_modules/escope/src/definition.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/escope/src/definition.js");
    }
}
