<style> 
  #heading{
    color: red;
  }
</style>
<p id="heading" class="fs-2 fw-bold ">Payment Form</p>
<form name="payment" action="modules/payments.php" method="post">
  <div class="form-floating mb-3 mt-5">
    <input type="text" class="form-control" id="floatingInput" placeholder="Userid" required name="userid">
    <label for="floatingInput">User Id</label>
  </div>
  <div class="form-floating">
    <input type="number" class="form-control" id="floatingPassword" placeholder="Payment" required name="ammount">
    <label for="floatingPassword">Payment</label>
  </div>
  <input class="btn btn-primary mt-3" type="submit" name="submit" value="Pay Bill">
</form>