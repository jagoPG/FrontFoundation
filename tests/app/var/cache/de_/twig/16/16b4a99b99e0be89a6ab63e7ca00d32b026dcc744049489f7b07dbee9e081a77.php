<?php

/* node_modules/babel-types/lib/definitions/flow.js */
class __TwigTemplate_f81729a2c7188ceab55030cb117643066cf36970e35b0193986bd25420f0bd39 extends Twig_Template
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
        $__internal_9bd4b608f79bf0a7cce628923e11d46aea5f83d57f18009b9ba14058e115e3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd4b608f79bf0a7cce628923e11d46aea5f83d57f18009b9ba14058e115e3d2->enter($__internal_9bd4b608f79bf0a7cce628923e11d46aea5f83d57f18009b9ba14058e115e3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-types/lib/definitions/flow.js"));

        // line 1
        echo "\"use strict\";

var _index = require(\"./index\");

var _index2 = _interopRequireDefault(_index);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(0, _index2.default)(\"AnyTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"],
  fields: {}
});

(0, _index2.default)(\"ArrayTypeAnnotation\", {
  visitor: [\"elementType\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"BooleanTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"],
  fields: {}
});

(0, _index2.default)(\"BooleanLiteralTypeAnnotation\", {
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"NullLiteralTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"],
  fields: {}
});

