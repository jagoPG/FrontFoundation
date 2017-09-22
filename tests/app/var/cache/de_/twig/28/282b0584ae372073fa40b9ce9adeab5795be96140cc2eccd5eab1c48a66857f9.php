<?php

/* node_modules/fsevents/node_modules/json-schema/draft-zyp-json-schema-03.xml */
class __TwigTemplate_32d7f2e50570a6f17756db9a97ae9fc2d134c04daf74602c32b0e0901e44c535 extends Twig_Template
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
        $__internal_a1a56726ee5da3f962657513386eaae106790c866feab419e80cf70f55024027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a56726ee5da3f962657513386eaae106790c866feab419e80cf70f55024027->enter($__internal_a1a56726ee5da3f962657513386eaae106790c866feab419e80cf70f55024027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/draft-zyp-json-schema-03.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"US-ASCII\"?>
<!DOCTYPE rfc SYSTEM \"rfc2629.dtd\" [
<!ENTITY rfc4627 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.4627.xml\">
<!ENTITY rfc3986 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.3986.xml\">
<!ENTITY rfc2119 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.2119.xml\">
<!ENTITY rfc4287 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.4287.xml\">
<!ENTITY rfc2616 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.2616.xml\">
<!ENTITY rfc3339 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.3339.xml\">
<!ENTITY rfc2045 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.2045.xml\">
<!ENTITY rfc5226 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.5226.xml\">
<!ENTITY rfc2396 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.2396.xml\">
<!ENTITY iddiscovery SYSTEM \"http://xml.resource.org/public/rfc/bibxml3/reference.I-D.hammer-discovery.xml\">
<!ENTITY uritemplate SYSTEM \"http://xml.resource.org/public/rfc/bibxml3/reference.I-D.gregorio-uritemplate.xml\">
<!ENTITY linkheader SYSTEM \"http://xml.resource.org/public/rfc/bibxml3/reference.I-D.nottingham-http-link-header.xml\">
<!ENTITY html401 SYSTEM \"http://xml.resource.org/public/rfc/bibxml4/reference.W3C.REC-html401-19991224.xml\">
<!ENTITY css21 SYSTEM \"http://xml.resource.org/public/rfc/bibxml4/reference.W3C.CR-CSS21-20070719.xml\">
]>
<?rfc toc=\"yes\"?>
<?rfc symrefs=\"yes\"?>
<?rfc compact=\"yes\"?>
<?rfc subcompact=\"no\"?>
<?rfc strict=\"no\"?>
<?rfc rfcedstyle=\"yes\"?>
<rfc category=\"info\" docName=\"draft-zyp-json-schema-03\" ipr=\"trust200902\">
\t<front>
\t\t<title abbrev=\"JSON Schema Media Type\">A JSON Media Type for Describing the Structure and Meaning of JSON Documents</title>
\t\t
\t\t<author fullname=\"Kris Zyp\" initials=\"K\" role=\"editor\" surname=\"Zyp\">
\t\t\t<organization>SitePen (USA)</organization>
\t\t\t<address>
\t\t\t\t<postal>
\t\t\t\t\t<street>530 Lytton Avenue</street>
\t\t\t\t\t<city>Palo Alto, CA 94301</city>
\t\t\t\t\t<country>USA</country>
\t\t\t\t</postal>
\t\t\t\t<phone>+1 650 968 8787</phone>
\t\t\t\t<email>kris@sitepen.com</email>
\t\t\t</address>
\t\t</author>
\t\t
\t\t<author fullname=\"Gary Court\" initials=\"G\" surname=\"Court\">
\t\t\t<address>
\t\t\t\t<postal>
\t\t\t\t\t<street></street>
\t\t\t\t\t<city>Calgary, AB</city>
\t\t\t\t\t<country>Canada</country>
\t\t\t\t</postal>
\t\t\t\t<email>gary.court@gmail.com</email>
\t\t\t</address>
\t\t</author>
\t\t
\t\t<date year=\"2011\" />
\t\t<workgroup>Internet Engineering Task Force</workgroup>
\t\t<keyword>JSON</keyword>
\t\t<keyword>Schema</keyword>
\t\t<keyword>JavaScript</keyword>
\t\t<keyword>Object</keyword>
\t\t<keyword>Notation</keyword>
\t\t<keyword>Hyper Schema</keyword>
\t\t<keyword>Hypermedia</keyword>
\t\t
\t\t<abstract>
\t\t\t<t>
\t\t\t\tJSON (JavaScript Object Notation) Schema defines the media type \"application/schema+json\", 
\t\t\t\ta JSON based format for defining 
\t\t\t\tthe structure of JSON data. JSON Schema provides a contract for what JSON 
\t\t\t\tdata is required for a given application and how to interact with it. JSON 
\t\t\t\tSchema is intended to define validation, documentation, hyperlink 
\t\t\t\tnavigation, and interaction control of JSON data. 
\t\t\t</t>
\t\t</abstract>
\t</front>
\t
\t<middle>
\t\t<section title=\"Introduction\">
\t\t\t<t>
\t\t\t\tJSON (JavaScript Object Notation) Schema is a JSON media type for defining 
\t\t\t\tthe structure of JSON data. JSON Schema provides a contract for what JSON 
\t\t\t\tdata is required for a given application and how to interact with it. JSON 
\t\t\t\tSchema is intended to define validation, documentation, hyperlink 
\t\t\t\tnavigation, and interaction control of JSON data. 
\t\t\t</t>
\t\t</section>
\t\t
\t\t<section title=\"Conventions\">
\t\t\t<t>
\t\t\t\t<!-- The text in this section has been copied from the official boilerplate, 
\t\t\t\tand should not be modified.-->
\t\t\t\t
\t\t\t\tThe key words \"MUST\", \"MUST NOT\", \"REQUIRED\", \"SHALL\", \"SHALL NOT\", \"SHOULD\", 
\t\t\t\t\"SHOULD NOT\", \"RECOMMENDED\", \"MAY\", and \"OPTIONAL\" in this document are to be
\t\t\t\tinterpreted as described in <xref target=\"RFC2119\">RFC 2119</xref>.
\t\t\t</t>
\t\t</section>
\t\t
\t\t<!-- ********************************************* -->
\t\t
\t\t<section title=\"Overview\">
\t\t\t<t>
\t\t\t\tJSON Schema defines the media type \"application/schema+json\" for 
\t\t\t\tdescribing the structure of other
\t\t\t\tJSON documents. JSON Schema is JSON-based and includes facilities 
\t\t\t\tfor describing the structure of JSON documents in terms of
\t\t\t\tallowable values, descriptions, and interpreting relations with other resources.
\t\t\t</t>
\t\t\t<t>
\t\t\t\tJSON Schema format is organized into several separate definitions. The first 
\t\t\t\tdefinition is the core schema specification. This definition is primary 
\t\t\t\tconcerned with describing a JSON structure and specifying valid elements
\t\t\t\tin the structure. The second definition is the Hyper Schema specification
\t\t\t\twhich is intended define elements in a structure that can be interpreted as
\t\t\t\thyperlinks.
\t\t\t\tHyper Schema builds on JSON Schema to describe the hyperlink structure of 
\t\t\t\tother JSON documents and elements of interaction. This allows user agents to be able to successfully navigate
\t\t\t\tJSON documents based on their schemas.
\t\t\t</t>
\t\t\t<t>
\t\t\t\tCumulatively JSON Schema acts as a meta-document that can be used to define the required type and constraints on
\t\t\t\tproperty values, as well as define the meaning of the property values
\t\t\t\tfor the purpose of describing a resource and determining hyperlinks
\t\t\t\twithin the representation. 
\t\t\t</t>
\t\t\t<figure>
\t\t\t\t<preamble>An example JSON Schema that describes products might look like:</preamble>
\t\t\t\t<artwork>
<![CDATA[\t
{
\t\"title\": \"Product\",
\t\"properties\": {
\t\t\"id\": {
\t\t\t\"type\": \"number\",
\t\t\t\"description\": \"Product identifier\",
\t\t\t\"required\": true
\t\t},
\t\t\"name\": {
\t\t\t\"description\": \"Name of the product\",
\t\t\t\"type\": \"string\",
\t\t\t\"required\": true
\t\t},
\t\t\"price\": {
\t\t\t\"required\": true,
\t\t\t\"type\": \"number\",
\t\t\t\"minimum\": 0,
\t\t\t\"required\": true
\t\t},
\t\t\"tags\": {
\t\t\t\"type\": \"array\",
\t\t\t\"items\": {
\t\t\t\t\"type\": \"string\"
\t\t\t}
\t\t}
\t},
\t\"links\": [{
\t\t\"rel\": \"full\",
\t\t\"href\": \"{id}\"
\t}, {
\t\t\"rel\": \"comments\",
\t\t\"href\": \"comments/?id={id}\"
\t}]
}
]]>
\t\t\t\t</artwork>
\t\t\t\t<postamble>
\t\t\t\t\tThis schema defines the properties of the instance JSON documents, 
\t\t\t\t\tthe required properties (id, name, and price), as well as an optional
\t\t\t\t\tproperty (tags). This also defines the link relations of the instance
\t\t\t\t\tJSON documents.
\t\t\t\t</postamble>
\t\t\t</figure>
\t\t\t
\t\t\t<section title=\"Terminology\">
\t\t\t\t<t>
\t\t\t\t\tFor this specification, <spanx style=\"strong\">schema</spanx> will be used to denote a JSON Schema 
\t\t\t\t\tdefinition, and an <spanx style=\"strong\">instance</spanx> refers to a JSON value that the schema 
\t\t\t\t\twill be describing and validating.
\t\t\t\t</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"Design Considerations\">
\t\t\t\t<t>
\t\t\t\t\tThe JSON Schema media type does not attempt to dictate the structure of JSON
\t\t\t\t\trepresentations that contain data, but rather provides a separate format
\t\t\t\t\tfor flexibly communicating how a JSON representation should be
\t\t\t\t\tinterpreted and validated, such that user agents can properly understand
\t\t\t\t\tacceptable structures and extrapolate hyperlink information
\t\t\t\t\twith the JSON document. It is acknowledged that JSON documents come
\t\t\t\t\tin a variety of structures, and JSON is unique in that the structure
\t\t\t\t\tof stored data structures often prescribes a non-ambiguous definite
\t\t\t\t\tJSON representation. Attempting to force a specific structure is generally
\t\t\t\t\tnot viable, and therefore JSON Schema allows for a great flexibility
\t\t\t\t\tin the structure of the JSON data that it describes.
\t\t\t\t</t>
\t\t\t\t<t>
\t\t\t\t\tThis specification is protocol agnostic.
\t\t\t\t\tThe underlying protocol (such as HTTP) should sufficiently define the
\t\t\t\t\tsemantics of the client-server interface, the retrieval of resource
\t\t\t\t\trepresentations linked to by JSON representations, and modification of 
\t\t\t\t\tthose resources. The goal of this
\t\t\t\t\tformat is to sufficiently describe JSON structures such that one can
\t\t\t\t\tutilize existing information available in existing JSON
\t\t\t\t\trepresentations from a large variety of services that leverage a representational state transfer
\t\t\t\t\tarchitecture using existing protocols.
\t\t\t\t</t>
\t\t\t</section>
\t\t</section>
\t\t
\t\t<section title=\"Schema/Instance Association\">
\t\t\t<t>
\t\t\t\tJSON Schema instances are correlated to their schema by the \"describedby\"
\t\t\t\trelation, where the schema is defined to be the target of the relation.
\t\t\t\tInstance representations may be of the \"application/json\" media type or
\t\t\t\tany other subtype. Consequently, dictating how an instance
\t\t\t\trepresentation should specify the relation to the schema is beyond the normative scope
\t\t\t\tof this document (since this document specifically defines the JSON
\t\t\t\tSchema media type, and no other), but it is recommended that instances
\t\t\t\tspecify their schema so that user agents can interpret the instance
\t\t\t\trepresentation and messages may retain the self-descriptive
\t\t\t\tcharacteristic, avoiding the need for out-of-band information about
\t\t\t\tinstance data. Two approaches are recommended for declaring the
\t\t\t\trelation to the schema that describes the meaning of a JSON instance's (or collection 
\t\t\t\tof instances) structure. A MIME type parameter named
\t\t\t\t\"profile\" or a relation of \"describedby\" (which could be defined by a Link header) may be used:
\t\t\t\t
\t\t\t\t<figure>
\t\t\t\t\t<artwork>
<![CDATA[\t
Content-Type: application/my-media-type+json;
              profile=http://json.com/my-hyper-schema
]]>
\t\t\t\t\t</artwork>
\t\t\t\t</figure>
\t\t\t\t
\t\t\t\tor if the content is being transferred by a protocol (such as HTTP) that
\t\t\t\tprovides headers, a Link header can be used:
\t\t\t\t
\t\t\t\t<figure>
\t\t\t\t\t<artwork>
<![CDATA[
Link: <http://json.com/my-hyper-schema>; rel=\"describedby\"
]]>
\t\t\t\t\t</artwork>
\t\t\t\t</figure>
\t\t\t\t
\t\t\t\tInstances MAY specify multiple schemas, to indicate all the schemas that 
\t\t\t\tare applicable to the data, and the data SHOULD be valid by all the schemas. 
\t\t\t\tThe instance data MAY have multiple schemas 
\t\t\t\tthat it is defined by (the instance data SHOULD be valid for those schemas). 
\t\t\t\tOr if the document is a collection of instances, the collection MAY contain 
\t\t\t\tinstances from different schemas. When collections contain heterogeneous 
\t\t\t\tinstances, the \"pathStart\" attribute MAY be specified in the 
\t\t\t\tschema to disambiguate which schema should be applied for each item in the 
\t\t\t\tcollection. However, ultimately, the mechanism for referencing a schema is up to the
\t\t\t\tmedia type of the instance documents (if they choose to specify that schemas
\t\t\t\tcan be referenced).
\t\t\t</t>
\t\t\t
\t\t\t<section title=\"Self-Descriptive Schema\">
\t\t\t\t<t>
\t\t\t\t\tJSON Schemas can themselves be described using JSON Schemas. 
\t\t\t\t\tA self-describing JSON Schema for the core JSON Schema can
\t\t\t\t\tbe found at <eref target=\"http://json-schema.org/schema\">http://json-schema.org/schema</eref> for the latest version or 
\t\t\t\t\t<eref target=\"http://json-schema.org/draft-03/schema\">http://json-schema.org/draft-03/schema</eref> for the draft-03 version. The hyper schema 
\t\t\t\t\tself-description can be found at <eref target=\"http://json-schema.org/hyper-schema\">http://json-schema.org/hyper-schema</eref> 
\t\t\t\t\tor <eref target=\"http://json-schema.org/draft-03/hyper-schema\">http://json-schema.org/draft-03/hyper-schema</eref>. All schemas
\t\t\t\t\tused within a protocol with media type definitions
\t\t\t\t\tSHOULD include a MIME parameter that refers to the self-descriptive
\t\t\t\t\thyper schema or another schema that extends this hyper schema:
\t\t\t\t\t
\t\t\t\t\t<figure>
\t\t\t\t\t\t<artwork>
<![CDATA[\t
Content-Type: application/json; 
              profile=http://json-schema.org/draft-03/hyper-schema
]]>
\t\t\t\t\t\t</artwork>
\t\t\t\t\t</figure>
\t\t\t\t</t>
\t\t\t</section>
\t\t</section>
\t\t
\t\t<section title=\"Core Schema Definition\">
\t\t\t<t>
\t\t\t\tA JSON Schema is a JSON Object that defines various attributes 
\t\t\t\t(including usage and valid values) of a JSON value. JSON
\t\t\t\tSchema has recursive capabilities; there are a number of elements
\t\t\t\tin the structure that allow for nested JSON Schemas.
\t\t\t</t>
\t\t\t
\t\t\t<figure>
\t\t\t\t<preamble>An example JSON Schema definition could look like:</preamble>
\t\t\t\t<artwork>
<![CDATA[
{
\t\"description\": \"A person\",
\t\"type\": \"object\",

\t\"properties\": {
\t\t\"name\": {
\t\t\t\"type\": \"string\"
\t\t},
\t\t\"age\": {
\t\t\t\"type\": \"integer\",
\t\t\t\"maximum\": 125
\t\t}
\t}
}
]]>
\t\t\t\t</artwork>
\t\t\t</figure>
\t\t\t
\t\t\t<t>
\t\t\t\tA JSON Schema object may have any of the following properties, called schema
\t\t\t\tattributes (all attributes are optional):
\t\t\t</t>
\t\t\t
\t\t\t<section title=\"type\">
\t\t\t\t<t>
\t\t\t\t\tThis attribute defines what the primitive type or the schema of the instance MUST be in order to validate. 
\t\t\t\t\tThis attribute can take one of two forms:

