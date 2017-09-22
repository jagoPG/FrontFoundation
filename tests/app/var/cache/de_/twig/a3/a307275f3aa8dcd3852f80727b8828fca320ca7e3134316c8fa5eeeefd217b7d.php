<?php

/* node_modules/es-abstract/operations/2016.js */
class __TwigTemplate_cea642b4829be03dd0a814812b3df3a69dd125e60710c6704d1b7ff0f64871b5 extends Twig_Template
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
        $__internal_e8dbc893f1f2f1b06c9c2d9ee9ebd51756857547dde2225e0dda68ef10f5812d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8dbc893f1f2f1b06c9c2d9ee9ebd51756857547dde2225e0dda68ef10f5812d->enter($__internal_e8dbc893f1f2f1b06c9c2d9ee9ebd51756857547dde2225e0dda68ef10f5812d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/operations/2016.js"));

        // line 1
        echo "'use strict';

module.exports = {
\tIsPropertyDescriptor: 'http://ecma-international.org/ecma-262/7.0/#sec-property-descriptor-specification-type',
\tIsAccessorDescriptor: 'http://ecma-international.org/ecma-262/7.0/#sec-isaccessordescriptor',
\tIsDataDescriptor: 'http://ecma-international.org/ecma-262/7.0/#sec-isdatadescriptor',
\tIsGenericDescriptor: 'http://ecma-international.org/ecma-262/7.0/#sec-isgenericdescriptor',
\tFromPropertyDescriptor: 'http://ecma-international.org/ecma-262/7.0/#sec-frompropertydescriptor',
\tToPropertyDescriptor: 'http://ecma-international.org/ecma-262/7.0/#sec-topropertydescriptor',
\tCompletePropertyDescriptor: 'http://ecma-international.org/ecma-262/7.0/#sec-completepropertydescriptor',
\tToPrimitive: 'http://ecma-international.org/ecma-262/7.0/#sec-toprimitive',
\tToBoolean: 'http://ecma-international.org/ecma-262/7.0/#sec-toboolean',
\tToNumber: 'http://ecma-international.org/ecma-262/7.0/#sec-tonumber',
\tToInteger: 'http://ecma-international.org/ecma-262/7.0/#sec-tointeger',
\tToInt32: 'http://ecma-international.org/ecma-262/7.0/#sec-toint32',
\tToUint32: 'http://ecma-international.org/ecma-262/7.0/#sec-touint32',
\tToInt16: 'http://ecma-international.org/ecma-262/7.0/#sec-toint16',
\tToUint16: 'http://ecma-international.org/ecma-262/7.0/#sec-touint16',
\tToInt8: 'http://ecma-international.org/ecma-262/7.0/#sec-toint8',
\tToUint8: 'http://ecma-international.org/ecma-262/7.0/#sec-touint8',
\tToUint8Clamp: 'http://ecma-international.org/ecma-262/7.0/#sec-touint8clamp',
\tToString: 'http://ecma-international.org/ecma-262/7.0/#sec-tostring',
\tToObject: 'http://ecma-international.org/ecma-262/7.0/#sec-toobject',
\tToPropertyKey: 'http://ecma-international.org/ecma-262/7.0/#sec-topropertykey',
\tToLength: 'http://ecma-international.org/ecma-262/7.0/#sec-tolength',
\tCanonicalNumericIndexString: 'http://ecma-international.org/ecma-262/7.0/#sec-canonicalnumericindexstring',
\tRequireObjectCoercible: 'http://ecma-international.org/ecma-262/7.0/#sec-requireobjectcoercible',
\tIsArray: 'http://ecma-international.org/ecma-262/7.0/#sec-isarray',
\tIsCallable: 'http://ecma-international.org/ecma-262/7.0/#sec-iscallable',
\tIsConstructor: 'http://ecma-international.org/ecma-262/7.0/#sec-isconstructor',
\tIsExtensible: 'http://ecma-international.org/ecma-262/7.0/#sec-isextensible-o',
\tIsInteger: 'http://ecma-international.org/ecma-262/7.0/#sec-isinteger',
\tIsPropertyKey: 'http://ecma-international.org/ecma-262/7.0/#sec-ispropertykey',
\tIsRegExp: 'http://ecma-international.org/ecma-262/7.0/#sec-isregexp',
\tSameValue: 'http://ecma-international.org/ecma-262/7.0/#sec-samevalue',
\tSameValueZero: 'http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero',
\tSameValueNonNumber: 'http://ecma-international.org/ecma-262/7.0/#sec-samevaluenonnumber',
\tGet: 'http://ecma-international.org/ecma-262/7.0/#sec-get-o-p',
\tGetV: 'http://ecma-international.org/ecma-262/7.0/#sec-getv',
\tSet: 'http://ecma-international.org/ecma-262/7.0/#sec-set-o-p-v-throw',
\tCreateDataProperty: 'http://ecma-international.org/ecma-262/7.0/#sec-createdataproperty',
\tCreateMethodProperty: 'http://ecma-international.org/ecma-262/7.0/#sec-createmethodproperty',
\tCreateDataPropertyOrThrow: 'http://ecma-international.org/ecma-262/7.0/#sec-createdatapropertyorthrow',
\tDefinePropertyOrThrow: 'http://ecma-international.org/ecma-262/7.0/#sec-definepropertyorthrow',
\tDeletePropertyOrThrow: 'http://ecma-international.org/ecma-262/7.0/#sec-deletepropertyorthrow',
\tGetMethod: 'http://ecma-international.org/ecma-262/7.0/#sec-getmethod',
\tHasProperty: 'http://ecma-international.org/ecma-262/7.0/#sec-hasproperty',
\tHasOwnProperty: 'http://ecma-international.org/ecma-262/7.0/#sec-hasownproperty',
\tCall: 'http://ecma-international.org/ecma-262/7.0/#sec-call',
\tConstruct: 'http://ecma-international.org/ecma-262/7.0/#sec-construct',
\tSetIntegrityLevel: 'http://ecma-international.org/ecma-262/7.0/#sec-setintegritylevel',
\tTestIntegrityLevel: 'http://ecma-international.org/ecma-262/7.0/#sec-testintegritylevel',
\tCreateArrayFromList: 'http://ecma-international.org/ecma-262/7.0/#sec-createarrayfromlist',
\tCreateListFromArrayLike: 'http://ecma-international.org/ecma-262/7.0/#sec-createlistfromarraylike',
\tInvoke: 'http://ecma-international.org/ecma-262/7.0/#sec-invoke',
\tOrdinaryHasInstance: 'http://ecma-international.org/ecma-262/7.0/#sec-ordinaryhasinstance',
\tSpeciesConstructor: 'http://ecma-international.org/ecma-262/7.0/#sec-speciesconstructor',
\tEnumerableOwnNames: 'http://ecma-international.org/ecma-262/7.0/#sec-enumerableownnames',
\tGetIterator: 'http://ecma-international.org/ecma-262/7.0/#sec-getiterator',
\tIteratorNext: 'http://ecma-international.org/ecma-262/7.0/#sec-iteratornext',
\tIteratorComplete: 'http://ecma-international.org/ecma-262/7.0/#sec-iteratorcomplete',
\tIteratorValue: 'http://ecma-international.org/ecma-262/7.0/#sec-iteratorvalue',
\tIteratorStep: 'http://ecma-international.org/ecma-262/7.0/#sec-iteratorstep',
\tIteratorClose: 'http://ecma-international.org/ecma-262/7.0/#sec-iteratorclose',
\tCreateIterResultObject: 'http://ecma-international.org/ecma-262/7.0/#sec-createiterresultobject',
\tCreateListIterator: 'http://ecma-international.org/ecma-262/7.0/#sec-createlistiterator',
\tType: 'http://ecma-international.org/ecma-262/7.0/#sec-ecmascript-language-types',
\tthisNumberValue: 'http://ecma-international.org/ecma-262/7.0/#sec-properties-of-the-number-prototype-object',
\tthisTimeValue: 'http://ecma-international.org/ecma-262/7.0/#sec-properties-of-the-date-prototype-object',
\tthisStringValue: 'http://ecma-international.org/ecma-262/7.0/#sec-properties-of-the-string-prototype-object',
\tRegExpExec: 'http://ecma-international.org/ecma-262/7.0/#sec-regexpexec',
\tRegExpBuiltinExec: 'http://ecma-international.org/ecma-262/7.0/#sec-regexpbuiltinexec',
\tIsConcatSpreadable: 'http://ecma-international.org/ecma-262/7.0/#sec-isconcatspreadable',
\tIsPromise: 'http://ecma-international.org/ecma-262/7.0/#sec-ispromise'
};
";
        
        $__internal_e8dbc893f1f2f1b06c9c2d9ee9ebd51756857547dde2225e0dda68ef10f5812d->leave($__internal_e8dbc893f1f2f1b06c9c2d9ee9ebd51756857547dde2225e0dda68ef10f5812d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/operations/2016.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = {
\tIsPropertyDescriptor: 'http://ecma-international.org/ecma-262/7.0/#sec-property-descriptor-specification-type',
\tIsAccessorDescriptor: 'http://ecma-international.org/ecma-262/7.0/#sec-isaccessordescriptor',
\tIsDataDescriptor: 'http://ecma-international.org/ecma-262/7.0/#sec-isdatadescriptor',
\tIsGenericDescriptor: 'http://ecma-international.org/ecma-262/7.0/#sec-isgenericdescriptor',
\tFromPropertyDescriptor: 'http://ecma-international.org/ecma-262/7.0/#sec-frompropertydescriptor',
\tToPropertyDescriptor: 'http://ecma-international.org/ecma-262/7.0/#sec-topropertydescriptor',
\tCompletePropertyDescriptor: 'http://ecma-international.org/ecma-262/7.0/#sec-completepropertydescriptor',
\tToPrimitive: 'http://ecma-international.org/ecma-262/7.0/#sec-toprimitive',
\tToBoolean: 'http://ecma-international.org/ecma-262/7.0/#sec-toboolean',
\tToNumber: 'http://ecma-international.org/ecma-262/7.0/#sec-tonumber',
\tToInteger: 'http://ecma-international.org/ecma-262/7.0/#sec-tointeger',
\tToInt32: 'http://ecma-international.org/ecma-262/7.0/#sec-toint32',
\tToUint32: 'http://ecma-international.org/ecma-262/7.0/#sec-touint32',
\tToInt16: 'http://ecma-international.org/ecma-262/7.0/#sec-toint16',
\tToUint16: 'http://ecma-international.org/ecma-262/7.0/#sec-touint16',
\tToInt8: 'http://ecma-international.org/ecma-262/7.0/#sec-toint8',
\tToUint8: 'http://ecma-international.org/ecma-262/7.0/#sec-touint8',
\tToUint8Clamp: 'http://ecma-international.org/ecma-262/7.0/#sec-touint8clamp',
\tToString: 'http://ecma-international.org/ecma-262/7.0/#sec-tostring',
\tToObject: 'http://ecma-international.org/ecma-262/7.0/#sec-toobject',
\tToPropertyKey: 'http://ecma-international.org/ecma-262/7.0/#sec-topropertykey',
\tToLength: 'http://ecma-international.org/ecma-262/7.0/#sec-tolength',
\tCanonicalNumericIndexString: 'http://ecma-international.org/ecma-262/7.0/#sec-canonicalnumericindexstring',
\tRequireObjectCoercible: 'http://ecma-international.org/ecma-262/7.0/#sec-requireobjectcoercible',
\tIsArray: 'http://ecma-international.org/ecma-262/7.0/#sec-isarray',
\tIsCallable: 'http://ecma-international.org/ecma-262/7.0/#sec-iscallable',
\tIsConstructor: 'http://ecma-international.org/ecma-262/7.0/#sec-isconstructor',
\tIsExtensible: 'http://ecma-international.org/ecma-262/7.0/#sec-isextensible-o',
\tIsInteger: 'http://ecma-international.org/ecma-262/7.0/#sec-isinteger',
\tIsPropertyKey: 'http://ecma-international.org/ecma-262/7.0/#sec-ispropertykey',
\tIsRegExp: 'http://ecma-international.org/ecma-262/7.0/#sec-isregexp',
\tSameValue: 'http://ecma-international.org/ecma-262/7.0/#sec-samevalue',
\tSameValueZero: 'http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero',
\tSameValueNonNumber: 'http://ecma-international.org/ecma-262/7.0/#sec-samevaluenonnumber',
\tGet: 'http://ecma-international.org/ecma-262/7.0/#sec-get-o-p',
\tGetV: 'http://ecma-international.org/ecma-262/7.0/#sec-getv',
\tSet: 'http://ecma-international.org/ecma-262/7.0/#sec-set-o-p-v-throw',
\tCreateDataProperty: 'http://ecma-international.org/ecma-262/7.0/#sec-createdataproperty',
\tCreateMethodProperty: 'http://ecma-international.org/ecma-262/7.0/#sec-createmethodproperty',
\tCreateDataPropertyOrThrow: 'http://ecma-international.org/ecma-262/7.0/#sec-createdatapropertyorthrow',
\tDefinePropertyOrThrow: 'http://ecma-international.org/ecma-262/7.0/#sec-definepropertyorthrow',
\tDeletePropertyOrThrow: 'http://ecma-international.org/ecma-262/7.0/#sec-deletepropertyorthrow',
\tGetMethod: 'http://ecma-international.org/ecma-262/7.0/#sec-getmethod',
\tHasProperty: 'http://ecma-international.org/ecma-262/7.0/#sec-hasproperty',
\tHasOwnProperty: 'http://ecma-international.org/ecma-262/7.0/#sec-hasownproperty',
\tCall: 'http://ecma-international.org/ecma-262/7.0/#sec-call',
\tConstruct: 'http://ecma-international.org/ecma-262/7.0/#sec-construct',
\tSetIntegrityLevel: 'http://ecma-international.org/ecma-262/7.0/#sec-setintegritylevel',
\tTestIntegrityLevel: 'http://ecma-international.org/ecma-262/7.0/#sec-testintegritylevel',
\tCreateArrayFromList: 'http://ecma-international.org/ecma-262/7.0/#sec-createarrayfromlist',
\tCreateListFromArrayLike: 'http://ecma-international.org/ecma-262/7.0/#sec-createlistfromarraylike',
\tInvoke: 'http://ecma-international.org/ecma-262/7.0/#sec-invoke',
\tOrdinaryHasInstance: 'http://ecma-international.org/ecma-262/7.0/#sec-ordinaryhasinstance',
\tSpeciesConstructor: 'http://ecma-international.org/ecma-262/7.0/#sec-speciesconstructor',
\tEnumerableOwnNames: 'http://ecma-international.org/ecma-262/7.0/#sec-enumerableownnames',
\tGetIterator: 'http://ecma-international.org/ecma-262/7.0/#sec-getiterator',
\tIteratorNext: 'http://ecma-international.org/ecma-262/7.0/#sec-iteratornext',
\tIteratorComplete: 'http://ecma-international.org/ecma-262/7.0/#sec-iteratorcomplete',
\tIteratorValue: 'http://ecma-international.org/ecma-262/7.0/#sec-iteratorvalue',
\tIteratorStep: 'http://ecma-international.org/ecma-262/7.0/#sec-iteratorstep',
\tIteratorClose: 'http://ecma-international.org/ecma-262/7.0/#sec-iteratorclose',
\tCreateIterResultObject: 'http://ecma-international.org/ecma-262/7.0/#sec-createiterresultobject',
\tCreateListIterator: 'http://ecma-international.org/ecma-262/7.0/#sec-createlistiterator',
\tType: 'http://ecma-international.org/ecma-262/7.0/#sec-ecmascript-language-types',
\tthisNumberValue: 'http://ecma-international.org/ecma-262/7.0/#sec-properties-of-the-number-prototype-object',
\tthisTimeValue: 'http://ecma-international.org/ecma-262/7.0/#sec-properties-of-the-date-prototype-object',
\tthisStringValue: 'http://ecma-international.org/ecma-262/7.0/#sec-properties-of-the-string-prototype-object',
\tRegExpExec: 'http://ecma-international.org/ecma-262/7.0/#sec-regexpexec',
\tRegExpBuiltinExec: 'http://ecma-international.org/ecma-262/7.0/#sec-regexpbuiltinexec',
\tIsConcatSpreadable: 'http://ecma-international.org/ecma-262/7.0/#sec-isconcatspreadable',
\tIsPromise: 'http://ecma-international.org/ecma-262/7.0/#sec-ispromise'
};
", "node_modules/es-abstract/operations/2016.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/operations/2016.js");
    }
}