(0, _index2.default)(\"ClassImplements\", {
  visitor: [\"id\", \"typeParameters\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"ClassProperty\", {
  visitor: [\"key\", \"value\", \"typeAnnotation\", \"decorators\"],
  builder: [\"key\", \"value\", \"typeAnnotation\", \"decorators\", \"computed\"],
  aliases: [\"Property\"],
  fields: {
    computed: {
      validate: (0, _index.assertValueType)(\"boolean\"),
      default: false
    }
  }
});

(0, _index2.default)(\"DeclareClass\", {
  visitor: [\"id\", \"typeParameters\", \"extends\", \"body\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"DeclareFunction\", {
  visitor: [\"id\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"DeclareInterface\", {
  visitor: [\"id\", \"typeParameters\", \"extends\", \"body\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"DeclareModule\", {
  visitor: [\"id\", \"body\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"DeclareModuleExports\", {
  visitor: [\"typeAnnotation\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"DeclareTypeAlias\", {
  visitor: [\"id\", \"typeParameters\", \"right\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"DeclareOpaqueType\", {
  visitor: [\"id\", \"typeParameters\", \"supertype\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"DeclareVariable\", {
  visitor: [\"id\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"DeclareExportDeclaration\", {
  visitor: [\"declaration\", \"specifiers\", \"source\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"ExistentialTypeParam\", {
  aliases: [\"Flow\"]
});

(0, _index2.default)(\"FunctionTypeAnnotation\", {
  visitor: [\"typeParameters\", \"params\", \"rest\", \"returnType\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"FunctionTypeParam\", {
  visitor: [\"name\", \"typeAnnotation\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"GenericTypeAnnotation\", {
  visitor: [\"id\", \"typeParameters\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"InterfaceExtends\", {
  visitor: [\"id\", \"typeParameters\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"InterfaceDeclaration\", {
  visitor: [\"id\", \"typeParameters\", \"extends\", \"body\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"IntersectionTypeAnnotation\", {
  visitor: [\"types\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"MixedTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"]
});

(0, _index2.default)(\"EmptyTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"]
});

(0, _index2.default)(\"NullableTypeAnnotation\", {
  visitor: [\"typeAnnotation\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"NumericLiteralTypeAnnotation\", {
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"NumberTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"],
  fields: {}
});

(0, _index2.default)(\"StringLiteralTypeAnnotation\", {
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"StringTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"],
  fields: {}
});

(0, _index2.default)(\"ThisTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"],
  fields: {}
});

(0, _index2.default)(\"TupleTypeAnnotation\", {
  visitor: [\"types\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"TypeofTypeAnnotation\", {
  visitor: [\"argument\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"TypeAlias\", {
  visitor: [\"id\", \"typeParameters\", \"right\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"OpaqueType\", {
  visitor: [\"id\", \"typeParameters\", \"impltype\", \"supertype\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"TypeAnnotation\", {
  visitor: [\"typeAnnotation\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"TypeCastExpression\", {
  visitor: [\"expression\", \"typeAnnotation\"],
  aliases: [\"Flow\", \"ExpressionWrapper\", \"Expression\"],
  fields: {}
});

(0, _index2.default)(\"TypeParameter\", {
  visitor: [\"bound\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"TypeParameterDeclaration\", {
  visitor: [\"params\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"TypeParameterInstantiation\", {
  visitor: [\"params\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"ObjectTypeAnnotation\", {
  visitor: [\"properties\", \"indexers\", \"callProperties\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"ObjectTypeCallProperty\", {
  visitor: [\"value\"],
  aliases: [\"Flow\", \"UserWhitespacable\"],
  fields: {}
});

(0, _index2.default)(\"ObjectTypeIndexer\", {
  visitor: [\"id\", \"key\", \"value\"],
  aliases: [\"Flow\", \"UserWhitespacable\"],
  fields: {}
});

(0, _index2.default)(\"ObjectTypeProperty\", {
  visitor: [\"key\", \"value\"],
  aliases: [\"Flow\", \"UserWhitespacable\"],
  fields: {}
});

(0, _index2.default)(\"ObjectTypeSpreadProperty\", {
  visitor: [\"argument\"],
  aliases: [\"Flow\", \"UserWhitespacable\"],
  fields: {}
});

(0, _index2.default)(\"QualifiedTypeIdentifier\", {
  visitor: [\"id\", \"qualification\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"UnionTypeAnnotation\", {
  visitor: [\"types\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"VoidTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"],
  fields: {}
});";
        
        $__internal_9bd4b608f79bf0a7cce628923e11d46aea5f83d57f18009b9ba14058e115e3d2->leave($__internal_9bd4b608f79bf0a7cce628923e11d46aea5f83d57f18009b9ba14058e115e3d2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-types/lib/definitions/flow.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var _index = require(\"./index\");

var _index2 = _interopRequireDefault(_index);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(0, _index2.default)(\"AnyTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"],
  fields: {}
});

(0, _index2.default)(\"ArrayTypeAnnotation\", {
  visitor: [\"elementType\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"BooleanTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"],
  fields: {}
});

(0, _index2.default)(\"BooleanLiteralTypeAnnotation\", {
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"NullLiteralTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"],
  fields: {}
});

(0, _index2.default)(\"ClassImplements\", {
  visitor: [\"id\", \"typeParameters\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"ClassProperty\", {
  visitor: [\"key\", \"value\", \"typeAnnotation\", \"decorators\"],
  builder: [\"key\", \"value\", \"typeAnnotation\", \"decorators\", \"computed\"],
  aliases: [\"Property\"],
  fields: {
    computed: {
      validate: (0, _index.assertValueType)(\"boolean\"),
      default: false
    }
  }
});

(0, _index2.default)(\"DeclareClass\", {
  visitor: [\"id\", \"typeParameters\", \"extends\", \"body\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"DeclareFunction\", {
  visitor: [\"id\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"DeclareInterface\", {
  visitor: [\"id\", \"typeParameters\", \"extends\", \"body\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"DeclareModule\", {
  visitor: [\"id\", \"body\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"DeclareModuleExports\", {
  visitor: [\"typeAnnotation\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"DeclareTypeAlias\", {
  visitor: [\"id\", \"typeParameters\", \"right\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"DeclareOpaqueType\", {
  visitor: [\"id\", \"typeParameters\", \"supertype\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"DeclareVariable\", {
  visitor: [\"id\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"DeclareExportDeclaration\", {
  visitor: [\"declaration\", \"specifiers\", \"source\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"ExistentialTypeParam\", {
  aliases: [\"Flow\"]
});

(0, _index2.default)(\"FunctionTypeAnnotation\", {
  visitor: [\"typeParameters\", \"params\", \"rest\", \"returnType\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"FunctionTypeParam\", {
  visitor: [\"name\", \"typeAnnotation\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"GenericTypeAnnotation\", {
  visitor: [\"id\", \"typeParameters\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"InterfaceExtends\", {
  visitor: [\"id\", \"typeParameters\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"InterfaceDeclaration\", {
  visitor: [\"id\", \"typeParameters\", \"extends\", \"body\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"IntersectionTypeAnnotation\", {
  visitor: [\"types\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"MixedTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"]
});

(0, _index2.default)(\"EmptyTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"]
});

(0, _index2.default)(\"NullableTypeAnnotation\", {
  visitor: [\"typeAnnotation\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"NumericLiteralTypeAnnotation\", {
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"NumberTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"],
  fields: {}
});

(0, _index2.default)(\"StringLiteralTypeAnnotation\", {
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"StringTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"],
  fields: {}
});

(0, _index2.default)(\"ThisTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"],
  fields: {}
});

(0, _index2.default)(\"TupleTypeAnnotation\", {
  visitor: [\"types\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"TypeofTypeAnnotation\", {
  visitor: [\"argument\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"TypeAlias\", {
  visitor: [\"id\", \"typeParameters\", \"right\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"OpaqueType\", {
  visitor: [\"id\", \"typeParameters\", \"impltype\", \"supertype\"],
  aliases: [\"Flow\", \"FlowDeclaration\", \"Statement\", \"Declaration\"],
  fields: {}
});

(0, _index2.default)(\"TypeAnnotation\", {
  visitor: [\"typeAnnotation\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"TypeCastExpression\", {
  visitor: [\"expression\", \"typeAnnotation\"],
  aliases: [\"Flow\", \"ExpressionWrapper\", \"Expression\"],
  fields: {}
});

(0, _index2.default)(\"TypeParameter\", {
  visitor: [\"bound\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"TypeParameterDeclaration\", {
  visitor: [\"params\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"TypeParameterInstantiation\", {
  visitor: [\"params\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"ObjectTypeAnnotation\", {
  visitor: [\"properties\", \"indexers\", \"callProperties\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"ObjectTypeCallProperty\", {
  visitor: [\"value\"],
  aliases: [\"Flow\", \"UserWhitespacable\"],
  fields: {}
});

(0, _index2.default)(\"ObjectTypeIndexer\", {
  visitor: [\"id\", \"key\", \"value\"],
  aliases: [\"Flow\", \"UserWhitespacable\"],
  fields: {}
});

(0, _index2.default)(\"ObjectTypeProperty\", {
  visitor: [\"key\", \"value\"],
  aliases: [\"Flow\", \"UserWhitespacable\"],
  fields: {}
});

(0, _index2.default)(\"ObjectTypeSpreadProperty\", {
  visitor: [\"argument\"],
  aliases: [\"Flow\", \"UserWhitespacable\"],
  fields: {}
});

(0, _index2.default)(\"QualifiedTypeIdentifier\", {
  visitor: [\"id\", \"qualification\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"UnionTypeAnnotation\", {
  visitor: [\"types\"],
  aliases: [\"Flow\"],
  fields: {}
});

(0, _index2.default)(\"VoidTypeAnnotation\", {
  aliases: [\"Flow\", \"FlowBaseAnnotation\"],
  fields: {}
});", "node_modules/babel-types/lib/definitions/flow.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-types/lib/definitions/flow.js");
    }
}