\t\t\t\t\t<list style=\"hanging\">
\t\t\t\t\t\t<t hangText=\"Simple Types\">
\t\t\t\t\t\t\tA string indicating a primitive or simple type. The following are acceptable string values:

\t\t\t\t\t\t\t<list style=\"hanging\">
\t\t\t\t\t\t\t\t<t hangText=\"string\">Value MUST be a string.</t>
\t\t\t\t\t\t\t\t<t hangText=\"number\">Value MUST be a number, floating point numbers are allowed. </t>
\t\t\t\t\t\t\t\t<t hangText=\"integer\">Value MUST be an integer, no floating point numbers are allowed. This is a subset of the number type.</t>
\t\t\t\t\t\t\t\t<t hangText=\"boolean\">Value MUST be a boolean. </t>
\t\t\t\t\t\t\t\t<t hangText=\"object\">Value MUST be an object.</t>
\t\t\t\t\t\t\t\t<t hangText=\"array\">Value MUST be an array.</t>
\t\t\t\t\t\t\t\t<t hangText=\"null\">Value MUST be null. Note this is mainly for purpose of being able use union types to define nullability. If this type is not included in a union, null values are not allowed (the primitives listed above do not allow nulls on their own).</t>
\t\t\t\t\t\t\t\t<t hangText=\"any\">Value MAY be of any type including null.</t>
\t\t\t\t\t\t\t</list>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tIf the property is not defined or is not in this list, then any type of value is acceptable. 
\t\t\t\t\t\t\tOther type values MAY be used for custom purposes, but minimal validators of the specification 
\t\t\t\t\t\t\timplementation can allow any instance value on unknown type values.
\t\t\t\t\t\t</t>
\t\t\t\t\t\t
\t\t\t\t\t\t<t hangText=\"Union Types\">
\t\t\t\t\t\t\tAn array of two or more simple type definitions. Each item in the array MUST be a simple type definition or a schema.
\t\t\t\t\t\t\tThe instance value is valid if it is of the same type as one of the simple type definitions, or valid by one of the schemas, in the array. 
\t\t\t\t\t\t</t>
\t\t\t\t\t</list>
\t\t\t\t</t>
\t\t\t\t
\t\t\t\t<figure>
\t\t\t\t\t<preamble>For example, a schema that defines if an instance can be a string or a number would be:</preamble>
\t\t\t\t\t<artwork>
<![CDATA[
{
\t\"type\": [\"string\", \"number\"]
}
]]></artwork>
\t\t\t\t</figure>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"properties\" anchor=\"properties\">
\t\t\t\t<t>This attribute is an object with property definitions that define the valid values of instance object property values. When the instance value is an object, the property values of the instance object MUST conform to the property definitions in this object. In this object, each property definition's value MUST be a schema, and the property's name MUST be the name of the instance property that it defines. The instance property value MUST be valid according to the schema from the property definition. Properties are considered unordered, the order of the instance properties MAY be in any order.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"patternProperties\">
\t\t\t\t<t>This attribute is an object that defines the schema for a set of property names of an object instance. The name of each property of this attribute's object is a regular expression pattern in the ECMA 262/Perl 5 format, while the value is a schema. If the pattern matches the name of a property on the instance object, the value of the instance's property MUST be valid against the pattern name's schema value.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"additionalProperties\" anchor=\"additionalProperties\">
\t\t\t\t<t>This attribute defines a schema for all properties that are not explicitly defined in an object type definition. If specified, the value MUST be a schema or a boolean. If false is provided, no additional properties are allowed beyond the properties defined in the schema. The default value is an empty schema which allows any value for additional properties.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"items\">
\t\t\t\t<t>This attribute defines the allowed items in an instance array, and MUST be a schema or an array of schemas. The default value is an empty schema which allows any value for items in the instance array.</t>
\t\t\t\t<t>When this attribute value is a schema and the instance value is an array, then all the items in the array MUST be valid according to the schema.</t>
\t\t\t\t<t>When this attribute value is an array of schemas and the instance value is an array, each position in the instance array MUST conform to the schema in the corresponding position for this array. This called tuple typing. When tuple typing is used, additional items are allowed, disallowed, or constrained by the <xref target=\"additionalItems\">\"additionalItems\"</xref> attribute using the same rules as <xref target=\"additionalProperties\">\"additionalProperties\"</xref> for objects.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"additionalItems\" anchor=\"additionalItems\">
\t\t\t\t<t>This provides a definition for additional items in an array instance when tuple definitions of the items is provided. This can be false to indicate additional items in the array are not allowed, or it can be a schema that defines the schema of the additional items.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"required\">
\t\t\t\t<t>This attribute indicates if the instance must have a value, and not be undefined. This is false by default, making the instance optional.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"dependencies\">
\t\t\t\t<t>This attribute is an object that defines the requirements of a property on an instance object. If an object instance has a property with the same name as a property in this attribute's object, then the instance must be valid against the attribute's property value (hereafter referred to as the \"dependency value\").</t>
\t\t\t\t<t>
\t\t\t\t\tThe dependency value can take one of two forms:
\t\t\t\t\t
\t\t\t\t\t<list style=\"hanging\">
\t\t\t\t\t\t<t hangText=\"Simple Dependency\">
\t\t\t\t\t\t\tIf the dependency value is a string, then the instance object MUST have a property with the same name as the dependency value.
\t\t\t\t\t\t\tIf the dependency value is an array of strings, then the instance object MUST have a property with the same name as each string in the dependency value's array.
\t\t\t\t\t\t</t>
\t\t\t\t\t\t<t hangText=\"Schema Dependency\">
\t\t\t\t\t\t\tIf the dependency value is a schema, then the instance object MUST be valid against the schema.
\t\t\t\t\t\t</t>
\t\t\t\t\t</list>
\t\t\t\t</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"minimum\">
\t\t\t\t<t>This attribute defines the minimum value of the instance property when the type of the instance value is a number.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"maximum\">
\t\t\t\t<t>This attribute defines the maximum value of the instance property when the type of the instance value is a number.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"exclusiveMinimum\">
\t\t\t\t<t>This attribute indicates if the value of the instance (if the instance is a number) can not equal the number defined by the \"minimum\" attribute. This is false by default, meaning the instance value can be greater then or equal to the minimum value.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"exclusiveMaximum\">
\t\t\t\t<t>This attribute indicates if the value of the instance (if the instance is a number) can not equal the number defined by the \"maximum\" attribute. This is false by default, meaning the instance value can be less then or equal to the maximum value.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"minItems\">
\t\t\t\t<t>This attribute defines the minimum number of values in an array when the array is the instance value.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"maxItems\">
\t\t\t\t<t>This attribute defines the maximum number of values in an array when the array is the instance value.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"uniqueItems\" anchor=\"uniqueItems\">
\t\t\t\t<t>This attribute indicates that all items in an array instance MUST be unique (contains no two identical values).</t>
\t\t\t\t<t>
\t\t\t\t\tTwo instance are consider equal if they are both of the same type and:
\t\t\t\t\t
\t\t\t\t\t<list>
\t\t\t\t\t\t<t>are null; or</t>
\t\t\t\t\t\t<t>are booleans/numbers/strings and have the same value; or</t>
\t\t\t\t\t\t<t>are arrays, contains the same number of items, and each item in the array is equal to the corresponding item in the other array; or</t>
\t\t\t\t\t\t<t>are objects, contains the same property names, and each property in the object is equal to the corresponding property in the other object.</t>
\t\t\t\t\t</list>
\t\t\t\t</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"pattern\">
\t\t\t\t<t>When the instance value is a string, this provides a regular expression that a string instance MUST match in order to be valid. Regular expressions SHOULD follow the regular expression specification from ECMA 262/Perl 5</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"minLength\">
\t\t\t\t<t>When the instance value is a string, this defines the minimum length of the string.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"maxLength\">
\t\t\t\t<t>When the instance value is a string, this defines the maximum length of the string.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"enum\">
\t\t\t\t<t>This provides an enumeration of all possible values that are valid for the instance property. This MUST be an array, and each item in the array represents a possible value for the instance value. If this attribute is defined, the instance value MUST be one of the values in the array in order for the schema to be valid. Comparison of enum values uses the same algorithm as defined in <xref target=\"uniqueItems\">\"uniqueItems\"</xref>.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"default\">
\t\t\t\t<t>This attribute defines the default value of the instance when the instance is undefined.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"title\">
\t\t\t\t<t>This attribute is a string that provides a short description of the instance property.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"description\">
\t\t\t\t<t>This attribute is a string that provides a full description of the of purpose the instance property.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"format\">
\t\t\t\t<t>This property defines the type of data, content type, or microformat to be expected in the instance property values. A format attribute MAY be one of the values listed below, and if so, SHOULD adhere to the semantics describing for the format. A format SHOULD only be used to give meaning to primitive types (string, integer, number, or boolean). Validators MAY (but are not required to) validate that the instance values conform to a format.</t>
\t\t\t\t
\t\t\t\t<t>
\t\t\t\t\tThe following formats are predefined:
\t\t\t\t\t
\t\t\t\t\t<list style=\"hanging\">
\t\t\t\t\t\t<t hangText=\"date-time\">This SHOULD be a date in ISO 8601 format of YYYY-MM-DDThh:mm:ssZ in UTC time. This is the recommended form of date/timestamp.</t>
\t\t\t\t\t\t<t hangText=\"date\">This SHOULD be a date in the format of YYYY-MM-DD. It is recommended that you use the \"date-time\" format instead of \"date\" unless you need to transfer only the date part.</t>
\t\t\t\t\t\t<t hangText=\"time\">This SHOULD be a time in the format of hh:mm:ss. It is recommended that you use the \"date-time\" format instead of \"time\" unless you need to transfer only the time part.</t>
\t\t\t\t\t\t<t hangText=\"utc-millisec\">This SHOULD be the difference, measured in milliseconds, between the specified time and midnight, 00:00 of January 1, 1970 UTC. The value SHOULD be a number (integer or float).</t>
\t\t\t\t\t\t<t hangText=\"regex\">A regular expression, following the regular expression specification from ECMA 262/Perl 5.</t>
\t\t\t\t\t\t<t hangText=\"color\">This is a CSS color (like \"#FF0000\" or \"red\"), based on <xref target=\"W3C.CR-CSS21-20070719\">CSS 2.1</xref>.</t>
\t\t\t\t\t\t<t hangText=\"style\">This is a CSS style definition (like \"color: red; background-color:#FFF\"), based on <xref target=\"W3C.CR-CSS21-20070719\">CSS 2.1</xref>.</t>
\t\t\t\t\t\t<t hangText=\"phone\">This SHOULD be a phone number (format MAY follow E.123).</t>
\t\t\t\t\t\t<t hangText=\"uri\">This value SHOULD be a URI.</t>
\t\t\t\t\t\t<t hangText=\"email\">This SHOULD be an email address.</t>
\t\t\t\t\t\t<t hangText=\"ip-address\">This SHOULD be an ip version 4 address.</t>
\t\t\t\t\t\t<t hangText=\"ipv6\">This SHOULD be an ip version 6 address.</t>
\t\t\t\t\t\t<t hangText=\"host-name\">This SHOULD be a host-name.</t>
\t\t\t\t\t</list>
\t\t\t\t</t>
\t\t\t\t
\t\t\t\t<t>Additional custom formats MAY be created. These custom formats MAY be expressed as an URI, and this URI MAY reference a schema of that format.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"divisibleBy\">
\t\t\t\t<t>This attribute defines what value the number instance must be divisible by with no remainder (the result of the division must be an integer.) The value of this attribute SHOULD NOT be 0.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"disallow\">
\t\t\t\t<t>This attribute takes the same values as the \"type\" attribute, however if the instance matches the type or if this value is an array and the instance matches any type or schema in the array, then this instance is not valid.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"extends\">
\t\t\t\t<t>The value of this property MUST be another schema which will provide a base schema which the current schema will inherit from. The inheritance rules are such that any instance that is valid according to the current schema MUST be valid according to the referenced schema. This MAY also be an array, in which case, the instance MUST be valid for all the schemas in the array. A schema that extends another schema MAY define additional attributes, constrain existing attributes, or add other constraints.</t>
\t\t\t\t<t>
\t\t\t\t\tConceptually, the behavior of extends can be seen as validating an
\t\t\t\t\tinstance against all constraints in the extending schema as well as
\t\t\t\t\tthe extended schema(s). More optimized implementations that merge
\t\t\t\t\tschemas are possible, but are not required. Some examples of using \"extends\":
\t\t\t\t\t
\t\t\t\t\t<figure>
\t\t\t\t\t\t<artwork>
<![CDATA[
{
\t\"description\": \"An adult\",
\t\"properties\": {
\t\t\"age\": {
\t\t\t\"minimum\": 21
\t\t}
\t},
\t\"extends\": {\"\$ref\": \"person\"}
}
]]>
\t\t\t\t\t\t</artwork>
\t\t\t\t\t</figure>
\t\t\t\t\t
\t\t\t\t\t<figure>
\t\t\t\t\t\t<artwork>
<![CDATA[
{
\t\"description\": \"Extended schema\",
\t\"properties\": {
\t\t\"deprecated\": {
\t\t\t\"type\": \"boolean\"
\t\t}
\t},
\t\"extends\": {\"\$ref\": \"http://json-schema.org/draft-03/schema\"}
}
]]>
\t\t\t\t\t\t</artwork>
\t\t\t\t\t</figure>
\t\t\t\t</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"id\">
\t\t\t\t<t>
\t\t\t\t\tThis attribute defines the current URI of this schema (this attribute is
\t\t\t\t\teffectively a \"self\" link). This URI MAY be relative or absolute. If
\t\t\t\t\tthe URI is relative it is resolved against the current URI of the parent
\t\t\t\t\tschema it is contained in. If this schema is not contained in any
\t\t\t\t\tparent schema, the current URI of the parent schema is held to be the
\t\t\t\t\tURI under which this schema was addressed. If id is missing, the current URI of a schema is
\t\t\t\t\tdefined to be that of the parent schema. The current URI of the schema
\t\t\t\t\tis also used to construct relative references such as for \$ref.
\t\t\t\t</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"\$ref\">
\t\t\t\t<t>
\t\t\t\t\tThis attribute defines a URI of a schema that contains the full representation of this schema. 
\t\t\t\t\tWhen a validator encounters this attribute, it SHOULD replace the current schema with the schema referenced by the value's URI (if known and available) and re-validate the instance. 
\t\t\t\t\tThis URI MAY be relative or absolute, and relative URIs SHOULD be resolved against the URI of the current schema.
\t\t\t\t</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"\$schema\">
\t\t\t\t<t>
\t\t\t\t\tThis attribute defines a URI of a JSON Schema that is the schema of the current schema. 
\t\t\t\t\tWhen this attribute is defined, a validator SHOULD use the schema referenced by the value's URI (if known and available) when resolving <xref target=\"hyper-schema\">Hyper Schema</xref><xref target=\"links\">links</xref>.
\t\t\t\t</t>
\t\t\t\t
\t\t\t\t<t>
\t\t\t\t\tA validator MAY use this attribute's value to determine which version of JSON Schema the current schema is written in, and provide the appropriate validation features and behavior. 
\t\t\t\t\tTherefore, it is RECOMMENDED that all schema authors include this attribute in their schemas to prevent conflicts with future JSON Schema specification changes.
\t\t\t\t</t>
\t\t\t</section>
\t\t</section>
\t\t
\t\t<section title=\"Hyper Schema\" anchor=\"hyper-schema\">
\t\t\t<t>
\t\t\t\tThe following attributes are specified in addition to those
\t\t\t\tattributes that already provided by the core schema with the specific
\t\t\t\tpurpose of informing user agents of relations between resources based
\t\t\t\ton JSON data. Just as with JSON
\t\t\t\tschema attributes, all the attributes in hyper schemas are optional.
\t\t\t\tTherefore, an empty object is a valid (non-informative) schema, and
\t\t\t\tessentially describes plain JSON (no constraints on the structures).
\t\t\t\tAddition of attributes provides additive information for user agents.
\t\t\t</t>
\t\t\t
\t\t\t<section title=\"links\" anchor=\"links\">
\t\t\t\t<t>
\t\t\t\t\tThe value of the links property MUST be an array, where each item 
\t\t\t\t\tin the array is a link description object which describes the link
\t\t\t\t\trelations of the instances.
\t\t\t\t</t>
\t\t\t\t
\t\t\t\t<section title=\"Link Description Object\">
\t\t\t\t\t<t>
\t\t\t\t\t\tA link description object is used to describe link relations. In 
\t\t\t\t\t\tthe context of a schema, it defines the link relations of the 
\t\t\t\t\t\tinstances of the schema, and can be parameterized by the instance
\t\t\t\t\t\tvalues. The link description format can be used on its own in
\t\t\t\t\t\tregular (non-schema documents), and use of this format can
\t\t\t\t\t\tbe declared by referencing the normative link description
\t\t\t\t\t\tschema as the the schema for the data structure that uses the 
\t\t\t\t\t\tlinks. The URI of the normative link description schema is: 
\t\t\t\t\t\t<eref target=\"http://json-schema.org/links\">http://json-schema.org/links</eref> (latest version) or
\t\t\t\t\t\t<eref target=\"http://json-schema.org/draft-03/links\">http://json-schema.org/draft-03/links</eref> (draft-03 version).
\t\t\t\t\t</t>
\t\t\t\t\t
\t\t\t\t\t<section title=\"href\">
\t\t\t\t\t\t<t>
\t\t\t\t\t\t\tThe value of the \"href\" link description property
\t\t\t\t\t\t\tindicates the target URI of the related resource. The value
\t\t\t\t\t\t\tof the instance property SHOULD be resolved as a URI-Reference per <xref target=\"RFC3986\">RFC 3986</xref>
\t\t\t\t\t\t\tand MAY be a relative URI. The base URI to be used for relative resolution
\t\t\t\t\t\t\tSHOULD be the URI used to retrieve the instance object (not the schema)
\t\t\t\t\t\t\twhen used within a schema. Also, when links are used within a schema, the URI 
\t\t\t\t\t\t\tSHOULD be parametrized by the property values of the instance 
\t\t\t\t\t\t\tobject, if property values exist for the corresponding variables
\t\t\t\t\t\t\tin the template (otherwise they MAY be provided from alternate sources, like user input).
\t\t\t\t\t\t</t>
\t\t\t\t\t\t
\t\t\t\t\t\t<t>
\t\t\t\t\t\t\tInstance property values SHOULD be substituted into the URIs where
\t\t\t\t\t\t\tmatching braces ('{', '}') are found surrounding zero or more characters,
\t\t\t\t\t\t\tcreating an expanded URI. Instance property value substitutions are resolved
\t\t\t\t\t\t\tby using the text between the braces to denote the property name
\t\t\t\t\t\t\tfrom the instance to get the value to substitute. 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<preamble>For example, if an href value is defined:</preamble>
\t\t\t\t\t\t\t\t<artwork>
<![CDATA[
http://somesite.com/{id}
]]>
\t\t\t\t\t\t\t\t</artwork>
\t\t\t\t\t\t\t\t<postamble>Then it would be resolved by replace the value of the \"id\" property value from the instance object.</postamble>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<preamble>If the value of the \"id\" property was \"45\", the expanded URI would be:</preamble>
\t\t\t\t\t\t\t\t<artwork>
<![CDATA[
http://somesite.com/45
]]>
\t\t\t\t\t\t\t\t</artwork>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tIf matching braces are found with the string \"@\" (no quotes) between the braces, then the 
\t\t\t\t\t\t\tactual instance value SHOULD be used to replace the braces, rather than a property value.
\t\t\t\t\t\t\tThis should only be used in situations where the instance is a scalar (string, 
\t\t\t\t\t\t\tboolean, or number), and not for objects or arrays.
\t\t\t\t\t\t</t>
\t\t\t\t\t</section>
\t\t\t\t\t
\t\t\t\t\t<section title=\"rel\">
\t\t\t\t\t\t<t>
\t\t\t\t\t\t\tThe value of the \"rel\" property indicates the name of the 
\t\t\t\t\t\t\trelation to the target resource. The relation to the target SHOULD be interpreted as specifically from the instance object that the schema (or sub-schema) applies to, not just the top level resource that contains the object within its hierarchy. If a resource JSON representation contains a sub object with a property interpreted as a link, that sub-object holds the relation with the target. A relation to target from the top level resource MUST be indicated with the schema describing the top level JSON representation.
\t\t\t\t\t\t</t>
\t\t\t\t\t\t
\t\t\t\t\t\t<t>
\t\t\t\t\t\t\tRelationship definitions SHOULD NOT be media type dependent, and users are encouraged to utilize existing accepted relation definitions, including those in existing relation registries (see <xref target=\"RFC4287\">RFC 4287</xref>). However, we define these relations here for clarity of normative interpretation within the context of JSON hyper schema defined relations:
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<list style=\"hanging\">
\t\t\t\t\t\t\t\t<t hangText=\"self\">
\t\t\t\t\t\t\t\t\tIf the relation value is \"self\", when this property is encountered in
\t\t\t\t\t\t\t\t\tthe instance object, the object represents a resource and the instance object is
\t\t\t\t\t\t\t\t\ttreated as a full representation of the target resource identified by
\t\t\t\t\t\t\t\t\tthe specified URI.
\t\t\t\t\t\t\t\t</t>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<t hangText=\"full\">
\t\t\t\t\t\t\t\t\tThis indicates that the target of the link is the full representation for the instance object. The object that contains this link possibly may not be the full representation.
\t\t\t\t\t\t\t\t</t>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<t hangText=\"describedby\">
\t\t\t\t\t\t\t\t\tThis indicates the target of the link is the schema for the instance object. This MAY be used to specifically denote the schemas of objects within a JSON object hierarchy, facilitating polymorphic type data structures.
\t\t\t\t\t\t\t\t</t>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<t hangText=\"root\">
\t\t\t\t\t\t\t\t\tThis relation indicates that the target of the link
\t\t\t\t\t\t\t\t\tSHOULD be treated as the root or the body of the representation for the
\t\t\t\t\t\t\t\t\tpurposes of user agent interaction or fragment resolution. All other
\t\t\t\t\t\t\t\t\tproperties of the instance objects can be regarded as meta-data
\t\t\t\t\t\t\t\t\tdescriptions for the data.
\t\t\t\t\t\t\t\t</t>
\t\t\t\t\t\t\t</list>
\t\t\t\t\t\t</t>
\t\t\t\t\t\t
\t\t\t\t\t\t<t>
\t\t\t\t\t\t\tThe following relations are applicable for schemas (the schema as the \"from\" resource in the relation):

\t\t\t\t\t\t\t<list style=\"hanging\">
\t\t\t\t\t\t\t\t<t hangText=\"instances\">This indicates the target resource that represents collection of instances of a schema.</t>
\t\t\t\t\t\t\t\t<t hangText=\"create\">This indicates a target to use for creating new instances of a schema. This link definition SHOULD be a submission link with a non-safe method (like POST).</t>
\t\t\t\t\t\t\t</list>
\t\t\t\t\t\t</t>
\t\t\t\t\t\t
\t\t\t\t\t\t<t>
\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<preamble>For example, if a schema is defined:</preamble>
\t\t\t\t\t\t\t\t<artwork>
<![CDATA[
{
\t\"links\": [{
\t\t\"rel\": \"self\",
\t\t\"href\": \"{id}\"
\t}, {
\t\t\"rel\": \"up\",
\t\t\"href\": \"{upId}\"
\t}, {
\t\t\"rel\": \"children\",
\t\t\"href\": \"?upId={id}\"
\t}]
}
]]>
\t\t\t\t\t\t\t\t</artwork>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<preamble>And if a collection of instance resource's JSON representation was retrieved:</preamble>
\t\t\t\t\t\t\t\t<artwork>
<![CDATA[
GET /Resource/

[{
\t\"id\": \"thing\",
\t\"upId\": \"parent\"
}, {
\t\"id\": \"thing2\",
\t\"upId\": \"parent\"
}]
]]>
\t\t\t\t\t\t\t\t</artwork>
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\tThis would indicate that for the first item in the collection, its own
\t\t\t\t\t\t\t(self) URI would resolve to \"/Resource/thing\" and the first item's \"up\"
\t\t\t\t\t\t\trelation SHOULD be resolved to the resource at \"/Resource/parent\".
\t\t\t\t\t\t\tThe \"children\" collection would be located at \"/Resource/?upId=thing\".
\t\t\t\t\t\t</t>
\t\t\t\t\t</section>
\t\t\t\t\t
\t\t\t\t\t<section title=\"targetSchema\">
\t\t\t\t\t\t<t>This property value is a schema that defines the expected structure of the JSON representation of the target of the link.</t>
\t\t\t\t\t</section>
\t\t\t\t\t
\t\t\t\t\t<section title=\"Submission Link Properties\">
\t\t\t\t\t\t<t>
\t\t\t\t\t\t\tThe following properties also apply to link definition objects, and 
\t\t\t\t\t\t\tprovide functionality analogous to HTML forms, in providing a 
\t\t\t\t\t\t\tmeans for submitting extra (often user supplied) information to send to a server.
\t\t\t\t\t\t</t>
\t\t\t\t\t\t
\t\t\t\t\t\t<section title=\"method\">
\t\t\t\t\t\t\t<t>
\t\t\t\t\t\t\t\tThis attribute defines which method can be used to access the target resource. 
\t\t\t\t\t\t\t\tIn an HTTP environment, this would be \"GET\" or \"POST\" (other HTTP methods 
\t\t\t\t\t\t\t\tsuch as \"PUT\" and \"DELETE\" have semantics that are clearly implied by 
\t\t\t\t\t\t\t\taccessed resources, and do not need to be defined here). 
\t\t\t\t\t\t\t\tThis defaults to \"GET\".
\t\t\t\t\t\t\t</t>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t
\t\t\t\t\t\t<section title=\"enctype\">
\t\t\t\t\t\t\t<t>
\t\t\t\t\t\t\t\tIf present, this property indicates a query media type format that the server
\t\t\t\t\t\t\t\tsupports for querying or posting to the collection of instances at the target 
\t\t\t\t\t\t\t\tresource. The query can be 
\t\t\t\t\t\t\t\tsuffixed to the target URI to query the collection with
\t\t\t\t\t\t\t\tproperty-based constraints on the resources that SHOULD be returned from
\t\t\t\t\t\t\t\tthe server or used to post data to the resource (depending on the method).
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t<preamble>For example, with the following schema:</preamble>
\t\t\t\t\t\t\t\t\t<artwork>
<![CDATA[
{
\t\"links\": [{
\t\t\"enctype\": \"application/x-www-form-urlencoded\",
\t\t\"method\": \"GET\",
\t\t\"href\": \"/Product/\",
\t\t\"properties\": {
\t\t\t\"name\": {
\t\t\t\t\"description\": \"name of the product\"
\t\t\t}
\t\t}
\t}]
}
]]>
\t\t\t\t\t\t\t\t\t</artwork>
\t\t\t\t\t\t\t\t\t<postamble>This indicates that the client can query the server for instances that have a specific name.</postamble>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t<preamble>For example:</preamble>
\t\t\t\t\t\t\t\t\t<artwork>
<![CDATA[
/Product/?name=Slinky
]]>
\t\t\t\t\t\t\t\t\t</artwork>
\t\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t\tIf no enctype or method is specified, only the single URI specified by 
\t\t\t\t\t\t\t\tthe href property is defined. If the method is POST, \"application/json\" is 
\t\t\t\t\t\t\t\tthe default media type.
\t\t\t\t\t\t\t</t>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t
\t\t\t\t\t\t<section title=\"schema\">
\t\t\t\t\t\t\t<t>
\t\t\t\t\t\t\t\tThis attribute contains a schema which defines the acceptable structure of the submitted
\t\t\t\t\t\t\t\trequest (for a GET request, this schema would define the properties for the query string 
\t\t\t\t\t\t\t\tand for a POST request, this would define the body).
\t\t\t\t\t\t\t</t>
\t\t\t\t\t\t</section>
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"fragmentResolution\">
\t\t\t\t<t>
\t\t\t\t\tThis property indicates the fragment resolution protocol to use for
\t\t\t\t\tresolving fragment identifiers in URIs within the instance
\t\t\t\t\trepresentations. This applies to the instance object URIs and all
\t\t\t\t\tchildren of the instance object's URIs. The default fragment resolution
\t\t\t\t\tprotocol is \"slash-delimited\", which is defined below. Other fragment
\t\t\t\t\tresolution protocols MAY be used, but are not defined in this document.
\t\t\t\t</t>
\t\t\t\t
\t\t\t\t<t>
\t\t\t\t\tThe fragment identifier is based on <xref target=\"RFC2396\">RFC 2396, Sec 5</xref>, and defines the
\t\t\t\t\tmechanism for resolving references to entities within a document.
\t\t\t\t</t>
\t\t\t\t
\t\t\t\t<section title=\"slash-delimited fragment resolution\">
\t\t\t\t\t<t>
\t\t\t\t\t\tWith the slash-delimited fragment resolution protocol, the fragment
\t\t\t\t\t\tidentifier is interpreted as a series of property reference tokens that start with and
\t\t\t\t\t\tare delimited by the \"/\" character (\\x2F). Each property reference token
\t\t\t\t\t\tis a series of unreserved or escaped URI characters. Each property
\t\t\t\t\t\treference token SHOULD be interpreted, starting from the beginning of
\t\t\t\t\t\tthe fragment identifier, as a path reference in the target JSON
\t\t\t\t\t\tstructure. The final target value of the fragment can be determined by
\t\t\t\t\t\tstarting with the root of the JSON structure from the representation of
\t\t\t\t\t\tthe resource identified by the pre-fragment URI. If the target is a JSON
\t\t\t\t\t\tobject, then the new target is the value of the property with the name
\t\t\t\t\t\tidentified by the next property reference token in the fragment. If the
\t\t\t\t\t\ttarget is a JSON array, then the target is determined by finding the
\t\t\t\t\t\titem in array the array with the index defined by the next property
\t\t\t\t\t\treference token (which MUST be a number). The target is successively
\t\t\t\t\t\tupdated for each property reference token, until the entire fragment has
\t\t\t\t\t\tbeen traversed. 
\t\t\t\t\t</t>
\t\t\t\t\t
\t\t\t\t\t<t>
\t\t\t\t\t\tProperty names SHOULD be URI-encoded. In particular, any \"/\" in a 
\t\t\t\t\t\tproperty name MUST be encoded to avoid being interpreted as a property 
\t\t\t\t\t\tdelimiter.
\t\t\t\t\t</t>
\t\t\t\t\t
\t\t\t\t\t<t>
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<preamble>For example, for the following JSON representation:</preamble>
\t\t\t\t\t\t\t<artwork>
<![CDATA[
{
\t\"foo\": {
\t\t\"anArray\": [{
\t\t\t\"prop\": 44
\t\t}],
\t\t\"another prop\": {
\t\t\t\"baz\": \"A string\"
\t\t}
\t}
}
]]>
\t\t\t\t\t\t\t</artwork>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<preamble>The following fragment identifiers would be resolved:</preamble>
\t\t\t\t\t\t\t<artwork>
<![CDATA[
fragment identifier      resolution
-------------------      ----------
#                        self, the root of the resource itself
#/foo                    the object referred to by the foo property
#/foo/another%20prop     the object referred to by the \"another prop\"
                         property of the object referred to by the 
                         \"foo\" property
#/foo/another%20prop/baz the string referred to by the value of \"baz\"
                         property of the \"another prop\" property of 
                         the object referred to by the \"foo\" property
#/foo/anArray/0          the first object in the \"anArray\" array
]]>
\t\t\t\t\t\t\t</artwork>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</t>
\t\t\t\t</section>
\t\t\t\t
\t\t\t\t<section title=\"dot-delimited fragment resolution\">
\t\t\t\t\t<t>
\t\t\t\t\t\tThe dot-delimited fragment resolution protocol is the same as 
\t\t\t\t\t\tslash-delimited fragment resolution protocol except that the \".\" character 
\t\t\t\t\t\t(\\x2E) is used as the delimiter between property names (instead of \"/\") and 
\t\t\t\t\t\tthe path does not need to start with a \".\". For example, #.foo and #foo are a valid fragment
\t\t\t\t\t\tidentifiers for referencing the value of the foo propery.
\t\t\t\t\t</t>
\t\t\t\t</section>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"readonly\">
\t\t\t\t<t>This attribute indicates that the instance property SHOULD NOT be changed. Attempts by a user agent to modify the value of this property are expected to be rejected by a server.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"contentEncoding\">
\t\t\t\t<t>If the instance property value is a string, this attribute defines that the string SHOULD be interpreted as binary data and decoded using the encoding named by this schema property. <xref target=\"RFC2045\">RFC 2045, Sec 6.1</xref> lists the possible values for this property.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"pathStart\">
\t\t\t\t<t>
\t\t\t\t\tThis attribute is a URI that defines what the instance's URI MUST start with in order to validate. 
\t\t\t\t\tThe value of the \"pathStart\" attribute MUST be resolved as per <xref target=\"RFC3986\">RFC 3986, Sec 5</xref>, 
\t\t\t\t\tand is relative to the instance's URI.
\t\t\t\t</t>
\t\t\t\t
\t\t\t\t<t>
\t\t\t\t\tWhen multiple schemas have been referenced for an instance, the user agent 
\t\t\t\t\tcan determine if this schema is applicable for a particular instance by 
\t\t\t\t\tdetermining if the URI of the instance begins with the the value of the \"pathStart\"
\t\t\t\t\tattribute. If the URI of the instance does not start with this URI, 
\t\t\t\t\tor if another schema specifies a starting URI that is longer and also matches the 
\t\t\t\t\tinstance, this schema SHOULD NOT be applied to the instance. Any schema 
\t\t\t\t\tthat does not have a pathStart attribute SHOULD be considered applicable 
\t\t\t\t\tto all the instances for which it is referenced.
\t\t\t\t</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"mediaType\">
\t\t\t\t<t>This attribute defines the media type of the instance representations that this schema is defining.</t>
\t\t\t</section>
\t\t</section>
\t\t
\t\t<section title=\"Security Considerations\">
\t\t\t<t>
\t\t\t\tThis specification is a sub-type of the JSON format, and 
\t\t\t\tconsequently the security considerations are generally the same as <xref target=\"RFC4627\">RFC 4627</xref>. 
\t\t\t\tHowever, an additional issue is that when link relation of \"self\"
\t\t\t\tis used to denote a full representation of an object, the user agent 
\t\t\t\tSHOULD NOT consider the representation to be the authoritative representation
\t\t\t\tof the resource denoted by the target URI if the target URI is not
\t\t\t\tequivalent to or a sub-path of the the URI used to request the resource 
\t\t\t\trepresentation which contains the target URI with the \"self\" link.
\t\t\t\t
\t\t\t\t<figure>
\t\t\t\t\t<preamble>For example, if a hyper schema was defined:</preamble>
\t\t\t\t\t<artwork>
<![CDATA[
{
\t\"links\": [{
\t\t\"rel\": \"self\",
\t\t\"href\": \"{id}\"
\t}]
}
]]>
\t\t\t\t\t</artwork>
\t\t\t\t</figure>
\t\t\t\t
\t\t\t\t<figure>
\t\t\t\t\t<preamble>And a resource was requested from somesite.com:</preamble>
\t\t\t\t\t<artwork>
<![CDATA[
GET /foo/
]]>
\t\t\t\t\t</artwork>
\t\t\t\t</figure>

