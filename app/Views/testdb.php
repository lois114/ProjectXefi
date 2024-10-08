<body>
    <div class="main">
        <form action="<?= route_to('export') ?>" method="POST">
            <textarea name="data" id="" cols="30" rows="10" placeholder="type anything and generate a pdf..."></textarea>
            <p class="card-text"><strong>ID:</strong> <?= esc($personne['id']) ?></p>
            <p>test</p>
            <input type="submit" value="submit">
        </form>
    </div>
    <script src="https://cdn.tiny.cloud/1/mw7vesckxxfqg12c9ezwqls9euqwdnqp2pxvbm6s0plb85j6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ]
        });
    </script>
</body>
</html>
