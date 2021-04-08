<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>static/style.css">
    <title>CodeIgniter | Survey Form</title>
</head>
<body>
    <header>
        <h1>Survey Form</h1>
    </header>
    <section>
        <form action="surveys/process_form" method="POST">
            <label>Your Name: <input type="text" name="name" value="<?= set_value('Name') ?>"></label>
<?php if($this->session->userdata("error_name") != NULL){ echo "<p>Name can't be empty!</p>"; $this->session->unset_userdata("error_name");}?>
            <label>Dojo Location:
                <select name="dojo_location">
                    <option value=""></option>
                    <option value="Vice City">Vice City</option>
                    <option value="San Andreas">San Andreas</option>
                    <option value="Liberty City">Liberty City</option>
                </select>
            </label>
<?php if($this->session->userdata("error_dojo_location") != NULL){ echo "<p>Dojo Location can't be empty!</p>"; $this->session->unset_userdata("error_dojo_location");}?>
            <label>Favorite Language:
                <select name="fave_language">
                    <option value=""></option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="PHP">PHP</option>
                    <option value="Python">Python</option>
                </select>
            </label>
<?php if($this->session->userdata("error_fave_language") != NULL){ echo "<p>Dojo Location can't be empty!</p>"; $this->session->unset_userdata("error_fave_language");}?>
            <label>Comment (optional):
                <textarea name="comment"></textarea>
            </label>
            <input type="submit" class="submit" value="Submit">
        </form>
    </section>
</body>
</html>