\t\t\t\t<figure>
\t\t\t\t\t<preamble>With a response of:</preamble>
\t\t\t\t\t<artwork>
<![CDATA[
Content-Type: application/json; profile=/schema-for-this-data

[{
\t\"id\": \"bar\",
\t\"name\": \"This representation can be safely treated \\
\t\tas authoritative \"
}, {
\t\"id\": \"/baz\",
\t\"name\": \"This representation should not be treated as \\
\t\tauthoritative the user agent should make request the resource\\
\t\tfrom '/baz' to ensure it has the authoritative representation\"
}, {
\t\"id\": \"http://othersite.com/something\",
\t\"name\": \"This representation\\
\t\tshould also not be treated as authoritative and the target\\
\t\tresource representation should be retrieved for the\\
\t\tauthoritative representation\"
}]
]]>
\t\t\t\t\t</artwork>
\t\t\t\t</figure>
\t\t\t</t>
\t\t</section>
\t\t
\t\t<section title=\"IANA Considerations\">
\t\t\t<t>The proposed MIME media type for JSON Schema is \"application/schema+json\".</t>
\t\t\t<t>Type name: application</t>
\t\t\t<t>Subtype name: schema+json</t>
\t\t\t<t>Required parameters: profile</t>
\t\t\t<t>
\t\t\t\tThe value of the profile parameter SHOULD be a URI (relative or absolute) that 
\t\t\t\trefers to the schema used to define the structure of this structure (the 
\t\t\t\tmeta-schema). Normally the value would be http://json-schema.org/draft-03/hyper-schema,
\t\t\t\tbut it is allowable to use other schemas that extend the hyper schema's meta-
\t\t\t\tschema.
\t\t\t</t>
\t\t\t<t>Optional parameters: pretty</t>
\t\t\t<t>The value of the pretty parameter MAY be true or false to indicate if additional whitespace has been included to make the JSON representation easier to read.</t>
\t\t\t
\t\t\t<section title=\"Registry of Link Relations\">
\t\t\t\t<t>
\t\t\t\t\tThis registry is maintained by IANA per <xref target=\"RFC4287\">RFC 4287</xref> and this specification adds
\t\t\t\t\tfour values: \"full\", \"create\", \"instances\", \"root\".  New
\t\t\t\t\tassignments are subject to IESG Approval, as outlined in <xref target=\"RFC5226\">RFC 5226</xref>.
\t\t\t\t\tRequests should be made by email to IANA, which will then forward the
\t\t\t\t\trequest to the IESG, requesting approval.
\t\t\t\t</t>
\t\t\t</section>
\t\t</section>
\t</middle>
\t
\t<back>
\t\t<!-- References Section -->
\t\t<references title=\"Normative References\">
\t\t\t&rfc2045;
\t\t\t&rfc2119;
\t\t\t&rfc2396;
\t\t\t&rfc3339;
\t\t\t&rfc3986;
\t\t\t&rfc4287;
\t\t</references>
\t\t<references title=\"Informative References\">
\t\t\t&rfc2616;
\t\t\t&rfc4627;
\t\t\t&rfc5226;
\t\t\t&iddiscovery;
\t\t\t&uritemplate;
\t\t\t&linkheader;
\t\t\t&html401;
\t\t\t&css21;
\t\t</references>

