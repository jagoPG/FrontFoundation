<?php

/* node_modules/fsevents/node_modules/json-schema/lib/validate.js */
class __TwigTemplate_d31c02305ec9495be7ae91c8de8e9f3895d17fa10e03d2d7903458ae2cc136d5 extends Twig_Template
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
        $__internal_4b111c97fac4b3e2107269a4c83567228a59b0bb4b42620f8a0030431b805bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b111c97fac4b3e2107269a4c83567228a59b0bb4b42620f8a0030431b805bcd->enter($__internal_4b111c97fac4b3e2107269a4c83567228a59b0bb4b42620f8a0030431b805bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/lib/validate.js"));

        // line 1
        echo "/**
 * JSONSchema Validator - Validates JavaScript objects using JSON Schemas
 *\t(http://www.json.com/json-schema-proposal/)
 *
 * Copyright (c) 2007 Kris Zyp SitePen (www.sitepen.com)
 * Licensed under the MIT (MIT-LICENSE.txt) license.
To use the validator call the validate function with an instance object and an optional schema object.
If a schema is provided, it will be used to validate. If the instance object refers to a schema (self-validating),
that schema will be used to validate and the schema parameter is not necessary (if both exist,
both validations will occur).
The validate method will return an array of validation errors. If there are no errors, then an
empty list will be returned. A validation error will have two properties:
\"property\" which indicates which property had the error
\"message\" which indicates what the error was
 */
(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define([], function () {
            return factory();
        });
    } else if (typeof module === 'object' && module.exports) {
        // Node. Does not work with strict CommonJS, but
        // only CommonJS-like environments that support module.exports,
        // like Node.
        module.exports = factory();
    } else {
        // Browser globals
        root.jsonSchema = factory();
    }
}(this, function () {// setup primitive classes to be JSON Schema types
var exports = validate
exports.Integer = {type:\"integer\"};
var primitiveConstructors = {
\tString: String,
\tBoolean: Boolean,
\tNumber: Number,
\tObject: Object,
\tArray: Array,
\tDate: Date
}
exports.validate = validate;
function validate(/*Any*/instance,/*Object*/schema) {
\t\t// Summary:
\t\t//  \tTo use the validator call JSONSchema.validate with an instance object and an optional schema object.
\t\t// \t\tIf a schema is provided, it will be used to validate. If the instance object refers to a schema (self-validating),
\t\t// \t\tthat schema will be used to validate and the schema parameter is not necessary (if both exist,
\t\t// \t\tboth validations will occur).
\t\t// \t\tThe validate method will return an object with two properties:
\t\t// \t\t\tvalid: A boolean indicating if the instance is valid by the schema
\t\t// \t\t\terrors: An array of validation errors. If there are no errors, then an
\t\t// \t\t\t\t\tempty list will be returned. A validation error will have two properties:
\t\t// \t\t\t\t\t\tproperty: which indicates which property had the error
\t\t// \t\t\t\t\t\tmessage: which indicates what the error was
\t\t//
\t\treturn validate(instance, schema, {changing: false});//, coerce: false, existingOnly: false});
\t};
exports.checkPropertyChange = function(/*Any*/value,/*Object*/schema, /*String*/property) {
\t\t// Summary:
\t\t// \t\tThe checkPropertyChange method will check to see if an value can legally be in property with the given schema
\t\t// \t\tThis is slightly different than the validate method in that it will fail if the schema is readonly and it will
\t\t// \t\tnot check for self-validation, it is assumed that the passed in value is already internally valid.
\t\t// \t\tThe checkPropertyChange method will return the same object type as validate, see JSONSchema.validate for
\t\t// \t\tinformation.
\t\t//
\t\treturn validate(value, schema, {changing: property || \"property\"});
\t};
var validate = exports._validate = function(/*Any*/instance,/*Object*/schema,/*Object*/options) {

\tif (!options) options = {};
\tvar _changing = options.changing;

\tfunction getType(schema){
\t\treturn schema.type || (primitiveConstructors[schema.name] == schema && schema.name.toLowerCase());
\t}
\tvar errors = [];
\t// validate a value against a property definition
\tfunction checkProp(value, schema, path,i){

\t\tvar l;
\t\tpath += path ? typeof i == 'number' ? '[' + i + ']' : typeof i == 'undefined' ? '' : '.' + i : i;
\t\tfunction addError(message){
\t\t\terrors.push({property:path,message:message});
\t\t}

\t\tif((typeof schema != 'object' || schema instanceof Array) && (path || typeof schema != 'function') && !(schema && getType(schema))){
\t\t\tif(typeof schema == 'function'){
\t\t\t\tif(!(value instanceof schema)){
\t\t\t\t\taddError(\"is not an instance of the class/constructor \" + schema.name);
\t\t\t\t}
\t\t\t}else if(schema){
\t\t\t\taddError(\"Invalid schema/property definition \" + schema);
\t\t\t}
\t\t\treturn null;
\t\t}
\t\tif(_changing && schema.readonly){
\t\t\taddError(\"is a readonly field, it can not be changed\");
\t\t}
\t\tif(schema['extends']){ // if it extends another schema, it must pass that schema as well
\t\t\tcheckProp(value,schema['extends'],path,i);
\t\t}
\t\t// validate a value against a type definition
\t\tfunction checkType(type,value){
\t\t\tif(type){
\t\t\t\tif(typeof type == 'string' && type != 'any' &&
\t\t\t\t\t\t(type == 'null' ? value !== null : typeof value != type) &&
\t\t\t\t\t\t!(value instanceof Array && type == 'array') &&
\t\t\t\t\t\t!(value instanceof Date && type == 'date') &&
\t\t\t\t\t\t!(type == 'integer' && value%1===0)){
\t\t\t\t\treturn [{property:path,message:(typeof value) + \" value found, but a \" + type + \" is required\"}];
\t\t\t\t}
\t\t\t\tif(type instanceof Array){
\t\t\t\t\tvar unionErrors=[];
\t\t\t\t\tfor(var j = 0; j < type.length; j++){ // a union type
\t\t\t\t\t\tif(!(unionErrors=checkType(type[j],value)).length){
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif(unionErrors.length){
\t\t\t\t\t\treturn unionErrors;
\t\t\t\t\t}
\t\t\t\t}else if(typeof type == 'object'){
\t\t\t\t\tvar priorErrors = errors;
\t\t\t\t\terrors = [];
\t\t\t\t\tcheckProp(value,type,path);
\t\t\t\t\tvar theseErrors = errors;
\t\t\t\t\terrors = priorErrors;
\t\t\t\t\treturn theseErrors;
\t\t\t\t}
\t\t\t}
\t\t\treturn [];
\t\t}
\t\tif(value === undefined){
\t\t\tif(schema.required){
\t\t\t\taddError(\"is missing and it is required\");
\t\t\t}
\t\t}else{
\t\t\terrors = errors.concat(checkType(getType(schema),value));
\t\t\tif(schema.disallow && !checkType(schema.disallow,value).length){
\t\t\t\taddError(\" disallowed value was matched\");
\t\t\t}
\t\t\tif(value !== null){
\t\t\t\tif(value instanceof Array){
\t\t\t\t\tif(schema.items){
\t\t\t\t\t\tvar itemsIsArray = schema.items instanceof Array;
\t\t\t\t\t\tvar propDef = schema.items;
\t\t\t\t\t\tfor (i = 0, l = value.length; i < l; i += 1) {
\t\t\t\t\t\t\tif (itemsIsArray)
\t\t\t\t\t\t\t\tpropDef = schema.items[i];
\t\t\t\t\t\t\tif (options.coerce)
\t\t\t\t\t\t\t\tvalue[i] = options.coerce(value[i], propDef);
\t\t\t\t\t\t\terrors.concat(checkProp(value[i],propDef,path,i));
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif(schema.minItems && value.length < schema.minItems){
\t\t\t\t\t\taddError(\"There must be a minimum of \" + schema.minItems + \" in the array\");
\t\t\t\t\t}
\t\t\t\t\tif(schema.maxItems && value.length > schema.maxItems){
\t\t\t\t\t\taddError(\"There must be a maximum of \" + schema.maxItems + \" in the array\");
\t\t\t\t\t}
\t\t\t\t}else if(schema.properties || schema.additionalProperties){
\t\t\t\t\terrors.concat(checkObj(value, schema.properties, path, schema.additionalProperties));
\t\t\t\t}
\t\t\t\tif(schema.pattern && typeof value == 'string' && !value.match(schema.pattern)){
\t\t\t\t\taddError(\"does not match the regex pattern \" + schema.pattern);
\t\t\t\t}
\t\t\t\tif(schema.maxLength && typeof value == 'string' && value.length > schema.maxLength){
\t\t\t\t\taddError(\"may only be \" + schema.maxLength + \" characters long\");
\t\t\t\t}
\t\t\t\tif(schema.minLength && typeof value == 'string' && value.length < schema.minLength){
\t\t\t\t\taddError(\"must be at least \" + schema.minLength + \" characters long\");
\t\t\t\t}
\t\t\t\tif(typeof schema.minimum !== undefined && typeof value == typeof schema.minimum &&
\t\t\t\t\t\tschema.minimum > value){
\t\t\t\t\taddError(\"must have a minimum value of \" + schema.minimum);
\t\t\t\t}
\t\t\t\tif(typeof schema.maximum !== undefined && typeof value == typeof schema.maximum &&
\t\t\t\t\t\tschema.maximum < value){
\t\t\t\t\taddError(\"must have a maximum value of \" + schema.maximum);
\t\t\t\t}
\t\t\t\tif(schema['enum']){
\t\t\t\t\tvar enumer = schema['enum'];
\t\t\t\t\tl = enumer.length;
\t\t\t\t\tvar found;
\t\t\t\t\tfor(var j = 0; j < l; j++){
\t\t\t\t\t\tif(enumer[j]===value){
\t\t\t\t\t\t\tfound=1;
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif(!found){
\t\t\t\t\t\taddError(\"does not have a value in the enumeration \" + enumer.join(\", \"));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tif(typeof schema.maxDecimal == 'number' &&
\t\t\t\t\t(value.toString().match(new RegExp(\"\\\\.[0-9]{\" + (schema.maxDecimal + 1) + \",}\")))){
\t\t\t\t\taddError(\"may only have \" + schema.maxDecimal + \" digits of decimal places\");
\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn null;
\t}
\t// validate an object against a schema
\tfunction checkObj(instance,objTypeDef,path,additionalProp){

\t\tif(typeof objTypeDef =='object'){
\t\t\tif(typeof instance != 'object' || instance instanceof Array){
\t\t\t\terrors.push({property:path,message:\"an object is required\"});
\t\t\t}
\t\t\t
\t\t\tfor(var i in objTypeDef){ 
\t\t\t\tif(objTypeDef.hasOwnProperty(i)){
\t\t\t\t\tvar value = instance[i];
\t\t\t\t\t// skip _not_ specified properties
\t\t\t\t\tif (value === undefined && options.existingOnly) continue;
\t\t\t\t\tvar propDef = objTypeDef[i];
\t\t\t\t\t// set default
\t\t\t\t\tif(value === undefined && propDef[\"default\"]){
\t\t\t\t\t\tvalue = instance[i] = propDef[\"default\"];
\t\t\t\t\t}
\t\t\t\t\tif(options.coerce && i in instance){
\t\t\t\t\t\tvalue = instance[i] = options.coerce(value, propDef);
\t\t\t\t\t}
\t\t\t\t\tcheckProp(value,propDef,path,i);
\t\t\t\t}
\t\t\t}
\t\t}
\t\tfor(i in instance){
\t\t\tif(instance.hasOwnProperty(i) && !(i.charAt(0) == '_' && i.charAt(1) == '_') && objTypeDef && !objTypeDef[i] && additionalProp===false){
\t\t\t\tif (options.filter) {
\t\t\t\t\tdelete instance[i];
\t\t\t\t\tcontinue;
\t\t\t\t} else {
\t\t\t\t\terrors.push({property:path,message:(typeof value) + \"The property \" + i +
\t\t\t\t\t\t\" is not defined in the schema and the schema does not allow additional properties\"});
\t\t\t\t}
\t\t\t}
\t\t\tvar requires = objTypeDef && objTypeDef[i] && objTypeDef[i].requires;
\t\t\tif(requires && !(requires in instance)){
\t\t\t\terrors.push({property:path,message:\"the presence of the property \" + i + \" requires that \" + requires + \" also be present\"});
\t\t\t}
\t\t\tvalue = instance[i];
\t\t\tif(additionalProp && (!(objTypeDef && typeof objTypeDef == 'object') || !(i in objTypeDef))){
\t\t\t\tif(options.coerce){
\t\t\t\t\tvalue = instance[i] = options.coerce(value, additionalProp);
\t\t\t\t}
\t\t\t\tcheckProp(value,additionalProp,path,i);
\t\t\t}
\t\t\tif(!_changing && value && value.\$schema){
\t\t\t\terrors = errors.concat(checkProp(value,value.\$schema,path,i));
\t\t\t}
\t\t}
\t\treturn errors;
\t}
\tif(schema){
\t\tcheckProp(instance,schema,'',_changing || '');
\t}
\tif(!_changing && instance && instance.\$schema){
\t\tcheckProp(instance,instance.\$schema,'','');
\t}
\treturn {valid:!errors.length,errors:errors};
};
exports.mustBeValid = function(result){
\t//\tsummary:
\t//\t\tThis checks to ensure that the result is valid and will throw an appropriate error message if it is not
\t// result: the result returned from checkPropertyChange or validate
\tif(!result.valid){
\t\tthrow new TypeError(result.errors.map(function(error){return \"for property \" + error.property + ': ' + error.message;}).join(\", \\n\"));
\t}
}

return exports;
}));
";
        
        $__internal_4b111c97fac4b3e2107269a4c83567228a59b0bb4b42620f8a0030431b805bcd->leave($__internal_4b111c97fac4b3e2107269a4c83567228a59b0bb4b42620f8a0030431b805bcd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/lib/validate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * JSONSchema Validator - Validates JavaScript objects using JSON Schemas
 *\t(http://www.json.com/json-schema-proposal/)
 *
 * Copyright (c) 2007 Kris Zyp SitePen (www.sitepen.com)
 * Licensed under the MIT (MIT-LICENSE.txt) license.
To use the validator call the validate function with an instance object and an optional schema object.
If a schema is provided, it will be used to validate. If the instance object refers to a schema (self-validating),
that schema will be used to validate and the schema parameter is not necessary (if both exist,
both validations will occur).
The validate method will return an array of validation errors. If there are no errors, then an
empty list will be returned. A validation error will have two properties:
\"property\" which indicates which property had the error
\"message\" which indicates what the error was
 */
(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define([], function () {
            return factory();
        });
    } else if (typeof module === 'object' && module.exports) {
        // Node. Does not work with strict CommonJS, but
        // only CommonJS-like environments that support module.exports,
        // like Node.
        module.exports = factory();
    } else {
        // Browser globals
        root.jsonSchema = factory();
    }
}(this, function () {// setup primitive classes to be JSON Schema types
var exports = validate
exports.Integer = {type:\"integer\"};
var primitiveConstructors = {
\tString: String,
\tBoolean: Boolean,
\tNumber: Number,
\tObject: Object,
\tArray: Array,
\tDate: Date
}
exports.validate = validate;
function validate(/*Any*/instance,/*Object*/schema) {
\t\t// Summary:
\t\t//  \tTo use the validator call JSONSchema.validate with an instance object and an optional schema object.
\t\t// \t\tIf a schema is provided, it will be used to validate. If the instance object refers to a schema (self-validating),
\t\t// \t\tthat schema will be used to validate and the schema parameter is not necessary (if both exist,
\t\t// \t\tboth validations will occur).
\t\t// \t\tThe validate method will return an object with two properties:
\t\t// \t\t\tvalid: A boolean indicating if the instance is valid by the schema
\t\t// \t\t\terrors: An array of validation errors. If there are no errors, then an
\t\t// \t\t\t\t\tempty list will be returned. A validation error will have two properties:
\t\t// \t\t\t\t\t\tproperty: which indicates which property had the error
\t\t// \t\t\t\t\t\tmessage: which indicates what the error was
\t\t//
\t\treturn validate(instance, schema, {changing: false});//, coerce: false, existingOnly: false});
\t};
exports.checkPropertyChange = function(/*Any*/value,/*Object*/schema, /*String*/property) {
\t\t// Summary:
\t\t// \t\tThe checkPropertyChange method will check to see if an value can legally be in property with the given schema
\t\t// \t\tThis is slightly different than the validate method in that it will fail if the schema is readonly and it will
\t\t// \t\tnot check for self-validation, it is assumed that the passed in value is already internally valid.
\t\t// \t\tThe checkPropertyChange method will return the same object type as validate, see JSONSchema.validate for
\t\t// \t\tinformation.
\t\t//
\t\treturn validate(value, schema, {changing: property || \"property\"});
\t};
var validate = exports._validate = function(/*Any*/instance,/*Object*/schema,/*Object*/options) {

\tif (!options) options = {};
\tvar _changing = options.changing;

\tfunction getType(schema){
\t\treturn schema.type || (primitiveConstructors[schema.name] == schema && schema.name.toLowerCase());
\t}
\tvar errors = [];
\t// validate a value against a property definition
\tfunction checkProp(value, schema, path,i){

\t\tvar l;
\t\tpath += path ? typeof i == 'number' ? '[' + i + ']' : typeof i == 'undefined' ? '' : '.' + i : i;
\t\tfunction addError(message){
\t\t\terrors.push({property:path,message:message});
\t\t}

\t\tif((typeof schema != 'object' || schema instanceof Array) && (path || typeof schema != 'function') && !(schema && getType(schema))){
\t\t\tif(typeof schema == 'function'){
\t\t\t\tif(!(value instanceof schema)){
\t\t\t\t\taddError(\"is not an instance of the class/constructor \" + schema.name);
\t\t\t\t}
\t\t\t}else if(schema){
\t\t\t\taddError(\"Invalid schema/property definition \" + schema);
\t\t\t}
\t\t\treturn null;
\t\t}
\t\tif(_changing && schema.readonly){
\t\t\taddError(\"is a readonly field, it can not be changed\");
\t\t}
\t\tif(schema['extends']){ // if it extends another schema, it must pass that schema as well
\t\t\tcheckProp(value,schema['extends'],path,i);
\t\t}
\t\t// validate a value against a type definition
\t\tfunction checkType(type,value){
\t\t\tif(type){
\t\t\t\tif(typeof type == 'string' && type != 'any' &&
\t\t\t\t\t\t(type == 'null' ? value !== null : typeof value != type) &&
\t\t\t\t\t\t!(value instanceof Array && type == 'array') &&
\t\t\t\t\t\t!(value instanceof Date && type == 'date') &&
\t\t\t\t\t\t!(type == 'integer' && value%1===0)){
\t\t\t\t\treturn [{property:path,message:(typeof value) + \" value found, but a \" + type + \" is required\"}];
\t\t\t\t}
\t\t\t\tif(type instanceof Array){
\t\t\t\t\tvar unionErrors=[];
\t\t\t\t\tfor(var j = 0; j < type.length; j++){ // a union type
\t\t\t\t\t\tif(!(unionErrors=checkType(type[j],value)).length){
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif(unionErrors.length){
\t\t\t\t\t\treturn unionErrors;
\t\t\t\t\t}
\t\t\t\t}else if(typeof type == 'object'){
\t\t\t\t\tvar priorErrors = errors;
\t\t\t\t\terrors = [];
\t\t\t\t\tcheckProp(value,type,path);
\t\t\t\t\tvar theseErrors = errors;
\t\t\t\t\terrors = priorErrors;
\t\t\t\t\treturn theseErrors;
\t\t\t\t}
\t\t\t}
\t\t\treturn [];
\t\t}
\t\tif(value === undefined){
\t\t\tif(schema.required){
\t\t\t\taddError(\"is missing and it is required\");
\t\t\t}
\t\t}else{
\t\t\terrors = errors.concat(checkType(getType(schema),value));
\t\t\tif(schema.disallow && !checkType(schema.disallow,value).length){
\t\t\t\taddError(\" disallowed value was matched\");
\t\t\t}
\t\t\tif(value !== null){
\t\t\t\tif(value instanceof Array){
\t\t\t\t\tif(schema.items){
\t\t\t\t\t\tvar itemsIsArray = schema.items instanceof Array;
\t\t\t\t\t\tvar propDef = schema.items;
\t\t\t\t\t\tfor (i = 0, l = value.length; i < l; i += 1) {
\t\t\t\t\t\t\tif (itemsIsArray)
\t\t\t\t\t\t\t\tpropDef = schema.items[i];
\t\t\t\t\t\t\tif (options.coerce)
\t\t\t\t\t\t\t\tvalue[i] = options.coerce(value[i], propDef);
\t\t\t\t\t\t\terrors.concat(checkProp(value[i],propDef,path,i));
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif(schema.minItems && value.length < schema.minItems){
\t\t\t\t\t\taddError(\"There must be a minimum of \" + schema.minItems + \" in the array\");
\t\t\t\t\t}
\t\t\t\t\tif(schema.maxItems && value.length > schema.maxItems){
\t\t\t\t\t\taddError(\"There must be a maximum of \" + schema.maxItems + \" in the array\");
\t\t\t\t\t}
\t\t\t\t}else if(schema.properties || schema.additionalProperties){
\t\t\t\t\terrors.concat(checkObj(value, schema.properties, path, schema.additionalProperties));
\t\t\t\t}
\t\t\t\tif(schema.pattern && typeof value == 'string' && !value.match(schema.pattern)){
\t\t\t\t\taddError(\"does not match the regex pattern \" + schema.pattern);
\t\t\t\t}
\t\t\t\tif(schema.maxLength && typeof value == 'string' && value.length > schema.maxLength){
\t\t\t\t\taddError(\"may only be \" + schema.maxLength + \" characters long\");
\t\t\t\t}
\t\t\t\tif(schema.minLength && typeof value == 'string' && value.length < schema.minLength){
\t\t\t\t\taddError(\"must be at least \" + schema.minLength + \" characters long\");
\t\t\t\t}
\t\t\t\tif(typeof schema.minimum !== undefined && typeof value == typeof schema.minimum &&
\t\t\t\t\t\tschema.minimum > value){
\t\t\t\t\taddError(\"must have a minimum value of \" + schema.minimum);
\t\t\t\t}
\t\t\t\tif(typeof schema.maximum !== undefined && typeof value == typeof schema.maximum &&
\t\t\t\t\t\tschema.maximum < value){
\t\t\t\t\taddError(\"must have a maximum value of \" + schema.maximum);
\t\t\t\t}
\t\t\t\tif(schema['enum']){
\t\t\t\t\tvar enumer = schema['enum'];
\t\t\t\t\tl = enumer.length;
\t\t\t\t\tvar found;
\t\t\t\t\tfor(var j = 0; j < l; j++){
\t\t\t\t\t\tif(enumer[j]===value){
\t\t\t\t\t\t\tfound=1;
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif(!found){
\t\t\t\t\t\taddError(\"does not have a value in the enumeration \" + enumer.join(\", \"));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tif(typeof schema.maxDecimal == 'number' &&
\t\t\t\t\t(value.toString().match(new RegExp(\"\\\\.[0-9]{\" + (schema.maxDecimal + 1) + \",}\")))){
\t\t\t\t\taddError(\"may only have \" + schema.maxDecimal + \" digits of decimal places\");
\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn null;
\t}
\t// validate an object against a schema
\tfunction checkObj(instance,objTypeDef,path,additionalProp){

\t\tif(typeof objTypeDef =='object'){
\t\t\tif(typeof instance != 'object' || instance instanceof Array){
\t\t\t\terrors.push({property:path,message:\"an object is required\"});
\t\t\t}
\t\t\t
\t\t\tfor(var i in objTypeDef){ 
\t\t\t\tif(objTypeDef.hasOwnProperty(i)){
\t\t\t\t\tvar value = instance[i];
\t\t\t\t\t// skip _not_ specified properties
\t\t\t\t\tif (value === undefined && options.existingOnly) continue;
\t\t\t\t\tvar propDef = objTypeDef[i];
\t\t\t\t\t// set default
\t\t\t\t\tif(value === undefined && propDef[\"default\"]){
\t\t\t\t\t\tvalue = instance[i] = propDef[\"default\"];
\t\t\t\t\t}
\t\t\t\t\tif(options.coerce && i in instance){
\t\t\t\t\t\tvalue = instance[i] = options.coerce(value, propDef);
\t\t\t\t\t}
\t\t\t\t\tcheckProp(value,propDef,path,i);
\t\t\t\t}
\t\t\t}
\t\t}
\t\tfor(i in instance){
\t\t\tif(instance.hasOwnProperty(i) && !(i.charAt(0) == '_' && i.charAt(1) == '_') && objTypeDef && !objTypeDef[i] && additionalProp===false){
\t\t\t\tif (options.filter) {
\t\t\t\t\tdelete instance[i];
\t\t\t\t\tcontinue;
\t\t\t\t} else {
\t\t\t\t\terrors.push({property:path,message:(typeof value) + \"The property \" + i +
\t\t\t\t\t\t\" is not defined in the schema and the schema does not allow additional properties\"});
\t\t\t\t}
\t\t\t}
\t\t\tvar requires = objTypeDef && objTypeDef[i] && objTypeDef[i].requires;
\t\t\tif(requires && !(requires in instance)){
\t\t\t\terrors.push({property:path,message:\"the presence of the property \" + i + \" requires that \" + requires + \" also be present\"});
\t\t\t}
\t\t\tvalue = instance[i];
\t\t\tif(additionalProp && (!(objTypeDef && typeof objTypeDef == 'object') || !(i in objTypeDef))){
\t\t\t\tif(options.coerce){
\t\t\t\t\tvalue = instance[i] = options.coerce(value, additionalProp);
\t\t\t\t}
\t\t\t\tcheckProp(value,additionalProp,path,i);
\t\t\t}
\t\t\tif(!_changing && value && value.\$schema){
\t\t\t\terrors = errors.concat(checkProp(value,value.\$schema,path,i));
\t\t\t}
\t\t}
\t\treturn errors;
\t}
\tif(schema){
\t\tcheckProp(instance,schema,'',_changing || '');
\t}
\tif(!_changing && instance && instance.\$schema){
\t\tcheckProp(instance,instance.\$schema,'','');
\t}
\treturn {valid:!errors.length,errors:errors};
};
exports.mustBeValid = function(result){
\t//\tsummary:
\t//\t\tThis checks to ensure that the result is valid and will throw an appropriate error message if it is not
\t// result: the result returned from checkPropertyChange or validate
\tif(!result.valid){
\t\tthrow new TypeError(result.errors.map(function(error){return \"for property \" + error.property + ': ' + error.message;}).join(\", \\n\"));
\t}
}

return exports;
}));
", "node_modules/fsevents/node_modules/json-schema/lib/validate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/lib/validate.js");
    }
}
