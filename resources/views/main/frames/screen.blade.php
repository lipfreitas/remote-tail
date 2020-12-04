<div class="container-fluid" id="screen">
    <pre id="terminal-output" style="overflow: hidden; overflow-y: hidden !important; white-space: pre-wrap;"></pre>
</div>
<script>
    window.onload = function(e) {
        console.log('loaded');
        var remote = window.RemoteTail();
        remote.Terminal.connect('{{$host}}', {{$port}}, 'terminal-output');
    }
</script>
