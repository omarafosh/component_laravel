<div class="wrapper">
    <div class="button">
 
        <input type="file" id="{{$name}}" name="{{$name}}[]"  multiple>


        <span>Select Images</span>
        <span class="file-count"></span>
    </div>
    <div class="file-content">
        <div class="preview"></div>
    </div>
</div>


<script>
    let photos = document.querySelector('input[type=file]');
    let preview = document.querySelector('.preview');
    let delete_file = document.querySelector('.file-delete');
    let file_count = document.querySelector('.file-count');

    // Function To Get Alias File
    const aliasName = (filename, length_filename = 6) => {
        if (filename.length >= length_filename) {
            splitName = filename.split('.');
            filename = splitName[0].substring(0, length_filename + 1) + "... ." + splitName[1];
        }
        return filename
    }

    // Function To Get Size File
    const fileSize = (size) => {
        let firstSize = Math.floor(size / 1024);
        if (firstSize < 1024) {
            return firstSize + " KB";
        }
        return (firstSize / 1024).toFixed(2) + " MB";
    }

    if (delete_file) {
        delete_file.addEventListener('click', deleteFile);
        console.log(delete_file);
    }

    function deleteFile(target) {
        console.log();
    }

    // Display Thumbnil where is Select Photo
    photos.addEventListener('change', uploadImage);

    function uploadImage() {
        file_count.innerHTML += 1;
        for (let i = 0; i < photos.files.length; i++) {
            let file = photos.files[i]
            let fileName = file.name
            let shortName = aliasName(fileName);
            let fileSizes = fileSize(file.size);
            // Get Path Photo Before Uploaded
            let path = (window.URL || window.webkitURL).createObjectURL(file);
            // Card To Display Photo 
            let progressHTML = `<li class="element">
                                <img class="file-type" src=${path}>
                                <div class="details">
                                    <span class="name">${shortName}</span>
                                    <span class="percent">${fileSizes}</span>
                                </div>
                                <div class="percentg">
                                    <span class="file-delete">X</span>
                                    <span>&&</span>
                                </div>
                            </li>
                            <hr>`;
            preview.insertAdjacentHTML("afterbegin", progressHTML);
            console.log(photos.files[i]);
        }

    }
</script>
<style>
    * {
        --button-color: #677889;
        --button-height: 230px;
        --card-color: #908009;
        --size-image: 75px;
        --preview-height: 230px;
    }

    .wrapper {
        background-color: #F4EEE0;
        width: 230px;
    }

    .button {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100px;
        border: 1px dashed;
    }

    .file-content {
        display: flex;
        flex-direction: column;
        overflow-y: scroll;
        height: var(--preview-height);
        border: 1px dashed;
    }

    .file-type {
        width: 75px;
        height: 75px;
    }

    input[type="file"] {
        opacity: 0;
        min-height: 100px;
        position: absolute;
        height: 100px;
    }


    .preview .li {
        list-style: none;
    }

    .element {
        width: 100%;
        display: flex;
        padding: 5px;
        justify-content: space-between;
        align-items: center;
        height: 90px;
    }

    .details {
        display: flex;
        flex-direction: column;
    }



    .percentg {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 230px;
        flex-basis: fit-content;
    }

    .file-content::-webkit-scrollbar {
        width: 0px;
    }

    hr {
        margin: 0rem 0;
        border: 0;
        border-top: var(--bs-border-width) solid;
        opacity: .25;
        height: 3px;
        background: white;
        width: 96%;
        margin: auto;
    }
</style>