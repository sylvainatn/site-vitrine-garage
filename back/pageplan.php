<?php

if (isset($_POST['submit'])) {

    include 'connexion_bdd.php';

    $content = $_POST['content'];

    // On met à jour le contenu de la page
    $contenuPage = $db->prepare("UPDATE page SET contenu = ? WHERE id = 4");
    $contenuPage->execute(array($content));
}

?>

<form action="" method="post">
    <textarea name="content">

        <?php

        include 'connexion_bdd.php';

        $contenuPage = $db->query("SELECT * FROM page WHERE id = 4");

        while ($donnees = $contenuPage->fetch()) {
            echo $donnees['contenu'];
        }

        ?>

        </textarea><br>
    <input type="submit" class="maj-btn" name="submit" value="Mettre à jour">
</form>

<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
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
        ],
        style_formats: [{
                title: 'Bold text',
                inline: 'b'
            },
            {
                title: 'Red text',
                inline: 'span',
                styles: {
                    color: '#ff0000'
                }
            },
            {
                title: 'Red header',
                block: 'h1',
                styles: {
                    color: '#ff0000'
                }
            },
            {
                title: 'Example 1',
                inline: 'span',
                classes: 'example1'
            },
            {
                title: 'Example 2',
                inline: 'span',
                classes: 'example2'
            },
            {
                title: 'Table styles'
            },
            {
                title: 'Table row 1',
                selector: 'tr',
                classes: 'tablerow1'
            }
        ],
        formats: {
            alignleft: {
                selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                classes: 'left'
            },
            aligncenter: {
                selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                classes: 'center'
            },
            alignright: {
                selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                classes: 'right'
            },
            alignfull: {
                selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                classes: 'full'
            },
            bold: {
                inline: 'span',
                'classes': 'bold'
            },
            italic: {
                inline: 'span',
                'classes': 'italic'
            },
            underline: {
                inline: 'span',
                'classes': 'underline',
                exact: true
            },
            strikethrough: {
                inline: 'del'
            },
            customformat: {
                inline: 'span',
                styles: {
                    color: '#00ff00',
                    fontSize: '20px'
                },
                attributes: {
                    title: 'My custom format'
                }
            }
        }
    });
</script>