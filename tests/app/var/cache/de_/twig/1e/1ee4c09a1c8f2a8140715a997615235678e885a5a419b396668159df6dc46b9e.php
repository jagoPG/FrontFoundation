<?php

/* node_modules/fsevents/node_modules/tweetnacl/nacl.d.ts */
class __TwigTemplate_b888f6b773900befc33ce7018ed612f4e7d9ee3533a7697e6c6793ab597dca91 extends Twig_Template
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
        $__internal_c09eb5a58fd934fea94a8a393fe2e142b62ed4519761e4f7c1c2f9d7d52ba9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09eb5a58fd934fea94a8a393fe2e142b62ed4519761e4f7c1c2f9d7d52ba9be->enter($__internal_c09eb5a58fd934fea94a8a393fe2e142b62ed4519761e4f7c1c2f9d7d52ba9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/tweetnacl/nacl.d.ts"));

        // line 1
        echo "// Type definitions for TweetNaCl.js

export as namespace nacl;

declare var nacl: nacl;
export = nacl;

declare namespace nacl {
    export interface BoxKeyPair {
        publicKey: Uint8Array;
        secretKey: Uint8Array;
    }

    export interface SignKeyPair {
        publicKey: Uint8Array;
        secretKey: Uint8Array;
    }

    export interface secretbox {
        (msg: Uint8Array, nonce: Uint8Array, key: Uint8Array): Uint8Array;
        open(box: Uint8Array, nonce: Uint8Array, key: Uint8Array): Uint8Array | false;
        readonly keyLength: number;
        readonly nonceLength: number;
        readonly overheadLength: number;
    }

    export interface scalarMult {
        (n: Uint8Array, p: Uint8Array): Uint8Array;
        base(n: Uint8Array): Uint8Array;
        readonly scalarLength: number;
        readonly groupElementLength: number;
    }

    namespace box {
        export interface open {
            (msg: Uint8Array, nonce: Uint8Array, publicKey: Uint8Array, secretKey: Uint8Array): Uint8Array | false;
            after(box: Uint8Array, nonce: Uint8Array, key: Uint8Array): Uint8Array | false;
        }

        export interface keyPair {
            (): BoxKeyPair;
            fromSecretKey(secretKey: Uint8Array): BoxKeyPair;
        }
    }

    export interface box {
        (msg: Uint8Array, nonce: Uint8Array, publicKey: Uint8Array, secretKey: Uint8Array): Uint8Array;
        before(publicKey: Uint8Array, secretKey: Uint8Array): Uint8Array;
        after(msg: Uint8Array, nonce: Uint8Array, key: Uint8Array): Uint8Array;
        open: box.open;
        keyPair: box.keyPair;
        readonly publicKeyLength: number;
        readonly secretKeyLength: number;
        readonly sharedKeyLength: number;
        readonly nonceLength: number;
        readonly overheadLength: number;
    }

    namespace sign {
        export interface detached {
            (msg: Uint8Array, secretKey: Uint8Array): Uint8Array;
            verify(msg: Uint8Array, sig: Uint8Array, publicKey: Uint8Array): boolean;
        }

        export interface keyPair {
            (): SignKeyPair;
            fromSecretKey(secretKey: Uint8Array): SignKeyPair;
            fromSeed(secretKey: Uint8Array): SignKeyPair;
        }
    }

    export interface sign {
        (msg: Uint8Array, secretKey: Uint8Array): Uint8Array;
        open(signedMsg: Uint8Array, publicKey: Uint8Array): Uint8Array | null;
        detached: sign.detached;
        keyPair: sign.keyPair;
        readonly publicKeyLength: number;
        readonly secretKeyLength: number;
        readonly seedLength: number;
        readonly signatureLength: number;
    }

    export interface hash {
        (msg: Uint8Array): Uint8Array;
        readonly hashLength: number;
    }
}

declare interface nacl {
    randomBytes(n: number): Uint8Array;
    secretbox: nacl.secretbox;
    scalarMult: nacl.scalarMult;
    box: nacl.box;
    sign: nacl.sign;
    hash: nacl.hash;
    verify(x: Uint8Array, y: Uint8Array): boolean;
    setPRNG(fn: (x: Uint8Array, n: number) => void): void;
}
";
        
        $__internal_c09eb5a58fd934fea94a8a393fe2e142b62ed4519761e4f7c1c2f9d7d52ba9be->leave($__internal_c09eb5a58fd934fea94a8a393fe2e142b62ed4519761e4f7c1c2f9d7d52ba9be_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/tweetnacl/nacl.d.ts";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Type definitions for TweetNaCl.js

export as namespace nacl;

declare var nacl: nacl;
export = nacl;

declare namespace nacl {
    export interface BoxKeyPair {
        publicKey: Uint8Array;
        secretKey: Uint8Array;
    }

    export interface SignKeyPair {
        publicKey: Uint8Array;
        secretKey: Uint8Array;
    }

    export interface secretbox {
        (msg: Uint8Array, nonce: Uint8Array, key: Uint8Array): Uint8Array;
        open(box: Uint8Array, nonce: Uint8Array, key: Uint8Array): Uint8Array | false;
        readonly keyLength: number;
        readonly nonceLength: number;
        readonly overheadLength: number;
    }

    export interface scalarMult {
        (n: Uint8Array, p: Uint8Array): Uint8Array;
        base(n: Uint8Array): Uint8Array;
        readonly scalarLength: number;
        readonly groupElementLength: number;
    }

    namespace box {
        export interface open {
            (msg: Uint8Array, nonce: Uint8Array, publicKey: Uint8Array, secretKey: Uint8Array): Uint8Array | false;
            after(box: Uint8Array, nonce: Uint8Array, key: Uint8Array): Uint8Array | false;
        }

        export interface keyPair {
            (): BoxKeyPair;
            fromSecretKey(secretKey: Uint8Array): BoxKeyPair;
        }
    }

    export interface box {
        (msg: Uint8Array, nonce: Uint8Array, publicKey: Uint8Array, secretKey: Uint8Array): Uint8Array;
        before(publicKey: Uint8Array, secretKey: Uint8Array): Uint8Array;
        after(msg: Uint8Array, nonce: Uint8Array, key: Uint8Array): Uint8Array;
        open: box.open;
        keyPair: box.keyPair;
        readonly publicKeyLength: number;
        readonly secretKeyLength: number;
        readonly sharedKeyLength: number;
        readonly nonceLength: number;
        readonly overheadLength: number;
    }

    namespace sign {
        export interface detached {
            (msg: Uint8Array, secretKey: Uint8Array): Uint8Array;
            verify(msg: Uint8Array, sig: Uint8Array, publicKey: Uint8Array): boolean;
        }

        export interface keyPair {
            (): SignKeyPair;
            fromSecretKey(secretKey: Uint8Array): SignKeyPair;
            fromSeed(secretKey: Uint8Array): SignKeyPair;
        }
    }

    export interface sign {
        (msg: Uint8Array, secretKey: Uint8Array): Uint8Array;
        open(signedMsg: Uint8Array, publicKey: Uint8Array): Uint8Array | null;
        detached: sign.detached;
        keyPair: sign.keyPair;
        readonly publicKeyLength: number;
        readonly secretKeyLength: number;
        readonly seedLength: number;
        readonly signatureLength: number;
    }

    export interface hash {
        (msg: Uint8Array): Uint8Array;
        readonly hashLength: number;
    }
}

declare interface nacl {
    randomBytes(n: number): Uint8Array;
    secretbox: nacl.secretbox;
    scalarMult: nacl.scalarMult;
    box: nacl.box;
    sign: nacl.sign;
    hash: nacl.hash;
    verify(x: Uint8Array, y: Uint8Array): boolean;
    setPRNG(fn: (x: Uint8Array, n: number) => void): void;
}
", "node_modules/fsevents/node_modules/tweetnacl/nacl.d.ts", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/tweetnacl/nacl.d.ts");
    }
}
