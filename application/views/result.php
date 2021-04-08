<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>static/result.css">
    <title>CodeIgniter | Survey Form</title>
</head>
<body>
    <section>
        <div class="alert">
            Thanks for submitting this form! You have submitted this form <?= $this->session->userdata("counter") ?> time/s now.
        </div>
        <div class="form_data">
            <h4>Submitted Information</h4>
            <p>Name:</p>
            <p class="form_value"><?= $this->session->userdata("name") ?></p>
            <p>Dojo Location:</p>
            <p class="form_value"><?= $this->session->userdata("dojo_location") ?></p>
            <p>Favourite Language:</p>
            <p class="form_value"><?= $this->session->userdata("fave_language") ?></p>
            <p class="comment">Comment:</p>
            <p class="form_value"><?= $this->session->userdata("comment") ?></p>
            <a href="<?= base_url(); ?>">Go back</a>
        </div>
    </section>
</body>
</html>