\t\t<section title=\"Change Log\">
\t\t\t<t>
\t\t\t\t<list style=\"hanging\">
\t\t\t\t\t<t hangText=\"draft-03\">
\t\t\t\t\t\t<list style=\"symbols\">
\t\t\t\t\t\t\t<t>Added example and verbiage to \"extends\" attribute.</t>
\t\t\t\t\t\t\t<t>Defined slash-delimited to use a leading slash.</t>
\t\t\t\t\t\t\t<t>Made \"root\" a relation instead of an attribute.</t>
\t\t\t\t\t\t\t<t>Removed address values, and MIME media type from format to reduce confusion (mediaType already exists, so it can be used for MIME types).</t>
\t\t\t\t\t\t\t<t>Added more explanation of nullability.</t>
\t\t\t\t\t\t\t<t>Removed \"alternate\" attribute.</t>
\t\t\t\t\t\t\t<t>Upper cased many normative usages of must, may, and should.</t>
\t\t\t\t\t\t\t<t>Replaced the link submission \"properties\" attribute to \"schema\" attribute.</t>
\t\t\t\t\t\t\t<t>Replaced \"optional\" attribute with \"required\" attribute.</t>
\t\t\t\t\t\t\t<t>Replaced \"maximumCanEqual\" attribute with \"exclusiveMaximum\" attribute.</t>
\t\t\t\t\t\t\t<t>Replaced \"minimumCanEqual\" attribute with \"exclusiveMinimum\" attribute.</t>
\t\t\t\t\t\t\t<t>Replaced \"requires\" attribute with \"dependencies\" attribute.</t>
\t\t\t\t\t\t\t<t>Moved \"contentEncoding\" attribute to hyper schema.</t>
\t\t\t\t\t\t\t<t>Added \"additionalItems\" attribute.</t>
\t\t\t\t\t\t\t<t>Added \"id\" attribute.</t>
\t\t\t\t\t\t\t<t>Switched self-referencing variable substitution from \"-this\" to \"@\" to align with reserved characters in URI template.</t>
\t\t\t\t\t\t\t<t>Added \"patternProperties\" attribute.</t>
\t\t\t\t\t\t\t<t>Schema URIs are now namespace versioned.</t>
\t\t\t\t\t\t\t<t>Added \"\$ref\" and \"\$schema\" attributes.</t>
\t\t\t\t\t\t</list>
\t\t\t\t\t</t>
\t\t\t\t\t
\t\t\t\t\t<t hangText=\"draft-02\">
\t\t\t\t\t\t<list style=\"symbols\">
\t\t\t\t\t\t\t<t>Replaced \"maxDecimal\" attribute with \"divisibleBy\" attribute.</t>
\t\t\t\t\t\t\t<t>Added slash-delimited fragment resolution protocol and made it the default.</t>
\t\t\t\t\t\t\t<t>Added language about using links outside of schemas by referencing its normative URI.</t>
\t\t\t\t\t\t\t<t>Added \"uniqueItems\" attribute.</t>
\t\t\t\t\t\t\t<t>Added \"targetSchema\" attribute to link description object.</t>
\t\t\t\t\t\t</list>
\t\t\t\t\t</t>
\t\t\t\t\t
\t\t\t\t\t<t hangText=\"draft-01\">
\t\t\t\t\t\t<list style=\"symbols\">
\t\t\t\t\t\t\t<t>Fixed category and updates from template.</t>
\t\t\t\t\t\t</list>
\t\t\t\t\t</t>
\t\t\t\t\t
\t\t\t\t\t<t hangText=\"draft-00\">
\t\t\t\t\t\t<list style=\"symbols\">
\t\t\t\t\t\t\t<t>Initial draft.</t>
\t\t\t\t\t\t</list>
\t\t\t\t\t</t>
\t\t\t\t</list>
\t\t\t</t>
\t\t</section>
\t\t
\t\t<section title=\"Open Issues\">
\t\t\t<t>
\t\t\t\t<list>
\t\t\t\t\t<t>Should we give a preference to MIME headers over Link headers (or only use one)?</t>
\t\t\t\t\t<t>Should \"root\" be a MIME parameter?</t>
\t\t\t\t\t<t>Should \"format\" be renamed to \"mediaType\" or \"contentType\" to reflect the usage MIME media types that are allowed?</t>
\t\t\t\t\t<t>How should dates be handled?</t>
\t\t\t\t</list>
\t\t\t</t>
\t\t</section>
\t</back>
</rfc>
";
        
        $__internal_a1a56726ee5da3f962657513386eaae106790c866feab419e80cf70f55024027->leave($__internal_a1a56726ee5da3f962657513386eaae106790c866feab419e80cf70f55024027_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/draft-zyp-json-schema-03.xml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"US-ASCII\"?>
<!DOCTYPE rfc SYSTEM \"rfc2629.dtd\" [
<!ENTITY rfc4627 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.4627.xml\">
<!ENTITY rfc3986 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.3986.xml\">
<!ENTITY rfc2119 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.2119.xml\">
<!ENTITY rfc4287 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.4287.xml\">
<!ENTITY rfc2616 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.2616.xml\">
<!ENTITY rfc3339 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.3339.xml\">
<!ENTITY rfc2045 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.2045.xml\">
<!ENTITY rfc5226 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.5226.xml\">
<!ENTITY rfc2396 SYSTEM \"http://xml.resource.org/public/rfc/bibxml/reference.RFC.2396.xml\">
<!ENTITY iddiscovery SYSTEM \"http://xml.resource.org/public/rfc/bibxml3/reference.I-D.hammer-discovery.xml\">
<!ENTITY uritemplate SYSTEM \"http://xml.resource.org/public/rfc/bibxml3/reference.I-D.gregorio-uritemplate.xml\">
<!ENTITY linkheader SYSTEM \"http://xml.resource.org/public/rfc/bibxml3/reference.I-D.nottingham-http-link-header.xml\">
<!ENTITY html401 SYSTEM \"http://xml.resource.org/public/rfc/bibxml4/reference.W3C.REC-html401-19991224.xml\">
<!ENTITY css21 SYSTEM \"http://xml.resource.org/public/rfc/bibxml4/reference.W3C.CR-CSS21-20070719.xml\">
]>
<?rfc toc=\"yes\"?>
<?rfc symrefs=\"yes\"?>
<?rfc compact=\"yes\"?>
<?rfc subcompact=\"no\"?>
<?rfc strict=\"no\"?>
<?rfc rfcedstyle=\"yes\"?>
<rfc category=\"info\" docName=\"draft-zyp-json-schema-03\" ipr=\"trust200902\">
\t<front>
\t\t<title abbrev=\"JSON Schema Media Type\">A JSON Media Type for Describing the Structure and Meaning of JSON Documents</title>
\t\t
\t\t<author fullname=\"Kris Zyp\" initials=\"K\" role=\"editor\" surname=\"Zyp\">
\t\t\t<organization>SitePen (USA)</organization>
\t\t\t<address>
\t\t\t\t<postal>
\t\t\t\t\t<street>530 Lytton Avenue</street>
\t\t\t\t\t<city>Palo Alto, CA 94301</city>
\t\t\t\t\t<country>USA</country>
\t\t\t\t</postal>
\t\t\t\t<phone>+1 650 968 8787</phone>
\t\t\t\t<email>kris@sitepen.com</email>
\t\t\t</address>
\t\t</author>
\t\t
\t\t<author fullname=\"Gary Court\" initials=\"G\" surname=\"Court\">
\t\t\t<address>
\t\t\t\t<postal>
\t\t\t\t\t<street></street>
\t\t\t\t\t<city>Calgary, AB</city>
\t\t\t\t\t<country>Canada</country>
\t\t\t\t</postal>
\t\t\t\t<email>gary.court@gmail.com</email>
\t\t\t</address>
\t\t</author>
\t\t
\t\t<date year=\"2011\" />
\t\t<workgroup>Internet Engineering Task Force</workgroup>
\t\t<keyword>JSON</keyword>
\t\t<keyword>Schema</keyword>
\t\t<keyword>JavaScript</keyword>
\t\t<keyword>Object</keyword>
\t\t<keyword>Notation</keyword>
\t\t<keyword>Hyper Schema</keyword>
\t\t<keyword>Hypermedia</keyword>
\t\t
\t\t<abstract>
\t\t\t<t>
\t\t\t\tJSON (JavaScript Object Notation) Schema defines the media type \"application/schema+json\", 
\t\t\t\ta JSON based format for defining 
\t\t\t\tthe structure of JSON data. JSON Schema provides a contract for what JSON 
\t\t\t\tdata is required for a given application and how to interact with it. JSON 
\t\t\t\tSchema is intended to define validation, documentation, hyperlink 
\t\t\t\tnavigation, and interaction control of JSON data. 
\t\t\t</t>
\t\t</abstract>
\t</front>
\t
\t<middle>
\t\t<section title=\"Introduction\">
\t\t\t<t>
\t\t\t\tJSON (JavaScript Object Notation) Schema is a JSON media type for defining 
\t\t\t\tthe structure of JSON data. JSON Schema provides a contract for what JSON 
\t\t\t\tdata is required for a given application and how to interact with it. JSON 
\t\t\t\tSchema is intended to define validation, documentation, hyperlink 
\t\t\t\tnavigation, and interaction control of JSON data. 
\t\t\t</t>
\t\t</section>
\t\t
\t\t<section title=\"Conventions\">
\t\t\t<t>
\t\t\t\t<!-- The text in this section has been copied from the official boilerplate, 
\t\t\t\tand should not be modified.-->
\t\t\t\t
\t\t\t\tThe key words \"MUST\", \"MUST NOT\", \"REQUIRED\", \"SHALL\", \"SHALL NOT\", \"SHOULD\", 
\t\t\t\t\"SHOULD NOT\", \"RECOMMENDED\", \"MAY\", and \"OPTIONAL\" in this document are to be
\t\t\t\tinterpreted as described in <xref target=\"RFC2119\">RFC 2119</xref>.
\t\t\t</t>
\t\t</section>
\t\t
\t\t<!-- ********************************************* -->
\t\t
\t\t<section title=\"Overview\">
\t\t\t<t>
\t\t\t\tJSON Schema defines the media type \"application/schema+json\" for 
\t\t\t\tdescribing the structure of other
\t\t\t\tJSON documents. JSON Schema is JSON-based and includes facilities 
\t\t\t\tfor describing the structure of JSON documents in terms of
\t\t\t\tallowable values, descriptions, and interpreting relations with other resources.
\t\t\t</t>
\t\t\t<t>
\t\t\t\tJSON Schema format is organized into several separate definitions. The first 
\t\t\t\tdefinition is the core schema specification. This definition is primary 
\t\t\t\tconcerned with describing a JSON structure and specifying valid elements
\t\t\t\tin the structure. The second definition is the Hyper Schema specification
\t\t\t\twhich is intended define elements in a structure that can be interpreted as
\t\t\t\thyperlinks.
\t\t\t\tHyper Schema builds on JSON Schema to describe the hyperlink structure of 
\t\t\t\tother JSON documents and elements of interaction. This allows user agents to be able to successfully navigate
\t\t\t\tJSON documents based on their schemas.
\t\t\t</t>
\t\t\t<t>
\t\t\t\tCumulatively JSON Schema acts as a meta-document that can be used to define the required type and constraints on
\t\t\t\tproperty values, as well as define the meaning of the property values
\t\t\t\tfor the purpose of describing a resource and determining hyperlinks
\t\t\t\twithin the representation. 
\t\t\t</t>
\t\t\t<figure>
\t\t\t\t<preamble>An example JSON Schema that describes products might look like:</preamble>
\t\t\t\t<artwork>
<![CDATA[\t
{
\t\"title\": \"Product\",
\t\"properties\": {
\t\t\"id\": {
\t\t\t\"type\": \"number\",
\t\t\t\"description\": \"Product identifier\",
\t\t\t\"required\": true
\t\t},
\t\t\"name\": {
\t\t\t\"description\": \"Name of the product\",
\t\t\t\"type\": \"string\",
\t\t\t\"required\": true
\t\t},
\t\t\"price\": {
\t\t\t\"required\": true,
\t\t\t\"type\": \"number\",
\t\t\t\"minimum\": 0,
\t\t\t\"required\": true
\t\t},
\t\t\"tags\": {
\t\t\t\"type\": \"array\",
\t\t\t\"items\": {
\t\t\t\t\"type\": \"string\"
\t\t\t}
\t\t}
\t},
\t\"links\": [{
\t\t\"rel\": \"full\",
\t\t\"href\": \"{id}\"
\t}, {
\t\t\"rel\": \"comments\",
\t\t\"href\": \"comments/?id={id}\"
\t}]
}
]]>
\t\t\t\t</artwork>
\t\t\t\t<postamble>
\t\t\t\t\tThis schema defines the properties of the instance JSON documents, 
\t\t\t\t\tthe required properties (id, name, and price), as well as an optional
\t\t\t\t\tproperty (tags). This also defines the link relations of the instance
\t\t\t\t\tJSON documents.
\t\t\t\t</postamble>
\t\t\t</figure>
\t\t\t
\t\t\t<section title=\"Terminology\">
\t\t\t\t<t>
\t\t\t\t\tFor this specification, <spanx style=\"strong\">schema</spanx> will be used to denote a JSON Schema 
\t\t\t\t\tdefinition, and an <spanx style=\"strong\">instance</spanx> refers to a JSON value that the schema 
\t\t\t\t\twill be describing and validating.
\t\t\t\t</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"Design Considerations\">
\t\t\t\t<t>
\t\t\t\t\tThe JSON Schema media type does not attempt to dictate the structure of JSON
\t\t\t\t\trepresentations that contain data, but rather provides a separate format
\t\t\t\t\tfor flexibly communicating how a JSON representation should be
\t\t\t\t\tinterpreted and validated, such that user agents can properly understand
\t\t\t\t\tacceptable structures and extrapolate hyperlink information
\t\t\t\t\twith the JSON document. It is acknowledged that JSON documents come
\t\t\t\t\tin a variety of structures, and JSON is unique in that the structure
\t\t\t\t\tof stored data structures often prescribes a non-ambiguous definite
\t\t\t\t\tJSON representation. Attempting to force a specific structure is generally
\t\t\t\t\tnot viable, and therefore JSON Schema allows for a great flexibility
\t\t\t\t\tin the structure of the JSON data that it describes.
\t\t\t\t</t>
\t\t\t\t<t>
\t\t\t\t\tThis specification is protocol agnostic.
\t\t\t\t\tThe underlying protocol (such as HTTP) should sufficiently define the
\t\t\t\t\tsemantics of the client-server interface, the retrieval of resource
\t\t\t\t\trepresentations linked to by JSON representations, and modification of 
\t\t\t\t\tthose resources. The goal of this
\t\t\t\t\tformat is to sufficiently describe JSON structures such that one can
\t\t\t\t\tutilize existing information available in existing JSON
\t\t\t\t\trepresentations from a large variety of services that leverage a representational state transfer
\t\t\t\t\tarchitecture using existing protocols.
\t\t\t\t</t>
\t\t\t</section>
\t\t</section>
\t\t
\t\t<section title=\"Schema/Instance Association\">
\t\t\t<t>
\t\t\t\tJSON Schema instances are correlated to their schema by the \"describedby\"
\t\t\t\trelation, where the schema is defined to be the target of the relation.
\t\t\t\tInstance representations may be of the \"application/json\" media type or
\t\t\t\tany other subtype. Consequently, dictating how an instance
\t\t\t\trepresentation should specify the relation to the schema is beyond the normative scope
\t\t\t\tof this document (since this document specifically defines the JSON
\t\t\t\tSchema media type, and no other), but it is recommended that instances
\t\t\t\tspecify their schema so that user agents can interpret the instance
\t\t\t\trepresentation and messages may retain the self-descriptive
\t\t\t\tcharacteristic, avoiding the need for out-of-band information about
\t\t\t\tinstance data. Two approaches are recommended for declaring the
\t\t\t\trelation to the schema that describes the meaning of a JSON instance's (or collection 
\t\t\t\tof instances) structure. A MIME type parameter named
\t\t\t\t\"profile\" or a relation of \"describedby\" (which could be defined by a Link header) may be used:
\t\t\t\t
\t\t\t\t<figure>
\t\t\t\t\t<artwork>
<![CDATA[\t
Content-Type: application/my-media-type+json;
              profile=http://json.com/my-hyper-schema
]]>
\t\t\t\t\t</artwork>
\t\t\t\t</figure>
\t\t\t\t
\t\t\t\tor if the content is being transferred by a protocol (such as HTTP) that
\t\t\t\tprovides headers, a Link header can be used:
\t\t\t\t
\t\t\t\t<figure>
\t\t\t\t\t<artwork>
<![CDATA[
Link: <http://json.com/my-hyper-schema>; rel=\"describedby\"
]]>
\t\t\t\t\t</artwork>
\t\t\t\t</figure>
\t\t\t\t
\t\t\t\tInstances MAY specify multiple schemas, to indicate all the schemas that 
\t\t\t\tare applicable to the data, and the data SHOULD be valid by all the schemas. 
\t\t\t\tThe instance data MAY have multiple schemas 
\t\t\t\tthat it is defined by (the instance data SHOULD be valid for those schemas). 
\t\t\t\tOr if the document is a collection of instances, the collection MAY contain 
\t\t\t\tinstances from different schemas. When collections contain heterogeneous 
\t\t\t\tinstances, the \"pathStart\" attribute MAY be specified in the 
\t\t\t\tschema to disambiguate which schema should be applied for each item in the 
\t\t\t\tcollection. However, ultimately, the mechanism for referencing a schema is up to the
\t\t\t\tmedia type of the instance documents (if they choose to specify that schemas
\t\t\t\tcan be referenced).
\t\t\t</t>
\t\t\t
\t\t\t<section title=\"Self-Descriptive Schema\">
\t\t\t\t<t>
\t\t\t\t\tJSON Schemas can themselves be described using JSON Schemas. 
\t\t\t\t\tA self-describing JSON Schema for the core JSON Schema can
\t\t\t\t\tbe found at <eref target=\"http://json-schema.org/schema\">http://json-schema.org/schema</eref> for the latest version or 
\t\t\t\t\t<eref target=\"http://json-schema.org/draft-03/schema\">http://json-schema.org/draft-03/schema</eref> for the draft-03 version. The hyper schema 
\t\t\t\t\tself-description can be found at <eref target=\"http://json-schema.org/hyper-schema\">http://json-schema.org/hyper-schema</eref> 
\t\t\t\t\tor <eref target=\"http://json-schema.org/draft-03/hyper-schema\">http://json-schema.org/draft-03/hyper-schema</eref>. All schemas
\t\t\t\t\tused within a protocol with media type definitions
\t\t\t\t\tSHOULD include a MIME parameter that refers to the self-descriptive
\t\t\t\t\thyper schema or another schema that extends this hyper schema:
\t\t\t\t\t
\t\t\t\t\t<figure>
\t\t\t\t\t\t<artwork>
<![CDATA[\t
Content-Type: application/json; 
              profile=http://json-schema.org/draft-03/hyper-schema
]]>
\t\t\t\t\t\t</artwork>
\t\t\t\t\t</figure>
\t\t\t\t</t>
\t\t\t</section>
\t\t</section>
\t\t
\t\t<section title=\"Core Schema Definition\">
\t\t\t<t>
\t\t\t\tA JSON Schema is a JSON Object that defines various attributes 
\t\t\t\t(including usage and valid values) of a JSON value. JSON
\t\t\t\tSchema has recursive capabilities; there are a number of elements
\t\t\t\tin the structure that allow for nested JSON Schemas.
\t\t\t</t>
\t\t\t
\t\t\t<figure>
\t\t\t\t<preamble>An example JSON Schema definition could look like:</preamble>
\t\t\t\t<artwork>
<![CDATA[
{
\t\"description\": \"A person\",
\t\"type\": \"object\",

\t\"properties\": {
\t\t\"name\": {
\t\t\t\"type\": \"string\"
\t\t},
\t\t\"age\": {
\t\t\t\"type\": \"integer\",
\t\t\t\"maximum\": 125
\t\t}
\t}
}
]]>
\t\t\t\t</artwork>
\t\t\t</figure>
\t\t\t
\t\t\t<t>
\t\t\t\tA JSON Schema object may have any of the following properties, called schema
\t\t\t\tattributes (all attributes are optional):
\t\t\t</t>
\t\t\t
\t\t\t<section title=\"type\">
\t\t\t\t<t>
\t\t\t\t\tThis attribute defines what the primitive type or the schema of the instance MUST be in order to validate. 
\t\t\t\t\tThis attribute can take one of two forms:

