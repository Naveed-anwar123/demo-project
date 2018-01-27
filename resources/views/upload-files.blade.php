<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>

<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

<meta name="csrf-token" content="{{ csrf_token() }}">

<form action="{{ url('dropzone') }}" method="post" class="dropzone dropzone-file-area dz-clickable" id="my-dropzone" style="width: 500px; margin-top: 50px;">

    <h3 class="sbold">Drop files here or click to upload</h3>
    <p> This is just a demo dropzone. Selected files are not actually uploaded. </p>
    <div class="dz-default dz-message"><span></span></div>
</form>



<script>
    Dropzone.autoDiscover = false;

    var myDropzone = new Dropzone("#my-dropzone", {
        url: "dropzone",
        headers: {
            'x-csrf-token': document.querySelectorAll('meta[name=csrf-token]')[0].getAttributeNode('content').value,
        },
        parallelUploads: 20,
        maxFilesize: 2,
        maxFiles: 20,
    });


</script>