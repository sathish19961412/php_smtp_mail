<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sentmail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
   <section>
       <div class="container">
           <div class="row">
              <div class="col-md-12">
                <form action="sentmail.php" method="post">
                  
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Subject</label>
                        <input type="text" class="form-control" name="subject" id="exampleInputName" aria-describedby="NameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputMobile" class="form-label">Message</label>
                        <input type="text" class="form-control"  name="message" id="exampleInputMobile">
                    </div>
                    <button type="submit" class="btn btn-primary" name="send">Submit</button>
                </form>
              </div>
           </div>
        </div>
   </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