\t\t\t\t\t<list style=\"hanging\">
\t\t\t\t\t\t<t hangText=\"Simple Types\">
\t\t\t\t\t\t\tA string indicating a primitive or simple type. The following are acceptable string values:

\t\t\t\t\t\t\t<list style=\"hanging\">
\t\t\t\t\t\t\t\t<t hangText=\"string\">Value MUST be a string.</t>
\t\t\t\t\t\t\t\t<t hangText=\"number\">Value MUST be a number, floating point numbers are allowed. </t>
\t\t\t\t\t\t\t\t<t hangText=\"integer\">Value MUST be an integer, no floating point numbers are allowed. This is a subset of the number type.</t>
\t\t\t\t\t\t\t\t<t hangText=\"boolean\">Value MUST be a boolean. </t>
\t\t\t\t\t\t\t\t<t hangText=\"object\">Value MUST be an object.</t>
\t\t\t\t\t\t\t\t<t hangText=\"array\">Value MUST be an array.</t>
\t\t\t\t\t\t\t\t<t hangText=\"null\">Value MUST be null. Note this is mainly for purpose of being able use union types to define nullability. If this type is not included in a union, null values are not allowed (the primitives listed above do not allow nulls on their own).</t>
\t\t\t\t\t\t\t\t<t hangText=\"any\">Value MAY be of any type including null.</t>
\t\t\t\t\t\t\t</list>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tIf the property is not defined or is not in this list, then any type of value is acceptable. 
\t\t\t\t\t\t\tOther type values MAY be used for custom purposes, but minimal validators of the specification 
\t\t\t\t\t\t\timplementation can allow any instance value on unknown type values.
\t\t\t\t\t\t</t>
\t\t\t\t\t\t
\t\t\t\t\t\t<t hangText=\"Union Types\">
\t\t\t\t\t\t\tAn array of two or more simple type definitions. Each item in the array MUST be a simple type definition or a schema.
\t\t\t\t\t\t\tThe instance value is valid if it is of the same type as one of the simple type definitions, or valid by one of the schemas, in the array. 
\t\t\t\t\t\t</t>
\t\t\t\t\t</list>
\t\t\t\t</t>
\t\t\t\t
\t\t\t\t<figure>
\t\t\t\t\t<preamble>For example, a schema that defines if an instance can be a string or a number would be:</preamble>
\t\t\t\t\t<artwork>
<![CDATA[
{
\t\"type\": [\"string\", \"number\"]
}
]]></artwork>
\t\t\t\t</figure>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"properties\" anchor=\"properties\">
\t\t\t\t<t>This attribute is an object with property definitions that define the valid values of instance object property values. When the instance value is an object, the property values of the instance object MUST conform to the property definitions in this object. In this object, each property definition's value MUST be a schema, and the property's name MUST be the name of the instance property that it defines. The instance property value MUST be valid according to the schema from the property definition. Properties are considered unordered, the order of the instance properties MAY be in any order.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"patternProperties\">
\t\t\t\t<t>This attribute is an object that defines the schema for a set of property names of an object instance. The name of each property of this attribute's object is a regular expression pattern in the ECMA 262/Perl 5 format, while the value is a schema. If the pattern matches the name of a property on the instance object, the value of the instance's property MUST be valid against the pattern name's schema value.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"additionalProperties\" anchor=\"additionalProperties\">
\t\t\t\t<t>This attribute defines a schema for all properties that are not explicitly defined in an object type definition. If specified, the value MUST be a schema or a boolean. If false is provided, no additional properties are allowed beyond the properties defined in the schema. The default value is an empty schema which allows any value for additional properties.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"items\">
\t\t\t\t<t>This attribute defines the allowed items in an instance array, and MUST be a schema or an array of schemas. The default value is an empty schema which allows any value for items in the instance array.</t>
\t\t\t\t<t>When this attribute value is a schema and the instance value is an array, then all the items in the array MUST be valid according to the schema.</t>
\t\t\t\t<t>When this attribute value is an array of schemas and the instance value is an array, each position in the instance array MUST conform to the schema in the corresponding position for this array. This called tuple typing. When tuple typing is used, additional items are allowed, disallowed, or constrained by the <xref target=\"additionalItems\">\"additionalItems\"</xref> attribute using the same rules as <xref target=\"additionalProperties\">\"additionalProperties\"</xref> for objects.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"additionalItems\" anchor=\"additionalItems\">
\t\t\t\t<t>This provides a definition for additional items in an array instance when tuple definitions of the items is provided. This can be false to indicate additional items in the array are not allowed, or it can be a schema that defines the schema of the additional items.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"required\">
\t\t\t\t<t>This attribute indicates if the instance must have a value, and not be undefined. This is false by default, making the instance optional.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"dependencies\">
\t\t\t\t<t>This attribute is an object that defines the requirements of a property on an instance object. If an object instance has a property with the same name as a property in this attribute's object, then the instance must be valid against the attribute's property value (hereafter referred to as the \"dependency value\").</t>
\t\t\t\t<t>
\t\t\t\t\tThe dependency value can take one of two forms:
\t\t\t\t\t
\t\t\t\t\t<list style=\"hanging\">
\t\t\t\t\t\t<t hangText=\"Simple Dependency\">
\t\t\t\t\t\t\tIf the dependency value is a string, then the instance object MUST have a property with the same name as the dependency value.
\t\t\t\t\t\t\tIf the dependency value is an array of strings, then the instance object MUST have a property with the same name as each string in the dependency value's array.
\t\t\t\t\t\t</t>
\t\t\t\t\t\t<t hangText=\"Schema Dependency\">
\t\t\t\t\t\t\tIf the dependency value is a schema, then the instance object MUST be valid against the schema.
\t\t\t\t\t\t</t>
\t\t\t\t\t</list>
\t\t\t\t</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"minimum\">
\t\t\t\t<t>This attribute defines the minimum value of the instance property when the type of the instance value is a number.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"maximum\">
\t\t\t\t<t>This attribute defines the maximum value of the instance property when the type of the instance value is a number.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"exclusiveMinimum\">
\t\t\t\t<t>This attribute indicates if the value of the instance (if the instance is a number) can not equal the number defined by the \"minimum\" attribute. This is false by default, meaning the instance value can be greater then or equal to the minimum value.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"exclusiveMaximum\">
\t\t\t\t<t>This attribute indicates if the value of the instance (if the instance is a number) can not equal the number defined by the \"maximum\" attribute. This is false by default, meaning the instance value can be less then or equal to the maximum value.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"minItems\">
\t\t\t\t<t>This attribute defines the minimum number of values in an array when the array is the instance value.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"maxItems\">
\t\t\t\t<t>This attribute defines the maximum number of values in an array when the array is the instance value.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"uniqueItems\" anchor=\"uniqueItems\">
\t\t\t\t<t>This attribute indicates that all items in an array instance MUST be unique (contains no two identical values).</t>
\t\t\t\t<t>
\t\t\t\t\tTwo instance are consider equal if they are both of the same type and:
\t\t\t\t\t
\t\t\t\t\t<list>
\t\t\t\t\t\t<t>are null; or</t>
\t\t\t\t\t\t<t>are booleans/numbers/strings and have the same value; or</t>
\t\t\t\t\t\t<t>are arrays, contains the same number of items, and each item in the array is equal to the corresponding item in the other array; or</t>
\t\t\t\t\t\t<t>are objects, contains the same property names, and each property in the object is equal to the corresponding property in the other object.</t>
\t\t\t\t\t</list>
\t\t\t\t</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"pattern\">
\t\t\t\t<t>When the instance value is a string, this provides a regular expression that a string instance MUST match in order to be valid. Regular expressions SHOULD follow the regular expression specification from ECMA 262/Perl 5</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"minLength\">
\t\t\t\t<t>When the instance value is a string, this defines the minimum length of the string.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"maxLength\">
\t\t\t\t<t>When the instance value is a string, this defines the maximum length of the string.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"enum\">
\t\t\t\t<t>This provides an enumeration of all possible values that are valid for the instance property. This MUST be an array, and each item in the array represents a possible value for the instance value. If this attribute is defined, the instance value MUST be one of the values in the array in order for the schema to be valid. Comparison of enum values uses the same algorithm as defined in <xref target=\"uniqueItems\">\"uniqueItems\"</xref>.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"default\">
\t\t\t\t<t>This attribute defines the default value of the instance when the instance is undefined.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"title\">
\t\t\t\t<t>This attribute is a string that provides a short description of the instance property.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"description\">
\t\t\t\t<t>This attribute is a string that provides a full description of the of purpose the instance property.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"format\">
\t\t\t\t<t>This property defines the type of data, content type, or microformat to be expected in the instance property values. A format attribute MAY be one of the values listed below, and if so, SHOULD adhere to the semantics describing for the format. A format SHOULD only be used to give meaning to primitive types (string, integer, number, or boolean). Validators MAY (but are not required to) validate that the instance values conform to a format.</t>
\t\t\t\t
\t\t\t\t<t>
\t\t\t\t\tThe following formats are predefined:
\t\t\t\t\t
\t\t\t\t\t<list style=\"hanging\">
\t\t\t\t\t\t<t hangText=\"date-time\">This SHOULD be a date in ISO 8601 format of YYYY-MM-DDThh:mm:ssZ in UTC time. This is the recommended form of date/timestamp.</t>
\t\t\t\t\t\t<t hangText=\"date\">This SHOULD be a date in the format of YYYY-MM-DD. It is recommended that you use the \"date-time\" format instead of \"date\" unless you need to transfer only the date part.</t>
\t\t\t\t\t\t<t hangText=\"time\">This SHOULD be a time in the format of hh:mm:ss. It is recommended that you use the \"date-time\" format instead of \"time\" unless you need to transfer only the time part.</t>
\t\t\t\t\t\t<t hangText=\"utc-millisec\">This SHOULD be the difference, measured in milliseconds, between the specified time and midnight, 00:00 of January 1, 1970 UTC. The value SHOULD be a number (integer or float).</t>
\t\t\t\t\t\t<t hangText=\"regex\">A regular expression, following the regular expression specification from ECMA 262/Perl 5.</t>
\t\t\t\t\t\t<t hangText=\"color\">This is a CSS color (like \"#FF0000\" or \"red\"), based on <xref target=\"W3C.CR-CSS21-20070719\">CSS 2.1</xref>.</t>
\t\t\t\t\t\t<t hangText=\"style\">This is a CSS style definition (like \"color: red; background-color:#FFF\"), based on <xref target=\"W3C.CR-CSS21-20070719\">CSS 2.1</xref>.</t>
\t\t\t\t\t\t<t hangText=\"phone\">This SHOULD be a phone number (format MAY follow E.123).</t>
\t\t\t\t\t\t<t hangText=\"uri\">This value SHOULD be a URI.</t>
\t\t\t\t\t\t<t hangText=\"email\">This SHOULD be an email address.</t>
\t\t\t\t\t\t<t hangText=\"ip-address\">This SHOULD be an ip version 4 address.</t>
\t\t\t\t\t\t<t hangText=\"ipv6\">This SHOULD be an ip version 6 address.</t>
\t\t\t\t\t\t<t hangText=\"host-name\">This SHOULD be a host-name.</t>
\t\t\t\t\t</list>
\t\t\t\t</t>
\t\t\t\t
\t\t\t\t<t>Additional custom formats MAY be created. These custom formats MAY be expressed as an URI, and this URI MAY reference a schema of that format.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"divisibleBy\">
\t\t\t\t<t>This attribute defines what value the number instance must be divisible by with no remainder (the result of the division must be an integer.) The value of this attribute SHOULD NOT be 0.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"disallow\">
\t\t\t\t<t>This attribute takes the same values as the \"type\" attribute, however if the instance matches the type or if this value is an array and the instance matches any type or schema in the array, then this instance is not valid.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"extends\">
\t\t\t\t<t>The value of this property MUST be another schema which will provide a base schema which the current schema will inherit from. The inheritance rules are such that any instance that is valid according to the current schema MUST be valid according to the referenced schema. This MAY also be an array, in which case, the instance MUST be valid for all the schemas in the array. A schema that extends another schema MAY define additional attributes, constrain existing attributes, or add other constraints.</t>
\t\t\t\t<t>
\t\t\t\t\tConceptually, the behavior of extends can be seen as validating an
\t\t\t\t\tinstance against all constraints in the extending schema as well as
\t\t\t\t\tthe extended schema(s). More optimized implementations that merge
\t\t\t\t\tschemas are possible, but are not required. Some examples of using \"extends\":
\t\t\t\t\t
\t\t\t\t\t<figure>
\t\t\t\t\t\t<artwork>
<![CDATA[
{
\t\"description\": \"An adult\",
\t\"properties\": {
\t\t\"age\": {
\t\t\t\"minimum\": 21
\t\t}
\t},
\t\"extends\": {\"\$ref\": \"person\"}
}
]]>
\t\t\t\t\t\t</artwork>
\t\t\t\t\t</figure>
\t\t\t\t\t
\t\t\t\t\t<figure>
\t\t\t\t\t\t<artwork>
<![CDATA[
{
\t\"description\": \"Extended schema\",
\t\"properties\": {
\t\t\"deprecated\": {
\t\t\t\"type\": \"boolean\"
\t\t}
\t},
\t\"extends\": {\"\$ref\": \"http://json-schema.org/draft-03/schema\"}
}
]]>
\t\t\t\t\t\t</artwork>
\t\t\t\t\t</figure>
\t\t\t\t</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"id\">
\t\t\t\t<t>
\t\t\t\t\tThis attribute defines the current URI of this schema (this attribute is
\t\t\t\t\teffectively a \"self\" link). This URI MAY be relative or absolute. If
\t\t\t\t\tthe URI is relative it is resolved against the current URI of the parent
\t\t\t\t\tschema it is contained in. If this schema is not contained in any
\t\t\t\t\tparent schema, the current URI of the parent schema is held to be the
\t\t\t\t\tURI under which this schema was addressed. If id is missing, the current URI of a schema is
\t\t\t\t\tdefined to be that of the parent schema. The current URI of the schema
\t\t\t\t\tis also used to construct relative references such as for \$ref.
\t\t\t\t</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"\$ref\">
\t\t\t\t<t>
\t\t\t\t\tThis attribute defines a URI of a schema that contains the full representation of this schema. 
\t\t\t\t\tWhen a validator encounters this attribute, it SHOULD replace the current schema with the schema referenced by the value's URI (if known and available) and re-validate the instance. 
\t\t\t\t\tThis URI MAY be relative or absolute, and relative URIs SHOULD be resolved against the URI of the current schema.
\t\t\t\t</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"\$schema\">
\t\t\t\t<t>
\t\t\t\t\tThis attribute defines a URI of a JSON Schema that is the schema of the current schema. 
\t\t\t\t\tWhen this attribute is defined, a validator SHOULD use the schema referenced by the value's URI (if known and available) when resolving <xref target=\"hyper-schema\">Hyper Schema</xref><xref target=\"links\">links</xref>.
\t\t\t\t</t>
\t\t\t\t
\t\t\t\t<t>
\t\t\t\t\tA validator MAY use this attribute's value to determine which version of JSON Schema the current schema is written in, and provide the appropriate validation features and behavior. 
\t\t\t\t\tTherefore, it is RECOMMENDED that all schema authors include this attribute in their schemas to prevent conflicts with future JSON Schema specification changes.
\t\t\t\t</t>
\t\t\t</section>
\t\t</section>
\t\t
\t\t<section title=\"Hyper Schema\" anchor=\"hyper-schema\">
\t\t\t<t>
\t\t\t\tThe following attributes are specified in addition to those
\t\t\t\tattributes that already provided by the core schema with the specific
\t\t\t\tpurpose of informing user agents of relations between resources based
\t\t\t\ton JSON data. Just as with JSON
\t\t\t\tschema attributes, all the attributes in hyper schemas are optional.
\t\t\t\tTherefore, an empty object is a valid (non-informative) schema, and
\t\t\t\tessentially describes plain JSON (no constraints on the structures).
\t\t\t\tAddition of attributes provides additive information for user agents.
\t\t\t</t>
\t\t\t
\t\t\t<section title=\"links\" anchor=\"links\">
\t\t\t\t<t>
\t\t\t\t\tThe value of the links property MUST be an array, where each item 
\t\t\t\t\tin the array is a link description object which describes the link
\t\t\t\t\trelations of the instances.
\t\t\t\t</t>
\t\t\t\t
\t\t\t\t<section title=\"Link Description Object\">
\t\t\t\t\t<t>
\t\t\t\t\t\tA link description object is used to describe link relations. In 
\t\t\t\t\t\tthe context of a schema, it defines the link relations of the 
\t\t\t\t\t\tinstances of the schema, and can be parameterized by the instance
\t\t\t\t\t\tvalues. The link description format can be used on its own in
\t\t\t\t\t\tregular (non-schema documents), and use of this format can
\t\t\t\t\t\tbe declared by referencing the normative link description
\t\t\t\t\t\tschema as the the schema for the data structure that uses the 
\t\t\t\t\t\tlinks. The URI of the normative link description schema is: 
\t\t\t\t\t\t<eref target=\"http://json-schema.org/links\">http://json-schema.org/links</eref> (latest version) or
\t\t\t\t\t\t<eref target=\"http://json-schema.org/draft-03/links\">http://json-schema.org/draft-03/links</eref> (draft-03 version).
\t\t\t\t\t</t>
\t\t\t\t\t
\t\t\t\t\t<section title=\"href\">
\t\t\t\t\t\t<t>
\t\t\t\t\t\t\tThe value of the \"href\" link description property
\t\t\t\t\t\t\tindicates the target URI of the related resource. The value
\t\t\t\t\t\t\tof the instance property SHOULD be resolved as a URI-Reference per <xref target=\"RFC3986\">RFC 3986</xref>
\t\t\t\t\t\t\tand MAY be a relative URI. The base URI to be used for relative resolution
\t\t\t\t\t\t\tSHOULD be the URI used to retrieve the instance object (not the schema)
\t\t\t\t\t\t\twhen used within a schema. Also, when links are used within a schema, the URI 
\t\t\t\t\t\t\tSHOULD be parametrized by the property values of the instance 
\t\t\t\t\t\t\tobject, if property values exist for the corresponding variables
\t\t\t\t\t\t\tin the template (otherwise they MAY be provided from alternate sources, like user input).
\t\t\t\t\t\t</t>
\t\t\t\t\t\t
\t\t\t\t\t\t<t>
\t\t\t\t\t\t\tInstance property values SHOULD be substituted into the URIs where
\t\t\t\t\t\t\tmatching braces ('{', '}') are found surrounding zero or more characters,
\t\t\t\t\t\t\tcreating an expanded URI. Instance property value substitutions are resolved
\t\t\t\t\t\t\tby using the text between the braces to denote the property name
\t\t\t\t\t\t\tfrom the instance to get the value to substitute. 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<preamble>For example, if an href value is defined:</preamble>
\t\t\t\t\t\t\t\t<artwork>
<![CDATA[
http://somesite.com/{id}
]]>
\t\t\t\t\t\t\t\t</artwork>
\t\t\t\t\t\t\t\t<postamble>Then it would be resolved by replace the value of the \"id\" property value from the instance object.</postamble>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<preamble>If the value of the \"id\" property was \"45\", the expanded URI would be:</preamble>
\t\t\t\t\t\t\t\t<artwork>
<![CDATA[
http://somesite.com/45
]]>
\t\t\t\t\t\t\t\t</artwork>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tIf matching braces are found with the string \"@\" (no quotes) between the braces, then the 
\t\t\t\t\t\t\tactual instance value SHOULD be used to replace the braces, rather than a property value.
\t\t\t\t\t\t\tThis should only be used in situations where the instance is a scalar (string, 
\t\t\t\t\t\t\tboolean, or number), and not for objects or arrays.
\t\t\t\t\t\t</t>
\t\t\t\t\t</section>
\t\t\t\t\t
\t\t\t\t\t<section title=\"rel\">
\t\t\t\t\t\t<t>
\t\t\t\t\t\t\tThe value of the \"rel\" property indicates the name of the 
\t\t\t\t\t\t\trelation to the target resource. The relation to the target SHOULD be interpreted as specifically from the instance object that the schema (or sub-schema) applies to, not just the top level resource that contains the object within its hierarchy. If a resource JSON representation contains a sub object with a property interpreted as a link, that sub-object holds the relation with the target. A relation to target from the top level resource MUST be indicated with the schema describing the top level JSON representation.
\t\t\t\t\t\t</t>
\t\t\t\t\t\t
\t\t\t\t\t\t<t>
\t\t\t\t\t\t\tRelationship definitions SHOULD NOT be media type dependent, and users are encouraged to utilize existing accepted relation definitions, including those in existing relation registries (see <xref target=\"RFC4287\">RFC 4287</xref>). However, we define these relations here for clarity of normative interpretation within the context of JSON hyper schema defined relations:
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<list style=\"hanging\">
\t\t\t\t\t\t\t\t<t hangText=\"self\">
\t\t\t\t\t\t\t\t\tIf the relation value is \"self\", when this property is encountered in
\t\t\t\t\t\t\t\t\tthe instance object, the object represents a resource and the instance object is
\t\t\t\t\t\t\t\t\ttreated as a full representation of the target resource identified by
\t\t\t\t\t\t\t\t\tthe specified URI.
\t\t\t\t\t\t\t\t</t>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<t hangText=\"full\">
\t\t\t\t\t\t\t\t\tThis indicates that the target of the link is the full representation for the instance object. The object that contains this link possibly may not be the full representation.
\t\t\t\t\t\t\t\t</t>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<t hangText=\"describedby\">
\t\t\t\t\t\t\t\t\tThis indicates the target of the link is the schema for the instance object. This MAY be used to specifically denote the schemas of objects within a JSON object hierarchy, facilitating polymorphic type data structures.
\t\t\t\t\t\t\t\t</t>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<t hangText=\"root\">
\t\t\t\t\t\t\t\t\tThis relation indicates that the target of the link
\t\t\t\t\t\t\t\t\tSHOULD be treated as the root or the body of the representation for the
\t\t\t\t\t\t\t\t\tpurposes of user agent interaction or fragment resolution. All other
\t\t\t\t\t\t\t\t\tproperties of the instance objects can be regarded as meta-data
\t\t\t\t\t\t\t\t\tdescriptions for the data.
\t\t\t\t\t\t\t\t</t>
\t\t\t\t\t\t\t</list>
\t\t\t\t\t\t</t>
\t\t\t\t\t\t
\t\t\t\t\t\t<t>
\t\t\t\t\t\t\tThe following relations are applicable for schemas (the schema as the \"from\" resource in the relation):

\t\t\t\t\t\t\t<list style=\"hanging\">
\t\t\t\t\t\t\t\t<t hangText=\"instances\">This indicates the target resource that represents collection of instances of a schema.</t>
\t\t\t\t\t\t\t\t<t hangText=\"create\">This indicates a target to use for creating new instances of a schema. This link definition SHOULD be a submission link with a non-safe method (like POST).</t>
\t\t\t\t\t\t\t</list>
\t\t\t\t\t\t</t>
\t\t\t\t\t\t
\t\t\t\t\t\t<t>
\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<preamble>For example, if a schema is defined:</preamble>
\t\t\t\t\t\t\t\t<artwork>
<![CDATA[
{
\t\"links\": [{
\t\t\"rel\": \"self\",
\t\t\"href\": \"{id}\"
\t}, {
\t\t\"rel\": \"up\",
\t\t\"href\": \"{upId}\"
\t}, {
\t\t\"rel\": \"children\",
\t\t\"href\": \"?upId={id}\"
\t}]
}
]]>
\t\t\t\t\t\t\t\t</artwork>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t<preamble>And if a collection of instance resource's JSON representation was retrieved:</preamble>
\t\t\t\t\t\t\t\t<artwork>
<![CDATA[
GET /Resource/

[{
\t\"id\": \"thing\",
\t\"upId\": \"parent\"
}, {
\t\"id\": \"thing2\",
\t\"upId\": \"parent\"
}]
]]>
\t\t\t\t\t\t\t\t</artwork>
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\tThis would indicate that for the first item in the collection, its own
\t\t\t\t\t\t\t(self) URI would resolve to \"/Resource/thing\" and the first item's \"up\"
\t\t\t\t\t\t\trelation SHOULD be resolved to the resource at \"/Resource/parent\".
\t\t\t\t\t\t\tThe \"children\" collection would be located at \"/Resource/?upId=thing\".
\t\t\t\t\t\t</t>
\t\t\t\t\t</section>
\t\t\t\t\t
\t\t\t\t\t<section title=\"targetSchema\">
\t\t\t\t\t\t<t>This property value is a schema that defines the expected structure of the JSON representation of the target of the link.</t>
\t\t\t\t\t</section>
\t\t\t\t\t
\t\t\t\t\t<section title=\"Submission Link Properties\">
\t\t\t\t\t\t<t>
\t\t\t\t\t\t\tThe following properties also apply to link definition objects, and 
\t\t\t\t\t\t\tprovide functionality analogous to HTML forms, in providing a 
\t\t\t\t\t\t\tmeans for submitting extra (often user supplied) information to send to a server.
\t\t\t\t\t\t</t>
\t\t\t\t\t\t
\t\t\t\t\t\t<section title=\"method\">
\t\t\t\t\t\t\t<t>
\t\t\t\t\t\t\t\tThis attribute defines which method can be used to access the target resource. 
\t\t\t\t\t\t\t\tIn an HTTP environment, this would be \"GET\" or \"POST\" (other HTTP methods 
\t\t\t\t\t\t\t\tsuch as \"PUT\" and \"DELETE\" have semantics that are clearly implied by 
\t\t\t\t\t\t\t\taccessed resources, and do not need to be defined here). 
\t\t\t\t\t\t\t\tThis defaults to \"GET\".
\t\t\t\t\t\t\t</t>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t
\t\t\t\t\t\t<section title=\"enctype\">
\t\t\t\t\t\t\t<t>
\t\t\t\t\t\t\t\tIf present, this property indicates a query media type format that the server
\t\t\t\t\t\t\t\tsupports for querying or posting to the collection of instances at the target 
\t\t\t\t\t\t\t\tresource. The query can be 
\t\t\t\t\t\t\t\tsuffixed to the target URI to query the collection with
\t\t\t\t\t\t\t\tproperty-based constraints on the resources that SHOULD be returned from
\t\t\t\t\t\t\t\tthe server or used to post data to the resource (depending on the method).
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t<preamble>For example, with the following schema:</preamble>
\t\t\t\t\t\t\t\t\t<artwork>
<![CDATA[
{
\t\"links\": [{
\t\t\"enctype\": \"application/x-www-form-urlencoded\",
\t\t\"method\": \"GET\",
\t\t\"href\": \"/Product/\",
\t\t\"properties\": {
\t\t\t\"name\": {
\t\t\t\t\"description\": \"name of the product\"
\t\t\t}
\t\t}
\t}]
}
]]>
\t\t\t\t\t\t\t\t\t</artwork>
\t\t\t\t\t\t\t\t\t<postamble>This indicates that the client can query the server for instances that have a specific name.</postamble>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t<preamble>For example:</preamble>
\t\t\t\t\t\t\t\t\t<artwork>
<![CDATA[
/Product/?name=Slinky
]]>
\t\t\t\t\t\t\t\t\t</artwork>
\t\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t\tIf no enctype or method is specified, only the single URI specified by 
\t\t\t\t\t\t\t\tthe href property is defined. If the method is POST, \"application/json\" is 
\t\t\t\t\t\t\t\tthe default media type.
\t\t\t\t\t\t\t</t>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t
\t\t\t\t\t\t<section title=\"schema\">
\t\t\t\t\t\t\t<t>
\t\t\t\t\t\t\t\tThis attribute contains a schema which defines the acceptable structure of the submitted
\t\t\t\t\t\t\t\trequest (for a GET request, this schema would define the properties for the query string 
\t\t\t\t\t\t\t\tand for a POST request, this would define the body).
\t\t\t\t\t\t\t</t>
\t\t\t\t\t\t</section>
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"fragmentResolution\">
\t\t\t\t<t>
\t\t\t\t\tThis property indicates the fragment resolution protocol to use for
\t\t\t\t\tresolving fragment identifiers in URIs within the instance
\t\t\t\t\trepresentations. This applies to the instance object URIs and all
\t\t\t\t\tchildren of the instance object's URIs. The default fragment resolution
\t\t\t\t\tprotocol is \"slash-delimited\", which is defined below. Other fragment
\t\t\t\t\tresolution protocols MAY be used, but are not defined in this document.
\t\t\t\t</t>
\t\t\t\t
\t\t\t\t<t>
\t\t\t\t\tThe fragment identifier is based on <xref target=\"RFC2396\">RFC 2396, Sec 5</xref>, and defines the
\t\t\t\t\tmechanism for resolving references to entities within a document.
\t\t\t\t</t>
\t\t\t\t
\t\t\t\t<section title=\"slash-delimited fragment resolution\">
\t\t\t\t\t<t>
\t\t\t\t\t\tWith the slash-delimited fragment resolution protocol, the fragment
\t\t\t\t\t\tidentifier is interpreted as a series of property reference tokens that start with and
\t\t\t\t\t\tare delimited by the \"/\" character (\\x2F). Each property reference token
\t\t\t\t\t\tis a series of unreserved or escaped URI characters. Each property
\t\t\t\t\t\treference token SHOULD be interpreted, starting from the beginning of
\t\t\t\t\t\tthe fragment identifier, as a path reference in the target JSON
\t\t\t\t\t\tstructure. The final target value of the fragment can be determined by
\t\t\t\t\t\tstarting with the root of the JSON structure from the representation of
\t\t\t\t\t\tthe resource identified by the pre-fragment URI. If the target is a JSON
\t\t\t\t\t\tobject, then the new target is the value of the property with the name
\t\t\t\t\t\tidentified by the next property reference token in the fragment. If the
\t\t\t\t\t\ttarget is a JSON array, then the target is determined by finding the
\t\t\t\t\t\titem in array the array with the index defined by the next property
\t\t\t\t\t\treference token (which MUST be a number). The target is successively
\t\t\t\t\t\tupdated for each property reference token, until the entire fragment has
\t\t\t\t\t\tbeen traversed. 
\t\t\t\t\t</t>
\t\t\t\t\t
\t\t\t\t\t<t>
\t\t\t\t\t\tProperty names SHOULD be URI-encoded. In particular, any \"/\" in a 
\t\t\t\t\t\tproperty name MUST be encoded to avoid being interpreted as a property 
\t\t\t\t\t\tdelimiter.
\t\t\t\t\t</t>
\t\t\t\t\t
\t\t\t\t\t<t>
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<preamble>For example, for the following JSON representation:</preamble>
\t\t\t\t\t\t\t<artwork>
<![CDATA[
{
\t\"foo\": {
\t\t\"anArray\": [{
\t\t\t\"prop\": 44
\t\t}],
\t\t\"another prop\": {
\t\t\t\"baz\": \"A string\"
\t\t}
\t}
}
]]>
\t\t\t\t\t\t\t</artwork>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<preamble>The following fragment identifiers would be resolved:</preamble>
\t\t\t\t\t\t\t<artwork>
<![CDATA[
fragment identifier      resolution
-------------------      ----------
#                        self, the root of the resource itself
#/foo                    the object referred to by the foo property
#/foo/another%20prop     the object referred to by the \"another prop\"
                         property of the object referred to by the 
                         \"foo\" property
#/foo/another%20prop/baz the string referred to by the value of \"baz\"
                         property of the \"another prop\" property of 
                         the object referred to by the \"foo\" property
#/foo/anArray/0          the first object in the \"anArray\" array
]]>
\t\t\t\t\t\t\t</artwork>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</t>
\t\t\t\t</section>
\t\t\t\t
\t\t\t\t<section title=\"dot-delimited fragment resolution\">
\t\t\t\t\t<t>
\t\t\t\t\t\tThe dot-delimited fragment resolution protocol is the same as 
\t\t\t\t\t\tslash-delimited fragment resolution protocol except that the \".\" character 
\t\t\t\t\t\t(\\x2E) is used as the delimiter between property names (instead of \"/\") and 
\t\t\t\t\t\tthe path does not need to start with a \".\". For example, #.foo and #foo are a valid fragment
\t\t\t\t\t\tidentifiers for referencing the value of the foo propery.
\t\t\t\t\t</t>
\t\t\t\t</section>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"readonly\">
\t\t\t\t<t>This attribute indicates that the instance property SHOULD NOT be changed. Attempts by a user agent to modify the value of this property are expected to be rejected by a server.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"contentEncoding\">
\t\t\t\t<t>If the instance property value is a string, this attribute defines that the string SHOULD be interpreted as binary data and decoded using the encoding named by this schema property. <xref target=\"RFC2045\">RFC 2045, Sec 6.1</xref> lists the possible values for this property.</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"pathStart\">
\t\t\t\t<t>
\t\t\t\t\tThis attribute is a URI that defines what the instance's URI MUST start with in order to validate. 
\t\t\t\t\tThe value of the \"pathStart\" attribute MUST be resolved as per <xref target=\"RFC3986\">RFC 3986, Sec 5</xref>, 
\t\t\t\t\tand is relative to the instance's URI.
\t\t\t\t</t>
\t\t\t\t
\t\t\t\t<t>
\t\t\t\t\tWhen multiple schemas have been referenced for an instance, the user agent 
\t\t\t\t\tcan determine if this schema is applicable for a particular instance by 
\t\t\t\t\tdetermining if the URI of the instance begins with the the value of the \"pathStart\"
\t\t\t\t\tattribute. If the URI of the instance does not start with this URI, 
\t\t\t\t\tor if another schema specifies a starting URI that is longer and also matches the 
\t\t\t\t\tinstance, this schema SHOULD NOT be applied to the instance. Any schema 
\t\t\t\t\tthat does not have a pathStart attribute SHOULD be considered applicable 
\t\t\t\t\tto all the instances for which it is referenced.
\t\t\t\t</t>
\t\t\t</section>
\t\t\t
\t\t\t<section title=\"mediaType\">
\t\t\t\t<t>This attribute defines the media type of the instance representations that this schema is defining.</t>
\t\t\t</section>
\t\t</section>
\t\t
\t\t<section title=\"Security Considerations\">
\t\t\t<t>
\t\t\t\tThis specification is a sub-type of the JSON format, and 
\t\t\t\tconsequently the security considerations are generally the same as <xref target=\"RFC4627\">RFC 4627</xref>. 
\t\t\t\tHowever, an additional issue is that when link relation of \"self\"
\t\t\t\tis used to denote a full representation of an object, the user agent 
\t\t\t\tSHOULD NOT consider the representation to be the authoritative representation
\t\t\t\tof the resource denoted by the target URI if the target URI is not
\t\t\t\tequivalent to or a sub-path of the the URI used to request the resource 
\t\t\t\trepresentation which contains the target URI with the \"self\" link.
\t\t\t\t
\t\t\t\t<figure>
\t\t\t\t\t<preamble>For example, if a hyper schema was defined:</preamble>
\t\t\t\t\t<artwork>
<![CDATA[
{
\t\"links\": [{
\t\t\"rel\": \"self\",
\t\t\"href\": \"{id}\"
\t}]
}
]]>
\t\t\t\t\t</artwork>
\t\t\t\t</figure>
\t\t\t\t
\t\t\t\t<figure>
\t\t\t\t\t<preamble>And a resource was requested from somesite.com:</preamble>
\t\t\t\t\t<artwork>
<![CDATA[
GET /foo/
]]>
\t\t\t\t\t</artwork>
\t\t\t\t</figure>

