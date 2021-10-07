<style> 
  #heading{
    color:maroon;
  }
</style>
<form action="modules/email.php" name="smail" method="post" enctype="multipart/form-data">
  <P id="heading" class="fs-2 fw-bold">Send Mail</P>
  <div class="container">
    <div class="col-12 mt-4 mb-4">
      <label for="reciver" class="fw-bold">TO : </label>
      <select name="recive">
        <option value="students">Students</option>
        <option value="professors">Professors</option>
      </select>
    </div>
    <div class="col-12 mt-4 d-inline">
        <label for="reciver" class="mb-2 fw-bold" name="subj">Subject : </label>
        <input class="form-control" type="text" name="subject"/>
    </div>
    <div class="col-12 mt-4">
      <textarea class="form-control h-100" type="text" placeholder=""  required rows="5" cols="40" name="msg"></textarea>
    </div>
    
    <div class="col-12 mt-4">
      <label for="" class="me-4 fw-bold">Files to upload : </label>
      <input type="file" name="attm"/>
    </div>
    <div class="col-12 mt-4">
      <input type="submit" name="submit" value="Send" class="btn btn-primary"/>
    </div>
  </div>
</form>