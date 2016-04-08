<html lang="en">
    <head>
        <title>DWP </title>
        <meta charset="UTF-8">
        <meta name="author" content="Grror: Patrick, Carson, Sean, Chris">
        <link href="css/text.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    </head>

            <body>

                <div class="row" style="margin-top: 27%;">
                <div class="container col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                   <div class="jumbotron">
                   <h3>Group Grror's PHP File Uploader</h3>
                   </div>

                   <form action="upload.php" method="post" enctype="multipart/form-data">

                        <div class="input-group input-group-lg has-success">
                            <span class="input-group-addon" id="fTitle">
                                <span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
                                TITLE
                            </span>
                            <input type="text" placeholder="enter file title" aria-describedby="fTitle" name="fTitle" value=""  class="form-control form-control-success" id="fTitle" required/>
                        </div>

                        <div class="input-group input-group-lg uploadContainer" style="padding-top: 3%;">
                            <input type="file" value="" aria-describedby="fUpload" name="fUpload" class="form-control form-control-success" placeholder="upload file" id="fUpload" required/>
                            <span class="input-group-btn input-group-lg">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg activ">
                                    <span class="glyphicon glyphicon-floppy-open" aria-hidden="true"></span>
                                    UPLOAD
                                </button>
                            </span>
                        </div>

                   </form>
                   <hr>

               </div>
               </div>

               <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

           </body>
</html>