\t\t\t\t<figure>
\t\t\t\t\t<preamble>With a response of:</preamble>
\t\t\t\t\t<artwork>
<![CDATA[
Content-Type: application/json; profile=/schema-for-this-data

[{
\t\"id\": \"bar\",
\t\"name\": \"This representation can be safely treated \\
\t\tas authoritative \"
}, {
\t\"id\": \"/baz\",
\t\"name\": \"This representation should not be treated as \\
\t\tauthoritative the user agent should make request the resource\\
\t\tfrom '/baz' to ensure it has the authoritative representation\"
}, {
\t\"id\": \"http://othersite.com/something\",
\t\"name\": \"This representation\\
\t\tshould also not be treated as authoritative and the target\\
\t\tresource representation should be retrieved for the\\
\t\tauthoritative representation\"
}]
]]>
\t\t\t\t\t</artwork>
\t\t\t\t</figure>
\t\t\t</t>
\t\t</section>
\t\t
\t\t<section title=\"IANA Considerations\">
\t\t\t<t>The proposed MIME media type for JSON Schema is \"application/schema+json\".</t>
\t\t\t<t>Type name: application</t>
\t\t\t<t>Subtype name: schema+json</t>
\t\t\t<t>Required parameters: profile</t>
\t\t\t<t>
\t\t\t\tThe value of the profile parameter SHOULD be a URI (relative or absolute) that 
\t\t\t\trefers to the schema used to define the structure of this structure (the 
\t\t\t\tmeta-schema). Normally the value would be http://json-schema.org/draft-03/hyper-schema,
\t\t\t\tbut it is allowable to use other schemas that extend the hyper schema's meta-
\t\t\t\tschema.
\t\t\t</t>
\t\t\t<t>Optional parameters: pretty</t>
\t\t\t<t>The value of the pretty parameter MAY be true or false to indicate if additional whitespace has been included to make the JSON representation easier to read.</t>
\t\t\t
\t\t\t<section title=\"Registry of Link Relations\">
\t\t\t\t<t>
\t\t\t\t\tThis registry is maintained by IANA per <xref target=\"RFC4287\">RFC 4287</xref> and this specification adds
\t\t\t\t\tfour values: \"full\", \"create\", \"instances\", \"root\".  New
\t\t\t\t\tassignments are subject to IESG Approval, as outlined in <xref target=\"RFC5226\">RFC 5226</xref>.
\t\t\t\t\tRequests should be made by email to IANA, which will then forward the
\t\t\t\t\trequest to the IESG, requesting approval.
\t\t\t\t</t>
\t\t\t</section>
\t\t</section>
\t</middle>
\t
\t<back>
\t\t<!-- References Section -->
\t\t<references title=\"Normative References\">
\t\t\t&rfc2045;
\t\t\t&rfc2119;
\t\t\t&rfc2396;
\t\t\t&rfc3339;
\t\t\t&rfc3986;
\t\t\t&rfc4287;
\t\t</references>
\t\t<references title=\"Informative References\">
\t\t\t&rfc2616;
\t\t\t&rfc4627;
\t\t\t&rfc5226;
\t\t\t&iddiscovery;
\t\t\t&uritemplate;
\t\t\t&linkheader;
\t\t\t&html401;
\t\t\t&css21;
\t\t</references>

