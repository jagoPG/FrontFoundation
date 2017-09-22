<?php

/* node_modules/fsevents/node_modules/asn1/README.md */
class __TwigTemplate_088b1829893ab866b260dab43a0537921a661613cde4401770e280d312921e45 extends Twig_Template
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
        $__internal_20f4da6bf194b51f0df2bbca43767c3d35220e7bfad23fae8f2a899fa5fa42e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f4da6bf194b51f0df2bbca43767c3d35220e7bfad23fae8f2a899fa5fa42e1->enter($__internal_20f4da6bf194b51f0df2bbca43767c3d35220e7bfad23fae8f2a899fa5fa42e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/asn1/README.md"));

        // line 1
        echo "node-asn1 is a library for encoding and decoding ASN.1 datatypes in pure JS.
Currently BER encoding is supported; at some point I'll likely have to do DER.

## Usage

Mostly, if you're *actually* needing to read and write ASN.1, you probably don't
need this readme to explain what and why.  If you have no idea what ASN.1 is,
see this: ftp://ftp.rsa.com/pub/pkcs/ascii/layman.asc

The source is pretty much self-explanatory, and has read/write methods for the
common types out there.

### Decoding

The following reads an ASN.1 sequence with a boolean.

    var Ber = require('asn1').Ber;

    var reader = new Ber.Reader(new Buffer([0x30, 0x03, 0x01, 0x01, 0xff]));

    reader.readSequence();
    console.log('Sequence len: ' + reader.length);
    if (reader.peek() === Ber.Boolean)
      console.log(reader.readBoolean());

### Encoding

The following generates the same payload as above.

    var Ber = require('asn1').Ber;

    var writer = new Ber.Writer();

    writer.startSequence();
    writer.writeBoolean(true);
    writer.endSequence();

    console.log(writer.buffer);

## Installation

    npm install asn1

## License

MIT.

## Bugs

See <https://github.com/mcavage/node-asn1/issues>.
";
        
        $__internal_20f4da6bf194b51f0df2bbca43767c3d35220e7bfad23fae8f2a899fa5fa42e1->leave($__internal_20f4da6bf194b51f0df2bbca43767c3d35220e7bfad23fae8f2a899fa5fa42e1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/asn1/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("node-asn1 is a library for encoding and decoding ASN.1 datatypes in pure JS.
Currently BER encoding is supported; at some point I'll likely have to do DER.

## Usage

Mostly, if you're *actually* needing to read and write ASN.1, you probably don't
need this readme to explain what and why.  If you have no idea what ASN.1 is,
see this: ftp://ftp.rsa.com/pub/pkcs/ascii/layman.asc

The source is pretty much self-explanatory, and has read/write methods for the
common types out there.

### Decoding

The following reads an ASN.1 sequence with a boolean.

    var Ber = require('asn1').Ber;

    var reader = new Ber.Reader(new Buffer([0x30, 0x03, 0x01, 0x01, 0xff]));

    reader.readSequence();
    console.log('Sequence len: ' + reader.length);
    if (reader.peek() === Ber.Boolean)
      console.log(reader.readBoolean());

### Encoding

The following generates the same payload as above.

    var Ber = require('asn1').Ber;

    var writer = new Ber.Writer();

    writer.startSequence();
    writer.writeBoolean(true);
    writer.endSequence();

    console.log(writer.buffer);

## Installation

    npm install asn1

## License

MIT.

## Bugs

See <https://github.com/mcavage/node-asn1/issues>.
", "node_modules/fsevents/node_modules/asn1/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/asn1/README.md");
    }
}