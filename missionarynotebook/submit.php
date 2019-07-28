<?php require_once( "template/submitheader.php"); ?>

<br/>
    <br/>
    <br/>
    <!--gallery heading for File Upload-->
<h2 class="gallery-title">Missionary Notebook's<br/>Content Upload & Consent Form</h2>  
   <br/>
    <br/>
<div class="container">
<form method="post">
  <div>
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Content Description *" style="width: 100%; height: 50px;"></textarea>
                        </div>  
    </div>
    </form>
  <br/><br/>
     <div class="fileupload fileupload-new" data-provides="fileupload">
    <span class="btn btn-primary btn-file"><span class="fileupload-new">Select file</span>
    <span class="fileupload-exists">Change</span>         <input type="file" /></span>
    <span class="fileupload-preview"></span>
    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
  </div>
    </div> 

  <br/><br/>
<div class="container">     
<p class="medium-font">By filling out and electronically signing this form, I hereby grant permission and consent to the Missionary
Notebook for the use of the following photograph(s) or electronic media images or other forms of content such as writing or video as identified below for presentation for any legal use including but not limited to:
publicity, copyright purposes, illustration, advertising and web content.</p>
<form method="post">
                <h3>Permission to Post Content</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="date" class="form-control" placeholder="Today's Date *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Submit" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Content Description *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>    
</div>
<br><br>
<footer class="container-fluid text-center">
  <p>&copy; Missionary Notebook</p>  
  <form class="form-inline">Get the Latest Posts:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>
   <script src="fileupload.js"></script>
</body>
</html>
 