\t\t<section title=\"Change Log\">
\t\t\t<t>
\t\t\t\t<list style=\"hanging\">
\t\t\t\t\t<t hangText=\"draft-03\">
\t\t\t\t\t\t<list style=\"symbols\">
\t\t\t\t\t\t\t<t>Added example and verbiage to \"extends\" attribute.</t>
\t\t\t\t\t\t\t<t>Defined slash-delimited to use a leading slash.</t>
\t\t\t\t\t\t\t<t>Made \"root\" a relation instead of an attribute.</t>
\t\t\t\t\t\t\t<t>Removed address values, and MIME media type from format to reduce confusion (mediaType already exists, so it can be used for MIME types).</t>
\t\t\t\t\t\t\t<t>Added more explanation of nullability.</t>
\t\t\t\t\t\t\t<t>Removed \"alternate\" attribute.</t>
\t\t\t\t\t\t\t<t>Upper cased many normative usages of must, may, and should.</t>
\t\t\t\t\t\t\t<t>Replaced the link submission \"properties\" attribute to \"schema\" attribute.</t>
\t\t\t\t\t\t\t<t>Replaced \"optional\" attribute with \"required\" attribute.</t>
\t\t\t\t\t\t\t<t>Replaced \"maximumCanEqual\" attribute with \"exclusiveMaximum\" attribute.</t>
\t\t\t\t\t\t\t<t>Replaced \"minimumCanEqual\" attribute with \"exclusiveMinimum\" attribute.</t>
\t\t\t\t\t\t\t<t>Replaced \"requires\" attribute with \"dependencies\" attribute.</t>
\t\t\t\t\t\t\t<t>Moved \"contentEncoding\" attribute to hyper schema.</t>
\t\t\t\t\t\t\t<t>Added \"additionalItems\" attribute.</t>
\t\t\t\t\t\t\t<t>Added \"id\" attribute.</t>
\t\t\t\t\t\t\t<t>Switched self-referencing variable substitution from \"-this\" to \"@\" to align with reserved characters in URI template.</t>
\t\t\t\t\t\t\t<t>Added \"patternProperties\" attribute.</t>
\t\t\t\t\t\t\t<t>Schema URIs are now namespace versioned.</t>
\t\t\t\t\t\t\t<t>Added \"\$ref\" and \"\$schema\" attributes.</t>
\t\t\t\t\t\t</list>
\t\t\t\t\t</t>
\t\t\t\t\t
\t\t\t\t\t<t hangText=\"draft-02\">
\t\t\t\t\t\t<list style=\"symbols\">
\t\t\t\t\t\t\t<t>Replaced \"maxDecimal\" attribute with \"divisibleBy\" attribute.</t>
\t\t\t\t\t\t\t<t>Added slash-delimited fragment resolution protocol and made it the default.</t>
\t\t\t\t\t\t\t<t>Added language about using links outside of schemas by referencing its normative URI.</t>
\t\t\t\t\t\t\t<t>Added \"uniqueItems\" attribute.</t>
\t\t\t\t\t\t\t<t>Added \"targetSchema\" attribute to link description object.</t>
\t\t\t\t\t\t</list>
\t\t\t\t\t</t>
\t\t\t\t\t
\t\t\t\t\t<t hangText=\"draft-01\">
\t\t\t\t\t\t<list style=\"symbols\">
\t\t\t\t\t\t\t<t>Fixed category and updates from template.</t>
\t\t\t\t\t\t</list>
\t\t\t\t\t</t>
\t\t\t\t\t
\t\t\t\t\t<t hangText=\"draft-00\">
\t\t\t\t\t\t<list style=\"symbols\">
\t\t\t\t\t\t\t<t>Initial draft.</t>
\t\t\t\t\t\t</list>
\t\t\t\t\t</t>
\t\t\t\t</list>
\t\t\t</t>
\t\t</section>
\t\t
\t\t<section title=\"Open Issues\">
\t\t\t<t>
\t\t\t\t<list>
\t\t\t\t\t<t>Should we give a preference to MIME headers over Link headers (or only use one)?</t>
\t\t\t\t\t<t>Should \"root\" be a MIME parameter?</t>
\t\t\t\t\t<t>Should \"format\" be renamed to \"mediaType\" or \"contentType\" to reflect the usage MIME media types that are allowed?</t>
\t\t\t\t\t<t>How should dates be handled?</t>
\t\t\t\t</list>
\t\t\t</t>
\t\t</section>
\t</back>
</rfc>
", "node_modules/fsevents/node_modules/json-schema/draft-zyp-json-schema-03.xml", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/draft-zyp-json-schema-03.xml");
    }
}
