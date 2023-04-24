<div class="w-full d-flex">
    <div class="h-10">

        <!-- OPtion File Input -->
        <input type="file" name="{{$name}}" id='image' class="form-control" {{$multiple=="true" ? 'multiple' : ''}}>
        <!-- Size Image With MB -->
        <p><label for="image" class="form-label">Size Image : <span id="size"></span></label></p>
        <p><label for="image" class="form-label">Size Max : <span id="max_size">{{$limit}} </span> MB</label></p>
    </div>
    <img src="" alt="" id="preview" width="120px" height="120px">
</div>


</div>
<script>
    const image = document.querySelector('#image')
    const preview = document.querySelector('#preview')
    const size = document.querySelector('#size')
    const max_size = document.querySelector('#max_size').innerHTML
    image.addEventListener('change', function() {
        let files = image.files
        let path = (window.URL || window.webkitURL).createObjectURL(files[0]);
        let sizeImage = Math.round(parseInt(files[0]["size"]) / 1024)

        if (parseInt(sizeImage)>parseInt(max_size)){
            alert('The Image Size Max then Limit')
            path=""
            files=[]
            sizeImage=""
            preview.setAttribute('src', '')
        }
        preview.setAttribute('src', path)
        size.innerHTML = sizeImage

    });
</script>